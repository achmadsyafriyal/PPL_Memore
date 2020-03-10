<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/kc.png" type="image/png">
	<link href="<?php echo base_url(); ?>assets/login/plugin/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/app/css/app-login-v2.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/plugin/sweetalert/css/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>assets/login/plugin/sweetalert/js/sweetalert.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>Login Memore</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		body,
		h1 {
			font-family: "Raleway", sans-serif
		}

		body,
		html {
			height: 100%
		}

		.bgimg {
			/* background-image: url('<?php echo IMAGE_PATH; ?>/1.jpg'); */
			/* background-color: peachpuff; */
			min-height: 100%;
			background-position: center;
			background-size: cover;
		}
	</style>

</head>

<body>
	<div class="container animated fadeIn">
		<div class="card card-container w3-animate-opacity">
			<img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
			<p id="profile-name" class="judul"><br>ME'MORE LOGIN</p>
			<hr>
			<?php
			if ($this->input->post('email') != '') {
				echo "<div class='alert alert-warning'><center>$title</center></div>";
			} elseif ($this->input->post('a') != '') {
				echo "<div class='alert alert-danger'><center>$title</center></div>";
			}
			?>
			<!-- <div class="w3-display-middle w3-animate-opacity"> -->
			<!-- <h2 class="w3-jumbo " style=" color: black">ME'MORE LOGIN</h2> -->
			<form class="w3-container" method="post">
				<!-- <label>User Name</label> -->
				<input class="w3-input w3-border w3-light-grey" type="text" id="name" placeholder="Username">
				<br>
				<!-- <label>Password</label> -->
				<input class="w3-input w3-border w3-light-grey" type="password" id="pwd" placeholder="Password">
				<br>
				<input class="w3-btn w3-white w3-border w3-round-large" type="submit" value="Login" id="submit">
				<div id='err_msg' style='display: none'>
					<div id='content_result'>
						<div id='err_show' class="w3-text-red">
							<div id='msg'> </div></label>
						</div>
					</div>
				</div>
			</form>
			<!-- </div> -->
		</div>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		// Ajax post
		$(document).ready(function() {
			$("#submit").click(function() {
				var username = $("#name").val();
				var password = $("#pwd").val();
				// Returns error message when submitted without req fields.
				if (username == '' || password == '') {

					alert('Harap diisi terlebih dahulu');
					// jQuery("div#err_msg").show();
					// jQuery("div#msg").html("All fields are required");
				} else {
					// AJAX Code To Submit Form.
					$.ajax({
						type: "POST",
						url: "<?php echo site_url('login/check_login'); ?>",
						data: {
							name: username,
							pwd: password
						},
						cache: false,
						success: function(result) {
							if (result != 0) {
								// On success redirect.
								window.location.replace(result);
								// window.location.href = "dashboard/";
								alert('Login Sukses');
							} else
								jQuery("div#err_msg").show();
							jQuery("div#msg").html("Login Failed");
						}
					});
				}
				return false;
			});
		});
	</script>
