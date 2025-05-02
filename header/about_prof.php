
<?php

  session_start();

  if (!isset($_SESSION['username'])) {

      header("Location: index.php");

      exit;

  }

  include 'fun/connect.php'; 

  $username = $_SESSION['username'];

  $clicked_user= $_GET['username'];

  if ($clicked_user === $username) {

      $sql = "SELECT * FROM users WHERE username = '$username'";

      $result = mysqli_query($conn, $sql);

      $user = mysqli_fetch_assoc($result);

  } else {

      $sql = "SELECT * FROM users WHERE username = '$clicked_user'";

      $result = mysqli_query($conn, $sql);

      $user = mysqli_fetch_assoc($result);

  }

  $user_field = $user['field'];

  $user_id = $user['id'];

  $field_sql = "SELECT * FROM field WHERE id = '$user_field'";

  $field_result = mysqli_query($conn, $field_sql);

  $field = mysqli_fetch_assoc($field_result);

  $post_sql = "SELECT * FROM posts WHERE user_id = '$user_id'";

  $post_result = mysqli_query($conn, $post_sql);

  $post = mysqli_fetch_assoc($post_result);

  $post_time = $post['time'];

  $post_id = $post['id'];

  $date_only = date("d-m-y", strtotime($post_time));

  $post_num = $post_result -> num_rows ;

  $post_owner_id = $post['user_id'];

  $post_owner = "SELECT * FROM users WHERE id = '$post_owner_id' ";

  $post_owner_result = mysqli_query($conn, $post_owner);

  $post_owner_data = mysqli_fetch_assoc($post_owner_result );

?>

