@extends('backend.layout.app')
@section('title', 'Add Employee')
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">HRMS</a></li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Add Employee</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
                Add Employee
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <form id="employeeForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="panel-5" class="panel">

                    <div class="panel-container show">
{{--                        <button type="button" class="btn btn-default" id="popupbutton">Modal Transparent Backdrop</button>--}}
                        <button type="button" class="btn btn-default d-none" id="popupbutton" data-toggle="modal" data-target="#confirmationdate">Modal Transparent Backdrop</button>
                        <!-- Modal center Large no backdrop -->
                        <div class="modal fade modal-backdrop-transparent" id="confirmationdate" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Job Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-outline-primary d-inline-block confirmationDate" data-month="3" data-dismiss="modal">3 Months</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-outline-primary d-inline-block confirmationDate" data-month="6" data-dismiss="modal">6 Months</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-outline-primary d-inline-block customConfirmationDate" data-dismiss="modal">Custom</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="successMsg" class="alert bg-info-500 d-none" role="alert"></div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link tab1" href="javascript:void(0)"  onclick="openTab('tab1')"><i class="fal fa-user mr-1"></i> Employee Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab2" href="javascript:void(0)" onclick="openTab('tab2')"><i class="fal fa-box mr-1"></i> Office Information</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link disabled" data-toggle="tab" href="#education" role="tab" aria-selected="false"><i class="fal fa-box mr-1"></i> Education</a>
                                </li> -->
                            </ul>
                            <div class="tab-content border border-top-0 p-3">
{{--                                <div class="tab-pane fade active show" id="employee_information" role="tabpanel">--}}
                                <div  id="tab1" class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_name">Employee Name</label>
                                                <input type="text" id="employee_name" name="employee_name" placeholder="Employee name" class="form-control" autocomplete="off">
                                                <small class="text-danger" id="msg_employee_name"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_father">Father name</label>
                                                <input type="text" id="employee_father" name="employee_father" class="form-control" placeholder="Employee father name" autocomplete="off">
                                                <small class="text-danger" id="msg_employee_father"></small>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_mother">Mother name</label>
                                                <input type="text" id="employee_mother" class="form-control" name="employee_mother" placeholder="Employee mother name" autocomplete="off">
                                                <small class="text-danger" id="msg_employee_mother"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="phone_number">Phone Number</label>
                                                <input type="text" id="phone_number" class="form-control" name="phone_number" placeholder="Enter phone number" autocomplete="off">
                                                <small class="text-danger" id="msg_phone_number"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label for="" class="form-label">Gender</label>
                                                <div class="frame-wrap">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input gender" value="Male" id="Male" checked name="gender">
                                                        <label class="custom-control-label" for="Male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input gender" value="Female" id="Female" name="gender">
                                                        <label class="custom-control-label" for="Female">Female</label>
                                                    </div>
                                                    <small class="text-danger" id="msg_gender"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="date_of_birth">Date Of Birth</label>
                                                <input class="form-control date" id="date_of_birth" type="text" placeholder="{{ date('Y-m-d') }}" name="date_of_birth" autocomplete="off">
                                                <small class="text-danger" id="msg_dateofbirth"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="nationality">Nationality</label>
                                                <select id="nationality" name="nationality" class="form-control select2">
                                                    <option value="">Choose nationality</option>
                                                </select>
                                                <small class="text-danger" id="msg_nationality"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="id_type">ID Type</label>
                                                <select class="form-control select2" id="id_type" name="id_type">
                                                    <option value="">Choose id type</option>
                                                </select>
                                                <small class="text-danger" id="msg_id_type"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="id_number">ID Number</label>
                                                <input type="text" name="id_number" class="form-control" placeholder="Ex:123456" id="id_number" autocomplete="off">
                                                <small class="text-danger" id="msg_id_number"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="punch_id">Punch ID</label>
                                                <input type="text" name="punch_id" class="form-control" placeholder="Ex:123456" id="punch_id" autocomplete="off">
                                                <small class="text-danger" id="msg_punch_id"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="present_address">Present Address</label>
                                                <textarea class="form-control" name="present_address" id="present_address" rows="5" placeholder="Enter present address" autocomplete="off"> </textarea>
                                                <small class="text-danger" id="msg_present_address"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="permanent_address">Permanent Address</label>
                                                <textarea class="form-control" name="permanent_address" id="permanent_address" rows="5" placeholder="Enter permanent address" autocomplete="off"></textarea>
                                                <small class="text-danger" id="msg_permanent_address"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="image">Profile Image</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                                <small class="text-danger" id="msg_image"></small>
                                            </div>
                                            <div class="">
                                                <img src="" id="imagePreview" width="70" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox" style="margin-top: 10px">
                                                <input type="checkbox" class="custom-control-input" name="self_access" value="has_self_access" id="self_access">
                                                <label class="custom-control-label" for="self_access">Self Access</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 selfAccessField d-none">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" name="email_address" class="form-control" placeholder="Enter email address" id="email_address" autocomplete="off">
                                                <small class="text-danger" id="msg_email_address"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 selfAccessField d-none">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="text" name="password" class="form-control" placeholder="*******" id="password" autocomplete="off">
                                                <small class="text-danger" id="msg_password"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary float-right mt-4" onclick="nextTab()">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div  id="tab2" class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="shift_date">Shift Date</label>
                                                <input class="form-control date" id="shift_date" placeholder="{{ date('Y-m-d') }}" type="text" name="shift_date" autocomplete="off">
                                                <small class="text-danger" id="msg_shift_date"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="shift_id">Shift</label>
                                                <select class="form-control select2" id="shift_id" name="shift_id">
                                                    <option value="">Choose shift</option>
                                                </select>
                                                <small class="text-danger" id="msg_shift_id"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="designation">Designation</label>
                                                <input type="text" name="designation" class="form-control" placeholder="Ex: Reporter" id="designation" autocomplete="off">
                                                <small class="text-danger" id="msg_designation"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="joining_date">Joining Date</label>
                                                <input class="form-control date" id="joining_date" type="text" placeholder="{{ date('Y-m-d') }}" name="joining_date" autocomplete="off">
                                                <small class="text-danger" id="msg_joining_date"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="confirmation_date">Confirmation Date</label>
                                                <input class="form-control date" disabled id="confirmation_date" type="text" placeholder="{{ date('Y-m-d') }}" name="confirmation_date" autocomplete="off">
                                                <small class="text-danger" id="msg_confirmation_date"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="department_id">Department</label>
                                                <select class="form-control select2" id="department_id" name="department_id">
                                                    <option value="">Choose Department</option>
                                                </select>
                                                <small class="text-danger" id="msg_department_id"></small>
                                                <input type="hidden" id="user_id" name="user_id">
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <button type="button" onclick="prevTab()" class="btn btn-info mt-4">Back</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" id="employeeForm_btn" class="btn btn-success float-right mt-4">Submit</button>
                                            </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>

        // Verify token
        if (!localStorage.getItem('token')){
            window.location = "{{route('login')}}";
        }

        $("#user_id").val(localStorage.getItem('user_id'))

        // ============== Tabs =================== //
        // Function to open a specific tab by tabId
        function openTab(tabId) {
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }
            document.getElementById(tabId).style.display = "block";
            if (tabId === 'tab1'){
                $('.'+tabId).addClass('active')
                $('.tab2').removeClass('active')
            }else{
                $('.'+tabId).addClass('active')
                $('.tab1').removeClass('active')
            }

        }

        // Select2 plugin
        $('.select2').select2();

        // Function to move to the next tab
        function nextTab() {
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                if (tabs[i].style.display === "block") {
                    tabs[i].style.display = "none";
                    if (i === tabs.length - 1) {
                        // If it's the last tab, loop back to the first tab
                        openTab("tab1");
                    } else {
                        // Otherwise, open the next tab
                        openTab("tab" + (i + 2));
                    }
                    break;
                }
            }
        }

        // Function to move to the previous tab
        function prevTab() {
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                if (tabs[i].style.display === "block") {
                    tabs[i].style.display = "none";
                    if (i === 0) {
                        // If it's the first tab, move to the last tab
                        openTab("tab" + tabs.length);
                    } else {
                        // Otherwise, move to the previous tab
                        openTab("tab" + i);
                    }
                    break;
                }
            }
        }

        // Open the first tab by default
        openTab("tab1");

        // ============== Tabs =================== //

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Jquery Date picker
        $( ".date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat : 'yy-mm-dd',
            yearRange: "-100:+0"
        });

        // Self Access
        $('#self_access').click(function(){
            if($("#self_access").is(':checked')){
                $('.selfAccessField').removeClass('d-none');
            }else{
                $('.selfAccessField').addClass('d-none');
            }
        })

        // CGPA Check Box
        $('#defaultUnchecked').click(function(){
            if($("#defaultUnchecked").is(':checked')){
                $('#cgpa_field').removeClass('d-none');
                $('#total_cgpa_field').removeClass('d-none');
            }else{
                $('#cgpa_field').addClass('d-none');
                $('#total_cgpa_field').addClass('d-none');
            }
        })

        // Image Preview
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        // Department API Generate
        $.ajax({
            method: "GET",
            url: "{{ route('department-api.index') }}",
            dataType: "json",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {
                // console.log(response.data.length)
                if(response.data.length > 0) {
                    response.data.forEach(department => {
                        $("#department_id").append(`<option value='${department.id}'> ${department.department_name}</option>`)
                        // console.log(item.id_type)
                    })
                }
            }
        });


        // Country Fetch From API
        // $("#nationality").on("click", function(){
            $.ajax({
                method: "GET",
                // url: "https://restcountries.com/v3.1/all",
                url: "{{ route('country-api.countrylist') }}",
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`
                },
                dataType: "json",
                success: function(response) {
                    if(response.length > 0) {
                        response.forEach(el => {
                            $("#nationality").append(`<option value='${el.country_name}'> ${el.country_name}</option>`)
                        })
                    }
                }
            });
        // });

        // Id Type Fetch from API
            $.ajax({
                method: "GET",
                url: "{{ route('identity-api.index') }}",
                dataType: "json",
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`
                },
                success: function(response) {
                    // console.log(response.data.length)
                    if(response.data.length > 0) {
                        response.data.forEach(item => {
                            $("#id_type").append(`<option value='${item.id_type}'> ${item.id_type}</option>`)
                            // console.log(item.id_type)
                        })
                    }
                }
            });

        // Office Shift
        $.ajax({
            method: "GET",
            url: "{{ route('shift-api.index') }}",
            dataType: "json",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {
                // console.log(response.data.length)
                if(response.data.length > 0) {
                    response.data.forEach(item => {
                        $("#shift_id").append(`<option value='${item.shift_name}'> ${item.shift_name}</option>`)
                        // console.log(item.id_type)
                    })
                }
            }
        });

        // Education Type
        $.ajax({
            method: "GET",
            url: "{{ route('educationtype-api.index') }}",
            dataType: "json",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {
                // console.log(response.data.length)
                if(response.data.length > 0) {
                    response.data.forEach(item => {
                        $("#education_type").append(`<option value='${item.education_type}'> ${item.education_type}</option>`)
                    })
                }
            }
        });


        $('#joining_date').change(function (){
            $('#popupbutton').click();
        });

        $('.confirmationDate').click(function (e) {

            var date = new Date();
            var getMonth = e.target.getAttribute('data-month');
            date.setMonth(date.getMonth() + parseInt(getMonth));
            let year = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
            let month = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date);
            let day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date);
            let setConfirmationDate = year+'-'+month+'-'+day;
            $("#confirmation_date").prop('disabled', false).val(setConfirmationDate);

        })

        $('.customConfirmationDate').click(function (e) {
            $("#confirmation_date").prop('disabled', false)
        })

        $("#employeeForm_btn").click(function(e){

            e.preventDefault();

            // Employee Information
            let employee_name = $('#employee_name').val();
            let employee_father = $('#employee_father').val();
            let employee_mother = $('#employee_mother').val();
            let phone_number = $('#phone_number').val();
            let gender = '';
            if($("input[type='radio'].gender").is(':checked')) {
                gender = $("input[type='radio'].gender:checked").val();
            }

            let date_of_birth = $('#date_of_birth').val();
            let nationality = $('#nationality').val();
            let id_type = $('#id_type').val();
            let id_number = $('#id_number').val();
            let permanent_address = $('#permanent_address').val();
            let present_address = $('#present_address').val();
            let image = $('#image').prop('files')[0]

            // Office Information
            let shift_date = $('#shift_date').val();
            let shift_id = $('#shift_id').val();
            let joining_date = $('#joining_date').val();
            let confirmation_date = $('#confirmation_date').val();
            let designation = $('#designation').val();
            let department_id = $('#department_id').val();

            // Education Field
            // let education_type = $('#education_type').val();
            // let passing_year = $('#passing_year').val();
            // let cgpa = $('#cgpa').val();
            // let total_cgpa = $('#total_cgpa').val();
            // let gpa = $('#gpa').val();
            // let institute_name = $('#institute_name').val();

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

            // Form Validation
            if (!employee_name.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Employee name is required!"
                });
                // $("#msg_employee_name").text('Employee name is required!');
            }else if(!employee_father.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Father name is required!"
                });
            }else if(!employee_mother.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Mother name is required!"
                });
            }else if(!phone_number.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Phone number is required!"
                });
            } else if(!gender.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Gender is required!"
                });
            }else if(!date_of_birth.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Date of birth is required!"
                });
            }else if(!nationality.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Nationality is required!"
                });
            }else if(!id_type.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "ID type is required!"
                });
            }else if(!id_number.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "ID number is required!"
                });
            }else if(!present_address.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Present address is required!"
                });
            }else if(!permanent_address.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Permanent address is required!"
                });
            }else if(!shift_date.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Shift Date is required!"
                });
            }else if(!shift_id.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Shift is required!"
                });
            }else if(!joining_date.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Joining is required!"
                });
            }
            // else if(!confirmation_date.length > 0){
            //     $("#msg_confirmation_date").text('Confirmation date is required!');
            // }
            else if(!designation.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Designation is required!"
                });
            }else if(!department_id.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Department is required!"
                });
            }else{
                let myForm = document.getElementById('employeeForm');
                let formData = new FormData(myForm);
                $.ajax({
                    url: "{{ route('employee-api.store') }}",
                    type: "POST",
                    // contentType: 'multipart/form-data',
                    data: formData,
                    dataType: 'JSON',
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        // $("#successMsg").text(response.success).removeClass('d-none');
                        $('#employeeForm')[0].reset();
                        $("#password").val('');
                        $('#email_address').val('');
                        $('#nationality').val(null).trigger('change');
                        $('#department_id').val(null).trigger('change');
                        $('#id_type').val(null).trigger('change');
                        $('#Male').prop('checked', true);
                        $('#Female').prop('checked', false);
                        $('#imagePreview').attr('src', '');

                        openTab('tab1')
                        Toast.fire({
                            icon: "success",
                            title: response.success
                        });
                        setTimeout(()=> {
                            window.location = '/employee';
                        },1500)
                    },
                });
            }
        })

    </script>

@endsection
