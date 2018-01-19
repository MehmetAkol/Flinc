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
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<title>Blog</title>
</head>

<body class="animated fadeIn">
	<div class="container">
		<div class="upperbar">
		<img src="../assets/images/a.jpg">
			<div class="helper">
				<form><input type="text" placeholder="Search.." name="search">
				</form>
			</div>
		</div>
		
	</div>

	<h1 class="h1left">Company Blog</h1>



<?php
$sqlq = "SELECT * FROM posts ORDER BY id DESC";
$result = $con->query($sqlq);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $author = $row["author"];
        $content = $row["content"];
            $str = <<<EOF
            <div class="blog-item">
				<img class="blog-avatar" src="../assets/images/a.jpg">
				<div class="blog-content">
				<h1>$title<a href="http://google.com"><img class="hyperlink" src="../assets/images/hyperlink.png"></a></h1>
				<h2>$author</h2>
				<h3>$content. </h3>
				</div>
			</div>
EOF;
        echo $str;
       
        
        
    }
} else {
    echo "0 results";
}
$con->close();
?>

<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
    		showDivs(slideIndex += n);
		}

		function showDivs(n) {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    if (n > x.length) {slideIndex = 1} 
		    if (n < 1) {slideIndex = x.length} ;
		    for (i = 0; i < x.length; i++) {
		        x[i].style.display = "none"; 
		    }
		    x[slideIndex-1].style.display = "block"; 
		}
	</script>

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
             <H1>You need to be logged in to view this page.</H1><br>
             <h2>Login <a href="login.php">here</a></h2>
        </div>
    </div>
     </body>
     
 </html>
 
 <?php }
 ?>
