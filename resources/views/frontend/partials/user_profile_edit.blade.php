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
                            <a href="dashboard.html">
                                Home
                            </a>
                        </li>

                        <li class="active">Edit Profile</li>
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

        <div class="edit-profile">
            <div class="information d-flex align-items-center">
                <img src="{{ asset('frontend/assets/images/agents/agent-10.jpg') }}" alt="Image">

                <div class="file-upload-account-info">
                    <input type="file" name="file" id="file-2" class="inputfile">
                    <label class="upload">
                        <i class="ri-link"></i>
                        Upload Your Images
                    </label>
                    <p>* Minimum required size is 500px by 500px.</p>
                    <p>* Make sure to Save Changes after uploading your image.</p>
                </div>
            </div>

            <form class="contact-information">
                <h3>Contact Information</h3>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Deborah">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Roderick">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Deborah Roderick">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="deborah@gmail.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="+1 719-504-1984">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="8135 Walt Whitman Street Willingboro, NJ 08046">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" placeholder="www.rello.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Agensy</label>
                            <input type="text" class="form-control" placeholder="Rello RealEstate Agency">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Biography</label>
                            <textarea name="massage" cols="30" class="form-control" rows="6" placeholder="Write your biography"></textarea>
                        </div>
                    </div>

                    <h3 class="mt-30">Your Socials</h3>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="https://www.facebook.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="https://www.twitter.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>LinkedIn</label>
                            <input type="text" class="form-control" placeholder="https://www.linkedin.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" placeholder="https://www.instagram.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>

            <form class="reset-password">
                <h3>Reset Password</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" placeholder="*********">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="*********">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" placeholder="*********">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('frontend.inc.user_footer_dash')

@endsection
