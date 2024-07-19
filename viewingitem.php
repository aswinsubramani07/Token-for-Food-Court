<?php
$db_con=mysqli_connect("localhost","root","","tokensystem");
$itemquantity=$_POST['item_quantity'];
$timing=$_POST['$timing'];
$insqry="INSERT INTO `itemdetails`(`itemquantity`, `timing`) VALUES ('$itemquantity','$timing')";
$res=mysqli_query($db_con,$insqry);
if($res){
	echo "inserted sucessfully";
	mysqli_close($db_con);
}
else{
echo "not inserted";
}
?>

