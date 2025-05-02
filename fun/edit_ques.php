
<?php

    session_start();

    if (!isset($_SESSION['username'])) {

        header("Location: index.php");

        exit;

    }

    include 'fun/connect.php'; 

    $username = $_SESSION['username'];

    $post_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    $post_sql = "SELECT * FROM posts WHERE id = '$post_id'";

    $post_result = mysqli_query($conn, $post_sql);

    $post = mysqli_fetch_assoc($post_result);

    if (!$post) {

        echo "Question not found.";

        exit;

    }

    $error_message = "";

    $image_uploaded = false;

    $video_uploaded = false;

    $post_media = $post['post_media']; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $new_post_text = mysqli_real_escape_string($conn, $_POST['post_text']); 

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

            $file = $_FILES['image'];

            $file_type = mime_content_type($file['tmp_name']);
            
            if (strpos($file_type, 'image') === false) {

                $error_message = "Please upload a valid image file.";

            } else {

                $image_uploaded = true;

                $new_image_name = 'gprog_' . uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
                
                $upload_dir = 'uploads/';

                if (move_uploaded_file($file['tmp_name'], $upload_dir . $new_image_name)) {

                    $post_media = $new_image_name; 

                } else {

                    $error_message = "Error uploading image.";

                }

            }

        }

        if (isset($_FILES['video']) && $_FILES['video']['error'] == 0) {

            $file = $_FILES['video'];
            
            $file_type = mime_content_type($file['tmp_name']);
            
            if (strpos($file_type, 'video') === false) {

                $error_message = "Please upload a valid video file.";

            } else {

                $video_uploaded = true;

                $new_video_name = 'gprog_' . uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
                
                $upload_dir = 'uploads/';

                if (move_uploaded_file($file['tmp_name'], $upload_dir . $new_video_name)) {

                    $post_media = $new_video_name; 

                } else {

                    $error_message = "Error uploading video.";

                }

            }

        }

        if ($image_uploaded && $video_uploaded) {

            $error_message = "Please upload either an image or a video, not both.";

        } elseif (!$image_uploaded && !$video_uploaded) {

            $post_media = $post['post_media']; 

        }

        if (empty($error_message)) {

            $update_sql = "UPDATE posts SET post_text = '$new_post_text', post_media = '$post_media' WHERE id = '$post_id'";
        
            if (mysqli_query($conn, $update_sql)) {

                header("Location: profile.php?username=" . $user['username']);

                exit;

            } else {

                echo "Error updating record: " . mysqli_error($conn); 

            }

        }

    }

?>