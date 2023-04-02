<?php 
  require_once('DBconnect.php');
  session_start();
  $email = $_SESSION['email'];
     
     if(isset($_POST['submit'])){
       $id = $_POST['id'];
       $price = $_POST['price'];
       $time = $_POST['time'];

      //  $sql_id = "SELECT count(*) from sell";
      //  $result_id = mysqli_query($conn, $sql_id);
      //  $rows = mysqli_num_rows($result_id);
      //  if($rows>0){
      //  while($row = mysqli_fetch_assoc($result_id) ){
      //      $id =  $row['count(*)'] + 1;
      //  }}

      $sql_add = "DELETE FROM rent WHERE id = $id";

      mysqli_query($conn, $sql_add);
      }

      // $sql_his = "INSERT INTO history VALUES ('Rent', '$model', '$price', '$email')";

      // mysqli_query($conn, $sql_his);

      header("Location: hireA.php");
       ?>