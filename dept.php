<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

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

<style>
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Columns */
.left-column {
  width: 65%;
  position: relative;
}

.right-column {
  width: 100%;
  margin-top: 60px;
}
/* Left Column */
.left-column img {
  display:block;
  width: 400px;
  position: absolute;
  left: 30px;
  top: 150px;
  right: 50px;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}
/* Company Description */
.company-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.company-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.company-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.company-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.select-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.select-btn:hover {
  background-color: #64af3d;
}
</style>
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

<main class="container">

<!-- Left Column / Company logo -->
<div class="left-column">
<img src="images/Computer_Science.jpg">
</div>


<!-- Right Column -->
<div class="right-column">

<!-- Company Description -->
<div class="company-description">
  <h1>Computer Science</h1>
  <p>The inception of Department of Computer Science and Engineering (CS&E) is one among the first to be established in the State of Karnataka in the year 1982. Our mission is to create ideas that deepen and advance our understanding of the realm of Computer Science and Engineering and with those ideas to develop innovative, principled, and insightful leaders who change the world. Classes are conducted on a full-time and on part time basis in an intimate-scale environment, and take full advantage of the assets provided by Sri Jayachamarajendra College of Engineering and its surrounding communities.</p>

</div>
</div>


</main>
<br>
<main class="container">

<!-- Left Column / Company logo -->
<div class="left-column">
<img src="images/IS.jpg">
</div>


<!-- Right Column -->
<div class="right-column">

<!-- Company Description -->
<div class="company-description">
  <h1>Information Science</h1>
  <p>• The Department of Information Science & Engineering was established in the year 2000 with an intake of 60 students.
• The department offers one undergraduate program (B.E in Information Science and Engineering) and two postgraduate programs (M.Tech in Software Engineering, M.Tech in Data Science).
• The department has highly qualified faculty members who have rich experience in the area of Data Science, Machine Learning and Computational Intelligence.
• The faculty members have associated with various reputed International Universities like Harvard University, USA, Nanyang Technological University, Singapore, Korean University, Seoul, University of Mannheim, Germany, Georgia University, USA, St. Petersburgh Electrotechnical University, Russia, University of Genova, Italy, Helsinki University of Technology, Finland, Bilkent University, Turkey and many more.
• Faculty members of the department have produced more than 200 research articles in the reputed Journals and Conference proceedings. The published papers have high citation index.</p>

</div>
</div>


</main>
<main class="container">

<!-- Left Column / Company logo -->
<div class="left-column">
<img src="images/EC.png" alt="Accenture">
</div>


<!-- Right Column -->
<div class="right-column">

<!-- Company Description -->
<div class="company-description">
  <h1>Electronics and Communication</h1>
  <p>The department of E&C was established in 1970. It offers undergraduate & post graduate programmes. In addition to these, it also offers M.Sc Engineering by research & Ph.D programs which provide a platform for bright graduates and postgraduates to conduct research in state-of-the-art technologies. Well qualified faculty with good retention. The Department is also a recognized center under the Quality Improvement Program (QIP) of the Government of India. The curriculum provides a strong foundation in both the analytic and technological aspects of E&C Engineering. It also provides ample opportunities to students to work on mini-projects, develop communication skills, explore internship opportunities in industry and take part in national & international design contests. It has very good placement record in the college. Very active IEEE student chapter organizing National paper presentation competitions and other events such as Vacation Project Mania, Latex workshops & miniproject competitions, etc.</p>

</div>
</div>


</main>
<main class="container">

<!-- Left Column / Company logo -->
<div class="left-column">
<img src="images/electrical.jpg" alt="Accenture">
</div>


<!-- Right Column -->
<div class="right-column">

<!-- Company Description -->
<div class="company-description">
  <h1>Electricals and Electronics</h1>
  <p>The Department of Electrical and Electronics Engineering was established as one of the three basic engineering departments when the institution was founded in 1963. It has well qualified and experienced teaching faculty and good infrastructure.

B.E. Program in Electrical and Electronics Engineering and M.Tech. Program in Energy Systems and Management run by the Department have been granted autonomous status by V.T.U. The Department has its own Board of Studies (BoS) and Board of Examiners (BoE) consisting of the staff members of the Department as members in addition to experts drawn from external institutions of excellence and also from industry. The BoS meets as and when required to discuss and update the curriculum. This has helped in making a curriculum that is outcome-based, dynamic, on par with the current developments in technology, to meet the requirements of industry. The Department also has laboratories setup in collaboration with industries like Schneider Electric.</p>

</div>
</div>


</main>
