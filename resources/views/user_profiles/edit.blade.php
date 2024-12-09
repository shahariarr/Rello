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
                            <a href="{{ route('index.main') }}">
                                Home
                            </a>
                        </li>
                        <li class="active">Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="edit-profile">
            <form action="{{ route('user_profiles.update') }}" method="POST" enctype="multipart/form-data" class="contact-information">
                @csrf
                @method('POST')
                <div class="information d-flex align-items-center">
                    <img src="{{ $userProfile->profile_img ? asset('storage/' . $userProfile->profile_img) : asset('frontend/assets/images/agents/agent-10.jpg') }}" alt="Image">

                    <div class="file-upload-account-info">
                        <input type="file" name="profile_img" id="profile_img" class="inputfile">
                        <label class="upload" for="profile_img">
                            <i class="ri-link"></i>
                            Upload Your Images
                        </label>
                        <p>* Minimum required size is 500px by 500px.</p>
                        <p>* Make sure to Save Changes after uploading your image.</p>
                    </div>
                </div>

                <h3>Contact Information</h3>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $userProfile->first_name }}" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $userProfile->last_name }}" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="user_name" class="form-control" value="{{ $userProfile->user_name }}" placeholder="User Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $userProfile->email }}" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ $userProfile->phone }}" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $userProfile->address }}" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Biography</label>
                            <textarea name="biography" cols="30" class="form-control" rows="6" placeholder="Write your biography">{{ $userProfile->biography }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">
                            Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('frontend.inc.user_footer_dash')

@endsection
