
<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;
  
}

include "fun/connect.php";

$user = $_SESSION['username'];

$sql = "SELECT profile_img, id FROM users WHERE username = '$user'";

$result = $conn->query($sql);

$user_data = $result->fetch_assoc();

$id = $user_data['id']; 

$not_sql = "SELECT * FROM `notification` WHERE reseive_user = '$user' ORDER BY TIME DESC";

$not_result = mysqli_query($conn, $not_sql);

?>