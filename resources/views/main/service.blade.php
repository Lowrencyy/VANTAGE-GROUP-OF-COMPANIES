<x-layout>

@include('partials._header')

@php
    // explode the comma-separated list from DB
    $servicesList = explode(',', $service->servicesLists);
@endphp



  <div class="works-about-area overflow-hidden mt-50">
        <div class="container">
            <div class="works-about-items default-padding">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h5>Our Services</h5>

                        <h2 class="title">{{ $service->title }}</h2>

                        <p>
                            {{ $service->description }}
                        </p>

                        <ul>
                            @foreach ($servicesList as $item)
                                <li><h5>{{ trim($item) }}</h5></li>
                            @endforeach
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

</x-layout>