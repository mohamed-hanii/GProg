<!-- Powerd By Mohamed Hany -->

<?php

    include "header/about_prof.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <style>

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

    <title>About

<?php

if ($clicked_user === $username) {

  echo "Me";

}else {

  echo "@$clicked_user";

}

?>

     | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/style-message.css">

  </head>

<?php

  if ($clicked_user === $username) {

?>

  <body>

      <div class="container text-center">
                
      <h1 class="headh1 text-center mb-5 mt-5">

        <a href="profile.php?username=<?php echo urlencode($user['username']); ?>">

          <button class="back"><i class="fa-solid fa-left-long"></i> Back</button>
      
        </a>

      </h1>

      <div class="row ">

        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
          <br>

          <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Name :</p>
      
          <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

            <?php

            $first_name = $user['first_name'];

            $last_name = $user['last_name'];

            if (!empty($first_name) && !empty($last_name)) {

                $full_name = $first_name . ' ' . $last_name; 

            } else {

                $full_name = "Not Added Yet"; 

            }

            echo $full_name;  

            ?>


            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 

            <br><br>

        </div>

        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
            <br>
        
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Field :</p>
      
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
            
            <?php

            $user_field = $user['field'];

            $user_id = $user['id'];

            $field_sql = "SELECT * FROM field WHERE id = '$user_field'";

            $field_result = mysqli_query($conn, $field_sql);

            $field = mysqli_fetch_assoc($field_result);

            if (!empty($field)) {

                $your_field = $field['name']; 

            } else {

                $your_field = "Not Added Yet"; 

            }

            print_r($your_field);  

            ?>

            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/field.php">edit</a></p> 
  
            <br><br>

        </div>
        
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
    
            <br>
          
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Spoken Languages :</p>
        
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
            
            <?php

            $spoken_langs = $user['spoken_langs'];

            if (!empty($spoken_langs)) {

                $your_spoken_langs = $spoken_langs; 

            } else {

                $your_spoken_langs = "Not Added Yet"; 

            }

            print_r($your_spoken_langs);  

            ?>
    
            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/langs.php">edit</a></p> 
    
            <br><br>

        </div>

        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
            <br>
            
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Programming Languages :</p>
          
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
          
            <?php

            $prog_langs = $user['prog_langs'];

            if (!empty($prog_langs)) {

                $your_prog_langs = $prog_langs; 

            } else {

                $your_prog_langs = "Not Added Yet"; 

            }

            print_r($your_prog_langs);  

            ?>
    
            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/langs.php">edit</a></p> 
      
            <br><br>
      
        </div>

        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
        
            <br>
              
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">area of ​​expertise :</p>
              
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
        
            <?php

            $exper_area = $user['exper_area'];

            if (!empty($exper_area)) {

                $your_exper_area = $exper_area; 

            } else {

                $your_exper_area = "Not Added Yet"; 

            }

            print_r($your_exper_area);  

            ?> 

           <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/exper.php">edit</a></p> 
        
           <br><br>
        
          </div>

          <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
            <br>
      
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Gender :</p>
    
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
    
            <?php

            $user_gender = $user['gender'];

            $user_id = $user['id'];

            $gender_sql = "SELECT * FROM gender WHERE id = '$user_gender'";

            $gender_result = mysqli_query($conn, $gender_sql);

            $gender = mysqli_fetch_assoc($gender_result);

            if (!empty($gender)) {

                $your_gender = $gender['name']; 

            } else {

                $your_gender = "Not Added Yet"; 

            }

            print_r($your_gender);  

            ?>

            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
  
            <br><br>
  
        </div>
  
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
    
            <br>
          
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Relationship :</p>
        
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

            <?php

            $user_relation = $user['relation'];

            $user_id = $user['id'];

            $relation_sql = "SELECT * FROM relation WHERE id = '$user_relation'";

            $relation_result = mysqli_query($conn, $relation_sql);

            $relation = mysqli_fetch_assoc($relation_result);

            if (!empty($relation)) {

                $your_relation = $relation['name']; 

            } else {

                $your_relation = "Not Added Yet"; 

            }

            print_r($your_relation);  

            ?>
    
            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
    
            <br><br>
    
        </div>
    
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
            <br>
            
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Country :</p>
          
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
          
            <?php

            $country = $user['country'];

            if (!empty($country)) {

                $your_country = $country; 

            } else {

                $your_country = "Not Added Yet"; 

            }

            print_r($your_country); 

            ?> 

            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
      
            <br><br>
      
        </div>
      
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
        
            <br>
              
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Website  :</p>
            
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
        
            <?php

            $web = $user['web'];

            if (!empty($web)) {

                $your_web = $web; 

            } else {

                $your_web = "Not Added Yet"; 

            }

            print_r($your_web);  

            ?>

            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
        
            <br><br>
        
        </div>
        
            <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
              
            <br>
                
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Year Of Birth :</p>
              
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
          
            <?php
            $year_birth = $user['year_birth'];

            if (!empty($year_birth)) {

                $your_year_birth = $year_birth; 

            } else {

                $your_year_birth = "Not Added Yet"; 

            }

            print_r($your_year_birth);  

            ?>

          <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
          
          <br><br>
          
        </div>
          
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
            
            <br>
                  
            <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Bio :</p>
                
            <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
            
            <?php

            $bio = $user['bio'];

            if (!empty($bio)) {

                $your_bio = $bio; 

            } else {

                $your_bio = "Not Added Yet"; 

            }

            print_r($your_bio); 

            ?>

            <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/basics.php">edit</a></p> 
            
            <br><br>
            
          </div>
          
          <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
              <br>
        
              <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Email :</p>
      
              <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
      
              <?php

              $email = $user['email'];

              if (!empty($email)) {

                  $your_email = $email;
                  
              } else {

                  $your_email = "Not Added Yet"; 

              }

              print_r($your_email);  

              ?>

              <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/index.php">edit</a></p> 
  
              <br><br>
  
          </div>
  
          <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
    
          <br>
     
          <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Title :</p>
    
          <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
    
          <?php

          $work_title = $user['work_title'];

          if (!empty($work_title)) {

              $your_work_title = $work_title; 

          } else {

              $your_work_title = "Not Added Yet"; 

          }

          print_r($your_work_title); 

          ?>

          <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/work.php">edit</a></p> 
          
          <br><br>
    
        </div>
    
        <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
          <br>
          
          <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Place :</p>
        
          <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
        
        <?php

        $work_place = $user['work_place'];

        if (!empty($work_place)) {

            $your_work_place = $work_place; 

        } else {

            $your_work_place = "Not Added Yet"; 

        }

        print_r($your_work_place);  

        ?>

      
        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/work.php">edit</a></p> 
      
        <br><br>
      
      </div>
      
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
        
          <br>
              
          <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Website :</p>
            
          <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
       
          <?php

          $work_web = $user['work_web'];

          if (!empty($work_web)) {

              $your_work_web = $work_web; 

          } else {

              $your_work_web = "Not Added Yet"; 

          }

          print_r($your_work_web);  

          ?>

        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/work.php">edit</a></p> 
        
        <br><br>
        
      </div>
        
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
          
        <br>
            
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">School Or University :</p>
          
        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
        
        <?php

        $edu_school = $user['edu_school'];

        if (!empty($edu_school)) {

            $your_edu_school = $edu_school; 

        } else {

            $your_edu_school = "Not Added Yet"; 

        }

        print_r($your_edu_school);  

        ?>

          
        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/edu.php">edit</a></p> 
          
        <br><br>
          
      </div>
          
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
            
        <br>
                
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Degree :</p>
              
        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

        <?php

        $edu_degree = $user['edu_degree'];

        if (!empty($edu_degree)) {

            $your_edu_degree = $edu_degree; 

        } else {

            $your_edu_degree = "Not Added Yet"; 

        }

        print_r($your_edu_degree);  
        
        ?>
            
        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/edu.php">edit</a></p> 
            
        <br><br>
            
      </div>
            
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
              
        <br>
                  
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Country :</p>
                
        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
              
        <?php

        $edu_country = $user['edu-country'];

        if (!empty($edu_country)) {

            $your_edu_country = $edu_country; 

        } else {

            $your_edu_country = "Not Added Yet"; 

        }

        print_r($your_edu_country);  

        ?>

        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/edu.php">edit</a></p> 
              
        <br><br>
              
      </div>
              
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
                
        <br>
                    
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Languages :</p>
                  
        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
                
        <?php

        $edu_lang = $user['edu_lang'];

        if (!empty($edu_lang)) {

            $your_edu_lang = $edu_lang; 

        } else {

            $your_edu_lang = "Not Added Yet";

        }

        print_r($your_edu_lang);  
        
        ?>
        
        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/edu.php">edit</a></p> 
                
        <br><br>
                
      </div>

      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
        <br>
      
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Address :</p>
    
        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
  
        <?php

        $address = $user['address'];

        if (!empty($address)) {

            $your_address = $address; 

        } else {

            $your_address = "Not Added Yet"; 

        }

        print_r($your_address);  

        ?>
  
        <a class="ms-3" style="text-decoration: underline; font-size: 15px; font-weight: normal; color: rgb(22, 91, 170);" href="edit-profile/locat.php">edit</a></p> 
  
        <br><br>
  
     </div>

  </div>


  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> <br>  <br>

 </div>


 <script src="assets/js/aos.js"></script>

 <script src="assets/js/fontawesome.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

 <script src="assets/js/jquery.min.js"></script>

 <script src="assets/js/script.js"></script>


</body>

<?php

} else {

?>

<body>

<div class="container text-center">
          
<h1 class="headh1 text-center mb-5 mt-5">

  <a href="profile.php?username=<?php echo urlencode($user['username']); ?>">

    <button class="back"><i class="fa-solid fa-left-long"></i> Back</button>

  </a>

</h1>

<div class="row ">

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

    <br>

    <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Name :</p>

    <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

      <?php

      $first_name = $user['first_name'];

      $last_name = $user['last_name'];

      if (!empty($first_name) && !empty($last_name)) {

          $full_name = $first_name . ' ' . $last_name; 

      } else {

          $full_name = "Not Added Yet"; 

      }

      echo $full_name;  

      ?>


      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>
  
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Field :</p>

      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
      
      <?php

      $user_field = $user['field'];

      $user_id = $user['id'];

      $field_sql = "SELECT * FROM field WHERE id = '$user_field'";

      $field_result = mysqli_query($conn, $field_sql);

      $field = mysqli_fetch_assoc($field_result);

      if (!empty($field)) {

          $your_field = $field['name']; 

      } else {

          $your_field = "Not Added Yet"; 

      }

      print_r($your_field);  

      ?>

      <br><br>

  </div>
  
  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>
    
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Spoken Languages :</p>
  
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
      
      <?php

      $spoken_langs = $user['spoken_langs'];

      if (!empty($spoken_langs)) {

          $your_spoken_langs = $spoken_langs; 

      } else {

          $your_spoken_langs = "Not Added Yet"; 

      }

      print_r($your_spoken_langs);  

      ?>

      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>
      
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Programming Languages :</p>
    
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
    
      <?php

      $prog_langs = $user['prog_langs'];

      if (!empty($prog_langs)) {

          $your_prog_langs = $prog_langs; 

      } else {

          $your_prog_langs = "Not Added Yet"; 

      }

      print_r($your_prog_langs);  

      ?>

      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
      <br>
        
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">area of ​​expertise :</p>
        
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
  
      <?php

      $exper_area = $user['exper_area'];

      if (!empty($exper_area)) {

          $your_exper_area = $exper_area; 

      } else {

          $your_exper_area = "Not Added Yet"; 

      }

      print_r($your_exper_area);  

      ?> 
  
     <br><br>
  
    </div>

    <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>

      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Gender :</p>

      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

      <?php

      $user_gender = $user['gender'];

      $user_id = $user['id'];

      $gender_sql = "SELECT * FROM gender WHERE id = '$user_gender'";

      $gender_result = mysqli_query($conn, $gender_sql);

      $gender = mysqli_fetch_assoc($gender_result);

      if (!empty($gender)) {

          $your_gender = $gender['name']; 

      } else {

          $your_gender = "Not Added Yet"; 

      }

      print_r($your_gender);  

      ?>

      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>
    
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Relationship :</p>
  
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

      <?php

      $user_relation = $user['relation'];

      $user_id = $user['id'];

      $relation_sql = "SELECT * FROM relation WHERE id = '$user_relation'";

      $relation_result = mysqli_query($conn, $relation_sql);

      $relation = mysqli_fetch_assoc($relation_result);

      if (!empty($relation)) {

          $your_relation = $relation['name']; 

      } else {

          $your_relation = "Not Added Yet"; 

      }

      print_r($your_relation);  

      ?>

      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

      <br>
      
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Country :</p>
    
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
    
      <?php

      $country = $user['country'];

      if (!empty($country)) {

          $your_country = $country; 

      } else {

          $your_country = "Not Added Yet"; 

      }

      print_r($your_country); 

      ?> 

      <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
      <br>
        
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Website  :</p>
      
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
  
      <?php

      $web = $user['web'];

      if (!empty($web)) {

          $your_web = $web; 

      } else {

          $your_web = "Not Added Yet"; 

      }

      print_r($your_web);  

      ?>
  
      <br><br>
  
  </div>
  
      <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
        
      <br>
          
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Year Of Birth :</p>
        
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
    
      <?php
      $year_birth = $user['year_birth'];

      if (!empty($year_birth)) {

          $your_year_birth = $year_birth; 

      } else {

          $your_year_birth = "Not Added Yet"; 

      }

      print_r($your_year_birth);  

      ?>
    
    <br><br>
    
  </div>
    
  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
      <br>
            
      <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Bio :</p>
          
      <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
      
      <?php

      $bio = $user['bio'];

      if (!empty($bio)) {

          $your_bio = $bio; 

      } else {

          $your_bio = "Not Added Yet"; 

      }

      print_r($your_bio); 

      ?>
      
      <br><br>
      
    </div>
    
    <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

        <br>
  
        <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Email :</p>

        <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

        <?php

        $email = $user['email'];

        if (!empty($email)) {

            $your_email = $email;
            
        } else {

            $your_email = "Not Added Yet"; 

        }

        print_r($your_email);  

        ?>

        <br><br>

    </div>

    <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

    <br>

    <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Title :</p>

    <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

    <?php

    $work_title = $user['work_title'];

    if (!empty($work_title)) {

        $your_work_title = $work_title; 

    } else {

        $your_work_title = "Not Added Yet"; 

    }

    print_r($your_work_title); 

    ?>
    
    <br><br>

  </div>

  <div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

    <br>
    
    <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Place :</p>
  
    <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
  
  <?php

  $work_place = $user['work_place'];

  if (!empty($work_place)) {

      $your_work_place = $work_place; 

  } else {

      $your_work_place = "Not Added Yet"; 

  }

  print_r($your_work_place);  

  ?>


  <br><br>

</div>

<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
  
    <br>
        
    <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Work Website :</p>
      
    <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
 
    <?php

    $work_web = $user['work_web'];

    if (!empty($work_web)) {

        $your_work_web = $work_web; 

    } else {

        $your_work_web = "Not Added Yet"; 

    }

    print_r($your_work_web);  

    ?>
  
  <br><br>
  
</div>
  
<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
    
  <br>
      
  <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">School Or University :</p>
    
  <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
  
  <?php

  $edu_school = $user['edu_school'];

  if (!empty($edu_school)) {

      $your_edu_school = $edu_school; 

  } else {

      $your_edu_school = "Not Added Yet"; 

  }

  print_r($your_edu_school);  

  ?>

        
  <br><br>
    
</div>
    
<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
      
  <br>
          
  <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Degree :</p>
        
  <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

  <?php

  $edu_degree = $user['edu_degree'];

  if (!empty($edu_degree)) {

      $your_edu_degree = $edu_degree; 

  } else {

      $your_edu_degree = "Not Added Yet"; 

  }

  print_r($your_edu_degree);  
  
  ?>
            
  <br><br>
      
</div>
      
<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
        
  <br>
            
  <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Country :</p>
          
  <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
        
  <?php

  $edu_country = $user['edu-country'];

  if (!empty($edu_country)) {

      $your_edu_country = $edu_country; 

  } else {

      $your_edu_country = "Not Added Yet"; 

  }

  print_r($your_edu_country);  

  ?>
        
  <br><br>
        
</div>
        
<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">
          
  <br>
              
  <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Education Languages :</p>
            
  <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">
          
  <?php

  $edu_lang = $user['edu_lang'];

  if (!empty($edu_lang)) {

      $your_edu_lang = $edu_lang; 

  } else {

      $your_edu_lang = "Not Added Yet";

  }

  print_r($your_edu_lang);  
  
  ?>
            
  <br><br>
          
</div>

<div style="border-top: .1px solid rgb(228, 228, 228); border-bottom: .1px solid rgb(228, 228, 228);">

  <br>

  <p style="font-size: 37px; font-family: cursive; color: green; display: inline-block;">Address :</p>

  <p class="me-2" style="font-size: 26px; font-weight: bold; display: inline-table;">

  <?php

  $address = $user['address'];

  if (!empty($address)) {

      $your_address = $address; 

  } else {

      $your_address = "Not Added Yet"; 

  }

  print_r($your_address);  

  ?>

  <br><br>

</div>

</div>


<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> <br>  <br>

</div>


<script src="assets/js/aos.js"></script>

<script src="assets/js/fontawesome.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/script.js"></script>


</body>

<?php

    }

?>

</html>

<!-- Powerd By Mohamed Hany -->
