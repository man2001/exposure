<?php 
 
session_start();

require('connection.php');
/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */


  


 if(isset($_POST['username']) || isset($_POST['userdob']) || isset($_POST['usermobno']))
 {
     $username = $_POST['username'];
     $userdob = $_POST['userdob'];
     $usermobno = $_POST['usermobno'];

     $userid = $_SESSION['user_id'];

     if(empty($username) || empty($userdob) || empty($usermobno))
     {
         echo "Empty Fields";
     }
     else
     {
         $sql = mysqli_query($conn, "UPDATE users SET user_name ='$username' , user_dob = '$userdob', user_mob_no = '$usermobno' WHERE user_id ='$userid'");


         if($sql)
         {
             echo "<script>alert('Updated Successully');</script>";
             $extra="update-profile.php";
             echo "<script>window.location.href='".$extra."'</script>";
         }
         else 
         {
             echo "<script>alert('Updating Process failed, please Try again Later.');</script>";
         }
         }
     }

 


  ?>