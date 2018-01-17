<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "flinc";

$con =  mysqli_connect($host, $user, $pass, $db);
if(!$con)
{
    echo 'connected';
}

if (!mysqli_select_db($con, $db))
{
    echo 'Database not selected fam';
}
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $hashed_password = md5($_POST['password']);
    $email = $_POST['email'];
    
    $sql = "INSERT INTO users (fname, lname, username, password, email) VALUES ('$fname', '$lname', '$username', '$hashed_password','$email')";
    if (!mysqli_query($con, $sql))
    {
        echo ' <html>
                 <head>
                <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                <link href="../../css/style.css" rel="stylesheet">
                 </head>
                 <body><div class="warning">
                         <H1>Something went wrong during sign up.</H1>
                        </div>
                </body>
        </html>';
    }
    else{
        echo ' <html>
                 <head>
                <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                <link href="../../css/style.css" rel="stylesheet">
                 </head>
                 <body>
                      <div class="warning-container">
                         <div class="warningdiv">
                         <H1>The new account has just been created.</H1><br>
                        </div>
                    </div>
                </body>
        </html>';
        header("refresh:3; url=../../index.php");
    }
    
    

?>