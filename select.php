<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <br><br><br> <center>
  <table border="4">
<tr>
    <th>USER ID</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th colspan="2">ACTION</th>
</tr>

<?php
include("connection.php");
$select=mysqli_query($conn,"select * from users");
while($row=mysqli_fetch_array($select)){
    echo"<tr><td>".$row['u_id']."</td>";
    echo"<td>".$row['username']."</td>";
    echo"<td>".$row['password']."</td>";

    ?>
    <td>
    <a href="delete.php?id=<?php echo $row['u_id']?>"><i class="fa-solid fa-trash"></i></a>
    <a href="update.php?id=<?php echo $row['u_id']?>"><i class="fa-solid fa-pen"></i></a></td>
    <?php
}
?></table>  </center>
</body>
</html>
