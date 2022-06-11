@extends('layouts.frontbase2')

@section('title', 'User Panel' )
@section('content')

    <section id="contact">

        <div class="col-md-4">
            <div>User Menu</div>
            @include('home.user.usermenu')
        </div>
            <div class="col-md-12">
                <div class="contact_address wow fadeInRight">
                    <div class="address_group">
                    </div>
                    <h3>User Profile</h3>
                    @include('profile.show')


                </div>
            </div>

    </section>

@endsection
