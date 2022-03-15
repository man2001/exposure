<?php 
session_start();

require('connection.php');
/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */
$userid = $_SESSION['user_id'];

$person_id = $_REQUEST['person_id'];
$query = "SELECT * FROM sports where person_id = '$person_id'";
$result = mysqli_query($conn,$query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);

 

  ?>

<!DOCTYPE html>
<html>
  <head>

  <link  rel="icon"  type="image/x-icon"  href="vizhithezhuthamilzha_favi_icon.png"/>

    <title> Welcome <?php echo $_SESSION['user_name'];?>..! - Vizhithezhuthamilzha (Logged In)</title>

    <meta charset="utf-8" />

    
    <link rel="'stylesheet" href="chagneupoo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
    <style>
    
    @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #232427;
}

.container8 {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  padding: 100px 0 50px;
}

.container8 .card {
  position: relative;
  min-width: 1500px;
  height: 1300px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(255, 255, 255, 0.3),
    -5px -5px 15px rgba(255, 255, 255, 0.1);

  border-radius: 15px;
  margin: 30px;
}

.container8 .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  border: 2px solid #1e1f23;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 0.4s, box-shadow 0.4s;
}

.container8 .card:hover .box {
  transform: translateY(-50px);
  box-shadow: 0 40px 70px rgba(0, 0, 0, 0.5);
}

.container8 .card .box .content {
  padding: 20px;
  text-align: center;
}

.container8 .card .box .content .icon {
  position: relative;
  width: 80px;
  height: 80px;
  background: #f00;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  margin-bottom: 10px;
}

.container8 .card .box .content .icon .fa {
  color: #fff;
  font-size: 2em;
}

.container8 .card .box .content h3 {
  font-size: 1.8em;
  color: #fff;
  font-weight: 300;
}

.container8 .card .box .content h4 {
  color: #fff;
  font-size: 3em;
  font-weight: 700;
}

.container8 .card .box .content h5 {
  color: #fff;
  font-size: 1em;
  font-weight: 400;
}
.container8 .card .box .content h6 {
  color: #fff;
  font-size: 1.3em;
  font-weight: 300;
  letter-spacing:1.2px;
}

.container8 .card .box .content p {
  color: #fff;
  font-size: 2.2em;
  font-weight: 700;
  align:left;
  right:80%;
  letter-spacing: 1px;
  text-align: center;
}

.container8 .card .box .content h4 sup {
  font-size: 0.75em;
  font-weight: 300;
}

.container8 .card .box .content ul {
  position: relative;
}

.container8 .card .box .content ul li {
  list-style: none;
  color: #fff;
  margin: 5px 0;
}

.container8 .card .box .content ul li .fa-check {
  color: #0f0;
}

.container8 .card .box .content ul li .fa-times {
  color: #f00;
}

.container8 .card .box .content .download {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: #f00;
  margin-top: 15px;
  border-radius: 20px;
  text-decoration: none;
  color: #fff;
  font-weight: 400;
}

