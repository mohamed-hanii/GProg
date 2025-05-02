<!-- Powerd by Mohamed Hany -->

<?php

    include "fun/signup_code.php";

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

                    scrollbar-color: var(--sb-thumb-color)
                                    var(--sb-track-color);

                }

            }

        </style>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GProg World | Sign Up</title>

        <link rel="stylesheet" href="assets/css/aos.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/style-sign.css">

    </head>

    <body>

        <div class="container">
    
            <br><br><br><br>
    
            <p class="text-center login-txt mb-4">Create an account on <span>GProg</span> World.</p>
    
            <?php if (!empty($errors)): ?>

                <div class="alert alert-danger">

                    <?php foreach ($errors as $error): ?>

                        <p><?php echo $error; ?></p>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row align-items-center justify-content-center">

                    <input class="col-12 col-md-5 texts" type="text" name="first_name" required placeholder="First Name">
                    
                    <input class="col-12 col-md-5 texts" type="text" name="last_name" required placeholder="Last Name">
                    
                    <input class="col-12 col-md-5 texts" type="text" name="username" required placeholder="UserName">
                    
                    <input class="col-12 col-md-5 texts" type="password" name="password" required placeholder="Password">
                    
                    <input class="col-12 col-md-5 texts" type="text" name="security_ask" required placeholder="Security Question When You forget Password">
                    
                    <input class="col-12 col-md-5 texts" type="text" name="security_ans" required placeholder="Security Answer">
                   
                    <input class="col-12 col-md-5 texts" type="email" name="email" required placeholder="Email">
                   
                    <div class="col-12 col-md-6 input-group mb-3">
                       
                        <select name="interest" required style="border-radius: 0;" class="form-select texts">
                            
                            <option selected>I am interested in</option>
                            
                            <option value="1">Web Development</option>
                            
                            <option value="2">Mobile Apps Development</option>
                           
                            <option value="3">Game Development</option>
                           
                            <option value="4">AI Development</option>
                           
                            <option value="5">Operating System Development</option>
                          
                            <option value="6">Desktop Apps Development</option>
                           
                            <option value="7">VR Development</option>
                           
                            <option value="8">Embedded Development</option>
                           
                            <option value="9">Security Development</option>
                           
                            <option value="10">Robotics Development</option>
                           
                            <option value="11">Other</option>

                        </select>

                        <select name="gender" required style="border-radius: 0;" class="form-select texts col-12 col-md-6">
                           
                            <option selected>Gender</option>
                            
                            <option value="1">Male</option>
                           
                            <option value="2">Female</option>
                       
                        </select>

                    
                    </div>
                    
                    <div class="col-12 col-md-6 input-group mb-3">
                        
                        <select name="role" required style="border-radius: 0;" class="form-select texts">
                           
                            <option selected>I'm here as</option>
                           
                            <option value="1">To learn</option>
                           
                            <option value="2">Teacher</option>
                           
                            <option value="3">I have jobs I want to view</option>
                           
                            <option value="4">Student</option>
                           
                            <option value="5">To Explore</option>
                           
                            <option value="6">For Kids</option>
                           
                            <option value="7">Other</option>
                       
                        </select>
                       
                        <select name="birth_year" id="birth_year" required style="border-radius: 0;" class="form-select texts">
                           
                            <option selected disabled>Year of birth</option>
                        
                        </select>
                    
                    </div>
                    
                    <div class="col-12 mb-3">
                       
                        <label for="formFile" class="form-label">Profile Image</label>
                       
                        <input class="form-control" required type="file" name="profile_image" id="formFile">
                   
                    </div>
                    
                    <div class="col-12 mb-3">
                        
                        <label for="formFile" class="form-label">Cover Image</label>
                       
                        <input class="form-control" required type="file" name="cover_image" id="formFile">
                   
                    </div>
                   
                    <div class="col-12 mt-3 mb-5" class="form-check">
                      
                        <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                       
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to display my data to others, except for login data
                        </label>
                   
                    </div>
                   
                    <button type="submit" class="col-12 col-md-6 btn btn-success btn-lg">Sign Up</button>
               
                </div>
            
            </form>
   
             <br>  <br>  <br>

        </div>

        <script>

            const selectElement = document.getElementById('birth_year');

            const startYear = 1950;

            const endYear = 2024;

            for (let year = startYear; year <= endYear; year++) {

                const option = document.createElement('option');

                option.value = year;

                option.textContent = year;

                selectElement.appendChild(option);

            }

        </script>

        <script src="assets/js/aos.js"></script>

        <script src="assets/js/fontawesome.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        
        <script src="assets/js/jquery.min.js"></script>
       
        <script src="assets/js/script.js"></script>

 </body>

</html>

<!-- Powerd by Mohamed Hany -->