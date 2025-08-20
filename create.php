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
<h2>CREATE NEW USER name</h2>
<input type="text" name="username" placeholder="Enter your usename"><br><br>
<input type="password" name="password" placeholder="Enter your password"><br><br>
<button name="login">Create an accaunt</button>
    </form></fieldset></center>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");
header("location: index.php");
}
?>
