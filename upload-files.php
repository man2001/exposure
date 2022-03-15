<?php 
 
session_start();

require('connection.php');
/*if (strlen($_SESSION['user_name']==0)) {
  header('location:logout.php');
  }
 */



 if(isset($_POST['upload-person'])) {
   $userid = $_SESSION['user_id'];

   $pers_name=$_POST['pers_name'];
   $pers_age=$_POST['pers_age'];
   $pers_sports=$_POST['pers_sports'];
   $pers_role=$_POST['pers_role'];
   $pers_played_lvl=$_POST['pers_played_lvl'];
   $pers_email=$_POST['pers_email'];
   $pers_insta=$_POST['pers_insta'];
   $pers_twitter=$_POST['pers_twitter'];
   $filename = $_FILES['pers_img']['name'];
$filetmpname = $_FILES['pers_img']['tmp_name'];



//folder where images will be uploaded
$folder = 'sports/';

//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
        
//Sql Injection Protection
$pers_name = stripcslashes($pers_name);
$pers_age = stripcslashes($pers_age);
$pers_sports = stripcslashes($pers_sports);
$pers_role = stripcslashes($pers_role);
$pers_played_lvl = stripcslashes($pers_played_lvl);
$pers_email = stripcslashes($pers_email);
$pers_insta = stripcslashes($pers_insta);
$pers_twitter = stripcslashes($pers_twitter);

$pers_name = mysqli_real_escape_string($conn, $pers_name);
$pers_age = mysqli_real_escape_string($conn, $pers_age);
$pers_sports = mysqli_real_escape_string($conn, $pers_sports);
$pers_role = mysqli_real_escape_string($conn, $pers_role);
$pers_played_lvl = mysqli_real_escape_string($conn, $pers_played_lvl);
$pers_email = mysqli_real_escape_string($conn, $pers_email);
$pers_insta = mysqli_real_escape_string($conn, $pers_insta);
$pers_twitter = mysqli_real_escape_string($conn, $pers_twitter);

        
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `sports` (pers_name,user_id,pers_age,pers_sports,pers_role,pers_played_lvl,pers_email,pers_insta,pers_twitter,pers_img,pers_likes)  VALUES ('$pers_name','$userid','$pers_age','$pers_sports','$pers_role','$pers_played_lvl','$pers_email','$pers_insta','$pers_twitter','$filename','1')";
$qry = mysqli_query($conn,  $sql);
if( $qry) 
{
echo "<script>alert('Sport Person Uploaded Sucessfully')</script>"; 
}
else {
  echo "<script>alert('Sorry, Some Problem in your uploading.. Pls try again Later')</script>";;
}
}


 
if(isset($_POST['upload-innov'])) {
   $userid = $_SESSION['user_id'];

   $innov_title=$_POST['innov_title'];
   $innov_description=$_POST['innov_description'];
   $innov_solution=$_POST['innov_solution'];
   $filename = $_FILES['innov_pro_img']['name'];
$filetmpname = $_FILES['innov_pro_img']['tmp_name'];
$filename1 = $_FILES['innov_docu']['name'];
$filetmpname1 = $_FILES['innov_docu']['tmp_name'];



//folder where images will be uploaded
$folder = 'innovations/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
move_uploaded_file($filetmpname1, $folder.$filename1);
        
//Sql Injection Protection
$innov_title = stripcslashes($innov_title);
$innov_description = stripcslashes($innov_description);
$innov_solution = stripcslashes($innov_solution);

$innov_title = mysqli_real_escape_string($conn, $innov_title);
$innov_description = mysqli_real_escape_string($conn, $innov_description);
$innov_solution= mysqli_real_escape_string($conn, $innov_solution);



        
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `innovation` (innov_title,user_id,innov_pro_img,innov_docu,innov_description,innov_solution,innov_likes)  VALUES ('$innov_title','$userid','$filename','$filename1','$innov_description','$innov_solution','1')";
$qry = mysqli_query($conn,  $sql);
if( $qry) 
{
echo "<script>alert('Your Innovation Got Uploaded Sucessfully')</script>"; 
}
else {
  echo "<script>alert('Sorry, Some Problem in your uploading.. Pls try again Later')</script>";;
}
}


if(isset($_POST['upload-news'])) {
   $userid = $_SESSION['user_id'];

   $news_title=$_POST['news_title'];
   $news_description=$_POST['news_description'];
   $filename = $_FILES['news_img']['name'];
$filetmpname = $_FILES['news_img']['tmp_name'];
$filename1 = $_FILES['news_document']['name'];
$filetmpname1 = $_FILES['news_document']['tmp_name'];



//folder where images will be uploaded
$folder = 'news/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
move_uploaded_file($filetmpname1, $folder.$filename1);
        
//Sql Injection Protection
$news_title = stripcslashes($news_title);
$news_description = stripcslashes($news_description);

$news_title = mysqli_real_escape_string($conn, $news_title);
$news_description = mysqli_real_escape_string($conn, $news_description);

        
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `news` (news_title,user_id,news_img,news_document,news_description,news_likes)  VALUES ('$news_title','$userid','$filename','$filename1','$news_description','1')";
$qry = mysqli_query($conn,  $sql);
if( $qry) 
{
echo "<script>alert('Your News Got Uploaded Sucessfully')</script>"; 
}
else {
  echo "<script>alert('Sorry, Some Problem in your uploading.. Pls try again Later')</script>";;
}
}

  ?>