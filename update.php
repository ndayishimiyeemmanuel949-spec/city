<?php
include('connection.php');
$row=$_GET['id'];
$select=mysqli_query($conn,
"select * from users where u_id='$row'");
while($a=mysqli_fetch_array($select)){
    ?>
    <center>
    <form action="" method="POST">
      <h1>update here 👇</h1>  
      <input type="text" name="u_id" 
      value="<?php echo $a['u_id']?>"><br><br>
      <input type="text" name="username" 
      value="<?php echo $a['username']?>"><br><br>
      <input type="password" name="password" 
      value="<?php echo $a['password']?>"><br><br>
      <button name="update">Update</button>
      </form>
    <?php
}
?>
<?php
if(isset($_POST['update'])){
    $u_id=$_POST['u_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,
    "UPDATE users SET u_id='$u_id', username='$username',
     password='$password' where u_id='$row'");
    header("location: select.php");

}
?>