@extends('backend.layout.app')

@section('title', 'Employee List')
@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Employee</a></li>
        <li class="breadcrumb-item">Employee List</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">{{ date('D, d F, Y') }}</span></li>
    </ol>
            <div class="row">
                <div class="col-md-12">
                    <div id="panel-1" class="panel">
                        @if ($message = Session::get('success'))
                            <div class="alert bg-info-500" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        <div class="row px-4 pt-4">
                            <div class="col-md-6">
                                <h2>Employee List</h2>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('employee.create') }}" class="btn btn-sm btn-primary">Add Employee</a>
                            </div>

                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <!-- datatable start -->
                                <table id="employeetable" class="table text-center table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600">
                                    <tr>
                                        <th>SL</th>
                                        <th>Employee Code</th>
                                        <th>Punch ID</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Date Of Birth</th>
                                        <th>Image</th>
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


@endsection
@section('js')
{{--    <script src="{{ asset('backend/assets/js/datagrid/datatables/datatables.export.js') }}"></script>--}}
    <script>
        // Verify token
        if (!localStorage.getItem('token')){
            window.location = "{{route('login')}}";
        }
        // Sweetalert
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });

        // const headers = {
        //     'Content-Type': 'application/json',
        // }

        // axios.post('http://127.0.0.1:8081/jwt-api-token-auth/', {
        //     username: 'partha.dev',
        //     password: 'Parthapd8818@'
        // }).then(response => {
        //     console.log(response)
        // })
        let data = {
            username: 'parthadev',
            password: '435453453sdfdfdf'
        }
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8081/api-token-auth/",
            data: data,
            // headers: {  'Access-Control-Allow-Origin': 'http://127.0.0.1:8081/api-token-auth/' },
            headers: {  'Access-Control-Allow-Origin': '*' },
            dataType: "JSON",
            success: function(resultData){
                console.log(resultData)
            }
        });

        let successMessage = "{{ session('success') }}";
        if (successMessage){
            Toast.fire({
                icon: "success",
                title: successMessage
            });
        }
        // Sweetalert

        $(document).ready(function() {

            var table = $('#employeetable').removeAttr('width').DataTable({
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
                    url: "{{route('employee-api.index')}}",
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
                        data: 'employee_code',
                        name: 'employee_code',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'punch_id',
                        name: 'punch_id',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'employee_name',
                        name: 'employee_name',
                        orderable: false,
                    },
                    {
                        data: 'employee_father',
                        name: 'employee_father',
                        orderable: false,
                    },
                    {
                        data: 'employee_mother',
                        name: 'employee_mother',
                        class: "text-center",
                        orderable: false
                    },{
                        data: 'phone_number',
                        name: 'phone_number',
                        class: "text-center",
                        orderable: false
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                        orderable: false,
                    },
                    {
                        data: 'date_of_birth',
                        name: 'date_of_birth',
                        orderable: false,
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false,
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
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {

                    axios.get(`/api/employee-api/destroy/`+id).then(response => {
                        Toast.fire({
                            icon: "success",
                            title: response.data.success
                        });

                        var table = $('#employeetable').removeAttr('width').DataTable({
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
                                url: "{{route('employee-api.index')}}",
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
                                    data: 'employee_code',
                                    name: 'employee_code',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'punch_id',
                                    name: 'punch_id',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'employee_name',
                                    name: 'employee_name',
                                    orderable: false,
                                },
                                {
                                    data: 'employee_father',
                                    name: 'employee_father',
                                    orderable: false,
                                },
                                {
                                    data: 'employee_mother',
                                    name: 'employee_mother',
                                    class: "text-center",
                                    orderable: false
                                },{
                                    data: 'phone_number',
                                    name: 'phone_number',
                                    class: "text-center",
                                    orderable: false
                                },
                                {
                                    data: 'gender',
                                    name: 'gender',
                                    orderable: false,
                                },
                                {
                                    data: 'date_of_birth',
                                    name: 'date_of_birth',
                                    orderable: false,
                                },
                                {
                                    data: 'image',
                                    name: 'image',
                                    orderable: false,
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


