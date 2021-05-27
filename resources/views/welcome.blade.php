
<!DOCTYPE html>
<html lang="es">  
  <head>   
	  
    <title>Libreria Volcan</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">  
	  <link rel="manifest" crossorigin="use-credentials" href="/manifest.json">
	@laravelPWA
  </head> 

	<style>
	
@import url(https://fonts.googleapis.com/css?family=Raleway);
@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');
		

body{
margin:0;
overflow-x:hidden;
width:100%;
font-family: 'Comfortaa', cursive !important;

}
		

/*DEFAULT*/

a{
text-decoration:none;
}
li{
list-style:none;
padding:5px;
}
.title{
font-size:2em;
color: white;
font-family: 'Comfortaa', cursive !important;
font-size: xxx-large;
}
		
.title2{
font-size:2em;
color: black;
font-family: 'Comfortaa', cursive !important;
font-size: xx-large !important;

}
.sub-title{
font-size:1em;
color:gray;
}
em{
font-style:normal;
color:#FF7125;
}
.btn1{
padding:10px 0px;
box-shadow:0px 3px 8px -3px rgba(1,1,1,0.5);
outline:none;
border:0;
background: transparent linear-gradient(
90deg
, #AE0A62 0%, #F8AA43 100%) 0% 0% no-repeat padding-box;
border-radius:20px;
color:#FF7125;
font-weight:400;
text-align:center;
transition:0.5s;
height: 80px !important;
width: 25% !important;
margin-left: 38%;
margin-top: -3%;
padding-top: 30px;

}

.btn2{
padding:10px 20px;
box-shadow:0px 3px 8px -3px rgba(1,1,1,0.5);
outline:none;
border:0;
background:#FF7125;
border-radius:20px;
color:#fff;
font-weight:400;
text-align:center;
transition:0.5s;
}
.btn2:hover{
background:#3d35ec;
}
.banner{
margin:auto;
width:70%;
text-align:center;
}
#scroll-up{
position:fixed;
bottom:2em;
right:2em;
background:#1e1e1e;
width:20px;
height:20px;
text-align:center;
color:#fff;
padding:5px;
border-radius:50%;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
z-index:999;
display:none;
}
.inline-photo {
  opacity: 0;
  transform: translateY(4em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo.is-visible {
  opacity: 1;
  transform: rotateZ(-0deg);
}


/*LOADER*/
.loading {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background: #292970;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  justify-content: center;
  align-content: center;
}

.load {
  min-height: 60pt;
}

@keyframes loading {
  0% {
    width: 50pt;
    height: 50pt;
    margin-top: 0;
  }
  25% {
    height: 4pt;
    margin-top: 23pt;
  }
  50% {
    width: 4pt;
  }
  75% {
    width: 50pt;
  }
  100% {
    width: 50pt;
    height: 50pt;
    margin-top: 0;
  }
}

.loader {
  width: 50pt;
  height: 50pt;
  border-radius: 100%;
  border: #6767fa 4pt solid;
  margin-left: auto;
  margin-right: auto;
  background-color: transparent;
  animation: loading 1s infinite;
}

.load-text {
  padding-top: 15px;
  text-align: center;
  font: 14pt "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #fff;
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:0px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:0px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}



/*NAV-BAR*/
header{
  position:fixed;
  top:0;
  width:100%;
  z-index:9;
}

.topnav {
  overflow: hidden;
  width:90%;
  margin:auto;
  background-color: transparent;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  transition:0.5s;
}

.topnav .logo{
float:left;
color:#fff;
font-size:2em;
font-family: 'Comfortaa', cursive !important;

}

.active {
  color:gray;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  color:rgb(180, 205, 255);
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
 .topnav{
 background:#ffffff;
 width:100%;
 }
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
#navbar {
  background-color: #fff;
  position: fixed;
  top: -60px;
  width: 100%;
  display: block;
  z-index:9;
  box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
  transition: top 0.3s;
}

#navbar a {
  float: right;
  display: block;
  color: #000;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar .logo{
float:left;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

.slide-menu .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.slide-menu .dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: #000;
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
}












.main{
width:100%;
height:100vh;
background-image:url("/img/main-bgfinal.jpg");
background-size:100% 100%;

}

.main table{
width:100%;
height:100vh;
}



.main table td img{

float:right;

margin-top:10%;
pointer-events:none;
--delay: 0s;
animation: arrows 4s var(--delay) infinite ease-in;
}

@keyframes arrows {
  0%,
  100% {
    color: black;
    transform: translateY(0);
  }
  50% {
    color: #3AB493;
    transform: translateY(20px);
  }
}

.main table td section{
margin:5%;
color:#fff;
}

.main table td section .sub-title,.main table td section p{
color:rgb(180, 205, 255);
}

@media (max-width:600px){
.main table td{
width:100%;
display:block;
}
.main table td section{
margin-top:20%;
}
.main table td img{
width:60%;
height:60%;
margin-top:0%;
pointer-events:none;
}

}




/*CARDS*/
.section0{
width:100%;
padding:30px;

}

.section0 .card{
width:40%;
padding:30px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
border-radius:5px;
margin:1%;
display:inline-block;
text-align:center;
border-top:2px solid #FF7125;
}

.section0 .banner{
box-shadow:0px 0px 0px 0px rgba(1,1,1,0.5);
border-top:0px;
}

.section0 .card i{
font-size:4em;
color:#3077e8;
float:left;
}

@media (max-width:600px){
.section0{
display:flex;
align-items:left;
justify-content: left;
position:relative;
overflow-x:auto;
scrollbar-width:none;
scroll-behavior: smooth;
}
.section0 .card{
min-width:79%;
}
}



/*CONTAINER*/
.container{
width:100%;
}

.container table{
width:100%;
}

.container table td{
width:50%;
}

.container table td img{
margin:auto;
}

.container table td:nth-child(2),.container table .aboutus_td2{
padding:20px;
}

@media (max-width:600px){
.container table td{
width:100%;
display:block;
}
.container table td img{
width:90%;
}
.container table td:nth-child(2),.container table .aboutus_td2{
padding:10px;
width:95%;
}
}







       .slick{
		width:90%;
		margin-left:auto;
		margin-right:auto;
		}
		
		.slick table{
		width:100%;
		margin-left:auto;
		margin-right:auto;
		}
		
		.slick table td{
		width:30%;
		padding:1%;
		}
	
		.slick table td ul li{
		list-style:none;
		padding:10px 0px;
		}
		
		.slick table td ul li a{
		text-decoration:none;
		transition:0.5s;
		}
		
		.slick table td ul li a:hover{
		color:#8798bd;
		}
		
		.slick table td ul li h3{
		color:#FF7125;
		}
		
		.slick table td ul li p{
		color:rgba(1,1,1,0.7);
		}
		
		.slick table td:nth-child(1) ul{
		text-align:right;
		}
		
		.slick table td:nth-child(3) ul{
		text-align:left;
		}
		
		.slick table td:nth-child(2) .card{
		margin-left:auto;
		margin-right:auto;
		}
		
		.slick .card {
        position: relative;
        width: 90%;
        height:80vh;
        overflow: hidden;
        border-radius: 5px;
       }


       .slick .card::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        z-index: 900;
        display: block;
        width: 100%;
        height: 100%;
       }

      .slick .card_part {
       position: absolute;
       top: 0;
       left: 0;
       z-index: 7;
       display: flex;
       align-items: center;
       width: 100%;
       height: 100%;
       background-size:cover;
       transform: translateX( 700px );
       background-image: url("https://i.ibb.co/qDfqrrK/04.webp");
       background-repeat:no-repeat;
       animation: opaqTransition 28s cubic-bezier(0, 0, 0, 0.97) infinite;
       }


      .slick .card_part.card_part-two {
       z-index: 6;
       background-image: url("https://i.ibb.co/qDfqrrK/04.webp");
       animation-delay: 7s;
       background-repeat:no-repeat;
      }

      .slick .card_part.card_part-three {
       z-index: 5;
       background-image: url("https://i.ibb.co/qDfqrrK/04.webp");
       animation-delay: 14s;
       background-repeat:no-repeat;
       }

      .slick .card_part.card_part-four {
       z-index: 4;
       background-image: url("https://i.ibb.co/qDfqrrK/04.webp");
       animation-delay: 21s;
       background-repeat:no-repeat;
       }


      @keyframes opaqTransition {
       3% { transform: translateX( 0 ); }
       25% { transform: translateX( 0 ); }
       28% { transform: translateX( -700px ); }
       100% { transform: translateX( -700px ); }
       }
       
       
       @media (max-width:600px){
       .slick{
		width:100%;
		margin-left:auto;
		margin-right:auto;
		}
       .slick table td{
       width:95%;
       display:block;
       padding:0%;
       }
       .slick table td ul{
       width:85%;
       }
       .slick table td:nth-child(1) ul{
		text-align:left;
		}
		.slick .card {
        position: relative;
        width: 60%;
        height:50vh;
        overflow: hidden;
        border-radius: 5px;
       }
       }
       
       @media (max-width:500px){
       .slick table td{
       width:100%;
       display:block;
       }
       .slick table td:nth-child(1) ul{
		text-align:left;
		}
		.title{
		font-size:1.3em;
		}
		.sub-title{
		font-size:0.6em;
		}
		.slick table td ul li{
		padding:5px 0px;
		}
       }
       
       

.section1{
width:90%;
margin:auto;
}
.section1 .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.section1 .panel img{
margin:0px 20px;
}

.section1 .active,.section1 .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #FF7125;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.section1 .active:after {
  content: "\2212";
}

