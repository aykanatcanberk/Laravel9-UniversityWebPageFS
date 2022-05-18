<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Content Image List</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive-sm py-4">
        <div class="midde_cont">
            <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">

                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th style="width: 40px">Update</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>

                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif

                                </td>

                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.menu.edit',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('admin.menu.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure for deleting?')">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- /.box-body -->

            </div>
        </div>
    </div>
</div>
