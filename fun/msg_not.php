
<?php

$user = $_SESSION['username'];

$sql = "SELECT profile_img, id FROM users WHERE username = '$user'";

$result = $conn->query($sql);

$user_data = $result->fetch_assoc();

$idd = $user_data['id'];

$chat_sql = "SELECT chat.*, MAX(messages.sent_at) AS last_message_time
            FROM chat
            LEFT JOIN messages ON (messages.sender_id = chat.user1_id AND messages.receiver_id = chat.user2_id)
                                OR (messages.sender_id = chat.user2_id AND messages.receiver_id = chat.user1_id)
            WHERE chat.user1_id = '$idd' OR chat.user2_id = '$idd'
            GROUP BY chat.id
            ORDER BY last_message_time DESC";

$chat_result = mysqli_query($conn, $chat_sql);

$hasNewMessages = false; 

if ($chat_result && mysqli_num_rows($chat_result) > 0) {

    while ($chat_data = mysqli_fetch_assoc($chat_result)) {

        $chat_data_reseive_id = $chat_data['user2_id'] == $idd ? $chat_data['user1_id'] : $chat_data['user2_id'];
        
        $chat_with_sql = "SELECT * FROM users WHERE id = '$chat_data_reseive_id'";

        $chat_with_result = mysqli_query($conn, $chat_with_sql);

        $chat_with_data = mysqli_fetch_assoc($chat_with_result);

        $chat_with_data_username = $chat_with_data['username'];

        $message_sql = "SELECT * FROM messages 
                        WHERE (sender_id = '$chat_data_reseive_id' AND receiver_id = '$idd')
                        OR (sender_id = '$idd' AND receiver_id = '$chat_data_reseive_id')
                        ORDER BY sent_at DESC LIMIT 1"; 

        $message_result = mysqli_query($conn, $message_sql);

        if ($message_result && mysqli_num_rows($message_result) > 0) {

            $message_data = mysqli_fetch_assoc($message_result);

            $last_message = $message_data['message_text']; 

            $message_time = $message_data['sent_at']; 

            if (strlen($last_message) > 15) {

                $last_message = substr($last_message, 0, 15) . "...";

            }

            if ($message_data['sender_id'] != $idd) {

                $hasNewMessages = true; 

            }
            
        } else {
            
            $last_message = "No messages"; 

            $message_time = "N/A";
        }
    }
}

?>