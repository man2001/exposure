 <?php 
 
session_start();
require('connection.php');

$userid = $_SESSION['user_id'];

 $query = "SELECT * FROM users where user_id = '$userid'";
$result = mysqli_query($conn,$query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);


  ?>
  
  <div class="container" id="result">
        <div class="contactprofile">
        
          <div>

        
              <center>

                    <img  style="border-radius:50%; width:180px; height:180px; align:left;"  src="<?php echo "user_images/".$row['user_img'];?>">

				<br><br><br>
				<form action="upii-newpic.php" method="POST" enctype="multipart/form-data" onSubmit="return valid();">
					<input type="file" name="new_user_img" onchange="return fileValidation()" id="pro_img" accept=".jpg, .jpeg, .png, .gif">
					
					<br>
					<br>
					<br><div class="inputBox w50">
              <input type="submit" name="uploadfilesub" value="Upload Profile Picture"/>
            </div>
				</form>

</center>
             
            </div>
          </div>
        

        <div class="contactForm" >
          <h2><ion-icon name="person-add"></ion-icon> Update Profile Details</h2><br>
          <form action="user-update.php" method="POST">
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" name="username" value ="<?php echo $row['user_name'];?>" />
               <span>First Name</span>
              
            </div>
            <div class="inputBox w50">
              <input type="text" name="userdob" value ="<?php echo $row['user_dob'];?>"/>
              <span>Date of Birth</span>
            </div>

            <div class="inputBox w50">
              <input type="email" name="useremail" value ="<?php echo $row['user_email'];?>" style="pointer-events: none;"/>
              <span>Email Address <b>(non-editable)</b></span>
            </div>
            <div class="inputBox w50">
              <input type="text" name="usermobno" value ="<?php echo $row['user_mob_no'];?>" />
              <span>Mobile Number</span>
              
            </div>

            <div class="inputBox w50">
              <input type="submit" name="submit" value="Send"/>
            </div>
          </div>
          </form>
        </div>
      </div>

        <script type="text/javascript">
            $(document).ready(function()){
                $("#myForm").on('submit',function(e)){
                    e.preventDefault();

                    var username = $("#username").val();
                    var userdob  = $("#userdob").val();
                    var usermobno  = $("#usermobno").val();

                    $.ajax({
                            url: "user-update.php",
                            type: "POST",
                            dataType: "html",
                            data:{username:username,userdob:userdob,usermobno:usermobno},

                            success:function(data){
                                $("#dispMsg").html(data);
                            }
                        });
                });
            });


function fileValidation() {

	var uploadField = document.getElementById("pro_img");

uploadField.onchange = function() {
    if(this.files[0].size > 1097152){
       alert("File is too big!");
       this.value = "";
    };
};

 }
        </script>

        <!---Profile Picture Update--->

       