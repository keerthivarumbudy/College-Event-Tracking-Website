<?php
  session_start();
 ?>
<style type="text/css">
.navbar-brand{
  font-size: 25px;
  }
.navbar-header{
  height: 60px;
}
.btn-default {
  background-color: #555555;
  text-decoration: none;
  color: white;
}
body{
  background-image: url(https://i.imgur.com/I5nl1Fn.jpg);
}
div{
  opacity: 0.95;
}
</style>
  <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="./index.php"><b>JSS Event Tracker</b></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="clubs.php">Clubs</a></li>
        <li><a href="dept.php">Departments</a></li>
        <li><a href="events.php">Events</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signUp.php" name="SignUp" onClick = SignUp() ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <<?php
          if (isset($_SESSION['user'])){
            echo '<li><a href="logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
          }else{
            echo '<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }
         ?>

      </ul>
    </div>
  </nav>
