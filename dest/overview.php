<?php
  session_start();
    include 'scripts/gatekeeper.php';
    include 'scripts/submit-13.php';
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Transparency Reporting Toolkit</title>
  <link rel="stylesheet" href="./styles/main.css" />
  <script src='https://apis.google.com/js/platform.js' async defer></script>
  <meta name="google-signin-client_id" content="866567614664-plajrfu1bkmapbop03i30nh9vdmmdqe3.apps.googleusercontent.com">
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
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
<p><form name="final-submission" method="post" action="finish.php">
&lt;?php
echo $_SESSION[&#39;company_name&#39;];
echo $_SESSION[&#39;usa_search-warrants_total&#39;];
echo $_SESSION[&#39;usa_wiretap-orders_total&#39;];
echo $_SESSION[&#39;usa_pen-registers_total&#39;];
echo $_SESSION[&#39;usa_other-orders_total&#39;];
echo $_SESSION[&#39;usa_criminal-subpoenas_total&#39;];
echo $_SESSION[&#39;usa_civil-subpoenas_total&#39;];
echo $_SESSION[&#39;usa_emergency-requests_total&#39;];
?&gt;<div class="progress-bar">
  <span style="width:%"></span>
</div></p>
<div class="progress-buttons">
  <a href="submit-report-12.php" class="progression ">&lt; Back</a>
  <input type="submit" class="progression" name="save-section-13" value=" Submit " id="save-section-13"></input>
  <!-- <a id="submitSectionButton13" class="progression"  href="submit-report-14.php">Next ></a> -->
</div>  </div>
  <div class="overlay">
    <p></p>
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
    <script src='scripts/submit.js'></script>
  </footer>
</body>
</html>