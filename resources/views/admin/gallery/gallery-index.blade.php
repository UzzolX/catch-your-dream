@extends('admin.admin-index')
@section('content')

<style>
    .create {
        margin-bottom: 20px;
    }
    .create a button {
        font-size: 16px;
        border: 0px;
        background: #36ccba !important;
        text-align: center;
    }
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
    </div>

    

    <!-- Content Row -->
    <div class="row">
        
        <div class="col-xl-12">
            <div class="create">
                <a href="{{route('gallery.create')}}" enctype="multipart/form-data">
                    <button type="button" class="btn btn-info btn-sm">Add Gallery</button>
        
                </a>
            </div>
        
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
        
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th class="line" scope="col">Image</th>
                        <th class="line" scope="col">Title</th>
                        <th class="line" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-success">
        
                    @foreach ($gallery as $row)
                    <tr>
                        <td>
                            @if($row->image=='default.jpg')
                            <img width="80" height="40" src="{{asset('images/gallery/default.jpg')}}">
                            @else
                            <img width="50" height="40" src="{{asset('images/gallery/'.$row->image)}}"
                                alt="">
                            @endif
        
                        </td>
                        <td>{{str_limit($row->title,30)}}</td>
                        <td>
                            <a class=" btn-bg-dark" href="{{route('gallery.edit',[$row->id])}}"> <button type="button" class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{route('gallery.delete',[$row->id])}}">
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$gallery->links()}}
        </div>
        
    </div>

</div>

@endsection
