<?php
  session_start();
    include 'scripts/gatekeeper.php';
    include 'scripts/submit-5.php';
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Outcomes/compliance with requests | Transparency Reporting Toolkit</title>
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
<p><h1>Submit <span class="company-name"><span> transparency report</h1></p>
<p><div class="intro section-title">
  <h2>Outcomes/compliance with requests<span class="label">USA requests</span></h2>
  <h3>Criminal subpoenas</h3>
  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div></p>
<form name="submitSection5" method="post" action="submit-report-6.php">
<div class="outcomes autocalculate">
<table>
  <thead>
    <tr>
      <th rowspan="2"></th>
      <th rowspan="2">Rejected</th>
      <th rowspan="2">No data</th>
      <th rowspan="2">Content disclosed</th>
      <th rowspan="2">Non-content disclosed</th>
      <th rowspan="2">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td>
        # Received
      </td>
      <td>
        <input type="text" name="criminal-rejected" required></input>
      </td>
      <td>
        <input type="text" name="criminal-no-data" required></input>
      </td>
      <td>
        <input type="text" name="criminal-content-disclosed" required></input>
      </td>
      <td>
        <input type="text" name="criminal-non-content-disclosed" required></input>
      </td>
      <td>
        <input type="text" name="criminal-total" readonly="readonly" class="disabled"></input>
      </td>
    </tr>
    <tr class="disabled">
      <td>
        % of total
      </td>
      <td>
        <input type="text" readonly="readonly" name="criminal-pc-rejected"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="criminal-pc-no-data"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="criminal-pc-content-disclosed"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="criminal-pc-non-content-disclosed"></input>
      </td>
      <td>
        <input type="text" name="criminal-pc-total" readonly="readonly" value=100></input>
      </td>
    </tr>

  </tbody>
</table>
</div><div class="progress-bar">
  <span style="width:46.2%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-4.php" class="progression ">&lt; Back</a>
  <input type="submit" class="progression" name="save-section-5" value=" Next >" id="save-section-5"></input>
  <!-- <a id="submitSectionButton5" class="progression"  href="submit-report-6.php">Next ></a> -->
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