<?php 
require('connection.php');
session_start();

error_reporting(0);

if (isset($_SESSION['user_id'])) {
    header("Location: Login_.php");
}

if (isset($_POST['submit'])) {
	$user_email = $_POST['user_email'];
    $salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";
	$user_password = ($_POST['user_password'].$salt);
    $user_password = sha1($user_password);

    $user_email = stripcslashes($user_email);
    $user_password = stripcslashes($user_password);
    $user_email = mysqli_real_escape_string($conn, $user_email);
    $user_passowrd = mysqli_real_escape_string($conn, $user_password);

	$sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
	$result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
	if ($result->num_rows > 0 && is_array($row)) {
		
	
         
         $user_id = $row['user_id'];
         $_SESSION['login_user']=$user_id;
         $_SESSION['user_id'] = $row['user_id'];
         $extra="<script>alert('Your Session Id : $_SESSION['user_id']') </script>";
         
         echo "<script>window.location.href='".$extra."'</script>";

	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
     

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     
    <title>Login - Vizhithezhuthamilzha</title>
    <link rel="icon" href="vizhithezhuthamilzha_favi_icon.png">


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="kr.css" />
    <link rel="stylesheet" href="glslf.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(window).on("load", function () {
        $(".preloader").addClass("complete");
      });
    </script>

  <style>

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

      
      h2 {
        position: relative;
        font-size: 2.5em;
        font-family:Times new roman;
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
        left:450px;
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

  </style>
    
  

    
  </head>

  <body style="
      background-image: url('wooden.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    ">
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
      
        <table style="color: white; position: absolute; top: 10px; width: 100%; table-layout: auto;padding-bottom:30px;">
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
                <li class="active">
                  <a href="#">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                  </a>
                </li>
                <div id="marker"></div>
              </ul>
            </td>
          </tr>
        </table>  
       
    <section>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="logi-container">
          <div class="form">
            <h3 style="text-align:left;">Login Form</h3>
            <form action="" method="post" enctype="multipart/form-data" onSubmit="return valid();">
              <div class="inputbox">
                <input type="email" placeholder="User Email" name="user_email" title="Please Fill User Email for Login " value="<?php echo $user_email ?>" required/>
              </div>

              <div class="inputbox">
                <input type="password" placeholder="password" name="user_password" title="Please Fill Password for Login"  value="<?php echo $_POST['user_password'] ?>" required/>
              </div>

              <div class="inputbox" style="align-items:left;justify-content:left;left:-20px;text-align:left;">
                <input type="submit" value="Login" name="submit" />
              </div>

              <p class="forget">Forgot password ? <a href="forgot-password.php">Click Here</a></p>

              <p class="forget">
                Don't have an account ? <a href="sign_up.php">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>  

    <table style="width:100%;height:100px;bottom:0;color:#fff; border:1px solid #fff;">
      <tr>
        <td>* You wants to register with us for uploading your contents</td>
      </tr>
    </table>

  </body>
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
</html>
