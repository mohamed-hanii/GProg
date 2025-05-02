
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

$stored_password = $user['pass'];  

$alert_message = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $answer = $_POST['answer'];

    $new_password = $_POST['new_password'];

    $confirm_password = $_POST['confirm_password'];

    if ($answer !== $user['security_ans']) {

        $alert_message = "The Answer is incorrect.";

    } else {

        if ($new_password !== $confirm_password) {

            $alert_message = "The new passwords do not match.";

        } else {

            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            $update = "UPDATE `users` SET `pass`='$hashed_password' WHERE `id`='$user_id'";

            if (mysqli_query($conn, $update)) {

                $alert_message = "Password updated successfully!";

            } else {

                $alert_message = "Error updating password: " . mysqli_error($conn);

            }

        }

    }

}

?>
