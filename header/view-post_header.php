
<?php

session_start();

include "fun/connect.php";

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

$current_user = $_SESSION['username'];

$post_id = $_GET['id'];

$current_user_data_sql = "SELECT * FROM users WHERE username = '$current_user' ";

$current_user_data_result = mysqli_query($conn, $current_user_data_sql);

if (!$current_user_data_result) {

    die("Error executing query: " . mysqli_error($conn));  

}

$current_user_data = mysqli_fetch_assoc($current_user_data_result);

$current_user_id = $current_user_data['id'];

$post_like_sql = "SELECT * FROM `post_like` WHERE `post_id` = '$post_id' AND `user_id` = '$current_user_id'";

$post_like_r = mysqli_query($conn, $post_like_sql);

if (!$post_like_r) {

    die("Error executing query: " . mysqli_error($conn));  

}

$post_like_num = mysqli_num_rows($post_like_r);  

$post_like = mysqli_fetch_assoc($post_like_r);

$has_reacted = $post_like_num > 0 ? true : false;

$post_save_sql = "SELECT * FROM `saved` WHERE `post_id` = '$post_id' AND `user_id` = '$current_user_id'";

$post_save_r = mysqli_query($conn, $post_save_sql);

if (!$post_save_r) {

    die("Error executing query: " . mysqli_error($conn));  

}

$post_save_num = mysqli_num_rows($post_save_r);  


if (empty($post_id) || !is_numeric($post_id)) {

    die("Invalid post ID");

}

$post_sql = "SELECT * FROM posts WHERE id = '$post_id'";

$post_result = mysqli_query($conn, $post_sql);

if (!$post_result) {

    die("Error executing query: " . mysqli_error($conn));

}

$post = mysqli_fetch_assoc($post_result);

if (!$post) {

    die("Post not found");

}

$post_owner_id = $post['user_id'];

$sql = "SELECT * FROM users WHERE id = '$post_owner_id'";

$result = mysqli_query($conn, $sql);

if (!$result) {

    die("Error executing query: " . mysqli_error($conn));

}

$user = mysqli_fetch_assoc($result);

if (!$user) {

    die("User not found");

}

$post_owner_username = $user['username'];

$post_time = $post['time'];

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

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $comment_content = isset($_POST['comment']) ? $_POST['comment'] : '';

  $media = null;

  if (isset($_FILES['media']) && $_FILES['media']['error'] == 0) {

      $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4'];

      $file_type = $_FILES['media']['type'];

      if (in_array($file_type, $allowed_types)) {

          $ext = pathinfo($_FILES['media']['name'], PATHINFO_EXTENSION);

          $new_file_name = 'gprog_' . uniqid() . '.' . $ext;

          $upload_dir = 'uploads/';

          if (!is_dir($upload_dir)) {

              mkdir($upload_dir, 0777, true);

          }

          $upload_path = $upload_dir . $new_file_name;

          if (move_uploaded_file($_FILES['media']['tmp_name'], $upload_path)) {

              $media = $new_file_name;

          } else {

              $error_message = "Error....Please Try Again Later";

          }

      } else {

          $error_message = "Please upload only a photo or video.";

      }

  }

  if (!empty($comment_content) && empty($error_message)) {

      $user_id = $_SESSION['user_id']; 
      
      $current_time = date("Y-m-d H:i:s");

      $insert_sql = "INSERT INTO `comment`(`post_id`, `user_id`, `content`, `media`, `time`) 
                     VALUES ('$post_id', '$user_id', '$comment_content', '$media', '$current_time')";
     
     if (mysqli_query($conn, $insert_sql)) {
          
          $insert_notification_sql = "INSERT INTO `notification`(`user_id`, `type`, `content`, `reseive_user`, `time`)
                                      VALUES ('$user_id', 'comment_create', 
                                      'User " . $current_user_data['username'] . " has replied to your question  $post_id : $comment_content', 
                                      '$post_owner_username', '$current_time')";
          
          if (!mysqli_query($conn, $insert_notification_sql)) {
              
            $error_message = "Error adding notification. Please try again later.";
         
        } else {

              echo "<script>window.location.href = 'view-post.php?id=$post_id';</script>";

          }

      } else {

          $error_message = "Error....Please Try Again Later";

      }

  }

}

?>