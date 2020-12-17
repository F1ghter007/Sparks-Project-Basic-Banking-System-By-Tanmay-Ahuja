<?php

session_start();
include 'connection.php';

if(isset($_POST['name'])){
	$name=$_POST['name'];
}
$q="DELETE FROM customers WHERE name='$name';";
$result1= mysqli_query($con,$q);
if (!$result1) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
// $w="SELECT id from customers where name='$name';";
// $result2=mysqli_query($con,$w);
// $row=mysqli_fetch_array($result2);
// echo"$row";
?>
<html>
<head>
<link rel="shortcut icon" href="icon.png">
<script>
alert("Customer Deleted Successfully Added ");
window.location.href="customerdetails.php";
</script>
</head>
</html>