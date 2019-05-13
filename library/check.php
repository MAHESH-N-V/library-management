<?php
$con=mysqli_connect("localhost","root","","library");
  $q="select * from books;";
$q0="select * from assign;";
$r=mysqli_query($con,$q);
$r1=mysqli_query($con,$q0);
echo "<table border='1px solid black'><tr><td>BOOKS in LIBRARY</td></tr>";

while($rows=$r->fetch_assoc())
{
    echo "<tr><td>".$rows['id']."</td><td>".$rows['name']."</td></tr><br>";
    
    
    
}

echo "</table>";
echo "<table border='1px solid black'><tr><td>BOOKS issued</td></tr>";

while($rows=$r1->fetch_assoc())
{
    echo "<tr><td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['roll_no']."</td></tr><br>";
    
    
    
}
mysqli_close($con);
echo "</table>";

?>
