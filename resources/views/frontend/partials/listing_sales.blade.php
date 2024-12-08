@extends('frontend.layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area bg-9">
    <div class="container">
        <div class="page-title-content">
            <h2>Property Sales</h2>

            <ul>
                <li>
                    <a href="{{route('index.main')}}">
                        Home
                    </a>
                </li>

                <li class="active">Property Sales</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End Listing Area -->
<div class="listing-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget filter-form">
                        <h3>Filter search</h3>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control style" placeholder="Current Location">
                                <i class="ri-map-pin-2-line"></i>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>All Categories</option>
                                    <option value="1">House</option>
                                    <option value="2">Hotel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>All Statuses</option>
                                    <option value="1">House</option>
                                    <option value="2">Hotel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Price</option>
                                    <option value="1">$2000</option>
                                    <option value="2">$3000</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Bedroom</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Any</option>
                                            <option value="1">2</option>
                                            <option value="2">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Bedrooms</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Any</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Floors</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Parking</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Any</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Building Size</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Min SF</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Building Size</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Max SF</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Lot Size</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Min</option>
                                            <option value="1">14''</option>
                                            <option value="2">20''</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Max</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>Min</option>
                                            <option value="1">25''</option>
                                            <option value="2">33''</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-wrap">
                                <h3>Amenities</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-20">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Parking
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-2">
                                                <label class="form-check-label" for="flexCheckDefault-2">
                                                    Refrigerator
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-3">
                                                <label class="form-check-label" for="flexCheckDefault-3">
                                                    Laundry
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-4">
                                                <label class="form-check-label" for="flexCheckDefault-4">
                                                    Window Coverings
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-5">
                                                <label class="form-check-label" for="flexCheckDefault-5">
                                                    Barbeque
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-6">
                                                <label class="form-check-label" for="flexCheckDefault-6">
                                                    Grage
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-20">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-7">
                                                <label class="form-check-label" for="flexCheckDefault-7">
                                                    Parking
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-8">
                                                <label class="form-check-label" for="flexCheckDefault-8">
                                                    Swimming Pool
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-9">
                                                <label class="form-check-label" for="flexCheckDefault-9">
                                                    Fitness Gym
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-10">
                                                <label class="form-check-label" for="flexCheckDefault-10">
                                                    Security Garage
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-11">
                                                <label class="form-check-label" for="flexCheckDefault-11">
                                                    Fireplace
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault-12">
                                                <label class="form-check-label" for="flexCheckDefault-12">
                                                    Basement
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <button class="default-btn">
                                            Save Search
                                        </button>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <button class="default-btn mt-20">
                                            Reset All Filters
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="list-wrap">
                    <div class="mb-30">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p>248 Results Found</p>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>All Categories</option>
                                    <option value="1">House</option>
                                    <option value="2">Hotel</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($properties as $property)
                        <div class="col-xl-6 col-md-6 mix for-rent">
                            <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-6s">
                                <div class="properties-img">
                                    <a href="{{ route('single_listing_sale', $property->id) }}">
                                        <img src="{{ asset('storage/' . $property->agent_image) }}" alt="Image">
                                    </a>
                                    <span>Rent</span>
                                    <button class="wish">
                                        <i class="ri-heart-3-line"></i>
                                    </button>
                                </div>
                                <div class="properties-content">
                                    <div class="border-style">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('single_listing_sale', $property->id) }}">
                                                <h3>{{ $property->title }}</h3>
                                            </a>
                                            <h3 class="price">${{ $property->price }}</h3>
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
                                    </div>

                                    <ul class="user d-flex justify-content-between align-items-center">
                                        <li>
                                            <div class="agent-user">
                                                <img src="{{ asset('storage/' . $property->agent_image) }}" alt="Image">
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
                        @endforeach
                        {{$properties->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Listing Area -->
@include('frontend.inc.footer')

@endsection
