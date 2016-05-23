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
<p><h2>The Team</h2><p>Vel error consequuntur ut. Quia fuga tempore sunt labore eaque ab et fugit. Dolorum non animi cupiditate voluptatem dolore eligendi possimus et. Autem id velit dolore omnis. Voluptatem quia quo autem non omnis.</p><h3>Open Technology Institute</h3><p>Qui cumque eos similique. Iste et molestiae quis excepturi. Qui commodi illo labore ut voluptas sed. Vitae quisquam atque ut dolorem quia dolores. Dignissimos et eum consequatur ut autem dolore magnam. Qui quas tempore ea quod beatae voluptatem nesciunt. Doloremque vero distinctio quisquam rerum suscipit dolores. Minima quaerat iure iste. Dicta nihil deserunt sit ut odio quaerat.</p><h3>Berkman Center</h3><p>Enim sint debitis quibusdam quasi. Aut molestiae soluta vel. Magnam autem ipsam voluptatem impedit molestiae facere ipsum. In adipisci quia facere impedit vitae hic ipsum tempore. Enim cum est maiores quis placeat dicta doloremque dolore. Mollitia quae facere perferendis eum illo quaerat autem repellendus. Voluptatem dolore aut fuga excepturi ex in. Aut reiciendis et eius qui quibusdam fuga. Sit aut earum eum soluta odio vero explicabo mollitia.</p></p>
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
    <script src='scripts/about.js'></script>
  </footer>
</body>
</html>