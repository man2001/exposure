<?php 

session_start();
$_SESSION['submit ']=="";


session_unset();
$_SESSION['action1']="You have logged out successfully..!";

session_destroy();



?>

<script language="javascript">
document.location="Login_.php";
</script>