
<?php

    session_start();

    include "fun/connect.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    $user_id = $user['id'];

    $post_id = $_POST['post_id'];

    $query_user_check = "SELECT id FROM users WHERE id = ?";

    $stmt_user_check = $conn->prepare($query_user_check);

    if ($stmt_user_check === false) {

        die("Error preparing statement: " . $conn->error);

    }

    $stmt_user_check->bind_param("i", $user_id);

    $stmt_user_check->execute();

    $result_user_check = $stmt_user_check->get_result();

    if ($result_user_check->num_rows == 0) {

        echo json_encode(['status' => 'error', 'message' => 'User not found']);

        exit;

    }

    $query_check = "SELECT * FROM post_like WHERE post_id = ? AND user_id = ?";

    $stmt = $conn->prepare($query_check);

    if ($stmt === false) {

        die("Error preparing statement: " . $conn->error);

    }

    $stmt->bind_param("ii", $post_id, $user_id);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 0) {

        $query_insert = "INSERT INTO post_like (post_id, user_id, time) VALUES (?, ?, NOW())";

        $stmt_insert = $conn->prepare($query_insert);

        if ($stmt_insert === false) {

            die("Error preparing statement: " . $conn->error);

        }

        $stmt_insert->bind_param("ii", $post_id, $user_id);

        if ($stmt_insert->execute()) {

            $query_count = "SELECT COUNT(*) AS like_count FROM post_like WHERE post_id = ?";

            $stmt_count = $conn->prepare($query_count);

            if ($stmt_count === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_count->bind_param("i", $post_id);

            $stmt_count->execute();

            $result_count = $stmt_count->get_result();

            $row_count = $result_count->fetch_assoc();

            $new_like_count = $row_count['like_count'];

            $query_post_owner = "SELECT user_id FROM posts WHERE id = ?";

            $stmt_post_owner = $conn->prepare($query_post_owner);

            if ($stmt_post_owner === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_post_owner->bind_param("i", $post_id);

            $stmt_post_owner->execute();

            $result_post_owner = $stmt_post_owner->get_result();

            $row_post_owner = $result_post_owner->fetch_assoc();

            $post_owner_id = $row_post_owner['user_id'];

            $query_post_owner_username = "SELECT username FROM users WHERE id = ?";

            $stmt_post_owner_username = $conn->prepare($query_post_owner_username);

            if ($stmt_post_owner_username === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_post_owner_username->bind_param("i", $post_owner_id);

            $stmt_post_owner_username->execute();

            $result_post_owner_username = $stmt_post_owner_username->get_result();

            $row_post_owner_username = $result_post_owner_username->fetch_assoc();

            $post_owner_username = $row_post_owner_username['username'];

            $content =  $username .  " liked your Question " . $post_id;

            $query_notify = "INSERT INTO notification (user_id, type, content, reseive_user, time) 
                            VALUES (?, 'post_like', ?, ?, NOW())";

            $stmt_notify = $conn->prepare($query_notify);

            if ($stmt_notify === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_notify->bind_param("iss", $user_id, $content, $post_owner_username);

            $stmt_notify->execute();

            echo json_encode(['status' => 'reacted', 'new_like_count' => $new_like_count]);

        } else {

            echo json_encode(['status' => 'error', 'message' => 'Failed to add reaction. Error: ' . $stmt_insert->error]);
        
        }

    } else {

        $query_delete = "DELETE FROM post_like WHERE post_id = ? AND user_id = ?";

        $stmt_delete = $conn->prepare($query_delete);

        if ($stmt_delete === false) {

            die("Error preparing statement: " . $conn->error);

        }

        $stmt_delete->bind_param("ii", $post_id, $user_id);

        if ($stmt_delete->execute()) {

            $query_count = "SELECT COUNT(*) AS like_count FROM post_like WHERE post_id = ?";

            $stmt_count = $conn->prepare($query_count);

            if ($stmt_count === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_count->bind_param("i", $post_id);

            $stmt_count->execute();

            $result_count = $stmt_count->get_result();

            $row_count = $result_count->fetch_assoc();

            $new_like_count = $row_count['like_count'];

            $query_post_owner = "SELECT user_id FROM posts WHERE id = ?";

            $stmt_post_owner = $conn->prepare($query_post_owner);

            if ($stmt_post_owner === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_post_owner->bind_param("i", $post_id);

            $stmt_post_owner->execute();

            $result_post_owner = $stmt_post_owner->get_result();

            $row_post_owner = $result_post_owner->fetch_assoc();

            $post_owner_id = $row_post_owner['user_id'];

            $query_post_owner_username = "SELECT username FROM users WHERE id = ?";

            $stmt_post_owner_username = $conn->prepare($query_post_owner_username);

            if ($stmt_post_owner_username === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_post_owner_username->bind_param("i", $post_owner_id);

            $stmt_post_owner_username->execute();

            $result_post_owner_username = $stmt_post_owner_username->get_result();

            $row_post_owner_username = $result_post_owner_username->fetch_assoc();

            $post_owner_username = $row_post_owner_username['username'];

            $content =  $username . " removed the like for your Question " . $post_id;

            $query_notify = "INSERT INTO notification (user_id, type, content, time) 
                            VALUES (?, 'post_like', ?, NOW())";

            $stmt_notify = $conn->prepare($query_notify);

            if ($stmt_notify === false) {

                die("Error preparing statement: " . $conn->error);

            }

            $stmt_notify->bind_param("is", $user_id, $content);

            $stmt_notify->execute();

            echo json_encode(['status' => 'removed', 'new_like_count' => $new_like_count]);

        } else {

            echo json_encode(['status' => 'error', 'message' => 'Failed to remove reaction. Error: ' . $stmt_delete->error]);
        
        }

    }

    $conn->close();

?>
