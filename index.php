<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <style type="text/css">
  .navbar-brand{
    font-size: 25px;
    }
  .navbar-header{
    height: 60px;
  }
/*  .container{
    max-width: 500px;
    float: left;
    padding-left: 80px;
  }*/
  </style>
    <body>
      <?php
        require 'navigationBar.php';
        if (isset($_SESSION['pos'])){
          require 'dbconnection.php';

          if(strcmp($_SESSION['pos'],"STUDENT")==0){
            echo "<script type='text/javascript'>console.log('Hello Student');</script>";
            $usn = $_SESSION['user'];
            //finding clubs the student is a member of
            $clubSearch = mysqli_query($conn,"SELECT CLUBS,DEPT FROM STUDENT WHERE USN='$usn'");
            if ($clubSearch){
              $clubs = mysqli_fetch_assoc($clubSearch);
              $dept = $clubs['DEPT'];
              $exploded = explode(" ",$clubs['CLUBS']);
              $n = count($exploded);
              echo "<div class='container'><div class='jumbotron'>
                    <h2>Events related to you</h2><br>";
              //unset($exploded[$n-1]);
              echo  '<table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Event ID</th>
                        <th>Organizing Club/Department</th>
                        <th>Event details</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Organizer</th>
                        </tr></thead>';
              if(strcmp("",$exploded[0])!=0){
                foreach ($exploded as $club) {
                  //finding events from clubs the student is a member of
                  $event = mysqli_query($conn,"SELECT * FROM EVENT WHERE CLUB LIKE '%{$club}'");
                  if ($event){
                    while($row = mysqli_fetch_assoc($event)){
                      echo "<tr>
                              <td>".$row['E_ID']."</td>
                              <td>".$row['CLUB']."</td>
                              <td>".$row['DETAILS']."</td>
                              <td>".$row['DATE']."</td>
                              <td>".$row['TIME']."</td>
                              <td>".$row['ORGANIZER']."</td>
                            </tr>";
                    }
                  }
                }
              }
              $event = mysqli_query($conn,"SELECT * FROM EVENT WHERE BRANCH='$dept'");
              if ($event){
                while($row = mysqli_fetch_assoc($event)){
                  echo "<tr>
                          <td>".$row['E_ID']."</td>
                          <td>".$row['CLUB'].$row['BRANCH']."</td>
                          <td>".$row['DETAILS']."</td>
                          <td>".$row['DATE']."</td>
                          <td>".$row['TIME']."</td>
                          <td>".$row['ORGANIZER']."</td>
                        </tr>";
                }
              }

            }else{
              echo "clubs not found";
            }

        }else if(strcmp($_SESSION['pos'],"PROFESSOR")==0){
          header("Location: ../project/professorHome.php");
        }else{
          header("Location: ../project/chiefHome.php");
        }

      }

        else{
          echo '<div class="container"><div class="jumbotron"><h1>Login</h1>
              <br>
                <form id="Login-form" name="Login-form" action="login.php" method="post" >
                          <label for="pos">Login as:</label>
                          <select id="pos" name="pos">
                            <option value="STUDENT">Student</option>
                            <option value="PROFESSOR">Professor</option>
                            <option value="CLUB_CHIEF">Student Club Chief</option>
                          </select>
                          <br><br>

                          <label for="usn">USN / ID:</label>
                          <input type="text" class="form-control" id="usn" name="usn" required>


                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="password" name="password" required>

                      <br>

                      <button type="submit" class="btn btn-default" name="login" >Login</button>
                </form>';
        }

        ?>


    </body>
  <html>
