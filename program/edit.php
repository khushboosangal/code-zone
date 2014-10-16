<?php
$id=$_POST['id'];
echo $id;
$connect=mysqli_connect('localhost','root','qwerty','first');
if(mysqli_connect_error())
{
echo "failed";
}
$val="SELECT * FROM EMP WHERE id='$id'";
$res=mysqli_query($connect,$val);
print_r($res);
echo "data displayed";
echo "<table>";
$x=mysqli_fetch_array($res);
echo "<tr><td> <form method=post action=confedit.php>
<input type=text name=empname value='".$x['name']."'>
<input type=text name=empid value='".$x['id']."'>
<input type=text name=salary value='".$x['salary']."'>
<input type=submit value=update></form> </td></tr>"; 
mysqli_close($connect);
?>
