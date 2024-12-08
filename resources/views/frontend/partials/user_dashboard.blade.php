@extends('frontend.layouts.app')

@section('content')
@include('frontend.inc.user_navbar')
<!-- Start Dashboard Area -->
<div class="dashboard-area">
    <div class="container-fluid">
        <div class="dashboard-title-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="dashboard-page-title">
                        <li>
                            <a href="{{route('index.main')}}">
                                Home
                            </a>
                        </li>

                        <li class="active">Dashboard</li>
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

        <div class="dashboard-interface-card">
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="single-interface-card">
                        <i class="fa-solid fa-house-user"></i>
                        <p>Total Properties</p>
                        <h2>07</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-interface-card">
                        <i class="fa-solid fa-house-user"></i>
                        <p>Published Properties</p>
                        <h2>05</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-interface-card">
                        <i class="fa-solid fa-house-user"></i>
                        <p>Pending Properties</p>
                        <h2>0</h2>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="single-interface-card">
                        <i class="fa-solid fa-house-user"></i>
                        <p>My Favorites</p>
                        <h2>19</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->

@include('frontend.inc.user_footer_dash')

@endsection
