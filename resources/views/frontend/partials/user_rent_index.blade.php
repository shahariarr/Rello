@extends('frontend.layouts.app')

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
                        <li class="active">My Rent Properties</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Add table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>My Rent Properties</h4>
                        <div class="card-header-form">
                            @can('create-rent')
                                <a href="{{ route('user.rents.create') }}" class="btn btn-success btn-sm"><i class="bi bi-plus-circle"></i> Add New Rent Property</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" style="width: 100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Location</th>
                                        <th>Bedrooms</th>
                                        <th>Bathrooms</th>
                                        <th>Thumbnail Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>{{ $property->title }}</td>
                                        <td>{{ $property->price }}</td>
                                        <td>{{ $property->location }}</td>
                                        <td>{{ $property->bedrooms }}</td>
                                        <td>{{ $property->bathrooms }}</td>
                                        <td><img src="{{ asset('storage/'.$property->agent_image) }}" alt="Agent Image" class="img-thumbnail" style="height: 50px;"></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('user.rents.edit', $property->id) }}" class="btn btn-primary btn-sm mr-2"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <form action="{{ route('user.rents.destroy', $property->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this rent property?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if($properties->isEmpty())
                                <p class="text-center">No rent properties found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endpush
