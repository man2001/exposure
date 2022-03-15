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

     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
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
        font-size: 2.5em;
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
        left:290px;
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
        background: #ff1aff;
        box-shadow: 0 0 15px #ff1aff, 0 0 30px #ff1aff, 0 0 45px #ff1aff, 0 0 60px #ff1aff;
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
  height: 430px;
  transition: 0.5s;
}

.container1 .card:hover img {
  left: 71%;
  height: 580px;
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

/*Rotating Cube*/


  .cube {
        position: relative;
        width: 200px;
        height: 200px;
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
        transform: rotateY(calc(90deg * var(--i))) translateZ(100px);
        display:flex;
        justify-content:center;
        align-items:center;
        transform-style:preserve-3d;
      }
      

      .cube div span1 h1
      {
         position:absolute;
         font-size:7em;
         color:#fff;
         transform: translateZ(50px);
      }
      
       .cube div span1 h1:nth-child(1)
       {
         transform: translateZ(0) translateY(20px);
         color: rgba(0,0,0,0.1);
         filter:blur(2px);
       }


      .cube-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        background: #222;
        transform: rotateX(90deg) translateZ(100px);
      }

      .cube-top::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        background: #0f0;
        transform: translatez(-280px);
        filter: blur(20px);
        box-shadow: 0 0 80px rgba(0, 255, 0, 0.2),
          0 0 100px rgba(0, 255, 0, 0.4), 0 0 200px rgba(0, 255, 0, 0.6),
          0 0 300px rgba(0, 255, 0, 0.8), 0 0 400px rgba(0, 255, 0, 1);
      }


/* Innovation Blog*/
.innov-blog-post {
  width: 100%;
  max-width: 98rem;
  padding: 5rem;
  background-color: #fff;
  box-shadow: 0 1.4em 8em rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  border-radius: 0.8rem;
}

.innov-blog-post_img {
  min-width: 35rem;
  max-width: 35rem;
  height: 30rem;
  transform: translateX(-8rem);
  position: relative;
}

.innov-blog-post_img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 0.8rem;
}

.innov-blog-post_img::before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  box-shadow: 0.5rem 0.5rem 3rem 1px rgba(0, 0, 0, 0.05);
  border-radius: 0.8rem;
}

.innov-blog-post_date span {
  display: block;
  color: rgba(0, 0, 0, 0.05);
  font-size: 1.6rem;
  font-weight: 600;
  margin: 0.5rem 0;
}

.innov-blog-post_title {
  font-size: 2rem;
  margin: 1.5rem 0 2rem;
  text-transform: uppercase;
  color: #4facfe;
  text-align:left;
}

.innov-blog-post_text {
  margin-bottom: 3rem;
  font-size: 1.4rem;
  font-weight:400;
  letter-spacing:1.5px;
  padding:10px;
  text-align:left;
  color: rgba(0, 0, 0, 0.7);
   text-overflow: ellipsis;
}

.innov-blog-post_read {
  display: inline-block;
  padding: 0.8rem 1.7rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 1.2rem;
  color: #fff;
  background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
  border-radius: 0.8rem;
  text-decoration: none;
}

