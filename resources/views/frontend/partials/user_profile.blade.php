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

                        <li class="active">My Profile</li>
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

        <div class="my-profile">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-profile-img">
                        <img src="{{ asset('frontend/assets/images/agents/agent-10.jpg') }}" alt="Image">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="edit-profile.html" class="default-btn">
                            Edit Profile
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="my-profile-content">
                        <ul>
                            <li>
                                <span>First Name:</span>
                                Deborah
                            </li>
                            <li>
                                <span>Last Name:</span>
                                Roderick
                            </li>
                            <li>
                                <span>User Name:</span>
                                Deborah Roderick
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d5d4d3dec3d0d9f1c3d4ddddde9fd2dedc">[email&#160;protected]</a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                +1 719-504-1984
                            </li>
                            <li>
                                <span>Address:</span>
                                8135 Walt Whitman Street Willingboro, NJ 08046
                            </li>
                            <li>
                                <span>Website:</span>
                                www.rello.com
                            </li>
                            <li>
                                <span>Agensy:</span>
                                Rello RealEstate Agency
                            </li>
                            <li>
                                <span>Biography:</span>
                                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada.Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->
@include('frontend.inc.user_footer_dash')

@endsection
