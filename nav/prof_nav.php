<nav class="navvv">

<div class="nav-left">

    <a href="home.php">  <div style="cursor: pointer;" alt="GProg World" class="logo_img"></div>
    
    </a>

<div class="lolo">GProg</div>

</div>

<div class="nav-middle">

<a style="cursor: pointer;" id="phonee" class="navv menu">

    <i class="fa-solid fa-bars"></i>   

</a>
<a href="home.php" class="navv">

    <i class="fa-solid fa-house"></i>

</a>

<a href="message.php" class="navv">

    <svg class="svg-inline--fa fa-message no-js-change" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
    
    <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64L0 352c0 35.3 28.7 64 64 64l96 0 0 80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416 448 416c35.3 0 64-28.7 64-64l0-288c0-35.3-28.7-64-64-64L64 0z"></path>
    
        
        <circle class="unreplied-badge" cx="440" cy="50" r="50" stroke="#7a0000" stroke-width="130" style="background-color:green !important;" fill="#7a0000"></circle>
    
    
    </svg>

</a>



<!-- Powerd By Mohamed Hany -->



<a href="not.php" style="cursor: pointer;" class="navv">

   <svg class="svg-inline--fa fa-bell" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
   
   <path fill="currentColor" d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z">
    
   </path>


<circle class="unreplied-badge" cx="360" cy="50" r="50" stroke="#7a0000" stroke-width="130" style="background-color:green !important;" fill="#7a0000"></circle>

  
  </svg>

</a>

<a href="search.php" style="cursor: pointer;"  class="navv">

<i class="fa-solid fa-magnifying-glass"></i>

</a>

<a style="cursor: pointer;" id="comp" class="navv ppp">

  <i class="fa-solid fa-ellipsis"></i>

</a>

<a class="profile" href="profile.php?username=<?php echo urlencode($user_nav['username']); ?>">

    <div style="width:40px !important;height:40px !important;border-radius: 50% !important;overflow:hidden !important;" class="prof profile">

        <img style="width:100% !important;cursor:pointer !important;" src="<?php echo 'uploads/' . urlencode($user_nav['profile_img']); ?>" alt="">

    </div>
</a>

</div>

</nav>

<div id="hide-content" style="display: none; text-align: center;">
      <button id="back">X</button>  <!-- زر الرجوع -->
      <p id="title"><i class="fa-solid fa-circle-plus"></i> Create</p>
      <br><br>
      <div id="content">
          <ul id="ul-hide">
              <li><i class="fa-solid fa-pen"></i> Post</li>
              <li><i class="fa-solid fa-question"></i> Ask</li>
          </ul>
      </div>
  </div>
  

<script>

document.addEventListener('DOMContentLoaded', function () {
    
    function hideAllAndShowHideContent() {

        const bodyChildren = document.body.children;

        for (let i = 0; i < bodyChildren.length; i++) {

            if (bodyChildren[i].id !== 'hide-content') {

                bodyChildren[i].style.display = 'none';

            }

        }

        document.getElementById('hide-content').style.display = 'block';

    }

    function showAllBodyChildren() {

        const bodyChildren = document.body.children;

        for (let i = 0; i < bodyChildren.length; i++) {

            if (bodyChildren[i].id !== 'hide-content') {

                bodyChildren[i].style.display = ''; 

            }

        }

    }

    document.getElementById('comp').addEventListener('click', function () {
        console.log("تم الضغط على النقاط");

        hideAllAndShowHideContent();

        document.getElementById('title').innerHTML = '<i class="fa-solid fa-circle-plus"></i> Options';
        
        document.getElementById('content').innerHTML = `

            <a href="edit-profile/index.php"> 

                <p class="iteem"><i class="fa-solid fa-gears"></i> Settings</p>

            </a>
            
            <a href="privacy.php"> 
            
            <p class="iteem"><i class="fa-solid fa-shield-halved"></i> Privacy</p>
            
            </a>
            
            <a href="#">  
            
            <p class="iteem"><i class="fa-solid fa-backward"></i> Back To GProg</p>
            
            </a>
            
            <a href="edit-profile/logout.php">   
            
            <p class="iteem"><i class="fa-solid fa-right-from-bracket"></i> Log Out</p>
            
            </a>

        `;

    });

    document.getElementById('back').addEventListener('click', function () {

        document.getElementById('hide-content').style.display = 'none';

        showAllBodyChildren();

    });

    document.getElementById('phonee').addEventListener('click', function () {
        console.log("تم الضغط على النقاط");

        hideAllAndShowHideContent();

        document.getElementById('title').innerHTML = '<i style="margin-top:30px !important;" class="fa-solid fa-bars"></i> Menu';
        
        document.getElementById('content').innerHTML = `

            <a href="profile.php?username=<?php echo urlencode($user_nav['username']); ?>">

                <p class="iteem"><i class="fa-solid fa-user"></i> My Profile</p>

            </a>

            <a href="not.php">

                <p class="iteem"><i class="fa-solid fa-bell"></i> Notifications</p>
            
            </a>

            <a href="search.php">
            
                <p class="iteem"><i class="fa-solid fa-magnifying-glass"></i> Search</p>
            
            </a>
    
            <a href="edit-profile/index.php">
            
                <p class="iteem"><i class="fa-solid fa-gears"></i> Settings</p>
            
            </a>
            
            <a href="create-ask.php">
            
                <p class="iteem"><i class="fa-solid fa-pen"></i> Share Question & Problem</p>
            
            </a>

            <a href="popular-posts.php">
            
                <p class="iteem"><i class="fa-solid fa-fire"></i> Popular Question & Problem</p>
            
            </a>
    
            <a href="most-recent.php">
            
                <p class="iteem"><i class="fa-solid fa-clock"></i> Latest Questions & Problems</p>
            
            </a>
    
            <a href="message.php">
            
                <p class="iteem"><i class="fa-solid fa-comments"></i> Messages</p>
            
            </a>
        
            <a href="saved.php">
            
                <p class="iteem"><i class="fa-solid fa-bookmark"></i> Saved</p>
            
            </a>

            <a href="privacy.php">
            
                <p class="iteem"><i class="fa-solid fa-shield-halved"></i> Privacy</p>
            
            </a>

            <a href="#">
            
                <p class="iteem"><i class="fa-solid fa-backward"></i> Back To GProg</p>
            
            </a>
    
            <a href="edit-profile/logout.php">
            
                <p class="iteem"><i class="fa-solid fa-right-from-bracket"></i> Log out</p>
            
            </a>
        
        `;

    });

    document.getElementById('back').addEventListener('click', function () {

        document.getElementById('hide-content').style.display = 'none';

        showAllBodyChildren();

    });

    
});

</script>