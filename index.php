<?php
require('connection.php');
?>






<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Vizhithezhuthamilzha</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="vizhithezhuthamilzha_favi_icon.png"
    />
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="kr.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(window).on("load", function () {
        $(".preloader").addClass("complete");
      });
    </script>

    <style>
      body {
        margin: 0;
        padding: 0;
      }

      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*background: #000;*/
        transition: 2s;
      }
      .preloader:before {
        content: "";
        position: absolute;
        left: 0;
        width: 50%;
        height: 100%;
        background: transparent;
        transition: 2s;
      }
      .preloader.complete:before {
        left: -50%;
      }
      .preloader:after {
        content: "";
        position: absolute;
        right: 0;
        width: 50%;
        height: 100%;
        background: transparent;
        transition: 2s;
      }
      .preloader.complete:after {
        right: -50%;
      }

      .container {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .preloader.complete {
        opacity: 0;
        visiblity: hidden;
        pointer-events: none;
      }
      .container .ring {
        position: relative;
        width: 150px;
        height: 150px;
        margin: -30px;
        border-radius: 50%;
        border: 4px solid transparent;
        border-top: 4px solid #24ecff;
        animation: animate 4s linear infinite;
      }
      @keyframes animate {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      .preloader.complete {
        opacity: 0;
        visiblity: hidden;
        pointer-events: none;
      }

      .container .ring::before {
        content: "";
        position: absolute;
        top: 12px;
        right: 12px;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        background: #24ecff;
        box-shadow: 0 0 0 5px #24ecff33, 0 0 0 10px #24ecff22,
          0 0 0 20px #24ecff11, 0 0 20px #24ecff, 0 0 50px #24ecff;
      }

      .container .ring:nth-child(2) {
        animation: animate2 4s linear infinite;
        animation-delay: -1s;
        border-top: 4px solid transparent;
        border-left: 4px solid #93ff2d;
      }
      .container .ring:nth-child(2)::before {
        content: "";
        position: absolute;
        top: initial;
        bottom: 12px;
        left: 12px;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        background: #93ff2d;
        box-shadow: 0 0 0 5px #93ff2d33, 0 0 0 10px #93ff2d22,
          0 0 0 20px #93ff2d11, 0 0 20px #93ff2d, 0 0 50px #93ff2d;
      }
      @keyframes animate2 {
        0% {
          transform: rotate(360deg);
        }
        100% {
          transform: rotate(0deg);
        }
      }
      .container .ring:nth-child(3) {
        animation: animate2 4s linear infinite;
        animation-delay: -3s;
        position: absolute;
        top: -66.66px;
        border-top: 4px solid transparent;
        border-left: 4px solid #e41cf8;
      }

      .container .ring:nth-child(3)::before {
        content: "";
        position: absolute;
        top: initial;
        bottom: 12px;
        left: 12px;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        background: #e41cf8;
        box-shadow: 0 0 0 5px #e41cf833, 0 0 0 10px #e41cf822,
          0 0 0 20px #e41cf811, 0 0 20px #e41cf8, 0 0 50px #e41cf8;
      }

      .container p {
        position: absolute;
        color: #fff;
        font-size: 1.5em;
        font-family: consolas;
        bottom: -80px;
        letter-spacing: 0.15em;
      }

      .box {
        position: relative;
        width: 1850px;
        height: 960px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: transparent;
        overflow: hidden;
        border-radius: 20px;
        z-index: 1;
        margin: auto;
      }

      .box::before {
        content: "";
        position: absolute;
        width: 600px;
        height: 250%;
        background: linear-gradient(hsl(192, 100%, 50%), hsl(192, 100%, 50%));
        animation: animate3 4s linear infinite;
      }

      .box::after {
        content: "";
        position: absolute;
        inset: 4px;
        /* background:transparent;*/
        background-image: url("wooden.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        border-radius: 16px;
      }

      @keyframes animate3 {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      h2 {
        position: relative;
        font-size: 2.5em;
        letter-spacing: 4px;
        color: #666666;
        width: 100;
        text-align: center;
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0008);
        line-height: 0.4em;
        outline: none;
        animation: animate5 5s linear infinite;
        z-index: 1000;
      }

      @keyframes animate5 {
        0%,
        18%,
        20%,
        50.1%,
        60%,
        65.1%,
        80%,
        90.1%,
        92% {
          color: #737373;
          text-shadow: none;
        }
        18.1%,
        20.1%,
        30%,
        50%,
        60.1%,
        65%,
        80.1%,
        90%,
        92.1%,
        100% {
          color: #fff;
          text-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99, 0 0 40px #00ff99,
            0 0 80px #00ff99, 0 0 160px #00ff99;
        }
      }

       h3 {
        position: relative;
        font-size: 2.3em;
        letter-spacing: 4px;
        color: #666666;
        width: 100;
        text-align: center;
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0008);
        line-height: 0.4em;
        outline: none;
        animation: animate10 5s linear infinite;
        z-index: 1000;
      }

      @keyframes animate10 {
        0%,
        18%,
        20%,
        50.1%,
        60%,
        65.1%,
        80%,
        90.1%,
        92% {
          color: #737373;
          text-shadow: none;
        }
        18.1%,
        20.1%,
        30%,
        50%,
        60.1%,
        65%,
        80.1%,
        90%,
        92.1%,
        100% {
          color: #fff;
          text-shadow: 0 0 10px #ffff00, 0 0 20px #ffff00, 0 0 40px #ffff00,
            0 0 80px #ffff00, 0 0 160px #ffff00;
        }
      }

      ul {
        position: relative;
        display: flex;
        border-radius: 5px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.25);
        z-index: 1000;
      }
      ul li {
        list-style: none;
        z-index: 1000;
      }
      ul li a {
        position: relative;
        color: #fff;
        text-decoration: none;
        display: inline-block;
        padding: 20px 30px;
        z-index: 1000;
        backdrop-filter: blur(8px);
        border-radius: 5px;
      }

      ul li a ion-icon {
        font-size: 2.5em;
        pointer-events: none;
        opacity: 0.25;
        transition: 0.25s;
        z-index: 1000;
      }
      ul li.active a ion-icon {
        opacity: 1;
        z-index: 1000;
      }

      #marker {
        position: absolute;
        top: 0;
        transition: 0.5s;
        z-index: 1;
        left:90px;
      }
      #marker::before {
        content: "";
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 40px;
        border-radius: 8px;
      }

      ul li:nth-child(1).active ~ #marker::before {
        background: #0f0;
        box-shadow: 0 0 15px #0f0, 0 0 30px #0f0, 0 0 45px #0f0, 0 0 60px #0f0;
      }

      ul li:nth-child(2).active ~ #marker::before {
        background: #ff0;
        box-shadow: 0 0 15px #ff0, 0 0 30px #ff0, 0 0 45px #ff0, 0 0 60px #ff0;
      }

      ul li:nth-child(3).active ~ #marker::before {
        background:#00ffff;
        box-shadow: 0 0 15px #00ffff, 0 0 30px #00ffff, 0 0 45px #00ffff,
          0 0 60px #00ffff;
      }

      ul li:nth-child(4).active ~ #marker::before {
        background: #f0f;
        box-shadow: 0 0 15px #f0f, 0 0 30px #f0f, 0 0 45px #f0f, 0 0 60px #f0f;
      }

      ul li:nth-child(5).active ~ #marker::before {
        background: #ff308f;
        box-shadow: 0 0 15px #ff308f, 0 0 30px #ff308f, 0 0 45px #ff308f,
          0 0 60px #ff308f;
      }

     /* .cube {
        position: relative;
        width: 300px;
        height: 300px;
        transform-style: preserve-3d;
        transform: rotateX(-30deg);
        animation: animate6 4s linear infinite;
        z-index: 1000;
      }

      @keyframes animate6 {
        0% {
          transform: rotateX(-30deg) rotateY(0deg);
        }

        0% {
          transform: rotateX(-30deg) rotateY(360deg);
        }
      }

      .cube div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
      }

      .cube div span1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#151515, #00ec00);
        transform: rotateY(calc(90deg * var(--i))) translateZ(150px);
      }*/

      .top1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        background: #222;
        transform: rotateX(90deg) translateZ(150px);
      }

      .top1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        background: #0f0;
        transform: translatez(-380px);
        filter: blur(20px);
        box-shadow: 0 0 120px rgba(0, 255, 0, 0.2),
          0 0 200px rgba(0, 255, 0, 0.4), 0 0 300px rgba(0, 255, 0, 0.6),
          0 0 400px rgba(0, 255, 0, 0.8), 0 0 500px rgba(0, 255, 0, 1);
      }

        @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"); 
        
        
        
        
        /*glass icons*/
        
        
        section {
  position: relative;
  width: 100%;
  height: 700px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: transparent;
  /*background-image: url("pic_trulli.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;*/
}

