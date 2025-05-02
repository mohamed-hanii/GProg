
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
  
}

include "fun/connect.php";

$user = $_SESSION['username'];

$sql = "SELECT profile_img, id FROM users WHERE username = '$user'";

$result = $conn->query($sql);

$user_data = $result->fetch_assoc();

$id = $user_data['id']; 

$chat_sql = "SELECT chat.*, MAX(messages.sent_at) AS last_message_time
             FROM chat
             LEFT JOIN messages ON (messages.sender_id = chat.user1_id AND messages.receiver_id = chat.user2_id)
                                OR (messages.sender_id = chat.user2_id AND messages.receiver_id = chat.user1_id)
             WHERE chat.user1_id = '$id' OR chat.user2_id = '$id'
             GROUP BY chat.id
             ORDER BY last_message_time DESC";

$chat_result = mysqli_query($conn, $chat_sql);

?>