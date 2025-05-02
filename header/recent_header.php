
<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

include "fun/connect.php";

$user = $_SESSION['username'];

$sql = "SELECT profile_img FROM users WHERE username = '$user'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $profile_picture = $row['profile_img'];

} else {

    $profile_picture = "https://via.placeholder.com/150"; 

}

$user = $_SESSION['username'];

$sql_user_id = "SELECT id FROM users WHERE username = '$user'";

$result_user = $conn->query($sql_user_id);

if ($result_user->num_rows > 0) {

    $row_user = $result_user->fetch_assoc();

    $user_id = $row_user['id'];
    
} else {

    echo "User not found";

    exit;

}

?>