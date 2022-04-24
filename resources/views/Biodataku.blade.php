@extends('welcome')
@section('link_rel')
  <!-- Select2 -->
  <link rel="stylesheet" href="css/aboutStyle.css">
@endsection

@section('content')
<div class="box">
  <video class="video-slide" src="video2.mp4" autoplay muted loop></video>
    <div class="container">
      <div class="navbar">
        <div class="logo1">
          <h1>resume</h1>
        </div>
        <div class="logo2">
        <a href="">edit resume</a>
        </div>
      </div>

      <div class="main-box">
        <div class="box-1">
          <h1>professional details</h1>
          <img src="foto1.jpeg" alt="">
          <div class="details">
            <div class="details1">
              <p class="p1">NAME</p>
              <p class="p1">AGE</p>
              <p class="p1">LOCATION</p>
              <p class="p1">EXPERIENCE</p>
              <p class="p1">DEGREE</p>
            </div>
            <div class="details2">
              @foreach ($list_data as $item)
                <p class="p2">{{$item->nama}}</p>
                <p class="p2">{{$item->age}}</p>
                <p class="p2">{{$item->location}}</p>
                <p class="p2">{{$item->experience}}</p>
                <p class="p2">{{$item->degree}}</p>
              @endforeach
            </div>
          </div>
        </div>

        <div class="box-2">
          <div class="box-2-1">
            
              <h1>about me</h1>
            
          </div>

          <div class="box-2-2">
            <div class="details">
              <div class="details-1">
              <div class="details1">
                <p class="p1">NAME</p>
                <p class="p1">AGE</p>
                <p class="p1">LOCATION</p>
                <p class="p1">EXPERIENCE</p>
                <p class="p1">DEGREE</p>
              </div>
              <div class="details2">
                @foreach ($list_data as $item)
                <p class="p2">{{$item->nama}}</p>
                <p class="p2">{{$item->age}}</p>
                <p class="p2">{{$item->location}}</p>
                <p class="p2">{{$item->experience}}</p>
                <p class="p2">{{$item->degree}}</p>
              @endforeach
              </div>
              </div>
              <div class="details-1">
              <div class="details1">
                <p class="p1">PHONE</p>
                <p class="p1">EMAIL</p>
                <p class="p1">CAREER LEVEL</p>
                <p class="p1">FAX</p>
                <p class="p1">WEBSITE</p>
              </div>
              <div class="details2">
                @foreach ($list_data as $item)
                <p class="p2">{{$item->phone}}</p>
                <p class="p2">{{$item->email}}</p>
                <p class="p2">{{$item->career}}</p>
                <p class="p2">{{$item->fax}}</p>
                <p class="p2">{{$item->website}}</p>
              @endforeach
              </div>
              </div>
              
            </div>
            <h3>I AM STUDENT AT POLINEMA</h1>
          </div>

          <div class="box-2-3">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odio nulla, illum vitae cum ad aspernatur deleniti ut earum quasi, dolorum quo numquam repellendus maxime minima atque pariatur quibusdam quos?
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="about.js"></script>
@endsection