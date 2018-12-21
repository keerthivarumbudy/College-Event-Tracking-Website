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
        echo '<div class="container"><div class="jumbotron"><h1>Create Event</h1>
            <br>
              <form id="createEvent" name="createEvent" action="professorHome.php" method="post" >

                        <label for="eid">Event ID:</label>
                        <input type="text" class="form-control" id="eid" name="eid" required>
                        <label for="date">Date of the event:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time" required>
                        <label for="venue">Venue:</label>
                        <input type="text" class="form-control" id="venue" name="venue" required>
                        <label for="detials">Details about the event:</label>
                        <input type="text" class="form-control" id="details" name="details" required>

                    <br>

                    <button type="submit" class="btn btn-default" name="create" >Create</button>
              </form>';
        if(isset($_POST['create'])) {
          // your php code
          $date = $_POST['date'];
          $time = $_POST['time'];
          $details = $_POST['details'];
          $eid = $_POST['eid'];
          $venue = $_POST['venue'];
          $c = $_SESSION['club'];
          $organizer = $_SESSION['user'];

          require 'dbconnection.php';
          $insert = "INSERT INTO EVENT('EID','VENUE','DATE','TIME','ORGANIZER','CLUB','BRANCH','DETAILS') VALUES('$eid','$venue', '$date', '$time', '$organizer', '$c', NULL, '$details')";
          $checkInsert = mysqli_query($conn, $insert);
          if ($checkInsert){
            echo "<script>
               alert('Event successfully created');
               window.location.href='/project/events.php';
               </script>";
             //header('Location: ../project/index.php');
           }
        } else {
          // your html code

      }

      ?>
