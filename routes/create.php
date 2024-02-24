<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<style>
	body{
		background: url(../img5.png) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
	}
</style>
<body>

<?php
include ('inc/header.php');
include ('config.php');
include ('Database.php');

$db = new Database();

if (isset($_POST['submit'])) {
	$name  = mysqli_real_escape_string($db->link, $_POST['name']);
	$mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);
	$address = mysqli_real_escape_string($db->link, $_POST['address']);
	if ($name == '' || $mobile == '' || $address == '') {
		$error = "Field must be not empty!!";
	}else{
		$query = "Insert Into registration(name, mobile, address) values('$name','$mobile','$address')";
		$create = $db->insert($query);
	}
}



//error show
if (isset($error)) {
	echo "<span style='color:red'>". $error ."</span>";
}
?>

<form action="create.php" method="post">
<table class="tblone">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" placeholder="name"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" placeholder="mobile"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" placeholder="address"></td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Submit">
			<input type="reset" value="Cancel">
		</td>
	</tr>
</table>
</form>
<a href="index.php">Go Back</a>
</body>
</html>