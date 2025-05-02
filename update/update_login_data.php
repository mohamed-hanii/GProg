
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

$alert_message = "";

$user_id = $user['id']; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $new_email = $_POST['email'];

    $new_username = $_POST['username'];

    $check_sql = "SELECT * FROM users WHERE username = '$new_username' AND id != '$user_id'"; 

    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) == 0) { 

        $update_sql = "UPDATE users SET username='$new_username', email='$new_email' WHERE id='$user_id'";
        
        $update_go = mysqli_query($conn, $update_sql);

        if ($update_go) {

            $delete_sessions_sql = "DELETE FROM sessions WHERE user_id = '$user_id'";

            mysqli_query($conn, $delete_sessions_sql);

            $alert_message = "updated successfully!";

           header("location: out.php");

        } else {

            $alert_message = "Failed to update data. Please try again.";

        }

    } else {

        $alert_message = "Username already exists!";

    }

}

?>
