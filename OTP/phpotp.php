<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Login</title>
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
        <h1>Online Voting System</h1>
    </div>
    <div id="login">
    <form action="" method="POST">
        <h2>Login-otp</h2><br>
        <input type="email" name="email" id="email" placeholder="Email" required="required">
        <button type="submit" onclick="send_otp()">Send Otp</button>
            
    </form>


</div>
<script>
    function send_otp(){
        var email=jQuery('#email').val();
        jQuery.ajax({
            url: 'send_otp.php',
            type:'post',
            data:'email='+email,
            success: function(result){

            }
        })
    }
</script>

</body>
</html>