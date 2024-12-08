@extends('frontend.layouts.app')

@section('content')
<div class="page-title-area bg-4">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>

            <ul>
                <li>
                    <a href="{{route('index.main')}}">
                        Home
                    </a>
                </li>

                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form">
                    <h2>Write To Us</h2>

                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Phone No</label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Subject</label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contacts-info">
                    <h2>{{ $contactData->title }}</h2>
                    <p>{{ $contactData->about }}</p>

                    <ul class="address">
                        <li class="location">
                            <i class="ri-map-pin-fill icon"></i>
                            <span>Address:</span>
                            {{ $contactData->address }}
                        </li>
                        <li>
                            <i class="ri-phone-fill icon"></i>
                            <span>Phone:</span>
                            <a href="tel:{{ $contactData->phone }}">{{ $contactData->phone }}</a>
                        </li>
                        <li>
                            <i class="ri-mail-fill icon"></i>
                            <span>Email:</span>
                            <a href="mailto:{{ $contactData->email }}">{{ $contactData->email }}</a>
                        </li>
                        <li class="ps-0">
                            <ul>
                                <li>
                                    <span>Social:</span>
                                </li>
                                @if($contactData->facebook)
                                <li>
                                    <a href="{{ $contactData->facebook }}" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                @endif
                                @if($contactData->twitter)
                                <li>
                                    <a href="{{ $contactData->twitter }}" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if($contactData->instagram)
                                <li>
                                    <a href="{{ $contactData->instagram }}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                @endif
                                @if($contactData->linkedin)
                                <li>
                                    <a href="{{ $contactData->linkedin }}" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                                @endif
                                @if($contactData->youtube)
                                <li>
                                    <a href="{{ $contactData->youtube }}" target="_blank">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area pb-100">
    <div class="container">
        <div class="map-wrap">
            <iframe src="{{ $contactData->map }}" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- End Map Area -->
@include('frontend.inc.footer')

@endsection
