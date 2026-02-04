<?php

$conn = new mysqli("localhost", "root", "", "userdb");

if ($conn->connect_error) {
    die("Database connection failed");
}

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];

$username=trim($username);
$email=trim($email);

$username=strtolower($username);
$username=ucfirst($username);

$username=htmlspecialchars($username);
$email=htmlspecialchars($email);

if (strlen($username)<5) 
   {
    die("Username must be at least 5 characters");
}

if (strlen($password)<6) 
   {
    die("Password must be at least 6 characters");
}

$hashed= password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO users (username, email, password)
       VALUES ('$username', '$email', '$hashed')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successfully completed for " . $username;
} else {
   die("Insert failed");
}

$conn->close();
?>














