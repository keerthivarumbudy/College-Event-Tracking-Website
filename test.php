<?php
include_once 't.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1 id="title">Form</h1>
<p id="description">description about the form</p>
<form id="survey-form" method="POST">
  <label for="name" id="name-label" >First Name</label><br>
  <input type="text" name="person" placeholder="Name" required><br>
  <label for="email" id="email-label">Email</label><br>
  <input type="email" id="email" placeholder="Email" required><br>
   <input type="submit" id="submit" value="Submit">
</form>
<div class="container">
  <h1>Bootstrap</h1>

<?php
$sql="SELECT * FROM hello;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck  > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['name']."   ".$row['email']."<br>";
  }
}
 ?>
 </div>
</body>
<html>



<?php
session_start();
$dbServerName="localhost";
$username="root";
$password="password";
$dbName="Project";

$conn = mysqli_connect($dbServerName,$username,$password,$dbName);

if (!conn){
  die("Connection failed: ".mysqli_connect_error());
}
//if (isset($_POST['fname'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $usn = $_POST['usn'];
  $dept = $_POST['dept'];
  $sem = $_POST['sem'];
  $phone = $_POST['phone'];
  $pwd = $_POST['pwd'];
  $confirm_pwd = $_POST['confirm_pwd'];
  $clubs = $_POST['clubs'];
  echo "Hello ".$fname." ".$lname. " ".$clubs ;
//}


  $sql="INSERT INTO STUDENT (USN,FNAME,LNAME,DEPT,SEM,PHONE,PWD,CLUBS) VALUES($usn, $fname, $lname, $dept, $sem, $phone, $pwd, $clubs);";
  $result = mysqli_query($conn, $sql);
  if($result){

  }

  mysqli_close($conn);
 ?>
