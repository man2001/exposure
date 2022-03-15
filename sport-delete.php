<?php
session_start();

require('connection.php');

$person_id = $_REQUEST['person_id'];
$query = "DELETE FROM sports WHERE person_id=$person_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

if($result=1)
{
    echo "<script>alert('News Post Deleted Sucessfully')</script>";
    header("Location: welcome.php"); 
}
else
{
    echo "<script>alert('Some Error In Deleting News Post Please Try Again later')</script>";
    header("Location: welcome.php"); 
}




?>