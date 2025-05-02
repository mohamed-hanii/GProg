
<?php

    include "connect.php";

    session_start();

    if (!isset($_SESSION['username'])) {

        echo json_encode(['status' => 'error', 'message' => 'User not logged in']);

        exit;
    }

    $sender_id = $_SESSION['user_id']; 

    $receiver_id = isset($_GET['receiver_id']) ? $_GET['receiver_id'] : ''; 

    $last_message_id = isset($_GET['last_message_id']) ? $_GET['last_message_id'] : 0; 

    if (empty($receiver_id)) {

        echo json_encode(['status' => 'error', 'message' => 'Receiver ID is missing']);

        exit;

    }

    $messages_sql = "SELECT m.*, u.profile_img FROM messages m 
    JOIN users u ON m.sender_id = u.id 
    WHERE ((m.sender_id = '$receiver_id' AND m.receiver_id = '$sender_id') 
    OR (m.sender_id = '$sender_id' AND m.receiver_id = '$receiver_id'))
    AND m.id > '$last_message_id'
    ORDER BY m.sent_at ASC";

    $messages_result = mysqli_query($conn, $messages_sql);

    $messages = [];

    while ($message = mysqli_fetch_assoc($messages_result)) {

        $messages[] = [

            'sender_id' => $message['sender_id'],

            'receiver_id' => $message['receiver_id'],

            'message_text' => $message['message_text'],

            'file' => $message['file'],

            'file_type' => $message['file'],  

            'sent_at' => $message['sent_at'],

            'profile_img' => $message['profile_img'],

            'message_id' => $message['id'] 

        ];

    }

    $allMessagesLoaded = mysqli_num_rows($messages_result) < 10;  

    $response = [

        'status' => 'success',

        'sender_id' => $sender_id,

        'messages' => $messages,

        'last_message_id' => $last_message_id,

        'allMessagesLoaded' => $allMessagesLoaded

    ];

    echo json_encode($response);

?>
