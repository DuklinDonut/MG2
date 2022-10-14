<?php


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','mg2') or die(mysqli_error());

//db connexion
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(name,email,password)
           values (?,?,?)");
    $stmt->bind_param("sss", $name,$email,$password);
    $stmt->execute();
    echo "registration successfully...";
    echo '<a href="../index.html">Click here to continue</a>';
    $stmt->close();
    $conn->close();
}
?>
