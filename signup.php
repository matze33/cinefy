<div>
  <br /><br /><br /><br />

<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
    $error = false;
    $email = '';
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<span style="color:#ff0000;"><strong>Bitte eine gültige E-Mail-Adresse eingeben!</strong></span><br>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) {
        $statement = $pdo->prepare("SELECT * FROM customers WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if($user !== false) {
            echo '<span style="color:#ff0000;"><strong>Diese E-Mail-Adresse ist bereits vergeben!</strong></span><br>';
            $error = true;
        }
    }

    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {
        $statement = $pdo->prepare("INSERT INTO customers (name, email, subscription) VALUES (:name, :email, :subscription)");
        $result = $statement->execute(array('email' => $email));

        if($result) {
            echo '<span style="color:#009100;"><strong>Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>.</strong></span>';
            $showFormular = false;
        } else {
            echo '<span style="color:#ff0000;"><strong>Beim Speichern ist leider ein Fehler aufgetreten.</strong></span><br>';
        }
    }
}

if($showFormular) {
?>

<form action="?register=1" method="post">
  <input name="security" type="hidden" value="secure">
  <div class="row">
    <div class="form-group col-md-4">
      <label for="SelectGender">Anrede</label>
      <select name="gender" class="form-control" id="SelectGender">
        <option value="Herr">Herr</option>
        <option value="Frau">Frau</option>
        <option value="Frau"> </option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="InputName">Name</label>
      <input name="name" type="text" class="form-control" id="InputName">
    </div>
    <div class="form-group col-md-6">
      <label for="InputEmail">E-Mail-Adresse <span class="req">Pflichtfeld</span></label>
      <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
    </div>
  </div>
  <div class="form-group">
    <div>
      <input type="radio" id="daytime" name="subscription" value="daytime"
         checked>
         <label for="daytime">Day-Time</label>
    </div>
    <div>
      <input type="radio" id="allaccess" name="subscription" value="allaccess"
         checked>
         <label for="allaccess">All-Access</label>
    </div>
    <div>
      <input type="radio" id="gourmet" name="subscription" value="gourmet"
         checked>
         <label for="gourmet">All-Access Gourmet</label>
    </div>
  </div>
  <div class="form-check">
      <input type="hidden" name="optin" value="0">
      <input type="checkbox" id="opt-in" name="optin" value="1" class="form-check-input" required>
      <label for="opt-in">
        <strong>HINWEIS</strong> <span class="req">Pflichtfeld</span><br>Ich habe die <a href="#.php">Allgemeinen Geschäftsbedingungen</a> gelesen und stimme diesen hiermit zu.
      </label>
    </div>
  <input type="submit" value="Abschicken">
</form>


<?php
} //Ende von if($showFormular)
?>

<br /><br />
</div>
