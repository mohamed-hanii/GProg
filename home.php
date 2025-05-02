<!-- Powerd By Mohamed Hany -->

<?php

include "header/home_header_php.php";

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

            body {

                overflow-x: hidden;

            }

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

            a img {

                text-decoration: none !important;

                color: rgb(53, 53, 53);

                margin: 0;

                padding: 0;

                width: 50px;

                vertical-align: middle; 

            }

            .show-more {

                padding: 10px;

                margin-top: 20px;

                border: none;

                background-color: green;

                color: white;

                font-size:15px;

                border-radius: 7px;

                cursor: pointer;

            }

            .show-more:hover {

                background-color: darkgreen;

            }

            .noo {

                color: green;

                font-size: 17px;

                font-family: cursive;

                margin: 25px;

                display: flex;

                justify-content: center; 

                align-items: center;  

            }

            .navv svg {

                position: relative; 

            }

            .unreplied-badge {

                content: '' !important;

                position: absolute !important;

                top: -3px !important; 

                right: -3px !important; 

                width: 8px !important; 

                height: 8px !important; 

                background-color: green !important; 

                border-radius: 50% !important; 

                border: 2px solid white !important; 

                display: block !important;  

                z-index: 10 !important;  

            }

            .lolo {

                margin-left: 13px;

                font-size: 24px;

                font-family: cursive;

                font-family: cursive;

                color: green;

                font-size: 29px;

                font-weight: bold;

                opacity: .7;

                cursor: pointer;

                transition: all .5s ease-in-out;

            }

            .lolo:hover {

                opacity: 1;

            }

            .logo_img {

                width: 50px; 

                height: 50px; 

                background-image: url('assets/img/favicon.png');

                background-size: cover;  

                background-position: center;  

                background-repeat: no-repeat;  

                opacity: .7;

                transition: all .5s ease-in-out;

            }

            .logo_img:hover {

                background-image: url('assets/img/favicon-dark.png');

                width: 50px; 

                height: 50px; 

                background-size: cover;  

                background-position: center;  

                background-repeat: no-repeat;  

                opacity: 1;

            }

            .notification-item {

                display: flex;

                align-items: center;

                padding: 10px;

                margin: 5px 0;
                
                border-bottom: 1px solid #ddd;

                text-decoration: none;

                color: #000;
            }

            .notification-item:hover {

                background-color: #f1f1f1;

            }

            .user-image {

                width: 40px;

                height: 40px;

                border-radius: 50%;

                margin-right: 10px;

            }

            .notification-text {

                flex: 1;

                font-size: 14px;
                
                line-height: 1.5;

            }

            @media (max-width: 768px) {


                .notification-item {

                    flex-direction: column;

                    align-items: flex-start;

                }

                .user-image {

                    margin-right: 0;

                    margin-bottom: 10px;

                }

            }

        </style>

  <!-- Powerd By Mohamed Hany -->

        <meta charset="UTF-8">

        <meta name="keywords" content="GProg World, programmer, gprog, Questions, موقع مبرمجين, أسئلة برمجية, دردشة مبرمجين, مساعدة برمجية, منتدى مبرمجين, استفسارات برمجية, تعلم البرمجة, مجتمع مبرمجين, حلول برمجية, تفاعل مبرمجين, Programmer Forum, Programming Questions, Programming Community, Code Help, Software Development Chat, Coding Discussion, Programming Solutions, Developer Collaboration, Ask a Programmer, Code Support, Forum des programmeurs, Questions de programmation, Communauté de développeurs, Aide en programmation, Discussion de code, Solutions de programmation, Soutien aux développeurs, Forum de code, Apprendre la programmation, Foro de programadores, Preguntas de programación, Comunidad de desarrolladores, Ayuda en programación, Soporte para programadores, Soluciones de programación, Aprender a programar, Programmiererforum, Programmierfragen, Entwicklergemeinschaft, Code-Hilfe, Programmierlösungen, Diskussion über Code, Softwareentwicklung, Forum di programmatori, Domande di programmazione, Comunità di sviluppatori, Aiuto nella programmazione, Soluzioni di programmazione, Discussione sul codice, Fórum de programadores, Perguntas de programação, Comunidade de desenvolvedores, Suporte para programadores, Soluções de programação, Aprender programação, प्रोग्रामर मंच, प्रोग्रामिंग सवाल, प्रोग्रामिंग सहायता, डेवलपर समुदाय, कोड सहायता, प्रोग्रामिंग समाधान, प्रोग्रामिंग चैट, Форум программистов, Вопросы программирования, Сообщество разработчиков, Помощь по программированию, Решения программирования, Чат программистов, 程序员论坛, 编程问题, 开发者社区, 编程帮助, 编程讨论, 编程解决方案, 编程聊天室, プログラマー フォーラム, プログラミング 質問, コーディング コミュニティ, プログラミング ヘルプ, プログラミング 解決策">
        
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <meta name="description" content="The largest community of programmers and developers in the world and it is part of the GProg website">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Mohamed Hany">
        
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        
        <link rel="stylesheet" href="assets/css/style-homepage.css">
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        
        <title>Home | GProg World</title>

    </head>

    <body>

