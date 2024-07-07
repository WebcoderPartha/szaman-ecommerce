@extends('backend.layout.app')
@section('title', 'Shipping Charge')
@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/inputTags.min.css') }}">
@endsection
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('backend.attribute.index') }}">Shipping Charge</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>

    <div class="row">
        <div class="col-xl-6">
            <div id="panel-5" class="panel py-2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">

                                <h4> Shipping Charge</h4>
                                <form id="form" method="POST" action="{{ route('backend.shipping-charge.store') }}">
                                    @csrf @method('POST')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="inside_dhaka">Inside Dhaka</label>
                                                <input class="form-control" id="inside_dhaka" value="{{ !empty($shipping_charge->inside_dhaka) ? $shipping_charge->inside_dhaka : ''  }}" type="text" name="inside_dhaka">
                                                @error('inside_dhaka')
                                                <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="outside_dhaka">Outside Dhaka</label>
                                                <input class="form-control" value="{{ !empty($shipping_charge->outside_dhaka) ? $shipping_charge->outside_dhaka : ''  }}" id="outside_dhaka" type="text" name="outside_dhaka">
                                                @error('outside_dhaka')
                                                <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <input type="hidden" value="{{ !empty($shipping_charge->id) ? $shipping_charge->id : '' }}" name="shipping_charge_id" id="shipping_charge_id">
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
    <script src="{{ asset('backend/assets/js/inputTags.jquery.min.js') }}"></script>
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

        {{--$('#form_button').click(function (e){--}}
        {{--    e.preventDefault();--}}
        {{--    let name = $('#name').val();--}}
        {{--    let attribute = $('#attribute').val();--}}
        {{--    let attribute_id = $('#attribute_id').val();--}}
        {{--    if (!name.length > 0){--}}
        {{--        Toast.fire({--}}
        {{--            icon: "error",--}}
        {{--            title: "Attribute name is required!"--}}
        {{--        });--}}
        {{--    }else if(!attribute.length > 0){--}}
        {{--        Toast.fire({--}}
        {{--            icon: "error",--}}
        {{--            title: "Attribute value is required!"--}}
        {{--        });--}}
        {{--    }else{--}}

        {{--        const data = {--}}
        {{--            name: name,--}}
        {{--            attribute: attribute--}}
        {{--        }--}}
        {{--        axios.post('/admin/attribute/'+attribute_id+'/update', data).then(response => {--}}
        {{--            $('#form')[0].reset();--}}
        {{--            Toast.fire({--}}
        {{--                icon: "success",--}}
        {{--                title: "Updated successfully!"--}}
        {{--            });--}}
        {{--            setTimeout(()=> {--}}
        {{--                window.location = "{{ route('backend.attribute.index') }}"--}}
        {{--            },1000)--}}
        {{--        })--}}
        {{--    }--}}


        {{--});--}}

    </script>

@endsection
