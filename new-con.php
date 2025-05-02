<!-- Powerd By Mohamed Hany -->

<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

include "fun/connect.php";

$user = $_SESSION['username'];

$sql = "SELECT profile_img, id FROM users WHERE username = '$user'";

$result = $conn->query($sql);

$user_data = $result->fetch_assoc();

$id = $user_data['id'];

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <style>

        body {

          --sb-track-color: #232E33;

          --sb-thumb-color: #6BAF8D;

          --sb-size: 6px;

        }

        body::-webkit-scrollbar {

          width: var(--sb-size)

        }

        body::-webkit-scrollbar-track {

          background: var(--sb-track-color);

          border-radius: 1px;

        }

        body::-webkit-scrollbar-thumb {

          background: var(--sb-thumb-color);

          border-radius: 1px;

        }

        @supports not selector(::-webkit-scrollbar) {

            body {

              scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);

            }

        }

        .back {

          padding: 13px;

          margin-bottom: 30px;

          background-color: transparent;

          border: none;

          font-size: 40px;

          font-family: monospace;

          cursor: pointer;
          
          opacity: .5;

        }

        .container {

          overflow: hidden;

        }

        .searr {

          border: none;

          border-bottom: 2px solid green;

          outline: none !important;
          
          font-size: 18px;

        }

        .subbb {

          background-color: transparent;

          border: none;

          border-bottom: 2px solid green;

          border-left: 2px solid green;

          outline: none !important;

          font-size: 30px;

        }

        .subbb:hover {

          border: 2px solid green;

        }

        a {

          text-decoration: none;

          color: inherit;

          vertical-align: middle;

        }

        a img {

          text-decoration: none !important;

          color: rgb(53, 53, 53);

          margin: 0;

          padding: 0;

          vertical-align: middle;

        }

        a:active {

          text-decoration: none !important;

          color: rgb(53, 53, 53);

        }

        a:visited {

          text-decoration: none !important;

          color: rgb(53, 53, 53);

        }

        a:focus {

          text-decoration: none !important;

          color: rgb(53, 53, 53);

        }

    </style>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="assets/css/style-message.css">

  </head>

  <body>

    <div class="container">

      <h1 class="text-center mb-5 mt-5">
    
          <a href="message.php">

            <button class="back"><i class="fa-solid fa-left-long"></i> Back</button>
          
          </a>
  
      </h1>

      <h3 class="text-center" style="overflow:hidden;">Search for This User:</h3><br><br>

      <div class="container text-center">

        <form method="POST" action="">

            <input class="searr" style="width: 90%;margin-top:30px;margin-bottom:20px" placeholder="Search Here.." type="search" name="search" id="search" value="<?php echo isset($search_query) ? $search_query : ''; ?>"><br><br>
    
        </form>

      </div>

  <br>  <br>

      <div id="search-results">

      </div>

</div>

  <script src="assets/js/aos.js"></script>

  <script src="assets/js/fontawesome.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <script src="assets/js/jquery.min.js"></script>
  
  <script src="assets/js/script.js"></script>

  <script>

    document.getElementById('search').addEventListener('input', function() {

        var searchQuery = this.value;

        if (searchQuery.length < 1) {

            document.getElementById('search-results').innerHTML = '';

            return;

        }

        var xhr = new XMLHttpRequest();

        xhr.open('GET', 'searchh.php?search=' + encodeURIComponent(searchQuery), true);

        xhr.onreadystatechange = function() {

            if (xhr.readyState === 4 && xhr.status === 200) {

                document.getElementById('search-results').innerHTML = xhr.responseText;

            }

        };

        xhr.send();

    });

  </script>

 </body>

</html>

<!-- Powerd By Mohamed Hany -->
