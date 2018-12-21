<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <!--<style type="text/css">
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
  </style>
  <script src="signUp.js"></script>
    <body>
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.html"><b>JSS Event Tracker</b></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="./clubs.html">Clubs</a></li>
          <li><a href="#">Departments</a></li>
          <li><a href="#">Events</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" name="SignUp" onClick = SignUp() ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
-->
<script src="signUp.js"></script>
<?php
  require 'navigationBar.php';
  ?>
    <div class="container">
      <div class="jumbotron">
        <h1>SIGN UP</h1>
        <br>
          <form id="SignUp-form" name="SignUp-form" action="registerUser.php" method="post" >

                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" required/>

                <br>

                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>

                <br>

                    <label for="usn">USN:</label>
                    <input type="text" class="form-control" id="usn" name="usn" required>

                <br>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" onkeypress="validate(event)" />

                <br>

                    <label for="dept">Department:</label>
                    <select id="dept" name="dept">
                      <option value="CS">Computer Science</option>
                      <option value="IS">Information Science</option>
                      <option value="EC">Electronics and Communication</option>
                      <option value="EEE">Electricals and Electronics</option>
                    </select>

                <br><br>

                    <label for="sem">Semester:</label>
                    <select id="sem" name="sem">
                      <option value="1">1</option>
                      <option value="3">3</option>
                      <option value="5">5</option>
                      <option value="7">7</option>
                    </select>

                <br><br>

                  <label>Clubs you're a part of (check all that apply) :</label>
                  <div class="custom-control custom-checkbox" id="club_checkbox">
                  <input type="checkbox" class="messageCheckbox" id="csi" name="clubs[]" value="CSI" >
                  <label for="csi">CSI</label><br>
                  <input type="checkbox" class="messageCheckbox" id="ieee" name="clubs[]" value="IEEE">
                  <label for="ieee">IEEE</label><br>
                  <input type="checkbox" class="messageCheckbox" id="lcc" name="clubs[]" value="LCC">
                  <label for="lcc">LCC</label><br>
                  <input type="checkbox" class="messageCheckbox" id="jced" name="clubs[]" value="JCED">
                  <label for="jced">SJCE Editorial Board</label>
                </div>
                <br><br>

                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>

                <br>

                    <label for="confirm_pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" required>

                <br>
                <button type="submit" class="btn btn-default" name="register" >Register</button>
          </form>
      </div>
    </div>
    </body>
  <html>
