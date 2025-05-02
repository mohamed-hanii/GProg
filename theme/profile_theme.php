
<style>

      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

      *{
          margin:0;
          padding:0;
          box-sizing: border-box;
          font-family: sans-serif;
      }
      html, body {
          margin: 0;
          padding: 0;
          width: 100%;
      }
      html, body {
          width: 100%;
      }
      * {
          box-sizing: border-box;
      }
      
      html, body {
          overflow-x: hidden;  
      }
      
      a{
    text-decoration: none; 
    color: inherit; 
    vertical-align: middle; 
}
a img{
    text-decoration: none !important;
    color: rgb(53, 53, 53);
    margin: 0;
    padding: 0;
    vertical-align: middle; 
}
a:active{
    text-decoration: none !important;
    
    color: rgb(53, 53, 53);
}
a:visited{
    text-decoration: none !important;
    color: rgb(53, 53, 53);
}
a:focus{
    text-decoration: none !important;
    color: rgb(53, 53, 53);
}
      body {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        min-height: 100vh;
        font-family: "Poppins", sans-serif;
      }
      
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
      }
      
      a {
        text-decoration: none;
      }
      a{
    text-decoration: none; 
    color: inherit; 
    vertical-align: middle; 
}
      .header__wrapper header {
        width: 100% !important;
        background: url("<?= 'uploads/' . $user['cover_img'] ?>") no-repeat 50% 20% / cover !important;
        min-height: calc(100px + 15vw) !important;
      }
      
      .header__wrapper .cols__container .left__col {
        padding: 25px 20px;
        max-width: 350px;
        position: relative;
        margin: 0 auto;
      }
      
      .header__wrapper .cols__container .left__col .img__container {
        position: absolute;
        top: -60px;
        left: 50%;
        transform: translatex(-50%);
      }
      .header__wrapper .cols__container .left__col .img__container img {
        width: 120px;
        height: 120px;
        object-fit: contain !important;
        border-radius: 50%;
        display: block;
        box-shadow: 1px 3px 12px rgba(0, 0, 0, 0.18);
      }
      .header__wrapper .cols__container .left__col .img__container span {
        position: absolute;
        background: #2afa6a;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        bottom: 3px;
        right: 11px;
        border: 2px solid #fff;
      }
      .header__wrapper .cols__container .left__col h2 {
        margin-top: 60px;
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 5px;
      }
      .header__wrapper .cols__container .left__col p {
        font-size: 0.9rem;
        color: #818181;
        text-align: left !important;
        margin: 0;
      }
      .dattt{
        .header__wrapper .cols__container .left__col p {
        font-size: 0.9rem;
        color: #818181;
        text-align: center !important;
        margin: 0;
      }
      }
      .header__wrapper .cols__container .left__col .about {
        position: relative;
        justify-content: space-around !important;
        text-align: left !important;
        margin: 35px 0;
      }
      .header__wrapper .cols__container .left__col .about li {
        display: flex;
        text-align: left !important;

        flex-direction: column;
        color: #818181;
        font-size: 0.9rem;
      }
      .header__wrapper .cols__container .left__col .about li span {
        color: #1d1d1d;
        font-weight: 600;
      }
      .header__wrapper .cols__container .left__col .about:after {
        position: absolute;
        content: "";
        bottom: -16px;
        display: block;
        background: #cccccc;
        height: 1px;
        width: 100%;
      }
      .header__wrapper .cols__container .content p {
        font-size: 1rem;
        color: #1d1d1d;
        line-height: 1.8em;
      }
      .header__wrapper .cols__container .content ul {
        gap: 30px;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
      }
      .header__wrapper .cols__container .content ul li {
        display: flex;
      }
      .header__wrapper .cols__container .content ul i {
        font-size: 1.3rem;
      }
      .header__wrapper .cols__container .right__col nav {
        display: flex;
        align-items: center;
        padding: 30px 0;
        justify-content: space-between;
        flex-direction: column;
      }
      .header__wrapper .cols__container .right__col nav ul {
        display: flex;
        gap: 20px;
        flex-direction: column;
      }
      .header__wrapper .cols__container .right__col nav ul li a {
        text-transform: uppercase;
        color: #818181;
      }
      .header__wrapper .cols__container .right__col nav ul li:nth-child(1) a {
        color: #1d1d1d;
        font-weight: 600;
      }
      .header__wrapper .cols__container .right__col nav button {
        background: #0091ff !important;
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 20px;
      }
      .header__wrapper .cols__container .right__col nav button:hover {
        opacity: 0.8;
      }
      
      @media (min-width: 1083px) {
        .header__wrapper .cols__container {
          max-width: 1200px;
          margin: 0 auto;
          width: 90%;
          justify-content: space-between;
          display: grid;
          grid-template-columns: 1fr 2fr;
          gap: 50px;
        }
        .header__wrapper .cols__container .left__col {
          padding: 25px 0px;
        }
        .header__wrapper .cols__container .right__col nav ul {
          flex-direction: row;
          gap: 30px;
        }
      }
      
      @media (min-width: 1090px) {
        .header__wrapper .cols__container .left__col {
          margin: 0;
          margin-right: auto;
        }
        .header__wrapper .cols__container .right__col nav {
          flex-direction: row;
        }
        .header__wrapper .cols__container .right__col nav button {
          margin-top: 0;
        }
      }
      
      .post {
        width: 100%;
        margin-left: 70px !important;
        max-width: 550px;
        border: none;
        background: rgba(255, 255, 255, 0.9); 
        border-radius: 15px; 
        display: grid;
        box-sizing: border-box;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
        transition: transform 0.3s ease;
      }
      
      .post:hover {
        transform: scale(1.02); 
      }
      
      .post .post-top {
        display: flex;
        align-items: flex-start; 
        justify-content: flex-start;
        flex-wrap: wrap; 
      }
      
      .post .post-top .dp {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        overflow: hidden;
      }
      
      .post .post-top .dp > img {
        width: 100%;
        cursor: pointer;
      }
      
      .post .post-top .post-info {
        margin-left: 10px;
        font-weight: bold;
        flex-grow: 1;
      }
      
      .post .post-top .post-info .name {
        cursor: pointer;
        margin-top: 10px;
        font-size: 16px;
      }
      
      .post .post-top i {
        cursor: pointer;
      }
      
      .post .post-content {
        font-size: 16px;
      }
      
      .post .post-content > img {
        width: 100%;
        margin: 10px 0;
        border-radius: 8px;
      }
      .post .post-bottom {
        display: flex;
        justify-content: space-between;
        padding: 10px 0 0;
        border-top: 1px solid #eee;
        gap: 10px;
        flex-wrap: wrap; 
      }
      
      .post .post-bottom .action {
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 8px;
        border-radius: 8px;
        flex-grow: 1; 
        justify-content: center;
      }
      
      .post .post-bottom .action:hover {
        background-color: rgba(0, 145, 255, 0.1); 
      }
      
      .post .post-bottom .action i {
        margin-right: 5px;
      }
      
      .post .post-bottom .action span {
        font-size: 14px;
        color: #555;
      }
      
      .post .post-bottom .action .counter {
        font-size: 12px;
        color: #666;
      }
      
      @media (max-width: 1083px) {
        .post {
          width: 100%; 
          max-width: 100%; 
          margin: auto !important;
          margin-top: 18px !important;
        }
      
        .post .post-top {
          flex-direction:row;
        }
      
        .post .post-top .dp {
          width: 60px;
          height: 60px;
          margin-bottom: 10px; 
        }
      
        .post .post-top .post-info {
          text-align: start;
        }
      
        .post .post-top .post-info .name {
          font-size: 16px;
          margin-top: 8px !important;
        }
      
        .post .post-top .post-info .time {
          font-size: 12px;
          opacity: .7;
        }
      
        .post .post-bottom {
          flex-direction: row; 
          justify-content: space-between !important; 
        }
      
      
      
        .post .post-content {
          font-size: 14px; 
        }
      
        .post .post-content > img {
          width: 90%;  
          margin: 5px 0;
        }
      
        .post .post-bottom .action .counter {
          font-size: 11px;
        }
      }
      
      @media (min-width: 1084px) {
        .post {
          width: 100%;
          max-width: 550px; 
        }
      
        .post .post-top {
          flex-direction: row; 
          align-items: center;
          justify-content: flex-start;
        }
      
        .post .post-top .dp {
          width: 50px;
          height: 50px;
        }
      
        .post .post-content {
          font-size: 16px;
        }
      
        .post .post-bottom .action {
          flex-grow: 0;
        }
      }
      .left-items{
        font-family: cursive;
        color: #333;
        font-size: 17px;
        margin-top: 10px;
      }
      .left-items:hover{
        color: green;
      }
      .left-user{
        font-size: 21px;
      }
      .left-user:hover{
        color: indigo;
      }
      .post-reacts{
        font-size: 20px !important;
        margin-top: 5px !important;
        color: green !important;
      
        margin-left: 0 !important;
      }
      .post-reacts:hover{
        color: rgb(0, 2, 128);
      }
      .navvv{
          height:70px;
          width:100%;
          padding: 0 2rem;
          display:flex;
          justify-content: space-between;
          background-color: #fff;
          box-shadow: 0px 1px 3px #ccc;
          position:sticky;
          top:0;
          z-index:99;
      }
      
      .navvv .nav-left, nav .nav-right{
          display:flex;
          align-items: center;
      }
      
      .navvv .nav-left > img{
          width:40px;
      }
      
      .navvv .nav-left > input{
          height:40px;
          padding:5px 10px;
          border:none;
          border-radius: 25px;
          outline:none;
          background-color: #eee;
          margin-left: 10px;
      }
      
      .navvv .nav-middle{
          display:flex;
          align-items:flex-end;
          padding-bottom: 5px;
          font-size: 25px;
      }
      
      .navvv .nav-middle a{
          text-decoration: none;
          color:#333;
          padding:10px;
          margin:0px 10px;
      }
      
      .navvv .nav-middle a:hover{
          color:green;
      }
      
      .navvv .nav-middle a.active::after{
          content:'';
          width:100%;
          height:3px;
          position:absolute;
          bottom:0;
          left:0;
          background:royalblue;
      }
      
      .navvv .nav-middle a > i{
          font-size: 25px;
      }
      
      .navvv .nav-right a{
          text-decoration: none;
          color:#333;
          height:40px;
          width:40px;
          border-radius: 50%;
          background:#eee;
          display:grid;
          place-items: center;
          margin-left:1rem;
      }
      
      .navvv .nav-right a > i{
          font-size:25px;
      }
      .navvv .nav-right a:hover{
        color: green;
      }
      .seee{
        display: none !important;
      }
      .ress{
        display: none !important;
      
      }
      .menu{
        display: none !important;
      }
      @media (max-width: 1083px) {
        .navvv{
          position:sticky !important;
          justify-content: space-evenly !important;
          width: 100%;
          overflow: hidden;
          height: 70px;
          align-items:center !important;
          max-width: 100%;
          margin: 0 !important;
          padding: 0 !important;
       }
       .nav-left{
         display: none !important;
       }
       .navvv .nav-right a > i{
          font-size:25px;
      }
      .navvv .nav-right a{
          text-decoration: none;
          color:#333;
          height: 0;
          width: 0;
          border-radius: 50%;
          background:transparent;
          display:grid;
          place-items: center;
      }
      .navvv .nav-middle a > i{
          font-size: 22px;
          margin-left: 0 !important;
          position: relative;
          left: 0;
          padding: 0 !important;
      }
      .navvv .nav-middle{
          display:flex;
          align-items:center;
          margin: 0 !important;
          padding-bottom: 5px;
      }
      .navvv .nav-right{
          display: none !important;
      }
      .menu{
        display: inline-block !important;
      }
      .cree{
        display: none !important;
      }
      .profile{
        margin-left: 14px;
      }
      .ppp{
        display: none;
      }
      }
      
      @media (min-width: 1084px) {
      
      }
      @media (min-width: 320px) and (max-width: 359px) {
          .profile {
              display: none;
          }
      }
      @media (min-width: 360px) and (max-width: 361px) {
          .profile {
              display: inline-block;
              margin-left: -1px;
          }
      }
      
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
      #title{