section::before {
  content: "";
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50%;
  z-index: 1;
  backdrop-filter: blur(0px);
  border-top: 0px solid rgba(255, 255, 255, 0.5);
}

ol {
  position: relative;
  display: flex;
  z-index: 2;
}

ol li {
  position: relative;
  list-style: none;
  margin: 10px;
}

ol li a {
  position: relative;
  width: 80px;
  height: 80px;
  display: inline-block;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  color: #fff;
  font-size: 2em;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  box-shadow: 0 5px 45px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(2px);
  transition: 0.5s;
  overflow: hidden;
}

ol li a:hover {
  transform: translateY(-20px);
}

ol li a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50px;
  height: 100%;
  background: rgba(255, 255, 255, 0.5);
  transform: skewX(45deg) translateX(150px);
  transition: 0.5s;
}

ol li a:hover::before {
  transform: skewX(45deg) translateX(-150px);
}

/*hover card*/
.container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container1 .card {
  position: relative;
  width: 600px;
  height: 350px;
  margin: 20px;
  display: flex;
  transition: 0.5s;
  justify-content: flex-start;
  align-items: center;
   backdrop-filter: blur(4px);
  box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  
}

.container1 .card img {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  height: 300px;
  transition: 0.5s;
}

.container1 .card:hover img {
  left: 75%;
  height: 450px;
}

