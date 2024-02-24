<?php 
    session_start();
    include('connect.php');

    //$votes = $_POST['gvotes'];
    //$total_votes = $votes+1;
    $uid = $_SESSION['userdata']['id'];

    echo'
        <script>
            alert("Stoping election");
        </script>
    ';

    
    $update_user_status = mysqli_query($connect,"UPDATE registration SET status=1 ");

    echo'
            <script>
                alert("Stoped Succesfull!! :)");
                window.location="../routes/index.php";
                window.location.reload;
            </script>
        ';
?>  