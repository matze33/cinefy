<?php include('assets/header.php');?>

<div style="background-color:#fff;color:#f00;text-align:center;">
  <br /><br /><br /><br />
<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];

echo "Hallo User: ".$userid;
?>
<br /><br />
</div>

<?php include('assets/footer.php');?>
