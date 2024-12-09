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

                        <li class="active">Add Listing Rent</li>
                    </ul>
                </div>
                {{-- <div class="col-lg-6 col-sm-6">
                    <form class="dashboard-src-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="src-btn">
                                <i class="ri-search-line"></i>
                            </button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>

        <div class="add-listing">
            <form class="basic-informations">
                <h3>Basic Informations</h3>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Property Rent Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Property Type</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Property Rent Price</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="email" class="form-control">
                        </div>
                    </div> --}}

                    <h3 class="mt-30">Location / Contacts</h3>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14375.832948433375!2d-80.26409426900993!3d25.738894638352154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b7e816048625%3A0xce85b49262b93dfc!2s7755%20Grand%20Ave!5e0!3m2!1sen!2sbd!4v1644904834549!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Property Rent Thumbnail image</label>
                            <div class="information d-flex align-items-center">
                                <div class="file-upload-account-info">
                                    <input type="file" name="file" id="file-2" class="inputfile">
                                    <label class="upload">
                                        <i class="ri-image-add-line"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Property Rent Background Image</label>
                            <div class="information d-flex align-items-center">
                                <div class="file-upload-account-info">
                                    <input type="file" name="file" id="file-2" class="inputfile">
                                    <label class="upload">
                                        <i class="ri-image-add-line"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-30">Listing Details</h3>

                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Area</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Bedrooms</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Bathrooms</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Lot Size</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Garage</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Year Built</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}

                    {{-- <h3 class="mt-30">Floor Plans</h3>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Floor Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Floor Price</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Floor Size</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Bedrooms</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Bathrooms</label>
                            <input type="text" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="default-btn">Submit Your Data</button>
                    </div>
                </div>
            </form>

            {{-- <div class="features-content">
                <h3>Features</h3>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Air Conditioned
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Laundry
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Barbeque
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Refrigerator
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Window Coverings
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Grage
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Parking
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Fitness Gym
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Fireplace
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Swimming Pool
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Security Garage
                            </li>
                            <li>
                                <i class="ri-checkbox-line"></i>
                                Basement
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <form class="rooms">
                <h3>Rooms</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Room Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Additional Room</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Room Details</label>
                            <textarea name="massage" class="form-control" cols="30" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">Add More</button>
                    </div>
                </div>
            </form>

            <form class="video-title">
                <h3>Video</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Youtube Video Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Youtube Video URL</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Youtube Video Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Vimeo Video URL</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <button type="submit" class="default-btn">Save Change</button>
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
</div>
<!-- End Dashboard Area -->
@include('frontend.inc.user_footer_dash')

@endsection
