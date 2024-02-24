<?php
$con=mysqli_connect('localhost','root','','votingsystem');
echo $email = $_POST['email'];
$res=mysqli_query($con,"select * from otp where email='$email'");
if($count>0){
    echo'yes';
}else{
    echo'not_exist';
}
?>