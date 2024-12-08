@extends('frontend.layouts.app')
{{-- @push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@endpush --}}

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

                        <li class="active">Add Listing Property</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="add-listing">
            <form class="basic-informations" action="{{ route('user.properties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Basic Informations</h3>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="title" class="col-form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="col-form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required>
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="location" class="col-form-label">Location</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" required>
                        @if ($errors->has('location'))
                            <span class="text-danger">{{ $errors->first('location') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="bedrooms" class="col-form-label">Bedrooms</label>
                        <input type="number" class="form-control @error('bedrooms') is-invalid @enderror" id="bedrooms" name="bedrooms" required>
                        @if ($errors->has('bedrooms'))
                            <span class="text-danger">{{ $errors->first('bedrooms') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="bathrooms" class="col-form-label">Bathrooms</label>
                        <input type="number" class="form-control @error('bathrooms') is-invalid @enderror" id="bathrooms" name="bathrooms" required>
                        @if ($errors->has('bathrooms'))
                            <span class="text-danger">{{ $errors->first('bathrooms') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="size" class="col-form-label">Size (sq. ft.)</label>
                        <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" required>
                        @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="agent_phone" class="col-form-label">Phone</label>
                        <input type="text" class="form-control @error('agent_phone') is-invalid @enderror" id="agent_phone" name="agent_phone" required>
                        @if ($errors->has('agent_phone'))
                            <span class="text-danger">{{ $errors->first('agent_phone') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="agent_image" class="col-form-label">Thumbnail image</label>
                        <input type="file" class="form-control @error('agent_image') is-invalid @enderror" id="agent_image" name="agent_image">
                        @if ($errors->has('agent_image'))
                            <span class="text-danger">{{ $errors->first('agent_image') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="background_image" class="col-form-label">Background Image</label>
                        <input type="file" class="form-control @error('background_image') is-invalid @enderror" id="background_image" name="background_image">
                        @if ($errors->has('background_image'))
                            <span class="text-danger">{{ $errors->first('background_image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="descriptions" name="description" rows="4" required></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Save Property">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#descriptions').summernote({
                height: 200,
                dialogsInBody: true
            });
        });
    </script>
@endpush

