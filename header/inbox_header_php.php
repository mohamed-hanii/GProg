
<?php

    include "fun/connect.php";

    session_start();

    if (!isset($_SESSION['username'])) {

        header("Location: index.php");

        exit;

    }

    $user_chat = $_GET['username'];

    $user_chat_sql = "SELECT * FROM users WHERE username = '$user_chat'";

    $user_chat_result = mysqli_query($conn, $user_chat_sql);

    $user_chat_data = mysqli_fetch_assoc($user_chat_result);

    $user = $_SESSION['username'];

    $user_sql = "SELECT * FROM users WHERE username = '$user'";

    $user_result = mysqli_query($conn, $user_sql);

    $user_data = mysqli_fetch_assoc($user_result);

?>