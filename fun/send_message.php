
<?php

    include "connect.php";

    session_start();

    if (!isset($_SESSION['username'])) {

        echo json_encode(['status' => 'error', 'message' => 'User not logged in']);

        exit;

    }

    $message_text = isset($_POST['message_text']) ? $_POST['message_text'] : '';

    $receiver_id = isset($_POST['receiver_id']) ? $_POST['receiver_id'] : '';

    if (empty($receiver_id)) {

        echo json_encode(['status' => 'error', 'message' => 'Receiver is missing']);

        exit;

    }

    if (empty($message_text) && empty($_FILES['file']['name'])) {

        echo json_encode(['status' => 'error', 'message' => 'Message text or file is missing']);

        exit;

    }

    $user = $_SESSION['username'];

    $user_query = "SELECT * FROM users WHERE username = '$user'";

    $user_result = mysqli_query($conn, $user_query);

    $user_data = mysqli_fetch_assoc($user_result);

    $sender_id = $user_data['id'];

    $profile_img = $user_data['profile_img'];

    $chat_sql = "SELECT * FROM chat WHERE (user1_id = '$sender_id' AND user2_id = '$receiver_id') OR (user1_id = '$receiver_id' AND user2_id = '$sender_id')";

    $chat_result = mysqli_query($conn, $chat_sql);

    if (mysqli_num_rows($chat_result) == 0) {

        $time = date("Y-m-d H:i:s");

        $chat_insert = "INSERT INTO chat (user1_id, user2_id, time) VALUES ('$sender_id', '$receiver_id', '$time')";
        
        mysqli_query($conn, $chat_insert);

        $chat_id = mysqli_insert_id($conn);

    } else {

        $chat_data = mysqli_fetch_assoc($chat_result);

        $chat_id = $chat_data['id'];

    }

    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/avi', 'video/mkv'];

    $file_name = '';

    $file_type = '';

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {

        $file = $_FILES['file'];

        $file_name = 'gprog' . uniqid() . '-' . $file['name']; 
        
        $file_tmp = $file['tmp_name'];

        error_log("Received file type: " . $file['type']); 

        error_log("MIME type detected: " . mime_content_type($file_tmp)); 

        $file_type = mime_content_type($file_tmp);  

        if (!in_array($file_type, $allowed_types)) {

            echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);

            exit;

        }

        move_uploaded_file($file_tmp, "../uploads/" . $file_name);

    }

    $sent_at = date("Y-m-d H:i:s");

    $message_sql = "INSERT INTO messages (chat_id, sender_id, receiver_id, message_text, file, sent_at, status) VALUES ('$chat_id', '$sender_id', '$receiver_id', '$message_text', '$file_name', '$sent_at', 'sent')";

    mysqli_query($conn, $message_sql);

    $response = [

        'status' => 'sent',

        'profile_img' => $profile_img, 

        'file' => $file_name,   

        'file_type' => $file_type, 

        'sender_id' => $sender_id,

        'message_text' => $message_text,

        'sent_at' => $sent_at

    ];

    echo json_encode($response);  

?>