
<?php

    session_start();

    if (!isset($_SESSION['username'])) {

        header("Location: index.php");

        exit;

    }

    include "fun/connect.php";

    $user = $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $user);

    $stmt->execute();

    $result = $stmt->get_result();

    $user_d = $result->fetch_assoc();

    $errors = [];

    $allowed_image_extensions = ['jpg', 'jpeg', 'png', 'gif'];

    $allowed_video_extensions = ['mp4', 'avi', 'mov', 'mkv'];

    $image_file = null;

    $video_file = null;

    $type = '';

    if (isset($_FILES['post_img']) && $_FILES['post_img']['error'] == 0) {

        $image_ext = strtolower(pathinfo($_FILES['post_img']['name'], PATHINFO_EXTENSION));

        $image_size = $_FILES['post_img']['size'];

        if (!in_array($image_ext, $allowed_image_extensions)) {

            $errors[] = "Please upload only images with the extension 'jpg', 'jpeg', 'png', 'gif'.";

        }

        if (empty($errors)) {

            $image_file = 'gprog_' . uniqid() . '.' . $image_ext;

            if (!move_uploaded_file($_FILES['post_img']['tmp_name'], 'uploads/' . $image_file)) {

                $errors[] = "Image upload failed !";

            } else {

                $type = 'image'; 

            }

        }

    }

    if (isset($_FILES['post_vid']) && $_FILES['post_vid']['error'] == 0) {

        $video_ext = strtolower(pathinfo($_FILES['post_vid']['name'], PATHINFO_EXTENSION));

        $video_size = $_FILES['post_vid']['size'];

        if (!in_array($video_ext, $allowed_video_extensions)) {

            $errors[] = "Please upload only video with extension 'mp4', 'avi', 'mov', 'mkv'.";

        }

        if ($video_size > 50 * 1024 * 1024) { 

            $errors[] = "Video size is too large. Must not exceed 50MB.";

        }

        if (empty($errors)) {

            $video_file = 'gprog_' . uniqid() . '.' . $video_ext;

            if (!move_uploaded_file($_FILES['post_vid']['tmp_name'], 'uploads/' . $video_file)) {

                $errors[] = "Video upload failed !";

            } else {

                $type = 'video'; 

            }

        }

    }

    if ($image_file && $video_file) {

        $errors[] = "You can upload only one file (image or video).";

    }

    if (empty($type)) {

        $post_media = NULL; 

    } else {

        if ($type == 'image') {

            $post_media = $image_file;

        } elseif ($type == 'video') {

            $post_media = $video_file;

        }

    }

    if (isset($_POST['post_text']) && !empty($_POST['post_text'])) {

        $post_text = $conn->real_escape_string($_POST['post_text']);

    } else {

        $errors[] = "Write any question or any programming problem you want.";

    }

    if (empty($errors)) {

        $user_id = $user_d['id']; 

        $sql = "INSERT INTO `posts`(`user_id`, `post_text`, `post_media`, `type`, `time`) 
                VALUES (?, ?, ?, ?, NOW())";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("isss", $user_id, $post_text, $post_media, $type);

        if ($stmt->execute()) {

            $post_id = $stmt->insert_id;

            header("Location: view-post.php?id=$post_id");

            exit;

        } else {

            $errors[] = "Error 404" . $stmt->error;

        }

    }

?>

