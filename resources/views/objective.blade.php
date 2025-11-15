@extends('layout')
@section('content')

    <div class="works-about-area reverse bg-gray overflow-hidden">
        <div class="container">
            <div class="works-about-items default-padding-bottom">
                <div class="row align-center">

                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Thumb">
                         
                        </div>
                    </div>
                    
                    <div class="col-lg-6 info">
                            <h5>Our Objectives</h5>
                        <h2 class="title">{{ $objective['title'] }}</h2>
                        <p>
                           {{ $objective['description'] }}
                        </p>
                      
                        <a class="btn btn-theme effect btn-sm">Back to Home</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<h2></h2>
<h2></h2>

@endsection