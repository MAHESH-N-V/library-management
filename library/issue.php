<?php
$con=mysqli_connect("localhost","root","","library");
  $q="select * from request;";
$r=mysqli_query($con,$q);
echo "<table border='1px solid black'><tr><td>ROLL</td><td>bookid</td></tr>";
if($r->num_rows!=0){
while($rows=$r->fetch_assoc())
{
    echo "<tr><td>".$rows["rollno"]."</td><td>".$rows["id"]."</td></tr>";
    
    
}
echo"</table>";}
else echo "illegal operation";
?>
<html>
    
    <form method="post" action="issue1.php">ENTER THE BOOK ID:
    
    <input type="text" name="bidd"/><br>
    ENTER THE STUDENTS ROLL NO:
    <input type="text" name="roll"/><br>
    <input type="submit" value="issue"/>
    </form>
    
    
</html>