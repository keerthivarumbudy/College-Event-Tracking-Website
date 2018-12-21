<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <body>
<?php
require 'navigationBar.php';
echo "LOGIN ERROR, PLEASE CLICK THE LOGIN link";
?>
<?php
if (isset($_POST['login'])){

  $usn = $_POST['usn'];
  $pwd = $_POST['password'];
  $pos = $_POST['pos'];

  require 'dbconnection.php';

  if(strcmp($pos,"STUDENT")==0){
    $usnSearch = mysqli_query($conn,"SELECT * FROM STUDENT WHERE USN= '$usn';");
    if ($usnSearch){
      echo "usn found";
      $user = mysqli_fetch_assoc($usnSearch);
      if (strcmp($pwd,$user['PWD'])==0){
        echo $user['FNAME']." ".$user['LNAME'];
        $_SESSION['user']= $usn;
        $_SESSION['pos']= $pos;
        $_SESSION['club']= $user['CLUB'];
        header('Location: ../project/index.php');
      }else{
       echo "<script>
           alert('Wrong USN or Password');
           window.location.href='/project/index.php';
           </script>";
      }

    }

  }else if(strcmp($pos,"PROFESSOR")==0){
    $usnSearch = mysqli_query($conn,"SELECT * FROM PROFESSOR WHERE P_ID= '$usn';");
    if ($usnSearch){
      echo "usn found";
      $user = mysqli_fetch_assoc($usnSearch);
      if (strcmp($pwd,$user['PWD'])==0){
        echo $user['P_FNAME']." ".$user['P_LNAME'];
        $_SESSION['user']= $usn;
        $_SESSION['pos']= $pos;
        $_SESSION['dept']= $user['P_DEPT'];
        header('Location: ../project/index.php');
      }
    }
  }else{
    $confirmChief = mysqli_query($conn,"SELECT * FROM CLUB WHERE CHIEF_USN= '$usn';");
    $resultCheck = mysqli_num_rows($confirmChief);
    if($resultCheck  == 1){
      while($row = mysqli_fetch_assoc($confirmChief)){
        $_SESSION['club']= $row['C_ID'] ;
        $usnSearch = mysqli_query($conn,"SELECT * FROM STUDENT WHERE USN= '$usn';");
        if ($usnSearch){
          echo "usn found";
          $user = mysqli_fetch_assoc($usnSearch);
          if (strcmp($pwd,$user['PWD'])==0){
            echo $user['P_FNAME']." ".$user['P_LNAME'];
            $_SESSION['user']= $usn;
            $_SESSION['pos']= $pos;
            header('Location: ../project/index.php');
          }
        }
      }
    }
  }
}
mysqli_close($conn);
 ?>
 </body>
 </html>
