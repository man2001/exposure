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
        left:390px;
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
        
        
  .proe-container {
        position: relative;
        width: 100%;
        max-width: 1100px;
        margin: 20px;
        height: 600px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        left:350px;
      }

      .proe-container .proe-formBx {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .proe-container .proe-formBx form {
        position: relative;
        width: 100%;
        padding: 0 0 0 75px;
      }

      .proe-container .proe-formBx form h3 {
        color: #000;
        font-weight: 500;
        font-size: 2em;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 40px;
      }

      .proe-container .proe-formBx form .inputBox {
        position: relative;
        margin-bottom: 40px;
      }

      .proe-container .proe-formBx form .inputBox:last-child {
        margin-bottom: 0px;
      }

      .proe-container .proe-formBx form .inputBox input,
      .proe-container .proe-formBx form .inputBox textarea {
        position: relative;
        background: transparent;
        outline: none;
        border: none;
        width: 100%;
        color:  #4d4d4d;
        padding-bottom: 10px;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: 300;
        border-bottom: 2px solid rgba(255, 255, 255, 0.5);
      }

      .proe-container .proe-formBx form .inputBox textarea {
      }

      .proe-container .proe-formBx form .inputBox input[type="submit"] {
        background: #fff;
        padding: 8px 20px;
        margin-top: -10px;
        width: 100px;
        cursor: pointer;
        background: #0f3959;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        border: none;
        text-transform: uppercase;
        letter-spacing: 4px;
      }

      .proe-container .proe-formBx form .inputBox input[type="submit"]:focus {
        background: #1bfaad;
        color: #111;
      }

      .proe-container .proe-formBx form .coloo span {
        position: absolute;
        left: 0;
        font-size: 22px;
        font-weight: 400;
        display: inline-block;
        pointer-events: none;
        letter-spacing: 1px;
        color: #404040; 
        padding: 20px;
        transition: all 0.2s;
      }

      .proe-container .proe-formBx form span1 {
        position: absolute;
        left: 100px;
        font-size: 20px;
        font-weight: 400;
        display: inline-block;
        pointer-events: none;
        letter-spacing: 1px;
        color: rgba(255, 255, 255, 0.5);
        padding: 20px;
        transition: all 0.2s;
      }

      .proe-container .proe-imgBx {
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
        justify-content: center;
        align-items: center;
      }

      .proe-container .proe-imgBx:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #0f3959;
        transform-origin: bottom;
        transform: skewX(-25deg) translateX(10%);
      }

      .proe-container .proe-imgBx img {
        position: absolute;
        bottom: 90px;
        max-height: 85%;
        max-width: 75%;
        left: 65px;
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
            <td style="z-index: 10000;align-items:center;">
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
                <li>
                   <a href="vizhithe-innov.php">
                    <ion-icon name="create-outline"></ion-icon>
                  </a>
                </li>
               
                <li class="active">
                  <a href="#">
                    <ion-icon name="tennisball-outline"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="Login_">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                  </a>
                </li>
                <div id="marker"></div>
              </ul>
            </td>
          </tr>
        </table><br><br><br><br><br><br /><br /><br /><br /><br /><br /><br />  
        
       <table style="width:80%; background:#fff;border-radius:10px;height:600px;color:#000;">
          <tr style="width:100%;">
            <td style="width:65%;padding:5%;">
            <h4 style="font-size:30px;">  Sports</h4>

            <p style="font-size:22px;letter-spacing:1.2px;font-family: 'Times New Roman', Times, serif;">Sports - After seeing this word, what do you think about this... Is like any sports news uploading or something else. But it is  not that actually what thing running on your mind, Yes it's different. <br> Vizhithezhuthamilzha - what ever you think about 
          this but it's actual thought is to share good thoughts, now we are taking an one step forward. By sharing good things we can able to do only some improvement thinking but here it's totally different.  Yes it's an page for u to upload your own thoughts and make them explore, likewise we 
        are providing to upload sports persons ....<br> Now days there is an many people are trying to chase their dreams our dream is to help those people and allow their thoughts to explore in our platform. In Sports we are allowing Peoples to Upload their friends or their own details to explore themselves, by exploring here may be some needed persons 
      may able to contact them, by that contact it may be help for those peoples.. is the only thought for us for creating this platform.<br> <b>Think about this and make use of this opportunity and explore yourself</b></p>
          </td>
            <td style="width:35%; align-items:center; justify-content:center">
            <img src="sports.png" style="height:350px;width:450px;">
          </td>
          </tr>
        </table>   
       


</p><br><br><br><br><br><br><br><br><br><br><h2>Sport Persons</h2><br><br><br><br><br><br><br>




     <center><table style="width:100%;table-align:center;justify-content:center;align-items:center;right:500px;">

       <?php 
        $count=1;
           $sel_query="SELECT * FROM sports INNER JOIN users ON users.user_id = sports.user_id";
               $result = mysqli_query($conn,$sel_query);
               
              
               if(mysqli_affected_rows($conn)==0){ echo "No Sports Got Uploaded"; }

               else{
              while($row = mysqli_fetch_assoc($result)) { ?>
     
     <tr style="width:100%; ">
     <td style="width:100%; padding-bottom:200px;">
      <div class="proe-container">
      <div class="proe-formBx">
        <form>
          <h3 style=" border-left: 6px solid #000;
  padding-left: 6px;"><?php echo $row['pers_name']; ?></h3>
          <table
            style="
              width: 100%;
              align-items: center;
              justify-content: center;
              border: 1px solid #000;
              color: #333;
              padding: 20px;
              font-size: 20px;
              font-weight: 400;
            "
          >
            <tr style="border: 1px solid #000; padding: 100px; padding: 5px">
              <td style="padding: 5px">Sport :</td>
              <td style="padding: 5px"><?php echo $row['pers_sports']; ?></td>
            </tr>
            <tr style="border: 1px solid #000; padding: 5px">
              <td style="padding: 5px">Role:</td>
              <td style="padding: 5px"><?php echo $row['pers_role']; ?></td>
            </tr>
            <tr style="border: 1px solid #000; padding: 5px">
              <td style="padding: 5px">Age:</td>
              <td style="padding: 5px"><?php echo $row['pers_age']; ?></td>
            </tr>

            <tr style="border: 1px solid #000; padding-bottom: 10px">
              <td style="padding: 2px">Person Played Level:</td>
              <td style="padding: 2px"><?php echo $row['pers_played_lvl']; ?></td>
            </tr>
            <tr>
              <td>    </td>
              <td style="space-between: 50px;padding-top: 30px">
                <a
                  href="mailto:<?php echo $row['pers_email']; ?>"
                  style="text-decoration: none; color: #808080"
                  ><i class="fa-regular fa-envelope-open"></i></a
                >&nbsp; &nbsp;

                <a
                  href="https://www.instagram.com/<?php echo $row['pers_insta']; ?>/"
                  style="text-decoration: none; color: #808080"
                >
                  <i class="fa-brands fa-instagram"></i></a
                >&nbsp; &nbsp;

                <a
                  href="https://www.twitter.com/<?php echo $row['pers_twitter']; ?>/"
                  style="text-decoration: none; color: #808080"
                  ><i class="fa-brands fa-twitter"></i>
                </a>
              </td>
            </tr>
          </table>
          <br />
         
        </form>
      </div>

      <div class="proe-imgBx"><img src="<?php echo "sports/".$row['pers_img'];?>" /></div>
    </div>
     </td>
     </tr>
      <?php
             $count++; }
             }
          ?>
     </table></center>  
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
  </body>
</html>
