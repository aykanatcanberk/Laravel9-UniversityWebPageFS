
@extends('layouts.frontbase')

@section('title', 'University Webpage')
@section('description', $setting->description)
@section('keywords',$setting->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))




@section('content')

    <section id="aboutUs">
        <div class="row">
            {!!$setting->about!!}
        </div>
    </section>




@endsection
