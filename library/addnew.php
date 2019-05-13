<?php 
  $id=$_POST["bid"];
  $name=$_POST["bname"];
  $con=mysqli_connect("localhost","root","","library");
  $q="insert into books values('".$id."','".$name."');";
  if(mysqli_query($con,$q))
  {
      echo "book added successfully";
      
  }
  else echo "failed";


?>
