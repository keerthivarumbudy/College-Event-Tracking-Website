<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <style type="text/css">
  .navbar-brand{
    font-size: 25px;
    }
  .navbar-header{
    height: 60px;
  }
  <body>
<?php
  require 'navigationBar.php';
  if (isset($_POST['register'])){

    require 'dbconnection.php';

      $usn = $_POST['usn'];
    //checking if USN already exists
      $checkUSNsql = "SELECT * FROM STUDENT WHERE USN= '$usn' ;";
      $checkUSN = mysqli_query($conn, $checkUSNsql);
      $rows = mysqli_num_rows($checkUSN);
      if ($rows > 0){
        echo "USN already exists.";

      }
      else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $dept = $_POST['dept'];
        $sem = $_POST['sem'];
        $phone = $_POST['phone'];
        $pwd = $_POST['pwd'];
        $confirm_pwd = $_POST['confirm_pwd'];

        if ($_POST["pwd"] === $_POST["confirm_pwd"]) {
           // success!
          //Checking if any clubs are selected

          if ( isset( $_POST['clubs'] ) ) {
            $clubs = $_POST['clubs'];
            $Clubs = $clubs[0];
            unset($clubs[0]);
            foreach ($clubs as $c){
              $Clubs = $Clubs." ".$c;
            }
          }
          else{
            $Clubs = NULL;
          }

           $insert = "INSERT INTO STUDENT (USN,FNAME,LNAME,DEPT,SEM,PHONE,PWD,CLUBS) VALUES('$usn', '$fname', '$lname', '$dept', '$sem', '$phone', '$pwd', '$Clubs')";
           $checkInsert = mysqli_query($conn, $insert);
           if ($checkInsert){
             echo "<script>
                alert('User successfully created');
                window.location.href='/project/index.php';
                </script>";
              //header('Location: ../project/index.php');
            }
           else{
             echo "<script>
                alert('User usn already exists.');
                window.location.href='/project/index.php';
                </script>";
           }

        }
        else {
           // failed :(
           echo '<script type="text/javascript">alert("Password not matching. Go back and try again");</script>';
        }

      }

  }

    mysqli_close($conn);


 ?>
</body>
</html>
