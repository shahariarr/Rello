<!-- Start Properties Area -->
<div class="properties-area bg-color-f8fafb ptb-100">
    <div class="container">
        <div class="properties-filter">
            <div class="section-title left-title">
                <h2>Sales</h2>
            </div>
            <div class="shorting-menu">
                <button class="filter border-radius-4" data-filter=".for-sale">
                    Other Services
                </button>
                <button class="filter border-radius-4" data-filter="all">
                    Auto-Mobile
                </button>

                <button class="filter border-radius-4" data-filter=".for-sale">
                    Electronics
                </button>
                <button class="filter border-radius-4" data-filter=".for-rent">
                    Flat
                </button>
            </div>
        </div>

        <div class="shorting">
            <div class="row justify-content-center">
                @foreach($propertiesForSale as $property)
                <div class="col-xl-3 col-md-6 mix for-sale">
                    <div class="single-properties-item style-three wow animate__animated animate__fadeInUp delay-0-2s">
                        <div class="properties-img">
                            <a href="single-listing.html">
                                <img src="{{ asset('storage/' . $property->agent_image) }}" alt="Image">
                            </a>
                            <span>Sale</span>
                        </div>
                        <div class="properties-content">
                            <div class="border-style">
                                <div class="d-flex justify-content-between">
                                    <a href="single-listing.html">
                                        <h3>{{ $property->title }}</h3>
                                    </a>
                                    <h3 class="price">$ {{ $property->price }}</h3>
                                </div>
                                <p>
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $property->location }}
                                </p>
                                <ul class="feature-list">
                                    <li>
                                        <i class="fa-solid fa-bed"></i>
                                        {{ $property->bedrooms }} Bed
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-bath"></i>
                                        {{ $property->bathrooms }} Bath
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-house"></i>
                                        {{ $property->size }} Sqft
                                    </li>
                                </ul>
                            </div>

                            <ul class="user d-flex justify-content-between align-items-center">
                                <li>
                                    <div class="agent-user">
                                        <img src="{{ asset('frontend/assets/images/agents/agent-1.jpg') }}" alt="Image">
                                        <span>By {{ Auth::user()->name }}</span>
                                    </div>
                                </li>
                                <li>
                                    <span>{{ $property->agent_phone }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-12 text-center">
                    <a href="listing.html" class="default-btn btn-radius">
                        View All Listing
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Properties Area -->
