

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hire.css">
  <title>Cycle Online Shop</title>
</head>
<body>
  <header class="header">
    <nav>
    <div class="nav-img-title">
        <a class="nav-car-title" href="signIn.php"> Cycle Shop Online</a>
      </div>
      <div class="nav-left-box">
        <a class="nav-left" href="signIn.php">Log Out</a>
      </div>
    </nav>
  </header>

  <section class="section-sell">
    <h1 class="sell-h1">Rent Id</h1>
    <h1 class="sell-h1">Cycle Model</h1>
    <h1 class="sell-h1">Rent</h1>
    <h1 class="sell-h1">Time</h1>
    <h1 class="sell-h1">Seller Mail</h1>
    <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from rent";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
        <p class="sell-p"><?php echo $row['id'];?></p>
        <p class="sell-p"><?php echo $row['model'];?></p>
        <p class="sell-p"><?php echo $row['price'];?></p>
        <p class="sell-p"><?php echo $row['time'];?></p>
        <p class="sell-p"><?php echo $row['email'];?></p>

<?php }}?>


  </section>

  <section class="sell-buy grid grid-col-1">
      <form action="rentAddA.php" method="post" class="sell">
        <h1>Rent Cycle</h1>
        <h5>Rent Id</h5>
        <input type="text" name="id">
        <input type="submit" name="submit" value="Rent">
      </form>

    </section>
 


    
    
  </body>
</html>