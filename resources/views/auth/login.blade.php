{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}





<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobick.dexignlab.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2025 09:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>VisasBuzz - Admin Login</title> 

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
            <h4 class="text-center mb-4">Login to your account</h4>
            
            <form method="POST" action="{{ route('admin.login') }}" onsubmit="showLoader()">
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

            
           
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
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
