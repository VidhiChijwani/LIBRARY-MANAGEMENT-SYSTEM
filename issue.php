


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
                padding-left: 70px;
                padding-top: 50px;
            }
            .title{
                padding-top: 30px;
                text-align:center;
                padding-left:100px;
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
            <h2  class="title">ISSUE BOOKS</h2>
            <form class="addbook" method="post" style="text-align: center;">
                
               <input class="book" style="text-align: center;"class="form-control" name="Issueid" type="text" placeholder="Enter Issueid" size="50" value=""><br><br>
               <input  class="book" type="text"class="form-control" name="bookid"placeholder="Enter Bookid" size="50" value=""><br><br>
               <input  class="book" type="text"class="form-control" name="emailid"placeholder="Enter emailid" size="50" value=""><br><br>
            <button  class="btn btn-dark" type="submit" name="submit">ISSUE</button>
         </form>
        </div>
        <?php
        if(isset($_POST['submit']))
         {
             echo "INSERT INTO issue_book(`Issueid`, `bookid`, `emailid`) VALUES ('$_POST[Issueid]','$_POST[bookid]','$_POST[emailid]');";
            mysqli_query($con,"INSERT INTO issue_book(`Issueid`, `bookid`, `emailid`) VALUES ('$_POST[Issueid]','$_POST[bookid]','$_POST[emailid]');");
            
            ?>
            <script type="text/javascript">
                alert("BOOK ISSUED Successfully");
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