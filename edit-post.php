<!-- Powerd By Mohamed Hany -->

<?php

    include "fun/edit_ques.php";

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Edit | GProg World</title>

        <link href="edit-profile/css/bootstrap.min.css" rel="stylesheet">

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=7">

        <meta name="author" content="Mohamed Hany">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
        
        <link href="edit-profile/css/datepicker3.css" rel="stylesheet">

        <link href="assets/css/create.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
        <style>

            body {

            --sb-track-color: #232E33;

            --sb-thumb-color: #6BAF8D;

            --sb-size: 6px;

            }

            body::-webkit-scrollbar {

            width: var(--sb-size)

            }

            body::-webkit-scrollbar-track {

            background: var(--sb-track-color);

            border-radius: 1px;

            }

            body::-webkit-scrollbar-thumb {

            background: var(--sb-thumb-color);

            border-radius: 1px;
            
            }

            @supports not selector(::-webkit-scrollbar) {

                body {

                    scrollbar-color: var(--sb-thumb-color)

                                    var(--sb-track-color);

                }

            }

            .back {

                border: none;

                background-color: rgb(184, 16, 16);

                color: white;

                font-size: 16px;

                padding: 11px;

                border-radius: 8px;

            }

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

            a {

            text-decoration: none; 

            color: inherit; 

            vertical-align: middle; 

            }

            a img {

                text-decoration: none !important;

                color: rgb(53, 53, 53);

                margin: 0;

                padding: 0;

                vertical-align: middle; 

            }

            a:active {

                text-decoration: none !important;
                
                color: rgb(53, 53, 53);

            }

            a:visited {

                text-decoration: none !important;

                color: rgb(53, 53, 53);

            }
            
            a:focus {

                text-decoration: none !important;

                color: rgb(53, 53, 53);

            }

        </style>

    </head>

    <body>

	    <div class="container text-center align-items-center justify-content-between">

            <a href="profile.php?username=<?php echo urlencode($user['username']); ?>">

                <button class="back"><i class="fa-solid fa-left-long"></i> Back</button>
            </a>

            <br>  <br>
        
	        <div class="col-sm-12 text-center col-lg-12 main">
		
		        <div class="row">

			        <div class="col-lg-12">

			            <h2 class="page-header">
                            
                            <i class="fa-solid fa-pen"></i> Edit Question
                        
                        </h2>

                    </div>
                    
                </div>
                
            <?php if (!empty($error_message)): ?>

            <div class="alert alert-danger" role="alert">

            <?= $error_message ?>

            </div>

            <?php endif; ?>

            <br>

            <form action="edit-post.php?id=<?=$post['id']?>" method="POST" enctype="multipart/form-data">

                <div class="row mt-5 pt-5">

                    <br>  <br>  <br>
                    
                    <p>Question & Problem Text :</p><br>

                    <textarea class="email" required name="post_text" style="height: 150px;" cols="30" rows="10"><?= $post['post_text'] ?></textarea>
                    
                    <br>  <br>  <br>

                    <p class="mt-5 pt-5">Change Question & Problem's Photo</p><br>

                    <input class="form-control" type="file" name="image" id="image">

                    <br>  <br>  <br>

                    <p class="mt-5 pt-5">Change Question & Problem's Video</p><br>

                    <input class="form-control" type="file" name="video" id="video">

                    <br>  <br>  <br>

                    <p>Note: If your Question & Problem is not related to programming or our community, GProg will delete it. Please make sure your Question & Problem is related to programming or programming-related fields, otherwise you will face problems.</p>
                    
                    <br>  <br>  <br>         
                    
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Share</button>
                
                </div>
            
            </form>

            <br>
   
            <div style="height: 200px; width: 100%; border: .1px solid black; margin-left: 13px; display: flex; align-items: center; justify-content: center; text-align: center;">
                
                <p style="font-size: 18px; font-weight: bold;">مساحة اعلانية</p>
                
            </div>   

            <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>	
	
		
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

  <script src="edit-profile/js/jquery-1.11.1.min.js"></script>

  <script src="edit-profile/js/bootstrap.min.js"></script>

  <script src="edit-profile/js/chart.min.js"></script>

  <script src="edit-profile/js/chart-data.js"></script>

  <script src="edit-profile/js/easypiechart.js"></script>

  <script src="edit-profile/js/easypiechart-data.js"></script>

  <script src="edit-profile/js/bootstrap-datepicker.js"></script>

  <script src="edit-profile/js/custom.js"></script>

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