.section1 .panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  margin:auto;
  transition: max-height 0.2s ease-out;
}

 @media (max-width:600px){
 .section1 .banner{
 width:90%;
 }
 }





/*FOOTER*/
.footer{
width:100%;
background-image:url("/img/Footerfinal.png");
background-size:100% 100%;
padding:20px 0px;
}

.footer section{
width:100%;
padding:2%;
display:inline-block;
}



.footer img{
width:200px;
height:80px;
font-size:2em;
}

.footer p{
font-size:12px;
color:#fff;
}

.footer section .title{
color:#fff;
font-size:1em;
}

.footer section .title:before{
content:"";
}

.footer section a{
text-decoration:none;
color:#fff;
font-size:14px;
transition:0.5s;
}

.footer section a:hover{
color:#a49e59;
}

.footer section input{
width:70%;
border:0;
outline:none;
height:30px;
padding:5px;
}

.footer section button{
width:50px;
height:40px;
padding:10px 5px;
outline:none;
border:0;
background:#CCCCCC;
color:#193aab;
}

.footer section .fa-map-marker,.footer section .fa-phone,.footer section .fa-envelope{
font-size:23px;
margin:10px;
transition:0.5s;
}

.footer section i:hover{
color:#fff;
}

.sub-footer{
background:#1e1e1e;
text-align:center;
font-size:14px;
color:gray;
padding:10px 0px;
}
@media (max-width:600px){
.footer section{
display:block;
width:90%;
}
.footer section:nth-child(2),.footer section:nth-child(3){
width:40%;
display:inline-block;
margin:2%;
}
}





