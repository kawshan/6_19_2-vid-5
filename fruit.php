<?php
session_start();
if (!(isset($_COOKIE['username'])    )){
    echo ("time out");
    include ("login.html");
    die();
}

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
<h4> you are login as <?php echo $_COOKIE['username']?></h4>
<h4><a href="logout.php"> logout </a></h4>
<h1>fruits</h1>
<table border="1">
    <tr>
        <th>item </th>
        <th>price</th>
    </tr>
    <tr>
        <td>apple</td>
        <td>200</td>
    </tr>
    <tr>
        <td>mango</td>
        <td>100</td>
    </tr>
    <tr>
        <td>orange</td>
        <td>120</td>
    </tr>
</table>

</body>
</html>
