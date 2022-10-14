<?php
/*$host="localhost";
$user="root";
$passwd="";
$db="mg2";
$conni=mysqli_connect($host,$user,$passwd);
mysqli_select_db($conni,$db);
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from users where email='".$email."'AND password='".$password."'
     limit 1";
    $result=mysqli_query($sql);
    if(mysqli_num_rows($result)==1){
        echo "You have success";

    }else{
        echo "wrong credentials";

    } exit();
}
*/
if(isset($_POST["submit"]))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $db=new PDO('mysql:host=localhost;dbname=mg2','root','');
    $sql="SELECT * FROM users where email='$email'";
    $result=$db->prepare($sql);
    $result->execute();
    echo "Connected successfully...";
    echo '<a href="../index.html">Click here to continue</a>';


    /*if($result->rownCount()>0)
    {

    }
    else{
        $pass= password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO users(email,password)VALUES ('$email','$pass')";
        $req=$db->prepare($sql);
        $req->excecute();
        echo "enregistrement effectué";
    }*/
} else echo 'no';
?>