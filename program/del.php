<?php
 $id=$_POST['id'];
 $connect=mysqli_connect('localhost','root','qwerty','first');
 if(mysqli_connect_error())
 {
 echo "failed";
 }
  $del="DELETE FROM EMP WHERE id='$id'";
  mysqli_query($connect,$del);
  echo "data delete";
$tabdata="SELECT * FROM EMP";
 echo "<table border=1 cellpadding=1>";
$result=mysqli_query($connect,$tabdata);
    while ($row=mysqli_fetch_array($result)){
         echo "<tr><td>" . $row['name']."</td><td>". $row['id']."</td><td> ".$row['salary']."</td>";
         echo "</tr>";
                                          }
 echo "</table>";
mysqli_close($connect);
?>
