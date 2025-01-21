<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobick.dexignlab.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2025 09:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Company Login</title> 

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend">
	<meta name="description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, its a best choice.">
	<meta property="og:title" content="Jobick : Laravel Job Admin Dashboard Bootstrap 5 Template">
	<meta property="og:description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, its a best choice." >
	<meta property="og:image" content="../../xhtml/social-image.html">
	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="Jobick : Laravel Job Admin Dashboard Bootstrap 5 Template">
	<meta name="twitter:description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, its a best choice.">
	<meta name="twitter:image" content="../social-image.html">
	<meta name="twitter:card" content="summary_large_image">
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
            
            <form method="POST" action="{{ route('company.login') }}" onsubmit="showLoader()">
                @csrf
                
                <div class="form-group mb-4">
                    <label class="form-label required" for="email">Email</label>
                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" id="email" required>
                    @error('email')
                        <div class="text-danger p-2">{{ $message }}</div>
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
                    <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>

              
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">
                        <span id="button-text">Sign in</span>
                        <span id="button-loader" class="spinner-border spinner-border-sm" role="status" style="display: none;"></span>
                    </button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Already have an account? <a class="text-primary" href="{{route('company.register')}}">Sign in</a></p>
            </div>
        </div>
    </div>
</div>
			</div>
		</div>
    </div>
	
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
<script>
    function showLoader() {
        document.getElementById('button-text').style.display = 'none';
        document.getElementById('button-loader').style.display = 'inline-block';
    }
</script>
            	
	</body>

<!-- Mirrored from jobick.dexignlab.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2025 09:51:16 GMT -->
</html>
