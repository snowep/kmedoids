<?php include 'conn.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include 'index_navbar.php'; ?>
    <div class="container-fluid">
      <div class="row" style="padding-top: 80px;"></div>
      <div class="row">
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="2">DBI Value</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $DB2 = $_SESSION['DB_C2'];
                  $DB3 = $_SESSION['DB_C3'];
                  $DB4 = $_SESSION['DB_C4'];
                  $DB5 = $_SESSION['DB_C5'];
                  $DB6 = $_SESSION['DB_C6'];

                  for ($i=2; $i < 7; $i++) {
                ?>
                <tr>
                  <td>Cluster <?php echo $i ?></td>
                  <td><?php echo number_format($_SESSION['DB_C'."$i".''], 3) ?></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Optimum Cluster:
            <?php
              $DB_optimum = min($DB2,$DB3,$DB4,$DB5,$DB6);
              echo number_format($DB_optimum, 3);

              switch ($DB_optimum) {
                case $DB2:
                  echo " (Set Cluster 2)";
                  $_SESSION['DBI'] = $DB2;
                  break;
                case $DB3:
                  echo " (Set Cluster 3)";
                  $_SESSION['DBI'] = $DB3;
                  break;
                case $DB4:
                  echo " (Set Cluster 4)";
                  $_SESSION['DBI'] = $DB4;
                  break;
                case $DB5:
                  echo " (Set Cluster 5)";
                  $_SESSION['DBI'] = $DB5;
                  break;
                case $DB6:
                  echo " (Set Cluster 6)";
                  $_SESSION['DBI'] = $DB6;
                  break;
                default:
                  // code...
                  break;
              }
            ?> | [<a href="data/data_testing.php">Data Testing</a>]
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="bootstrap/dist/js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="bootstrap/dist/js/bootstrap.bundle.js"></script>
</html>
