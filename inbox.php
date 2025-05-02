<!-- Powerd By Mohamed Hany -->

<?php

    include "header/inbox_header_php.php";

?>

<!DOCTYPE html>

<html lang="ar">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@<?=$user_chat_data['username']?> | GProg World</title>

        <meta http-equiv="X-UA-Compatible" content="IE=7">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="author" content="Mohamed Hany">

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/msgbox.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            
    </head>

    <body>

        <div class="chat-container">

            <div class="navbar-custom">

                <a href="message.php">

                    <button class="btn btn-outline-secondary">

                        <i class="fa-solid fa-arrow-right"></i> Back
                    
                    </button>
    
                </a>

            <a href="profile.php?username=<?=$user_chat_data['username']?>">

                <div class="d-flex align-items-center">

                    <span style="font-weight: bold; color: green; cursor: pointer; direction: ltr;" class="ms-2 me-2"><?= $user_chat_data['first_name'] . " " . $user_chat_data['last_name'] ?></span>
                
                    <img style="width:50px !important;height:50px !important;border-radius: 50% !important;overflow:hidden !important;cursor:pointer !important;" src="uploads/<?=$user_chat_data['profile_img']?>" alt="User Image">
            
                </div>
        
            </a>
    
        </div>
    
        <div class="message-box" id="message-box">

        <?php


            $sender_id = $user_data['id']; 
            
            $receiver_id = $user_chat_data['id']; 


        ?>

    </div>

    <div class="input-container" style="direction: ltr;">

        <label for="file-upload" style="cursor: pointer;" class="file-icon me-3">

            <i class="fas fa-paperclip"></i>

        </label>

        <input type="file" id="file-upload" class="file-input" accept="image/*, video/*">

        <input type="text" id="message-input" placeholder="Write Message ...">
        
        <button style="cursor:pointer !important;" id="send-message-btn">
            
            <i class="fas fa-paper-plane"></i>
        
        </button>
    
    </div>

    <div style="direction: ltr;" id="file-name" class="file-name">

    </div>
    
    <div id="typing-status">

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <?php

         include "fun/msg_system.php";

    ?>

  </body>

</html>

<!-- Powerd By Mohamed Hany -->
