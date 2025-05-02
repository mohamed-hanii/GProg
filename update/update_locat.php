
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

    $new_country = mysqli_real_escape_string($conn, $_POST['country']);

    $new_city = mysqli_real_escape_string($conn, $_POST['city']);

    $new_town = mysqli_real_escape_string($conn, $_POST['town']);
    
    $new_address = mysqli_real_escape_string($conn, $_POST['address']);
    
    $new_post_code = mysqli_real_escape_string($conn, $_POST['post_code']);

    $update = "UPDATE `users` SET `country`='$new_country', `city`='$new_city', `town`='$new_town', `address`='$new_address', `post_code`='$new_post_code' WHERE `id`='$user_id'";
	
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