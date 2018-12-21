<?php
$dbServerName="localhost";
$username="root";
$password="password";
$dbName="Project";

//$conn=mysqli_connect($dbServerName,$username,$password,$dbName) or die("Unable to connect");
$dbms=mysqli_connect($dbServerName,$username,$password,'DBMS') or die("Unable to connect");
if ($dbms){
  echo "getting there";
}


$student = mysqli_query($dbms,"SELECT * FROM EVENT");
if ($student){

  while($row = mysqli_fetch_assoc($student)){
    echo "? ";
    $usn=$row['E_ID'];
    $fname=$row['VENUE'];
    $lname=$row['DATE'];
    $dept=$row['TIME'];
    $sem=$row['ORGANIZER'];
    $phone=$row['CLUB'];
    $salary=$row['BRANCH'];
    $clubs=$row['DETAILS'];
    /*$id = $row['C_ID'];
    $name= $row['C_NAME'];
    $chief = $row['CHIEF_USN'];*/
    //$pwd = $row['PWD'];
    $command = "INSERT INTO NORM_EVENT VALUES('$usn','$fname','$lname','$dept','$sem','$phone','$salary','$clubs')";
    //$command = "INSERT INTO CLUB VALUES('$id','$name','$chief')";
    $new = mysqli_query($dbms,$command);
    if ($new){
      echo "happened";
    }
    else{
      echo $new;
    }
  }
}
?>
