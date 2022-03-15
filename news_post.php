<?php 
session_start();

require('connection.php');
/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */

 /*News Upload*/

 if(isset($_POST['uploadfilesub'])) {

$user_name = $_POST['user_name'];
$user_dob = $_POST['user_dob'];
$user_email = $_POST['user_email'];
$user_mob_no = $_POST['user_mob_no'];

$salt = "hasfjlwehnjewihhweig53454##^^%&^^%^%";
$user_password = $_POST['user_password'].$salt;
$user_password = sha1($user_password);
$filename = $_FILES['user_img']['name'];
$filetmpname = $_FILES['user_img']['tmp_name'];


//folder where images will be uploaded
$folder = 'user_images/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `users` (user_name,user_dob,user_email,user_mob_no,user_img,user_password)  VALUES ('$user_name','$user_dob','$user_email','$user_mob_no','$filename','$user_password')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "<script>alert('You're Successfully Signed Up with us... Thanks for ur Support - We protect ur data with high security  - #Vizhithezhuthamilzha');</script>"; 
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

  ?>
