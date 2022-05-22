@extends('layouts.adminwindow')

@section('title','Content Image Gallery ')

@section('content')

    <h3>{{$content->title}}</h3>
    <hr>
    <form role ="form" action="{{route('admin.image.store',['cid'=>$content->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label>Title       </label>
            <input class="form-control" type="text" name="title" placeholder="Title">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
                <input class="input-group-text"  type="submit" value="Upload">
            </div>
        </div>
    </form>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">content Image List</h4>

            </div>
            <div class="pull-right">
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">Id</th>
                <th>Title</th>
                <th>Image</th>
                <th style="width:40px">Update</th>
                <th style="width:40px">Delete</th>

            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                        @endif

                    </td>

                    <td><a href="{{route('admin.image.update',['cid'=>$content->id,'id'=>$rs->id])}}"class="btn btn-dark">Edit </a> </td>
                    <td><a href="{{route('admin.image.delete',['cid'=>$content->id,'id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="collapse collapse-box" id="border-table">
            <div class="code-box">
                <div class="clearfix">

                </div>

            </div>
        </div>
    </div>
    </div>

    </div>
@endsection



