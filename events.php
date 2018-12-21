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
  </style>
    <body>
      <?php
        require 'navigationBar.php';
        require 'dbconnection.php';
        echo "<div class='container'><div class='jumbotron'>
              <h2>Events happening in college</h2><br>";
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
                  $event = mysqli_query($conn,"SELECT * FROM EVENT ");
                  if ($event){
                    while($row = mysqli_fetch_assoc($event)){
                      //contact info to be added
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

        ?>


    </body>
  <html>
