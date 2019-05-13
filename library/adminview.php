<?php  
 if($_POST["lname"]=="admin" && $_POST["lpass"]=="admin")
 {
     
     
     
 }
    else
    {
        echo "<h2>invalid user</h2><br>";
        
    
    
    }




?>
<html>
    <head>
        <style>a{text-decoration: none;
            color: black;}</style>
    </head>
    <body>
       <center>
        <button ><a href="addnew.html">ADD NEW BOOK</a></button>
        <button ><a href="issue.php">issue a book</a></button>
        <button ><a href="check.php">check assigned books</a></button>
        
        </center>
        
    </body>
    
    
    
</html>
