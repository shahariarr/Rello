@extends('layouts.back')
@section('title') Edit Rent @endsection
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Rent</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Rents</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Rent</h4>
                        <div class="card-header-form">
                            <a href="{{ route('rents.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rents.update', $rent->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $rent->title }}" required>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="col-form-label">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $rent->price }}" required>
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="location" class="col-form-label">Location</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ $rent->location }}" required>
                                    @if ($errors->has('location'))
                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="bedrooms" class="col-form-label">Bedrooms</label>
                                    <input type="number" class="form-control @error('bedrooms') is-invalid @enderror" id="bedrooms" name="bedrooms" value="{{ $rent->bedrooms }}" required>
                                    @if ($errors->has('bedrooms'))
                                        <span class="text-danger">{{ $errors->first('bedrooms') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="bathrooms" class="col-form-label">Bathrooms</label>
                                    <input type="number" class="form-control @error('bathrooms') is-invalid @enderror" id="bathrooms" name="bathrooms" value="{{ $rent->bathrooms }}" required>
                                    @if ($errors->has('bathrooms'))
                                        <span class="text-danger">{{ $errors->first('bathrooms') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="size" class="col-form-label">Size (sq. ft.)</label>
                                    <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ $rent->size }}" required>
                                    @if ($errors->has('size'))
                                        <span class="text-danger">{{ $errors->first('size') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="agent_phone" class="col-form-label">Phone</label>
                                    <input type="text" class="form-control @error('agent_phone') is-invalid @enderror" id="agent_phone" name="agent_phone" value="{{ $rent->agent_phone }}" required>
                                    @if ($errors->has('agent_phone'))
                                        <span class="text-danger">{{ $errors->first('agent_phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="agent_image" class="col-form-label">Thumbnail image</label>
                                    <input type="file" class="form-control @error('agent_image') is-invalid @enderror" id="agent_image" name="agent_image">
                                    <img src="{{ asset('storage/' . $rent->agent_image) }}" alt="Agent Image" class="img-thumbnail mt-2" width="150">
                                    @if ($errors->has('agent_image'))
                                        <span class="text-danger">{{ $errors->first('agent_image') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="background_image" class="col-form-label">Background Image</label>
                                    <input type="file" class="form-control @error('background_image') is-invalid @enderror" id="background_image" name="background_image">
                                    <img src="{{ asset('storage/' . $rent->background_image) }}" alt="Background Image" class="img-thumbnail mt-2" width="150">
                                    @if ($errors->has('background_image'))
                                        <span class="text-danger">{{ $errors->first('background_image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="description" class="col-form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ $rent->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Update Rent">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200,
                dialogsInBody: true
            });
        });
    </script>
@endpush
