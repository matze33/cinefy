<?php
$title = 'Registrierung';
$code = 'cinefy';

session_start();
$pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');
?>
<?php include('assets/header.php');?>

<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $zugangscode = $_POST['zugangscode'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger" role="alert">Bitte eine gültige E-Mail-Adresse eingeben.</div><br>';
        $error = true;
    }
    if(strlen($password) == 0) {
        echo '<div class="alert alert-danger" role="alert">Bitte ein Passwort angeben.</div><br>';
        $error = true;
    }
    if($password != $password2) {
        echo '<div class="alert alert-danger" role="alert">Die Passwörter müssen übereinstimmen.</div><br>';
        $error = true;
    }
    if($code != $zugangscode) {
        echo '<div class="alert alert-danger" role="alert">Dein Zugangscode wurde nicht erkannt. Registrierung abgelehnt.</div><br>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) {
        $statement = $pdo->prepare("SELECT * FROM login WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if($user !== false) {
            echo '<div class="alert alert-danger" role="alert">Diese E-Mail-Adresse ist bereits vergeben.</div><br>';
            $error = true;
        }
    }

    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO login (email, password) VALUES (:email, :password)");
        $result = $statement->execute(array('email' => $email, 'password' => $password_hash));

        if($result) {
            echo '<div class="alert alert-success" role="alert">Du wurdest erfolgreich registriert. <a href="login.php">Zum Login!</a></div><br>';
            $showFormular = false;
        } else {
            echo '<div class="alert alert-danger" role="alert">Beim Speichern ist leider ein Fehler aufgetreten.</div><br>';
        }
    }
}

if($showFormular) {
?>

<div class="content red">

<h2>Registrierung (Cinefy intern)</h2>
<br />

<form action="?register=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>

Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="password2"><br><br>

Zugangscode:<br>
<input type="password" size="40"  maxlength="250" name="zugangscode"><br>

<input type="submit" value="Abschicken">
</form>

<br />
<div class="alert alert-secondary" role="alert"><i>Pssst, der Zugangscode lautet "cinefy". ;)</i></div>
<?php
} //Ende von if($showFormular)
?>

</div>

<?php include('assets/footer.php');?>
