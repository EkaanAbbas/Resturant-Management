<?php

$YourName=$_POST['YourName'];
$YourEmail=$_POST['YourEmail'];
$YourRequest=$_POST['YourRequest'];

//database connection
$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into contactform(Name,Email,Message)values(?,?,?)");
    $stmt->bind_param("sss",$Name,$Email,$Message);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}

?>