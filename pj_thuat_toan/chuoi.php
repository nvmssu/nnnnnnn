<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap thong tin</title>
</head>
<body>
    <form action="" method="post">
<input type="text" name="mssv" placeholder="massv"><br>
<input type="text" name="ten" placeholder="ten"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="sdt" placeholder="sdt"><br>
<input type="submit" name="dk" value="dang ki"><br>

    </form>
</body>
</html>


<?php

if (isset($_POST['dk']) && ($_POST['dk'])) {
$mssv=$_POST['mssv'];
$ten=$_POST['ten'];
$email=$_POST['email'];
$sdt=$_POST['sdt'];

echo $mssv."<br>";
echo $ten."<br>";
echo $email."<br>";
echo $sdt."<br>";

}
?>