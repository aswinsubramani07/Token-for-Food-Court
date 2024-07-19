<?php
$db_con=mysqli_connect("localhost","root","","tokensystem");
$username=$_POST['username'];
$password=$_POST['password'];
$insqry="INSERT INTO `userdetails`(`username`, `password`) VALUES ('$username','$password')";
$res=mysqli_query($db_con,$insqry);
if($res==1){
	echo "inserted sucessfully";
	mysqli_close($db_con);
}
?>