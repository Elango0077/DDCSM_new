<?php
  session_start();
  if (!isset($_SESSION['SESSION_EMAIL']))
  {
      header("Location: index.php");
      die();
  }

  include 'config.php';

  $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

  if (mysqli_num_rows($query) > 0) 
  {
      $row = mysqli_fetch_assoc($query);

      "<a href='logout.php'>Logout</a>";
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>DDCSM School</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
      <div><a href="index.php"><h2 style="color:white">DHARMAPURI DISTRICT COOPERATIVE SUGAR MILL SCHOOL</h2></a></div>
      <span>sugarmillmatric@gmail.com <br />
      <br />
      +91 9751773615</span> </div>
    <ul>
      <li class="current"><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact-us.php">Contact us</a></li>
    </ul>
    <div id="tagline">
      <div>
        <h4>Thanks for choosing us!</h4>
        <p>We offer you effective learning and give better life experience. </p>
      </div>
    </div>
  </div>
  <div id="content">
    <div id="home">
      <div>
        <div id="aside">
          <div>
            <h1>Welcome to <span class="last">DDCSM School</span></h1>
            <p>This school is an old government aided school started for the welfare and for good future for the students</p>
            <p>All students are welcomed to or beloved school and we will put our full effort for making the student's future a great one</p>
          </div>
          <ul>
            <li>
              <h2><a href="#">Our <span class="last">Vision</span></a></h2>
              <p>To deliver future ready students to the society. They'll make the society very proud and help them in needs.</p>
              <p>To make the student's very environment friendly so that they can survive at any time.</p>
            </li>
            <li>
              <h2><a href="#">Our <span class="last">Mission</span></a></h2>
              <p>Faith in God.</p>
              <p>Meet the student's and parent's expectation to the most. To deliver society friendy student's. Help the students who can't able to afford education.</p>
              <p>Giving them free education so that they can handle their family</p>
            </li>
          </ul>
        </div>
        <div id="calendar">
          <h3>School Calendar</h3>
          <ul>
            <li>
              <div> <span>15<br />
                Mar</span>
                <h2><a href="#"></a></h2>
              </div>
              <p>Admissions open for the academic year 2023</p>
            </li>
            <li>
              <div> <span>14<br />
                Jan</span>
                <h2><a href="#">Pongal Holidays starts</a></h2>
              </div>
              <p>From Jan 14 to Jan 18 Pongal holidays will be there.</p>
            </li>
            <li>
              <div> <span>19<br />
                Jan</span>
                <h2><a href="#">School Reopens</a></h2>
              </div>
              <p>Our school reopens on January 19th.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div>
      <div id="connect"> <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> <a href="#"><img src="images/icon-twitter.gif" alt="" /></a> <a href="#"><img src="images/icon-youtube.gif" alt="" /></a> </div>
      <div class="section">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li class="last"><a href="contact-us.php">Contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>
