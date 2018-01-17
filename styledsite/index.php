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


 if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
 ?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flinc</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
 
</head>



<body class="animated fadeIn">
  <div class="contain">
    <div class="upperbar">
      <img src="assets/images/a.jpg">
      <div class="helper">

        <form><input type="text" placeholder="Search.." name="search">
        </form>
      </div>
  </div>
      
  <!--TILES-->
  <div id="main">
    <section id="one" class="tiles">
      <article class="c1">
        <header class="major ">
          <h3><a href="pages/blog.html" class="link">Blog</a></h3>
          <p>A blog where you can keep track of progress.</p>
        </header>
      </article>

      <article class="c2">
        <header class="major">
          <h3><a href="pages/userpage.html" class="link">User Page</a></h3>
          <p>Manage your user information here.</p>
        </header>
      </article>

      <article class="c3">
        <header class="major">
          <h3><a href="#" class="link">Lorem ipsum</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis lorem mi, at pellentesque sem maximus id.</p>
        </header>
      </article>

      <article class="c4">
        <header class="major">
          <h3><a href="#" class="link">Lorem ipsum</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis lorem mi, at pellentesque sem maximus id.</p>
        </header>
      </article>

      <article class="c5">
        <header class="major">
          <h3><a href="#" class="link">Lorem ipsum</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis lorem mi, at pellentesque sem maximus id.</p>
        </header>
      </article>

      <article class="c6">
        <header class="major">
          <h3><a href="#" class="link">Lorem ipsum</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis lorem mi, at pellentesque sem maximus id.</p>
        </header>
      </article>


    </section>
  </div>
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
    <link href="css/style.css" rel="stylesheet">
     </head>
     <body>
      <div class="warning-container">
         <div class="warningdiv">
             <H1>You need to be logged in to view this page.</H1><br>
             <h2>Login <a href="pages/login.php">here</a></h2>
        </div>
    </div>
     </body>
     
 </html>
 
 <?php }
 ?>
