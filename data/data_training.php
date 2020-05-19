<?php include("../conn.php"); ?>
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
    <?php include 'data_navbar.php'; ?>
    <div class="container-fluid">
      <div class="row" style="padding-top: 80px;">
        <div class="col-md-12">
          <h1>Data Training</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>WBP</h2>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">ID Pelanggan</th>
                  <th colspan="7">Hari ke</th>
                </tr>
                <tr>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training");
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <?php while ($data = $query->fetch()) { ?>
                <tr>
                  <td><?php echo $data[0]; ?></td>
                  <?php for ($i=1; $i < 8; $i++) { ?>
                  <td><?php echo $data[$i]; ?></td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <h2>LWBP</h2>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">ID Pelanggan</th>
                  <th colspan="7">Hari ke</th>
                </tr>
                <tr>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training");
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <?php while ($data = $query->fetch()) { ?>
                <tr>
                  <td><?php echo $data[0]; ?></td>
                  <?php for ($i=1; $i < 8; $i++) { ?>
                  <td><?php echo $data[$i]; ?></td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../bootstrap/dist/js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
  </script>
</html>
