

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashA.css">
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

    <section class="section-show grid">
      <div class="menu">
        <a class="menu-sub" href="sellA.php">Sell or Buy Cycle</a>
        <a class="menu-sub" href="hireA.php">Hire or Rent Cycle</a>
      </div>
      <div>
        <h1 class="history">All History</h1>
        <div class="history-div">
          <div class="grid his-main">
            <h1 class="sell-h">Action</h1>
            <h1 class="sell-h">Model</h1>
            <h1 class="sell-h">Price</h1>
            <h1 class="sell-h">User Mail</h1>
          <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from history";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
        <p class="sell-p"><?php echo $row['Action'];?></p>
        <p class="sell-p"><?php echo $row['model'];?></p>
        <p class="sell-p"><?php echo $row['price'];?></p>
        <p class="sell-p"><?php echo $row['email'];?></p>

<?php }}?>
          </div>
        </div>
      </div>
    </section>
 


    
    
  </body>
</html>