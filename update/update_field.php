
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

$field_sql = "SELECT * FROM field"; 

$field_result = mysqli_query($conn, $field_sql);

$field_user = mysqli_fetch_all($field_result, MYSQLI_ASSOC);

$current_field = $user['field'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$new_field = mysqli_real_escape_string($conn, $_POST['field']);
	
    $update = "UPDATE `users` SET `field`='$new_field' WHERE `id`='$user_id'";
	
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