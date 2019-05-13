<?php
  session_start();
$roll=$_SESSION["roll"];
  $con=mysqli_connect("localhost","root","","library");
  $q="select * from assign where roll_no='".$roll."';";
  $r=mysqli_query($con,$q);
  echo "<table border='1px solid black'><tr><td>id</td><td>name</td></tr>";
while($rows=$r->fetch_assoc())
{
    echo "<tr><td>".$rows["id"]."</td><td>".$rows["name"]."</td></tr>";
    
    
}
echo"</table>";




?>
<html>
    
    
    <body>
    <form action="return1" method="post">
        ENTER the id of book:<input type="text" name="bidd"/><br>
        <input type="submit" value="return"/>
        
        
        
    </form>
    </body>
</html>