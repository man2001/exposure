<?php 
 
session_start();

require('connection.php');



  ?>
  
    <div class="formi-container" id="result" style="top:0px;">
            <div class="formi-contactinfo">
                <div>
                   
                    <h2></h2>
                    <center><p style='display:flex;color:white'>  <img id="output" src="#" style="height:300px;width:250px;border-radius:5%;align-items:center;justify-content:center;" alt="Your Sport Person Image" /></p></center><br>
                     
       
       <br><br>
       
       
       
   
                </div>
            </div>
            <form  action="upload-files.php" method="POST" enctype="multipart/form-data" onSubmit="return valid();">
             <div class="formi-contactForm">
                 <h2>Upload Your Sport Person Name</h2>
                 <div class="formi-formBox">
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_name" required>
                        <span>Sport Person Name:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_sports" required>
                        <span>Person Sport:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_age" required>
                        <span>Sport Person Age:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_role" required>
                        <span> Playing Role:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_played_lvl" required>
                        <span> Sport played Level:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="email" name="pers_email" required>
                        <span>Sport Person Email:</span>

                     </div>
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_insta" required>
                        <span> Sport played Instagram Id:</span>

                     </div>
                       
                     <div class="inputBox w50">
                         
                        <input type="text" name="pers_twitter" required>
                        <span>Sport Person Twitter Id:</span>

                     </div>

                     <div class="inputBox w50">
                         
                        
                        <span>Sport Person image:</span>

                     </div>

                     <div class="inputBox w70">
                         
                        <input type="file" name="pers_img" onchange="loadFile(event)" accept=".jpg ,.png ,.jpeg ,.gif" required>
                        

                     </div>
                     
                     

                    
                     

                     <div class="inputBox w100">
                         
                      <input type="submit" value="send" name="upload-person">
                        
                     </div>


                 </div>
                 </form>
             </div>

        </div>