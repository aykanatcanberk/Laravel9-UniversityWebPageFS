@extends('layouts.frontbase2')

@section('title', $menu->title.' Contents')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a class="active">{{$menu->title}}</a></li>
            </ul>

        </div>
    </div>
    <section id="courseArchive">
        <div class="container">
            <div class="row">
                <!-- start course content -->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="courseArchive_content">

                        @foreach($contents as $rs)
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog_archive wow fadeInUp">
                                    <div class="blogimg_container">
                                        <a href="#" class="blog_img">
                                            <img alt="img"
                                                 src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                 style="height:1024px;width: 576px">
                                        </a>
                                    </div>
                                    <h2 class="blog_title"><a href="blog-single.html"> {{$rs->title}}</a></h2>
                                    <p class="blog_summary">İçeriği görmek için tıklayın</p>
                                    <a class="blog_readmore" href="{{route('$content',['id'=>$rs->id])}}">Read
                                        More</a>
                                </div>
                            </div>
                        @endforeach
                        <nav>
                            <ul class="pagination wow fadeInLeft">
                                <li><a href="#"><span aria-hidden="true">«</span><span
                                            class="sr-only">Previous</span></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span aria-hidden="true">»</span><span
                                            class="sr-only">Next</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
