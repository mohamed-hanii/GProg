
<?php

    session_start();

    include "fun/connect.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    $user_id = $user['id'];

    $comment_id = $_POST['comment_id'];

    $post_id = $_POST['post_id'];

    $user_id = $user['id'];

    $response = [];

    $query_check = "SELECT * FROM comment_like WHERE comment_id = ? AND user_id = ?";

    $stmt = $conn->prepare($query_check);

    $stmt->bind_param("ii", $comment_id, $user_id);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 0) {

        $query_insert = "INSERT INTO comment_like (comment_id, post_id, user_id, time) VALUES (?, ?, ?, NOW())";
        
        $stmt_insert = $conn->prepare($query_insert);
        
        $stmt_insert->bind_param("iii", $comment_id, $post_id, $user_id);
        
        if ($stmt_insert->execute()) {

            $query_count = "SELECT COUNT(*) AS like_count FROM comment_like WHERE comment_id = ?";
            
            $stmt_count = $conn->prepare($query_count);
        
            $stmt_count->bind_param("i", $comment_id);
        
            $stmt_count->execute();
        
            $result_count = $stmt_count->get_result();
        
            $row_count = $result_count->fetch_assoc();
        
            $new_like_count = $row_count['like_count'];

            $query_comment_owner = "SELECT user_id FROM comment WHERE id = ?";

            $stmt_comment_owner = $conn->prepare($query_comment_owner);

            $stmt_comment_owner->bind_param("i", $comment_id);

            $stmt_comment_owner->execute();

            $result_comment_owner = $stmt_comment_owner->get_result();

            $row_comment_owner = $result_comment_owner->fetch_assoc();

            $comment_owner_id = $row_comment_owner['user_id'];

            $query_comment_owner_username = "SELECT username FROM users WHERE id = ?";

            $stmt_comment_owner_username = $conn->prepare($query_comment_owner_username);

            $stmt_comment_owner_username->bind_param("i", $comment_owner_id);

            $stmt_comment_owner_username->execute();

            $result_comment_owner_username = $stmt_comment_owner_username->get_result();

            $row_comment_owner_username = $result_comment_owner_username->fetch_assoc();

            $comment_owner_username = $row_comment_owner_username['username'];

            $content =  $username .  " liked your answer to Question " . $post_id;

            $query_notify = "INSERT INTO notification (user_id, type, content, reseive_user, time) 
                            VALUES (?, 'comment_like', ?, ?, NOW())";

            $stmt_notify = $conn->prepare($query_notify);

            $stmt_notify->bind_param("iss", $user_id, $content, $comment_owner_username);

            $stmt_notify->execute();

            $response = ['status' => 'comment-reacted', 'new_like_count' => $new_like_count];

        } else {

            $response = ['status' => 'error', 'message' => 'Failed to add reaction'];

        }

    } else {

        $query_delete = "DELETE FROM comment_like WHERE comment_id = ? AND user_id = ?";

        $stmt_delete = $conn->prepare($query_delete);

        $stmt_delete->bind_param("ii", $comment_id, $user_id);

        if ($stmt_delete->execute()) {

            $query_count = "SELECT COUNT(*) AS like_count FROM comment_like WHERE comment_id = ?";

            $stmt_count = $conn->prepare($query_count);

            $stmt_count->bind_param("i", $comment_id);

            $stmt_count->execute();

            $result_count = $stmt_count->get_result();

            $row_count = $result_count->fetch_assoc();

            $new_like_count = $row_count['like_count'];

            $query_comment_owner = "SELECT user_id FROM comment WHERE id = ?";

            $stmt_comment_owner = $conn->prepare($query_comment_owner);

            $stmt_comment_owner->bind_param("i", $comment_id);

            $stmt_comment_owner->execute();

            $result_comment_owner = $stmt_comment_owner->get_result();

            $row_comment_owner = $result_comment_owner->fetch_assoc();

            $comment_owner_id = $row_comment_owner['user_id'];

            $query_comment_owner_username = "SELECT username FROM users WHERE id = ?";

            $stmt_comment_owner_username = $conn->prepare($query_comment_owner_username);

            $stmt_comment_owner_username->bind_param("i", $comment_owner_id);

            $stmt_comment_owner_username->execute();

            $result_comment_owner_username = $stmt_comment_owner_username->get_result();

            $row_comment_owner_username = $result_comment_owner_username->fetch_assoc();

            $comment_owner_username = $row_comment_owner_username['username'];

            $content =  $username . " deleted the like for your answer to Question " . $post_id;

            $query_notify = "INSERT INTO notification (user_id, type, content, time) 
                            VALUES (?, 'comment_dislike', ?, NOW())";

            $stmt_notify = $conn->prepare($query_notify);

            $stmt_notify->bind_param("is", $user_id, $content);

            $stmt_notify->execute();

            $response = ['status' => 'comment-removed', 'new_like_count' => $new_like_count];

        } else {

            $response = ['status' => 'error', 'message' => 'Failed to remove reaction'];

        }

    }

    echo json_encode($response);

    $conn->close();

?>
