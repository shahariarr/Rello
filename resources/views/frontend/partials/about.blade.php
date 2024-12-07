@extends('frontend.layouts.app')

@section('content')


		<!-- Start Page Title Area -->
		<div class="page-title-area bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>About Us</h2>

					<ul>
						<li>
							<a href="{{route('index.main')}}">
								Home
							</a>
						</li>

						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

<!-- Start Can Help Area -->
<div class="can-help-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
        </div>

             <div class="row">
            @foreach($services as $service)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-can-help wow animate__animated animate__fadeInUp delay-0-6s">
                        <img src="{{ asset('service_images/' . $service->image) }}" alt="Image">
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Can Help Area -->


<!-- Start About Rello Area -->
<div class="about-rello-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="rello-about-img">
                    @if($about && $about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Image">
                    @else
                        <img src="assets/images/rell-about-img.jpg" alt="Image">
                    @endif

                    <div class="video-button">
                        <a href="https://www.youtube.com/watch?v=Qj59_LGUBvE" class="video-btn popup-youtube">
                            <i class="ri-play-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="rello-about-content">
                    @if($about)
                        <h2>{{ $about->title }}</h2>
                        <p>{{ $about->description }}</p>

                        <ul>
                            <li>
                                <i class="flaticon-terraced-house"></i>
                                <h3>Our Vision</h3>
                                <p>{{ $about->vision }}</p>
                            </li>
                            <li>
                                <i class="flaticon-interest-rate"></i>
                                <h3>Our Mission</h3>
                                <p>{{ $about->mission }}</p>
                            </li>
                        </ul>
                    @else
                        <p>No about section available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Rello Area -->
@endsection
