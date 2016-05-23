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
<p><h1>Explore transparency report</h1></p>
<div class="intro-search">
  <p>Show me
  <select name="search-gov-countries" id="search-govs">
    <option value="USA government" selected>USA government</option>
    <option value="non-USA government">non-USA government</option>
  </select>
  requests to
  <select name="search-company-names" id="search-companies">
    <option value="all companies" selected>all companies</option>
  </select>
  for
  <select name="search-filter" id="search-filter">
    <option value="all" selected>all</option>
    <option value="rejected">all rejected</option>
    <option value="no data">all &quot;no data&quot; response</option>
    <option value="content disclosed">all content disclosed</option>
    <option value="non-content disclosed">all non-content disclosed</option>
  </select>
  <select name="search-types" id="search-types">
    <optgroup label="legal processes">
      <option value="legal processes" selected>legal processes</option>
      <option value="search warrants">search warrants</option>
      <option value="wiretap orders">wiretap orders</option>
      <option value="pen register orders">pen register orders</option>
      <option value="other court orders">other court orders</option>
      <option value="criminal subpoenas">criminal subpoenas</option>
      <option value="civil subpoenas">civil subpoenas</option>
      <option value="emergency requests">emergency requests</option>
    </optgroup>
    <optgroup label="accounts and selectors">
      <option value="accounts responsive">accounts responsive to all of the above requests</option>
      <option value="selectors specified">selectors specified by all of the above requests</option>
    </optgroup>
    <optgroup label="user notifications">
      <option value="sealed requests">sealed requests</option>
      <option value="non-sealed requests - notice">non-sealed requests, notice provided</option>
      <option value="non-sealed requests">non-sealed requests, notice not provided</option>
    </optgroup>
  </select>
</div><div class="advanced-search">
  <fieldset>
  <h1>Advanced search</h1>
  <input type="checkbox">USA data</input>
  <input type="checkbox">non-USA data</input>
  <div class="time-selection">
    <p>Select time period:</p>
    <select name="search-months" id="search-months">
      <option value="Jan-June">Jan-June</option>
      <option value="July-Dec">July-Dec</option>
    </select>
    <select name="search-years" id="select-years">
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
    </select>
  </div>
  <h4><a>Legal processes</a></h4>
  <fieldset>
    <p>Go audemo C. Epotem untrum horei fac octus adhuctampl. Nihil vius auderis sinculicia audenis, porio etius es vatiam ium firmis consum di, cluderraecii perferita, ute rei serente dint? Ebatus aves es hoc restrum duconequit.</p>
    <input type="checkbox">All request types</input>
    <input type="checkbox">Search warrants</input>
    <input type="checkbox">Wiretap orders</input>
    <input type="checkbox">Pen register orders</input>
    <input type="checkbox">Other court orders</input>
    <input type="checkbox">Criminal subpoenas</input>
    <input type="checkbox">Civil subpoenas</input>
    <input type="checkbox">Emergency requests</input>
    <hr>
    <input type="checkbox">Total selectors specified by all the above requests</input>
  </fieldset>
</fieldset>
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
    <script src='scripts/explore.js'></script>
  </footer>
</body>
</html>