/*ABOUT US*/
.header_aboutus{
width:100%;
height:40vh;
background-image:url("../images/aboutus_header.webp");
background-size:cover;
background-attachment:fixed;
text-align:center;
color:#fff;
}

.header_aboutus .title{
position:relative;
top:15vh;
}

.header_aboutus .sub-title{
position:relative;
top:20vh;
color:#f7f7f7;
}

.header_aboutus .sub-title a{
color:#fff;
}



:root {
--rose1: linear-gradient(to right,#E50091,#AE0D97);
--rose2: linear-gradient(to right,#D219B4,#E50091);
--blue1: linear-gradient(to right,#3b29cf,#4267D9);
--blue2: linear-gradient(to right,#4267D9,#17B1EF);
--green1: linear-gradient(to right,#42c966,#5BD80B);
--green2: linear-gradient(to right,#04E2CB,#42c966);
--orange1: linear-gradient(to right,#E03C30,#FF7125);
--orange2: linear-gradient(to right,#FF7125,#EFBC2F);
}


.container-fluid{
 background:#f7f7f7;
 padding:5% 0%;
}

.main-timeline{
    position: relative;
    width:90%;
    margin:auto;
}
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 50%;
    padding: 0 0 0 70px;
    margin: 0 0 0 50px;
    float: right;
    position: relative;
    text-align:left;
    margin-top:10vh;
}
.main-timeline .timeline ul li:before{
content:"\f0a4";
margin:0px 5px;
}

.main-timeline .timeline:before{
    content: '';
    background-color: #D219B4;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: -70px;
    top: 50%;
}
.main-timeline .timeline-content{
    color: #fff;
    background: var(--rose1);
    min-height: 140px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px -5px #555;
    display: block;
    position: relative;
}
.main-timeline .timeline-content:before,
.main-timeline .timeline-content:after{
    content: '';
    background: #E50091;
    height: 16px;
    width: 16px;
    transform: translateY(-50%) rotate(45deg);
    position: absolute;
    left: -8px;
    top: 50%;
}
.main-timeline .timeline-content:after{
    background: var(--rose2);
    transform: translateY(-50%) rotate(0);
    left: -140px;
    width: 140px;
    height: 5px;
}
.main-timeline .timeline-content:hover{ 
    text-decoration: none; 
}
.main-timeline .timeline-icon{
    color: rgba(0,0,0,0.2);
    font-size: 40px;
    position: absolute;
    top: 15px;
    left: -90px;
}
.main-timeline .title{
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 7px 0;
}
.main-timeline .description{
    font-size: 15px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
    padding: 0 70px 0 0;
    margin: 0 70px 0 0;
    float: left;
}
.main-timeline .timeline:nth-child(even):before{
    left: auto;
    right: -71px;
}
.main-timeline .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: -8px;
}
.main-timeline .timeline:nth-child(even) .timeline-content:after{
    left: auto;
    right: -140px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: -90px;
}
.main-timeline .timeline:nth-child(4n+2):before{ 
    background-color: #17B1EF; 
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content{
    background: var(--blue1);
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ 
    background: #4267D9; 
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content:after{
    background: var(--blue2);
}
.main-timeline .timeline:nth-child(4n+3):before{ 
    background-color: #04E2CB; 
}
.main-timeline .timeline:nth-child(4n+3) .timeline-content{
    background: var(--green1);
}
.main-timeline .timeline:nth-child(4n+3) .timeline-content:before{ 
    background: #42c966; 
}
.main-timeline .timeline:nth-child(4n+3) .timeline-content:after{
    background: var(--green2);
}
.main-timeline .timeline:nth-child(4n+4):before{
    background-color: #EFBC2F; 
}
.main-timeline .timeline:nth-child(4n+4) .timeline-content{
    background: var(--orange1);
}
.main-timeline .timeline:nth-child(4n+4) .timeline-content:before{ 
    background: #FF7125; 
}
.main-timeline .timeline:nth-child(4n+4) .timeline-content:after{
    background: var(--orange2);
}

@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        padding: 0 0 0 40px;
        margin-bottom: 20px;
    }
    .main-timeline .timeline:before,
    .main-timeline .timeline:nth-child(even):before{
        transform: translateY(0);
        left: 0;
        right: auto;
        top: 47px;
    }
    .main-timeline .timeline:nth-child(4n+2) .timeline-content{
        background: linear-gradient(to left,#3b29cf,#4267D9);
    }
    .main-timeline .timeline:nth-child(4n+4) .timeline-content{
        background: linear-gradient(to left,#E03C30,#FF7125);
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:before{
        transform: translateY(0) rotate(45deg);
        top: 45px;
        left: -4px;
    }
    .main-timeline .timeline-content:after,
    .main-timeline .timeline:nth-child(even) .timeline-content:after{
        width: 40px;
        transform: translateY(0);
        right: auto;
        left: -38px;
        top: 50px;
    }
    .main-timeline .timeline:nth-child(even) .timeline-content:after{
        transform: translateY(0) rotateY(180deg);
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        font-size: 22px;
        left: -30px;
        right: auto;
    }
}
@media screen and (max-width:567px){
    .main-timeline .title{ font-size: 18px; }
    .main-timeline{
  
    position: relative;
    width:75%;
    margin:auto;
}
}








/*CONTACT FORM*/
.container .contact_details{
width:90%;
margin:auto;
}

.container .contact_details td{
text-align:center;
}

.contact form{
width:60%;
margin:auto;
}
.contact form input,.contact form textarea {
  border: 0;
  outline: 0;
  font-size: 16px;
  border-radius: 320px;
  padding: 16px;
  background-color: #EBECF0;
  text-shadow: 1px 1px 0 #FFF;
  margin-top:2%;
}
.contact form input,.contact form textarea {
  margin-right: 8px;
  box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
  width: 100%;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  appearance: none;
  -webkit-appearance: none;
  resize:none;
}
.contact form input:focus {
  box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #FFF;
}

.contact form button {
    color: #0f1c48;
    font-weight: bold;
    box-shadow: -5px -5px 20px #FFF, 5px 5px 20px #BABECC;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    font-weight: 600;
        border: 0;
    outline: 0;
    font-size: 16px;
    border-radius: 320px;
    padding: 16px;
    background-color: #EBECF0;
    width:50%;
    margin-top:2%;
  
}
.contact form button:hover {
  box-shadow: -2px -2px 5px #FFF, 2px 2px 5px #BABECC;
  color:#fff;
}
.contact form button:active {
  box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #FFF;
}



.credits{
  background:#1e1e1e;
  color:gray;
  font-size:13px;
  padding:10px;
  position:fixed;
  right:0;
  bottom:20px;
}
		
		
.fa-handshake-o:before {
    content: "\f2b5";
	color: black !important;
}
		
.fa-line-chart:before {
    content: "\f201";
	color: black !important;
}
		
.fa-phone:before {
    content: "\f095";
	color: black !important;
}
		
.fa-thumbs-up:before {
    content: "\f164";
	color: black !important;
}
		
.fa-users:before {
    content: "\f0c0";
	color: black !important;
}

.a {
    text-decoration: none;
    font-size: xxx-large;
	color: white !important;
}
		
h1{
font-size: 50pt !important;
}
		
h2{
	color: white;
}
		
		
		
@media (max-width:600px){
	
	#navbar{
	display:none;
	}
	
	.topnav{
		height: 70px;
	}
	
	.topnav .logo{
		color: #000;
		font-size: 1.35em;
	}
	
	.title{
		margin-top: 100px;
		font-size: 2.5em !important;
		padding: 20px;
			
	}
	
	
	.btn1{
		padding:10px 0px;
		box-shadow:0px 3px 8px -3px rgba(1,1,1,0.5);
		outline:none;
		border:0;
		background: transparent linear-gradient(
		90deg
		, #AE0A62 0%, #F8AA43 100%) 0% 0% no-repeat padding-box;
		border-radius:20px;
		color:#FF7125;
		font-weight:400;
		text-align:center;
		transition:0.5s;
		height: 50px !important;
		width: 60% !important;
		margin-left: 20%;
		margin-top: -3%;
		padding-top: 30px;

	}
	
	.a{
		font-size: xx-large !important;
	}
	
	*{
		overflow-x: hidden;
	}
	
	.section0 .card{
		min-width: 70% !important;
	}
	
	.slick table td {
		
		margin-left: -15px !important;
	}

	
	
	
	
}

	
	</style>
	
	
	
	
	
	
	
	
	
	
	
	
  <body>    
	  
	  
	  
<!--TITLE-->
<title>LIBRERÍA PAPELERÍA VOLCÁN</title>

<!--ICON-->
<link rel="shortcut icon" href="images/logo.svg">

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Mahesh">
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="LEVIOOSA" />

	  
	 
<!--EXTERNAL CSS-->


<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fredoka+One&family=Kanit:wght@300&display=swap" rel="stylesheet">  


 


<!--NAV-BAR-->
<header>
	
<div class="topnav" id="myTopnav">

  <a class="logo"><img src="/img/logolibreriafinal.png" width="50" height="37"> Librería Papelería Volcán</a>

	@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Reserva Ya</a>

                       
                    @endauth
                </div>
            @endif
  
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</header>
<div id="navbar">
<div class="slide-menu">
  <a class="logo">Libreía Papelería Volcán</a>
 
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Reserva Ya</a>

                    @endauth
                </div>
            @endif

   
</div>
</div>



<!--MAIN-->
<div class="main">
<table>
<tr>
	
<td>
	<div align="center"><h1 class="title">Y tú ¿Quieres estar tranquilo?</h1></div>
	<div align="center"><h2>Reserva ya tus libros de texto y no esperes hasta el final</h2></div>
<section>
	


<div class="btn1"><a href="{{ route('login') }}" class="a" >Reserva Ya</a></div>
</section>
</td>

</tr>
</table>
</div>


<!--CARDS-->
<section class="section0" id="sections">
<div class="card banner">
<h1 class="title2">¿Qué Ofrecemos?</h1>

</div>
<div class="card inline-photo show-on-scroll">
<i class="fa fa-handshake-o"></i>
<h3>Reserva tus libros</h3>
</div>
<div class="card inline-photo show-on-scroll">
<i class="fa fa-thumbs-up"></i>
<h3>Chat de ayuda</h3>
</div>
<div class="card inline-photo show-on-scroll">
<i class="fa fa-line-chart"></i>
<h3>Mejores Precios</h3>
</div>
<div class="card inline-photo show-on-scroll">
<i class="fa fa-users"></i>
<h3>Equipo con años de experiencia</h3>
</div>
<div class="card inline-photo show-on-scroll">
<i class="fa fa-phone"></i>
<h3>Pedidos a domicilio</h3>
</div>
</section>






<section class="slick" id="moreaboutus">

	<table>
	<tr>
		<td>
		<ul>
		<li>
		<h3>Redes Sociales</h3>
		<p>Instagram y Facebook para que no pierdas detalle de las novedades</p>
		</li>
		<li>
		<h3>Pedidos a Domicilio</h3>
		<p>Disponemos de pedidos a domicilio, solo contáctanos</p>
		</li>
		<li>
		<h3>Mejores Precios</h3>
		<p>Buenos precios en todos los productos </p>
		</li>
		</ul>
		</td>
		<td>
		<div>
			<img src="/img/telefono.jpg">
       
   
       </div>
		</td>
		<td>
		<ul>
		<li>
		<h3>Equipo con años de experiencia </h3>
		<p>Equipo formado con trabajdores con mas de 20 años de experiencia</p>
		</li>
		<li>
		<h3>Exelente atención al cliente</h3>
		<p>Excelente trato al cliente en todos los sentidos</p>
		</li>
		<li>
		<h3>Chat de Ayuda</h3>
		<p>Chat de ayuda con el fin de resolver las posibles dudas a la hora de la reserva de libros</p>
		</li>
		</ul>
		</td>
	</tr>
	</table>
	</section>
	
	



	
	
<!--FOOTER-->
<footer>
<div class="footer">


<section align="center">

<p><a title="Address, Country, Pincode"><i class="fa fa-map-marker"></i></a> <a href="#"><i class="fa fa-phone"></i></a> <a href="#"><i class="fa fa-envelope"></i></a></p>
</section>


</footer>


<a href="#" id="scroll-up"><i class="fa fa-angle-up"></i></a>


<!--JAVASCRIPT-->
<script>

	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}





window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("scroll-up").style.display = "block";
  } else {
    document.getElementById("navbar").style.top = "-60px";
    document.getElementById("scroll-up").style.display = "none";
  }
}






function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}




//SCROLL ANIMATE
var scroll = window.requestAnimationFrame ||
             function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 
function loop() {

    Array.prototype.forEach.call(elementsToShow, function(element){
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
}
loop();

function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}




var myVar;
function myLoader() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

</script>

  
 
	  
	 		
  </body>  
</html>