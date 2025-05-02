
<?php

session_start();

include "fun/connect.php"; 

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['user'];

    $password = $_POST['pass'];

    if (!empty($username) && !empty($password)) {

        $query = "SELECT * FROM users WHERE username = ?";

        $stmt = $conn->prepare($query);

        $stmt->bind_param("s", $username); 

        $stmt->execute();

        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {

            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['pass'])) {

                $_SESSION['username'] = $username;

                $_SESSION['user_id'] = $user['id']; 

                $session_id = session_id();

                $user_id = $user['id'];

                $check_session_sql = "SELECT * FROM sessions WHERE user_id = ?";

                $check_stmt = $conn->prepare($check_session_sql);

                $check_stmt->bind_param("i", $user_id);

                $check_stmt->execute();

                $check_result = $check_stmt->get_result();

                if ($check_result->num_rows > 0) {

                    $update_session_sql = "UPDATE sessions SET session_id = ? WHERE user_id = ?";

                    $update_stmt = $conn->prepare($update_session_sql);

                    $update_stmt->bind_param("si", $session_id, $user_id);

                    $update_stmt->execute();

                } else {

                    $insert_session_sql = "INSERT INTO sessions (user_id, session_id) VALUES (?, ?)";
                   
                    $insert_stmt = $conn->prepare($insert_session_sql);
                    
                    $insert_stmt->bind_param("is", $user_id, $session_id);
                    
                    $insert_stmt->execute();

                }

                header("Location: home.php");

                exit;

            } else {

                $error_message = "Incorrect password.";

            }

        } else {

            $error_message = "User not found.";

        }

    } else {

        $error_message = "Please fill in both fields.";

    }
    
}