<?php
  $con=mysqli_connect('localhost','root','qwerty','first');
    if(mysqli_connect_error())
    {
      echo "failed".mysqli_connect_error();
    }   
 $name=mysqli_real_escape_string($con,$_POST['empname']);
 $id=mysqli_real_escape_string($con,$_POST['id']);
 $salary=mysqli_real_escape_string($con,$_POST['salary']);
    if(mysqli_num_rows(mysqli_query("SHOW TABLES LIKE 'EMP'"))>0)  {
     echo "TABLE exst";
    }
    else {
         echo "entered\n";
         $addtable="CREATE TABLE EMP(name CHAR(30),id INT(4),salary INT(10))";
         mysqli_query($con,$addtable);
         } 
   $sql="INSERT INTO EMP (name,id,salary) VALUES ('$name','$id','$salary')";
   mysqli_query($con,$sql);
   $tabdata="SELECT * FROM EMP";
   echo "<table border=1 cellpadding=1>";
   $result=mysqli_query($con,$tabdata);
  while ($row=mysqli_fetch_array($result)){
         echo "<tr><td>" . $row['name']."</td><td>". $row['id']."</td><td> ".$row['salary']."</td>";
         echo "<td><form  action=del.php method=post>
            <input name=id type=hidden value='".$row['id']."';>
            <input type=submit name=submit value=delete>
            </form></td>";
         echo "<td><form  action=edit.php method=post>
            <input name=id type=hidden value='".$row['id']."';>
            <input type=submit name=submit value=edit>
            </form></td>";
         echo "</tr>";
                                           } 
   echo "</table>";
//mysqli_query($con,$sql);
 mysqli_close($con);

?>
