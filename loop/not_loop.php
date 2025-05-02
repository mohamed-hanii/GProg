
<?php

if ($not_result && mysqli_num_rows($not_result) > 0) {

    while ($not_data = mysqli_fetch_assoc($not_result)) {

        $not_data_sender_id = $not_data['user_id'];

        $receive_user = $not_data['reseive_user']; 

        $not_with_sql = "SELECT * FROM users WHERE id = '$not_data_sender_id'";

        $not_with_result = mysqli_query($conn, $not_with_sql);

        $not_with_data = mysqli_fetch_assoc($not_with_result);

        $not_with_data_username = $not_with_data['username'];

        if ($not_with_data_username == $receive_user) {

            continue; 

        }

        $content = $not_data['content'];

        preg_match('/\d+/', $content, $matches); 

        $number = isset($matches[0]) ? $matches[0] : null; 

        $content = preg_replace('/\d+/', '', $content); 

        $not = substr($content, 0, 80) . "...";

        echo '<div class="d-flex align-items-center justify-content-center">
        <div class="col-12 lang-div">
        <a class="d-flex align-items-center" href="view-post.php?id='. $number .'">
            <span class="profile ms-2 me-3">
                <!-- الصورة تختفي على الشاشات الصغيرة وتظهر فقط على الشاشات المتوسطة وما فوق -->
                <img class="d-none d-md-inline" style="width: 90px; height: 90px; border-radius: 50%; cursor: pointer;" src="uploads/' . $not_with_data['profile_img'] . '" alt="">
            </span>
            <p style="display: inline-block; font-size: 1rem;">
                <!-- النص بالحجم المناسب مع تصغير الشاشة -->
                ' . $not_with_data_username . '<br>
                <span class="message-text" style="font-size: 17px; color: #000;">
                    ' . $not . '
                </span>
            </p>
        </a>
    </div></div>';

    }

} else {

    echo "<p>No Notifications Yet.</p>";

}

?>