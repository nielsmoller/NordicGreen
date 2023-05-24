  <?php
      include_once 'header.php';
  ?>

  <div class="main-container">
      <section class="login-form">
          <h2>Login</h2>

          <form action="includes/login.inc.php" method="post">
            <div>
              <label for="email">Email</label><br>
              <input type="text" name="email"><br>
            </div>
            <div>
              <label for="pwd">Password</label><br>
              <input type="password" name="pwd"><br>
            </div>
            <div>
              <button type="submit" name="submit">Login</button>
            </div>
          </form>

          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p>Udfyld alle felter!</p>";
              }
              else if ($_GET["error"] == "wronglogin") {
                echo "<p>Forkerte login oplysninger indtastet</p>";
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