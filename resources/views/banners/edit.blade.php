@extends('layouts.back')
@section('title') Edit Banner @endsection
@push('styles')
@endpush
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Edit Banner</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Banners</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Banner</h4>
                        {{-- <div class="card-header-form">
                            <a href="{{ route('banners.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div> --}}
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

                        <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="top_title" class="col-form-label">Top Title</label>
                                    <input type="text" class="form-control @error('top_title') is-invalid @enderror" id="top_title" name="top_title" value="{{ old('top_title', $banner->top_title) }}" required>
                                    @if ($errors->has('top_title'))
                                        <span class="text-danger">{{ $errors->first('top_title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="headline" class="col-form-label">Headline</label>
                                    <input type="text" class="form-control @error('headline') is-invalid @enderror" id="headline" name="headline" value="{{ old('headline', $banner->headline) }}" required>
                                    @if ($errors->has('headline'))
                                        <span class="text-danger">{{ $errors->first('headline') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description" class="col-form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $banner->description) }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Update Banner">
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
