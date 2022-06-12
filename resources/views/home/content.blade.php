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
                    <section id="studentsTestimonial">
                        <div class="container">
                            <!-- Our courses titile -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="title_area">
                                        <h2 class="title_two">What is your comment?</h2>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Our courses titile -->

                            <!-- Start Our courses content -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="studentsTestimonial_content">


                                    </div>
                                    <!-- End single student testimonial -->
                                    <!-- start single student testimonial -->
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="row">
                                            <!-- start single student testimonial -->
                                            @foreach($reviews as $rs)
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="single_stsTestimonial wow fadeInUp">
                                                        <div class="review-heading">
                                                            <div><a href="#"><i
                                                                        class="fa-user-o">{{$rs->user->name}}</i></a>
                                                            </div>
                                                            <div><a href="#"><i
                                                                        class="fa-user-o">{{$rs->created_at}}</i></a>
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <strong>{{$rs->subject}}</strong>
                                                            <p>{{$rs->review}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <form action="{{route('storecomment')}}" class="contactform"
                                              method="post">
                                            @csrf
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        @include('home.messages')
                                                        <h4 class="text-uppercase">Write your
                                                            Review</h4>
                                                        <p>Your email adress will not be published.</p>

                                                        <p class="comment-form-author">
                                                            <label for="author"><span
                                                                    class="required"></span></label>
                                                            <input type="hidden" name="content_id"
                                                                   value="{{$data->id}}">
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author"> <span
                                                                    class="required"></span></label>
                                                            <input type="text" name="subject"
                                                                   placeholder="Subject">
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label for="review"></label>
                                                            <textarea name="review"
                                                                      placeholder="Your review"></textarea>
                                                        </p>
                                                        <div class="form-group">
                                                            <label>Rating</label>
                                                            <select class="comment-form-comment"
                                                                    name="rate">
                                                                <option selected="">Choose...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>


                                                            </select>
                                                        </div>
                                                        @auth
                                                            <p class="form-submit">
                                                                <button type="submit"
                                                                        class="btn btn-primary">
                                                                    Submit
                                                                </button>
                                                            </p>
                                                        @else
                                                            <a href="/login" class="btn btn-primary">
                                                                For Submit
                                                                Your Review,Please
                                                                Login </a>
                                                        @endauth
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection
