<?php
    
    session_start();
    if(!isset($_SESSION['userdata'])){
        header('location:../');
    }
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];
    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color:red;">Not Voted</b>';
    }
    else{
        $status = '<b style="color:green;">Voted</b>';
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Dashboard</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body{
            background-color:black;
        }
        #login{
            background-color:rgba(198, 147, 45, 0.244);
            size: auto;
            width: 500px;
            text-align: center;
            margin: auto;
            padding-inline-start: 20px;
            border: 7px solid;
            
        }
        #logout{
            float:right;
            padding:10px;
            border-radius: 5px;
            background-color: blue;
            color: white;
            border-radius: 5px;
        }
        h1{
            text-align: center;
        }
        h2{
            margin: auto;
            padding: 10px;
        }
        button{
            height: 30px;
            width: 100px;;
            margin: 20px;
            background-color:blue;
        }
        input{
            padding:10px;
        }
        select{
            height: 25px;
            width: 125px;
        }
        #mainpanal{
            padding: 10px;
        }
        #voted{
            background-color:green;
            color:white;
        }
        #backbtn{
            
            background-color: blue;
            color: white;
            border-radius: 5px;
        }
        #headersection{
            background-color: orange;
        }
    </style>
</head>
<body>

    <div id="headersection">
        <a href="../"><button id="backbtn">Back</button></a>
        <a href="logout.php"><button id="logout">Logout</button></a>
        <h1>Online Voting System  :- ADMIN</h1><hr><hr>
    </div>
    <div style="text-color:red; background-color: pink;">
        <b >Do u want to reset the election!!</b><br>
        <b>Click here 👉👉</b>
        <a href="../api/reset.php" style=" background-color: white;">Reset</a>
        
    </div>
    <div id='mainpanal'>
        <div id="Profile" style="background-color:white; width: 30%; padding:10px; float:left;" >
        <?php
                if($_SESSION['groupsdata']){
                    for($i=0;$i<count($groupsdata);$i++){
                        ?>
                        <div>
                            <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100" alt="" style="float:right"><br>
                            <b>Name:  </b><?php echo $groupsdata[$i]['name']?><br>
                            <b>Votes:  </b><?php echo $groupsdata[$i]['votes']?><br>
                            <b>Mobile:  </b><?php echo $groupsdata[$i]['mobile']?><br>
                            <b>Address:  </b><?php echo $groupsdata[$i]['address']?><br>
                            <b>Aadhaar:  </b><?php echo $groupsdata[$i]['aadhaar']?><br>
                            
                            <!-- <button onclick=delete(<?php echo $groupsdata[$i]['name']?>) style="background-color:#9732a8;">Delete -->
                                                  
                        </button>
                       
                            <hr>
                        </div>
                        <?php
                    }
                }
                else{

                }
            ?>

        </div>
        <div style="background-color:white;" width=200px>
            <form action="../api/delete.php" method="post"  >
                <input type="text" name='name' placeholder="Enter name of user"><br>
                <button type="submit"  id="button" value="delete"> button</button>
            </form>
        </div>




        
    </div>

    <script>
        function delete($n){
            <?php
            $connect = mysqli_connect("localhost","root","","votingsystem") or die("connection Failed!");
            if($connect){
                echo "Connected!";
            }
            else{
                echo "Not Connected!";
            }
            $delete_voter = mysqli_query($connect,"delete * from registration where name='$n'");
            ?>
        }

        
   

      
    </script>

</body>
</html>


<!-- $('button').click(function(){
            $('#mainpanal').remove();
        }) -->


