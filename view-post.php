<!-- Powerd By Mohamed Hany -->

<?php

  include "header/view-post_header.php";

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <?php

      include "theme/view-post_theme.php"

    ?>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $post['post_text'] ?> | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

  <body>

    <h1 class="headh1 align-items-flex-end">

      <a href="home.php">
      
        <button class="back">
        
          <i class="fa-solid fa-left-long"></i> Back
          
        </button>
      
      </a>

    </h1>

    <div class="card w-100">

      <div class="card-body">

        <h5 class="card-title">مساحة اعلانية</h5>

      </div>

    </div>
    
    <br>

<?php

  include "fun/show_post.php"

?>

    <br>  <br>

    <span class="ms-2" style="color: green; font-size: 27px; font-family: cursive;">Answers</span> <span style="color: green; font-size: 16px; font-family: cursive;" class="badge text-bg-secondary"><?=$post_comment_num?></span>

    <br>  <br>  <br>

    <div class="text-center mb-2">

      <span class="" style="font-size: 17px;">Write an Answer:</span>

    </div>

    <form action="view-post.php?id=<?=$post['id']?>" method="POST" enctype="multipart/form-data">

        <div class="form-floating ms-2 me-2">

            <textarea class="form-control" name="comment" required placeholder="Leave your answer here" id="floatingTextarea2" style="height: 100px"></textarea>
            
            <label for="floatingTextarea2">Answer here..</label>
            
            <div class="mb-1 mt-2">
                
                <label for="formFileSm" name="media" class="form-label">Upload Image Or Video :</label>
               
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="media">
           
            </div>
            
            <button type="submit" class="btn btn-primary mt-2" style="width: auto;">Submit</button>
        
        </div>
    
    </form>

    <?php if (!empty($error_message)): ?>

        <div class="alert alert-danger mt-3" role="alert">

            <?php echo $error_message; ?>

        </div>

    <?php endif; ?>

    <?php if (!empty($errorMessage)) : ?>

    <br>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <?php echo $errorMessage; ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
        </div>

    <?php endif; ?>

    <br>  <br>  <br>

    <?php

    include "fun/show_comments.php";

    ?>




    <?php

    include "ajax/view_post_ajax.php";

    ?>

    <br>  <br>  <br>  <br>  <br>  <br>  </div>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
    
    <script src="assets/js/aos.js"></script>

    <script src="assets/js/fontawesome.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   
    <script src="assets/js/script.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="assets/js/script.js"></script>

 </body>

  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>

</html>

<!-- Powerd By Mohamed Hany -->
