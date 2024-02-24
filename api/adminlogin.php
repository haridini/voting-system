<?php
session_start();
include("connect.php");

$mobile = $_POST['mobile'];
$password = $_POST['password'];


$check = mysqli_query($connect, "SELECT * FROM admin WHERE mobile='$mobile' AND password='$password' ");

if(mysqli_num_rows($check)>0){
    $user= mysqli_query($connect,"SELECT * FROM registration WHERE role=2");
    $userdata = mysqli_fetch_array($user,MYSQLI_ASSOC);
    $groups = mysqli_query($connect,"SELECT * FROM registration ");
    $groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupsdata'] = $groupsdata;


    echo'
        <script>
            
            window.location = "../routes/index.php";
        </script>
    ';
} 
else{
    echo'
        <script>
            alert("Invalid Credentials or user not found!");
            window.location = "../adminlogin.php";
        </script>
    ';
}
?>