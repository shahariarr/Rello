!@php
      $contactData = \App\Models\ContactData::first();
@endphp
<div class="footer-area bg-color-f9fcff pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget mr-50 wow animate__animated animate__fadeInUp delay-0-2s">

                    <a href="index.html">
                        <img src="{{ asset('images/' . $contactData->logo) }}" class="main-logo" alt="Image">
                    </a>

                    <p>{{ $contactData->about }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget mr-30 wow animate__animated animate__fadeInUp delay-0-4s">
                    <h3>Contacts Info</h3>

                    <ul class="contact-info">
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            {{ $contactData->address }}
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+1-719-504-1984">{{ $contactData->phone }}</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="/cdn-cgi/l/email-protection#91f8fff7fed1f6fcf0f8fdbff2fefc">
                                <span class="__cf_email__" data-cfemail="0861666e67486f65696164266b6765">{{ $contactData->email }}</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget wow animate__animated animate__fadeInUp delay-0-6s">
                    <h3>Helpful Links</h3>

                    <ul class="help-link">
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="terms-conditions.html">Terms & Conditions</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget wow animate__animated animate__fadeInUp delay-0-8s">
                    <h3>Newsletter</h3>

                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Your email address" name="EMAIL" required autocomplete="off">

                        <button class="submit-btn" type="submit">
                            Send
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>

                    <ul class="social-link">
                        <li class="wow animate__animated animate__fadeInUp delay-0-2s">
                            <a href="{{ $contactData->facebook }}" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>

                        <li class="wow animate__animated animate__fadeInUp delay-0-6s">
                            <a href="{{ $contactData->linkedin }}" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="wow animate__animated animate__fadeInUp delay-0-8s">
                            <a href="{{ $contactData->instagram }}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Footer Area -->

		<!-- Start Copyright Area -->
		<div class="copy-right-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 wow animate__animated animate__fadeInLeft delay-0-2s">
						<p>© Develop By <a href="" target="_blank">i2 Technologies Limited</a></p>
					</div>
					<div class="col-lg-6">
						<div class="language wow animate__animated animate__fadeInRight delay-0-2s">
							<select class="form-select" aria-label="Default select example">
								<option selected>Language</option>
								<option value="1">English</option>
								<option value="2">Arabic</option>
								<option value="3">Germany</option>
							</select>
							<i class="ri-global-line"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Copyright Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="fa-solid fa-arrow-up"></i>
			<i class="fa-solid fa-arrow-up"></i>
		</div>


