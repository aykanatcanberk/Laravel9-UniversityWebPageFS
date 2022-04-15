@extends('layouts.adminbase')

@section('title','Show Menu:'.$data->title)
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <div class="main-sparkline8-hd">
                    <h3 style="color: #0a6aa1">Show Menu</h3>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="main-sparkline8-hd">

</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <div class="sparkline8-list mt-b-30">
        <div class="sparkline8-hd">

        </div>
        <div class="sparkline8-graph">
            <div class="basic-login-form-ad">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="basic-login-inner">
                            <a href="/admin/menu/edit/{{$data->id}}" class="btn btn-block btn-primary btn-sm"> <h4 class="box-title">Edit</h4></a>
                            <a href="/admin/menu/destroy/{{$data->id}}" onclick="return confirm('Are you sure for deleting?')" class="btn btn-block btn-primary btn-sm"> <h4 class="box-title">Delete</h4></a>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Details</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 500px">Id</th>
                                        <td>{{$data->id}}</td>
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
                                        <th>Images</th>
                                        <td></td>
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


                                </table>

                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard</a></li>

                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Event</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="all-professors.html">All Professors</a>
                                        </li>
                                        <li><a href="add-professor.html">Add Professor</a>
                                        </li>
                                        <li><a href="edit-professor.html">Edit Professor</a>
                                        </li>
                                        <li><a href="professor-profile.html">Professor Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="all-students.html">All Students</a>
                                        </li>
                                        <li><a href="add-student.html">Add Student</a>
                                        </li>
                                        <li><a href="edit-student.html">Edit Student</a>
                                        </li>
                                        <li><a href="student-profile.html">Student Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="all-courses.html">All Courses</a>
                                        </li>
                                        <li><a href="add-course.html">Add Course</a>
                                        </li>
                                        <li><a href="edit-course.html">Edit Course</a>
                                        </li>
                                        <li><a href="course-profile.html">Courses Info</a>
                                        </li>
                                        <li><a href="course-payment.html">Courses Payment</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="library-assets.html">Library Assets</a>
                                        </li>
                                        <li><a href="add-library-assets.html">Add Library Asset</a>
                                        </li>
                                        <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="departments.html">Departments List</a>
                                        </li>
                                        <li><a href="add-department.html">Add Departments</a>
                                        </li>
                                        <li><a href="edit-department.html">Edit Departments</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="mailbox.html">Inbox</a>
                                        </li>
                                        <li><a href="mailbox-view.html">View Mail</a>
                                        </li>
                                        <li><a href="mailbox-compose.html">Compose Mail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="google-map.html">Google Map</a>
                                        </li>
                                        <li><a href="data-maps.html">Data Maps</a>
                                        </li>
                                        <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                        </li>
                                        <li><a href="x-editable.html">X-Editable</a>
                                        </li>
                                        <li><a href="code-editor.html">Code Editor</a>
                                        </li>
                                        <li><a href="tree-view.html">Tree View</a>
                                        </li>
                                        <li><a href="preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="images-cropper.html">Images Cropper</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top">
                                        <li><a href="bar-charts.html">Bar Charts</a>
                                        </li>
                                        <li><a href="line-charts.html">Line Charts</a>
                                        </li>
                                        <li><a href="area-charts.html">Area Charts</a>
                                        </li>
                                        <li><a href="rounded-chart.html">Rounded Charts</a>
                                        </li>
                                        <li><a href="c3.html">C3 Charts</a>
                                        </li>
                                        <li><a href="sparkline.html">Sparkline Charts</a>
                                        </li>
                                        <li><a href="peity.html">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="static-table.html">Static Table</a>
                                        </li>
                                        <li><a href="data-table.html">Data Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="formsmob" class="collapse dropdown-header-top">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="lock.html">Lock</a>
                                        </li>
                                        <li><a href="password-recovery.html">Password Recovery</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="500.html">500 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
