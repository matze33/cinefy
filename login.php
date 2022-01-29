<?php
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
        die('Login erfolgreich. Du hast nun Zugang <a href="acp.php">zum Admin Control Panel</a>.');
    } else {
        $errorMessage = "E-Mail oder Passwort  ungültig<br>";
    }

}
?>
<?php include('assets/header.php');?>


<div style="background-color:#fff;color:#f00;text-align:center;">
  <br /><br /><br /><br />

<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>

<input type="submit" value="Abschicken">
</form>

<br /><br />
</div>

<?php include('assets/footer.php');?>
