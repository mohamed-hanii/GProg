
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

    $new_spoken_langs = mysqli_real_escape_string($conn, $_POST['spoken_langs']);

    $new_prog_langs = mysqli_real_escape_string($conn, $_POST['prog_langs']);

    $update = "UPDATE `users` SET `spoken_langs`='$new_spoken_langs', `prog_langs`='$new_prog_langs' WHERE `id`='$user_id'";
	
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