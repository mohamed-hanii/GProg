
<?php

session_start();

include "fun/connect.php"; 

$errors = []; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $security_ask = $_POST['security_ask'];

    $security_ans = $_POST['security_ans'];

    $email = $_POST['email'];
    
    $interest = $_POST['interest'];

    $gender = $_POST['gender'];

    $role = $_POST['role'];

    $birth_year = $_POST['birth_year'];

    $relation = 8;
    
   
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $check_user = "SELECT * FROM users WHERE username = '$username'";

    $result = $conn->query($check_user);

    if ($result->num_rows > 0) {

        $errors[] = "Username already exists!";

    }

    if (empty($_FILES['profile_image']['name']) || empty($_FILES['cover_image']['name'])) {

        $errors[] = "You must upload both profile and cover images!";

    }

    $profile_image_type = mime_content_type($_FILES['profile_image']['tmp_name']);

    $cover_image_type = mime_content_type($_FILES['cover_image']['tmp_name']);

    if (substr($profile_image_type, 0, 5) !== 'image' || substr($cover_image_type, 0, 5) !== 'image') {
        
        $errors[] = "Please upload valid image files only (JPEG, PNG, GIF, etc.)";

    }

    if (empty($errors)) {
        
        $new_profile_image_name = 'gprog' . uniqid() . uniqid() . '.' . pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);

        $new_cover_image_name = 'gprog' . uniqid() . uniqid() . '.' . pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION);
    
        $profile_image_path = "uploads/" . $new_profile_image_name;
        
        $cover_image_path = "uploads/" . $new_cover_image_name;
    
        move_uploaded_file($_FILES['profile_image']['tmp_name'], $profile_image_path);
        
        move_uploaded_file($_FILES['cover_image']['tmp_name'], $cover_image_path);

        $insert_query = "INSERT INTO users (first_name, last_name, username, pass, email, security_ask, security_ans, field, gender, here_as, year_birth, profile_img, cover_img,relation) 
                         VALUES ('$first_name', '$last_name', '$username', '$hashed_password', '$email', '$security_ask', '$security_ans', '$interest', '$gender', '$role', '$birth_year', '$new_profile_image_name', '$new_cover_image_name','$relation')";

        if ($conn->query($insert_query) === TRUE) {

            $user_id = $conn->insert_id;  

            $_SESSION['user_id'] = $user_id;  
        
            $_SESSION['username'] = $username;
         
            $_SESSION['first_name'] = $first_name; 
         
 
         
            header("Location: welcome.php");  
          
            exit;
        
        } else {
            
            echo "<h5>Error: " . $conn->error . "</h5>";

        }

    }

}

?>