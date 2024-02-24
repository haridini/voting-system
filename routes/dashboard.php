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
        <a href="logout.php"><button id="backbtn"></button></a>
        <a href="logout.php"><button id="logout">Logout</button></a>
        <h1>Online Voting System</h1><hr><hr>
    </div>
    <div id='mainpanal'>
        <div id="Profile" style="background-color:white; width: 30%; padding:10px; float:left;" >
            <img src="../uploads/<?php echo $userdata['photo']?>" alt="../uploads/user.jpg" height="200" width="200" style="display:block; margin-left:auto; margin-right:auto;">
            <br><b>Name:  </b><?php echo $userdata['name']?><br><br>
            <b>Mobile:  </b><?php echo $userdata['mobile']?><br><br>
            <b>Address:  </b><?php echo $userdata['address']?><br><br>
            <b>Aadhaar:  </b><?php echo $userdata['aadhaar']?><br><br>
            <b>Status:  </b><?php echo $status?><br><br>

        </div>
        <div id="Group" style="background-color:white; width: 40%; padding:10px; float:right; ">
            <?php
                if($_SESSION['groupsdata']){
                    for($i=0;$i<count($groupsdata);$i++){
                        ?>
                        <div>
                            <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100" alt="" style="float:right"><br>
                            <b>Group Name:  </b><?php echo $groupsdata[$i]['name']?><br>
                            <b>Votes:  </b><?php echo $groupsdata[$i]['votes']?><br>
                            <form action="../api/vote.php" method="POST">
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
                                

                            </form>
                            <hr>
                        </div>
                        <?php
                    }
                }
                else{

                }
            ?>

        </div>
    </div>



</body>
</html>