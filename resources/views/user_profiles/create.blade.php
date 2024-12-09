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
                        <li class="active">Create Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="edit-profile">
            <form action="{{ route('user_profiles.store') }}" method="POST" enctype="multipart/form-data" class="contact-information">
                @csrf
                <div class="information d-flex align-items-center">
                    <img src="{{ asset('frontend/assets/images/agents/agent-10.jpg') }}" alt="Image">

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
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Biography</label>
                            <textarea class="form-control" name="biography">{{ old('biography') }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('frontend.inc.user_footer_dash')

@endsection
