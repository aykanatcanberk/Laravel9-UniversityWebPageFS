@extends('layouts.frontbase2')

@section('title', $data->title)


@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$data->title}}</h2>
                </div>

                <div class="col-12">
                    <a href="">{{$data->title}}</a>
                    <a href="">{{$data->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                Home Messages
                <h2>{{$data->title}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{Storage::url($data->image)}}" alt="Image">
                        </div>
                        @foreach($images as $rs)
                            <div class="service-img">
                                <img src="{{Storage::url($rs->image)}}" alt="Image">
                            </div>
                        @endforeach
                        <h3> Bilgi </h3>
                        <p>
                            {{$data->description}}
                        </p>
                        <h3> Detaylar </h3>

                        <p>{!!$data->detail!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
