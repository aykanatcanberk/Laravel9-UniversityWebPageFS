@extends('layouts.adminbase')

@section('title','Show Content:'.$data->title)
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Show Content</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <a href="/admin/content/edit/{{$data->id}}" class="btn cur-p btn-primary">
                <button type="button" class="btn cur-p btn-primary" style="width: 150px ">Edit</button>
            </a>
        </div>

        <div class="col-sm-3">

            <a href="/admin/content/destroy/{{$data->id}}"
               onclick="return confirm('Are you sure for deleting?')">
                <button type="button" class="btn cur-p btn-danger" style="width: 170px">Delete</button>
            </a>

        </div>

        <div class="container-fluid">
            <div class="col-md-150">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Details</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Menu</th>
                                    <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($data->menu,$data->menu->title ) }}</td>
                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>

                                </tr>

                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>

                                <tr>
                                    <th>Detail</th>
                                    <td>
                                    <td>{!!$data->detail !!}</td>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Images</th>
                                    <td>@if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                        @endif</td>

                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>

                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
