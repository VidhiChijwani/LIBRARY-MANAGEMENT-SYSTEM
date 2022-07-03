<?php
  include "connection.php";

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
                padding-left: 80px;
                padding-top: 50px;
            }
            .title{
                padding-top: 30px;
                text-align:center;
                color:white;
                
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

    <body background="issue_background.jpg">
        
        <script src="" async defer></script>
        <div>
            <h2 align="center" class="title">ADD NEW BOOK</h2>
            <form class="addbook" method="post" style="text-align: center;">
                
               <input class="book" style="text-align: center;"class="form-control" name="bookid" type="text" placeholder="Enter The Book Id" size="60" value=""><br><br>
               <input  class="book" type="text"class="form-control" name="authors"placeholder="Enter the author name" size="60" value=""><br><br>
                <input class="book" type="text" class="form-control"name="edition" placeholder="Edition" size="60" value=""><br><br>
              <input class="book" type="text"class="form-control"name="quantity" placeholder="Available Quantity" size="60" value=""><br><br>
               <input class="book" type="text"class="form-control" name="department"placeholder="Department" size="60" value=""><br><br>
              <input class="book" type="text" class="form-control"name="status" placeholder="Stuatus" size="60" value=""><br><br>
              <input class="book" type="text" class="form-control" name="bookname"placeholder="ENTER THE BOOK NAME" size="60" value=""><br><br>
              <input class="book" type="text" class="form-control" name="image"placeholder="Enter the copy address" size="60" value=""><br><br>
              <input class="book" type="text" class="form-control" name="price"placeholder="Enter the price" size="60" value=""><br><br>
            <button  class="btn btn-dark" type="submit" name="submit">ADD</button>
         </form>
        </div>
        <?php
        if(isset($_POST['submit']))
         {
            mysqli_query($con,"INSERT INTO book(`bookid`, `authors`, `edition`, `quantity`, `department`, `status`, `bookname`,`image`,`price`) VALUES ('$_POST[bookid]','$_POST[authors]','$_POST[edition]','$_POST[quantity]','$_POST[department]','$_POST[status]','$_POST[bookname]','$_POST[image]','$_POST[price]');");
            ?>
            <script type="text/javascript">
                alert("BOOK ADD Successfully");
            </script>
            <?php
         }
         else{
             ?>
              <script type="text/javascript">
                alert("ERROR");
            </script>
             <?php
         }
        ?>
    </body>
</html>