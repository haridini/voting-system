<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Login</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body{
            background-color:black;
        }
        #login{
            background-color:gray;
            size: auto;
            width: 500px;
            text-align: center;
            margin:auto;
            margin-top:4cm;
            padding-inline-start: 20px;
            border: 7px solid;
            
        }
        h2{
            margin: auto;
            padding: 10px;
        }
        button{
            height: 30px;
            width: 100px;;
            margin: 20px;
            background-color: rgba(0, 81, 255, 0.712);
            text-decoration-color: aliceblue;
        }
        input{
            padding:10px;
        }
        label{
            color: ;
            font-size:20px;
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
      <li><a href="main.php"><i class="fas fa-link"></i>Home</a></li>
        <li><a href="index.php"><i class="fas fa-link"></i>sign-in</a></li>
        <li><a href="adminlogin.php"><i class="fas fa-stream"></i>admin</a></li>
        <li><a href="routes/register.php"><i class="fas fa-link"></i>registration</a></li>
        <li><a href="contact.html"><i class="fas envelope"></i>contact</a></li>
      </ul>

    </div>
        <h1>Online Voting System</h1>
    </div>
    <div id="login">
    <form action="api/login.php" method="POST">
        <h2>Login</h2><br>
        <label> Enter Moblie:</label>
        <input type="number" name="mobile" placeholder="Enter mobile" style="height: 25px; width:200px ;"><br><br>
        <label>Enter Password:</label>
        <input type="password" name="password" placeholder="Enter password" style="height: 25px; width:200px ;" ><br><br>
        <select name="role" id="" style="height: 25px; width:200px ;">
            <option value="1">Voter</option>
            <option value="2">Group</option>

        </select>
        
        <br><br><br>
        <button type="submit" herf="routes/dashboard.php">LOGIN</button>
        <br>
        </form>


</div>
</body>
</html>