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
                                <label class="form-label ">Seniority (optional) </label>
                                <select class="default-select wide form-control solid" name="seniority_id"  >
                                    <option value="" selected >Choose...</option>
                                    @foreach ($seniorities as $seniority)
                                        <option value="{{$seniority->id}}">{{$seniority->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Industry</label>
                                <select class="default-select wide form-control solid" name="industry_id" required>

                                    <option disabled selected >Choose...</option>

                                    @foreach ($industries as $industry)
                                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                                    @endforeach
                                     
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Job Type</label>
                                <select class="default-select wide form-control solid" name="job_type_id" required >
                                    <option disabled selected >Choose...</option>
                                    @foreach ($job_types as $job_type)
                                        <option value="{{$job_type->id}}">{{$job_type->name}}</option>
                                    @endforeach
 
                                </select>
                            </div>
                   
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label ">Select Experience (optional) : </label>
                                <select class="default-select wide form-control solid" name="experience_id"  >
                                    <option value="" selected >Choose...</option>
                                    
                                    @foreach ($job_experiences as $job_experience)
                                        <option value="{{$job_experience->id}}">{{$job_experience->name}}</option>
                                    @endforeach
                                   

                                </select>
                            </div>
                            
                            <div class="col-xl-6  col-md-6 mb-4">

                                <label class="form-label required">Select Gender:</label>
                                <select class="default-select wide form-control solid" name="gender" required>
                                    <option disabled selected  >Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="any">Any</option>
                                </select>

                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Salary From (optional)</label>
                                <input type="number" class="form-control solid" name="salary_from" placeholder="10,000"
                                    aria-label="name"  >
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Salary To (optional)</label>
                                <input type="number"  class="form-control solid" name="salary_to" placeholder="20,000"
                                    aria-label="name"  >
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Select Currency (optional) :</label>
                                <select name="currency" class="default-select wide form-control solid  "  >
                                    <option value="" selected  >Choose...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->currency}}">{{$country->currency}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Location:</label>
                                <select name="location" class="default-select wide form-control solid required" required >
                                    <option disabled selected>Choose...</option>
                                    <option value="onsite">Onsite</option>
                                    <option value="remote">Remote</option>
                                    <option value="hybrid">Hybrid</option>
                                </select>
                            </div>                           

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Country</label>
                                <select name="country_id"  class="default-select wide form-control solid required" required onchange="fetchCities(this.value)" >
                                    <option disabled selected>Choose...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select City:</label>
                                <select name="city_id" id="city" class="default-select wide form-control solid required" required>
                                    <option disabled selected >Choose...</option>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="updateForm">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control solid" name="description" hidden id="updateId">

                    <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Job Title</label>
                                <input type="text" class="form-control solid" id="job_title"   placeholder="Title"
                                    aria-label="name" name="job_title" required>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Seniority  (optional) </label>
                                <select class="default-select wide form-control solid" name="seniority_id" id="seniority"  >
                                    <option value="" selected>Choose...</option>
                                
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Industry</label>
                                <select class="default-select wide form-control solid" name="industry_id" id="industry" required>
                                    <option disabled selected>Choose...</option>
 
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Job Type</label>
                                <select class="default-select wide form-control solid" name="job_type_id" id="job_type"  required>
                                    <option disabled selected>Choose...</option>
                                    
 
                                </select>
                            </div>
                   
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select Experience  (optional) :</label>
                                <select class="default-select wide form-control solid" name="experience_id" id="experience"  >
                                    <option value="" selected>Choose...</option>
                           

                                </select>
                            </div>
                            
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select Gender:</label>
                                <select class="default-select wide form-control solid" name="gender" id="gender" required>
                                    <option disabled selected>Choose...</option>
                                   

                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Salary From  (optional) </label>
                                <input type="number" class="form-control solid" name="salary_from" placeholder="10,000" 
                                    aria-label="name" id="salary_from"  >
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label  ">Salary To  (optional) </label>
                                <input type="number"  class="form-control solid" name="salary_to" placeholder="20,000"
                                    aria-label="name" id="salary_to"   >
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label ">Select Currency  (optional) :</label>
                                <select name="currency"  class="default-select wide form-control solid  " id="currency"   >
                                    <option value="" selected>Choose...</option>
 
                                </select>
                            </div>

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Location:</label>
                                <select name="location" class="default-select wide form-control solid required" id="location" required >
                                    <option disabled selected>Choose...</option>
                                    
                                </select>
                            </div>                           

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Country</label>
                                <select name="country_id" class="default-select wide form-control solid required" required onchange="fetchCities(this.value,1)" id="country">
                                    <option disabled selected>Choose...</option>
                                   
                                </select>
                            </div>
                            

                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label required">Select City:</label>
                                <select name="city_id" id="city_update" class="default-select wide form-control solid required" required>
                                    <option disabled selected>Choose...</option>
                                </select>
                            </div>
                            
 
                            <div class="col-xl-12 mb-4">
                                <label class="form-label required">Job Description:</label>
                                <textarea class="form-control solid" name="job_description" required rows="5" aria-label="With textarea" id="job_description"></textarea>
                            </div>
 
                            <div class="col-xl-12 mb-4">
                                <label class="form-label required">Candidate Profile:</label>
                                <textarea class="form-control solid" name="candidate_profile" rows="5" aria-label="With textarea" required id="candidate_profile"></textarea>
                            </div>


                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Job</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
 
