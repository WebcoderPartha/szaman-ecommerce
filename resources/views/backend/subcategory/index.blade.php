@extends('backend.layout.app')
@section('title', 'Category')
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item">Subcategory</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
                Subcategory
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-5" class="panel py-2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6">

                                <h4>Sub Category</h4>
                                <form action="#">
                                    @csrf @method('POST')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="category_id">Category</label>
                                                <select name="category_id" class="form-control" id="category_id">
                                                    <option value="">Choose category</option>
                                                </select>
                                                @error('name')
                                                <span class="text-red"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Sub Category name</label>
                                                <input class="form-control" id="name" placeholder="Ex: Iphone" type="text" name="name">
                                                @error('name')
                                                <span class="text-red"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Image</label>
                                                <input class="form-control" id="image" type="file" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <button type="submit" id="form_button" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <h4>Sub Category List</h4>
                                <!-- datatable start -->
                                <table id="countrytabledata" class="table text-center table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600">
                                    <tr>
                                        <th>SL</th>
                                        <th>Country Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <!-- datatable end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>

        // Verify token
        if (!localStorage.getItem('access_token')){
            window.location = "{{route('admin.login')}}";
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Sweetalert
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        // Sweetalert





        function delete_alert(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    axios.get(`/api/country-api/destroy/`+id).then(response => {
                        Toast.fire({
                            icon: "success",
                            title: response.data.success
                        });
                        var table = $('#countrytabledata').removeAttr('width').DataTable({
                            processing: true,
                            serverSide: true,
                            scrollX: false,
                            pageLength: 10,
                            ordering: true,
                            responsive : true,
                            searching : false,
                            bDestroy : true,
                            lengthChange : false,
                            sorting : true,
                            ajax: {
                                url: "",
                                type: "GET",
                                headers: {
                                    'Authorization': `Bearer ${localStorage.getItem('token')}`
                                },
                            },
                            columns: [{
                                data: 'DT_RowIndex',
                                searchable: false,
                                class: "text-center",
                                orderable: false
                            },
                                {
                                    data: 'country_name',
                                    name: 'country_name',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'action',
                                    name: 'action',
                                    orderable: false,
                                }
                            ]
                        });
                    })
                }
            }); //alert ends
        }


    </script>

@endsection
