 <?php
  include "connection.php";

?>
<?php

if(isset($_GET['bookname']))
        {
            
            
            $bid = $_GET['bookname'];
            $query = "SELECT * from book WHERE bookname = '".$bid."'";
            $q=mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
          
        }
        else if(isset($_POST['submit']))
         {
            
            $bid = $_POST['bookid'];
            $bauthor = $_POST['authors'];
            $bedition = $_POST['edition'];
            $bquantity = $_POST['quantity'];
            $bdept = $_POST['department'];
            $bstatus = $_POST['status'];
            $bname = $_POST['bookname'];
            $bprice = $_POST['price'];
            

                   

            // "^(?!-)[A-Za-z0-9-]+([\\-\\.]{1}[a-z0-9]+)*\\.[A-Za-z]{2,6}$"


            $reg = "UPDATE book set bookid = '$bid', authors = '$bauthor' ,edition = '$bedition' ,quantity = '$bquantity', department = '$bdept', status = '$bstatus', bookname = '$bname',price = '$bprice'    where bookname = '".$bname."'";
            mysqli_query($con,$reg);
            
            ?>
            <script type="text/javascript">
                alert("Book Updated Successfully");
            </script>
            
            <?php
            header("Location: books.php");
         }
         else{
             ?>
              <script type="text/javascript">
                alert("ERROR");
            </script>
             <?php
         }
        ?>




<!<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .book{
                align:center;
                text-align: center;
                margin:10px;
               line-height: 3; 
               border-color: black;
               background-color: black;
               color: antiquewhite;
               
            }
            .addbook{
                padding-left: 200px;
                padding-top: 50px;
            }
            .title{
                padding-top: 30px;
                text-align:center;
                
            }
            .btn{
                text-align: center;
             } 
            
        </style>
    </head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <body>
        
        <script src="" async defer></script>
        <div>
            <h2 align="center" class="title">UPDATE</h2>
            <form class="addbook" action="editbook.php" method="post" style="text-align: center;">
                
               <input class="book" style="text-align: center;"class="form-control" name="bookid" type="text" placeholder="Enter The Book Id" size="60" value="<?=$row['bookid']?>"><br><br>
               <input  class="book" type="text"class="form-control" name="authors"placeholder="Enter the author name" size="60" value="<?=$row['authors']?>"><br><br>
                <input class="book" type="text" class="form-control"name="edition" placeholder="Edition" size="60" value="<?=$row['edition']?>"><br><br>
              <input class="book" type="text"class="form-control"name="quantity" placeholder="Available Quantity" size="60" value="<?=$row['quantity']?>"><br><br>
               <input class="book" type="text"class="form-control" name="department"placeholder="Department" size="60" value="<?=$row['department']?>"><br><br>
              <input class="book" type="text" class="form-control"name="status" placeholder="Status" size="60" value="<?=$row['status']?>"><br><br>
              <input class="book" type="text" class="form-control" name="bookname"placeholder="ENTER THE BOOK NAME" size="60" value="<?=$row['bookname']?>"><br><br>
              <input class="book" type="text" class="form-control" name="price"placeholder="ENTER price" size="60" value="<?=$row['price']?>"><br><br>
            <button  class="btn btn-dark" type="submit" name="submit">UPDATE</button>
         </form>
        </div>
       
    </body>
</html> 