@extends('layouts.adminwindow')

@section('title','Show Message:'.$data->title)
@section('content')
    <div class="table-responsive-sm py-4">
        <div class="midde_cont">
            <div class="heading1 margin_0">
                <h2>Detail Message Data</h2>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{$data->content->title}}</td>
                </tr>

                <tr>
                    <th>Name & Surname</th>
                    <td>{{$data->user->name}}</td>
                </tr>

                <tr>
                    <th>Subject</th>
                    <td>{{$data->subject }}</td>
                </tr>

                <tr>
                    <th>Review</th>
                    <td>{{$data->review}}</td>
                </tr>
                <tr>
                    <th>Rate</th>
                    <td>{{$data->rate}}</td>
                </tr>


                <tr>
                    <th>IP number</th>
                    <td>{{$data->IP}}</td>

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

                <tr>
                    <th>Admin Note</th>
                    <td>
                        <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="status">
                                <option>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>

                            </select>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Updated Comment </button>
                            </div>
                        </form>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
