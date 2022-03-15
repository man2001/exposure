<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "vizhithezhuthamilzha";

$conn = mysqli_connect($server, $user, $pass, $database);

if($conn)
{
    echo" "; 
}
else 
{
   die("<script>alert('connection failed')</script>");
}


if(mysqli_connect_errno())
{
    die("Error connecting to the Database");
}

//Adding new visitor
$visitor_ip = $_SERVER['REMOTE_ADDR'];

//checking if visitor is unique
$query = "SELECT * FROM visitor_counter_table WHERE news_ip='$visitor_ip' ";
$result = mysqli_query($conn,$query);

if(!$result)
{
    die("Retrive Query error<br>".$query);
}

$total_visitors = mysqli_num_rows($result);

if($total_visitors<1)
{
   $query = "INSERT INTO visitor_counter_table(news_ip) VALUES('$visitor_ip')";
   $result = mysqli_query($conn,$query); 
}


// retriving 
$query = "SELECT * FROM visitor_counter_table";
$result = mysqli_query($conn,$query);

if(!$result)
{
    die("Retrive Query error<br>".$query);
}

$total_visitors = mysqli_num_rows($result);


//members retrive 
$sel_query = "SELECT * from users";

if($join_result = mysqli_query($conn,$sel_query))
{
  $user_count = mysqli_num_rows($join_result);
}



?>

