<?php
include('connect.php');
$name = trim($_POST['name']);

if($name != "")
{
    // $delete = "DELETE FROM 	registration WHERE name = '$name'";
    $results = mysqli_query($connect,"DELETE FROM 	registration WHERE name = '$name'");

    if(!$results)
    {
        die ("Cannot delete data from the database! " + mysqli_error());
        echo '<br><br>';
        echo '<a href="../routes/admin.php">Return</a>';
    }
    else
    {
        echo"Exam: $name has been deleted";
        echo '
        <script>
          alert("Voter has been deleted :)");
          window.location="../routes/admin.php";
          window.location.reload;
        </script>
        ';
    }
}
else
{
    echo "No data entered! " ;
}

?>