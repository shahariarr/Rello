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
