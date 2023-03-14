<?php
if (!(isset($_POST['txtUserName']) && isset($_POST['txtPassword'])  )) {
include ("login.html");
die();
}
$username=$_POST['txtUserName'];
$password=$_POST['txtPassword'];

if ($username =="root" && $password=="1234") {
   setcookie("username",$username,time()+10);
   include_once ("mainwindow.php");
}else{
    echo ("incorrect username or password");
    include ("login.html");
}
?>
