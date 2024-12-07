@extends('frontend.layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area bg-5">
    <div class="container">
        <div class="page-title-content">
            <h2>My Account</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">My Account</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="user-form-content log-in">
                    <h3>Sign in</h3>

                    <form method="POST" action="{{ route('user.login.submit') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-12 my-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>

                            <div class="col-12 my-3">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>

                            <div class="col-12 my-3">
                                <a href="my-account.html" class="forgot-login">Forgot your password?</a>
                            </div>

                            <div class="col-12">
                                <button class="default-btn" type="submit">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="user-form-content sign-up">
                    <h3>Sign Up</h3>

                    <form class="user-form" method="POST" action="{{ route('user.registration.submit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="default-btn register" type="submit">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End User Area -->
@endsection
