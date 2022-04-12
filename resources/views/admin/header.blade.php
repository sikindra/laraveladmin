
<!DOCTYPE html>
<html lang="en">

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
    <!-- Datatable -->
    <link href="{{asset('')}}assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{asset('')}}assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    
	<link href="{{asset('')}}assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('')}}assets/vendor/nouislider/nouislider.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

</head>

<body>

  
   <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
   
    <div id="main-wrapper">

        
	    <div class="nav-header">
            <a href="index-1.html" class="brand-logo">
				
                <br>
				<div class="brand-title">
					<h2 class=""><img src="{{asset('assets/images/admin/')}}/logo-dark.png" alt="" style="width: 200px;"><span></span></h2>
					<span class="brand-sub-title">Kukum Admin</span>
					
				</div>

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
     
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                 Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							
							
							
							
							
							
							<li class="nav-item invoices-btn">
                               
                                <div class="dropdown header-profile2 ">
									<a  class="btn btn-primary ms-5" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
										<div class="header-info2 d-flex align-items-center border" style="border: 0px solid #EEEEEE !important;">
											<img src="{{asset('assets/images/admin/')}}/{{session('ADMIN_IMAGE')}}" alt="" style="    width: 77px; height: 68px; border-radius: 35px; background: black;">
											<div class="d-flex align-items-center sidebar-info">
												<div>
													<span class="font-w700 d-block mb-2" style="margin-left: 14px;"> {{session('ADMIN_NAME')}}</span>
													
												</div>
												<i class="fas fa-sort-down ms-4" style="margin-top: -11px;"></i>
											</div>
											
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="background: #44814e;">
										<a href="{{asset('')}}admin/edit_profile" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
											<span class="ms-2">Profile </span>
										</a>
										
										<a href="{{asset('')}}admin/logout" class="dropdown-item ai-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ms-2">Logout </span>
										</a>
									</div>
				                </div>
                                
                            </li>
							
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center border">
							<img src="{{asset('assets/images/admin/')}}/{{session()->get('ADMIN_IMAGE')}}" alt="">
							<div class="d-flex align-items-center sidebar-info">
								<div>
                                    
									<span class="font-w700 d-block mb-2">{{session()->get('ADMIN_NAME')}} </span>
									<small class="text-end font-w400">Admin</small>
								</div>
								<i class="fas fa-sort-down ms-4"></i>
							</div>
							
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="{{asset('')}}admin/edit_profile" class="dropdown-item ai-icon ">
							<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Profile </span>
						</a>
						
						<a href="{{asset('')}}admin/logout" class="dropdown-item ai-icon">
							<svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</div>
				<ul class="metismenu" id="menu">
                    <li><a  href="{{asset('')}}admin/dashboard" aria-expanded="false">
							<i class="fas fa-tachometer-alt"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       

                    </li>
					 
                    
                    
                </ul>
				
				
			</div>
        </div>
        @section('container')
                            
                        @show
        
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('')}}assets/vendor/global/global.min.js"></script>
    <script src="{{asset('')}}assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="{{asset('')}}assets/vendor/apexchart/apexchart.js"></script>
	
    <!-- Datatable -->
    <script src="{{asset('')}}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins-init/datatables.init.js"></script>

	<script src="{{asset('')}}assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    
    <script src="{{asset('')}}assets/js/custom.min.js"></script>
	<script src="{{asset('')}}assets/js/dlabnav-init.js"></script>
	<script src="{{asset('')}}assets/js/demo.js"></script>
     <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	 <script src="{{asset('')}}assets/vendor/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
    
      
        $(document).ready(function (e) {
			$(document).ready(function() {
                $("#textarea-input").summernote();
                $('.dropdown-toggle').dropdown();
            });
         
           
           $('#image').change(function(){
                    
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });
           
        });
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
         $(document).ready(function(){
                if($("#admin_password").length > 0)
                {
                  $('#admin_password').validate({
                    rules:{
                      
                      password:{
                          required:true,
                          minlength:6,
                          maxlength:100
                      },
                      confirm_password:{
                          required:true,
                          equalTo:'#password'
                      }
                      
                    },
                    messages : {
                      
                       password : {
                         required : 'Enter you new password',
                         maxlength : 'password should not be more than 50 character'
                       },
                       confirm_password : {
                         required : 'Need  to Confirm you new password',
                         
                       }
                      
                    }
                  });
                }
                
                });
    
        
        </script>
        
    <style>
		li.option {
    color: black;
    border: 0.0625rem solid #000000;
}
span.current {
    color: black;
}
		
		button.note-btn {
				background: black;
			}
        .error {
        color: #FF0000;
        margin-top: 7px;
    }
    label#doc-error {
    margin-top: 84px;
}
    </style>

</body>
</html>