<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Kasir Deteksi Barang</title>
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
				
				<a href="index-kasir.html" class="logo">
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

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset('/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">Admin@admin.com</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a href="/logout" class="dropdown-item">Logout</a>
										<!-- <a class="dropdown-item" href="{{ route('logout') }}" method="POST"
											onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       		@csrf
                                    	</form> -->
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<div class="main-panel">
			@yield('kasir')
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

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 100,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 100,
				"scrollY": "50vh",
				"scrollCollapse": true,
			});
		});
	</script>
</body>
</html>