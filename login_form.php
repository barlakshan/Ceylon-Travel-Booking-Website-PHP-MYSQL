<?php 

$host="localhost";
$user="root";
$password="";
$db="book_db";


$conn = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login_form where user='$uname' AND password='$password' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:admin/index.php');
        exit();
    }
    else{
        header('location:login_error.php');
        exit();
    }
        
}
?>