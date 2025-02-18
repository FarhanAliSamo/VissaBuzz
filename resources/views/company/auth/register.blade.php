<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobick.dexignlab.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2025 09:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>VisasBuzz - Company Register</title> 

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/png" href="/assets/admin/public/images/favicon.png">
    <link  href="/assets/admin/css/style.css" rel="stylesheet">
    
</head>
       
<body>
    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
				<div class="col-lg-5 col-md-6">
    <div class="card mb-0 h-auto">
        <div class="card-body">
            <div class="text-center mb-3">
                <a href="index-2.html"><img class="logo-auth" src="/assets/admin/images/logo-full.png" alt=""></a>
            </div>
            <h4 class="text-center mb-4">Sign up your account</h4>
            
            <form method="POST" action="{{ route('company.register') }}" onsubmit="showLoader()">
                @csrf
                <div class="form-group mb-4">
                    <label class="form-label required" for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="form-label required" for="email">Email</label>
                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" id="email" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-sm-4 mb-3 position-relative">
                    <label class="form-label required" for="dlab-password">Password</label>
                    <input type="password" id="dlab-password" name="password" class="form-control" required>
                    <span class="show-pass eye">
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-sm-4 mb-3 position-relative">
                    <label class="form-label required" for="dlab-1-password" >Confirm Password</label>
                    <input type="password" name="password_confirmation" id="dlab-1-password" class="form-control" required>
                    <span class="show-pass eye">
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">
                        <span id="button-text">Sign up</span>
                        <span id="button-loader" class="spinner-border spinner-border-sm" role="status" style="display: none;"></span>
                    </button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Already have an account? <a class="text-primary" href="{{route('company.login')}}">Sign in</a></p>
            </div>
        </div>
    </div>
</div>
			</div>
		</div>
    </div>
    
    <script>
        function showLoader() {
            document.getElementById('button-text').style.display = 'none';
            document.getElementById('button-loader').style.display = 'inline-block';
        }
    </script>
	
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<!-- Required vendors -->
<script src="/assets/admin/vendor/global/global.min.js" type="text/javascript"></script>
<script src="/assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/assets/admin/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/custom.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/dlabnav-init.js" type="text/javascript"></script>
<script src="/assets/admin/js/demo.js" type="text/javascript"></script>
<script src="/assets/admin/js/styleSwitcher.js" type="text/javascript"></script>
            	
	</body>

<!-- Mirrored from jobick.dexignlab.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2025 09:51:16 GMT -->
</html>