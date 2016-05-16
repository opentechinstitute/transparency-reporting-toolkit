<?php
  session_start();
    include 'scripts/save-data.php';
    include 'scripts/submit-10.php';
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
        <!-- <li>About team</li>
        <li>About Transparency Reports</li>
        <li>Dashboard</li> -->
      </ul>
    </div>
  </div>  <div class="main-content container">
<p><h1>Submit <span class="company-name"><span> transparency report</h1></p>
<div class="intro section-title">
  <h2>Types of legal processes received<span class="label">non-USA requests</span></h2>

  <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis
sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii
perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
</div>
<div class="request-types">
  <table>
    <thead>
        <tr>
            <th rowspan="2"></th>
            <th rowspan="2">Retrospective</th>
            <th rowspan="2">Prospective</th>
            <th rowspan="2">Total</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          # Received
        </td>
          <td>
            <input type="text" name="civil-subpoenas"></input>
          </td>
          <td>
            <input type="text" name="emergency-requests"></input>
          </td>
          <td>
            <input type="text" name="non-usa-types-total" disabled="true" value=0></input>
          </td>
      </tr>
    </tbody>
  </table>

  <div class="double-table">
    <table>
      <tbody>
        <td>Total # of selectors specified by all of the above requests</td>
        <td>
          <input type="text" name="non-usa-types-selectors-specified"></input>
        </td>
      </tbody>
    </table>
    <table>
      <tbody>
        <td>Total # of accounts responsive to all of the above requests</td>
        <td>
          <input type="text" name="non-usa-types-accounts-responsive"></input>
        </td>
      </tbody>
    </table>
  </div>
</div>
<div class="progress-bar">
  <span style="width:84.7%"></span>
</div>
<div class="progress-buttons">
  <a href="submit-report-9.php" class="progression ">&lt; Back</a>
  <a class="progression" href="#">Save</a>
  <a class="progression"  href="submit-report-11.php">Next &gt;</a>
</div>  </div>
  <div class="overlay">
    <p></p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <form action="submit-report-0.php" method="post">
      <input type="text" name="company" id="copyCompany" placeholder="Company name"/>
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