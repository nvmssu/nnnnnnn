<?php
$host='localhost';
$username="root";
$password="";
$dbname="mssu";

$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "Connection failed: ".$conn->connect_error;
}
echo "ket noi thanh cong";

?>