.container1 .card .content {
  position: relative;
  width: 50%;
  left: 20%;
  padding: 20px 20px 20px 40px;
  opacity: 0;
  visibility: hidden;
  transition: 0.5s;
}

.container1 .card:hover .content {
  left: 0;
  opacity: 1;
  visibility: visible;
}

.container1 .card .content h4 {
  color: #fff;
  text-transform: uppercase;
  font-size: 2em;
  line-height: 1em;
}

.container1 .card .content p {
  color: #fff;
}

.container1 .card .content a {
  position: relative;
  color: #fff;
}

.container1 .card .sci li 
{
  list-style:none;
  margin: 0 10px;
  transform: translateY(40px);
}

.container1 .card .sci li a 
{
  color:#fff;
  font-size:24px;
}

section1 {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  transform-style: preserve-3d;
}

.earth {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 300px;
  height: 300px;
  background: url(image.jpg);
  background-size: cover;
  background-repeat: repeat-x;
  border-radius: 50%;
  box-shadow: inset 0 0 20px rgba(0, 0, 0, 1), 0 0 50px #4069ff;
  animation: animateEarth 15s linear infinite;
}
@keyframes animateEarth {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: -750px 0;
  }
}

.circle {
  transform-style: preserve-3d;
  animation: animateText 10s linear infinite;
}

.circle span1 {
  position: absolute;
  font-family: monospace;
  top: 0;
  left: 0;
  background: #fff;
  color: #35146f;
  font-size: 3em;
  transform-origin: center;
  transform-style: preserve-3d;
  padding: 5px 11px;
  transform: rotateY(calc(var(--i) * calc(360deg / 30))) translateZ(200px);
  border-top: 4px solid #35146f;
  border-bottom: 4px solid #35146f;
}

@keyframes animateText {
  0% {
    transform: perspective(1000px) rotateY(360deg) rotateX(15deg)
      translateY(-30px);
  }

  100% {
    transform: perspective(1000px) rotateY(0deg) rotateX(15deg)
      translateY(-30px);
  }
}


