<?php
$db_con=mysqli_connect("localhost","root","","tokensystem");
$usernam=$_POST['usernam'];
$psd=$_POST['psd'];
$insqry="INSERT INTO `adminpurpose`(`usernam`, `psd`) VALUES ('$usernam','$psd')";
$res=mysqli_query($db_con,$insqry);
if($res==1){
	echo "inserted sucessfully";
	mysqli_close($db_con);
}
?>