@extends('backend.layout.app')
@section('title', 'Employee Information')
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">HRMS</a></li>
        <li class="breadcrumb-item">Employee List</li>
        <li class="breadcrumb-item active">Employee Information</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
                Office Information
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <form id="employeeForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="panel-5" class="panel">

                    <div class="panel-container show">
                        <button type="button" class="btn btn-default d-none" id="popupbutton" data-toggle="modal" data-target="#confirmationdate">Modal Transparent Backdrop</button>

                        <div class="panel-content">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#employee_information" role="tab" aria-selected="true"><i class="fal fa-user mr-1"></i> Employee Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#office_information" role="tab" aria-selected="false"><i class="fal fa-box mr-1"></i> Office Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#education" role="tab" aria-selected="false"><i class="fal fa-box mr-1"></i> Education</a>
                                </li>
                                <li class="nav-item" id="experienceTab">
                                    <a class="nav-link" data-toggle="tab" href="#experience" role="tab" aria-selected="false"><i class="fal fa-box mr-1"></i> Experience</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-3">
                                <div class="tab-pane fade active show" id="employee_information" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
{{--                                            <h4>Employee Information</h4>--}}
                                            <table class="table table-bordered text-center table-hover m-0">
                                                <tr>
                                                    <td>Employee Code</td>
                                                    <td id="employee_ids"></td>
                                                </tr>
                                                <tr>
                                                    <td>Employee Name</td>
                                                    <td id="employee_name"></td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name</td>
                                                    <td id="employee_father"></td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name</td>
                                                    <td id="employee_mother"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td id="gender"></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth</td>
                                                    <td id="date_of_birth"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nationality</td>
                                                    <td id="nationality"></td>
                                                </tr>
                                                <tr>
                                                    <td>ID Type</td>
                                                    <td id="id_type"></td>
                                                </tr>
                                                <tr>
                                                    <td>ID Number</td>
                                                    <td id="id_number"></td>
                                                </tr>
                                                <tr>
                                                    <td>Permanent Address</td>
                                                    <td id="permanent_address"></td>
                                                </tr>
                                                <tr>
                                                    <td>Present Address</td>
                                                    <td id="present_address"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="office_information" role="tabpanel">
                                   <div class="row">
                                       <div class="col-md-12">
{{--                                           <h4>Office Information</h4>--}}
                                           <table class="table table-bordered text-center table-hover m-0">
                                               <tr>
                                                   <td>Designation</td>
                                                   <td id="designation"></td>
                                               </tr>
                                               <tr>
                                                   <td>Shift Date</td>
                                                   <td id="shift_date"></td>
                                               </tr>
                                               <tr>
                                                   <td>Shift</td>
                                                   <td id="shift_id"></td>
                                               </tr>
                                               <tr>
                                                   <td>Joining Date</td>
                                                   <td id="joining_date"></td>
                                               </tr>
                                               <tr>
                                                   <td>Confirmation Date</td>
                                                   <td id="confirmation_date"></td>
                                               </tr>
                                           </table>
                                       </div>
                                   </div>
                                </div>
                                <div class="tab-pane fade" id="education" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <table id="employeeEducation-table" class="table text-center table-bordered table-hover table-striped w-100">
                                                <thead class="bg-primary-600">
                                                <tr>
                                                    <th>Institute</th>
                                                    <th>Education Type</th>
                                                    <th>Passing Year</th>
                                                    <th>Degree</th>
                                                    <th>CGPA</th>
                                                    <th>GPA</th>
                                                </tr>
                                                </thead>
                                                <tbody id="educationData">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="experience" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <table id="exprience-table" class="table text-center table-bordered table-hover table-striped w-100">
                                                <thead class="bg-primary-600">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Previous Workplace</th>
                                                    <th>Designation</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                </tr>
                                                </thead>
                                                <tbody id="experienceData">

                                                </tbody>
                                            </table>
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/api/employee-api/show/"+{{$id}},
            type: "GET",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {

                // Employee Information
                $(".employee_id").text(response.employee_code);
                $("#employee_ids").text(response.employee_code);
                $("#employee_name").text(response.employee_name);
                $("#employee_father").text(response.employee_name);
                $("#employee_mother").text(response.employee_name);
                $("#gender").text(response.gender);
                $("#date_of_birth").text(response.date_of_birth);
                $("#nationality").text(response.nationality);
                $("#id_type").text(response.id_type);
                $("#id_number").text(response.id_number);
                $("#present_address").text(response.present_address);
                $("#permanent_address").text(response.permanent_address);

                // Office Information
                $("#shift_date").text(response.office_information.shift_date);
                $("#designation").text(response.office_information.designation);
                if (response.office_information.shift_id === '1'){
                    $("#shift_id").text('Morning Shift');
                }else if(response.office_information.shift_id === '2'){
                    $("#shift_id").text('Evening Shift');
                }else{
                    $("#shift_id").text('Night Shift');
                }
                $("#joining_date").text(response.office_information.joining_date);
                $("#confirmation_date").text(response.office_information.confirmation_date);

                // Education
                $("#institute_name").text(response.education.institute_name);
                $("#education_type").text(response.education.education_type);
                $("#passing_year").text(response.education.passing_year);
                $("#total_cgpa").text(response.education.total_cgpa);
                $("#cgpa").text(response.education.cgpa);
                $("#gpa").text(response.education.gpa);
                console.log(response.experience);
                if(response.education.length > 0) {
                    response.education.forEach(education => {
                        $("#educationData").append(`
                            <tr>
                                <td>${education.institute_name}</td>
                                <td>${education.education_type}</td>
                                <td>${education.passing_year}</td>
                                <td>${education.education_type}</td>
                                <td>${education.total_cgpa ? education.total_cgpa : '-'}</td>
                                <td>${education.gpa ? education.gpa : '-'}</td>
                            </tr>
                        `)
                    })
                }
                if (response.experience.length > 0){
                    response.experience.forEach((experience, key) => {
                        $('#experienceData').append(`
                            <tr>
                                <td>${key+1}</td>
                                <td>${experience.previous_workplace}</td>
                                <td>${experience.designation}</td>
                                <td>${experience.start_date}</td>
                                <td>${experience.end_date}</td>
                            </tr>
                        `)
                    })
                }else{
                    $('#experience').addClass('d-none');
                    $('#experienceTab').addClass('d-none');
                }
            },
        });

    </script>

@endsection
