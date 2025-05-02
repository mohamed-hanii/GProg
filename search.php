<!-- Powerd By Mohamed Hany -->

<?php

  session_start();

  if (!isset($_SESSION['username'])) {

      header("Location: index.php");

      exit;

  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $search_term = trim($_POST['search']);

      $search_type = $_POST['search_type']; 

      if ($search_type == 'user') {

          header("Location: result.php?search=$search_term&type=$search_type");

      } elseif ($search_type == 'question') {

          header("Location: re.php?search=$search_term&type=$search_type");

      }

      exit();

  }

?>

<!DOCTYPE html>

<html lang="en">

  <head>

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

        padding: 13px;

        margin-bottom: 30px;

        background-color: transparent;

        border: none;

        font-size: 40px;

        font-family: monospace;
        
        cursor: pointer;

        opacity: .5;

        }

        .container {

          overflow: hidden;

        }

        .searr {

          border: none;

          border-bottom: 2px solid green;

          outline: none !important;

          font-size: 18px;

        }

        .subbb {

          background-color: transparent;

          border: none;

          border-bottom: 2px solid green;

          border-left: 2px solid green;

          outline: none !important;

          font-size: 30px;
          
        }

        .subbb:hover {

          border: 2px solid green;

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

    <title>Search | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    
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

    </h1>
    
    <br>  <br>  <br>
    
    <h3 class="text-center" style="overflow: hidden;">What Are You Looking For ?</h3>
    
    <br>  <br>

    <form method="POST" action="">

          <div class="text-center mb-5">

            <input type="radio" class="btn-check" name="search_type" value="user" id="option5" autocomplete="off" checked>
            
            <label class="btn me-4" style="font-size:21px; color:green; font-family:cursive;" for="option5">User</label>

            <input type="radio" class="btn-check" name="search_type" value="question" id="option6" autocomplete="off">
            
            <label class="btn" style="font-size:21px; color:green; font-family:cursive;" for="option6">Question</label>
          
          </div>

          <div class="container text-center">

            <div class="row">

              <input class="searr" required placeholder="Search Here.." type="search" name="search" id=""><br><br>
           
            </div>
            
            <br>  <br>

            <button class="subbb" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #004d09;"></i> Search</button>
          
          </div>
        
        </form>
    
        <br>  <br>  <br>  <br>
    
    <div class="row">

      <div class="col-sm-6 mb-3 mb-sm-0">

        <div class="card">

          <div class="card-body">

            <h5 class="card-title"style="overflow: hidden;">مساحة اعلانية</h5>

          </div>

        </div>

      </div>

      <div class="col-sm-6">

        <div class="card">

          <div class="card-body">

            <h5 class="card-title" style="overflow: hidden;">مساحة اعلانية</h5>

          </div>

        </div>

      </div>

    </div>
    
    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>

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