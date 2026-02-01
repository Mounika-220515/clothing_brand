<?php
$conn=new mysqli("localhost","root","","userdb");
if($conn->connect_error)
    {
    die("database Connection Failed:");
}




$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$hashed=password_hash($password,PASSWORD_DEFAULT);
$sql="insert into users(username,email,PASSWORD)
    values('$username','$email','$hashed')";
 if($conn->query($sql)===TRUE)
 {
    echo"registration successfully";
 }
 else
 {
    echo"insert  failed";
 }

 $conn->close()
 ?>