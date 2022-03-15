<?php
session_start();

require('connection.php');

$news_id = $_REQUEST['news_id'];
$query = "DELETE FROM news WHERE news_id=$news_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

if($result=1)
{
    echo "<script>alert('News Post Deleted Successfully')</script>";
    header("Location: welcome.php"); 
}
else
{
    echo "<script>alert('Some Error In Deleting News Post Please Try Again later')</script>";
    header("Location: welcome.php"); 
}




?>