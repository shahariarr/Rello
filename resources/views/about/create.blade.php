@extends('layouts.back')
@section('title') Add About Section @endsection
@push('styles')
@endpush
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Add About Section</h1>
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
                        <h4>Add About Section</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
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
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="description" class="col-form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="vision" class="col-form-label">Vision</label>
                                    <textarea class="form-control @error('vision') is-invalid @enderror" id="vision" name="vision" rows="4" required>{{ old('vision') }}</textarea>
                                    @if ($errors->has('vision'))
                                        <span class="text-danger">{{ $errors->first('vision') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="mission" class="col-form-label">Mission</label>
                                    <textarea class="form-control @error('mission') is-invalid @enderror" id="mission" name="mission" rows="4" required>{{ old('mission') }}</textarea>
                                    @if ($errors->has('mission'))
                                        <span class="text-danger">{{ $errors->first('mission') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Save About Section">
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
