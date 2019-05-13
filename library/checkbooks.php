<?php
session_start();
$con=mysqli_connect("localhost","root","","library");
$roll=$_SESSION["roll"];
  $q="select * from assign where roll_no='".$roll."';";
$r=mysqli_query($con,$q);
echo "<table border='1px solid black'><tr><td>ROLL</td><td>bookid</td></tr>";
while($rows=$r->fetch_assoc())
{
    echo "<tr><td>".$rows["id"]."</td><td>".$rows["name"]."</td></tr>";
    
    
}
echo"</table>";
?>
