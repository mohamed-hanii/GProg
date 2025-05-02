
<?php

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$posts_per_page = 25; 

$offset = ($page - 1) * $posts_per_page;

$post_sql = "SELECT * FROM posts ORDER BY TIME DESC LIMIT $posts_per_page OFFSET $offset";

$post_result = mysqli_query($conn, $post_sql);


if (mysqli_num_rows($post_result) > 0) {

    while ($post = mysqli_fetch_assoc($post_result)) {

        $post_time = $post['time'];  

        $media = $post['post_media'];  

        $post_text = $post['post_text'];  

        $date_only = date("d-m-y", strtotime($post_time));  
        
        $post_like_sql = "SELECT COUNT(*) AS like_count FROM post_like WHERE post_id = '" . $post['id'] . "'";
       
        $post_like_result = mysqli_query($conn, $post_like_sql);
        
        $post_like_data = mysqli_fetch_assoc($post_like_result);
        
        $post_like_num = $post_like_data['like_count'];

        $post_view_sql = "SELECT COUNT(*) AS view_count FROM post_view WHERE post_id = '" . $post['id'] . "'";
        
        $post_view_result = mysqli_query($conn, $post_view_sql);
       
        $post_view_data = mysqli_fetch_assoc($post_view_result);
       
        $post_view_num = $post_view_data['view_count'];

        $post_comment_sql = "SELECT COUNT(*) AS comment_count FROM comment WHERE post_id = '" . $post['id'] . "'";
       
        $post_comment_result = mysqli_query($conn, $post_comment_sql);
       
        $post_comment_data = mysqli_fetch_assoc($post_comment_result);
       
        $post_comment_num = $post_comment_data['comment_count'];
        
        $owner_id = $post['user_id']; 
       
        $user_sql = "SELECT * FROM users WHERE id = '$owner_id'";
       
        $user_result = mysqli_query($conn, $user_sql);
       
        $user_data = mysqli_fetch_assoc($user_result);

        $logged_in_user = $_SESSION['username'];  
        
        $post_check_like_sql = "SELECT * FROM post_like WHERE post_id = '" . $post['id'] . "' AND user_id = '" . $_SESSION['user_id'] . "'";
       
        $post_check_like_result = mysqli_query($conn, $post_check_like_sql);
       
        $is_liked = mysqli_num_rows($post_check_like_result) > 0;

        $post_check_saved_sql = "SELECT * FROM saved WHERE post_id = '" . $post['id'] . "' AND user_id = '" . $_SESSION['user_id'] . "'";
      
        $post_check_saved_result = mysqli_query($conn, $post_check_saved_sql);
      
        $is_saved = mysqli_num_rows($post_check_saved_result) > 0;
      
        $_SESSION['shown_posts'][] = $post['id'];

        echo '
        <div class="post">
            <div class="post-top">
                <div class="dp">
                    <a href="profile.php?username=' . urlencode($user_data['username']) . '">  
                        <img src="uploads/' . $user_data["profile_img"] . '" alt="">
                    </a>
                </div>
                <a href="profile.php?username=' . urlencode($user_data['username']) . '">  
                    <div class="post-info">
                        <p class="name">
                            ' . $user_data["first_name"] . ' ' . $user_data["last_name"] . '<br>
                            <span style="font-size: 12px; opacity: .7;">' . $date_only . '</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="post-content">
                ' . nl2br(htmlspecialchars($post_text)) . '
                <br><br>';

        if (!empty($media)) {

            $file_extension = pathinfo($media, PATHINFO_EXTENSION);
            
            if (in_array(strtolower($file_extension), ['mp4', 'avi', 'mov', 'mkv'])) {
               
                echo '<video width="100%" controls><source src="uploads/' . $media . '" type="video/' . $file_extension . '">Your browser does not support the video tag.</video>';
          
            } elseif (in_array(strtolower($file_extension), ['jpg', 'jpeg', 'png', 'gif'])) {
               
                echo '<img src="uploads/' . $media . '" alt="Media">';
           
            }
        
        }

        echo '
        </div>

        <div class="post-bottom">
            <div data-reaction-type="post_react"                   
            data-user-id="'. $post['user_id'] .'"
            data-post-id="'. $post['id'] .'"
            data-action="' . ($is_liked ? 'unlike' : 'like') . '"
            class="action post-reacts love">
                <i id="loo" 
                class="change ' . ($is_liked ? 'fa-solid' : 'fa-regular') . ' fa-heart"></i>  
                <span class="counter">' . $post_like_num . '</span>
            </div>

            <a href="view-post.php?id=' . urlencode($post['id']) . '">
                <div class="action post-reacts">
                    <i class="fa-regular fa-comment"></i><span class="counter">' . $post_comment_num . '</span>
                </div>
            </a>';

        if ($user_data['username'] == $logged_in_user) {

            echo '
            <div class="action post-reacts">
                <a href="edit-post.php?id=' . urlencode($post['id']) . '"> 
                    <i class="fa-solid fa-pen"></i>
                </a><span class="counter"></span>
            </div>';

        } else {

            echo '
            <div data-reaction-type="save_post"                   
            data-user-id="'. $post['user_id'] .'"
            data-post-id="'. $post['id'] .'"
            data-action="' . ($is_saved ? 'unsave' : 'save') . '"
            class="action post-reacts love">
                <i class="change ' . ($is_saved ? 'fa-solid' : 'fa-regular') . ' fa-bookmark"></i>
            </div>';

        }

        echo '
        </div>
    </div>
    ';

    }

} 

?>