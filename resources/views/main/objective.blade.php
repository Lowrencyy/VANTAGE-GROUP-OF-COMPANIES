@include('partials._header')

<x-layout>

    <div class="works-about-area reverse bg-gray overflow-hidden">
        <div class="container mt-50">
            <div class="works-about-items default-padding-bottom">
                <div class="row align-center">

                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Thumb">
                        </div>
                    </div>

                    <div class="col-lg-6 info">
                        <h5>Our Objectives</h5>

                        <h2 class="title">{{ $objective->title }}</h2>

                        <p>{{ $objective->description }}</p>

                        <a href="/objectives" class="btn btn-theme effect btn-sm">
                            Read More Objectives
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layout>
