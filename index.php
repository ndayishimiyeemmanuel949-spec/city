<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  fieldset{
    width: 200px;
    height: 300px;
    border-radius   : 10px;
    border: 4px dotted black;
  }
  input{
    width: 200px;
    height: 30px;
    border-radius: 5px;
  }
  button{
      width: 200px;
    height: 30px;
    background: rgb(18, 18, 18);
    border-radius: 5px;
    color: white;

  }
</style>
<body> <center>
    <fieldset>

<form action="" method="POST">
<h2>INDEX PAGE</h2>
<input type="text" name="username" placeholder="Enter your usename"><br><br>
<input type="password" name="password" placeholder="Enter your password"><br><br>
<button name="login">Create</button><br><br><br>
 <a href="create.php">Create Account</a>
    </form></fieldset></center>
</body>
</html>
<?php
session_start();
include('connection.php');
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysqli_query($conn,"select * from users where
     username='$username' && password='$password'");
     while($row=mysqli_fetch_array($select)){
        if(mysqli_num_rows($select)>=1){
            header("location: homepage.php");
            $_SESSION['username']=$a['username'];
            $_SESSION['password']=$a['password'];
        }
     }
}
?>