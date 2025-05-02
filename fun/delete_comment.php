
<?php

    session_start();

    if (!isset($_SESSION['username'])) {

        header("Location: index.php");

        exit;
    }

    include "connect.php";

    if (!isset($_GET['id']) || empty($_GET['id'])) {

        die("Comment ID is missing.");

    }

    $comment_id = $_GET['id'];

    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());

    }

    $delete_like_sql = "DELETE FROM `comment_like` WHERE `comment_id` = '$comment_id'";

    if (mysqli_query($conn, $delete_like_sql)) {

        $delete_sql = "DELETE FROM `comment` WHERE `id` = '$comment_id'";

        if (mysqli_query($conn, $delete_sql)) {

            if (isset($_SERVER['HTTP_REFERER'])) {

                $previousPage = $_SERVER['HTTP_REFERER'];

                header("Location: $previousPage");

                exit;

            } else {

                header("Location: home.php");

                exit;
            }

        } else {

            echo "Error: " . mysqli_error($conn);

        }

    } else {

        echo "Error deleting comment likes: " . mysqli_error($conn);

    }

?>

