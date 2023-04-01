

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sell.css">
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
    <h1 class="sell-h1">Sell Id</h1>
    <h1 class="sell-h1">Cycle Model</h1>
    <h1 class="sell-h1">Cycle Price</h1>
    <h1 class="sell-h1">Cycle Condition</h1>
    <h1 class="sell-h1">Cycle Used</h1>
    <h1 class="sell-h1">Seller Mail</h1>
    <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from sell";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
        <p class="sell-p"><?php echo $row['id'];?></p>
        <p class="sell-p"><?php echo $row['model'];?></p>
        <p class="sell-p"><?php echo $row['price'];?></p>
        <p class="sell-p"><?php echo $row['cond'];?></p>
        <p class="sell-p"><?php echo $row['used'];?></p>
        <p class="sell-p"><?php echo $row['email'];?></p>

<?php }}?>


  </section>

  <section class="sell-buy grid grid-col-2">
      <form action="sellAdd.php" method="post" class="sell">
        <h1>Sell Cycle</h1>
        <h5>Cycle Model</h5>
        <input type="text" name="model">
        <h5>Cycle Price</h5>
        <input type="text" name="price">
        <h5>Cycle Condition</h5>
        <input type="text" name="condition">
        <h5>Cycle Used</h5>
        <input type="text" name="used">
        <input type="submit" name="submit" value="Sell">
      </form>
     
      <form action="buyAdd.php" method="post" class="sell buy">
        <h1>Buy Cycle</h1>
        <h5>Sell Id</h5>
        <input type="text" name="sell">
        <h5>Cycle Model</h5>
        <input type="text" name="model">
        <h5>Cycle Price</h5>
        <input type="text" name="price">
        <h5>Cycle Condition</h5>
        <input type="text" name="condition">
        <h5>Cycle Used</h5>
        <input type="text" name="used">
        <input type="submit" name="submit" value="Buy">
      </form>

    </section>
 


    
    
  </body>
</html>