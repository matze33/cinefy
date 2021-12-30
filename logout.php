
<?php include('assets/header.php');?>

<div style="background-color:#fff;color:#f00;text-align:center;">
  <br /><br /><br /><br />
  <?php
  session_start();
  session_destroy();

  echo "Logout erfolgreich";
  ?>
  <br /><br />
</div>

<?php include('assets/footer.php');?>
