<?php
session_start();
   $con=mysqli_connect("localhost","root","","library");
   $id=$_POST["bidd"];
$roll=$_POST["roll"];
$q0="select * from books where id='".$id."' ;";
//$q1="select * from assign where roll_no='".$roll."' ;";
$r0=mysqli_query($con,$q0);
//$r1=mysqli_query($con,$q1);
//if($r1->num_rows>0){
if($r0->num_rows>0 ){
$row=$r0->fetch_assoc();
$name=$row["name"];
   $q="insert into assign values('".$roll."','".$id."','".$name."');";
$r=mysqli_query($con,$q);
echo "issued";
$q1="delete from books where id='".$id."';";
    $q2="delete from request where id='".$id."';";
$r1=mysqli_query($con,$q1);
$r1=mysqli_query($con,$q2);}
else echo "no such book found or book is not free";
?> 

