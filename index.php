<!-- Powerd By Mohamed Hany -->

<?php

include "fun/login_check.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    
    <style>

        .divider:after,
        .divider:before {

        content: "";

        flex: 1;

        height: 1px;

        background: #eee;

        }

        .form-control {

            outline: none !important;

            border: none !important;

            border-bottom: 1px solid green !important;

            border-radius: 0 !important;

            font-family: cursive !important;

        }

    </style>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GProg World | Login</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <meta name="keywords" content="GProg World, programmer, gprog, Questions, موقع مبرمجين, أسئلة برمجية, دردشة مبرمجين, مساعدة برمجية, منتدى مبرمجين, استفسارات برمجية, تعلم البرمجة, مجتمع مبرمجين, حلول برمجية, تفاعل مبرمجين, Programmer Forum, Programming Questions, Programming Community, Code Help, Software Development Chat, Coding Discussion, Programming Solutions, Developer Collaboration, Ask a Programmer, Code Support, Forum des programmeurs, Questions de programmation, Communauté de développeurs, Aide en programmation, Discussion de code, Solutions de programmation, Soutien aux développeurs, Forum de code, Apprendre la programmation, Foro de programadores, Preguntas de programación, Comunidad de desarrolladores, Ayuda en programación, Soporte para programadores, Soluciones de programación, Aprender a programar, Programmiererforum, Programmierfragen, Entwicklergemeinschaft, Code-Hilfe, Programmierlösungen, Diskussion über Code, Softwareentwicklung, Forum di programmatori, Domande di programmazione, Comunità di sviluppatori, Aiuto nella programmazione, Soluzioni di programmazione, Discussione sul codice, Fórum de programadores, Perguntas de programação, Comunidade de desenvolvedores, Suporte para programadores, Soluções de programação, Aprender programação, प्रोग्रामर मंच, प्रोग्रामिंग सवाल, प्रोग्रामिंग सहायता, डेवलपर समुदाय, कोड सहायता, प्रोग्रामिंग समाधान, प्रोग्रामिंग चैट, Форум программистов, Вопросы программирования, Сообщество разработчиков, Помощь по программированию, Решения программирования, Чат программистов, 程序员论坛, 编程问题, 开发者社区, 编程帮助, 编程讨论, 编程解决方案, 编程聊天室, プログラマー フォーラム, プログラミング 質問, コーディング コミュニティ, プログラミング ヘルプ, プログラミング 解決策">
    
    <meta name="description" content="The largest and most comprehensive site for teaching programming in the world for free">
    
    <link rel="stylesheet" href="assets/css/aos.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <script src="assets/js/bootstrap.min.js"></script>

  </head>

  <body>

    <section class="vh-100">
  
      <div class="container py-5 h-100">

         <div class="row d-flex align-items-center flex-wrap h-100">
      
           <div class="col-md-4 col-lg-7 col-xl-6 d-flex align-content-around">
        
             <p style="font-size:24px; font-family: Gill Sans, sans-serif;" class="lead align-content-around text-center text-md-start"><span style="font-size:46px; line-height: 90px;"><span style="font-family:cursive; color:green;">GProg</span> World </span>
        
               <br>
        
               The Largest Community Of Programmers in The World And it is Part Of The <span style="font-family:cursive; color:green;">GProg</span>.
        
            </p>
      
          </div>

          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

            <div class="mb-4 pb-2">

              <input type="text" placeholder="UserName" name="user" class="form-control form-control-lg" required />
            
            </div>

            <div class="textt mb-4 pb-1">

              <input type="password" placeholder="Password" name="pass" class="form-control form-control-lg" required />
            
            </div>

            <?php if (!empty($error_message)): ?>

              <div class="alert alert-danger">

                <?php echo $error_message; ?>

              </div>

            <?php endif; ?>

           <br>

            <div class="d-flex justify-content-around align-items-center mb-2 pb-1">

              <a href="reset.php">Forgot password?</a>

            </div>

            <br>

          <button type="submit" class="btn btn-primary btn-lg col-12 btn-block">
            
            <i class="fa-solid fa-right-to-bracket"></i> Login

          </button>

          <br><br>

          <div class="divider d-flex align-items-center my-4">

            <p class="text-center fw-bold mx-3 mb-0 text-muted">Not Registered?</p>

          </div>

          <a href="signup.php">

            <button type="button" class="btn btn-success btn-lg col-12 btn-block">

              Sign Up <i class="fa-solid fa-arrow-right"></i>

            </button>

          </a>

        </form>

      </div>

    </div>

  </div>

</section>

  <script src="assets/js/aos.js"></script>

  <script src="assets/js/fontawesome.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <script src="assets/js/jquery.min.js"></script>

 </body>

</html>

<!-- Powerd By Mohamed Hany -->


