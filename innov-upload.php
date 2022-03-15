<?php 
 
session_start();

require('connection.php');


  ?>
  
    <div class="formi-container" id="result" style="top:0px;">
     <form  action="upload-files.php" method="POST" enctype="multipart/form-data" onSubmit="return valid();">
            <div class="formi-contactinfo">
                <div>
                    <h2></h2>
                    <center><p style='display:flex;color:white'>  <img id="output" src="#" style="height:150px;width:250px;border-radius:5%;align-items:center;justify-content:center;" alt="Your Innovation Thumbnail Image" /></p></center><br>
                     
       
       
       
   
                </div>
            </div>

             <div class="formi-contactForm" style="min-height: 570px;">
                 <h2>Upload Your Innovation</h2>
                 <div class="formi-formBox">
                     <div class="inputBox w100">
                         
                        <input type="text" name="innov_title" required>
                        <span>Innovation Title</span>

                     </div>
                     
                    <div class="inputBox w50">
                         
                        
                        <span>Innovation Thumbnail image:</span>

                     </div>

                     <div class="inputBox w70">
                         
                        <input type="file" name="innov_pro_img" onchange="loadFile(event)" accept=".jpg ,.png ,.jpeg ,.gif" required>
                        

                     </div>
                     

                     <div class="inputBox w100">
                         
                       <textarea name="innov_description" required></textarea>
                        <span>Innovation Description....</span>
                        
                     </div>
                     <div class="inputBox w100">
                         
                        <input type="text" name="innov_solution" required>
                        <span>Your Innovation is solution for:</span>

                     </div>

                     <div class="inputBox w50">
                         
                        
                        <span>Innovation Document:</span>

                     </div>

                     <div class="inputBox w70">
                         
                        <input type="file" name="innov_docu"  accept=".pdf ,.doc ,.docx" >
                        

                     </div>

                     <div class="inputBox w100">
                         
                      <input type="submit" value="Send" name="upload-innov">
                        
                     </div>


                 </div>
             </div>

        </div>