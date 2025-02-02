@extends('admin.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Users</h3>
                <div>
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".create-modal-lg"
                        class="btn btn-primary me-3"><i class="fas fa-plus me-2"></i>Add
                        User
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
                                        <th>Name</th>
                                        <th>Roles</th>
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
        <div class="modal-dialog ">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Create User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="createForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row gy-3">

                            <div class=" col-12">
                                <label class="form-label required">Name</label>
                                <input type="text" name="name" class="form-control solid" placeholder="Name"
                                    aria-label="name" required>
                            </div>
                            

                            <div class=" col-12">
                                <label class="form-label required">Email</label>
                                <input type="email" name="email" class="form-control solid" placeholder="Email"
                                    aria-label="email" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label required">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password"  class="form-control solid password-field" placeholder="Password" 
                                           aria-label="password" required>
                                    <button type="button" class="btn btn-primary toggle-password" >
                                        <i class="fas fa-eye"></i> <!-- Font Awesome Icon -->
                                    </button>
                                </div>
                            </div>
                           
                            <div class=" col-12">
                                <label class="form-label required">Roles</label>
                                <select class="default-select form-control wide" name="roles[]"  multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{$role}}">{{$role}}</option>      
                                    @endforeach
                                </select>
                            </div>
 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
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
                    <input type="text" class="form-control solid" hidden id="updateId">

                    <div class="modal-body">
                        <div class="row gy-3">

                            <div class=" col-12">
                                <label class="form-label required">Name</label>
                                <input type="text" name="name" id="name" class="form-control solid" placeholder="Name"
                                    aria-label="name" required>
                            </div>
                            

                            <div class=" col-12">
                                <label class="form-label required">Email</label>
                                <input type="email" name="email" id="email" class="form-control solid" placeholder="Email"
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
                ajax: "{{ url('admin/users/data') }}", // URL for the DataTable data
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'roles'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'updated_at'
                    },
                    {
                        data: 'actions',
                        orderable: false,
                        searchable: false
                    }
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
                // dom: '<"top"lf>rt<"bottom"ip><"clear">',
                lengthMenu: [
                    [10, 25, 50, 100, 200, ],
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
                    url: "{{ url('admin/users') }}", // Your route URL
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
                    url: `{{ url('admin/`/${updateId}') }}`, // Your route URL
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
                url: `{{ url('admin/users/${id}/delete') }}`, // Your route URL
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
                url: `{{ url('admin/users/${id}/edit') }}`, // Your route URL
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

    </script>
@endsection
