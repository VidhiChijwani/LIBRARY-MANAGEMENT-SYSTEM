<?php
  include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
	<style>

.search{
	padding-top:10px;
	padding-bottom: 10px;
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
	border: 1px solid black;


}
.btn{
	border-color:black; 
}
.addcompany{
	color:white;
	padding:20px;
	margin:10px;	

}
	</style>
	
</head>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>
<form  method="POST">
<input class="search" class="form-control" type="text" name="department" placeholder="enter category" aria-label="Search" required="">
<input  class="search" class="form-control" type="text" name="search" placeholder="Search Book Name" aria-label="Search" required="">                     
                
<button type="submit" class="btn btn-primary" name="submit" >
    <i class="fas fa-search"></i>
  </button>	
  <button type="button" class="btn btn-dark">
    <a class="addcompany"  href="addbook.php">ADD BOOK</a></h4>
  </button>
  
  <button type="button" class="btn btn-dark">
  <a href="issue.php" style="color:white">Issue Book</a>
  </button> 
         
    <button type="button" class="btn btn-dark">
    <a class="addcompany"  href="login.php">Log Out</a></h4>
  </button>
              


         
</form>

<table class="table">
  <thead>
    <tr>
        <th scope="col">Bookid</th>
        <th scope="col">Author</th>
        <th scope="col">Edition</th>
        <th scope="col">Quantity</th>
        <th scope="col">Department</th>
        <th scope="col">Status</th>
        <th scope="col">Bookname</th>
        <!-- <th scope="col">Image</th> -->
		<th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
      
    <?php 
    if(isset($_POST['search']))
	{
		$q=mysqli_query($con,"SELECT * from book where bookname like '%$_POST[search]%' and department like '%$_POST[department]%' ");

		if(mysqli_num_rows($q)==0)
		{
			echo "book not found";
		}
		else{
        
			
		
			while($row=mysqli_fetch_assoc($q))
			{
            ?>
                <tr>
                    <td><?=$row['bookid']?> </td>
                    <td><?=$row['authors']?> </td>
                    <td><?=$row['edition']?> </td>
                    <td><?=$row['quantity']?> </td>
                    <td><?=$row['department']?> </td>
                    <td><?=$row['status']?> </td>
                    <td><?=$row['bookname']?> </td>
                    <!-- <td><?=$row['image']?> </td> -->
					<td><?=$row['price']?> </td>
                    <td><a href="editbook.php?bookname = " <?=$row['bookname']?> > Edit </a>
                    <td><a href="deletebook.php?bookname = " <?=$row['bookname']?> > Delete </a>
				</tr>;
<?php
			}

		
		}
    }
    else
    {
        $res = mysqli_query($con,"SELECT * FROM book ORDER BY book.bookid ASC;");
        while($row=mysqli_fetch_assoc($res))
			{
            ?>
                <tr>
                    <td><?=$row['bookid']?> </td>
                    <td><?=$row['authors']?> </td>
                    <td><?=$row['edition']?> </td>
                    <td><?=$row['quantity']?> </td>
                    <td><?=$row['department']?> </td>
                    <td><?=$row['status']?> </td>
                    <td><?=$row['bookname']?> </td>
                    <!-- <td><?=$row['image']?> </td> -->
					<td><?=$row['price']?> </td>
                    <td><a href="editbook.php?bookname=<?= $row['bookname']?>" > Edit </a>
                    <td><a href="deletebook.php?bookname=<?=$row['bookname']?>"  >  Delete </a>
				</tr>;
<?php  
             }
    }
?>
	
  </tbody>
</table>
</body>
</html>
