<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->paginate(5);
        return view('admin.blog.blog-index', compact('blog'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.blog-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'content'     =>  'required',
            'image'         =>  'required|mimes:jpeg,jpg,png|max:2048',
            'category' => 'string|max:30'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/blogs'), $new_name);
        $form_data = array(
            'title'    => $title = $request->title,
            'content'  => $request->content,
            'image'    => $new_name,
            'category' => $request->category,
            'slug' => Str::slug($title)

        );

        Blog::create($form_data);

        return redirect('dashboard/blogs')->with('message', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog-show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog-edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            $path = public_path('images/blogs' . $blog->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $extension = $request->image->extension();
            $fileName = Str::slug($request->title, '_') . '_' . md5(date('Y-m-d H:i:s'));
            $fileName = $fileName . '.' . $extension;
            $blog->image = $fileName;
            $request->image->move('images/blogs/', $fileName);
        }
        $blog->save();
        return redirect('dashboard/blogs')->with('message', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('dashboard/blogs')->with('message', 'Data is successfully deleted');
    }
}
