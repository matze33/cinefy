<?php

$title = 'Herzlich willkommen!';

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
include('assets/header.php');
?>

<script>var duration = 15 * 1000;
var animationEnd = Date.now() + duration;
var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

var interval = setInterval(function() {
  var timeLeft = animationEnd - Date.now();

  if (timeLeft <= 0) {
    return clearInterval(interval);
  }

  var particleCount = 50 * (timeLeft / duration);
  // since particles fall down, start a bit higher than random
  confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
  confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
}, 250);

// Quelle und Konfigurationsanleitung: https://github.com/catdad/canvas-confetti
</script>


<div style="background-color:#fff;color:#a11;text-align:center;">
  <br /><br /><br /><br />

  <section class="pt-5 pb-5">
    <div class="content content-padding-l" style="background-image:url()">
      <div class="content-overlay"
        style="background-color:rgba(255,255,255,0)">
        <div class="container">
          <div class="row flex justify-content-center">
            <div class="col-md-6   text-center">
              <i class="fas fa-glass-cheers fa-3x text-primary" aria-hidden="true"></i>
              <h2 class="display-5 mt-4 mb-4  "><strong>Herzlich willkommen in der Cinefy Community!</strong></h2>
              <p class="lead">Wir schicken dir in Kürze sämtliche Informationen
                zu deiner Mitgliedschaft zu. In der Zwischenzeit kannst du
                mehr über das Cinefy Erlebnis erfahren.</p>
              <p class="btn-container">
                <a class="btn btn-primary btn-rounded  mr-md-3" href="./index.php"
                  role="button">
                  <i class="fa fa-info-circle" aria-hidden="true"></i> Mehr zu Cinefy</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<br /><br />
</div>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>

<?php include('assets/footer.php');?>
