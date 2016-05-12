<?php
    include 'scripts/submit-12.php';
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Transparency Reporting Toolkit</title>
  <link rel="stylesheet" href="./styles/main.css" />
</head>
<body>  <div class="nav-background">
    <div class="container nav">
      <ul class="inline-list">
        <li><a href="./">Transparency Reporting Toolkit</a></li>
        <li><a href="./explore.php">Explore reports</a></li>
        <li><a href="./submit-report-0.php">Submit report</a></li>
        <!-- <li>About team</li>
        <li>About Transparency Reports</li>
        <li>Dashboard</li> -->
      </ul>
    </div>
  </div>  <div class="main-content container">
<p><h1>Submit <span class="company-name"><span> transparency report</h1></p>
<div class="intro section-title">
  <h2>User notifications<span class="label">non-USA requests</span></h2>

  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div>
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
        <input type="text" name="non-usa-notifications-sealed"></input>
      </td>
      <td>
        <input type="text" name="non-usa-notifications-not-sealed-notice"></input>
      </td>
      <td>
        <input type="text" name="non-usa-notifications-not-sealed-no-notice"></input>
      </td>
      <td>
        <input type="text" name="non-usa-notifications-total" disabled="true" value=0></input>
      </td>
    </tr>
    <tr class="disabled">
      <td>
        % of total
      </td>
      <td>
        <input type="text" disabled="true" name="non-usa-notifications-pc-sealed"></input>
      </td>
      <td>
        <input type="text" disabled="true" name="non-usa-notifications-pc-not-sealed-notice"></input>
      </td>
      <td>
        <input type="text" disabled="true" name="non-usa-notifications-pc-not-sealed-no-notice"></input>
      </td>
      <td>
        <input type="text" name="non-usa-notifications-pc-total" disabled="true" value=100%></input>
      </td>
    </tr>

  </tbody>
</table>
</div><div class="progress-bar">
  <span style="width:100%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-11.php" class="progression ">&lt; Back</a>
  <a class="progression" href="#">Save</a>
  <a class="progression"  href="#" >Next &gt;</a>
</div>  </div>
  <footer class="nav-background">
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