.toggle {
  position: absolute;
  top: 20px;
  left: 95%;
  width: 60px;
  height: 60px;
  background: #fff;
  cursor: pointer;
  border-radius: 6px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.toggle::before {
  content: "\f185";
  font-family: fontAwesome;
  font-size: 24px;
}

body.light .toggle {
  background: #154f56;
  color: #fff;
}

body.light .toggle::before {
  content: "\f186";
}

body.light {
  background: #ebf5fc;
}

body.light .container8 .card {
  box-shadow: inset 10px 10px 10px rgba(0, 0, 0, 0.03),
    inset -10px -10px 15px rgba(255, 255, 255, 0.5),
    10px 10px 10px rgba(0, 0, 0, 0.03),
    -10px -10px 15px rgba(255, 255, 255, 0.5);
}

body.light .container8 .card .box {
  background: #ebf5fc;
  border: none;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

body.light .container .card:hover .box {
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

body.light .container8 .card .box .content h2,
body.light .container8 .card .box .content h3,
body.light .container8 .card .box .content h4,
body.light .container8 .card .box .content h5,
body.light .container8 .card .box .content h6,
body.light .container8 .card .box .content p,
body.light .container8 .card .box .content ul li {
  color: #32a3b1;
}

body.light .container8 .card .box .content h6
{
  font-weight: 400;
}


/* Div tag for float*/
.column {
  float: left;
  padding: 10px;
  height: 950px;
  width:1600px; /* Should be removed. Only for demonstration */
}

.left {
  width: 450px;
  justify-content:center;
  align-items: center;
  
}

.right {
  width: 950px;
  
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

th,td 
{
  padding:20px;
}

/*popup*/

.popupee {
  width: 400px;
  margin: auto;
  text-align: center;
}
.popupee img {
  width: 0px;
  height: auto;
  cursor: pointer;
}
.show {
  z-index: 999;
  display: none;
}
.show .overlay {
  position: absolute;
  width: 100%;
  height:100%;
  background: #000000;
  position: absolute;
  top: 0;
  left: 0;
}
.show .img-show {
  position: absolute;
  width: 600px;
  height: 600px;
  background: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  overflow: hidden;
}
.img-show span {
  position: absolute;
  top: 100px;
  right: 100px;
  z-index: 99;
  cursor: pointer;
  color:white;
}
.img-show img {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

    
/*Social Media icon Style*/

  .social-icons .graicon
            {
                display:inline-block;
                position: relative;
                font-size:2em;
                margin: 0.32em;
            }

            .social-icons i
            {
                color: white;
                position: absolute;
                top: 0.9em;
                left: 0.88em;
                transition: all 265ms ease-out;
            }

            .social-icons .gradicon::before
            {
               content: '';
               transform: scale(1);
               width: 85px;
               height: 85px;
               border-radius: 50%;
               display:block;
               background: linear-gradient(45deg,#ff003c, #e985eb);
               transition:all 265ms ease-out;
            }
            .social-icons .gradicon:hover::before
            {
                transform: scale(0);
                transition: all 265ms ease-out;
            }

            .social-icons .gradicon:hover i
            {
                transform: scale(2.2);
                color: #ff003c;
                background: linear-gradient(45deg,#ff003c,#e985eb);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                transition: all 265ms ease-out;
            }




    </style>
  </head>

  <body>
    <div class="toggle"></div>
    <div class="container8">
      <div class="card">
        <div class="box">
          <div class="content">

<p style="top:0px;">Sport Person - Detailed View</p><br>

          <!--For Floating Div--->
          <div class="row" >
                <div class="column left">

              
 <div class="popupee">
                      
                      <center>    <img  style=" width:250px; height:250px; align:left;"  src="<?php echo "sports/".$row['pers_img'];?>">  </center>  

<br><br><div class="social-icons">
                       <span class="graicon"><a href="https://www.instagram.com/<?php echo $row['pers_insta'];?>/" class="gradicon"><i class="fa fa-instagram"></i></a></span>
                       <span class="graicon"><a href="https://www.twitter.com/<?php echo $row['pers_twitter'];?>/" class="gradicon"><i class="fa fa-twitter"></i></a></span>
            <span class="graicon"><a href="mailto:<?php echo $row['pers_email'];?>" class="gradicon"><i class="fa fa-envelope-o"></i></a></span>
            
              </div>
          </div>
             
                  
    
                </div>
                     <div class="column right">

                    <table style="width:100%; table-layout:auto; text-align:left;">
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Person Id :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['person_id'];?></h3></td>
                      </tr>
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Name :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['pers_name'];?></h3></td>
                      </tr>
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Age :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['pers_age'];?></h3></td>
                      </tr>
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Sport :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['pers_sports'];?></h3></td>
                      </tr>
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Playing Role :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['pers_role'];?></h3></td>
                      </tr>
                      <tr style="width:100%;">
                        <td style="width:40%;"><h3>Played Level :</h3></td>
                        <td style="width:60%;"><h3><?php echo $row['pers_played_lvl'];?></h3></td>
                      </tr>

                       <tr style="width:100%;">
                        <td style="width:50%;">
                      
                    <div class="social-icons">
           
              </div>

                      </td>
                      <td style="width:50%;">
                      
                    

                      </td>
                        
                       
                      </tr>
                    </table>

          </div>
<br><br><bR><br><br><bR><br><br><bR><br><br><bR>
              <table style="width:100%; table-layout:auto; bottom=0px">
                <tr style="width:100%;">
                  <td style="width:15%;"> 
                
                    <h3> <ion-icon name="heart-outline"></ion-icon> </h3> 

                </td>
                  <td style="width:15%;">
                
                  <h3> <ion-icon name="eye-outline"></ion-icon></h3> 
                  
                
                </td>
                  <td style="width:25%;">
                
               
                
                </td>

                <td style="width:45%;">

                 
                  <h5> <b style="font-size: 1.3em; font-weight: 300; letter-spacing:1.2px;">Uploaded On: <?php echo $row['pers_added_time'];?>   </b>        </h5>
              
                </td>
                </tr>
              </table>


            
          </div>
        </div>
      </div>
    </div>

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


    <script>
      const body = document.querySelector("body");
      document.querySelector(".toggle").onclick = function () {
        body.classList.toggle("light");
      };
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
