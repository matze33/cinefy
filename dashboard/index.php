<?php
$title = 'Dashboard';
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=cinefy', 'root', '');

if(!isset($_SESSION['userid'])) {
  header('Location: ../login.php');
  exit();
}

//Löschen
if(empty($_GET['delete']) == false) {
  $statement = $pdo->prepare("DELETE FROM customers WHERE id = :id");
  $result = $statement->execute(array('id' => $_GET['delete']));
}

//Auflistung + Übergabe an $rows
$statement = $pdo->prepare("SELECT * FROM customers");
$result = $statement->execute();
$rows = $statement->fetchAll();

 include('../assets/header-acp.php');
 ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <h2>Kundenübersicht</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><i class="fa fa-user-circle-o"></i> Name</th>
              <th scope="col"><i class="fa fa-genderless"></i> Geschlecht</th>
              <th scope="col"><i class="fa fa-envelope"></i> E-Mail</th>
              <th scope="col"><i class="fa fa-paperclip"></i> Abo Status</th>
              <th scope="col"><i class="fa fa-exchange"></i> Aktion</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($rows as $row) {
              if($row['gender'] == 1) {
                $gender = '<i class="fa fa-mars-stroke"> </i> männlich';
              } elseif ($row['gender'] == 2) {
                $gender = '<i class="fa fa-venus"> </i> weiblich';
              } elseif ($row['gender'] == 3) {
                $gender = '<i class="fa fa-genderless"> </i> divers';
              } else {
                $gender = '-';
              }

              if($row['subscription'] == 1) {
                $subscription = 'Day-Time';
              } elseif ($row['subscription'] == 2) {
                $subscription = 'All-Access';
              } elseif ($row['subscription'] == 3) {
                $subscription = 'All-Access Gourmet';
              } else {
                $subscription = '-';
              }

              echo '
            <tr>
              <td>' . $row['id'] . '</td>
              <td>' . $row['name'] . '</td>
              <td>' . $gender . '</td>
              <td>' . $row['email'] . '</td>
              <td>' . $subscription . '</td>
              <td>' . '
              <a href="crud.php?id=' . $row['id'] . '" title="Eintrag bearbeiten" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
              <a href="index.php?delete=' . $row['id'] . '" title="Eintrag bearbeiten" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Löschen</a>
              </td>
            </tr>';
          }
          ?>


          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

</body>
</html>
