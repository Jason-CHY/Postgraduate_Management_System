<?php
include "connect.php";

//get data from database
$LastestAnnouncement ="SELECT Announce_Title, Announce_Details FROM announcement ORDER BY Announce_ID DESC LIMIT 5";
$getLastestAnnouncement = $conn->query($LastestAnnouncement);
$announcementTitle = array();

$announcementDetails = array();
while( $lastestThreeAnnouncement = $getLastestAnnouncement->fetch_assoc())
{
  $announcementTitle[] = $lastestThreeAnnouncement['Announce_Title'];
  $announcementDetails[] = $lastestThreeAnnouncement['Announce_Details'];
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Supervisor Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <nav><!--navigation bar -->
          <ul class="nav nav-justified">
            <li class="active"><a href="SupervisorHomePage.php">Home</a></li>
            <li><a href="SupervisorApplicationPage.php">Application</a></li>
            <li><a href="SupervisorAttendancePage.php">Attendance</a></li>
            <li><a href="SupervisorResultPage.php">Result</a></li>
            <li><a href="SupervisorTimetablePage.php">TimeTable</a></li>
            <li><a href="SupervisorProfilePage.php">Profile</a></li>
            <li><a href="index.html">Log out</a></li>
          </ul>
        </nav>
      </div>
      <br><br>

      <!-- display the latest 5th announcement -->
      <div class="jumbotron ridgeborder" style="background-color: #D5F1EF">
        <h2><?php echo $announcementTitle[0]?></h2>
        <p></p><?php echo $announcementDetails[0] ?></p>
      </div>
      <div class="jumbotron ridgeborder" style="background-color: #D5F1EF">
        <h2><?php echo $announcementTitle[1]?></h2>
        <p></p><?php echo $announcementDetails[1] ?></p>
      </div>
      <div class="jumbotron ridgeborder" style="background-color: #D5F1EF">
        <h2><?php echo $announcementTitle[2]?></h2>
        <p></p><?php echo $announcementDetails[2] ?></p>
      </div>
      <div class="jumbotron ridgeborder" style="background-color: #D5F1EF">
        <h2><?php echo $announcementTitle[3]?></h2>
        <p></p><?php echo $announcementDetails[3] ?></p>
      </div>
      <div class="jumbotron ridgeborder" style="background-color: #D5F1EF">
        <h2><?php echo $announcementTitle[4]?></h2>
        <p></p><?php echo $announcementDetails[4] ?></p>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Easy A Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
