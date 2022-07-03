<?php
  include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<style>
		.btn{
  display: inline-block;
  margin-top: 1rem;
  background:var(--orange);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid var(--orange);
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  background:rgba(255, 165, 0,.2);
  color:var(--orange);
}
	</style>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>
<form  method="POST">
<nav class="navbar fixed-top navbar navbar-expand-lg bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
</button>
			   
			
  <input  class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" required="">                     
                
			<button  class="btn"type="submit" name="submit"></button>
            

              
              
          <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item nav-style">
              <h4 class="link-test"> <a  class="nav-link active"  href="home.php">HOME</a></h4>
             </li>
              <li class="nav-item">
              <h4 class="link-test"><a  class="nav-link"  href="addbook.php">ADD BOOKS</a></h4>
              </li>
              <li class="nav-item">
              <h4 class="link-test"><a  class="nav-link" href="">DELETE BOOKS</a></h4>
             </li>
             <li class="nav-item">
               <h4 class="link-test"><a  class="nav-link" href="login.php">LOGOUT</a></h4>
             </li>
            </ul>
          </div>
          </nav>
          

          <section>
</form>

	<br><br><br><h2>List Of Books</h2>
	<?php
		
	
	if(isset($_POST['submit']))
	{
		$q=mysqli_query($con,"SELECT * from book where bookname like '%$_POST[search]%' ");

		if(mysqli_num_rows($q)==0)
		{
			echo "book not found";
		}
		else{
			echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
		
				echo "<th>"; echo "bookid";	echo "</th>";
				echo "<th>"; echo "authors";  echo "</th>";
				echo "<th>"; echo "edition";  echo "</th>";
				echo "<th>"; echo "quantity";  echo "</th>";
				echo "<th>"; echo "department";  echo "</th>";
				echo "<th>"; echo "status";  echo "</th>";
				echo "<th>"; echo "bookname";  echo "</th>";

			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bookid']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['bookname']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";
		}
	}

	else{
		$res=mysqli_query($con,"SELECT * FROM book ORDER BY book.bookid ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
			
				echo "<th>"; echo "bookid";	echo "</th>";
				echo "<th>"; echo "authors";  echo "</th>";
				echo "<th>"; echo "edition";  echo "</th>";
				echo "<th>"; echo "quantity";  echo "</th>";
				echo "<th>"; echo "department";  echo "</th>";
				echo "<th>"; echo "status";  echo "</th>";
				echo "<th>"; echo "bookname";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bookid']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['bookname']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
		?>
</body>
</html>
