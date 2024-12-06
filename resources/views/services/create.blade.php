@extends('layouts.back')
{{-- @section('title', 'Services') --}}

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add New Service</h1>
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
                            <h4 class="card-title text-center">Add Service Details</h4>
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

                            <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div id="serviceFields"></div>
                                <div class="text-center mb-3">
                                    <button type="button" id="addService" class="btn btn-outline-primary">+ Add
                                        Service</button>
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
            <div class="border p-3 mb-3 rounded service-group" id="serviceGroup${serviceIndex}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name${serviceIndex}">Name</label>
                        <input type="text" class="form-control" name="services[new${serviceIndex}][name]" placeholder="Service Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="description${serviceIndex}">Description</label>
                        <input type="text" class="form-control" name="services[new${serviceIndex}][description]" placeholder="Service Description" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="image${serviceIndex}">Image</label>
                        <input type="file" class="form-control" name="services[new${serviceIndex}][image]" accept="image/*">
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger remove-service" onclick="removeService(${serviceIndex})">Remove</button>
            </div>
        `;
                    container.insertAdjacentHTML('beforeend', fieldHTML);
                    serviceIndex++;
                });
            });

            function removeService(index) {
                const group = document.getElementById('serviceGroup' + index);
                group.remove();
            }
        </script>
    @endsection
