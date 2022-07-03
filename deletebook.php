<?php
        include "connection.php";
?>
<?php

        if($_GET['bookname'])
        {
            $bid= $_GET['bookname'];
            $query = "DELETE from book WHERE bookname = '".$bid."'";
        
            $q=mysqli_query($con,$query);
            
            if($q)
            {
                header("Location: books.php");
            }
          
        }

       
?>
        