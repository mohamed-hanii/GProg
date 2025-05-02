
<div class="header__wrapper">

      <header></header>

      <div class="cols__container">

        <div class="left__col">

          <div class="img__container">

            <img src="<?= 'uploads/' . $user['profile_img'] ?>" alt="UserName" />

          </div>

          <h2 class="dattt" style="color: green; margin-bottom: 1px; text-align:center !important;"><?= $user['first_name'] . ' ' . $user['last_name'] ?></h2>
         
          <p class="dattt" style="font-size: 15px; margin-bottom: 1px; text-align:center !important;">@<?= $user['username']?></p>
          
          <p style="text-align:center !important;"><?= $field['name'] ?></p>
          
          <ul style="" class="about" style="justify-content: space-around !important;">
           
            <li style="font-size: 15px; display: flex !important;justify-content: center !important; align-items: center !important;font-size: 15px;">
           
            <span style="margin-bottom: 5px;">Questions</span><?= $post_num ?></li>
            
            <li style="font-size: 15px; display: flex !important;justify-content: center !important; align-items: center !important;font-size: 15px;">
            
            <span style="margin-bottom: 5px;">Answers</span><?= $answers_num ?></li>
         
          </ul>

          <div class="content" style="width: 350px;">

          <div class="bio">
           
           <p>
           
           <?php
               if (empty($user['bio'])): ?>

                   <?= "No Bio Yet !"?>

            <?php else: ?>

           <?php if (!empty($user['bio'])): ?>

           <?=$user['bio']?>

           <?php endif; ?>
           
           <?php endif; ?>

           </p>

          <hr style="margin-top: 50px; margin-bottom: 5px; margin-left: 0 !important; width: 95%; max-width: 95%; text-align:center !important;">
         
         </div>
         
          <p style="padding-top: 14px; opacity: .8; font-size: 14px; text-align:center !important;">other accounts</p>
         
          <ul>
<?php 

    $facebook = $user['facebook'];

    $instagram = $user['insta'];

    $linkedin = $user['linkedin'];

    $vk = $user['vk'];

    $twitter = $user['twitter'];

    $youtube = $user['youtube'];

    $github = $user['github'];

    if (empty($facebook) && empty($instagram) && empty($linkedin) && empty($vk) && empty($twitter) && empty($youtube) && empty($github)): ?>
       
        <li>No Account Have Been Added !</li>

    <?php else: ?>

        <?php if (!empty($facebook)): ?>

        <li>

      <a href="<?= $user['facebook'] ?>"target="_blank"><i style="cursor: pointer;" class="fa-brands fa-facebook fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

        <?php if (!empty($instagram)): ?>

        <li>

        <a href="<?= $user['insta'] ?>" target="_blank"><i style="cursor: pointer;" class="fa-brands fa-instagram fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

        <?php if (!empty($linkedin)): ?>

        <li>

        <a href="<?= $user['linkedin'] ?>" target="_blank"><i style="cursor: pointer;" class="fa-brands fa-linkedin fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

        <?php if (!empty($vk)): ?>

        <li>

        <a href="<?= $user['vk'] ?>"target="_blank"><i style="cursor: pointer;" class="fa-brands fa-vk fa-beat-fade"></i></a> 
        
        </li>

        <?php endif; ?>

        <?php if (!empty($twitter)): ?>

        <li>

        <a href="<?= $user['twitter'] ?>"target="_blank"><i style="cursor: pointer;" class="fa-brands fa-x fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

        <?php if (!empty($youtube)): ?>

        <li>

        <a href="<?= $user['youtube'] ?>"target="_blank"><i style="cursor: pointer;" class="fa-brands fa-youtube fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

        <?php if (!empty($github)): ?>

        <li>

        <a href="<?= $user['github'] ?>"target="_blank"> <i style="cursor: pointer;" class="fa-brands fa-github fa-beat-fade"></i></a> 
       
        </li>

        <?php endif; ?>

    <?php endif; ?>

</ul>

          </div>

          <br>  <br>  <br>

          <div style="height: 200px; width: 90%px; border: .1px solid black; margin-left: 13px; display: flex; align-items: center; justify-content: center; text-align: center;">
           
            <p style="font-size: 18px; font-weight: bold;">مساحة اعلانية</p>
           
            </div>

        </div>

        <div class="right__col">

          <nav>

            <ul style="font-size: 12.5px;">

              <li><a><i class="fa-solid fa-clock-rotate-left"></i> All Questions</a></li>

              <li><a href="about-profile.php?username=<?php echo urlencode($user['username']); ?>"><i class="fa-solid fa-address-card"></i> About</a></li>
              
              <li><a href="edit-profile/index.php"><i class="fa-solid fa-gears"></i> Settings</a></li>
           
            </ul>
          
           <a href="edit-profile/basics.php"><button><i class="fa-solid fa-user-pen"></i> Edit Profile</button></a> 
         
          </nav>

            <hr>

            <br>

<?php

$post_sql = "SELECT * FROM posts WHERE user_id = '$user_id' ORDER BY time DESC";

$post_result = mysqli_query($conn, $post_sql);

