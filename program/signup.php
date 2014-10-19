<?php
$con=mysqli_connect('localhost','root','qwerty','first');
if(mysqli_connect_error())
{
echo "failed".mysqli_connect_error();
}
$uname=mysqli_real_escape_string($con,$_POST['userid']);
$pwd=mysqli_real_escape_string($con,$_POST['pwd']);
if(mysqli_num_rows(mysqli_query("SHOW TABLES LIKE 'user'"))>0) {
echo "TABLE exst";
}
else {
echo "entered\n";
$addtable="CREATE TABLE user(username char(20),password char(20))";
mysqli_query($con,$addtable);
} 
$sql="INSERT INTO user (username,password) VALUES ('$uname','$pwd')";
mysqli_query($con,$sql);
//mysqli_query($con,$sql);
mysqli_close($con);

?>
