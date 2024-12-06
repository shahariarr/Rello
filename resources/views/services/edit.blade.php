@extends('layouts.back')
{{-- @section('title', 'Services') --}}

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Services </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Services</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title text-center">Edit Service Details</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('service.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div id="serviceFields">
                                    @foreach ($services as $service)
                                        <div class="border p-3 mb-3 rounded service-group" id="serviceGroup{{ $service->id }}">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="name{{ $service->id }}">Name</label>
                                                    <input type="text" class="form-control" name="services[{{ $service->id }}][name]" value="{{ $service->name }}" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="description{{ $service->id }}">Description</label>
                                                    <textarea class="form-control" name="services[{{ $service->id }}][description]" required>{{ $service->description }}</textarea>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="image{{ $service->id }}">Image</label>
                                                    <input type="file" class="form-control" name="services[{{ $service->id }}][image]" accept="image/*">
                                                    @if ($service->image)
                                                        <img src="{{ asset('service_images/' . $service->image) }}" alt="{{ $service->name }}" class="img-thumbnail mt-2" width="100">
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-danger remove-service" onclick="removeService({{ $service->id }})">Remove</button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="text-center mb-3">
                                    <button type="button" id="addService" class="btn btn-outline-primary">+ Add Service</button>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let serviceIndex = 0;
            document.getElementById('addService').addEventListener('click', function() {
                const container = document.getElementById('serviceFields');
                let fieldHTML = `
                    <div class="border p-3 mb-3 rounded service-group" id="serviceGroupNew${serviceIndex}">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nameNew${serviceIndex}">Name</label>
                                <input type="text" class="form-control" name="services[new${serviceIndex}][name]" placeholder="Service Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="descriptionNew${serviceIndex}">Description</label>
                                <textarea class="form-control" name="services[new${serviceIndex}][description]" placeholder="Service Description" required></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="imageNew${serviceIndex}">Image</label>
                                <input type="file" class="form-control" name="services[new${serviceIndex}][image]" accept="image/*">
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-danger remove-service" onclick="removeService('New${serviceIndex}')">Remove</button>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', fieldHTML);
                serviceIndex++;
            });
        });

        function removeService(index) {
            const group = document.getElementById('serviceGroup' + index);
            if (group) {
                group.remove();
            }
        }
    </script>
@endsection
