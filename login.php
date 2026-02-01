<?php
$conn=new mysqli("localhost","root","","userdb");
if(!$conn)
    {
    die("database Connection Failed:");
}




$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from users where PASSWORD='$password'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    if(password_verify($password,$row['PASSWORD'])){
        echo"login successful";
    }
    else{
        echo"invalid password";
    }
}
else{
    echo"no user found";
}
$conn->close();
 ?>