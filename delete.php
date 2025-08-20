<?php
include('connection.php');
$row=$_GET['id'];
mysqli_query($conn,
"delete from users where u_id='$row'");
header("location: select.php");
?>