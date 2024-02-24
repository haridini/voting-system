<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update/Delete</title>
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
	include('inc/header.php');
	include('config.php');
	include('Database.php');


	$id = $_GET['id'];
	$db = new Database();
	$query = "SELECT * FROM registration WHERE id=$id";
	$read = $db->select($query);
	$getData = $db->select($query)->fetch_assoc();

	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		$email = mysqli_real_escape_string($db->link, $_POST['mobile']);
		$skill = mysqli_real_escape_string($db->link, $_POST['address']);
		if ($name == '' || $mobile == '' || $addresss == '') {
			$error = "Field must be not Empty!";
		} else{
			$query = "Update registration 
			SET 
			name = '$name', email = '$mobile', address = '$address' WHERE id = $id
			";
			$update = $db->update($query);
		}
	}


	if (isset($error)) {
		echo "<span style='color:yellow'>".$error."</span>";
	}
	?>

	<?php
	if (isset($_POST['delete'])) {
		$query = "DELETE FROM registration WHERE id=$id";
		$deleteData = $db->delete($query);
	}
	?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
<table class="tblone">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $getData['name'] ?>"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" value="<?php echo $getData['mobile'] ?>"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" value="<?php echo $getData['address'] ?>"></td>
	</tr>
	<tr>
		<td>
			<!-- <input type="submit" name="submit" value="Update"> -->
			<input type="reset" value="Cancel">
			<input type="submit" name="delete" value="Delete">
		</td>
	</tr>
</table>
</form>
<a href="index.php">Go Back</a>
</body>
</html>