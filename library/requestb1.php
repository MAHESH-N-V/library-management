<?php
session_start();
$roll=$_SESSION["roll"];
$id=$_POST["bidd"];
   $con=mysqli_connect("localhost","root","","library");
  $q="insert into request values('".$roll."','".$id."');";
if(mysqli_query($con,$q))
{echo "request submitted";}
else echo "failed";
?>