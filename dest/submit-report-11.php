<?php
  session_start();
    include 'scripts/gatekeeper.php';
    include 'scripts/submit-11.php';
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
  <h2>Outcomes/compliance with requests<span class="label">non-USA requests</span></h2></p>
<p>  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div></p>
<form name="submitSection11" method="post" action="submit-report-12.php">
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
        <input type="text" name="non-usa-outcomes-rejected" required></input>
      </td>
      <td>
        <input type="text" name="non-usa-outcomes-no-data" required></input>
      </td>
      <td>
        <input type="text" name="non-usa-outcomes-content-disclosed" required></input>
      </td>
      <td>
        <input type="text" name="non-usa-outcomes-non-content-disclosed" required></input>
      </td>
      <td>
        <input type="text" name="non-usa-outcomes-total" readonly="readonly" class="disabled"></input>
      </td>
    </tr>
    <tr class="disabled">
      <td>
        % of total
      </td>
      <td>
        <input type="text" readonly="readonly" name="non-usa-outcomes-pc-rejected"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="non-usa-outcomes-pc-no-data"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="non-usa-outcomes-pc-content-disclosed"></input>
      </td>
      <td>
        <input type="text" readonly="readonly" name="non-usa-outcomes-pc-non-content-disclosed"></input>
      </td>
      <td>
        <input type="text" name="non-usa-outcomes-pc-total" readonly="readonly" value=100></input>
      </td>
    </tr>

  </tbody>
</table>
</div><div class="progress-bar">
  <span style="width:92.4%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-10.php" class="progression ">&lt; Back</a>
  <input type="submit" class="progression" name="save-section-11" value=" Next >" id="save-section-11"></input>
  <!-- <a id="submitSectionButton11" class="progression"  href="submit-report-12.php">Next ></a> -->
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