<?php

   include "fun/msg_not.php";

?>

<?php

    include "nav/nav.php"

?>

    <div class="container">

        <div class="left-panel">

            <ul>

                <a href="profile.php?username=<?php echo urlencode($user); ?>">
                    <li>
                        <a href="profile.php?username=<?php echo urlencode($user); ?>">

                        <div style="width:40px !important;height:40px !important;border-radius: 50% !important;overflow:hidden !important;" class="prof"><img  style="width:100% !important;cursor:pointer !important;" src="<?php echo 'uploads/' . $profile_picture; ?>" alt=""></div>
                    
                </a>
                        <p class="left-user" style="font-size:16px; font-family:cursive; font-weight:bold;"><?= '@'. $user ?></p>
                   
                    </li>
                
                <a href="edit-profile/index.php">

                    <li>

                        <i class="fa-solid fa-gear left-items"></i> 

                        <p class="left-items">Settings</p>
                </a>

                    </li>

                <a href="message.php">  

                    <li>

                        <i class="fa-solid fa-message left-items"></i>

                        <p class="left-items">Messages</p>
                  </li>

                </a>

                <a href="saved.php">

                    <li>

                        <i class="fa fa-bookmark left-items"></i>

                        <p class="left-items">Saved</p>

                    </li>

                </a>

                <a href="most-recent.php">

                    <li>

                        <i class="fa-solid fa-question left-items"></i>

                        <p class="left-items">Latest Questions & Problems</p>

                    </li>

                </a>

                <a href="popular-posts.php">

                    <li>
                        <i class="fa-solid fa-fire left-items"></i>

                        <p class="left-items">Popular Questions & Problems</p>

                    </li>

                </a>

                    <li>

                <a href="contact-us/index.php">

                        <i class="fa-solid fa-address-book"></i>   

                        <p class="left-items">Contact Us</p>

                    </li>
                </a>

                <a href="#">

                    <li>

                        <i class="fa-solid fa-arrow-left left-items"></i>

                        <p class="left-items">Back To GProg</p>

                    </li>

                </a>

            </ul>

            <div class="footer-links">

                <a href="about/index.php">About</a>

                <a href="privacy.php">Privacy</a>
                
                <br><br>

                <a>© 2025 GProg</a>

            </div>
            
            <br><br>

            <div style="height: 200px; width: 200px; border: .1px solid black; margin-left: 13px; display: flex; align-items: center; justify-content: center; text-align: center;">
            
                <p style="font-size: 18px; font-weight: bold;">مساحة اعلانية</p>
            
            </div>
        
        </div>

        <div class="middle-panel">

          <br>

          <div style="text-align: center; align-items: center; justify-content: center; background-color: rgb(240, 240, 240); border: .1px solid black; border-radius: 0 !important;" class="post create">

            <div style="display: flex; height: 70px;" class="post-top">

               <p style="font-size: 17px; font-weight: bold;">مساحة اعلانيه</p>

            </div>

   <!-- Powerd By Mohamed Hany -->
         
        </a>

        </div>

          <br>

        <div style="background-color: rgb(240, 240, 240); border: 1px solid green;" class="post create" id="type">
            
            <a href="create-ask.php">
                
        <div class="post-top">
                   
            <p class="" style="margin-left: 10%;  color: green; font-size: 20px; font-family: cursive; cursor: pointer;"><i class="fa-solid fa-circle-plus"></i> Share Question & Problem</p>
        
        </div>
        
        </a>

        </div>

<?php

    include "loop/post_loop.php";

?>

        <div id="postsContainer">

        </div>

<?php

    include "ajax/post_ajax.php";

?>

        <a href="profile.php?username=<?php echo urlencode($user); ?>">

                <li>

                    </div>

                    <div class="right-panel">

                        <div class="friends-section">

                            <h4>Latest Questions & Problems</h4>
        
 
                            <?php

                                include "loop/last_posts_loop.php"

                            ?>
        
<br><br>

                <a style="height: 200px; display: flex; align-items: center; justify-content: center; text-align: center; border: .1px solid black;" class='friend' href="profile.php">
                    
                    <p class="name">مساحه اعلانية</p>

                </a>
                
            </div>

        </div>

    </div>

    <div id="hide-content" style="display: none; text-align: center;">

      <button id="back">X</button>  

      <p id="title"><i class="fa-solid fa-circle-plus"></i> Create</p>

      <br><br>

      <div id="content">

          <ul id="ul-hide">

              <li><i class="fa-solid fa-pen"></i> Post</li>

              <li><i class="fa-solid fa-question"></i> Ask</li>

          </ul>

      </div>

  </div>
  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

 
    </body>

<!-- Powerd By Mohamed Hany -->

</html>