body::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}
</style>
  </head>
  <body
     onload="startTime()"
    style="
      background-image: url('wooden.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    "
  >
    <div class="preloader">
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <div class="container">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <p>Loading....</p>
      </div>
    </div>
    <center>
      
        <table style="color: white; position: absolute; top: 10px; width: 100%; table-layout: auto;">
          <tr >
            <td style="width:5%;">
               <img
                src="user_images\cow_rem.png"
                style="width: 220px; height: 150px; z-index: 1000; color: white"
                alt="hlo" 
              />
            </td>
            <td style="position:relative;  align-items:left; text-align:left;  width:60%; right: 270px;"><br><br><h2 contenteditable="true" style="right:100px;">Vizhithezhuthamilzha</h2></td>
            <td style="z-index: 10000">
              <ul>
                 <li class="active">
                  <a href="#">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                
                <li>
                  <a href="vizhithe-news.php">
                    <ion-icon name="newspaper-outline"></ion-icon>
                  </a>
                </li>
               <li>
                  <a href="vizhithe-innov.php">
                    <ion-icon name="create-outline"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="vizhithe-sport.php">
                    <ion-icon name="tennisball-outline"></ion-icon>
                  </a>
                </li>
                <li >
                  <a href="Login_.php">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                  </a>
                </li>
                <div id="marker"></div>
              </ul>
            </td>
          </tr>
        </table>  
        
        <table style="width:100%;">
          <tr style="width:100%;">
            <td style="width:10%;left:1100px;"></td>
          </tr>
        </table><br><br><br><br><br>
        <table style="width: 100%; height: 500px;">
          <tr>
            <td style="width:40%;">
              <section1>
      <div class="earth"></div>
      <div class="circle">
        <span1 style="--i: 1">I</span1>
        <span1 style="--i: 2">n</span1>
        <span1 style="--i: 3">n</span1>
        <span1 style="--i: 4">o</span1>
        <span1 style="--i: 5">v</span1>
        <span1 style="--i: 6">a</span1>
        <span1 style="--i: 7">t</span1>
        <span1 style="--i: 8">i</span1>
        <span1 style="--i: 9">o</span1>
        <span1 style="--i: 10">n</span1>
        <span1 style="--i: 11">s</span1>
        <span1 style="--i: 12">-</span1>
        <span1 style="--i: 13">A</span1>
        <span1 style="--i: 14">r</span1>
        <span1 style="--i: 15">o</span1>
        <span1 style="--i: 16">u</span1>
        <span1 style="--i: 17">n</span1>
        <span1 style="--i: 18">d</span1>
        <span1 style="--i: 19">-</span1>
        <span1 style="--i: 20">T</span1>
        <span1 style="--i: 21">h</span1>
        <span1 style="--i: 22">e</span1>
        <span1 style="--i: 23">-</span1>
        <span1 style="--i: 24">W</span1>
        <span1 style="--i: 25">o</span1>
        <span1 style="--i: 26">r</span1>
        <span1 style="--i: 27">l</span1>
        <span1 style="--i: 28">d</span1>
        <span1 style="--i: 29">-</span1>
        <span1 style="--i: 30">-</span1>
      </div>
    </section1>
             
            </td>
            <td style="width:60%;align-items:center;">
           
           <center> 
                    <table style="width:80%;height:500px;background:#fff;color:#000;font-family: Times New Roman;letter-spacing:1.2px;border-radius:10px;">
                          <tr style="width:80%;align-items:center;">
                            <td style="text-align:left;font-size:30px;padding-left:30px;font-weight:400;"><b>Hiii, Hello This is Mano</b></td>
                          </tr>
                          <tr style="width:80%;align-items:center;">
                          <td style="text-align:left;font-size:25px;font-family: Times New Roman;padding:40px;">Welcome  all, Vizhithezhuthamilzha - After seeing this is word i know what will run on your mind.
                          Offcourse, suitable for that thought we still doesn't make anything, but whenever i updating this page my one & only thought is to share good things to all of you. Unfortunately i got 
                          failed in my every attempt, So i tried to make something new  Yes this is our new attempt after the thought of sharing good things we had taken one more step forward.
                          <br> Now, we are taking one step forward for helping others. Yes it is an platform for that - <b>#vizhithezhuthamilzha_exposure</b>  

                           </td>
                          </tr>

                    </table>   
          </center>
               
            </td>
          </tr>
        </table><br>
        <table style="border:5px solid #66ffcc; border-radius:15px; width:90%;background:#fff;color:#000;font-family: Times New Roman;letter-spacing:1.2px;height:600px;">
          <tr style=width:80%;>
            <td style="text-align:left;font-size:30px;padding-left:30px;font-weight:400;">
           <b>#Exposure</b> 
            </td>
            </tr>
            <tr>
            <td style="text-align:left;font-size:25px;font-family: Times New Roman;padding:40px;">
                Exposure - That word itself implies what it is,  sharing good things is an good, making others good things to share is an pleasure. we are pleasure to be an part of this world 
                likewise and  we are also so much to pleasure to be with unique talents, special qualities...etc., and also with problem of non-exposure of our special talents. <br><br> I know,
                we are hunger to expose our talents,things we discover and sharing our problems & some informations to the  world let their knowledge. All right it's common in this world 
                What you are trying to say? Yes it's common but still many talents are needed in this world and many talents stil innovating many must needed things to this world but due to 
                this kind of dumped society that can't able to reach their needed places, For solving this  we are taking an small initiative  to place the talents to their needed places.<br>
                <br>Here it's <B>#vizhithezhuthamilzha_exposure</B>  it's an platform for peoples to expose their news, innovations and displaying their own sport skils or their friends or what ever.
                <br><br>If u all think it's an usefull platform Support us if you like us  and share us also share with us. Thank u all for visiting visti again u need something from us.
            </td>
          </tr>
        </table>
        <br><br><br><br><br><br><br><br>
        <table style="width:100%; height:700px;">
        <tr><td style="font-family: 'Poppins', sans-serif;  font-size: 24px;
        font-weight: 600;
        letter-spacing: 1px; color:#fff;">Share with us:</td> <td style="font-family: 'Poppins', sans-serif;  font-size: 24px;
        font-weight: 600;
        letter-spacing: 1px; color:#fff;">About Us:</td></tr>
        <tr>
         <td style="width:50%; color:#fff; align-items: center; justify-content: center;">
          
          
          <section>
      <ol>
        <li>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/manfrom2001"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/vizhithezhuthamilzha/"
            ><i class="fa fa-instagram" aria-hidden="true"></i
          ></a>
        </li>
        <li>
          <a href="mailto:vizhithezhuthamilzha@gmail.com"
            ><i class="fa fa-envelope-o" aria-hidden="true"></i
          ></a>
        </li>
        <li>
          <a
            href="https://api.whatsapp.com/send?phone=919597361430&text=hlo mano"
            target="_blank"
            ><i class="fa fa-whatsapp" aria-hidden="true"></i
          ></a>
        </li>
      </ol>
       <ol>
         <li>
             <b style="font-size:23px;"> <i class="fa-regular fa-eye"></i>   <?php echo $total_visitors; ?>
         </li>

         <li>
               <i class="fa-solid fa-user-check"></i> <?php echo $user_count; ?> </b>  
              
         </li>
       </ol>
   </section> 
  <p style="color:#fff; text-align:center;bottom:20px; font-size:20px;" ></b>

 <b style="font-size:20px;">    </p>
  </td>
        <td style="width:50%; color:#fff; align-items: center; justify-content: center;"> 
        
        <center> <div class="container1">
      <div class="card">
        <div class="content">
          <h4>Mano</h4>
          <p>Web designer</p>
        </div>
        <img src="user_images\ckk-removebg-preview.png" />
      </div>
    </div></center>

        </td>
        </tr>
        
        
        </table>

        
      </div>
      </center>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script>
      let marker = document.querySelector("#marker");
      let list = document.querySelectorAll("ul li");

      function moveIndicator(e) {
        marker.style.left = e.offsetLeft + "px";
        marker.style.width = e.offsetWidth + "px";
      }

      list.forEach((Link) => {
        Link.addEventListener("mousemove", (e) => {
          moveIndicator(e.target);
        });
      });

      function activeLink() {
        list.forEach((item) => item.classList.remove("active"));
        this.classList.add("active");
      }

      list.forEach((item) => item.addEventListener("mouseover", activeLink));
    </script>

    <!---live Clock--->

    <script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<script
    src="https://kit.fontawesome.com/be7d96eed6.js"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
