<?php
if (!(isset($_COOKIE['username']) )){
   echo ("time out");
    include ("login.html");
    die();
}
$_SESSION['lastactive']=time();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>welcome to harvest super</h1>
<h4>you are login as <?php echo($_COOKIE['username']) ?></h4>
<h4>(<a href="logout.php"> log out</a>)</h4>
<ul>
    <li><a href="fruit.php"> fruit</a></li>
    <li><a href="vegetable.php"> vegetable </a></li>
</ul>
</body>
</html>
