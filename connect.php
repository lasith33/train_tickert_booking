<?php
$name=$_POST['name'];
$nic=$_POST['nic'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$gender=$_POST['gender'];
$password=$_POST['password'];


$conn = new mysqli('localhost','root','','train_system');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into user(name,nic,email,phoneno,gender,password)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$name,$nic,$email,$phoneno,$gender,$password);
    $stmt->execute();
    echo "registration successfully....";
    $stmt->Close();
    $conn->close();
}
?>