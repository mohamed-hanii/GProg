
<?php

include "fun/connect.php";

if (isset($_GET['search'])) {

    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    
    $search_sql = "SELECT * FROM users WHERE username LIKE '%$search_query%' OR first_name LIKE '%$search_query%' OR last_name LIKE '%$search_query%' OR email LIKE '%$search_query%'";
    
    $search_result = mysqli_query($conn, $search_sql);
    
    if (mysqli_num_rows($search_result) > 0) {

        while ($search_data = mysqli_fetch_assoc($search_result)) {

            $username = $search_data['username'];

            $profile_img = $search_data['profile_img'];

            echo '<div class="col-12 mb-3">

                    <div class="card">
                    
                        <div class="card-body d-flex align-items-center">
                            <img style="width: 60px; height: 60px; border-radius: 50%; margin-right: 10px;" src="uploads/' . $profile_img . '" alt="">

                            <a href="inbox.php?username=' . $username . '">' . $username . '</a>

                        </div>

                    </div>

                </div>';

        }

    } else {

        echo "<p>No users found.</p>";

    }

}

?>
