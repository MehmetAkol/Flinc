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
    echo 'Database not selected';
}
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    
    $sql = "INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')";
    if (!mysqli_query($con, $sql))
    {
        echo ' <html>
                 <head>
                <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                <link href="../../css/style.css" rel="stylesheet">
                 </head>
                 <body>
                      <div class="warning-container">
                         <div class="warningdiv">
                         <H1>Something went wrong creating the post.</H1>
                        </div>
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
                         <H1>The new blogpost has just been added.</H1><br>
                        </div>
                    </div>
                </body>
        </html>';
        header("refresh:3; url=../blog.php");
    }
    
    

?>