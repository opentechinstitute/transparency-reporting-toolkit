<?php
  session_start();

    include 'scripts/submit-9.php';
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
<p><h1>Submit <span class="company-name"><span> transparency report</h1></p>
<p><div class="intro section-title">
  <h2>User notifications<span class="label">USA requests</span></h2></p>
<p>  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div></p>
<form name="submitSection9" method="post" action="submit-report-10.php">
<div class="notifications autocalculate">
<table>
  <thead>
    <tr>
      <th rowspan="2"></th>
      <th rowspan="2">Sealed requests</th>
      <th rowspan="2">Non-sealed requests, notice <span>was</span> provided</th>
      <th rowspan="2">Non-sealed requests, notice <span>was not</span> provided</th>
      <th rowspan="2">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        # Received
      </td>
      <td>
        <input type="text" required name="notifications-sealed"></input>
      </td>
      <td>
        <input type="text" required name="notifications-not-sealed-notice"></input>
      </td>
      <td>
        <input type="text" required name="notifications-not-sealed-no-notice"></input>
      </td>
      <td>
        <input type="text" required name="notifications-total" readonly="readonly" class="disabled"></input>
      </td>
    </tr>
    <tr class="disabled">
      <td>
        % of total
      </td>
      <td>
        <input type="text" readonly="readonly" name="notifications-pc-sealed"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="notifications-pc-not-sealed-notice"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="notifications-pc-not-sealed-no-notice"></input>
      </td>
      <td>
        <input type="text" name="notifications-pc-total" readonly="readonly" value=100></input>
      </td>
    </tr>

  </tbody>
</table>
</div><div class="progress-bar">
  <span style="width:77%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-8.php" class="progression ">&lt; Back</a>
  <input type="submit" class="progression" name="save-section-9" value=" Next >" id="save-section-9"></input>
  <!-- <a id="submitSectionButton9" class="progression"  href="submit-report-10.php">Next ></a> -->
</div></form>
  </div>
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