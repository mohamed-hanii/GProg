<!-- Powerd by Mohamed Hany -->

<?php

include "fun/connect.php";

session_start();

$error_message = "";

if (!isset($_SESSION['ask'])) {

    header("Location: reset.php");

    exit;

}

$ask = $_SESSION['ask'];

$username = $_SESSION['username'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND security_ask = ?");

$stmt->bind_param("ss", $username, $ask);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 0) {

    $error_message = "No such user found with this security question.";

    exit;

}

$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $ans = isset($_POST['answer']) ? $_POST['answer'] : '';

    if ($ans === $data['security_ans']) {

        $_SESSION['answer'] = $data['security_ans'];

        $_SESSION['username'] = $username;

        $_SESSION['user_id'] = $data['id'];

        header("Location: edit-profile/pass.php");

        exit;

    } else {

        $error_message = "Your Answer is Wrong";

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

          <form action="security.php" method="POST">

            <div class="row align-items-center text-center justify-content-center">

              <span class="col-12 mt-4"> <?= $data['security_ask'] ?> </span>

              <input class="col-9 mt-3 col-md-5 texts" type="text" name="answer" required placeholder="Enter Your Answer">
              
              <button type="submit" class="col-7  btn btn-success btn-lg mt-5" type="submit">Change Password</button>
            
            </div>

          </form>

          <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
        
    
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

<!-- Powerd by Mohamed Hany -->