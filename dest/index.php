<?php
  session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Transparency Reporting Toolkit</title>
  <link rel="stylesheet" href="./styles/main.css" />
  <script src='https://apis.google.com/js/platform.js' async defer></script>
  <meta name="google-signin-client_id" content="866567614664-plajrfu1bkmapbop03i30nh9vdmmdqe3.apps.googleusercontent.com">
</head>
<body>  <div class="nav-background">
    <div class="container nav">
      <ul class="inline-list">
        <li><a href="./">Transparency Reporting Toolkit</a></li>
        <li><a href="./explore.php">Explore reports</a></li>
        <li><a id="submit-link" href="./submit-report-0.php">Submit report</a></li>
        <li><a id="about" href="about.php">About us</a></li>
        <li><a id="intro" href="intro.php">Transparency reports</a></li>
        <!-- <li>Dashboard</li> -->
      </ul>
    </div>
  </div>  <div class="main-content container">
<div class="intro-area">
  <img src="#" class="placeholder" />
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna eiusmod tempor incididunt.</p>
</div>
<div class="intro-cta">
  <form>
  <input type="text" name="company" required value="" id="originalCompany" placeholder="Company name">
  </input>
  <p class="small">Link to explore all data</p>
  <div class="split-box-2">
    <a id="explore" href="explore-reports.html">Explore report</a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
  </div>
  <div class="split-box-2">
    <input type="submit" id="submit-report" value="Submit report"></input>
    <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis sinculicia audenis, porio etius es vatiam ium firmis.</p>
  </div>
</form>
</div>

  </div>
  <div class="overlay">
    <p>Expedita sunt illum rem. Quas eveniet eum molestiae. Voluptatum quam fugiat eligendi voluptas delectus iste quibusdam. Maxime tempore asperiores ducimus ex. Voluptate aut sint rerum.</p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <form action="submit-report-0.php" method="post">
      <input type="text" name="company" id="copyCompany" placeholder="Company name"/>
      <input type="text" name="userID" id="submitting-user"/>
      <input type="submit" name="company-submit" value="Got it!" id="to-form"></input>
    </form>
  </div>
  <div class="overlay-background">
  </div>  <footer class="nav-background">
    <div class="container">
      <ul class="inline-list">
        <li>Affiliation</li>
        <li>License info</li>
        <li>Submit report</li>
        <li>Explore reports</li>
        <!-- <li>About team</li>
        <li>About Transparency Reports</li>
        <li>Dashboard</li> -->
      </ul>
    </div>
    <script src='scripts/main.js'></script>
    <script src='scripts/home.js'></script>
  </footer>
</body>
</html>