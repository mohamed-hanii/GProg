<!-- Powerd By Mohamed Hany -->

<?php

  include "fun/connect.php";

  session_start();

  $error_message = "";

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $email = isset($_POST['email']) ? $_POST['email'] : '';
      
      $username = isset($_POST['username']) ? $_POST['username'] : '';
      
      $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND email = ?");

      $stmt->bind_param("ss", $username, $email);

      $stmt->execute();

      $user_result = $stmt->get_result();

      if ($user_result->num_rows > 0) {

          $user = $user_result->fetch_assoc();

          $_SESSION['ask'] = $user['security_ask'];

          $_SESSION['username'] = $user['username'];

          header("Location: security.php");

          exit();

          } else {

              $error_message = "Your Username Or Email is Wrong";

          }
      
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

    <title>GProg World | Reset Password</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="assets/css/style-reset.css">

  </head>

  <body>

      <div class="container">
          <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>

          <p class="text-center login-txt mb-4">Reset Password</p>

          <?php if (!empty($error_message)): ?>

            <div class="alert alert-danger">

              <?php echo $error_message; ?>

            </div>

          <?php endif; ?>

          <form action="reset.php" method="POST">

            <div class="row align-items-center justify-content-center">

              <input class="col-12 col-md-5 texts" type="email" name="email" required placeholder="Enter Your Email">
              
              <input class="col-12 col-md-5 texts" type="text" name="username" required placeholder="Enter Your UserName">
              
              <button type="submit" class="col-12 col-md-6 btn btn-success btn-lg mt-5" type="submit">Next</button>
            
            </div>

          </form>

          <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
        
    
          </div>
          
            </div>

            <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>

            <p class="text-center login-txt mb-4">Reset Password</p>

          <?php if (!empty($error_message)): ?>

            <div class="alert alert-danger">

              <?php echo $error_message; ?>

            </div>

          <?php endif; ?>

            <form action="reset.php" method="POST">

              <div class="row text-center align-items-center justify-content-center">

                <span class="col-12 mt-4"> <?= $user_ask ?> </span>

                <input class="col-8 texts mt-3" type="text" name="answer" required placeholder="Enter Your Answer">
                
                <button type="submit" class="col-12 col-md-6 btn btn-success btn-lg mt-5" type="submit">Change Password</button>
              
              </div>

            </form>

          <br>  <br>  <br> <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>

         
    </div>

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
