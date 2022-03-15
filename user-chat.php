<?php 
session_start();

require('connection.php');

/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */
$user_id = $_SESSION['user_id'];

 if (isset($_POST['submit'])) {
     
     $user_message = $_POST['user_message'];
     $user_message = stripcslashes($user_message);
     $user_message = mysqli_real_escape_string($conn, $user_message);
     $admin_email = "mangang2001@gmail.com";
     $sender = "From: vizhithezhuthamilzha@gmail.com";
     $sql = "INSERT INTO `messages` (user_id,user_message,admin_replay)  VALUES ('$user_id','$user_message','_')";
$qry = mysqli_query($conn,  $sql);

if(mail($admin_email,$user_id,$user_message,$sender))
{
    echo "sent";
}
else
{
    echo "not sent";
}
if( $qry) 
{
echo ""; 
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

  
  ?>


<html>

<head>

      <link  rel="icon"  type="image/x-icon"  href="vizhithezhuthamilzha_favi_icon.png"/>


    <title> Chat with Admin - <?php echo $_SESSION['user_name'];?> - Vizhithezhuthamilzha (Logged In)</title>

   

     <link rel="stylesheet" href="uploadee.css" />

     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script defer src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<!--Chat Box Styles--->

<style>
   .messeger {
  max-width: 500px !important;
  margin: auto;
  margin-top: 4%;
  font-family: sans-serif;
  letter-spacing: 0.5px;
}

.img {
  border-radius: 50%;
  height: 50px;
  width: 50px;
}

.message-header {
  border-top: 1px solid #ccc;
  width: 100%;
  height: 80px;
  border-left: 1px solid #ccc;
  display: inline-block;
  background-color: #007bff;
  align-items: center;
  justify-content: center;
  border-radius:5px;
}

.message-header-img {
  border-radius: 50%;
  width: 40px;
  margin-left: 5%;
  margin-top: 12px;
  float: left;
}

.message-active {
  width: 120px;
  float: left;
  margin-top: 10px;
}

.message-active h4 {
  font-size: 25px;
  margin-left: 10px;
  color: #fff;
}

.message-active h6 {
  font-size: 12px;
  margin-left: 10px;
  line-height: 2px;
  color: #fff;
}

.message-chat-page {
  padding: 0 0 50px 0;
  border-radius:10px;
  
}

.message-inbox {
  border: 1px solid #ccc;
  overflow: hidden;
  padding-bottom: 30px;
  border-radius:5px;
  background-color:#fff;
}

.message-chats {
  padding: 30px 15px 0 25px;
}

.message-page {
  height: 516px;
  overflow-y: auto;
}

.message-received-chats-img {
  display: inline-block;
  width: 20px;
  float: left;
 
}

.message-received-user {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
}

.message-received-user-inbox {
  width: 56%;
  margin-right:25%;
}

.message-received-user-inbox p {
  background: #efefef none repeat scroll 0 0;
  border-radius: 10px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.message-others-chats {
  overflow: hidden;
  margin: 36px 30px;
}

.message-others-user p {
  background: #007bff none repeat scroll 0 0;
  color: #fff;
  border-radius: 10px;
  font-size: 14px;
  margin: 0;
  color: #fff;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.message-others-user {
  float: left;
  width: 56%;
  margin-left: 29%;
}

.message-others-chats-img {
  display: inline-block;
  width: 52px;
  float: right;
  
}

.message-bottom {
  position: relative;
  height: 55px;
  background-color:#007bff;
  border-radius:5px;
  border-bottom: 1px solid #ccc;
   border-right: 1px solid #ccc;
}


.input-group {
  float: right;
  margin-top: 13px;
  margin-right: 20px;
  outline: none !important;
  border-radius: 2px;
  width: 100%;
  background-color: #fff;
}
.form-control {
  border: none !important;
  border-radius: 5px !important;
}

.input-group-text {
  background: transparent !important;
  border: none !important;
}

.input-group .fa {
  color: #007bff;
  float: right;
}

.message-bottom-icons {
  float: left;
  margin-top: 17px;
  width: 30% !important;
  margin-left: 22px;
}

.message-bottom-icons .fa {
  color: #000;
  padding: 5px;
}

.form-control:focus {
  border-color: none !important;
  box-shadow: none !important;
  border-radius: 5px;
  
}

 .inputBox input[type="submit"] {
  position: relative;
  cursor: pointer;
  background: #fff;
  color: #000;
  border: none;
  max-width: 59px;
  max-height:35px;
  padding: 12px;
  font-size: 15px;
  display:flex;
  
  
}

 .inputBox input[type="submit"]:hover {
  background: #ff568c;
  color: white;
  font-weight: 1.2em;
}

div::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}


</style>

</head>

<body style="background-image: url('wooden.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;">

      <table style="width:100%; top:25px; height:130px; position: absolute; table-layout: auto;">
          <tr  style="width:100%;">
              <td style="width:10%;align-items:left;justify-content:space-between;right:300px;position:relative;">
                 <div class="popupee">
                     
                         <img  style="border-radius:50%; width:80px; height:80px; align:left;"  src="<?php echo "user_images/".$_SESSION['user_img'];?>">
                         <b style="font-family:Poppins; font-size: 1.3em; color:white;"><?php echo $_SESSION['user_name'];?></b> 
                    
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
        <li class="list">
          <a href="uploadfiles.php">
            <span class="icon"
              ><ion-icon name="cloud-upload-outline"></ion-icon></span>
            <span class="text">Upload</span>
          </a>
        </li>
        <li class="list">
          <a href="update-profile.php">
            <span class="icon"
              ><ion-icon name="person-circle-outline"></ion-icon>
        </span>
            <span class="text">Profile</span>
          </a>
        </li>
        <li class="list active">
          <a href="#">
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
     <br><br><Br><br><br>


      <center>
      <div class="messeger">
        <div class="message-header">
          <div class="message-header-img">
            
                    <img class="img" src="user_images\ckk.jpg"/>

          </div>
          <div class="message-active">
            <br><h4>Mano</h4>
            <h6 style="font-size=0.5em; font-weight:50;">3 hours ago...</h6>
            <br />
          </div>
        </div>


        <div class="message-chat-page">
          <div class="message-inbox">
            <div class="message-chats">
              <div class="message-page">

                <?php 
        $count=1;
           $sel_query="Select * from messages where user_id ='$user_id'";
               $result = mysqli_query($conn,$sel_query);

               if(mysqli_affected_rows($conn)==0){ echo "Start Chat"; }

               else{
              while($row = mysqli_fetch_assoc($result)) { ?>

          


                 <div class="message-others-chats">
                  <div class="message-others-user">
                    <p><?php echo $row['user_message']; ?></p>
                  </div>

                  <div class="message-others-chats-img">
                    <img class="img" src="<?php echo "user_images/".$_SESSION['user_img'];?>" />
                  </div>
                </div>


                <div class="message-received-chats">
                  <div class="message-received-chats-img">
                    <img class="img" src="user_images\ckk.jpg" />
                  </div>

                  <div class="message-received-user">
                    <div class="message-received-user-inbox">
                      <p>
                       <?php echo $row['admin_replay']; ?>
                      </p>
                    </div>
                  </div>
                </div>
<?php
             $count++; }
             }
          ?>
              
              </div>
            </div>
          </div>
          
          <div class="message-bottom">
          <table style="width:100%; table-layout:auto; table-align:center; table-bottom:5px;">
          <tr style="height:2px;"></tr>
        <tr style="width:100%;">
          
         <td style="width:15%; color:white; font-size:35px; text-align:center; font-weight:2.5em; ">
          <center><ion-icon name="camera" style="cursor:pointer;"></ion-icon></center>
          </td>
          <td style="width:60%; align-items:center; justify-content:center; text-align:center; ">
          
        <form action="" method="post" enctype="multipart/form-data" onSubmit="return valid();">
           <center><input
                type="text"
                class="form-control"
                placeholder="Message...."
                style=" float: right; margin-top: 0px; margin-right: 0px; outline: none !important; border-radius: 2px; width: 100%; background-color: #fff;height:40px;"
                name="user_message"
                value=""
               /></center>
              
              </td>
              <td style="width:25%; justify-content:center; align-items:center;">
              <center> <div class="inputBox">

          <input type="submit" name="submit" value="Send"/><center>
          </form>
</div>
</td>
</tr>
</table>
        
        </div>
      </div>
    </center>

    


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