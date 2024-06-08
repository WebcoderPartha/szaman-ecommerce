@extends('backend.layout.app')
@section('title', 'Edit Employee')
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">HRMS</a></li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Edit Employee</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <small>
                Edit Employee
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <form id="employeeForm" enctype="multipart/form-data">
                @csrf
                <div id="panel-5" class="panel">

                    <div class="panel-container show">

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
                                    <a class="nav-link tab2" href="javascript:void(0)"  onclick="openTab('tab2')"><i class="fal fa-box mr-1"></i> Office Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab3" href="javascript:void(0)"  onclick="openTab('tab3')"><i class="fal fa-box mr-1"></i> Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab4" href="javascript:void(0)"  onclick="openTab('tab4')"><i class="fal fa-box mr-1"></i> Experience</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-3">
                                <div  id="tab1" class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_name">Employee Name</label>
                                                <input type="text" id="employee_name" name="employee_name" placeholder="Employee name" class="form-control">
                                                <small class="text-danger" id="msg_employee_name"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_father">Father name</label>
                                                <input type="text" id="employee_father" name="employee_father" class="form-control" placeholder="Employee father name">
                                                <small class="text-danger" id="msg_employee_father"></small>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="employee_mother">Mother name</label>
                                                <input type="text" id="employee_mother" name="employee_mother" class="form-control" placeholder="Employee mother name">
                                                <small class="text-danger" id="msg_employee_mother"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="phone_number">Phone Number</label>
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter phone number">
                                                <small class="text-danger" id="msg_phone_number"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label for="" class="form-label">Gender</label>
                                                <div class="frame-wrap">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input gender" value="Male" id="Male" name="gender">
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
                                                <input type="text" name="id_number" class="form-control" placeholder="Ex:3454353234" id="id_number">
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
                                                <textarea class="form-control" id="present_address" name="present_address" rows="5" placeholder="Enter present address"></textarea>
                                                <small class="text-danger" id="msg_present_address"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="permanent_address">Permanent Address</label>
                                                <textarea class="form-control" id="permanent_address" name="permanent_address" rows="5" placeholder="Enter permanent address"></textarea>
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
                                                <input type="checkbox" class="custom-control-input selfaccesscheck" name="self_access" value="has_self_access" id="self_access">
                                                <label class="custom-control-label" for="self_access">Self Access</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 selfAccessField d-none">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="email_address">Email Address</label>
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
                                                <input class="form-control date" id="shift_date" type="text" name="shift_date" autocomplete="off">
                                                <small class="text-danger" id="msg_shift_date"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="shift_id">Shift</label>
                                                <select class="form-control select2" name="shift_id" id="shift_id">
                                                    <option value="">Choose shift</option>
                                                </select>
                                                <small class="text-danger" id="msg_shift_id"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="designation">Designation</label>
                                                <input type="text" name="designation" class="form-control" placeholder="Ex: Reporter" id="designation">
                                                <small class="text-danger" id="msg_designation"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="joining_date">Joining Date</label>
                                                <input class="form-control date" id="joining_date" type="text" name="joining_date" autocomplete="off">
                                                <small class="text-danger" id="msg_joining_date"></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pt-2">
                                                <label class="form-label" for="confirmation_date">Confirmation Date</label>
                                                <input class="form-control date" disabled id="confirmation_date" type="text" name="confirmation_date" autocomplete="off">
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
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-info mt-4" onclick="prevTab()">Back</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary float-right mt-4" onclick="nextTab()">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div  id="tab3" class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form id="educationForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="education_type">Education</label>
                                                            <select class="form-control select2" id="education_type">
                                                                <option value="">Choose education</option>
                                                            </select>
                                                            <small class="text-danger" id="msg_education_type"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="passing_year">Passing Year</label>
                                                            <input type="text" name="passing_year" class="form-control" placeholder="ex: 2020" id="passing_year">
                                                            <small class="text-danger" id="msg_passing_year"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox" style="margin-top: 10px">
                                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                                            <label class="custom-control-label" for="defaultUnchecked">CGPA</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox" style="margin-top: 10px">
                                                            <input type="checkbox" class="custom-control-input" id="division">
                                                            <label class="custom-control-label" for="division">Division</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-none" id="cgpa_field">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="cgpa">CGPA</label>
                                                            <select class="form-control" id="cgpa">
                                                                <option value="">Select Cgpa</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-none" id="total_cgpa_field">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="total_cgpa">Total CGPA</label>
                                                            <input type="text" name="total_cgpa" class="form-control" id="total_cgpa" placeholder="ex: 4.42">
                                                            <small class="text-danger" id="msg_total_cgpa"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 d-none " id="division_field">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="divisionvalue">Choose Division</label>
                                                            <select class="form-control" id="divisionvalue" name="divisionvalue">
                                                                <option value="">Select division</option>
                                                                <option value="1st Division">1st Division</option>
                                                                <option value="2nd Division">2nd Division</option>
                                                                <option value="3rd Division">3rd Division</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="gpa">GPA</label>
                                                            <input type="text" name="gpa" class="form-control" id="gpa" placeholder="ex: 4.42">
                                                            <small class="text-danger" id="msg_gpa"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="institute_name">Institute Name</label>
                                                            <input type="text" name="institute_name" class="form-control" id="institute_name" placeholder="Ex: Dhaka Collage">
                                                            <small class="text-danger" id="msg_institute_name"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pt-2 text-right">
                                                            <button id="educationFormBtn" class="btn btn-dark" type="button">Save </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- datatable start -->
                                            <table id="employeeEducation-table" class="table text-center table-bordered table-hover table-striped w-100">
                                                <thead class="bg-primary-600">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Versity Name</th>
                                                    <th>Passing Year</th>
                                                    <th>Degree</th>
                                                    <th>CGPA</th>
                                                    <th>Division</th>
                                                    <th>GPA</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody id="educationData">

                                                </tbody>
                                            </table>
                                            <!-- datatable end -->
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-info mt-4" onclick="prevTab()">Back</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary float-right mt-4" onclick="nextTab()">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div  id="tab4" class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form id="experienceForm">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="previous_workplace">Previous Workplace</label>
                                                            <input type="text" name="previous_workplace" class="form-control" placeholder="Ex: SZamanTech" id="previous_workplace" autocomplete="off">
                                                            <small class="text-danger" id="msg_previous_workplace"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="experience_designation">Designation</label>
                                                            <input type="text" name="experience_designation" class="form-control" placeholder="Ex: Designer" id="experience_designation" autocomplete="off">
                                                            <small class="text-danger" id="msg_experience_designation"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="start_date">Start Date</label>
                                                            <input type="text" name="start_date" class=" date form-control" placeholder="{{ date('Y-m-d') }}" id="start_date" autocomplete="off">
                                                            <small class="text-danger" id="msg_start_date"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="form-label" for="end_date">End Date</label>
                                                            <input type="text" name="end_date" class=" date form-control" placeholder="{{ date('Y-m-d') }}" id="end_date" autocomplete="off">
                                                            <small class="text-danger" id="msg_end_date"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group pt-2 text-right">
                                                            <button id="experienceFormBtn" class="btn btn-dark" type="button">Save </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- datatable start -->
                                            <table id="experience-table" class="table text-center table-bordered table-hover table-striped w-100">
                                                <thead class="bg-primary-600">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Previous Workplace</th>
                                                    <th>Designation</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                            <!-- datatable end -->
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-info mt-4" onclick="prevTab()">Back</button>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" id="user_id" name="user_id">
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
                $('.tab3').removeClass('active')
                $('.tab4').removeClass('active')
            }else if (tabId === 'tab2'){
                $('.'+tabId).addClass('active')
                $('.tab1').removeClass('active')
                $('.tab3').removeClass('active')
                $('.tab4').removeClass('active')
            }else if (tabId === 'tab3'){
                $('.'+tabId).addClass('active')
                $('.tab1').removeClass('active')
                $('.tab2').removeClass('active')
                $('.tab4').removeClass('active')
            }else{
                $('.'+tabId).addClass('active')
                $('.tab1').removeClass('active')
                $('.tab2').removeClass('active')
                $('.tab3').removeClass('active')
            }

        }

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

        // Select2 plugin
        $('.select2').select2();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Self Access
        $('#self_access').click(function(){
            if($("#self_access").is(':checked')){
                $('.selfAccessField').removeClass('d-none');
            }else{
                $('.selfAccessField').addClass('d-none');
            }
        });


        $(document).ready(function() {

            var table = $('#employeeEducation-table').removeAttr('width').DataTable({
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
                    url: "/api/education-api/"+{{$id}},
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
                        data: 'institute_name',
                        name: 'institute_name',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'passing_year',
                        name: 'passing_year',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'education_type',
                        name: 'education_type',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'total_cgpa',
                        name: 'total_cgpa',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'division',
                        name: 'division',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'gpa',
                        name: 'gpa',
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

            var experienceTable = $('#experience-table').removeAttr('width').DataTable({
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
                    url: "/api/experience-api/"+{{$id}},
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
                        data: 'previous_workplace',
                        name: 'previous_workplace',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'designation',
                        name: 'designation',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'start_date',
                        name: 'start_date',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'end_date',
                        name: 'end_date',
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
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    axios.get(`/api/education-api/destroy/`+id).then(response => {
                        Toast.fire({
                            icon: "success",
                            title: response.data.success
                        });

                        var table = $('#employeeEducation-table').removeAttr('width').DataTable({
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
                                url: "/api/education-api/"+{{$id}},
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
                                    data: 'institute_name',
                                    name: 'institute_name',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'passing_year',
                                    name: 'passing_year',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'education_type',
                                    name: 'education_type',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'total_cgpa',
                                    name: 'total_cgpa',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'division',
                                    name: 'division',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'gpa',
                                    name: 'gpa',
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
                    // window.location.href = `/api/education-api/destroy/`+id
                    // let url = $(this).attr('href');
                }
            });
        }

        function delete_experience(id){
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {

                    axios.get(`/api/experience-api/destroy/`+id).then(response => {
                        Toast.fire({
                            icon: "success",
                            title: response.data.success
                        });
                        var experienceTable = $('#experience-table').removeAttr('width').DataTable({
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
                                url: "/api/experience-api/"+{{$id}},
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
                                    data: 'previous_workplace',
                                    name: 'previous_workplace',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'designation',
                                    name: 'designation',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'start_date',
                                    name: 'start_date',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'end_date',
                                    name: 'end_date',
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
            });
        }

        // Education Type
        $.ajax({
            method: "GET",
            url: "{{ route('educationtype-api.index') }}",
            dataType: "json",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {
                if(response.data.length > 0) {
                    response.data.forEach(item => {
                        $("#education_type").append(`<option value='${item.education_type}'> ${item.education_type}</option>`)
                    })
                }
            }
        });

        // Get Edit Data by Employee Id
        $.ajax({
            url: "/api/employee-api/show/"+{{$id}},
            type: "GET",
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`
            },
            success: function(response) {
                $("#employee_name").val(response.employee_name);
                $("#employee_father").val(response.employee_father);
                $("#employee_mother").val(response.employee_mother);
                $("#phone_number").val(response.phone_number);

                // Gender
                if (response.gender === 'Male'){
                    $("#Male").attr('checked', true);
                }else{
                    $("#Female").attr('checked', true);
                }

                $("#date_of_birth").val(response.date_of_birth);
                $("#id_number").val(response.id_number);
                $("#punch_id").val(response.punch_id);
                $("#present_address").val(response.present_address);
                $("#permanent_address").val(response.permanent_address);
                $("#shift_date").val(response.office_information.shift_date);
                $("#designation").val(response.office_information.designation);
                $("#joining_date").val(response.office_information.joining_date);
                $("#confirmation_date").val(response.office_information.confirmation_date);

                $("#id_type").val(response.id_type).prop('selected', true);
                $("#imagePreview").attr('src', "/storage/employee/"+response.image);

                // Office Shift
                $.ajax({
                    method: "GET",
                    url: "{{ route('shift-api.index') }}",
                    dataType: "json",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(shiftRes) {
                        // console.log(response.data.length)
                        if(shiftRes.data.length > 0) {
                            shiftRes.data.forEach(item => {
                                $("#shift_id").append(`<option value='${item.shift_name}'> ${item.shift_name}</option>`)
                            })
                            $("#shift_id").val(response.office_information.shift_id).prop('selected', true);
                        }
                    }
                });

                // Country Fetch From API
                $.ajax({
                    method: "GET",
                    // url: "https://restcountries.com/v3.1/all",
                    url: "{{ route('country-api.countrylist') }}",
                    dataType: "json",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(nationalRes) {
                        if(nationalRes.length > 0) {
                            nationalRes.forEach(el => {
                                $("#nationality").append(`<option value='${el.country_name}'> ${el.country_name}</option>`)
                            });
                            $("#nationality").val(response.nationality).prop('selected', true);
                        }
                    }
                });

                // Id Type Fetch from API
                $.ajax({
                    method: "GET",
                    url: "{{ route('identity-api.index') }}",
                    dataType: "json",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(residtype) {
                        // console.log(response.data.length)
                        if(residtype.data.length > 0) {
                            residtype.data.forEach(item => {
                                $("#id_type").append(`<option value='${item.id_type}'> ${item.id_type}</option>`)
                                // console.log(item.id_type)

                            })
                            $("#id_type").val(response.id_type).prop('selected', true);
                        }
                    }
                });

                // Department API Generate
                $.ajax({
                    method: "GET",
                    url: "{{ route('department-api.index') }}",
                    dataType: "json",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(responses) {

                        // console.log(response.data.length)
                        if(responses.data.length > 0) {
                            responses.data.forEach(department => {
                                $("#department_id").append(`<option value='${department.id}'> ${department.department_name}</option>`)
                                // console.log(item.id_type)
                            })
                            $("#department_id").val(response.office_information.department_id).prop('selected', true);
                        }
                    }
                });

                // Employee User API Generate
                $.ajax({
                    method: "GET",
                    url: "/api/employee-user-api/"+response.employee_code,
                    dataType: "json",
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(ressefaccess) {
                        if (ressefaccess.email.length > 0){
                            $('.selfaccesscheck').prop('checked', true);
                            $('.selfAccessField').removeClass('d-none');
                            $('#email_address').val(ressefaccess.email);
                        }
                    }
                });

                // $("#education_type").val(response.education.education_type).prop('selected', true);
                // $("#passing_year").val(response.education.passing_year);

                // If Cgpa value not empty
                // if (response.education.total_cgpa.length > 0){
                //     $("#defaultUnchecked").prop('checked', true);
                //     $('#total_cgpa_field').removeClass('d-none')
                //     $('#cgpa_field').removeClass('d-none')
                // }
                // $("#cgpa").val(response.education.cgpa);
                // $("#total_cgpa").val(response.education.total_cgpa);
                // $("#gpa").val(response.education.gpa);
                // $("#institute_name").val(response.education.institute_name);
                // console.log(response)
                // $("#successMsg").text(response.success).removeClass('d-none');
                // $('#employeeForm')[0].reset();
            },
        });

        // Jquery Date picker
        $( ".date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat : 'yy-mm-dd',
            yearRange: "-100:+0"
        });

        $('#defaultUnchecked').click(function(){
            if($("#defaultUnchecked").is(':checked')){
                $('#cgpa_field').removeClass('d-none');
                $('#total_cgpa_field').removeClass('d-none');
            }else{
                $('#cgpa_field').addClass('d-none');
                $('#total_cgpa_field').addClass('d-none');
            }
        })

        $('#division').click(function(){
            if($("#division").is(':checked')){
                $('#division_field').removeClass('d-none');
            }else{
                $('#division_field').addClass('d-none');
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


        $('#joining_date').change(function (){
            $('#popupbutton').click();
        });

        $('.confirmationDate').click(function (e) {
            // Date picker should be here
            // Next month set

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

        // Sweet alert
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });

        // Education
        $('#educationFormBtn').click(function (e){
           e.preventDefault() ;

            // Education Field
            let education_type = $('#education_type').val();
            let passing_year = $('#passing_year').val();
            let cgpa = $('#cgpa').val();
            let total_cgpa = $('#total_cgpa').val();
            let gpa = $('#gpa').val();
            let institute_name = $('#institute_name').val();
            let divisionvalue = $('#divisionvalue').val();
            let educationData = {
                education_type: education_type,
                passing_year: passing_year,
                cgpa: cgpa,
                total_cgpa: total_cgpa,
                gpa: gpa,
                institute_name: institute_name,
                division: divisionvalue
            }

            if (!education_type.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Education type is required!"
                });
            }else if (!passing_year > 0){
                Toast.fire({
                    icon: "error",
                    title: "Passing year is required!"
                });
            }
            else if(!institute_name > 0){
                Toast.fire({
                    icon: "error",
                    title: "Institute name is required!"
                });
            }else{

                $.ajax({
                    url: "/api/education-api/store/"+{{$id}},
                    type: "POST",
                    data: educationData,
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(response) {
                        $('#education_type').val(null).trigger('change');
                        $('#passing_year').val('');
                        $('#cgpa').val('');
                        $('#total_cgpa').val('');
                        $('#gpa').val('');
                        $('#institute_name').val('');
                        // $('#educationForm').reset();
                        Toast.fire({
                            icon: "success",
                            title: response.success
                        });

                        var table = $('#employeeEducation-table').removeAttr('width').DataTable({
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
                                url: "/api/education-api/"+{{$id}},
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
                                    data: 'institute_name',
                                    name: 'institute_name',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'passing_year',
                                    name: 'passing_year',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'education_type',
                                    name: 'education_type',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'total_cgpa',
                                    name: 'total_cgpa',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'division',
                                    name: 'division',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'gpa',
                                    name: 'gpa',
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
                    },
                });
            }


        });

        // Experience
        $('#experienceFormBtn').click(function (e){
            e.preventDefault() ;

            // Education Field
            let previous_workplace = $('#previous_workplace').val();
            let experience_designation = $('#experience_designation').val();
            let start_date = $('#start_date').val();
            let end_date = $('#end_date').val();
            let experienceData = {
                previous_workplace: previous_workplace,
                designation: experience_designation,
                start_date: start_date,
                end_date: end_date
            }

            if (!previous_workplace.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Previous workplace is required!"
                });
            }else if (!experience_designation.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Designation is required!"
                });
            }
            else if(!start_date.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "Start date is required!"
                });
            }else if(!end_date.length > 0){
                Toast.fire({
                    icon: "error",
                    title: "End date is required!"
                });
            }else{
                $.ajax({
                    url: "/api/experience-api/store/"+{{$id}},
                    type: "POST",
                    data: experienceData,
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    success: function(response) {
                        $('#previous_workplace').val('');
                        $('#experience_designation').val('');
                        $('#start_date').val('');
                        $('#end_date').val('');
                        Toast.fire({
                            icon: "success",
                            title: response.success
                        });
                        var experienceTable = $('#experience-table').removeAttr('width').DataTable({
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
                                url: "/api/experience-api/"+{{$id}},
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
                                    data: 'previous_workplace',
                                    name: 'previous_workplace',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'designation',
                                    name: 'designation',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'start_date',
                                    name: 'start_date',
                                    searchable: true,
                                    orderable: false
                                },
                                {
                                    data: 'end_date',
                                    name: 'end_date',
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
                    },
                });
            }


        });

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

            // Office Information
            let shift_date = $('#shift_date').val();
            let shift_id = $('#shift_id').val();
            let joining_date = $('#joining_date').val();
            let confirmation_date = $('#confirmation_date').val();
            let designation = $('#designation').val();

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

                axios.post("/api/employee-api/update/"+{{$id}}, formData)
                    .then(function (response) {
                        $('#employeeForm')[0].reset();
                        // window.location = '/employee'
                        Toast.fire({
                            icon: "success",
                            title: response.data.success
                        });
                        setTimeout(()=> {
                            window.location = '/employee';
                        },1500)
                });

            }
        });


    </script>

@endsection
