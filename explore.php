<?php
  include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Explore page</title>
    <link rel="stylesheet" href="CSS/style.css">
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
.images_size{
    height="370";
    width="220";
}
    </style>
</head>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body>

    <section id="title">
        <nav class="navbar fixed-top navbar navbar-expand-lg bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <input  class="link-test" class="form-control" type="text" placeholder="Search" aria-label="Search">                     
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  
                <?php
 $con = mysqli_connect("localhost","root","","library");
       $sql = "SELECT distinct department FROM `book`";
 $all_categories = mysqli_query($con,$sql);

 while ($category = mysqli_fetch_array($all_categories,MYSQLI_ASSOC)):; 

                ?>
                
                <a class="dropdown-item" href="explore.php?val=<?php echo $category["department"]; ?>" value='<?php echo $category["department"]; ?>'><?php echo $category["department"]; ?></a>
                 <?php
                 endwhile;
                 ?>
                  
                </div>
              </div>
              
          <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item nav-style">
              <h4 class="link-test"> <a  class="nav-link active"  href="home.php">HOME</a></h4>
             </li>
              <li class="nav-item">
              <h4 class="link-test"><a  class="nav-link"  href="adminlogin.php">ADMIN</a></h4>
              </li>
              <li class="nav-item">
              <h4 class="link-test"><a  class="nav-link" href="">ABOUT US</a></h4>
             </li>
             <li class="nav-item">
               <h4 class="link-test"><a  class="nav-link" href="logout.php">LOGOUT</a></h4>
             </li>
            </ul>
          </div>
          </nav>
          

        
     <div class="row">
     <?php
      if(isset($_REQUEST['val']))
      {
        $d=$_GET["val"];
        $sql="SELECT * FROM book where department='". $d ."'";
        
      }
      else{
        $sql="SELECT * FROM book";
        
      }
        $result=$con->query($sql);
        while($row=$result->fetch_assoc()){        
       ?>
         <div class="col-lg-3 col-md-4 col-sm-6">
         <img class="book-stall"  class="img-fluid"  src="<?= $row['image']; ?>" lt="Responsive image" height="370" width="220">
         <h6  style="margin-top:15px" class="text-light bg-info text-center rounded p-1"><?= $row['bookname'] ?></h6>
         <h4> Author: <?= $row['authors'];?> </h4>
    
         
    
        </div>
        
        
        <?php } ?>
        
        </div>

    
        </section>
</body>
</html>




