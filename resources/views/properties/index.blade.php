@extends('layouts.back')
@section('title') Manage Properties @endsection
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Manage Properties</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Properties</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4></h4>
              <div class="card-header-form">
                @can('create-property')
                    <a href="{{ route('properties.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Property</a>
                @endcan
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="properties-table" class="table dataTable no-footer table-hover" style="width: 100%">
                    <thead>
                      <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Thumbnail image</th>
                            <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('scripts')

<script type="text/javascript">

    $(document).ready(function() {

        var table = $('#properties-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ action('App\Http\Controllers\PropertyController@index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'price', name: 'price'},
                {data: 'location', name: 'location'},
                {data: 'bedrooms', name: 'bedrooms'},
                {data: 'bathrooms', name: 'bathrooms'},
                {data: 'agent_image', name: 'agent_image', orderable: false, searchable: false, render: function(data, type, full, meta) {
                    return '<img src="'+data+'" alt="Agent Image" height="50"/>';
                }},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });

    function checkDelete(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");
        var url = "{{ url('/') }}"+'/properties/destroy/'+id;
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "DELETE",
                    url: url,
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function (data) {
                        if(data.status){
                            iziToast.success({title: 'Success',timeout: 1500,message: data.message,position: 'topRight'});
                            $('#properties-table').DataTable().ajax.reload();
                        }else{
                            iziToast.error({title: 'Error',timeout: 1500,message: data.message,position: 'topRight'});
                        }
                    },
                    error: function(err){
                        iziToast.error({title: 'Error',timeout: 1500,message: 'Something went wrong. Please try again later',position: 'topRight'});
                    }
                });
            }
        });
    };

</script>
@endpush
