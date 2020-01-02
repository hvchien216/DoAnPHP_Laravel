<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Đăng nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
       
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		
	</head>

    <body class="authentication-bg authentication-bg-pattern" style="background-color:black">
	<div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
						
                            <div class="card-body p-4">
							<h5 class="auth-title">Sign In</h5>

							<form action="{{route('xu-ly-dang-nhap')}}" method="POST">
							@csrf
								@if(count($errors)>0)
                                <div class="alert alert-danger" id="thong_bao_3s">
									<ul>
                                        <li>{{$errors->first()}}</li>
									</ul>
                                </div> 
                				@endif
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
										<input class="form-control" type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Enter your username">
									</div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
										<input class="form-control" type="password" name="mat_khau" id="mat_khau" placeholder="Enter your password">
									</div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
				@if (session('thongbao'))     
                <script typpe="text/javascript">
                    function sessionn(){
                        Swal.fire({
                        type:"warning",
                        title:"{{session('thongbao')}}",
                        showConfirmButton:!1,
                        timer:2000})}
                </script>
                @endif                

	<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<!-- Sweet Alerts js -->
	<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
	@if(Session::has('thongbao'))
        <script>
        sessionn();
        </script>  
	@endif
    </body>
</html>