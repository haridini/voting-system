<?php
session_start();
session_destroy();
echo'
    <script>
    alert("Do you want to logout")
    window.location = "../main.php";
    </script>
'

?>