.innov-blog-post_read:hover {
  background-image: linear-gradient(to right, #00f2fe 0%, #4facfe 100%);
}

@media screen and (max-width: 868px) {
  .innov-blog-post {
    max-width: 70rem;
  }
}

@media screen and (max-width: 868px) {
  .innov-blog-post {
    padding: 2.5rem;
    flex-direction: column;
  }
  .innov-blog-post_img {
    min-width: 100%;
    max-width: 100%;
    transform: translate(0, -8rem);
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
      
        <table style="color: white; position: absolute; top: 0; width: 100%; table-layout: auto;">
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
                 <li>
                  <a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li>
                 <a href="vizhithe-news.php">
                    <ion-icon name="newspaper-outline"></ion-icon>
                  </a>

                </li>
                <li class="active">
                   <a href="#">
                    <ion-icon name="create-outline"></ion-icon>
                  </a>
                </li>
               
                <li>
                  <a href="vizhithe-sport.php">
                    <ion-icon name="tennisball-outline"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="Login_.php">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                  </a>
                </li>
                <div id="marker"></div>
              </ul>
            </td>
          </tr>
        </table><br><br><br><br><br><br><br><br><br><br>
        <table style="width: 100%; height: 700px;">
          <tr>



          

            <td style="width:40%;">
             
             <br><br><br><br>
            <center>

 <div class="cube">
                  <div class="cube-top"></div>
                  <div>
                    <span1 style="--i: 0">
                    <h1><i class="fa-solid fa-laptop"></i></h1>
                    <h1><i class="fa-solid fa-laptop"></i></h1>
                    </span1>
                     <span1 style="--i: 1">
                    <h1><i class="fa-solid fa-satellite-dish"></i></h1>
                    <h1><i class="fa-solid fa-satellite-dish"></i></h1>
                    </span1>
                     <span1 style="--i: 2">
                    <h1><i class="fa-solid fa-square-rss"></i></h1>
                    <h1><i class="fa-solid fa-square-rss"></i></h1>
                    </span1>
                     <span1 style="--i: 3">
                    <h1><i class="fa-solid fa-blog"></i></h1>
                    <h1><i class="fa-solid fa-blog"></i></h1>
                    </span1>
                  </div>
                </div>
                
              
             
       </center>         
            </td>
           

             <td style="width:60%;">
               <center> 
                    <table style="width:80%;height:500px;background:#fff;color:#000;font-family: Times New Roman;letter-spacing:1.2px;border-radius:10px;">
                          <tr style="width:80%;align-items:center;">
                            <td style="text-align:left;font-size:30px;padding-left:30px;font-weight:400;"><b>What is Innovations?</b></td>
                          </tr>
                          <tr style="width:80%;align-items:center;">
                          <td style="text-align:left;font-size:25px;font-family: Times New Roman;padding:40px;">I think innovations are must needed in this world, innovations made this world better by better in day to day 
                          but in this modern world many innovations has been innovating by many peoples but the  exposing oppurtunity  for that innovation is very lesser.<br><br>
                         I think this is very bad in the context of our community, as an individual I can not solve this problem but I can do some help to get those people to express themselves, for the sole reason that I created this page. I do not know how many people this will help, but I think I would have succeeded if someone from this page had had a chance  <br><br>Support us if you like us  and share us also share with us <b>#vizhithezhuthamilzha_exposure</b>  

                           </td>

                          
                          </tr>

                    </table>   
          </center>
            </td>


          </tr>
        </table><br><br><br><br><br><br<br><br> <h2>Your Innovations are Exposure in here</h2><br>

           <?php 
        $count=1;
           $sel_query="SELECT * FROM innovation INNER JOIN users ON users.user_id = innovation.user_id";
               $result = mysqli_query($conn,$sel_query);
               
              
               if(mysqli_affected_rows($conn)==0){ echo "No Innovations Uploaded"; }

               else{
              while($row = mysqli_fetch_assoc($result)) { ?>
<br><br><br><br><br><br><br><br><br><br><br>
      <div class="innov-blog-post">
      <div class="innov-blog-post_img">
        <img src="<?php echo "innovations/".$row['innov_pro_img'];?>" alt="nivee" />
      </div>

      <div class="innov-blog-post_info">
        
        
        <h1 class="innov-blog-post_title"><b><?php echo $row['innov_title']; ?></b></h1>
        <p class="innov-blog-post_text" style=" text-overflow: ellipsis;"><?php echo $row['innov_description']; ?></p>
        <br><p class="innov-blog-post_text" style=" text-overflow: ellipsis;"><b style="text-align:left; align-items:left; justify-content:left;">Your Innovation is Solution for:</b><?php echo $row['innov_solution']; ?></p>
        <a href="innov-view(out).php?innov_id=<?php echo $row["innov_id"]; ?>" class="innov-blog-post_read" style="align-items:right; justify-content:right;">Read more</a>
        <a href="download.php?file=<?php echo "innovations/".$row['innov_docu'];?>" class="innov-blog-post_read" style="align-items:right; justify-content:right;"><ion-icon name="download-outline"></ion-icon>Download</a>
        <br><br><br>
        <table style="width:100%;">
          <tr style="width:100%;">
          <td style="width:10%;"><b>Posted By:</b></td>
          <td style="width:5%; align-items:left; justify-content:left;"> <img src="<?php echo "user_images/".$row['user_img'];?>" alt="<?php echo $row['user_name']; ?>" style="width:40px; height:40px;border-radius:50%;bottom:100px;"/></td>
          <td style="width:25%; text-align:left;"> <?php echo $row['user_name']; ?></td>
          <td style="width:60%; text-align:right;"> <?php echo $row['innov_registered_time']; ?></td>
        </tr>
        </table>

      </div>
    </div>
    <?php
             $count++; }
             }
          ?>


        <br><br><br><br><br>
        
        
      
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
