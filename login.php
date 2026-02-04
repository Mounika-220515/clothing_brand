<?php

$username=$_POST['username'];
$password=$_POST['password'];


$username=trim($username);
$username=strtolower($username);
$username=htmlspecialchars($username);


if (strlen($username)<5) 
    {
    die("Username too short");
}

if (strlen($password)<6) 
    {
    die("Password too short");
}


$stored_username = "mounika";
$stored_password = "mounika123"; 


if (strcmp($username, $stored_username) === 0) {

    if (strcmp($password, $stored_password) === 0) {
        echo "Welcome " . ucfirst($username);
    } else {
        echo "Invalid password";
    }

} else {
    echo "User not found";
}
?>














