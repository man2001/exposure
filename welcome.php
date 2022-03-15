<?php 
session_start();

require('connection.php');

/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */
$userid = $_SESSION['user_id'];

 $query = "SELECT * FROM users where user_id = '$userid'";
$result = mysqli_query($conn,$query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);

  ?>


<html>

<head>
   
     <link  rel="icon"  type="image/x-icon"  href="vizhithezhuthamilzha_favi_icon.png"/>

    <title> Welcome <?php echo $row['user_name'];?>..! - Vizhithezhuthamilzha (Logged In)</title>

   

     <link rel="stylesheet" href="uploadee.css" />

     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script defer src="script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
       $(".InnovButton").click(function(e){
         e.preventDefault();
         $.get($(this).attr("href"),function(data)
         {
           $("#result").html(data);
         });
         
       });


       $(".sportButton").click(function(e){
         e.preventDefault();
         $.get($(this).attr("href"),function(data)
         {
           $("#result").html(data);
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
        <li class="list active">
          <a href="#">
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
     <br><br><br><br><br>

     <div class="dropdown" style="left:100px;">
           <input type="text" class="textBox" placeholder="Upload Category" readlonly>
            <div class="option">
               <a href="welcome.php" style="text-decoration: none;"><div class="dropee" onclick="show('News')"><p style="color:#000;"><ion-icon name="newspaper-outline"></ion-icon> News</p></div></a>
               <a href="innov-viewsub.php" style="text-decoration: none;" class="InnovButton"> <div class="dropee" onclick="show('Innovations')"><p style="color:#000;"><ion-icon name="create-outline"></ion-icon> Innovations</p></div></a>
               <a href="sport-viewsub.php" style="text-decoration: none;" class="sportButton"> <div  class="dropee" onclick="show('Sports')"><p style="color:#000;"><ion-icon name="tennisball-outline"></ion-icon> Sports</p></div></a>
            </div>
        </div>

      <div class="seco" id="result">
      <div class="glassbox" >
        <h2>Your News Uploaded</h2>

        <?php 
        $count=1;
           $sel_query="Select * from news where user_id ='$userid'";
               $result = mysqli_query($conn,$sel_query);

               if(mysqli_affected_rows($conn)==0){ echo "<p style='color:#fff;'>No Records Found</p>"; }

               else{
              while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="glasslist">
          <div class="imgBx">
            <img src="<?php echo "news/".$row['news_img'];?>" />
          </div>
          <div class="content">
          
          <a href="newspost-view.php?news_id=<?php echo $row["news_id"]; ?>"><h2 class="view"><i class="fa-solid fa-pen-nib"></i></h2></a>     <a href="newspost-delete.php?news_id=<?php echo $row["news_id"]; ?>" onclick="return myConfirm();"><h2 class="del"><i class="fa-regular fa-trash-can"></i></h2></a> 
          
            <h2 class="rank"><small>#</small> <?php echo $row['news_id']; ?></h2>

            <h4 style="font-size:23px;"><?php echo $row['news_title']; ?></h4>
            <p><i class="fa-regular fa-heart"></i>&nbsp<?php echo $row['news_likes']; ?>&nbsp &nbsp &nbsp &nbsp     <i class="fa-regular fa-eye"></i> &nbsp &nbsp &nbsp &nbsp  Uploaded On:&nbsp &nbsp <?php echo $row['news_uploaded_time']; ?></p>
           </div>
        </div>

        <?php
             $count++; }
             }
          ?>
      </div>
      </div>
   

   
    


    <br>
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



<!--Delete Confirm--->
<script>
    function myConfirm() {
  var result = confirm("Want to delete?");
  if (result) {
   return true;
  } else {
   return false;
  }
}
</script>



<!---Dropdown--->
<script>
    function show(anything)
    {
        document.querySelector('.textBox').value = 
        anything;
    }

    let dropdown = document.querySelector('.dropdown');
    dropdown.onclick =function()
    {
        dropdown.classList.toggle('activate');
    }
</script>



 
  
</html>