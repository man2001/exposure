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


    <title> Upload Files - <?php echo $_SESSION['user_name'];?> - Vizhithezhuthamilzha (Logged In)</title>

   

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
        <li class="list ">
          <a href="welcome.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="text">Home</span>
          </a>
        </li>
        <li class="list active">
          <a href="#">
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
     <br><br><Br><br><br><br><br><Br><br><br><br>
    <center>

      <nav>
            <div id="small-marker"></div>
            <a href="uploadfiles.php">News</a>
             <a href="innov-upload.php" class="InnovButton">Innovation</a>
              <a href="sport-upload.php" class="sportButton">Sport</a>
        </nav>
</center>

 <section>
        <div class="formi-container" id="result">
            <div class="formi-contactinfo">
                <div>
                    <h2></h2>
                    <center><p style='display:flex;color:white'> <img id="output" src="#" style="height:150px;width:250px;border-radius:5%;align-items:center;justify-content:center;" alt="Your News Image" /></p></center><br>
                     
        
       
       
   
                </div>
            </div>

             <div class="formi-contactForm">
               <form  action="upload-files.php" method="POST" enctype="multipart/form-data" onSubmit="return valid();">
                 <h2>Upload Your News</h2>
                 <div class="formi-formBox">
                     <div class="inputBox w100">
                         
                        <input type="text" name="news_title" required>
                        <span>News Title</span>

                     </div>

                     <div class="inputBox w50">
                         
                        
                        <span>News Thumbnail image:</span>

                     </div>

                     <div class="inputBox w70">
                         
                        <input type="file" name="news_img" onchange="loadFile(event)" accept=".jpg ,.png ,.jpeg ,.gif" required>
                        

                     </div>
                     

                     <div class="inputBox w100">
                         
                       <textarea name="news_description" required></textarea>
                        <span>News Description....</span>
                        
                     </div>

                     <div class="inputBox w50">
                         
                        
                        <span>News Document:</span>

                     </div>

                     <div class="inputBox w70">
                         
                        <input type="file" name="news_document"  accept=".pdf ,.doc ,.docx" >
                        

                     </div>

                     <div class="inputBox w100">
                         
                      <input type="submit" value="Send" name="upload-news">
                        
                     </div>

  </form>
                 </div>
             </div>

        </div>
        </section>


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

<!---Mini Moving nav--->
  
    <script type="text/javascript">
           var marker = document.querySelector('#small-marker');
           var item = document.querySelectorAll('nav a');

           function indicator(e)
           {
               marker.style.left = e.offsetLeft+"px";
               marker.style.width = e.offsetWidth+"px";

           }

           item.forEach(link => {
               link.addEventListener('click',(e)=>{
                   indicator(e.target);
               })
           })
       </script>


<!---News Thumbnail display--->

 <script>
        
       var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);

};
        
        </script>

     
    </body>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </html>