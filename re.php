<!-- Powerd By Mohamed Hany -->

<?php

    include "header/result_post_header.php";

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <style>

            #title {

            font-size: 30px;

            color: green;

            }

            .iteem {

            font-size: 23px;

            display: block !important;

            margin-bottom: 30px !important;

            color: rgb(75, 75, 75);

            cursor: pointer;

            transition: all .5s ease-in-out;

            }

            .iteem:hover {

            font-size: 30px;

            }

            #back {

            padding: 13px;

            margin-bottom: 30px;

            background-color: transparent;

            border: none;

            font-size: 40px;

            font-family: monospace;

            cursor: pointer;

            opacity: .5;

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

                width: 50px;

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

        </style>

        <meta http-equiv="X-UA-Compatible" content="IE=7">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="Mohamed Hany">

        <meta charset="UTF-8">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/style-homepage.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    
        <title>Result | GProg World</title>

    </head>

    <body>



        <div class="container">

            <br>  <br>
        
            <div class="middle-panel">
          
                <br><br><br><br>

                <a href="search.php">
          
                    <button style="color: green; font-family: cursive; font-size: 20px; padding:10px; border:1px solid green;border-radius:13px;outline:none;cursor:pointer;">
                    
                        <i class="fa-solid fa-left-long"></i> Back
                    
                    </button>
                
                </a> 

                <br>
   
                <br>
          
                <div style="height: 100px; width: 90%; border: .1px solid black; margin-left: 13px; display: flex; align-items: center; justify-content: center; text-align: center;">
                  
                    <p style="font-size: 18px; font-weight: bold;">مساحة اعلانية</p>
                  
                </div>
          
                <br>
          
<?php

    include "loop/result_post_loop.php";

?>

<?php

    include "ajax/result_post_ajax.php";

?>

        </div>
     
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

 
  </body>

</html>

<!-- Powerd By Mohamed Hany -->
