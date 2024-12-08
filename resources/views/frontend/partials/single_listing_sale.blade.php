@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area style-pb-200 bg-7">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $property->title }}</h2>

            <ul>
                <li>
                    <a href="{{route('index.main')}}">
                        Home
                    </a>
                </li>

                <li class="active">{{ $property->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Single Listing Area -->
<div class="single-listing-area pb-70">
    <div class="container">
        <div class="row">
            <div class="single-properties-item single-listing-warp">
                <div class="row">
                    <div class="col-lg-4 col-md-4 pe-0">
                        <div class="properties-bg-img">
                            <img src="{{ asset('storage/' . $property->agent_image) }}" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 ps-0">
                        <div class="properties-content">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $property->title }}</h3>
                                <h3 class="price">$ {{ $property->price }}</h3>
                            </div>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $property->location }}
                            </p>
                            <ul class="feature-list">
                                <li>
                                    <i class="fa-solid fa-bed"></i>
                                    {{ $property->bedrooms }} Bed
                                </li>
                                <li>
                                    <i class="fa-solid fa-bath"></i>
                                    {{ $property->bathrooms }} Bath
                                </li>
                                <li>
                                    <i class="fa-solid fa-house"></i>
                                    {{ $property->size }} Sqft
                                </li>
                            </ul>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <div class="agent-user">
                                        <img src="{{ asset('frontend/assets/images/agents/agent-1.jpg') }}" alt="Image">
                                        <span>By {{ $property->user->name }}</span>
                                    </div>
                                </li>
                                <li>
                                    <span>{{ $property->agent_phone }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="properties-details-content">
                    <div class="properties-about">
                        <h3>Property Description</h3>
                        <p>{!!$property->description !!}</p>
                    </div>

                    <div class="gap-mb-50"></div>

                    <div class="gap-mb-20"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="map-location">
                                <h3>Location Map</h3>
                                <iframe src="https://www.google.com/maps/embed?pb={{ $property->map_embed_code }}" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="gap-mb-50"></div>

                    {{-- <div class="similar-properties">
                        <h3>Similar Properties</h3>
                        <div class="row">
                            @foreach($similarProperties as $similarProperty)
                            <div class="col-xl-4 col-md-6 mix for-sale">
                                <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-4s">
                                    <div class="properties-img">
                                        <a href="{{ route('single_listing', $similarProperty->id) }}">
                                            <img src="{{ asset('storage/' . $similarProperty->image) }}" alt="Image">
                                        </a>
                                        <span>Sale</span>
                                        <button class="wish">
                                            <i class="ri-heart-3-line"></i>
                                        </button>
                                    </div>
                                    <div class="properties-content">
                                        <div class="border-style">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('single_listing', $similarProperty->id) }}">
                                                    <h3>{{ $similarProperty->title }}</h3>
                                                </a>
                                                <h3 class="price">$ {{ $similarProperty->price }}</h3>
                                            </div>
                                            <p>
                                                <i class="fa-solid fa-location-dot"></i>
                                                {{ $similarProperty->location }}
                                            </p>
                                            <ul class="feature-list">
                                                <li>
                                                    <i class="fa-solid fa-bed"></i>
                                                    {{ $similarProperty->bedrooms }} Bed
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-bath"></i>
                                                    {{ $similarProperty->bathrooms }} Bath
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-house"></i>
                                                    {{ $similarProperty->size }} Sqft
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="user d-flex justify-content-between align-items-center">
                                            <li>
                                                <div class="agent-user">
                                                    <img src="{{ asset('frontend/assets/images/agents/agent-3.jpg') }}" alt="Image">
                                                    <span>By {{ $similarProperty->agent_name }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <span>{{ $similarProperty->agent_phone }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Single Listing Area -->
@include('frontend.inc.footer')

@endsection
