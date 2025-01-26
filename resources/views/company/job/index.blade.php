@extends('company.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Jobs</h3>
                <div>
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".create-modal-lg"
                        class="btn btn-primary me-3"><i class="fas fa-plus me-2"></i>Add
                        Job
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Job Title</th>
                                        <th>Seniority</th>
                                        <th>Industry</th>
                                        <th>Job Type</th>
                                        <th>Experience</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
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



 
    {{-- //  Add Modal ----- --}}
    <div class="modal fade create-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Job</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="createForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Job Title</label>
                                <input type="text" class="form-control solid"   placeholder="Title"
                                    aria-label="name" name="job_title" required>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Seniority</label>
                                <select class="default-select wide form-control solid" name="seniority_id" required>
                                    <option selected>Choose...</option>
                                    @foreach ($seniorities as $seniority)
                                        <option value="{{$seniority->id}}">{{$seniority->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Industry</label>
                                <select class="default-select wide form-control solid" name="industry_id" required>
                                    <option selected>Choose...</option>

                                    @foreach ($industries as $industry)
                                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                                    @endforeach
                                     
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Job Type</label>
                                <select class="default-select wide form-control solid" name="job_type_id" required>
                                    <option selected>Choose...</option>
                                    @foreach ($job_types as $job_type)
                                        <option value="{{$job_type->id}}">{{$job_type->name}}</option>
                                    @endforeach
 
                                </select>
                            </div>
                   
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select Experience:</label>
                                <select class="default-select wide form-control solid" name="experience_id" required>
                                    <option selected>Choose...</option>
                                    
                                    @foreach ($job_experiences as $job_experience)
                                        <option value="{{$job_experience->id}}">{{$job_experience->name}}</option>
                                    @endforeach
                                   

                                </select>
                            </div>
                            
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select Gender:</label>
                                <select class="default-select wide form-control solid" name="gender" required>
                                    <option selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="any">Any</option>

                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Salary From</label>
                                <input type="number" class="form-control solid" name="salary_from" placeholder="10,000"
                                    aria-label="name" required>
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Salary To</label>
                                <input type="number"  class="form-control solid" name="salary_to" placeholder="20,000"
                                    aria-label="name" required>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select Currency:</label>
                                <select name="currency" class="default-select wide form-control solid required" required>
                                    <option selected>PKR</option>
                                    <option>EUR</option>
                                    <option>INR</option>
                                    <option>DOLLAR</option>
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Location:</label>
                                <select name="location" class="default-select wide form-control solid required" required >
                                    <option  selected>Choose...</option>
                                    <option value="onsite">Onsite</option>
                                    <option value="remote">Remote</option>
                                    <option value="hybrid">Hybrid</option>
                                </select>
                            </div>                           

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Country</label>
 
                                <select name="country_id" class="default-select wide form-control solid required" required onchange="fetchCities(this.value)" >
                                    <option selected>Choose...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select City:</label>
                                <select name="city_id" id="city" class="default-select wide form-control solid required" required>
                                    <option selected>Choose...</option>
                                </select>
                            </div>
                            
 
                            <div class="col-xl-12 mb-4">
                                <label class="form-label required">Job Description:</label>
                                <textarea class="form-control solid" name="job_description" required rows="5" aria-label="With textarea"></textarea>
                            </div>
 
                            <div class="col-xl-12 mb-4">
                                <label class="form-label required">Candidate Profile:</label>
                                <textarea class="form-control solid" name="candidate_profile" rows="5" aria-label="With textarea" required></textarea>
                            </div>


                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Job</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
    {{-- //  Edit Modal ----- --}}
    <div class="modal fade edit-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="updateForm">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control solid" name="description" hidden id="updateId">

                    <div class="modal-body">
                        <div class="row gy-3">

                            <div class=" col-12">
                                <label class="form-label required">Name</label>
                                <input type="text" name="name" id="name" class="form-control solid" name="description" placeholder="Name"
                                    aria-label="name" required>
                            </div>
                            

                            <div class=" col-12">
                                <label class="form-label required">Email</label>
                                <input type="email" name="email" id="email" class="form-control solid" name="description" placeholder="Email"
                                    aria-label="email" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label required">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control solid password-field"  placeholder="Password" 
                                           aria-label="password" required>
                                    <button type="button" class="btn btn-primary toggle-password" >
                                        <i class="fas fa-eye"></i> <!-- Font Awesome Icon -->
                                    </button>
                                </div>
                            </div>
                           
                            <div class=" col-12">
                                <label class="form-label required">Roles</label>
                                <select class="form-select form-control" style="height: 100%" name="roles[]" id="rolesId" multiple>
                                    
                                </select>
                            </div>

 
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        let table
         
   
        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('#example3')) {
                $('#example3').DataTable().destroy();
            }
            // Initialize DataTable using Yajra
            table = $('#example3').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('company.jobs.data') }}", // URL for the DataTable data
                columns: [
                    { data: 'id' },
                    { data: 'job_title' },
                    { data: 'seniority.name' },
                    { data: 'industry.name' },
                    { data: 'job_type.name' }, // Ensure this column is included
                    { data: 'experience.name' },
                    { data: 'country.name' },
                    { data: 'city.name' },
                    { data: 'created_at' },
                    { data: 'updated_at' },
                    { data: 'actions', orderable: false, searchable: false }
                ],
                order: [
                    [0, 'desc']
                ], // Default order by ID descending
                language: {
                    paginate: {
                        next: '<i class="fa fa-angle-right"></i>',
                        previous: '<i class="fa fa-angle-left"></i>'
                    }
                },
                lengthMenu: [
                    [10, 25, 50, 100, 200],
                    [10, 25, 50, 100, 200]
                ],
                pageLength: 10
            });
        });

        $(document).ready(function() {

            $('#createForm').on('submit', function(e) {
                e.preventDefault();

                let $submitButton = $(this).find('button[type="submit"]');
                let originalText = $submitButton.html(); // Save original button text

                // Add loader to the button and disable it
                $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);

                let formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    url: "{{ url('company/jobs') }}", // Your route URL
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Toast.fire({
                                icon: "success",
                                title: response.message
                            });
                            $('#createForm')[0].reset(); // Reset the form
                            $('.create-modal-lg').modal('hide'); // Close the modal
                            table.ajax.reload();
                            // Optionally, reload data in your table or update the view
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = '';
                            $.each(errors, function(key, value) {
                                errorMessages += value[0] + '\n';
                            });
                            Toast.fire({
                                icon: "error",
                                title: errorMessages
                            });
                            // alert(errorMessages);
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    },
                    complete: function() {
                        // Reset the button after the request is complete
                        $submitButton.html(originalText).prop('disabled', false);
                    }
                });
            });

            $('#updateForm').on('submit', function(e) {
                e.preventDefault();

                let $submitButton = $(this).find('button[type="submit"]');
                let originalText = $submitButton.html(); // Save original button text

                // Add loader to the button and disable it
                $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating...'
                    )
                    .prop('disabled', true);

                let formData = $(this).serialize(); // Serialize form data
                let updateId = $('#updateId').val()

                $.ajax({
                    url: `{{ url('company/jobs/${updateId}') }}`, // Your route URL
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Toast.fire({
                                icon: "success",
                                title: response.message
                            });
                            $('#updateForm')[0].reset(); // Reset the form
                            $('.edit-modal-lg').modal('hide'); // Close the modal
                            table.ajax.reload();
                            // Optionally, reload data in your table or update the view
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = '';
                            $.each(errors, function(key, value) {
                                errorMessages += value[0] + '\n';
                            });
                            Toast.fire({
                                icon: "error",
                                title: errorMessages
                            });
                            // alert(errorMessages);
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    },
                    complete: function() {
                        // Reset the button after the request is complete
                        $submitButton.html(originalText).prop('disabled', false);
                    }
                });
            });
        })

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        function destroy(id) {
            var button = document.querySelector(`button[data-delete-btn-id='${id}']`);
            button.disabled = true;
            button.innerHTML =
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';


            $.ajax({
                url: `{{ url('company/jobs/${id}/delete') }}`, // Your route URL
                type: "GET",

                success: function(response) {


                    if (response.success) {
                        Toast.fire({
                            icon: "success",
                            title: response.message
                        });

                        table.ajax.reload();
                        // Optionally, reload data in your table or update the view
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '';
                        $.each(errors, function(key, value) {
                            errorMessages += value[0] + '\n';
                        });
                        button.disabled = false;
                        button.innerHTML =
                            '<i class="fa fa-trash"></i>';

                        Toast.fire({
                            icon: "error",
                            title: errorMessages
                        });
                        // alert(errorMessages);
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: 'Something went wrong, Please Refresh Page'
                        });
                    }
                },

            });

        }

        function edit(id) {
            $('#rolesId').html('');

            $.ajax({
                url: `{{ url('company/jobs/${id}/edit') }}`, // Your route URL
                type: "GET",

                success: function({
                    data,userRoles,roles
                }) {
                    
                    $('#name').val(data.name)
                    $('#email').val(data.email)
                    $('#updateId').val(data.id)
 
                    roles.forEach(role => {
                        
                        let isSelected = userRoles.some(userRole => userRole === role) ? 'selected' : '';

                    $('#rolesId').append(`
                        <option ${isSelected} value="${role}">${role}</option>      
                    `);
                });

                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '';
                        $.each(errors, function(key, value) {
                            errorMessages += value[0] + '\n';
                        });

                        Toast.fire({
                            icon: "error",
                            title: errorMessages
                        });
                        // alert(errorMessages);
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: 'Something went wrong, Please Refresh Page'
                        });
                    }
                },

            });

        }


// Get all password toggle buttons
const toggleButtons = document.querySelectorAll('.toggle-password');

toggleButtons.forEach(button => {
    button.addEventListener('click', function() {

         
        // Find the password input - assuming it's the previous sibling
        // Use closest to find the nearest parent container and then find input
        const passwordInput = document.querySelectorAll('.password-field');
        const icon = this.querySelector('i');

        passwordInput.forEach((d)=>{
            // Toggle password visibility
            if (d.type === 'password') {
                d.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                d.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        })

           
       
    });
});

    function fetchCities(countryId) {
        const citySelect = $('#city');
        
        $.ajax({
            url: `/company/get-cities/${countryId}`,
            type: 'GET',
            success: function(response) {
                response.data.forEach(city => {
                    citySelect.empty().append('<option selected>Choose...</option>'); // Empty the dropdown first
                    citySelect.append(`<option value="${city.id}">${city.name}</option>`);
                });
                citySelect.selectpicker('refresh'); // Refresh the dropdown
            },
            error: function(xhr) {
                console.error('Error fetching cities:', xhr);
            }
        });
    }
    </script>
@endsection
