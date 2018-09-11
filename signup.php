<?php
include_once "header.php";
?>

    <section class="main-container">
<div class="main-wrapper">
  <h2>Sign Up</h2>
  <form class="signup-form" action="includes/signup.inc.php" method="POST">
              <input type="text" name="first" placeholder="Name">
              <input type="text" name="last" placeholder="Last-name">
              <input type="text" name="email" placeholder="E-mail">
              <input type="text" name="uid" placeholder="ID">
              <input type="password" name="pwd" placeholder="Password">
              <input type="password" name="pwd2" placeholder="Confirm Password">
              <button type="submit" name="submit">Sign up</button>
          </form>
</div>
    </section>
    <?php
    include_once "footer.php";
    ?>
