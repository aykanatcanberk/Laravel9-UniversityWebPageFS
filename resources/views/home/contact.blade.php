@extends('layouts.frontbase2')

@section('title', 'Contact | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title_area">
                    <h2 class="title_two"></h2>
                    <span></span>
                    <h2>Contact Form</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="contact_form wow fadeInLeft" method="post">
                    <form action="" class="contactform" method="post">
                        @csrf
                        <p class="comment-form-author">
                            <label for="author"><span class="required"></span></label>
                            <input type="text" name="name" placeholder="Name & Surname" size="30" required="required">
                        </p>
                        <p class="comment-form-author">
                            <label for="author"> <span class="required"></span></label>
                            <input type="text" name="phone" placeholder="Phone Number" size="30" required="required">
                        </p>
                        <p class="comment-form-email">
                            <label for="email"><span class="required"></span></label>
                            <input type="email" name="email"  placeholder="Email" aria-required="true" required="required">
                        </p>
                        <p class="comment-form-url">
                            <label for="subject"></label>
                            <input type="text" name="subject" placeholder="Subject">
                        </p>
                        <p class="comment-form-comment">
                            <label for="message"></label>
                            <textarea name="message" cols="45" rows="8" placeholder="Your Message" aria-required="true" required="required"></textarea>
                        </p>
                        <p class="form-submit">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="contact_address wow fadeInRight">
                    <h3>Contact Information</h3>
                    <div class="address_group">
                        {{!!$setting->contact}}
                    </div>
                    <div class="address_group">
                        <ul class="footer_social">
                            <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
