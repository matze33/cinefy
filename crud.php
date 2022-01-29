<?php
$pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');

$gender = '';
$name = '';
$email = '';
$id = '';
$subscription = '';

if(empty($_GET['id']) == false) {
  $id = $_GET['id'];

  $statement = $pdo->prepare("SELECT * FROM customers WHERE id = :id");
  $result = $statement->execute(array('id' => $_GET['id']));
  $row = $statement->fetch();

  $gender = $row['gender'];
  $name = $row['name'];
  $email = $row['email'];
  $subscription = $row['subscription'];
}

if(empty($_POST) == false) {
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subscription = $_POST['subscription'];

  if(empty($_POST['gender'])
  OR empty($_POST['name'])
  OR empty($_POST['email'])
  OR empty($_POST['subscription'])) {

    $message = '<div class="alert alert-danger" role="alert">Bitte füllen Sie alle Pflichtfelder aus!</div>';
  } else {
    $pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');

    if ($_GET['id']) {

      $statement = $pdo->prepare("UPDATE customers SET gender = :gender, name = :name, email = :email, subscription = :subscription
                                  WHERE id = :id");

      $result = $statement->execute(array('gender' => $_POST['gender'], 'name' => $_POST['name'], 'email' => $_POST['email'],
      'subscription' => $_POST['subscription'], 'id' => $_GET['id']));
    } else {
      $statement = $pdo->prepare("INSERT INTO customers (gender, name, email, subscription) VALUES (:gender, :name, :email, :subscription)");

      $result = $statement->execute(array('gender' => $_POST['gender'], 'name' => $_POST['name'], 'email' => $_POST['email'],
      'subscription' => $_POST['subscription']));
    }

    if($result) {
      $message = '<div class="aler alert-success" role="alert">Die Eintragung war erfolgreich!</div>';
    } else {
      $message = '<div class="aler alert-danger" role="alert">Bitte überprüfe die Eingabe und versuche es erneut!</div>';
    }
    require 'dashboard.php';
    die();
}
}

 include('assets/header-acp.php');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Cinefy Kunden Übersicht</h1>
</div>

<?php if(!empty($message)) {echo($message);} ?>

<h3>Eingetragene Kunden</h3>
<p>In der Tabelle werden Kunden aufgelistet.</p>
<p>Einen neuen Eintrag hinzufügen: <a href="crud.php" title="Hinzufügen" class="btn btn-info btn-sm"><i class="fa fa-edit"> </i>Neu hinzufügen</a></p>

<form class="my-3 py-2" id="form" action="crud.php?id=<?php echo $id?>" method ="post">

  <?php if(!empty($message)) {echo($message);} ?>

  <div class="form-group">
    <label for="gender">Geschlecht</label>
    <select id="gender" name="gender" class="form-select" aria-label="Geschlecht" required>
      <option value="1" <?php if($gender == 1) {echo 'selected="selected"'; } ?>>männlich</option>
      <option value="2" <?php if($gender == 2) {echo 'selected="selected"'; } ?>>weiblich</option>
      <option value="3" <?php if($gender == 3) {echo 'selected="selected"'; } ?>>divers</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Name</label>
    <input type="name" class="form-control" id="name" placeholder="Name" name="name" required value="<?= $name ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">E-Mail</label>
    <input type="email" class="form-control" id="email" placeholder="E-Mail Adresse" name="email" required value="<?= $email ?>">
  </div>

  <div class="form-group">
    <label for="subscription">Abo-Modell</label>
    <select id="exampleFormControlSelect1" name="subscription" class="form-select" aria-label="Abo" required>
      <option value="1" <?php if($gender == 1) {echo 'selected="selected"'; } ?>>Day-Time</option>
      <option value="2" <?php if($gender == 2) {echo 'selected="selected"'; } ?>>All-Access</option>
      <option value="3" <?php if($gender == 3) {echo 'selected="selected"'; } ?>>All-Access Gourmet</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Speichern</button>

</form>
</main>
</body>
</html>
