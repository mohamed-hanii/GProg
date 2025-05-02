
<?php

if ($chat_result && mysqli_num_rows($chat_result) > 0) {

    while ($chat_data = mysqli_fetch_assoc($chat_result)) {

        $chat_data_reseive_id = $chat_data['user2_id'] == $id ? $chat_data['user1_id'] : $chat_data['user2_id'];
        
        $chat_with_sql = "SELECT * FROM users WHERE id = '$chat_data_reseive_id'";

        $chat_with_result = mysqli_query($conn, $chat_with_sql);

        $chat_with_data = mysqli_fetch_assoc($chat_with_result);
        
        $chat_with_data_username = $chat_with_data['username'];
        
        $message_sql = "SELECT * FROM messages 
        WHERE (sender_id = '$chat_data_reseive_id' AND receiver_id = '$id')
        OR (sender_id = '$id' AND receiver_id = '$chat_data_reseive_id')
        ORDER BY sent_at DESC LIMIT 1"; 

        $message_result = mysqli_query($conn, $message_sql);

        if ($message_result && mysqli_num_rows($message_result) > 0) {

            $message_data = mysqli_fetch_assoc($message_result);

            $last_message = $message_data['message_text']; 

            $message_time = $message_data['sent_at']; 

            if (strlen($last_message) > 80) {

                $last_message = substr($last_message, 0, 80) . "...";

            }

        } else {

            $last_message = "No messages"; 

            $message_time = "N/A"; 

        }

        $profile_img = $chat_with_data['profile_img'] ? $chat_with_data['profile_img'] : "https://via.placeholder.com/150";
        
        $username = $chat_with_data['username'];

        $opacity_class = ($message_data['sender_id'] == $chat_data_reseive_id) ? '' : 'opacity-50';  
        
        $status_message = ($message_data['sender_id'] == $chat_data_reseive_id) ? '<span style="color: green; font-size: 14px; margin-left: 10px;">Not replied yet</span>' : '';

        echo '<div class="col-12 lang-div">

                <a class="d-flex align-items-center" href="inbox.php?username='. $chat_with_data_username .'">

                    <span class="profile ms-2  me-3">

                        <img style="width: 90px !important; height: 90px !important; border-radius: 50% !important; cursor: pointer !important;" src="uploads/' . $profile_img . '" alt="">

                    </span>

                    <p style="display: inline-block;">' . $username . '<br>

                        <span class="message-text ' . $opacity_class . '" style="font-size: 17px; color: #000;">' . $last_message . '</span>

                    </p>

                    ' . $status_message . '

                </a>

            </div>';

    }

  } else {

    echo "<p>No conversations found.</p>";

  }

?>