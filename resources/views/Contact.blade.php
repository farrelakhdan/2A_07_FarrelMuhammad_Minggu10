@extends('welcome')

@section('link_rel')
    <link rel="stylesheet" href="css/contactStyle.css">
@endsection

@section('content')
<div class="box1">
    <video class="video-slide" src="video5.mp4" autoplay muted loop></video>
    <div class="service">
        <div class="container">
            <h3>CONTACT PERSON</h3>
            @foreach ($list_data as $item)
            <div class="box">
                <div class="col-4">
                    <div class="icon">
                        <img src="wa.png">
                    </div>
                    <h4>WHATSAPP</h4>
                    <p>{{$item->whatsapp}}</p>
                </div>
                <div class="col-4">
                    <div class="icon">
                        <img src="fb.svg">
                    </div>
                    <h4>FACEBOOK</h4>
                    <p>{{$item->facebook}}</p>
                </div>
                <div class="col-4">
                    <div class="icon">
                        <img src="ig.jpg">
                    </div>
                    <h4>INSTAGRAM</h4>
                    <p>{{$item->instagram}}</p>
                </div>
                <div class="col-4">
                    <div class="icon">
                        <img src="tw.jpg">
                    </div>
                    <h4>TWITTER</h4>
                    <p>{{$item->twitter}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
@endsection