<?php
  include 'services/connectDB.php';
    if (isset($conn)) {
      // random CAROUSEL SLIDE


      // Science & Technology
      $sql = "SELECT * FROM event WHERE type='Science'";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $scienceEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Business
      $sql = "SELECT * FROM event WHERE type='Business' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $businessEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Education
      $sql = "SELECT * FROM event WHERE type='Education' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $educationEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Hobbies
      $sql = "SELECT * FROM event WHERE type='Hobbies' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $hobbiesEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Music
      $sql = "SELECT * FROM event WHERE type='Music' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $musicEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Health
      $sql = "SELECT * FROM event WHERE type='Health' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $healthEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Community
      $sql = "SELECT * FROM event WHERE type='Community' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $communityEvents = $stmt->fetchAll(PDO::FETCH_OBJ);

      // Sports
      $sql = "SELECT * FROM event WHERE type='Sports' ORDER BY RAND() LIMIT 2";
      $stmt = $conn->prepare($sql);
      try {
        $stmt->execute();
      } catch(Exception $exc){
        echo $exc->getTraceAsString();
      }
      $sportsEvents = $stmt->fetchAll(PDO::FETCH_OBJ);
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Webwut Event</title>
  </head>

<body>

  <?php include 'header.php';?>

  <div class="container">
<!-- CAROUSEL SLIDE -->
      <br>
      <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- image example ,, random from table ?-->
        <a href="#"><img src="https://p-u.popcdn.net/hero_images/desktop_images/000/000/116/medium/40fca800ed77afd6cdff29e2c9ca9940d02f8e0e.png?1519540399" alt="1">
      </a></div>
      <div class="carousel-item">
        <a href="#"><img src="https://p-u.popcdn.net/hero_images/desktop_images/000/000/116/medium/40fca800ed77afd6cdff29e2c9ca9940d02f8e0e.png?1519540399" alt="2">
      </a></div>
      <div class="carousel-item">
        <a href="#"><img src="https://p-u.popcdn.net/hero_images/desktop_images/000/000/116/medium/40fca800ed77afd6cdff29e2c9ca9940d02f8e0e.png?1519540399" alt="3">
      </a></div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
    </div>



<!-- menu Button -->
  <div class="container-fluid">
    <div class="row" id="menuBar">
      <div class="col-sm-6 noPadding">
        <div class="btn-group">
          <button class="btn btn-default-dropdown btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Explore events</b>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">All</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="events.php?data=Science">Science & Technology</a>
                  <a class="dropdown-item" href="events.php?data=Business">Business</a>
                  <a class="dropdown-item" href="events.php?data=Education">Education</a>
                  <a class="dropdown-item" href="events.php?data=Hobbies">Hobbies</a>
                  <a class="dropdown-item" href="events.php?data=Music">Music</a>
                  <a class="dropdown-item" href="events.php?data=Health">Health</a>
                  <a class="dropdown-item" href="events.php?data=Community">Community</a>
                  <a class="dropdown-item" href="events.php?data=Sports">Sports</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 noPadding">
        order by :
        <div class="btn-group">
          <button class="btn btn-default-dropdown btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>time</b>
          </button>
          <div class="dropdown-menu">
                <a class="dropdown-item" href="#">time</a>
                <a class="dropdown-item" href="#">organizer</a>
                <a class="dropdown-item" href="#">location</a>
          </div>
        </div>
      </div>
    </div>

<!-- Box -->

    <div class="container-fluid noPadding">
      <br><br>
      <!-- Science & Technology -->
      <div class="row">
        <div class="col-sm-7 noPadding" id='hidden-col-7-Sci'>
          <div id="topicYellowSci"><b>Science & Technology</b>
            <a role="button" class="btn btn-link" href="events.php?data=Science">View all</a>
          </div>
          <div class="scienceEvent"></div>
        </div>
        <div class="col-sm-5"></div>
      </div>
      <br>
      <!-- Business -->
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-7 noPadding" id='hidden-col-7-Bus'>
          <div id="topicPinkBus"><b>Business</b>
            <a role="button" class="btn btn-link" href="events.php?data=Business">View all</a>
          </div>
          <div class="businessEvent"></div>
        </div>
      </div>
      <br>
      <!-- Education -->
      <div class="row">
        <div class="col-sm-7 noPadding" id='hidden-col-7-Edu'>
          <div id="topicBlueEdu"><b>Education</b>
            <a role="button" class="btn btn-link" href="events.php?data=Education">View all</a>
          </div>
          <div class="educationEvent"></div>
          </div>
        <div class="col-sm-5"></div>
      </div>
      <br>
      <!-- Hobbies -->
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-7 noPadding" id='hidden-col-7-Hob'>
          <div id="topicYellowHob"><b>Hobbies</b>
            <a role="button" class="btn btn-link" href="events.php?data=Hobbies">View all</a>
          </div>
          <div class="hobbiesEvent"></div>
        </div>
      </div>
      <br>
      <!-- Music -->
      <div class="row">
        <div class="col-sm-7 noPadding" id='hidden-col-7-Mu'>
          <div id="topicPinkMu"><b>Music</b>
            <a role="button" class="btn btn-link" href="events.php?data=Music">View all</a>
          </div>
          <div class="musicEvent"></div>
        </div>
        <div class="col-sm-5"></div>
      </div>
      <br>
      <!-- Health -->
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-7 noPadding" id='hidden-col-7-Health'>
            <div id="topicBlueHealth"><b>Health</b>
              <a role="button" class="btn btn-link" href="events.php?data=Health">View all</a>
            </div>
            <div class="healthEvent"></div>
        </div>
      </div>
      <br>
      <!-- Community -->
      <div class="row">
        <div class="col-sm-7 noPadding" id='hidden-col-7-Commu'>
          <div id="topicYellowCommu"><b>Community</b>
            <a role="button" class="btn btn-link" href="events.php?data=Community">View all</a>
          </div>
          <div class="communityEvent"></div>
        </div>
        <div class="col-sm-5"></div>
      </div>
      <br>
      <!-- Sports -->
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-7 noPadding" id='hidden-col-7-Sports'>
          <div id="topicPinkSports"><b>Sports</b>
            <a role="button" class="btn btn-link" href="events.php?data=Sports">View all</a>
          </div>
          <div class="sportsEvent"></div>
        </div>
      </div>
      <br><br>
    </div>
  </div>
  </div>




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


      <script>
        function isEmpty(str) {
            return (!str || 0 === str.length);
        }
        function hidden(x){
          $(x).hide();
        }
        function formatDate(sqlDate) {
            sqlDate = sqlDate.split(" ");
            date = sqlDate[0];
            dateSplit = date.split("-");
            year = dateSplit[0];
            month = dateSplit[1];
            if (month == 01){month = "January";}
            else if (month == 02){month = "February";}
            else if (month == 03){month = "March";}
            else if (month == 04){month = "April";}
            else if (month == 05){month = "May";}
            else if (month == 06){month = "June";}
            else if (month == 07){month = "July";}
            else if (month == 08){month = "August";}
            else if (month == 09){month = "September";}
            else if (month == 10){month = "October";}
            else if (month == 11){month = "November";}
            else if (month == 12){month = "December";}
            day = dateSplit[2];

            time = sqlDate[1];
            timeSplit = time.split(":");
            hr = timeSplit[0];
            min = timeSplit[1];
            sec = timeSplit[2];

            return day + " " + month + " " + year + " | " + hr + ":" + min;
        }


        var scienceEvents = <?php echo json_encode($scienceEvents); ?>;


        if (isEmpty(scienceEvents)) {
          $("#topicYellowSci").hide();
          $(".scienceEvent").hide();
          hidden("#hidden-col-7-Sci");
        }
        else {
          for (event of scienceEvents) {
            $(".scienceEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="100" height="100" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
            }
          }

        var businessEvents = <?php echo json_encode($businessEvents ); ?>;
        if (isEmpty(businessEvents)) {
          $("#topicPinkBus").hide();
          $(".businessEvent").hide();
          hidden("#hidden-col-7-Bus");
        }
        else {
          for (event of businessEvents) {
            $(".businessEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var educationEvents = <?php echo json_encode($educationEvents); ?>;
        if (isEmpty(educationEvents)) {
          $("#topicBlueEdu").hide();
          $(".educationEvent").hide();
          hidden("#hidden-col-7-Edu");
        }
        else {
          for (event of educationEvents) {
            $(".educationEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var hobbiesEvents = <?php echo json_encode($hobbiesEvents ); ?>;
        if (isEmpty(hobbiesEvents)) {
          $("#topicYellowHob").hide();
          $(".hobbiesEvent").hide();
          hidden("#hidden-col-7-Hob");
        }
        else {
          for (event of hobbiesEvents) {
            $(".hobbiesEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var musicEvents = <?php echo json_encode($musicEvents ); ?>;
        if (isEmpty(musicEvents)) {
          $("#topicPinkMu").hide();
          $(".musicEvent").hide();
          hidden("#hidden-col-7-Mu");
        }
        else {
          for (event of musicEvents) {
            $(".musicEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var healthEvents = <?php echo json_encode($healthEvents ); ?>;
        if (isEmpty(healthEvents)) {
          $("#topicBlueHealth").hide();
          $(".healthEvent").hide();
          hidden("#hidden-col-7-Health");
        }
        else {
          for (event of healthEvents) {
            $(".healthEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var communityEvents = <?php echo json_encode($communityEvents ); ?>;
        if (isEmpty(communityEvents)) {
          $("#topicYellowCommu").hide();
          $(".communityEvent").hide();
          hidden("#hidden-col-7-Commu");
        }
        else {
          for (event of communityEvents) {
            $(".communityEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }

        var sportsEvents = <?php echo json_encode($sportsEvents ); ?>;
        if (isEmpty(sportsEvents)) {
          $("#topicPinkSports").hide();
          $(".sportsEvent").hide();
          hidden("#hidden-col-7-Sports");
        }
        else {
          for (event of sportsEvents) {
            $(".sportsEvent").append(`<a href="#selected event">
            <div class="row table-row">
              <div class="col-3">
                <img src="#event pic promote" width="75" height="75" class="d-inline-block align-top" id="titleImage" alt="">
                <a href="#selected event" class="btn btn-join" role="button">สมัคร</a>
                </div>
              <div class="col-9">
                <p class="topic">`+event.eventName+`</p>
                <div><i class="material-icons">access_time</i>&nbsp;`+formatDate(event.date)+`</div>
                <div><i class="material-icons">place</i>&nbsp;`+event.location+`</div>
              </div>
            </div></a>`);
          }
        }
      </script>
  </body>
</html>
