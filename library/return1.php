<?php
  session_start();
$roll=$_SESSION["roll"];
$id=$_POST["bidd"];
  $con=mysqli_connect("localhost","root","","library");
  $q="select * from assign where roll_no='".$roll."';";
  $r=mysqli_query($con,$q);
   $rows=$r->fetch_assoc();
  $name=$rows["name"];
$q1="delete from assign where id='".$id."';";
if(mysqli_query($con,$q1)){

  $q0="insert into books values('".$id."','".$name."');";
mysqli_query($con,$q0);
echo "book returned";}
else echo "error in returning";
?>