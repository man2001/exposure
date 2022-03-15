<?php 
session_start();

require('connection.php');

/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */


  if(isset($_POST['updatepassword']))
   {
        

        $salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";
         
        $oldpassword = $_POST['oldpass'].$salt;

        $oldpassword = sha1($oldpassword);

        $ret =  mysqli_query($conn, "SELECT user_password FROM users WHERE user_password ='$oldpassword'");
         
        $qry = mysqli_fetch_array($ret);

        if($qry>0)
        {
          
          $userid = $_SESSION['user_id'];

          $salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";

          $newpassword = $_POST['newpass'].$salt;

          $newpassword = sha1($newpassword);

          $sql = mysqli_query($conn, "UPDATE users SET user_password ='$newpassword' WHERE user_id ='$userid'");

          if($sql)
          {
              echo "<script>alert('Your Password Changed Sucessfully')</script>";
          }
          else 
          {
            echo"<script>alert('Your Password Change Process was Unsucessfull Due to some techinical error pls try again later')</script>";
          }

         
           

       }

          else
          {
            /*$_SESSION['msg'] = "Old Password Doesn't match...!!!";*/
            echo "<script>alert('Old Password Doesn't match...!!!')</script>";

           
          }

   }


$userid = $_SESSION['user_id'];

 $query = "SELECT * FROM users where user_id = '$userid'";
$result = mysqli_query($conn,$query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);

  ?>


<html>

<head>

    <link  rel="icon"  type="image/x-icon"  href="vizhithezhuthamilzha_favi_icon.png"/>


    <title> Update Profile - <?php echo $_SESSION['user_name'];?> - Vizhithezhuthamilzha (Logged In)</title>

    

     <link rel="stylesheet" href="uploadee.css" />

     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script defer src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
       $(".EditButton").click(function(e){
         e.preventDefault();
         $.get($(this).attr("href"),function(data)
         {
           $("#result").html(data);
         });
         
       });


       $(".EditPicBtn").click(function(e){
         e.preventDefault();
         $.get($(this).attr("href"),function(data)
         {
           $("#Editpic").html(data);
         });
         
       });
    });




</script>

</head>

<body style="background-image: url('wooden.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;">

      <table style="width:100%; top:25px; height:130px; position: absolute; table-layout: auto;">
          <tr  style="width:100%;">
              <td style="width:10%;align-items:left;justify-content:space-between;right:300px;position:relative;">
                 <div class="popupee">
                     
                          <img  style="border-radius:50%; width:80px; height:80px; align:left;"  src="<?php echo "user_images/".$row['user_img'];?>">
                         <b style="font-family:Poppins; font-size: 1.3em; color:white;"><?php echo $row['user_name'];?></b>
                    
                 </div>
                              
              </td>

       
              <td style="width:25%; position:relative;">
                    <b style="font-family:Poppins; font-size: 1.3em; color:white;"></b> 
              </td>
              

              <td style="width:65%; align-items:center;position:relative;">
                      <center>

                          <div class="navigation">
      <ul>
        <li class="list ">
          <a href="welcome.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="text">Home</span>
          </a>
        </li>
        <li class="list ">
          <a href="uploadfiles.php">
            <span class="icon"
              ><ion-icon name="cloud-upload-outline"></ion-icon></span>
            <span class="text">Upload</span>
          </a>
        </li>
        <li class="list active">
          <a href="#">
            <span class="icon"
              ><ion-icon name="person-circle-outline"></ion-icon>
        </span>
            <span class="text">Profile</span>
          </a>
        </li>
        <li class="list">
          <a href="user-chat.php">
            <span class="icon"
              ><ion-icon name="paper-plane-outline"></ion-icon>
            </span>
            <span class="text">Message</span>
          </a>
        </li>
        <li class="list">
          <a href="logout.php">
            <span class="icon"
              >
            <ion-icon name="power"></ion-icon> 
            </span>
            <span class="text">Logout</span>
          </a>
        </li>
        <div class="indicator"></div>
      </ul>
    </div>

                      </center>
              </td>
          </tr>
      </table>
     <br><br><Br>

     
   <section>
     <div id="Editpic">
      <div class="container" id="result">
        <div class="contactprofile">
          <div>
              <center>

                    <img  style="border-radius:50%; width:180px; height:180px; align:left;"  src="<?php echo "user_images/".$row['user_img'];?>">
            </div></center>  
          </div>
       

        <div class="contactForm" >
          <h2><ion-icon name="person"></ion-icon>  View Profile Details</h2><br>
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $row['user_name'];?>" style="pointer-events: none;"/>
               <span>First Name</span>
              
            </div>
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $row['user_dob'];?>"  style="pointer-events: none;"/>
              <span>Date of Birth</span>
            </div>

            <div class="inputBox w50">
              <input type="email" name="" value ="<?php echo $row['user_email'];?>" style="pointer-events: none;"/>
              <span>Email Address</span>
            </div>
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $row['user_mob_no'];?>" style="pointer-events: none;"/>
              <span>Mobile Number</span>
            </div>

            <div class="inputBox w50">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <a href="user-edit.php" class="EditButton" style="background:#fff;height:50px;width:120px;color:black;text-align:center; justify-content:center; align-items:center; text-decoration:none;"> <br><b>Edit</b></a>
           

    </section>




<!----Change Password Box-->

<center>

       <div class="container2">
            <form action="" method="post" enctype="multipart/form-data" onSubmit="return valid();">
                <h5><ion-icon name="lock-closed-outline"></ion-icon> Change Password</h5>
                
                 <div class="inputBox-clay">
                    <span>
                                 
                                Enter Old Password</span>
                    <div class="box-clay">
                        <div class="icons"><ion-icon name="lock-open"></ion-icon></div>
                        <input type="password" name="oldpass" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
                    </div>
                </div>
                
                
                <div class="inputBox-clay">
                    <span>
                                 
                                 Enter New Password   </span>
                    <div class="box-clay">
                        <div class="icons"><ion-icon name="lock-closed"></ion-icon></div>
                        <input type="password" name="newpass" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
                    </div>
                </div>

                    <div class="inputBox-clay">
                    <span>Re-enter New Password</span>
                    <div class="box-clay">
                        <div class="icons"><ion-icon name="lock-closed"></ion-icon></div>
                        <input type="password" name="confirmpass" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
                    </div>
                </div>

                <div class="inputBox-clay">
                    <div class="box-clay">
                      
                        <input class="inputclayee" type="submit" value="Change" name="updatepassword" >
                    </div>
                </div>
            </form>
        </div>

</center>
<!--C-->
      

 <div class="show">
                                <div class="overlay"></div>
                                    <div class="img-show">
                                                 <span><ion-icon name="close-circle-outline"></ion-icon></span>
                                                 <img src="">
                                     </div>
                              </div> 



     
<!--Image Popup-->



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function () {
    "use strict";
    
    $(".popupee img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
</script>





<!--Nav Bar --->



<script>
      const list = document.querySelectorAll(".list");
      function activelink() {
        list.forEach((item) => item.classList.remove("active"));
        this.classList.add("active");
      }
      list.forEach((item) => item.addEventListener("click", activelink));
    </script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>


  


  
     
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </html>