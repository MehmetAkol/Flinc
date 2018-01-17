<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "flinc";

$con = mysqli_connect ($host, $user, $pass);
mysqli_select_db($con, $db);

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".md5($password)."' LIMIT 1";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) == 1) {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $result = mysqli_query("SELECT * FROM users WHERE username = '$username'");
        $row = mysqli_fetch_row($result);
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Invalid Password.";
        exit;
    }
}
?>