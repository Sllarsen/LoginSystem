<?php
include_once 'header.php';
?>
  <section class="main-container">
<div class="main-wrapper">
<h2>Home</h2>
<?php
if (isset($_SESSION['u_id'])) {
  //echo "You are logged in";
  echo 'logged in!';
  include_once 'feed.php';
}
 ?>
</div>
  </section>
<?php
include_once 'footer.php';
?>
