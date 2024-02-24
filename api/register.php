<?php
include("connect.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cnfpassword = $_POST['cnfpassword'];
$address = $_POST['address'];
$photo = $_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$aadhaar = $_POST['aadhaar'];
$aadhaarphoto = $_FILES['aadhaarphoto']['name'];
$tmp_name2=$_FILES['photo']['tmp_name'];
$role = $_POST['role'];

if($password = $cnfpassword){
    move_uploaded_file($tmp_name,"../uploads/$photo");
    move_uploaded_file($tmp_name2,"../uploads/$aadhaarphoto");
    $insert = mysqli_query($connect,"INSERT INTO registration(name,mobile,password,cnfpassword,address,photo,aadhaar,aadhaarphoto,role,status)
     VALUES('$name','$mobile','$password','$cnfpassword','$address','$photo','$aadhaar','$aadhaarphoto','$role',0)");
    if($insert){
        echo'
            <script>
                alert("Registration Succesfull!!:)");
                window.location = "../index.php";
            </script>
        ';
    }
    else{
        echo'
            <script>
                alert("ERROR!!(Some Error!!)");
                window.location = "../routes/register.html";
            </script>
        ';
    
    }
}
else{
    echo'
        <script>
            alert("ERROR!!(passwors & confirm password does not match..)");
            window.location = "../routes/register.html";
        </script>
    ';

}

?>
