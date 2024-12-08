@extends('frontend.layouts.app')

@section('content')
@include('frontend.inc.user_navbar')
<div class="dashboard-area">
    <div class="container-fluid">
        <div class="dashboard-title-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="dashboard-page-title">
                        <li>
                            <a href="dashboard.html">
                                Home
                            </a>
                        </li>

                        <li class="active">My Listing</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form class="dashboard-src-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="src-btn">
                                <i class="ri-search-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="my-listing">
            <div class="latest-lavel">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <button class="default-btn">Add New</button>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Latest</option>
                            <option value="1">Lavel One</option>
                            <option value="2">Lavel Two</option>
                            <option value="3">Lavel Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-4s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-2.jpg" alt="Image">
                            </a>
                            <span>Sale</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Sale</h3>
                                    </a>
                                    <h3 class="price">$ 300,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    7755 West White Drive Carmel, NY 10555
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        4 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        4 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        1050 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-2.jpg" alt="Image">
                                        <span>By Thomas Jones</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-6s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-3.jpg" alt="Image">
                            </a>
                            <span>Rent</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Rent</h3>
                                    </a>
                                    <h3 class="price">$ 450,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    991 Hill St. Clemmons, NC 77711
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        5 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        5 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        1000 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-3.jpg" alt="Image">
                                        <span>By Erin Patterson</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-8s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-4.jpg" alt="Image">
                            </a>
                            <span>Sale</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Sale</h3>
                                    </a>
                                    <h3 class="price">$ 750,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    33 Winding Way Ave. New Bern, NC 2888
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        5 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        5 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        1500 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-4.jpg" alt="Image">
                                        <span>By Johnnie Hedrick</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-2s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-5.jpg" alt="Image">
                            </a>
                            <span>Rent</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Rent</h3>
                                    </a>
                                    <h3 class="price">$ 200,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    66 River Street Plainfield, NJ 07000
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        2 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        2 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        750 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-5.jpg" alt="Image">
                                        <span>By Dan Valentine</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-4s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-6.jpg" alt="Image">
                            </a>
                            <span>Sale</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Sale</h3>
                                    </a>
                                    <h3 class="price">$ 950,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    4477 Kingston Lane Mokena, IL 66448
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        6 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        6 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        1750 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-6.jpg" alt="Image">
                                        <span>By Maria Garber</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-6s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="assets/images/properties/properties-7.jpg" alt="Image">
                            </a>
                            <span>Rent</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>House For Rent</h3>
                                    </a>
                                    <h3 class="price">$ 350,000</h3>
                                </div>
                                <p>
                                    <i class="ri-map-pin-fill"></i>
                                    166 Mill Lane Riverview, FL 33366
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="ri-hotel-bed-fill"></i>
                                        3 Bed
                                    </li>
                                    <li>
                                        <i class="ri-wheelchair-fill"></i>
                                        3 Bath
                                    </li>
                                    <li>
                                        <i class="ri-ruler-2-line"></i>
                                        1000 Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <a href="agents.html" class="agent-user">
                                        <img src="assets/images/agents/agent-7.jpg" alt="Image">
                                        <span>By John Bilodeau</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="pagination-area">
                        <a href="my-listings.html" class="next page-numbers">
                            <i class="ri-arrow-left-line"></i>
                        </a>
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="my-listings.html" class="page-numbers">2</a>
                        <a href="my-listings.html" class="page-numbers">3</a>

                        <a href="my-listings.html" class="next page-numbers">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->
@include('frontend.inc.user_footer_dash')

@endsection
