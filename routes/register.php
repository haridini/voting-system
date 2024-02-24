<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Registration</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        body{
            background-color:black;
        }
        #login{
            background-color:gray;
            border: black;
            size: auto;
            width: 500px;
            text-align: center;
            margin: auto;
            padding-inline-start: 20px;
            border: 7px solid;
            
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
            background-color: rgb(0, 60, 255);
        }
        input{
            padding:10px;
        }
        select{
            height: 25px;
            width: 125px;
        }
        #headersection{
            background-color: orange;
            width: 100%;
            padding-bottom: 10px;
            padding-top: 10px;
        }
    

    </style>
</head>
<body>
    <div id="headersection">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header >menu</header>
      <ul>
      <li><a href="../main.php"><i class="fas fa-link"></i>Home</a></li>
        <li><a href="../index.php"><i class="fas fa-link"></i>sign-in</a></li>
        <li><a href="../adminlogin.php"><i class="fas fa-stream"></i>admin</a></li>
        <li><a href="routes/register.php"><i class="fas fa-link"></i>registration</a></li>
        <li><a href="contact.html"><i class="fas envelope"></i>contact</a></li>
      </ul>
    </div>
        <h1>Online Voting System</h1>
    
    </div>
    <div id="login">
    <form action="../api/register.php" method="POST" enctype="multipart/form-data">
        <h2>Registration</h2><br>
        <input type="text" name="name" placeholder="NAME" style="height: 25px; width:200px  ;">
        <input type="number" name="mobile" placeholder="Enter mobile" style="height: 25px; width:200px ;"><br><br>
        <input type="password" name="password" placeholder="Enter password" style="height: 25px; width:200px ;" >
        <input type="password" name="cnfpassword" placeholder="Confirm password" style="height: 25px; width:200px ;" ><br><br>
        <input type="text" name="address" placeholder="Address" style="height: 25px; width:400px ;"><br>
        Upload image:-<input type="file" name="photo"><br>
        <input type="number" name="aadhaar" placeholder="Aadhaar Number" style="height: 15px; width:400px ;"><br>
        Upload Aadhaar Card :-<input type="file" name="aadhaarphoto"><br>
        <select name="role" id="" style="height: 25px; width:200px ;">
            <option value="1">Voter</option>
            <option value="2">Group</option>

        </select><br><br><br>
        <button>Register</button>
        <br>
        
    </form>


</div>
</body>
</html>