<?php
  $title = 'Logout';
  include('assets/header.php');
?>

  <?php
  session_start();
  session_destroy();

  echo "<meta http-equiv='refresh' content='3;URL=index.php'>"  ?>
  <div style="background-color:#fff;color:#f00;text-align:center;">
    <br /><br /><br /><br />
    Du wurdest ausgeloggt.<br /><br />
    Du wirst in 3 Sekunden automatisch weitergeleitet.<br /><br /></div>
  <br /><br />
</div>

<?php include('assets/footer.php');?>
