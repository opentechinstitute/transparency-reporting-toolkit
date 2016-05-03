<?php
    include 'scripts/submit-4.php';
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
        <li><a href="./explore.html">Explore reports</a></li>
        <li><a href="./submit-report-0.php">Submit report</a></li>
        <!-- <li>About team</li>
        <li>About Transparency Reports</li>
        <li>Dashboard</li> -->
      </ul>
    </div>
  </div>  <div class="main-content container">
<p><h1>Submit <span class="company-name"><span> transparency report</h1></p>
<div class="intro section-title">
  <h2>Outcomes/compliance with requests<span class="label">USA requests</span></h2>
  <h3>Other court orders</h3>
  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div>
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
        <input type="text" name="other-rejected" ></input>
      </td>
      <td>
        <input type="text" name="other-no-data" ></input>
      </td>
      <td>
        <input type="text" name="other-content-disclosed" ></input>
      </td>
      <td>
        <input type="text" name="other-non-content-disclosed" ></input>
      </td>
      <td>
        <input type="text" name="other-total" disabled="true" value=0></input>
      </td>
    </tr>
    <tr class="disabled">
      <td>
        % of total
      </td>
      <td>
        <input type="text" disabled="true" name="other-pc-rejected"></input>
      </td>
      <td>
        <input type="text" disabled="true" name="other-pc-no-data"></input>
      </td>
      <td>
        <input type="text" disabled="true" name="other-pc-content-disclosed"></input>
      </td>
      <td>
        <input type="text" disabled="true" name="other-pc-non-content-disclosed"></input>
      </td>
      <td>
        <input type="text" name="other-pc-total" disabled="true" value=100%></input>
      </td>
    </tr>

  </tbody>
</table>
</div><div class="progress-bar">
  <span style="width:38.5%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-3.php" class="progression ">&lt; Back</a>
  <a class="progression" href="#">Save</a>
  <a class="progression"  href="submit-report-5.php">Next &gt;</a>
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