@extends('backend.layout.app')
@section('title', 'Create Product')
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('backend.product.index') }}">Products</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
                Product
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-5" class="panel py-2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12 px-6">
                                <h4>Add Product</h4>
                                <form action="{{ route('backend.brand.store') }}" id="form" enctype="multipart/form-data" method="post">
                                    @csrf @method('POST')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="title">Product Title</label>
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter product title" autocomplete="off">
                                                @error('title')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="name">Description</label>
                                                <x-forms.description-editor />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="name">Short Description</label>
                                                <x-forms.shortdescription-editor />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="category_id">Category</label>
                                                <select name="category_id" class="form-control select2" id="category_id">
                                                    <option value="">Choose category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="subcategory_id">Sub Category</label>
                                                <select name="subcategory_id" class="form-control select2" id="subcategory_id">
                                                    <option value="">Choose subcategory</option>
                                                    @foreach($subcategories as $subcategory)
                                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory_id')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="brand_id">Brand</label>
                                                <select name="brand_id" class="form-control select2" id="brand_id">
                                                    <option value="">Choose brand</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pb-2">
                                                <label class="form-label" for="name">Image</label>
                                                <input class="form-control" id="image" type="file" name="image">
                                            </div>
                                        </div>

                                        <div class="col-md-4 pb-2">
                                            <div class="col-md-4">
                                                <p>Preview</p>
                                                <img src="" width="200" id="imagePreview" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <button type="submit" id="form_button" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <x-head.description-config />
{{--    <x-head.short-description-config />--}}
    <script>

        {{--// Verify token--}}
        {{--if (!localStorage.getItem('access_token')){--}}
        {{--    window.location = "{{route('admin.login')}}";--}}
        {{--}--}}

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

        // Image Preview
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(document).ready(function() {

            var table = $('#data-table').removeAttr('width').DataTable({
                processing: true,
                serverSide: true,
                scrollX: false,
                pageLength: 10,
                ordering: true,
                responsive : true,
                searching : true,
                bDestroy : true,
                lengthChange : false,
                sorting : true,
                ajax: {
                    url: "{{route('backend.brand.data')}}",
                    type: "GET",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        searchable: false,
                        class: "text-center",
                        orderable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'image',
                        name: 'image',
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

        });

        function delete_alert(id) {
            Swal.fire({
                title: "Are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    window.location = "/admin/brand/"+id+"/delete"
                }
            }); //alert ends
        }


    </script>

@endsection