@endsection

@section('script')
    <script>
        let seniorities_array = @json($seniorities);
        let industries_array = @json($industries);
        let job_types_array = @json($job_types);
        let job_experiences_array = @json($job_experiences);
        let countries_array = @json($countries);


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
           
            $.ajax({
                url: `{{ url('company/jobs/${id}/edit') }}`, // Your route URL
                type: "GET",

                success: function({
                    data
                }) {
                    console.log(data)
                   
                    $('#updateId').val(data.id)
                    $('#job_title').val(data.job_title)
                     
                    $('#salary_from').val(data.salary_from)
                    $('#salary_to').val(data.salary_to)
             
                    $   ('#job_description').val(data.job_description)
                    $('#candidate_profile').val(data.candidate_profile)
 
                    $('#industry').empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                    industries_array.forEach(d => {
                        $('#industry').append(`
                            <option ${data.industry_id == d.id ? 'selected' : ''} value="${d.id}">${d.name}</option>      
                        `);
                    });
                    $('#industry').selectpicker('refresh');

                    $('#seniority').empty().append('<option value="" selected>Choose...</option>'); // Empty the dropdown first
                    seniorities_array.forEach(d => {
                        $('#seniority').append(`
                            <option ${data.seniority_id == d.id ? 'selected' : ''} value="${d.id}">${d.name}</option>      
                        `);
                    });
                    $('#seniority').selectpicker('refresh');

                    $('#job_type').empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                    job_types_array.forEach(d => {
                        $('#job_type').append(`
                            <option ${data.job_type_id == d.id ? 'selected' : ''} value="${d.id}">${d.name}</option>      
                        `);
                    });
                    $('#job_type').selectpicker('refresh');
 

                    $('#experience').empty().append('<option value="" selected>Choose...</option>'); // Empty the dropdown first
                    job_experiences_array.forEach(d => {
                        $('#experience').append(`
                            <option ${data.experience_id == d.id ? 'selected' : ''} value="${d.id}">${d.name}</option>      
                        `);
                    });
                    $('#experience').selectpicker('refresh');
  

                    $('#currency').empty().append('<option value="" selected>Choose...</option>'); // Empty the dropdown first
                    countries_array.forEach(d => {
                        $('#currency').append(`
                            <option ${data.currency == d.currency ? 'selected' : ''} value="${d.currency}">${d.currency}</option>      
                        `);
                    });
                    $('#currency').selectpicker('refresh');
 

                    $('#country').empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                    countries_array.forEach(d => {
                        $('#country').append(`
                            <option ${data.country_id == d.id ? 'selected' : ''} value="${d.id}">${d.name}</option>      
                        `);
                    });
                    $('#country').selectpicker('refresh');

                    $('#location').empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                    $('#location').append(`
                        <option value="onsite" ${data.location == 'onsite' ? 'selected' : ''} >Onsite</option>
                        <option value="remote" ${data.location == 'remote' ? 'selected' : ''} >Remote</option>
                        <option value="hybrid" ${data.location == 'hybrid' ? 'selected' : ''} >Hybrid</option>      
                    `);
                    $('#location').selectpicker('refresh');
 

                    $('#gender').empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                    $('#gender').append(`
                        <option ${data.gender == 'male' ? 'selected' : ''} value="male">Male</option>
                        <option ${data.gender == 'female' ? 'selected' : ''} value="female">Female</option>
                        <option ${data.gender == 'any' ? 'selected' : ''} value="any">Any</option>      
                    `);
                    $('#gender').selectpicker('refresh');
  
                    
                    fetchCities(data.country_id,1,data.city_id)

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

    function fetchCities(countryId,isUpdate,city_id = null) {
        
        let citySelect;
        if(isUpdate){
            citySelect = $('#city_update');
        }else{
            citySelect = $('#city');
        }
        $.ajax({
            url: `/company/get-cities/${countryId}`,
            type: 'GET',
            success: function(response) {
                citySelect.empty().append('<option disabled selected>Choose...</option>'); // Empty the dropdown first
                response.data.forEach(city => {
                    citySelect.append(`<option ${city.id == city_id ? 'selected' : ''} value="${city.id}">${city.name}</option>`);
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
