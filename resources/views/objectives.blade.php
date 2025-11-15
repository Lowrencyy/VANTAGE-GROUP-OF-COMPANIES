@extends('layout')
@section('content')
<h1>{{ $heading }}</h1>


 <div class="thumb-services-area carousel-shadow relative bg-cover">
    <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Services</h4>
                        <h2 class="title">What we do?</h2>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="services-items services-carousel owl-carousel owl-theme text-center">
                
                @if(count($objectives) == 0 ) 
                <p>No Listing Found</p>

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




@endsection

