
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Invome : Invome Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Invome : Invome Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Invome : Invome Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://invome.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Invome Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" style="background-image: url('{{asset('')}}assets/images/login_image.jpg');"></body>

<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index-1.html"><img src="{{asset('')}}assets/images/admin/logo-dark.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                     <form action="{{route('admin.auth')}}" method="post">
                               @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <br>
                                          <div class="alert alert-danger" role="alert">
                                    {{session('error') }}
                                  
                                    
                                </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="{{asset('')}}assets/vendor/global/global.min.js"></script>
    <script src="{{asset('')}}assets/js/custom.min.js"></script>
    <script src="{{asset('')}}assets/js/dlabnav-init.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
		var type="{{Session::get('alert-type','success')}}"

        

		switch(type){
			
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
        @endif
    </script>
	
</body>
</html>