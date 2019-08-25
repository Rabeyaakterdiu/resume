<?php
$con = mysqli_connect('localhost', 'root', '', 'ali');
$query = "DELETE FROM detail WHERE id=1 "; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
echo("No Data Remains!");
?>