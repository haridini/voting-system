<?php

$connect = mysqli_connect("localhost","root","","votingsystem") or die("connection Failed!");
if($connect){
    echo "Connected!";
}
else{
    echo "Not Connected!";
}
?>
