
  <?php
   session_start();
   $name=$_POST["name"];
   $pass=$_POST["pass"];
   $con=mysqli_connect("localhost","root","","library");
   $q="select * from students where rollno='".$name."' ;";
   $r=mysqli_query($con,$q);
if($r->num_rows!=0)
{
   $rows=$r->fetch_assoc();
    if($rows["password"]==$pass)
    {   $_SESSION["roll"]=$name;
        echo "<button><a href='requestb.php'>REQUEST FOR A BOOK</a></button><br>
        <button><a href='checkbooks.php'>check books</a></button><br>
        <button><a href='return.php'>return book</a></button><br>";
        
        
    }
    else
    {
        echo "invalid password";
    }
}
else echo "no such user found";
?> 

   
   <html>
       <head><style>a{text-decoration: none;color: black;}</style></head>
    <body>
        
        
        
    </body>
    
    
</html>