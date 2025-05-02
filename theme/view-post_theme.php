<style>
    .back{
padding: 13px;
margin-bottom: 30px;
background-color: transparent;
border: none;
font-size: 40px;
font-family: monospace;
cursor: pointer;
opacity: .5;
}
#myInput {
  width: 100%; 
  font-size: 16px; 
  padding: 12px 20px 12px 10px; 
  border: none;
  outline: none !important; 
  border-bottom: 1px solid green;
  margin-bottom: 12px; 
}

#myTable {
  border-collapse: collapse; 
  width: 100%; 
  border: 1px solid #ddd; 
  font-size: 18px; 
}

#myTable th, #myTable td {
  text-align: left; 
  padding: 12px; 
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
*{
margin:0;
padding:0;
box-sizing: border-box;
font-family: sans-serif;
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
nav{
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

nav .nav-left, nav .nav-right{
display:flex;
align-items: center;
}

nav .nav-left > img{
width:40px;
}

nav .nav-left > input{
height:40px;
padding:5px 10px;
border:none;
border-radius: 25px;
outline:none;
background-color: #eee;
margin-left: 10px;
}

nav .nav-middle{
display:flex;
align-items:flex-end;
padding-bottom: 5px;
}

nav .nav-middle a{
text-decoration: none;
color:#333;
padding:10px;
margin:0px 10px;
}

nav .nav-middle a.active{
color:royalblue;
position:relative;
}

nav .nav-middle a.active::after{
content:'';
width:100%;
height:3px;
position:absolute;
bottom:0;
left:0;
background:royalblue;
}

nav .nav-middle a > i{
font-size: 25px;
}


nav .nav-right a{
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

nav .nav-right a > i{
font-size:18px;
}


.container{
background:#eee;
display:flex;
}

.container .left-panel, .container .right-panel{
position: sticky;
top:70px;
width:250px;
height:calc(100vh - 70px);
}

.container .left-panel ul{
padding:10px 0px;
}

.container .left-panel ul li{
list-style: none;
display: flex;
padding:.7rem 1rem;
align-items: center;
transition: .3s;
border-radius: 5px;
cursor: pointer;
}

.container .left-panel ul li:hover{
background:#ddd;
}

.container .left-panel ul li > p{
margin-left: 10px;
}

.container .left-panel ul li > i{
font-size:20px;
color:slateblue;
}

.container .left-panel ul li > i.fa-calendar-week{
color:tomato;
}

.container .left-panel ul li i.fa-briefcase{
color:green;
}

.container .left-panel ul li i.fa-star{
color:yellowgreen;
}

.container .left-panel ul li i.fa-hands-helping{
color:indianred;
}

.container .left-panel .footer-links{
padding:5px 1rem;
}

.container .left-panel .footer-links a{
text-decoration: none;
color:#333;
font-size:14px;
margin: 5px;
}

.middle-panel{
flex:1;
display:flex;
flex-direction: column;
align-items:center;
}

.middle-panel .story-section{
display:flex;
padding:1rem;
}

.middle-panel .story-section .story{
width:120px;
height:200px;
border-radius: 10px;
position: relative;
overflow:hidden;
cursor: pointer;
margin:0px 5px;
box-shadow: 0 0 5px 5px #ddd;
background:#fff;
}

.middle-panel .story-section .story > img{
height:100%;
width: 100%;
transition:.3s ease-in;
}

.middle-panel .story-section .story:hover > img{
transform:scale(1.05);
}

.middle-panel .story-section .story .dp-container{
width:40px;
height:40px;
border-radius: 50%;
overflow:hidden;
position:absolute;
top:10px;
left:10px;
border:royalblue 4px solid; 
}

.middle-panel .story-section .story .dp-container > img{
width:100%;
height:100%;
}

.middle-panel .story-section .story .name{
position:absolute;
bottom:0px;
left:0px;
font-family: cursive;
padding:5px;
color:#fff;
font-weight:bold;
}

.middle-panel .story-section .story.create .dp-image{
height:90% !important;
overflow:hidden;
}

.middle-panel .story-section .story.create .dp-image img{
width:100%;
height:90% !important;
}

.middle-panel .story-section .story.create .dp-container{
top:70%;
left:50%;
transform: translateX(-50%);
display:grid;
place-items: center;
background:green;
border:4px solid #fff;
}

.middle-panel .story-section .story.create .dp-container i{
color: #fff;
}

.middle-panel .story-section .story.create .name{
color: #000;
font-size:13px;
left:12px;
}

.post{
width:550px;
background:#fff;
border-radius:10px;
padding:10px;
margin:10px;
}

.post .post-top{
display:flex;
align-items: center;
padding:10px;
}

.post .post-top .dp{
width:40px;
height:40px;
border-radius: 50%;
overflow:hidden;
}

.post .post-top .dp > img{
width:100%;
cursor:pointer;
}

.post .post-top .post-info{
margin-left:10px;    
font-weight: bold;
}

.post .post-top .post-info .name{
cursor:pointer;
font-size:16px;
}

.post .post-top .post-info .time{
font-size:12px;
cursor:pointer;
}

.post .post-top i{
margin-left:auto;
cursor: pointer;
}

.post .post-top > input{
height:40px;
padding:5px 10px;
border-radius:25px;
outline:none;
border:none;
flex:1;
background:#eee;
margin-left:10px;
}

.post .post-content{
font-size:16px;
font-weight:normal;
padding:10px;
}

.post .post-content > img{
width:100%;
margin:5px 0px;
}

.post .post-bottom{
box-shadow: 1px solid #ddd;
display:flex;
justify-content: space-between;
padding:5px 5px 0px 5px;
}

.post .post-bottom .action{
padding:10px;
border-radius:10px;
transition: .3s ease-in;
cursor: pointer;
}

.post .post-bottom .action:hover{
background:#eee;
}

.post.create .post-bottom > .action{
color:green;
}

.container .right-panel{
padding:1rem;
}

.right-panel .pages-section,
.right-panel .friends-section{
margin:1rem 0px;
}

.right-panel .pages-section h4,
.right-panel .friends-section h4{
margin-bottom:10px;
}

.right-panel .pages-section .page,
.right-panel .friends-section .friend{
display: flex;
align-items:center;
text-decoration: none;
transition: .3s ease-in-out;
border-radius: 5px;
padding:7px 10px;
color:#333;
}

.right-panel .pages-section .page:hover,
.right-panel .friends-section .friend:hover{
background:#ddd;
}

.right-panel .pages-section .page > .dp,
.right-panel .friends-section .friend > .dp{
height:40px;
width:40px;
border-radius: 50%;
overflow:hidden;
cursor: pointer;
}

.right-panel .pages-section .page > .dp > img, 
.right-panel .friends-section .friend > .dp > img{
width:100%;
}

.right-panel .pages-section .name, .right-panel .friends-section .name{
font-size:18px;
cursor:pointer;
margin-left:8px;
}
.navv{
font-size: 23px;
}
.navv:hover{
color: green;
}
.left-items{
font-family: cursive;
color: #333;
font-size: 17px;
display: inline-block;
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
*{
margin:0;
padding:0;
box-sizing: border-box;
font-family: sans-serif;
}

nav{
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

nav .nav-left, nav .nav-right{
display:flex;
align-items: center;
}

nav .nav-left > img{
width:40px;
}

nav .nav-left > input{
height:40px;
padding:5px 10px;
border:none;
border-radius: 25px;
outline:none;
background-color: #eee;
margin-left: 10px;
}

nav .nav-middle{
display:flex;
align-items:flex-end;
padding-bottom: 5px;
}

nav .nav-middle a{
text-decoration: none;
color:#333;
padding:10px;
margin:0px 10px;
}

nav .nav-middle a.active{
color:royalblue;
position:relative;
}

nav .nav-middle a.active::after{
content:'';
width:100%;
height:3px;
position:absolute;
bottom:0;
left:0;
background:royalblue;
}

nav .nav-middle a > i{
font-size: 25px;
}

.post{
width: 550px; 
background:#fff;
border-radius:10px;
padding:10px;
}

.post .post-top{
display:flex;
align-items: center;
padding:10px;
}

.post .post-top .dp{
width:40px;
height:40px;
border-radius: 50%;
overflow:hidden;
}

.post .post-top .dp > img{
width:100%;
cursor:pointer;
}

.post .post-top .post-info{
margin-left:10px;    
font-weight: bold;
}

.post .post-top .post-info .name{
cursor:pointer;
font-size:16px;
}

.post .post-top .post-info .time{
font-size:12px;
cursor:pointer;
}

.post .post-top i{
margin-left:auto;
cursor: pointer;
}

.post .post-top > input{
height:40px;
padding:5px 10px;
border-radius:25px;
outline:none;
border:none;
flex:1;
background:#eee;
margin-left:10px;
}

.post .post-content{
font-size:16px;
font-weight:normal;
padding:10px;
}

.post .post-content > img{
width:100%;
margin:5px 0px;
}

.post .post-bottom{
box-shadow: 1px solid #ddd;
display:flex;
justify-content: space-between;
padding:5px 5px 0px 5px;
}

.post .post-bottom .action{
padding:10px !important;
border-radius:10px !important;
transition: .3s ease-in !important;
cursor: pointer !important;
}

.post .post-bottom .action:hover{
background:#eee !important;
}

.post.create .post-bottom > .action{
color:green !important;
}


@media (max-width: 920px) {
.post {
  width: 100%; 
  margin: 10px 0; 
}

.post .post-top {
  flex-direction: column;
  align-items: flex-start;
}

.post .post-top .dp {
  margin-bottom: 10px; 
}

.post .post-top > input {
  width: 100%; 
  margin-left: 0;
}

.post .post-content {
  font-size: 14px;
}

.container .left-panel, 
.container .right-panel {
  display: none; 
}

.middle-panel {
  width: 100%; 
}

.post .post-info .name,
.post .post-info .time {
  font-size: 14px; 
}

.post .post-bottom .action {
  font-size: 20px !important; 
}

.navvv {
  position: sticky;
  justify-content: space-evenly;
  width: 100%;
  height: 70px;
  align-items: center;
}

.navvv .nav-left {
  display: none;
}

.navvv .nav-middle a {
  font-size: 22px;
  padding: 0 10px;
}

.navvv .nav-right {
  display: none;
}

.menu {
  display: inline-block; 
}
}

@media (min-width: 768px) and (max-width: 1023px) {
.post {
  width: 90%; 
}

.container .left-panel,
.container .right-panel {
  width: 200px; 
}
}

@media (min-width: 1024px) {
.post {
  width: 550px; 
}

.container .left-panel,
.container .right-panel {
  display: block; 
}

.menu {
  display: none;
}
}
.post {
  width: 100%;
  margin-left: 28.5% !important;
  max-width: 550px;
  border: none;
  margin-top: 0 !important;
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

.post .post-bottom .action .counter {
    margin-left: 5px;
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
  margin-top: 20px;
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
  gap: 8px;
  flex-wrap: wrap; 
}

.post .post-bottom .action {
  display: flex !important;
  align-items: center !important;
  cursor: pointer !important;
  transition: all 0.3s ease !important;
  padding: 8px !important;
  border-radius: 8px !important;
  flex-grow: 1 !important; 
  justify-content: center !important;
}

.post .post-bottom .action:hover {
  background-color: rgba(0, 145, 255, 0.1); 
}

.post .post-bottom .action i {
  margin-right: 5px !important;
}

.post .post-bottom .action span {
  font-size: 14px !important;
  color: #555 !important;
}

.post .post-bottom .action .counter {
  font-size: 12px !important;
  color: #666 !important;
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
    justify-content: center; 
  }

  .post .post-bottom .action {
    margin: 5px; 
  }

  .post .post-content {
    font-size: 14px; 
  }

  .post .post-content > img {
    width: 100%;  
    margin: 5px 0;
  }

  .post .post-bottom .action .counter {
    font-size: 11px ;
    margin-left: 2px;
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
  font-size: 20px;
  margin-top: 5px;
  color: green;

  margin-left: 0;
}
.post-reacts:hover{
  color: rgb(0, 2, 128);
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
#ul-hide li{
font-size: 23px;
margin-bottom: 30px;
color: rgb(75, 75, 75);
cursor: pointer;
transition: all .5s ease-in-out;
}
#ul-hide li:hover{
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
.lang-div{
  align-items: center;
  display: flex;
  font-size: 26px;
  cursor: pointer;
  background-color: #e0e0e0;
  margin: 30px;
  border-radius: 9px;
  transition: transform 0.3s ease;
}

.lang-div:hover{
  background-color: #e0e0e0;
  color: blue;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}
.comment{
  border-radius: 12px;
  border: .01px solid rgb(232, 232, 232);   
}
.love{
  color: green;
}
.love :not(.counter):hover{
  color: blue;
  cursor: pointer;
}
.replyy{
  color: green !important;
  background-color: transparent !important;
  border: none !important;
  outline: none !important;
  font-size: 23px !important;
  cursor:  pointer !important;
}
.replyy:hover{
  color: blue !important;
}
a{
    text-decoration: none !important; 
    color: inherit !important; 
    vertical-align: middle !important; 
}
a img{
    text-decoration: none !important;
    color: rgb(53, 53, 53) !important;
    margin: 0 !important;
    padding: 0 !important;
    vertical-align: middle !important; 
}
a:active{
    text-decoration: none !important;
    
    color: rgb(53, 53, 53) !important;
}
a:visited{
    text-decoration: none !important;
    color: rgb(53, 53, 53) !important;
}
a:focus{
    text-decoration: none !important;
    color: rgb(53, 53, 53) !important;
}
a img{
    text-decoration: none !important;
    color: rgb(53, 53, 53) !important;
    margin: 0 !important;
    padding: 0 !important;
    width: 50px !important;
    vertical-align: middle !important; 
}
  </style>