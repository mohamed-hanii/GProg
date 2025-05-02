<!-- Powerd By Mohamed Hany -->

<?php

    include "header/chats_header.php";


?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <style>

          .back{
            
            padding: 13px;

            margin-bottom: 30px;

            background-color: transparent;

            border: none;

            font-size: 40px;

            font-family: monospace;

            cursor: pointer;

            opacity: .5;

          }

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

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/style-message.css">

  </head>

  <body>

    <div class="container">
          
      <h1 class="headh1 text-center mb-5 mt-5">

          <a href="home.php">

            <button class="back">

            <i class="fa-solid fa-left-long"></i> Back

            </button>
          
          </a> 
   
      <div class="card w-100 mb-3">

        <div class="card-body">

          <h5 class="card-title" style="overflow: hidden;">مساحة اعلانية</h5>

        </div>

      </div>

      </h1>

      <div class="row justify-content-center">

      <div class="col-12 lang-div">

        <a href="new-con.php">+ New Conversation</a>

      </div>

      <?php

          include "loop/chats_loop.php";
          
      ?>

   
    </div>

    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  

  </div>

  <script src="assets/js/aos.js"></script>

  <script src="assets/js/fontawesome.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <script src="assets/js/jquery.min.js"></script>
  
  <script src="assets/js/script.js"></script>

 </body>
 
</html>

<!-- Powerd By Mohamed Hany -->
