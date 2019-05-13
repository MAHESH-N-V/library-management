<?php
session_start();

   $con=mysqli_connect("localhost","root","","library");
  $q="select * from books;";
$r=mysqli_query($con,$q);
echo "<table border='1px solid black'><tr><td>id</td><td>name</td></tr>";
while($rows=$r->fetch_assoc())
{
    echo "<tr><td>".$rows["id"]."</td><td>".$rows["name"]."</td></tr>";
    
    
}
echo"</table>";

?>
<html>
    
    <form method="post" action="requestb1.php">ENTER THE BOOK ID:
    
    <input type="text" name="bidd"/>
    <input type="submit" value="request"/>
    </form>
    
    
</html>