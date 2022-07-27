<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin Deteksi Barang</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/atlantis.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('/css/demo.css')}}">
</head>
<body>
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue2">		
				<a href="index-admin.html" class="logo">
					<img src="{{asset('/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			</div>
			<!-- End Logo Header -->
			@include('base.navbar')
            
		</div>

		@include('base.sidebar')

        <!-- ISI -->

		<div class="main-panel">
			@yield('content')
            <!-- end ISI -->
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link">
									Tugas Akhir Deteksi Barang
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2021, made Indonesia <i class="fa fa-heart heart text-danger"></i> by Maulana Mahmuddin</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('/js/core/popper.min.js')}}"></script>
	<script src="{{asset('/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

	<!-- Moment JS -->
	<script src="{{asset('/js/plugin/moment/moment.min.js')}}"></script>

	<!-- Chart JS -->
	<script src="{{asset('/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset('/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{asset('/js/plugin/datatables/datatables.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{asset('/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Google Maps Plugin -->
	<script src="{{asset('/js/plugin/gmaps/gmaps.js')}}"></script>

	<!-- Dropzone -->
	<script src="{{asset('/js/plugin/dropzone/dropzone.min.js')}}"></script>

	<!-- Fullcalendar -->
	<script src="{{asset('/js/plugin/fullcalendar/fullcalendar.min.js')}}"></script>

	<!-- DateTimePicker -->
	<script src="{{asset('/js/plugin/datepicker/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{asset('/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

	<!-- Bootstrap Wizard -->
	<script src="{{asset('/js/plugin/bootstrap-wizard/bootstrapwizard.js')}}"></script>

	<!-- jQuery Validation -->
	<script src="{{asset('/js/plugin/jquery.validate/jquery.validate.min.js')}}"></script>

	<!-- Summernote -->
	<script src="{{asset('/js/plugin/summernote/summernote-bs4.min.js')}}"></script>

	<!-- Select2 -->
	<script src="{{asset('/js/plugin/select2/select2.full.min.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Owl Carousel -->
	<script src="{{asset('/js/plugin/owl-carousel/owl.carousel.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('/js/atlantis.min.js')}}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('/js/setting-demo.js')}}"></script>
	<script src="{{asset('/js/demo.js')}}"></script>
	<script>
		$('#birth').datetimepicker({
			format: 'MM/DD/YYYY'
		});

		$('#state').select2({
			theme: "bootstrap"
		});

		/* validate */

		// validation when select change
		$("#state").change(function(){
			$(this).valid();
		})

		// validation when inputfile change
		$("#img").on("change", function(){
			$(this).parent('form').validate();
		})

		$("#exampleValidation").validate({
			validClass: "success",
			rules: {
				gender: {required: true},
				confirmpassword: {
					equalTo: "#password"
				},
				birth: {
					date: true
				},
				uploadImg: {
					required: true, 
				},
			},
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			},
		});
	</script>
	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {
				
				$('#alert_demo_3_3').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "success",
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});
				});
			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
</body>
</html>