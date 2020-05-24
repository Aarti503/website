
<?phpinclude 'header.php';
?>
<?php
include 'link.php';
?>
<?php

$username = 'root';
$password = "";
$server = 'localhost';
$db = 'college';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	//echo "connection successful"

	?>
	
	<script>
		alert ('connection Succesful');
	</script>
	<?php
}
else{
	die("no connection".mysql_connect_error());
	//echo "no connection";
}
?>