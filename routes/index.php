<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>voting system</title>
</head>
<style>
	body{
		background: url(../img5.png) no-repeat;
    background-position: center;
    background-size: cover;
    height: auto;
	}
    #Group{
        border-radius: 30px;
        border:solid red 10px;
    }
    .sing{
        padding:10px;
        margin:auto;
    }
</style>
<body>
	


<?php 
	include 'inc/header.php'; 
	include ('config.php');
	include ('Database.php');
	
    session_start();
    if(!isset($_SESSION['userdata'])){
        header('location:../');
    }
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];
?>

<?php 
	$db = new Database();
	$query = "SELECT * FROM  registration";
	$read = $db->select($query);

	if (isset($_GET['msg'])) {
		echo "<span style='color:green'>". $_GET['msg'] ."</span>";
	}
?>


<table class="tblone">
	<tr>
		<th width="auto">Serial</th>
		<th width="auto">Name</th>
		<th width="auto">Email</th>
		<th width="auto">Address</th>
		<th width="auto">Action</th>
	</tr>
	<?php if ($read) { ?>
		<?php while ($row = $read->fetch_assoc() ) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
	</tr>
	<?php } ?> <!---end of while curly braces ---->
	<?php }else{ ?>
		<p>Data is not available </p>
	<?php } ?> <!---end of curly braces ---->
	<a href="create.php">Create</a> <br>
    <a href="../api/stop.php" style="float:right;">STOP!!</a><hr>
	<b >Do u want to reset the election!!</b><br>
        <b>Click here 👉👉</b>
        <a href="../api/reset.php" style=" background-color: white;">Reset</a>

</table>
		

<?php include 'inc/footer.php'; ?>






<div id="Group" style="background-color:white; width: 40%; padding:10px; margin:auto;margin-top:3cm;width:auto; ">
        <h1 style="text-align:center; border: solid black 2px;">Result</h1>
            <?php
                if($_SESSION['groupsdata']){
                    for($i=0;$i<count($groupsdata);$i++){
                        ?>
                        <div class="sing">
                            <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100" alt="" style="float:right"><br>
                            <b>Group Name:  </b><?php echo $groupsdata[$i]['name']?><br>
                            <b>Votes:  </b><?php echo $groupsdata[$i]['votes']?><br>
                            <!-- <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                <?php 
                                    if($_SESSION['userdata']['status']==0){
                                        ?>
                                        <input type="submit" name="votebtn" value="Vote" id="votebtn">
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <button disabled type="button" name="votebtn" value="Vote" id="voted" >Voted</button>
                                        <?php
                                    }
                                ?>
                                

                            </form> -->
                            <hr><hr>
                        </div>
                        <?php
                    }
                }
                else{

                }
            ?>

        </div>
		



	</body>
</html>