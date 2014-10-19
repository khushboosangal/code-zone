<?php
$uname=$_POST['userid'];
$pwd=$_POST['pwd'];
$con=mysql_connect("localhost","root","qwerty","first");
if(!$con)
{
die("connection failed".mysql_error());
}
mysql_select_db("first",$con);
$result=mysql_query("select * from user");
while($row=mysql_fetch_array($result))
{
if($row['username']==$uname && $row['password']==$pwd){
echo "welcome";
header('Location:registration.html');
}
}
mysql_close($con);
?> 

