<?php include('assets/header.php');

session_start();
$pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');
?>

    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
      style="min-height: 100vh; background-size: cover; background-position: center; background-image: url(&quot;assets/cinema.png&quot;);">
      <div class="container">
        <div class="row align-items-center d-flex justify-content-between" style="padding-left: 30px;">
          <div class="col-12 col-md-6 pb-5 order-2 order-sm-2 ">
            <div><img src="assets/logo-textonly.png" style="width:48%;"></div>
            <h1 class="text-white fw-bold mb-3 mt-5 display-3" style="font-family: 'Staatliches', cursive; text-shadow: 3px 3px #000;">Das größte Streaming-Abo der Welt!</h1>
            <p class="lead text-white" style="font-family: 'Sedgwick Ave', cursive; text-shadow: 3px 3px #000;">Filme ohne Ende - in originaler Kino-Größe. Ab 19,99€ im Monat.</p>
            <div class="d-flex mt-3 mb-1">
              <a class="btn btn-primary btn-raised text-uppercase btn-lg  mt-md-3 "
                href="#plans" role="button">▶ Jetzt buchen!</a>
            </div>
          </div>
        <!--  <div class="col-12 col-md-6 order-sm-1 order-md-2  ">
            <div
              class="icon-wrap text-primary d-flex justify-content-md-center my-3">
              <button href="#"
                class="icon d-flex border-0 align-items-center justify-content-center bg-white text-dark shadow-lg rounded-circle "
                style="width:70px; height:70px">
                <i class=" fas fa-play fa-lg ml-1"></i>
              </button>
            </div>
          </div>-->
        </div>
      </div>
    </section>
    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h1 id="aboutus">Über uns</h1>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-8 col-sm-12 order-sm-2">
            <div class="row">
              <div class="col-md-6 col-6 h-100">
                <div class=" text-sm-left text-md-center mb-5">
                  <i class="fa  fa-tv fa-2x p-2 mt-1 mb-2   rounded-circle text-primary"
                    aria-hidden="true"></i>
                  <h3 class=" my-2">XXL-Streaming</h3>
                  <p>Genieße das Filmerlebnis, wie es gedacht ist: auf den großen Leinwänden, die nur Kinos bieten können!</p>
                </div>
              </div>
              <div class="col-md-6 col-6 h-100">
                <div class=" text-sm-left text-md-center mb-5">
                  <i class="fa fa-map-marker-alt fa-2x p-2 mt-1 mb-2 text-primary rounded-circle "
                    aria-hidden="true"></i>
                  <h3 class=" my-2">In deiner Nähe</h3>
                  <p>Die Filme sind dort, wo du bist - mit aktuell 5 Standorten in und um Stuttgart</p>
                </div>
              </div>
              <div class="col-md-6 col-6 h-100">
                <div class=" text-sm-left text-md-center mb-5">
                  <i class="far fa-gem fa-2x p-2 mt-1 mb-2 text-primary rounded-circle "
                    aria-hidden="true"></i>
                  <h3 class="my-2">Die neusten Blockbuster</h3>
                  <p>Hier hast du garantiert noch nicht alle Filme gesehen - das komplette Kinoprogramm liegt dir zu Füßen</p>
                </div>
              </div>
              <div class="col-md-6 col-6 h-100">
                <div class=" text-sm-left text-md-center mb-5">
                  <i class="fa fa-couch fa-2x p-2 mt-1 mb-2 text-primary rounded-circle  "
                    aria-hidden="true"></i>
                  <h3 class=" my-2">Dein Komfort</h3>
                  <p>Fühl dich wie zu Hause - je nach Paket genießt du Vorstellungen und dazu noch unsere heißgeliebten Snacks</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 order-sm-1">
            <img src="assets/filmstreifen.png" style="max-height:500px;"
              class="img-fluid rounded shadow-lg d-md-block d-lg-block d-none">
          </div>
        </div>
      </div>
    </section>
    <section class="text-dark pt-5 pb-5 bg-white">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h1 id="plans">Welcher Kino-Typ bist du?</h1>
            <h2>3 Pakete - (d)eine Wahl</h2>
          </div>
        </div>
        <div class="row mt-5 d-flex align-items-top">
          <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4  ">
            <div class=" pb-5 pt-5 ps-4 pe-4 align-top card text-center">
              <h2 class="fw-light">Day-Time</h2>
              <hr>
              <p class="display-3"><strong>19,99€/mtl.</strong></p>
              <p class="text-h4">Das Angebot für Sparfüchse.
                Beinhaltet alle Vorstellungen zwischen 10 und 18 Uhr.</p>
              <p>&nbsp;</p>
            </div>
          </div>
          <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 ">
            <div class="  pb-5 pt-5 ps-4 pe-4 align-top card text-center">
              <h2 class="fw-light">All-Access</h2>
              <hr>
              <p class="display-3"><strong>34,99€/mtl.</strong></p>
              <p class="text-h4">Beinhaltet alle Vorstellungen
              sämtliche Filme, egal zu welcher Uhrzeit.</p>
              <p>&nbsp;</p>
            </div>
          </div>
          <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4  ">
            <div class=" pb-5 pt-5 ps-4 pe-4 align-top card text-center">
              <h2 class="fw-light">All-Access Gourmet</h2>
              <hr>
              <p class="display-3"><strong>49,99€/mtl.</strong></p>
              <p class="text-h4">Das ultimative Kinoerlebnis rund um
              die Uhr. Alle Vorstellungen inkl. 5 Snack-Menüs pro Monat.*</p>
              <p>*Auswahl aus Menüs 1-3</p>
            </div>
          </div>
        </div>
        <br />
        <div>
          <!-- Trigger/Open The Modal -->
        <button id="myBtn" class="btn btn-primary btn-lg w-100  ">Paket buchen</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <?php include('signup.php');?>
        </div>
        </div>
        </div>
        <br />
        <p style="text-align:center;">Vorab-Reservierung und 3G-Nachweise erforderlich.</p>
      </div><br />
      <hr>
    </section>
    <section class="bg-white text-dark pt-5 pb-5">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3 class="display-5 mb-4" id="team">Our Team</h3>
          </div>
        </div>
        <div class="row text-center mt-md-5 justify-content-center">
          <div class="col-md-4 col-12 mb-5">
            <img alt="image" class="img-fluid rounded-circle mt-3 mb-4 shadow"
              src="assets/tim.png">
            <h3><strong>Tim Riegel</strong></h3>
            <p>Senior Manager</p>
            <p>Tim ist unser Experte und Ihr Ansprechpartner für die Zusammenarbeit.</p>
            <div class="mb-1 mt-2 me-3 align-self-center pt-4 d-block">
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-twitter fa-md text-primary"
                  aria-hidden="true"></i>
              </a>
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-facebook fa-md  text-primary"
                  aria-hidden="true"></i>
              </a>
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-youtube fa-md  text-primary"
                  aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-12 mb-5">
            <img alt="image" class="img-fluid rounded-circle mt-3 mb-4 shadow"
              src="assets/matthias.png">
            <h3><strong>Matthias Gerling</strong></h3>
            <p>Senior Manager</p>
            <p>Matthias ist für sämtliche Kundenanliegen und Abo-Angelegenheiten zuständig.</p>
            <div class="mb-1 mt-2 me-3 align-self-center pt-4 d-block">
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-twitter fa-md text-primary"
                  aria-hidden="true"></i>
              </a>
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-linkedin fa-md  text-primary"
                  aria-hidden="true"></i>
              </a>
              <a href="#" role="button" class="  p-2 m-2">
                <i class="fab fa-instagram fa-md  text-primary"
                  aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-0">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-12 col-md-8 col-lg-7">
            <h3 class="fw-bold display-4" id="contact">Kontakt</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-7">
            <div>
              <div class="container">
                  <h1 class="display-4">Kontaktformular</h1>
                  <form action="" method="post">
                    <input name="security" type="hidden" value="secure">
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="SelectGender">Anrede</label>
                        <select name="gender" class="form-control" id="SelectGender">
                          <option value="Herr">Herr</option>
                          <option value="Frau">Frau</option>
                          <option value="div"> </option>
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
                      <label for="TextareaMessage">Nachricht <span class="req">Pflichtfeld</span></label>
                      <textarea name="message" class="form-control" id="TextareaMessage" rows="3" required></textarea>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="optin" value="0">
                        <input type="checkbox" id="opt-in" name="optin" value="1" class="form-check-input" required>
                        <label for="opt-in">
                          <strong>HINWEIS</strong> <span class="req">Pflichtfeld</span><br>Ich habe die Hinweise in der <a href="datenschutz.php">Datenschutzerklärung</a> verstanden und stimme diesen hiermit zu.
                        </label>
                      </div>
                    <button type="submit" name="sendform" class="btn btn-light">Absenden</button>
                  </form>
                </div>
              </div>

          <?php
              if ( isset($_POST['sendform']) && ($_POST['security'] == 'secure') ) :
                  if ( !empty($_POST['email']) ) :
                    if ( !empty($_POST['optin']) ) :

                      $gender = htmlspecialchars($_POST['gender']);
                      $name = htmlspecialchars($_POST['name']);
                      $email = htmlspecialchars($_POST['email']);
                      $message = htmlspecialchars($_POST['message']);

                      $formmail = 'mg217@hdm-stuttgart.de';

                      if ( preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email) ) :

                        $subject = 'Eine neue Kontaktformularanfrage ist eingetroffen.';
                        $message = "
                          <html>
                          <head>
                          <title>Neue Anfrage</title>
                          </head>
                            <body>
                              <p>Eine neue Anfrage von " . $gender . " " . $name . " ist eingegangen.</p>
                              <p>Die hinterlegte E-Mail-Adresse lautet: " . $email . ".</p>
                              <p><strong>Nachricht:</strong> <br> " . $message . "</p>
                            </body>
                          </html>
                        ";

                        $userSubject = 'Ihre Anfrage bei Cinefy';
                        $userMessage = "
                          <html>
                          <head>
                           <title>Deine Überschrift in der E-Mail</title>
                          </head>
                            <body>
                              <p>Vielen Dank für Ihre Anfrage. <br>
                              Sie bekommen schnellstmöglich eine Antwort</p>
                            </body>
                          </html>
                        ";

                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: <' . $formmail . '>" . "\r\n";

                        mail($formmail, $subject, $message, $headers);
                        mail($email, $userSubject, $userMessage, $headers);

                        echo '
                          <div class="container">
                            <div class="alert alert-success" role="alert">
                              Anfrage erfolgreich versendet!
                            </div>
                          </div>
                        ';

                      else :

                        echo '
                          <div class="container">
                            <div class="alert alert-danger" role="alert">
                              Bitte eine korrekte E-Mail-Adresse eingeben.
                            </div>
                          </div>
                        ';

                      endif;

                    else :

                      echo '
                          <div class="container">
                            <div class="alert alert-danger" role="alert">
                              Haben Sie die Datenschutzerklärung gelesen? Dann bitte bestätigen.
                            </div>
                          </div>
                        ';

                    endif;

                  else :

                    echo '
                          <div class="container">
                            <div class="alert alert-danger" role="alert">
                              Bitte eine E-Mail-Adresse eingeben.
                            </div>
                          </div>
                        ';

                  endif;
                endif; ?>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0 mt-5">
        <div class="row text-center">
          <div class="col">
            <h1 id="location">Standort</h1>
          </div>
        </div>
        <iframe class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.0934061660414!2d9.098571915670256!3d48.74191247927628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799dc42026cc05f%3A0xeb88e48af65defde!2sHochschule%20der%20Medien!5e0!3m2!1sde!2sde!4v1639268045907"
          width="100%" height="300" frameborder="0" style="border:0"
          allowfullscreen=""></iframe>
      </div>
    </section>

<?php include('assets/footer.php');?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
