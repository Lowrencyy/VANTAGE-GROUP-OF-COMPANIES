@extends('layout')
@include('partials._header')
@include('partials._hero')
@include('partials._mission')


@section('content')


 <div class="thumb-services-area carousel-shadow relative bg-cover mt-5">
    <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title">OUR OBJECTIVES</h2>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="services-items services-carousel owl-carousel owl-theme text-center">
                
                @if(count($objectives) == 0 ) 
                <p class="text-center">No Objectives Found</p>

                @endif

                @foreach ($objectives as $objective )
                     <div class="item">
                    <div class="icon">
                        <img src="assets/img/icon/1.png" alt="Icon">
                    </div>
                    <div class="info">
                        <h4>{{ $objective['title'] }}</h4>
                        <p>
                          {{ $objective['description'] }}
                        </p>
                        <a href="/objectives/{{ $objective['id']}}">Discover More <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                @endforeach

          
        </div>
    </div>

 </div>

@include('partials.whychoose')

@include('partials._services')

@include('partials._footer')

@endsection








