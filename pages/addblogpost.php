<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "flinc";
    
    $con = mysqli_connect ($host, $user, $pass) or die("cannot connect");
    mysqli_select_db($con, $db);


    session_start();
    
    
 if (isset($_SESSION['username'])) {
 ?>
 
  <?php
    $username = $_SESSION['username'];


 if ($username = "admin") {
    $sql = "SELECT * FROM users WHERE username = '$username'";
 ?>

<html>
<head>
  <title>Add post</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>  
    <link href="../css/style.css" rel="stylesheet">
 
</head>



<body class="animated fadeIn">
  <div class="contain">
    <div class="upperbar">
      <img src="../assets/images/a.jpg">
      <div class="helper">
        <form><input type="text" placeholder="Search.." name="search">
        </form>
      </div>
  </div>
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1>Add blog post</h1>
                    <form role="form" action="sql/addblogpost.php" method="post" id="login-form" autocomplete="off">
                      <div class="form-group">
                            <label for="title" class="sr-only">Title</label>
                            <input type="username" name="title" id="email" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="author" class="sr-only">Author</label>
                            <input type="username" name="author" id="email" class="form-control" placeholder="Author">
                        </div>
                        <div class="form-group">
                            <label for="content" class="sr-only">Content</label>
                            <input type="username" name="content" id="email" class="form-control contenttxt" placeholder="Say what you want to say.">
                        </div>
                        
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Post">
                    </form>
                    <hr> <hr> <hr> <hr> <hr> <hr>
              </div>
        </div> 
      </div> 
    </div> 
</section>
</body>
</html>
<!--else-->
 <?php
 } 
?> <?php

 } else {
     ?>
 <html>
     <head>
       <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
     </head>
     <body>
      <div class="warning-container">
         <div class="warningdiv">
             <H1>You need to be an admin to view this page.</H1><br>
             <h2>Login <a href="login.php">here</a></h2>
        </div>
    </div>
     </body>
     
 </html>
 
 <?php }
 ?>

