<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::latest()->paginate(5);
        return view('admin.gallery.gallery-index', compact('gallery'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('admin.gallery.gallery-create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'image'         =>  'required|mimes:jpeg,jpg,png|max:2048'

        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/gallery'), $new_name);
        $form_data = array(
            'title'    => $title = $request->title,
            'image'    => $new_name

        );

        Gallery::create($form_data);

        return redirect('dashboard/gallery')->with('message', 'Gallery created successfully.');
    }



    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.gallery-edit', compact('gallery'));
    }



    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        if ($request->hasFile('image')) {
            $path = public_path('images/gallery' . $gallery->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $extension = $request->image->extension();
            $fileName = Str::slug($request->title, '_') . '_' . md5(date('Y-m-d H:i:s'));
            $fileName = $fileName . '.' . $extension;
            $gallery->image = $fileName;
            $request->image->move('images/gallery/', $fileName);
        }
        $gallery->save();
        return redirect('dashboard/gallery')->with('message', 'Gallery is successfully updated');
    }



    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect('dashboard/gallery')->with('message', 'Data is successfully deleted');
    }
}
