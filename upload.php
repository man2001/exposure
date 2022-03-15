<?php 
session_start();

require('connection.php');
/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */

  ?>


<html>


<a href="logout.php"> <button>hii</button></a>
<p><?php echo $_SESSION['user_id'];?></p>
<p><?php echo $_SESSION['user_name'];?></p>
<p><?php echo $_SESSION['user_email'];?></p>
<p><?php echo $_SESSION['user_mob_no'];?></p>
<p><?php echo $_SESSION['user_dob'];?>
<br></p>
<img src="<?php echo "user_images/".$_SESSION['user_img'];?>">

</html>