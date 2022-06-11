@extends('layouts.frontbase2')

@section('title','User Panel')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2></h2>
            </div>
            <div class="row">
                <div class="user-select-all">
                    <h5>User Profile</h5>
                    <hr>
                    <div class="col-lg-3 col-md-6">
                        @include('home.user.usermenu')
                    </div>
                </div>
                <div class="col-lg-10">
                    <h5></h5>
                    <hr>
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Salon Address</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="">Terms of use</a>
                                <a href="">Privacy policy</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
        <div class="container copyright">

        </div>
    </div>
@endsection
