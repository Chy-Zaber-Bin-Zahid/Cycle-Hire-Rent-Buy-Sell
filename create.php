<?php 
    require_once('DBconnect.php');
    session_start();
    
    if(isset($_POST['submit'])){
      $fn = $_POST['fname'];
      $ln = $_POST['lname'];
      $e = $_POST['email'];
      $bd = $_POST['bdate'];
      $p = $_POST['pass'];
      $n = $_POST['num'];



        // $sql = "SELECT * from user WHERE email = '$e' AND password = '$p'";

        // //Execute
        // $result = mysqli_query($conn, $sql);

        //latest id
        $sql_id = "SELECT count(*) from user";
        $result_id = mysqli_query($conn, $sql_id);
        $rows = mysqli_num_rows($result_id);
        if($rows>0){
        while($row = mysqli_fetch_assoc($result_id) ){
            $id =  $row['count(*)'] + 1;
        }}
        
        $sql_add = "INSERT INTO user VALUES ('$id', '$fn', '$ln', '$e', '$p', '$n', '$bd')";

        // check if it returns an empty set
        // if(mysqli_num_rows($result) > 0){
        //   header("Location: signUp.php");
        // }else{
            mysqli_query($conn, $sql_add);
            $_SESSION['email'] = $e;
            header("Location: signIn.php");
        // }
    }
    ?>