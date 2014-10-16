<?php
$name=$_POST['empname'];
$id=$_POST['empid'];
$salary=$_POST['salary'];
//echo $name;
 $conn=mysqli_connect('localhost','root','qwerty','first');
   if(mysqli_connect_error()) {
     echo "failed".mysqli_connect_error();
                              }
$sql="UPDATE EMP SET name='$name',salary='$salary' WHERE id='$id'";
mysqli_query($conn,$sql);
echo "info updated";

$tabdata="SELECT * FROM EMP";
echo "<table border=1 cellpadding=1>";
$result=mysqli_query($conn,$tabdata);
      while ($row=mysqli_fetch_array($result)){
             echo "<tr><td>" . $row['name']."</td><td>". $row['id']."</td><td> ".$row['salary']."</td>";
                                              }
echo "</table>";
mysqli_close($conn);
?>
