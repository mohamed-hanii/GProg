<!-- Powerd By Mohamed Hany -->

<?php

    include "header/profile_header.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>

   <?php

        include "theme/profile_theme.php";

   ?>
      
    <meta charset="UTF-8">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Mohamed Hany">

    <title>GProg World | <?= '@' . $user['username'] ?></title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    
    <link rel="stylesheet" href="assets/css/style-profile.css" />
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  
  <body>

  <?php

    include "nav/prof_nav.php";

?>



  <?php

    if ($clicked_user === $username) {

?> 

<?php

    include "fun/clicked_equal_user_profile.php";

?>
    
<?php

    } else {

?>

<?php

    include "fun/clicked_not-equals_user_profile.php";

?>

<?php

    }

?>
   
<?php

    include "ajax/prof_ajax.php";

?>

  </body>

</html>

<!-- Powerd By Mohamed Hany -->
