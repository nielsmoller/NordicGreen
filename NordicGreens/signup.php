  <?php
      include_once 'header.php';
  ?>

  <div class="main-container">
      <section class="signup-form">
          <h2>Opret en konto til din virksomhed</h2>
          
          <form action="includes/signup.inc.php" method="post">
            <div>
              <label for="name">Virksomhedens navn</label><br>
              <input type="text" name="name">
            </div>
            <div>
              <label for="email">Email til login</label><br>
              <input type="text" name="email">
            </div>
            <div>
              <label for="pwd">Password</label><br>
              <input type="password" name="pwd">
            </div>
            <div>
              <label for="pwdrepeat">Gentag password</label><br>
              <input type="password" name="pwdrepeat">
            </div>
            <div>
              <button type="submit" name="submit">Opret konto</button>
            </div>
          </form>

          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p>Udfyld alle felter!</p>";
              }
              else if ($_GET["error"] == "invalidemail") {
                echo "<p>Skriv en gyldig email!</p>";
              }
              else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords er ikke ens!</p>";
              }
              else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Statement fejl - prøv igen!</p>";
              }
              else if ($_GET["error"] == "emailtaken") {
                echo "<p>Email allerede brugt</p>";
              }
              else if ($_GET["error"] == "none") {
                echo "<p>Du er nu oprettet!</p>";
              }
            }
          ?>
      </section>
  </div>
  
  <?php
        include_once 'footer.php';
  ?>
</body>
</html>