
<?php

$comments_sql = "SELECT comment.*, COUNT(comment_like.id) AS like_count 
FROM comment 
LEFT JOIN comment_like ON comment.id = comment_like.comment_id
WHERE comment.post_id = '{$post['id']}'
GROUP BY comment.id
ORDER BY like_count DESC"; 

$comments_result = mysqli_query($conn, $comments_sql);

$comments_num = mysqli_num_rows($comments_result);

$a = 0;

if ($comments_num > 0) {

    while ($comments = mysqli_fetch_assoc($comments_result)) {

        $comment_owner_sql = "SELECT * FROM users WHERE id = '$comments[user_id]'";

        $comment_owner_result = mysqli_query($conn, $comment_owner_sql);

        $comment_owner = mysqli_fetch_assoc($comment_owner_result);

        $media = $comments['media'];

        if ($media) {

            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $media)) {

                $media_html = '<div class="text-center">
                   <img src="uploads/' . $media . '" style="height:auto;width:60%;" alt=""/>
                 </div><br>';

            } elseif (preg_match('/\.(mp4|webm)$/i', $media)) {

                $media_html = '<div class="text-center">
                   <video controls style="width:60%; height:auto;">
                       <source src="uploads/' . $media . '" type="video/mp4">
                       Your browser does not support the video tag.
                   </video>
                 </div><br>';

            }

        } else {

            $media_html = '';

        }

        $comment_id = $comments['id'];

        $comment_like_sql = "SELECT * FROM `comment_like` WHERE `comment_id` = '$comment_id' AND `user_id` = '$current_user_id'";
       
        $comment_like_r = mysqli_query($conn, $comment_like_sql);

        if (!$comment_like_r) {

            die("Error executing query: " . mysqli_error($conn));  

        }

        $comment_like_num = mysqli_num_rows($comment_like_r); 

        $has_comment_reacted = $comment_like_num > 0 ? true : false;

        echo '
        <div class="comment ms-1 me-1">
            <div class="fw-bold mt-3 ms-2 d-flex align-items-center">
                <a href="profile.php?username=' . $comment_owner["username"] . '">
                    <div class="prof" style="width:40px; height:40px; border-radius:50%; overflow:hidden;">
                        <img src="uploads/' . $comment_owner['profile_img'] . '" alt="User Image" class="w-100" style="cursor:pointer;">
                    </div>
                </a>
                <span style="cursor: pointer; color:green; font-size:1rem;" class="ms-2">
                    ' . $comment_owner["first_name"] . ' ' . $comment_owner["last_name"] . ':
                </span>
            </div>

            <p class="mt-3 ms-2" style="font-size: 0.9rem; max-width: 100%; word-wrap: break-word;">
                ' . $comments["content"] . '
            </p>

            ' . $media_html . '

            <div data-reaction-type="comment_react" data-user-id="' . $post['user_id'] . '" 
                data-post-id="' . $post['id'] . '" data-comment-id="' . $comment_id . '" 
                data-action="' . ($has_comment_reacted ? 'unlike-comment' : 'like-comment') . '" 
                class="action text-center mb-3 post-reacts love">
                <i class="change ' . ($has_comment_reacted ? 'fa-solid fa-heart loveee' : 'fa-regular fa-heart loveee') . '"></i>
                <span class="counter" style="font-size: 13px;">' . $comments['like_count'] . '</span>
            </div>';

            if ($comment_owner['username'] === $_SESSION['username']) {
                echo '
                <form action="fun/delete_comment.php?id=' . $comment_id . '" method="POST">
                    <div class="text-center mb-3 post-reacts">
                        <button type="submit" class="btn p-0" style="background-color: transparent;">
                            <i class="fa-solid fa-trash" style="color: red; font-size: 17px; cursor: pointer;"></i>
                        </button>
                    </div>
                </form>';
            }

        echo '</div><br>';

    }

} else {

    echo '</div>';
    
}

?>