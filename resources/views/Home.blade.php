@extends('welcome')
@section('link_rel')
  <!-- Select2 -->
  <link rel="stylesheet" href="css/homeStyle.css">
@endsection

@section('content')
<section class="home">
  <video class="video-slide active" src="video1.mp4" autoplay muted loop></video>
  <video class="video-slide" src="video2.mp4" autoplay muted loop></video>
  <video class="video-slide" src="video3.mp4" autoplay muted loop></video>
  <video class="video-slide" src="video4.mp4" autoplay muted loop></video>
  <video class="video-slide" src="video5.mp4" autoplay muted loop></video>

  <div class="content">
    @foreach ($list_data as $item)
    <h1>{{$item->username}}.<br><span>BLOG</span></h1>
    @endforeach
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis eos assumenda ex cumque exercitationem vero voluptas fuga, sed aliquid distinctio id ullam est facilis asperiores consequuntur totam at eveniet.</p>
    <a href="">Meluncur</a>
  </div>

  <div class="slider-navigation">
    <div class="nav-btn active"></div>
    <div class="nav-btn"></div>
    <div class="nav-btn"></div>
    <div class="nav-btn"></div>
    <div class="nav-btn"></div>
  </div>
</section>
<script src="js/home.js"></script>
@endsection