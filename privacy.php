<!-- Powerd By Mohamed Hany -->

<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");

    exit;

}

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

    </style>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Privacy | GProg World</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Mohamed Hany">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
   
    <link rel="stylesheet" href="assets/css/style-message.css">

  </head>

  <body>
  
    <div class="container">
          
        <h1 class="headh1 text-center mb-5 mt-5">

          <a href="home.php">
          
            <button class="back">
          
                <i class="fa-solid fa-left-long"></i> Back
                
            </button>
          
          </a>

          <div class="card w-100 mb-3">

            <div class="card-body">

              <h5 class="card-title" style="overflow: hidden;">مساحة اعلانية</h5>

            </div>

          </div>

        </h1>

        <h3 style="overflow: hidden;">Privacy Policy for GProg World</h3>

        <h6 style="overflow: hidden;" class="mt-4">Effective Date: 1/1/2025</h6>

        <p class="mt-4">GProg World is a social networking platform exclusively for programmers, developed and operated by GLVO, a company owned by Engineer Mohamed Hany. This Privacy Policy describes how we collect, use, disclose, and safeguard your information when you visit or use our services. By using GProg World, you agree to the collection and use of information in accordance with this policy.</p>
       
        <h6 style="overflow: hidden;" class="mt-4">1. Information We Collect</h6>
       
        <p class="mt-4">Personal Information: When you register on GProg World, we collect personal details such as your name, email address, username, profile picture, and any other information you provide voluntarily.<br><br>

          Technical Information: We automatically collect certain technical data about your interaction with our website, including your IP address, browser type, device type, operating system, and pages you visit.<br><br>
          
          Content You Share: Any content you post on GProg World, including code snippets, project details, comments, and messages, will be collected and stored in our database.</p>
         
          <h6 style="overflow: hidden;" class="mt-4">2. How We Use Your Information</h6>
         
          <p class="mt-4">The information we collect is used to: <br><br>
            Provide and improve our services: We use your personal and technical data to personalize your experience and ensure our platform runs smoothly. <br><br>
            Communicate with you: We may send updates, newsletters, or promotional materials related to GProg World and other services of GLVO. <br> <br>
            Enhance security: We use your information to prevent fraudulent activities, protect our platform, and ensure a safe community for users. 
          </p>
          
          <h6 style="overflow: hidden;" class="mt-4">3. Sharing Your Information</h6>
          
          <p class="mt-4">We value your privacy and will not sell, rent, or share your personal information with third parties except in the following cases: <br><br>
            Service Providers: We may share your data with trusted third-party vendors who assist in operating our website, such as hosting services, data analytics, and email services. These service providers are contractually obligated to protect your information and use it only as directed by us. <br><br>
            Legal Requirements: We may disclose your information if required by law, to comply with legal obligations, or to protect the rights, property, or safety of GProg World, GLVO, or others. <br><br></p>
        
        <h6 style="overflow: hidden;" class="mt-4">4. Data Security</h6>
        
        <p class="mt-4">We take reasonable precautions to protect your information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
        
        <h6 style="overflow: hidden;" class="mt-4">5. Cookies and Tracking Technologies</h6>
        
        <p class="mt-4">We use cookies and similar tracking technologies to enhance your user experience, analyze trends, and administer the site. Cookies help us remember your preferences and improve site functionality. You can manage your cookie preferences through your browser settings.</p>
        
        <h6 style="overflow: hidden;" class="mt-4">6. Your Data Rights</h6>
        
        <p class="mt-4">As a user of GProg World, you have the following rights concerning your personal data: <br><br>
          Access: You may request access to the personal information we have collected about you.
        <br><br>
        Correction: You may update or correct inaccurate or incomplete information.
        <br><br>
        Deletion: You can request the deletion of your account and personal data.
        <br><br>
        Opt-Out: You can opt out of marketing communications at any time by following the unsubscribe instructions in the emails we send. 
        </p>
       
        <h6 style="overflow: hidden;" class="mt-4">7. Children’s Privacy</h6>
        
        <p class="mt-4">GProg World is not intended for users under the age of 18. We do not knowingly collect personal information from children. If we become aware that we have collected information from a child under 18, we will take steps to delete that information.</p>
        
        <h6 style="overflow: hidden;" class="mt-4">8. Changes to This Privacy Policy</h6>
        
        <p class="mt-4">We reserve the right to modify or update this Privacy Policy at any time. When we make changes, we will update the "Effective Date" at the top of the policy. We encourage you to review this policy periodically for any updates.</p>
       
        <h6 style="overflow: hidden;" class="mt-4">9. Contact Us</h6>
       
        <p class="mt-4">If you have any questions or concerns regarding this Privacy Policy or how we handle your personal information, please contact us at: <br><br>
        
        <span>GLVO</span> . <br><br>
        
        <span>GProg World Support</span> . <br><br>
         
          <i class="fa-solid fa-envelope"></i> Email: mooodyyhanyy@gmail.com <br><br>
         
          <i class="fa-brands fa-instagram"></i> Instagram: @gprog_official <br><br>
          
          <i class="fa-brands fa-youtube"></i> Youtube Channel Name: GProg <br><br>
         
          <i class="fa-brands fa-tiktok"></i> Tiktok: @gprog_official <br><br>
          
          <i class="fa-brands fa-facebook"></i> Facebook: @gprog_official
       
        </p>
        
        <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
    </div>

    <script src="assets/js/aos.js"></script>

    <script src="assets/js/fontawesome.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.min.js"></script>
   
    <script src="assets/js/script.js"></script>

  </body>

</html>

<!-- Powerd By Mohamed Hany -->