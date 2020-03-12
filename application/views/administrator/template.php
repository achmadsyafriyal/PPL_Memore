<style type="text/css">
	.sidebar .menu .list .ml-menu i.material-icons {
		font-size: 14px;
		margin-top: 1px;
		margin-right: 10px;
	}

	.bootstrap-select {
		border: 1px solid #ccc !important;
	}
</style>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?php echo $title; ?></title>
	<!-- Favicon-->
	<!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/" /> -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- JQuery DataTable Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

	<!-- Morris Chart Css-->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

	<!-- Bootstrap Material Datetime Picker Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

	<!-- Wait Me Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/waitme/waitMe.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/ themes instead of get all themes -->
	<link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-white">
	<!-- Page Loader -->
	<!-- <div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Please wait...</p>
		</div>
	</div> -->
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
	<nav class="navbar bg-gradient">
		<?php include('top-navbar.php') ?>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<?php include('sidebar_menu.php') ?>
		</aside>
		<!-- #END# Left Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<?php echo $contents; ?>
		</div>
	</section>

	<!-- Jquery Core Js -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<!-- Bootstrap Core Js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

	<!-- Jquery CountTo Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-countto/jquery.countTo.js"></script>

	<!-- Morris Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.js"></script>

	<!-- ChartJs -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/chartjs/Chart.bundle.js"></script>

	<!-- Flot Charts Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.categories.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.time.js"></script>

	<!-- Sparkline Chart Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<!-- Autosize Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/autosize/autosize.js"></script>

	<!-- Moment Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

	<!-- Bootstrap Material Datetime Picker Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/pages/index.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
	<script type="text/javascript">
		function jam() {
			var waktu = new Date();
			var jam = waktu.getHours();
			var menit = waktu.getMinutes();
			var detik = waktu.getSeconds();

			if (jam < 10) {
				jam = "0" + jam;
			}
			if (menit < 10) {
				menit = "0" + menit;
			}
			if (detik < 10) {
				detik = "0" + detik;
			}
			var jam_div = document.getElementById('jam');
			jam_div.innerHTML = jam + ":" + menit + ":" + detik;
			setTimeout("jam()", 1000);
		}
		jam();
	</script>

	<script>
		$(function() {
			$("#tampil").click(function() {
				var vtanggal = $("#vtanggal").val();
				$.ajax({
					url: "<?php echo site_url('administrator/tampil_data'); ?>",
					type: "POST",
					data: "vtanggal=" + vtanggal,
					cache: false,
					success: function(html) {
						$("#tampil_data").html(html);
					}
				})
			})

		})
	</script>

</body>

</html>
