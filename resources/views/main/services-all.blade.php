<x-layout>
@include('partials._header')

<div id="blog" class="blog-area content-less default-padding bottom-less">

    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>OUR OBJECTIVES</h4>
                    <h2 class="title">Latest From Our Objectives</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="container mb-30">
        <form action="/objectives" method="GET" class="blog-search-box">
            <input 
                type="text" 
                class="blog-search-input" 
                name="objectives"
                placeholder="Search Objectives..." 
                value="{{ request('objectives') }}"
            >
            <button class="blog-search-btn" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Objective List -->
    <div class="container">
        <div class="blog-items">
            <div class="row">

                @forelse ($objectives as $objective)
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="/objectives/{{ $objective->id }}">
                                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="cats">
                                    <a href="/objectives/{{ $objective->id }}">Objective</a>
                                </div>

                                <h4>
                                    <a href="/objectives/{{ $objective->id }}">
                                        {{ $objective->title }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 text-center">
                        <h4>No objectives found.</h4>
                    </div>
                @endforelse

            </div>
        </div>
    </div>

</div>

</x-layout>
