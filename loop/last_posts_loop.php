
<?php

if (mysqli_num_rows($latest_result) > 0) {

    while ($data = mysqli_fetch_assoc($latest_result)) {

        $post_owner_i = $data['user_id'];

        $post_owner_s = "SELECT * FROM users WHERE id = '$post_owner_i' ";
        
        $post_owner_r = mysqli_query($conn, $post_owner_s);
        
        $post_o = mysqli_fetch_assoc($post_owner_r);
        
        $profile_img = $post_o['profile_img'];
        
        $username = $post_o['username'];  
        
        $post_i = $data['id'];
        
        $post_text = $data['post_text'];
        
        $post_excerpt = strlen($post_text) > 100 ? substr($post_text, 0, 80) . "..." : $post_text; 
       
        echo "

        <a class='friend' href='view-post.php?id={$post_i}'>
        
            <p style='width: 100% !important;' class='post-excerpt'>{$post_excerpt}</p>  
        
        </a>";

    }
} else {

    echo "<p>No Questions available.</p>";

}

?>