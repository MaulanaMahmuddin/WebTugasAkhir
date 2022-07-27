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
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			@include('base.header')
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
	<script src="/js/plugin/select2/select2.full.min.js')}}"></script>

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
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
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
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});

		$('#alert_demo_7').click(function(e) {
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				buttons:{
					confirm: {
						text : 'Yes, delete it!',
						className : 'btn btn-success'
					},
					cancel: {
						visible: true,
						className: 'btn btn-danger'
					}
				}
			}).then((Delete) => {
				if (Delete) {
					swal({
						title: 'Deleted!',
						text: 'Your file has been deleted.',
						type: 'success',
						buttons : {
							confirm: {
								className : 'btn btn-success'
							}
						}
					});
				} else {
					swal.close();
				}
			});
		});
	</script>
</body>
</html>
