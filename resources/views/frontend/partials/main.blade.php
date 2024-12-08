
@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.home', ['banners' => $banners])
@include('frontend.partials.services', ['services' => $services])
@include('frontend.partials.property-sales', ['propertiesForSale' => $propertiesForSale])
@include('frontend.partials.property-rent', ['propertiesForRent' => $propertiesForRent])
{{-- @include('frontend.partials.neighborhoods') --}}
@include('frontend.inc.footer')


@endsection
