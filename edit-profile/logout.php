<!-- Powerd By Mohamed Hany -->

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


			<div class="col-sm-12 text-center col-lg-12  main">
				
				<div class="row">

					<div class="col-lg-12">

						<h3 class="page-header"><em class="fa fa-power-off">&nbsp;</em> Logout</h1>

					</div>

				</div>

				<div class="card w-75 mb-3" style="border: 1px solid black;">

					<div class="card-body">

					<h5 class="card-title">مساحة اعلانية</h5>

					</div>

				</div>

				<br  ><br>  <br>

				<div class="row mt-5 pt-5 ">

					<p class="mt-5 pt-5">Are You Sure ?</p><br>

					<a href="../update/go_logout.php">	<button class="btn btn-danger">Yes Logout</button><br></a>

					<br>			
				
					<a href="../home.php"><button class="btn btn-primary">Go Back</button></a>

				</div>
				
				
			
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