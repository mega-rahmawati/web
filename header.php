<?php 
	$menu="Home";
	if (isset($_GET['menu'])){
		$menu = $_GET['menu'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<neta cjarset="UTF-8">
	<title>My Blog - <?php echo $menu; ?>
	</title>
</head>
<body style="margin: 0px">
	<table border="0", width="100%" style="border-collapse: collapse;">
	<tr><td colspan="2" style="background-color: green"><center><h1>Header</td></h1></center></tr>