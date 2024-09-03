@extends('backend.layout.app')
@section('title', 'Site Setting')
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item">Site Setting</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
               Site Setting
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-5" class="panel py-2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">

                                <h4>Site Setting</h4>
                                <form action="" id="form" enctype="multipart/form-data" method="post">
                                    @csrf @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="site_name">Site Title</label>
                                                <input class="form-control" value="{{ isset($site_setting->site_name) ? $site_setting->site_name : '' }}" id="site_name" placeholder="Enter Site title" type="text" name="site_name">
                                                @error('name')
                                                <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Logo</label>
                                                <input class="form-control" id="image" type="file" name="image">
                                            </div>
                                        </div>

                                            <div class="col-md-4">
                                                <p>Image Preview</p>
                                                <img src="" width="200" id="imagePreview" alt="">
                                            </div>

                                    </div>
                                    <div class="mt-4 text-right">
                                        <button type="submit" id="form_button" class="btn btn-success">Update</button>
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
    <script>

        // Verify token
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



    </script>

@endsection
