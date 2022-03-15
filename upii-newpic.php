<?php 
 
session_start();

require('connection.php');

/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */



 if(isset($_POST['uploadfilesub'])) {
   $userid = $_SESSION['user_id'];
   $filename = $_FILES['new_user_img']['name'];
$filetmpname = $_FILES['new_user_img']['tmp_name'];


//folder where images will be uploaded
$folder = 'user_images/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
        

        
if(empty($filename))
     {
         echo "Empty Fields";
     }
     else
     {
        
         $sql = mysqli_query($conn, "UPDATE users SET user_img ='$filename' WHERE user_id ='$userid'");

           if($sql)
         {
             echo "<script>alert('Updated Successully');</script>";
             $extra="update-profile.php";
             echo "<script>window.location.href='".$extra."'</script>";
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
         else 
         {
             echo "<script>alert('Updating Process failed, please Try again Later.');</script>";
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

        }

        }

  ?>