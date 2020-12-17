<?php

session_start();
include 'connection.php';

if(isset($_POST['submit'])){
	$a=$_POST['name'];
	$b=$_POST['email'];
    $d=$_POST['acc'];
    $t=$_POST['balance'];
    $o=$_POST['location'];
}
$result1= mysqli_query($con,"INSERT INTO `customers` (`id`, `name`, `email`, `acc_no`, `balance`, `location`) VALUES (NULL, '$a', '$b', '$d', '$t', '$o');");
if (!$result1) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
?>
<html>
<head>
<link rel="shortcut icon" href="icon.png">
<script>
alert("Customer Successfully Added");
window.location.href="customerdetails.php";
</script>
</head>
</html>