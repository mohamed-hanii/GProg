<!-- Powerd By Mohamed Hany -->

<?php

	include "../update/update_edu.php";

?>


<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=7">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="author" content="Mohamed Hany">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

		<title>GProg World | Edit Profile</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
		
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<style>

			.email {

				width: 80%;

				height: 40px;

				border: none;

				border-bottom: 1px solid green;

				background-color: white;

			}

			select {

				width: 25%;

				height: 30px;

				border-radius: 30%;

				border: none;

				border-bottom: 1px solid green;

			}

		</style>

	</head>

	<body>

		<div class="container">

		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

			<div class="container-fluid">

				<div class="navbar-header ">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span></button>
					<a class="navbar-brand"href="#">Edit Profile | <span style="color: green; font-size: 24px;">GProg</span></a>
				
				</div>

			</div>

	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

<div class="profile-sidebar">

	<div class="profile-userpic">

		<img src="<?= '../' . 'uploads/' . $user['profile_img'] ?>" class="img-responsive" alt="<?= $user['username'] ?>">
	
	</div>
	
	<div class="profile-usertitle">
		
		<div style="font-size:16px;font-family:cursive;" class="profile-usertitle-name">@<?= $user['username'] ?></div>
	
	</div>
	
	<div class="clear"></div>

</div>

<div class="divider"></div>

<ul class="nav menu">

	<li class="">
	
		<a href="index.php">
		
			<i class="fa-solid fa-gear"></i> Account Settings
			
		</a>
	
	</li>
	
	<li class="parent active">
	
		<a data-toggle="collapse" href="#sub-item-1">
		
			<i class="fa-solid fa-user-pen"></i> Edit Profile <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		
		<ul class="children collapse" id="sub-item-1">

			<li><a class="" href="basics.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Basics
			</a></li>

			<li><a class="" href="work.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Work
			</a></li>

			<li><a class="" href="edu.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Education
			</a></li>

			<li><a class="" href="locat.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Location
			</a></li>

			<li><a class="" href="field.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Fields 
			</a></li>

			<li><a class="" href="langs.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Languages
			</a></li>

			<li><a class="" href="exper.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Experiences
			</a></li>

			<li><a class="" href="link.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Social Links
			</a></li>

		</ul>

	</li>
	
	<li class="parent "><a data-toggle="collapse" href="#sub-item-2">

		<i class="fa-solid fa-shield-halved"></i>  Security <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
		
		</a>
		
		<ul class="children collapse" id="sub-item-2">

			<li><a class="" href="pass.php">
				<span class="fa fa-arrow-right">&nbsp;</span> Password
			</a></li>
			
		</ul>

	</li>	

	<li><a href="../home.php"><i class="fa-solid fa-house"></i> Back To Home</a></li>
	
	<li><a href="#"><i class="fa-solid fa-code"></i> Go To GProg</a></li>
	
	<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
	
	<li><a href="change.php"><i class="fa-solid fa-language"></i> Change Language</a></li>
	
	<br>
	
	<li><a href="../profile.php?username=<?php echo urlencode($user['username']); ?>">

		<i class="fa-solid fa-arrow-left"></i> Back</a>
	
	</li>		

</ul>

</div>
		
	<div class="col-sm-9 text-center col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<div class="row">

			<div class="col-lg-12">

				<h3 class="page-header"><i class="fa-solid fa-school"></i> Education</h1>

			</div>

		</div>

		<div class="card w-75 mb-3" style="border: 1px solid black;">

			<div class="card-body">

			  <h5 class="card-title">مساحة اعلانية</h5>

			</div>

		  </div>

		<br>  <br>  <br>

		<form action="edu.php" method="POST">

		<div class="row mt-5 pt-5 ">

			<p class="mt-5 pt-5">Your School Or University :</p><br>

			<input class="email" name="edu_school" value="<?= $user['edu_school'] ?>" type="text"><br><br><br>
			
			<p class="mt-5 pt-5">Education Degree :</p><br>
			
			<input class="email" name="edu_degree" value="<?= $user['edu_degree'] ?>" type="text"><br><br><br>
			
			<p class="mt-5 pt-5">Education Country :</p><br>
			
			<input class="email" name="edu_country" value="<?= $user['edu-country'] ?>" type="text"><br><br><br>
			
			<p class="mt-5 pt-5">Education Languages :</p><br>
            
			<input class="email" name="edu_lang" value="<?= $user['edu_lang'] ?>" type="text"><br><br><br>
        
		<br>  <br>  <br>  <br>			
		
		<button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>

         </div>

		</form>
		
	
			<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>	
	
		
	</div>

</div>

<script>

	const selectElement = document.getElementById('yarr');

	const startYear = 1950;

	const endYear = 2024;

	for (let year = startYear; year <= endYear; year++) {

		const option = document.createElement('option');
		
		option.value = year;

		option.textContent = year;

		selectElement.appendChild(option);

	}

</script>

		<script src="js/jquery-1.11.1.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/chart.min.js"></script>

		<script src="js/chart-data.js"></script>

		<script src="js/easypiechart.js"></script>

		<script src="js/easypiechart-data.js"></script>

		<script src="js/bootstrap-datepicker.js"></script>

		<script src="js/custom.js"></script>

		<script>

				window.onload = function () {

				var chart1 = document.getElementById("line-chart").getContext("2d");

				window.myLine = new Chart(chart1).Line(lineChartData, {

				responsive: true,

				scaleLineColor: "rgba(0,0,0,.2)",

				scaleGridLineColor: "rgba(0,0,0,.05)",

				scaleFontColor: "#c5c7cc"

				});

			};

		</script>
	
</body>

</html>

<!-- Powerd By Mohamed Hany -->