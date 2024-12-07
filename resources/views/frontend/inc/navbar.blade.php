@php
      $contactData = \App\Models\ContactData::first();
@endphp
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('index.main')}}">
                        <img src="{{ asset('images/' . $contactData->logo) }}" class="main-logo" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('index.main')}}">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" class="main-logo" alt="logo">
                    <img src="{{ asset('frontend/assets/images/white-logo.png') }}" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('index.main')}}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about')}}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listing_rent')}}" class="nav-link">For Rent</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listing_sale')}}" class="nav-link">For Sale</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options style">
                        <ul>
                            @auth
                            <li>
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                        <img src="{{ asset('frontend/assets/images/agents/agent-1.jpg')}}" alt="Image">
                                        <span>{{ Auth::user()->name}}</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="ri-dashboard-line"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-profile.html">
                                                <i class="ri-user-line"></i>
                                                My Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit-profile.html">
                                                <i class="ri-image-edit-line"></i>
                                                Edit Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="add-listing.html">
                                                <i class="ri-list-check"></i>
                                                Add Listing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit-profile.html">
                                                <i class="ri-settings-2-line"></i>
                                                Setting
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout')}}" method="post">
                                                @csrf
                                            <button type="submit">
                                                <i class="ri-logout-box-r-line"></i>
                                                Sign out
                                            </button>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                         @endauth
                            @guest
                            <li>
                                <a href="{{ route('user.login')}}" class="login">
                                    <i class="ri-user-line"></i>
                                    <span>Log In or Sign Up</span>
                                </a>
                            </li>
                            @endguest
                            <li>
                                <a href="{{ route('user.login')}}" class="default-btn btn-radius">
                                    Add Listing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li>
                                <a href="my-listings.html" class="wishlist">
                                    <i class="ri-heart-line"></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <li>
                                <a href="my-account.html" class="login">
                                    <i class="ri-user-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="add-listing.html" class="default-btn btn-radius">
                                    Add Listing
                                </a>
                            </li>
                            <li>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button type="submit" class="src-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