if (mysqli_num_rows($post_result) > 0) {

    while ($post = mysqli_fetch_assoc($post_result)) {

      $post_time = $post['time'];  

      $media = $post['post_media'];  

      $post_text = $post['post_text'];  

      $date_only = date("d-m-y", strtotime($post_time));  
      
      $post_like_sql = "SELECT COUNT(*) AS like_count FROM post_like WHERE post_id = '" . $post['id'] . "'";
     
      $post_like_result = mysqli_query($conn, $post_like_sql);
     
      $post_like_data = mysqli_fetch_assoc($post_like_result);
     
      $post_like_num = $post_like_data['like_count'];

      $post_view_sql = "SELECT COUNT(*) AS view_count FROM post_view WHERE post_id = '" . $post['id'] . "'";
    
      $post_view_result = mysqli_query($conn, $post_view_sql);
     
      $post_view_data = mysqli_fetch_assoc($post_view_result);
     
      $post_view_num = $post_view_data['view_count'];

      $post_comment_sql = "SELECT COUNT(*) AS comment_count FROM comment WHERE post_id = '" . $post['id'] . "'";
     
      $post_comment_result = mysqli_query($conn, $post_comment_sql);
     
      $post_comment_data = mysqli_fetch_assoc($post_comment_result);
     
      $post_comment_num = $post_comment_data['comment_count'];
      
      $owner_id = $post['user_id']; 

      $user_sql = "SELECT * FROM users WHERE id = '$owner_id'";

      $user_result = mysqli_query($conn, $user_sql);

      $user_data = mysqli_fetch_assoc($user_result);

      $logged_in_user = $_SESSION['username'];  
      
      $post_check_like_sql = "SELECT * FROM post_like WHERE post_id = '" . $post['id'] . "' AND user_id = '" . $user_id . "'";
     
      $post_check_like_result = mysqli_query($conn, $post_check_like_sql);
     
      $is_liked = mysqli_num_rows($post_check_like_result) > 0;

      $post_check_saved_sql = "SELECT * FROM saved WHERE post_id = '" . $post['id'] . "' AND user_id = '" . $user_id . "'";
     
      $post_check_saved_result = mysqli_query($conn, $post_check_saved_sql);
     
      $is_saved = mysqli_num_rows($post_check_saved_result) > 0;

      echo '
      <div class="post">
          <div class="post-top">
              <div class="dp">
                  <a href="profile.php?username=' . urlencode($user_data['username']) . '">  
                      <img src="uploads/' . $user_data["profile_img"] . '" alt="">
                  </a>
              </div>
              <a href="profile.php?username=' . urlencode($user_data['username']) . '">  
                  <div class="post-info">
                      <p class="name">
                          ' . $user_data["first_name"] . ' ' . $user_data["last_name"] . '<br>
                          <span style="font-size: 12px; opacity: .7;">' . $date_only . '</span>
                      </p>
                  </div>
              </a>
          </div>
          <div class="post-content">
              ' . nl2br(htmlspecialchars($post_text)) . '
              <br><br>';

      if (!empty($media)) {

          $file_extension = pathinfo($media, PATHINFO_EXTENSION);
          
          if (in_array(strtolower($file_extension), ['mp4', 'avi', 'mov', 'mkv'])) {

              echo '<video width="100%" controls><source src="uploads/' . $media . '" type="video/' . $file_extension . '">Your browser does not support the video tag.</video>';
         
            } elseif (in_array(strtolower($file_extension), ['jpg', 'jpeg', 'png', 'gif'])) {
           
                echo '<img src="uploads/' . $media . '" alt="Media">';
         
            }
    
        }

      echo '
      </div>

      <div class="post-bottom">
          <div data-reaction-type="post_react"                   
          data-user-id="'. $post['user_id'] .'"
          data-post-id="'. $post['id'] .'"
          data-action="' . ($is_liked ? 'unlike' : 'like') . '"
          class="action post-reacts love">
              <i id="loo" 
              class="change ' . ($is_liked ? 'fa-solid' : 'fa-regular') . ' fa-heart"></i>  
              <span class="counter">' . $post_like_num . '</span>
          </div>

          <a href="view-post.php?id=' . urlencode($post['id']) . '">
              <div class="action post-reacts">
                  <i class="fa-regular fa-comment"></i><span class="counter">' . $post_comment_num . '</span>
              </div>
          </a>';

      if ($user_data['username'] == $logged_in_user) {
          echo '
          <div class="action post-reacts">
              <a href="edit-post.php?id=' . urlencode($post['id']) . '"> 
                  <i class="fa-solid fa-pen"></i>
              </a><span class="counter"></span>
          </div>';
      } else {
          echo '
          <div data-reaction-type="save_post"                   
          data-user-id="'. $post['user_id'] .'"
          data-post-id="'. $post['id'] .'"
          data-action="' . ($is_saved ? 'unsave' : 'save') . '"
          class="action post-reacts love">
              <i class="change ' . ($is_saved ? 'fa-solid' : 'fa-regular') . ' fa-bookmark"></i>
          </div>';
      }

      echo '
      </div>
  </div>
  ';
  }

} else {

  echo "No Questions Or Problems Yet."; 

}

?>

            </div>
    
        </div>
    
    </div>
