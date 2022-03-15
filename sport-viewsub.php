 <?php 
session_start();

require('connection.php');

/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */
$userid = $_SESSION['user_id'];

 

  ?>


      
      <div class="glassboxy" id="result" style="overflow:hidden;">
        <h2>Your Uploaded Sports Persons</h2>

        <?php 
        $count=1;
           $sel_query="Select * from sports where user_id ='$userid'";
               $result = mysqli_query($conn,$sel_query);

                if(mysqli_affected_rows($conn)==0){ echo "<p style='color:#fff;'>No Sports Persons Records Uploaded By You</p>"; }

               else{

              while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="glasslist">
          <div class="imgBx">
            <img src="<?php echo "sports/".$row['pers_img'];?>" />
          </div>
          <div class="content">
          
          <a href="sport-view.php?person_id=<?php echo $row["person_id"]; ?>"><h2 class="view"><i class="fa-solid fa-pen-nib"></i></h2></a>     <a href="sport-delete.php?person_id=<?php echo $row["person_id"]; ?>" onclick="return myConfirm();"><h2 class="del"><i class="fa-regular fa-trash-can"></i></h2></a> 
          
            <h2 class="rank"><small>#</small> <?php echo $row['person_id']; ?></h2>

            <h4 style="font-size:23px;"><?php echo $row['pers_name']; ?></h4>
            <p><i class="fa-regular fa-heart"></i>&nbsp<?php echo $row['pers_likes']; ?>&nbsp &nbsp &nbsp &nbsp     <i class="fa-regular fa-eye"></i> &nbsp &nbsp &nbsp &nbsp  Uploaded On:&nbsp &nbsp <?php echo $row['pers_added_time']; ?></p>
          </div>
        </div>

        <?php
             $count++; }
              }
          ?>
      </div>
    



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
