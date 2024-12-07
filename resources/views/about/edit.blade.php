@extends('layouts.back')
@section('title') Edit About Section @endsection
@push('styles')
<style>
    .small-image {
        max-width: 150px;
        max-height: 150px;
    }
</style>
@endpush
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit About Section</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">About</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit About Section</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $about->title) }}" required>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="col-form-label">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                    @if ($about->image)
                                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="img-fluid mt-3 small-image">
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="description" class="col-form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $about->description) }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="vision" class="col-form-label">Vision</label>
                                    <textarea class="form-control @error('vision') is-invalid @enderror" id="vision" name="vision" rows="4" required>{{ old('vision', $about->vision) }}</textarea>
                                    @if ($errors->has('vision'))
                                        <span class="text-danger">{{ $errors->first('vision') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="mission" class="col-form-label">Mission</label>
                                    <textarea class="form-control @error('mission') is-invalid @enderror" id="mission" name="mission" rows="4" required>{{ old('mission', $about->mission) }}</textarea>
                                    @if ($errors->has('mission'))
                                        <span class="text-danger">{{ $errors->first('mission') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Update About Section">
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
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush
