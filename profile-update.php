<?php 
 
session_start();

require('connection.php');


  


  ?>

    <div id="Editpic">
      <div class="container" id="result">
        <div class="contactprofile">
          <div>
              <center><img  style="border-radius:50%; width:180px; height:180px; align-items:center; justify-content:center;"  src="<?php echo "user_images/".$_SESSION['user_img'];?>"> 

               <br><br><br><div class="inputBox w50">
              <a href="profile-update.php" class="EditPicBtn"><input type="submit" name="submit" value="Edit Profile Picture"/></a>
            </div></center>  
          </div>
        </div>

        <div class="contactForm" >
          <h2><ion-icon name="person"></ion-icon>  View Profile Details</h2><br>
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $_SESSION['user_name'];?>" style="pointer-events: none;"/>
               <span>First Name</span>
              
            </div>
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $_SESSION['user_dob'];?>"  style="pointer-events: none;"/>
              <span>Date of Birth</span>
            </div>

            <div class="inputBox w50">
              <input type="email" name="" value ="<?php echo $_SESSION['user_email'];?>" style="pointer-events: none;"/>
              <span>Email Address</span>
            </div>
            <div class="inputBox w50">
              <input type="text" name="" value ="<?php echo $_SESSION['user_mob_no'];?>" style="pointer-events: none;"/>
              <span>Mobile Number</span>
            </div>

            <div class="inputBox w50">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
                   <script>
                       function fileValidation() {
            var fileInput = 
                document.getElementById('profilepic');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.png|\.jpg|\.jpeg|\.gif)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type For user image we allow only .png , .jpg , .jpeg , .gif  - formats ');
                fileInput.value = '';
                return false;
            } 
       

var uploadField = document.getElementById("profilepic");

uploadField.onchange = function() {
    if(this.files[0].size > 1097152){
       alert("File is too big!");
       this.value = "";
    };
};

 }
                   </script>

                   <script type="text/javascript">
                       $(document).ready(function(){

                           $("#form").on('submit',function(e){
                               e.preventDefault();

                               if(!$("#file").val()){
                                   alert("Please Choose a file");
                               }

                               var formData = new FormData(this);

                               $.ajax({

                                   url:"submit-pic.php",
                                   type: "POST",
                                   data:formData,
                                   cache:false,
                                   processData:false,
                                   contentType:false,

                                   success:function(data){
                            
                                      $(".image").html(data);
                                   }
                               });
                           });

                           $("#file").change(function(){
                               var file = this.files[0];
                               var fileType = file.type;
                               var file_size = file.size;
                               var match = ['image/jpeg','image/jpg','image/png'];

                               if(!( (fileType ==match[0]) || (fileType == match[1]) || (fileType == match[2]))){

                                   alert("Only Jpg,Jpeg & Png");
                                   $("#file").val('');
                                   return false;
                               }

                               if(file_size >1097152){

                                   alert("Sorry! File size Exceeds");
                                   $("#file").val('');
                                   return false;
                               }
                           });
                       });
                   </script>


                   