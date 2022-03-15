<?php 
require('connection.php');



if (isset($_POST['submit'])) {
	$user_email = $_POST['user_email'];
    $user_dob = $_POST['user_dob'];

    

    $user_email = stripcslashes($user_email);
    $user_dob = stripcslashes($user_dob);
    
    $user_email = mysqli_real_escape_string($conn, $user_email);
    $user_dob = mysqli_real_escape_string($conn, $user_dob);
   

	$sql = "SELECT user_email,user_dob,user_password FROM users WHERE user_email='$user_email' AND user_dob='$user_dob'";
	$result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
	if ($result->num_rows > 0) {
		
	
        $forgot_email = "$user_email";
     $sender = "From: vizhithezhuthamilzha@gmail.com";
      $salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";
	$user_password = ($row['user_password'].$salt);
    $user_password = sha1($user_password);

        if(mail($forgot_email,$user_dob,$user_password,$sender))
         
         {
             echo "<script>alert('Your Password Sent Your Mail Id')</script>";
           $extra="Login_.php";
         echo "<script>window.location.href='".$extra."'</script>";
         
         }
         else
         {
            echo "<script>alert('Sorry Something Went wrong...!!! Please Try again Later..!!')</script>"; 
         }
         
         

	} else {
       
		echo "<script>alert('Woops! Your Email Id Doesn't registered with us...!!!')</script>";
        
    }
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
     

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     
    <title>Forgot Password - Vizhithezhuthamilzha</title>
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
      
       
       
    <section>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="logi-container">
          <div class="form">
            <h3 style="text-align:left;">Change Password</h3>
            <form action="" method="post" enctype="multipart/form-data" onSubmit="return valid();">
              <div class="inputbox">
                <input type="text" placeholder="User Mobile Number" name="user_mob_no" title="Please Fill User Mobile Number for Reset Your Password" value=" " required/>
              </div>
              <br />
              <b style="color: white; font-family: Poppins; font-size: 1em;text-align:left;">
                <label for="dob" style="text-align:left;"> User  Date of Birth</label>
              </b>

              <div class="inputbox">
                <input type="date" placeholder="dob" name="user_dob" title="Please Fill Your Date of Birth for Reset Your Password"  value="" required/>
              </div>

              <div class="inputbox" style="align-items:left;justify-content:left;left:-20px;text-align:left;">
                <input type="submit" value="Send" name="submit" />
              </div>

              <p class="forget">For Login <a href="#">Click Here</a></p>

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
  
</html>
