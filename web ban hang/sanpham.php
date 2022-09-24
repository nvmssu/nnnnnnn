<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanpham_tbl";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
}
else{
echo "ket noi thanh cong <br>";
}


    if(isset($_POST['btn_dk']))
    {
      // $host='localhost';
      // $username="root";
      // $password="";
      // $dbname="mssu";
      
      // $conn=new mysqli($host,$username,$password,$dbname);

    $name = $_POST['name'];
    $gmail=$_POST['gmail'];
    $pass_word = $_POST['pass_word'];

if(!empty($name) && !empty($gmail) && !empty($pass_word))
{
$sql = "INSERT INTO themthanhvien(namee, gmaill, passwordd)
VALUES('$name', '$gmail', '$pass_word')";
// $sql = "INSERT INTO themthanhvien (namee, gmaill, passwordd)
// VALUES ('$name', '$gmail', '$pass_word')";
if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} else
{
  echo "ban can them thong tin day du";
  require 'trangchu.html';
  
}


$conn->close();
   }
   ?>
