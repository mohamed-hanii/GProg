
<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

include '../fun/connect.php'; 

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "s", $username);  

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

$user_id = $user['id'];

$alert_message = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $new_insta = mysqli_real_escape_string($conn,  $_POST['insta']);

    $new_facebook = mysqli_real_escape_string($conn,  $_POST['facebook']);

    $new_github = mysqli_real_escape_string($conn,  $_POST['github']);

    $new_linkedin = mysqli_real_escape_string($conn,  $_POST['linkedin']);

    $new_twitter = mysqli_real_escape_string($conn,  $_POST['twitter']);

    $new_vk = mysqli_real_escape_string($conn,  $_POST['vk']);

    $new_youtube = mysqli_real_escape_string($conn,  $_POST['youtube']);

    $update = "UPDATE `users` SET `insta`='$new_insta', `facebook`='$new_facebook', `github`='$new_github', `linkedin`='$new_linkedin', `twitter`='$new_twitter', `vk`='$new_vk', `youtube`='$new_youtube' WHERE `id`='$user_id'";
	
    if (empty($alert_message)) {
        
        $update_go = mysqli_query($conn, $update);

        if ($update_go) {

            header("Refresh: 0; url=" . $_SERVER['PHP_SELF']);

        } else {

            echo "Error updating the record: " . mysqli_error($conn);

        }

    }

}

?>