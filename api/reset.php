<?php 
    session_start();
    include('connect.php');

    //$votes = $_POST['gvotes'];
    //$total_votes = $votes+1;
    $uid = $_SESSION['userdata']['id'];

    echo'
        <script>
            alert("Reseting election");
        </script>
    ';

    $update_votes = mysqli_query($connect,"UPDATE registration SET votes=0 ");
    $update_user_status = mysqli_query($connect,"UPDATE registration SET status=0 ");

    echo'
            <script>
                alert("Reseting Succesfull!! :)");
                window.location="../routes/index.php";
                window.location.reload;
            </script>
        ';
?>  