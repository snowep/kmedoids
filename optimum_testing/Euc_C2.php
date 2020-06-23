<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include 'navbar_optimum_testing.php'; $idpel = $_GET['id_pelanggan']; ?>
    <div class="container-fluid">
      <div class="row" style="padding-top: 80px;"></div>
      <div class="row">
        <div class="col-md-4">
          <h5>Customer ID #<?php echo $idpel ?></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h5>WBP</h5>
        </div>
        <div class="col-md-6">
          <h5>LWBP</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="7">Hari ke-</th>
                </tr>
                <tr>
                  <?php for ($i=1; $i < 8; $i++) {
                  ?>
                  <th><?php echo $i ?></th>
                  <?php
                  } ?>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_testing WHERE id_pelanggan = '".$idpel."'");
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <?php while ($data = $query->fetch()) { ?>
                <tr>
                  <?php for ($i=0; $i < 7; $i++) { ?>
                  <td><?php echo number_format($data[$i], 3); ?></td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="7">Hari ke-</th>
                </tr>
                <tr>
                  <?php for ($i=1; $i < 8; $i++) {
                  ?>
                  <th><?php echo $i ?></th>
                  <?php
                  } ?>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_testing WHERE id_pelanggan = '".$idpel."'");
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <?php while ($data = $query->fetch()) { ?>
                <tr>
                  <?php for ($i=0; $i < 7; $i++) { ?>
                  <td><?php echo number_format($data[$i], 3); ?></td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <h5>Max DC</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>DC1</th>
                  <th>DC2</th>
                </tr>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT C2DC1, C2DC2 FROM tb_training");
                $DC1_max = 0;
                $DC2_max = 0;
                while ($result = $query->fetch()) {
                  if ($result[0] > $DC1_max) {
                    $DC1_max = $result[0];
                  }
                  if ($result[1] > $DC2_max) {
                    $DC2_max = $result[1];
                  }
                }
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <tr>
                  <td><?php echo $DC1_max ?></td>
                  <td><?php echo $DC2_max ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      <?php
        $query = $db->query("SELECT * FROM tb_centroid")
      ?>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="bootstrap/dist/js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="bootstrap/dist/js/bootstrap.bundle.js"></script>
</html>
