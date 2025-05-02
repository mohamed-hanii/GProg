
<?php

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

$search_term = isset($_GET['search']) ? $_GET['search'] : '';

$search_type = isset($_GET['type']) ? $_GET['type'] : '';


if ($search_type == 'user') {
   
    $sql = "SELECT * FROM users WHERE username LIKE '%$search_term%' OR first_name LIKE '%$search_term%' OR last_name LIKE '%$search_term%'";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($user = mysqli_fetch_assoc($result)) {

            $profile_img = $user['profile_img'];

            $username = $user['username'];

            echo '
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <img style="width: 60px; height: 60px; border-radius: 50%; margin-right: 10px;" src="uploads/' . $profile_img . '" alt="">
                        <a href="profile.php?username=' . $username . '">' . $username . '</a>
                    </div>
                </div>
            </div>';

        }

    } else {

        echo "No users found.";

    }

} else {

    echo "Please select a valid search type.";

}

?>