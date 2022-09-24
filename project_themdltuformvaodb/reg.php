<?php
require 'db/connect.php';
if (isset($_POST['btn-reg'])) 
{
    echo "da submit";
    print_r($_POST);
    $fullname = $_POST['fullname'];
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
    $email = $_POST['email'];
    $gend = $_POST['gender'];
    $addres = $_POST['address'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "insert into user_tbl(fullname,username,password,gender,address,email)  values ('$fullname','$user_name','$pass_word','$gend','$addres','$email') ";
    if ($conn->query($sql) === true)
      { echo "luu du lieu thanh cong";}

else {
    echo "loi" . $sql . "<br>" .$conn->error;
}
$conn->close();
}
?>
