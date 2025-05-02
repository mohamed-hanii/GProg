
<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

include '../fun/connect.php'; 

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "s", $username);  

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

$user_id = $user['id'];

$relation_sql = "SELECT * FROM relation"; 

$relation_result = mysqli_query($conn, $relation_sql);

$relation_user = mysqli_fetch_all($relation_result, MYSQLI_ASSOC);

$gender_query = "SELECT * FROM gender"; 

$gender_result = mysqli_query($conn, $gender_query);

$genders = mysqli_fetch_all($gender_result, MYSQLI_ASSOC);

$current_gender = $user['gender'];

$current_relation = $user['relation'];

$alert_message = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $new_first_name = mysqli_real_escape_string($conn, $_POST['first_name']);

    $new_last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

    $new_gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $new_relation = mysqli_real_escape_string($conn, $_POST['relation']);

    $new_country = mysqli_real_escape_string($conn, $_POST['country']);

    $new_web = mysqli_real_escape_string($conn, $_POST['web']);

    $new_bio = mysqli_real_escape_string($conn, $_POST['bio']);

    $update = "UPDATE `users` SET `first_name`='$new_first_name', `last_name`='$new_last_name', `gender`='$new_gender', 
                `relation`='$new_relation', `country`='$new_country', `web`='$new_web', `bio`='$new_bio' WHERE `id`='$user_id'";

	if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === 0) {

		$profile_img = $_FILES['profile_img'];
	
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        
		if (in_array($profile_img['type'], $allowed_types)) {

            $profile_img_name = 'gprog' . uniqid('', true) . '.jpg';  
            
			$profile_img_path = '../uploads/' . $profile_img_name;
	
			while (file_exists($profile_img_path)) {

                $profile_img_name = 'gprog' . uniqid('', true) . '.jpg';  
                
                $profile_img_path = '../uploads/' . $profile_img_name;
                
			}
	
			move_uploaded_file($profile_img['tmp_name'], $profile_img_path);
	
			$update = "UPDATE `users` SET `first_name`='$new_first_name', `last_name`='$new_last_name', `gender`='$new_gender', 
						`relation`='$new_relation', `country`='$new_country', `web`='$new_web', `bio`='$new_bio', `profile_img`='$profile_img_name' 
                        WHERE `id`='$user_id'";
                        
		} else {

            $alert_message = "Please upload a valid image file (jpeg, png, gif).";
            
        }
        
	}
	
	if (isset($_FILES['cover_img']) && $_FILES['cover_img']['error'] === 0) {

		$cover_img = $_FILES['cover_img'];
	
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        
		if (in_array($cover_img['type'], $allowed_types)) {

            $cover_img_name = 'gprog' . uniqid('', true) . '.jpg';  
            
			$cover_img_path = '../uploads/' . $cover_img_name;
	
			while (file_exists($cover_img_path)) {

                $cover_img_name = 'gprog' . uniqid('', true) . '.jpg'; 
                
                $cover_img_path = '../uploads/' . $cover_img_name;
                
			}
	
			move_uploaded_file($cover_img['tmp_name'], $cover_img_path);
	
			$update = "UPDATE `users` SET `first_name`='$new_first_name', `last_name`='$new_last_name', `gender`='$new_gender', 
						`relation`='$new_relation', `country`='$new_country', `web`='$new_web', `bio`='$new_bio', `cover_img`='$cover_img_name' 
                        WHERE `id`='$user_id'";
                        
		} else {

            $alert_message = "Please upload a valid image file (jpeg, png, gif).";
            
        }
        
	}
	
    if (empty($alert_message)) {

        $update_go = mysqli_query($conn, $update);

        if ($update_go) {

            header("Refresh: 0; url=" . $_SERVER['PHP_SELF']);

        } else {

            echo "Error updating the record: " . mysqli_error($conn);

        }

    }
    
}

?>