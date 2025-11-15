@extends('layout')

@include('partials._header')



@section('content')

   <div class="works-about-area reverse bg-gray overflow-hidden">
      
    </div>

  <div class="works-about-area overflow-hidden">
        <div class="container">
            <div class="works-about-items default-padding">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h5>Our Services</h5>
                        <h2 class="title">{{ $service['title'] }}</h2>
                        <p>
                            {{ $service['description'] }}
                        </p>
                        <ul>
                            <li>
                                <h5>100% Client Satisfaction</h5>
                            </li>
                            <li>
                                <h5>World Class Worker</h5>
                            </li>
                        </ul>
                        <a class="btn btn-theme effect btn-sm">Back To Home</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Thumb">
                            <div class="fun-fact">
                                <div class="timer" data-to="875" data-speed="5000"></div>
                                <span class="medium">Completed Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





 

<h2></h2>
<h2></h2>

@endsection