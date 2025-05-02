<!-- Powerd By Mohamed Hany -->

<?php

    session_start();

    include "../fun/connect.php";

    if (!isset($_SESSION['username'])) {

        header("Location: index.php");

        exit;

    }

    $msg = "";

    $username = $_SESSION['username'];

    $data_sql = "SELECT * FROM users WHERE username = '$username'";

    $data_result = mysqli_query($conn, $data_sql); 

    $user = mysqli_fetch_assoc($data_result);

    $user_id = $user['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['reason']) && !empty($_POST['reason'])) {

            $reason = mysqli_real_escape_string($conn, $_POST['reason']); 
            
            $insert = "INSERT INTO `contact_us` (`user_id`, `reason`, `time`) VALUES (?, ?, NOW())";
            
            $stmt = $conn->prepare($insert);

            $stmt->bind_param("is", $user_id, $reason); 
            
            if ($stmt->execute()) {

                $msg = "Your message has been sent. We will contact you as soon as possible.";

            } else {

                $msg = "There was an error sending your message. Please try again later.";

            }
            
            $stmt->close(); 

        } else {

            $msg = "Please provide a reason for contacting us.";

        }
        
    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact Us | GProg</title>

        <meta http-equiv="X-UA-Compatible" content="IE=7">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="author" content="Mohamed Hany">

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/aos.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        
        <link rel="stylesheet" href="assets/css/style.css">

        <style>
    
            .reason {

                border: none;

                outline: none;

                border-bottom: 1px solid green;

                border-right: 1px solid green;

                width: 100%;

                min-height: 150px;

                padding: 10px;

                font-size: 16px;

            }

            .contact-info p {

                font-size: 23px;

            }

            .contact-info span {

                font-size: 20px;

                color: #000;

            }

        </style>

    </head>

    <body>
    
        <div class="container">

            <h1 style="overflow:hidden;" class="headh1 text-center mb-5 mt-2">

                <a href="../home.php">
                
                    <button style="overflow:hidden;" class="btn btn-danger">
                    
                        <i class="fa-solid fa-left-long"></i> Back
                        
                    </button>
                    
                </a>

            </h1>

            <div class="row">

                <div style="overflow:hidden;" class="col-sm-6 mb-3 mb-sm-0">

                    <div style="overflow:hidden;" class="card">

                        <div style="overflow:hidden;" class="card-body">

                            <h5 style="overflow:hidden;" class="card-title">مساحة اعلانية</h5>

                        </div>

                    </div>

                </div>

                <div style="overflow:hidden;" class="col-sm-6">

                    <div style="overflow:hidden;" class="card">

                        <div style="overflow:hidden;" class="card-body">

                            <h5 style="overflow:hidden;" class="card-title">مساحة اعلانية</h5>

                        </div>

                    </div>

                </div>

            </div>

            <br>  <br>

            <p class="text-center login-txt mb-4">Contact <span>GProg</span></p>
            
            <form action="index.php" method="POST">


                <?php if (!empty($msg)): ?>

                    <div class="alert alert-success mt-3"><?php echo $msg; ?></div>

                <?php endif; ?>

                <div class="text-center align-items-center justify-content-center">

                    <textarea name="reason" class="reason mb-5" placeholder="What is the reason for communication?"></textarea>    
                   
                    <button type="submit" class="col-12 col-md-6 btn btn-success btn-lg">Send</button>
               
                </div>
           
            </form>

            <div class="contact-info mt-5">

                <p><i class="fa-solid fa-envelope fa-lg"></i> Email: <span>mooodyyhanyy@gmail.com</span></p>
                
                <p><i class="fa-brands fa-instagram fa-lg"></i> Instagram: <span>my account</span></p>
               
                <p><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn: <span>my account</span></p>
               
                <p><i class="fa-brands fa-facebook fa-lg"></i> Facebook: <span>my account</span></p>
               
                <p><i class="fa-brands fa-youtube fa-lg"></i> YouTube: <span>my account</span></p>
               
                <p><i class="fa-brands fa-tiktok fa-lg"></i> TikTok: <span>my account</span></p>
           
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