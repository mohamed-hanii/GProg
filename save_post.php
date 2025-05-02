
<?php

include "fun/connect.php";

session_start();

$post_id = $_POST['post_id'];

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username = '$username'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

$user_id = $user['id'];

$post_save_sql = "SELECT * FROM `saved` WHERE `post_id` = ? AND `user_id` = ?";

$stmt_check = $conn->prepare($post_save_sql);

$stmt_check->bind_param("ii", $post_id, $user_id);

$stmt_check->execute();

$result_check = $stmt_check->get_result();

if ($result_check->num_rows == 0) {

    $query_insert = "INSERT INTO `saved`(`post_id`, `user_id`, `time`) VALUES (?, ?, NOW())";

    $stmt_insert = $conn->prepare($query_insert);

    $stmt_insert->bind_param("ii", $post_id, $user_id);
    
    if ($stmt_insert->execute()) {

        $query_count = "SELECT COUNT(*) AS save_count FROM `saved` WHERE `post_id` = ?";

        $stmt_count = $conn->prepare($query_count);

        $stmt_count->bind_param("i", $post_id);

        $stmt_count->execute();

        $result_count = $stmt_count->get_result();

        $row_count = $result_count->fetch_assoc();

        $new_save_count = $row_count['save_count'];

        echo json_encode(['status' => 'saved', 'new_save_count' => $new_save_count]);

    } else {

        echo json_encode(['status' => 'error', 'message' => 'Failed to save post']);

    }

} else {

    $query_delete = "DELETE FROM `saved` WHERE `post_id` = ? AND `user_id` = ?";

    $stmt_delete = $conn->prepare($query_delete);

    $stmt_delete->bind_param("ii", $post_id, $user_id);

    if ($stmt_delete->execute()) {

        $query_count = "SELECT COUNT(*) AS save_count FROM `saved` WHERE `post_id` = ?";

        $stmt_count = $conn->prepare($query_count);

        $stmt_count->bind_param("i", $post_id);

        $stmt_count->execute();

        $result_count = $stmt_count->get_result();

        $row_count = $result_count->fetch_assoc();

        $new_save_count = $row_count['save_count'];

        echo json_encode(['status' => 'unsaved', 'new_save_count' => $new_save_count]);
        
    } else {

        echo json_encode(['status' => 'error', 'message' => 'Failed to remove save']);

    }

}

$conn->close();

?>