font-size: 30px;
color: green;
}
.iteem{
font-size: 23px;
display: block !important;
margin-bottom: 30px !important;
color: rgb(75, 75, 75);
cursor: pointer;
transition: all .5s ease-in-out;
}
.iteem:hover{
font-size: 30px;
}
#back{
padding: 13px;
margin-bottom: 30px;
background-color: transparent;
border: none;
font-size: 40px;
font-family: monospace;
cursor: pointer;
opacity: .5;
}
a img{
    text-decoration: none !important;
    color: rgb(53, 53, 53);
    margin: 0;
    padding: 0;
    width: 40px;
    vertical-align: middle; 
}

.lolo {

margin-left: 13px;

font-size: 24px;

font-family: cursive;

font-family: cursive;

color: green;

font-size: 29px;

font-weight: bold;

opacity: .7;

cursor: pointer;

transition: all .5s ease-in-out;

}

.lolo:hover {

opacity: 1;

}

.logo_img {

width: 50px; 

height: 50px; 

background-image: url('assets/img/favicon.png');

background-size: cover;  

background-position: center;  

background-repeat: no-repeat;  

opacity: .7;

transition: all .5s ease-in-out;

}

.logo_img:hover {

background-image: url('assets/img/favicon-dark.png');

width: 50px; 

height: 50px; 

background-size: cover;  

background-position: center;  

background-repeat: no-repeat;  

opacity: 1;

}

.notification-item {

display: flex;

align-items: center;

padding: 10px;

margin: 5px 0;

border-bottom: 1px solid #ddd;

text-decoration: none;

color: #000;
}

.notification-item:hover {

background-color: #f1f1f1;

}

.user-image {

width: 40px;

height: 40px;

border-radius: 50%;

margin-right: 10px;

}

.notification-text {

flex: 1;

font-size: 14px;

line-height: 1.5;

}

@media (max-width: 768px) {


.notification-item {

    flex-direction: column;

    align-items: flex-start;

}

.user-image {

    margin-right: 0;

    margin-bottom: 10px;

}

}

</style>