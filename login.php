<?php

$title = 'Login';

session_start();
$pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM login WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($password, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
          $title = 'Weiterleitung';
          include('assets/header.php');
          echo "<meta http-equiv='refresh' content='3;URL=dashboard/index.php'>
          <div class='content red'><div class='alert alert-success' role='alert'>
            Login erfolgreich.<br /><br />Du hast nun Zugang <a href='dashboard/index.php'>zum Dashboard</a>.
            <br />Du wirst in 3 Sekunden automatisch weitergeleitet.</div></div>'";
            include('assets/footer.php');
            die();
    } else {
        $errorMessage = "E-Mail oder Passwort ungültig.";
    }

}

?>
<?php include('assets/header.php');?>


<div class="content red">

  <h2>Login (Cinefy intern)</h2>
  <br />

  <?php
    if(isset($errorMessage)) {
    echo ("<div class='alert alert-danger' role='alert'>$errorMessage</div>");
    }
?>

<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>

<input type="submit" value="Abschicken">
</form>
<br />
<div class="alert alert-secondary" role="alert"><i>Pssst, die Zugangsdaten lauten: E-Mail: "team@cinefy.de" | Passwort: "HdM". ;)</i></div>
</div>

<?php include('assets/footer.php');?>
