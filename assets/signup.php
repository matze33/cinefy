<?php

if(empty($_POST['gender'])
OR empty($_POST['name'])
OR empty($_POST['email'])
OR empty($_POST['subscription']))  {

  $message = '<div class="alert" role="alert">Für die Anmeldung zu Cinefy müssen alle Felder ausgefüllt werden.</div>';
} else {
  $pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');

  $statement = $pdo->prepare("INSERT INTO customers (gender, name, email, subscription) VALUES (:gender, :name, :email, :subscription)");
  $result = $statement->execute(array('gender' => $_POST['gender'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'subscription' => $_POST['subscription']));

  if($result) {
    $message = '<div class="alert alert-success" role="alert">Vielen Dank für deine Anmeldung! Du erhältst bald weitere Informationen zu deinem Abo per E-Mail.</div>';
  } else {
    $message = '<div class="alert alert-danger" role="alert">Bitte überprüfe deine Eingaben und versuche es erneut.</div>';
  }
}

//require '../index.php';
 ?>

<div class="close">χ</div>

<h2>Registrierung</h2>

<form class="m-3 p-2" id="form" action="success.php" method="post">

  <?php
  if(!empty($message)) {echo($message);} ?>

  <div class="form-group">
    <label for="gender">Dein Geschlecht</label>
    <select id="gender" name="gender" class="form-select" aria-label="Default select 2" required>
      <option value="1">männlich</option>
      <option value="2">weiblich</option>
      <option value="3">divers</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Dein Name</label>
    <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="Ihr Name" name="name" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Dein E-Mail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-Mail-Adresse" name="email" required>
  </div>

    <div class="form-group">
      <label for="subscription">Welches Paket möchtest du buchen?</label>
      <select id="subscription" name="subscription" class="form-select" aria-label="Default select 2" required>
        <option value="1">Day-Time</option>
        <option value="2">All-Access</option>
        <option value="3">All-Access Gourmet</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Registrieren</button>
  </form>
