<?php
  $title = 'Logout';
  include('assets/header.php');
?>

  <?php
  session_start();
  session_destroy();

  echo "<meta http-equiv='refresh' content='3;URL=index.php'>"  ?>
  <div class="content red">

    <h2>Logout (Cinefy intern)</h2>
    <br />

    <div class="alert alert-success" role="alert">
      Du wurdest erfolgreich ausgeloggt.<br /><br />
    Du wirst in 3 Sekunden automatisch weitergeleitet.</div>
  </div>

<?php include('assets/footer.php');?>
