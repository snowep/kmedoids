<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <script src="../Chart.js-2.9.3/dist/Chart.js"></script>
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
        <div class="col-md-4">
          <h5>Max DC</h5>
        </div>
        <div class="col-md-4">
          <h5>DC Testing</h5>
        </div>
        <div class="col-md-4">
          <h5>Keterangan</h5>
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
                  <th>DC3</th>
                  <th>DC4</th>
                  <th>DC5</th>
                </tr>
                </tr>
              </thead>
              <?php
                $query = $db->query("SELECT C5DC1, C5DC2, C5DC3, C5DC4, C5DC5 FROM tb_training");
                $DC1_max = 0;
                $DC2_max = 0;
                $DC3_max = 0;
                $DC4_max = 0;
                $DC5_max = 0;
                while ($result = $query->fetch()) {
                  if ($result[0] > $DC1_max) {
                    $DC1_max = $result[0];
                  }
                  if ($result[1] > $DC2_max) {
                    $DC2_max = $result[1];
                  }
                  if ($result[2] > $DC3_max) {
                    $DC3_max = $result[2];
                  }
                  if ($result[3] > $DC4_max) {
                    $DC4_max = $result[3];
                  }
                  if ($result[4] > $DC5_max) {
                    $DC5_max = $result[4];
                  }
                }
                $totalData = $query->rowCount();
              ?>
              <tbody>
                <tr>
                  <td><?php echo $DC1_max ?></td>
                  <td><?php echo $DC2_max ?></td>
                  <td><?php echo $DC3_max ?></td>
                  <td><?php echo $DC4_max ?></td>
                  <td><?php echo $DC5_max ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      <?php
        $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C1'");
        $data_centroid_WBP_C1 = $query->fetch();
        $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C1'");
        $data_centroid_LWBP_C1 = $query->fetch();

        $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C2'");
        $data_centroid_WBP_C2 = $query->fetch();
        $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C2'");
        $data_centroid_LWBP_C2 = $query->fetch();

        $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C3'");
        $data_centroid_WBP_C3 = $query->fetch();
        $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C3'");
        $data_centroid_LWBP_C3 = $query->fetch();

        $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C4'");
        $data_centroid_WBP_C4 = $query->fetch();
        $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C4'");
        $data_centroid_LWBP_C4 = $query->fetch();

        $query = $db->query("SELECT Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C5'");
        $data_centroid_WBP_C5 = $query->fetch();
        $query = $db->query("SELECT Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_centroid WHERE cluster = '5' AND C='C5'");
        $data_centroid_LWBP_C5 = $query->fetch();

        $query = $db->query("SELECT * FROM tb_testing WHERE id_pelanggan = '$idpel'");
        while ($fetch_data = $query->fetch()) {
          $DC1 =
            sqrt(
              pow($fetch_data[1]-$data_centroid_WBP_C1[0], 2) + pow($fetch_data[2]-$data_centroid_LWBP_C1[0], 2)+
              pow($fetch_data[3]-$data_centroid_WBP_C1[1], 2) + pow($fetch_data[4]-$data_centroid_LWBP_C1[1], 2)+
              pow($fetch_data[5]-$data_centroid_WBP_C1[2], 2) + pow($fetch_data[6]-$data_centroid_LWBP_C1[2], 2)+
              pow($fetch_data[7]-$data_centroid_WBP_C1[4], 2) + pow($fetch_data[8]-$data_centroid_LWBP_C1[4], 2)+
              pow($fetch_data[9]-$data_centroid_WBP_C1[5], 2) + pow($fetch_data[10]-$data_centroid_LWBP_C1[5], 2)+
              pow($fetch_data[11]-$data_centroid_WBP_C1[5], 2) + pow($fetch_data[12]-$data_centroid_LWBP_C1[5], 2)+
              pow($fetch_data[13]-$data_centroid_WBP_C1[6], 2) + pow($fetch_data[14]-$data_centroid_LWBP_C1[6], 2)
            );
          $DC2 =
            sqrt(
              pow($fetch_data[1]-$data_centroid_WBP_C2[0], 2) + pow($fetch_data[2]-$data_centroid_LWBP_C2[0], 2)+
              pow($fetch_data[3]-$data_centroid_WBP_C2[1], 2) + pow($fetch_data[4]-$data_centroid_LWBP_C2[1], 2)+
              pow($fetch_data[5]-$data_centroid_WBP_C2[2], 2) + pow($fetch_data[6]-$data_centroid_LWBP_C2[2], 2)+
              pow($fetch_data[7]-$data_centroid_WBP_C2[3], 2) + pow($fetch_data[8]-$data_centroid_LWBP_C2[3], 2)+
              pow($fetch_data[9]-$data_centroid_WBP_C2[4], 2) + pow($fetch_data[10]-$data_centroid_LWBP_C2[4], 2)+
              pow($fetch_data[11]-$data_centroid_WBP_C2[5], 2) + pow($fetch_data[12]-$data_centroid_LWBP_C2[5], 2)+
              pow($fetch_data[13]-$data_centroid_WBP_C2[6], 2) + pow($fetch_data[14]-$data_centroid_LWBP_C2[6], 2)
            );
          $DC3 =
            sqrt(
              pow($fetch_data[1]-$data_centroid_WBP_C3[0], 2) + pow($fetch_data[2]-$data_centroid_LWBP_C3[0], 2)+
              pow($fetch_data[3]-$data_centroid_WBP_C3[1], 2) + pow($fetch_data[4]-$data_centroid_LWBP_C3[1], 2)+
              pow($fetch_data[5]-$data_centroid_WBP_C3[2], 2) + pow($fetch_data[6]-$data_centroid_LWBP_C3[2], 2)+
              pow($fetch_data[7]-$data_centroid_WBP_C3[3], 2) + pow($fetch_data[8]-$data_centroid_LWBP_C3[3], 2)+
              pow($fetch_data[9]-$data_centroid_WBP_C3[4], 2) + pow($fetch_data[10]-$data_centroid_LWBP_C3[4], 2)+
              pow($fetch_data[11]-$data_centroid_WBP_C3[5], 2) + pow($fetch_data[12]-$data_centroid_LWBP_C3[5], 2)+
              pow($fetch_data[13]-$data_centroid_WBP_C3[6], 2) + pow($fetch_data[14]-$data_centroid_LWBP_C3[6], 2)
            );
          $DC4 =
            sqrt(
              pow($fetch_data[1]-$data_centroid_WBP_C4[0], 2) + pow($fetch_data[2]-$data_centroid_LWBP_C4[0], 2)+
              pow($fetch_data[3]-$data_centroid_WBP_C4[1], 2) + pow($fetch_data[4]-$data_centroid_LWBP_C4[1], 2)+
              pow($fetch_data[5]-$data_centroid_WBP_C4[2], 2) + pow($fetch_data[6]-$data_centroid_LWBP_C4[2], 2)+
              pow($fetch_data[7]-$data_centroid_WBP_C4[3], 2) + pow($fetch_data[8]-$data_centroid_LWBP_C4[3], 2)+
              pow($fetch_data[9]-$data_centroid_WBP_C4[4], 2) + pow($fetch_data[10]-$data_centroid_LWBP_C4[4], 2)+
              pow($fetch_data[11]-$data_centroid_WBP_C4[5], 2) + pow($fetch_data[12]-$data_centroid_LWBP_C4[5], 2)+
              pow($fetch_data[13]-$data_centroid_WBP_C4[6], 2) + pow($fetch_data[14]-$data_centroid_LWBP_C4[6], 2)
            );
          $DC5 =
            sqrt(
              pow($fetch_data[1]-$data_centroid_WBP_C5[0], 2) + pow($fetch_data[2]-$data_centroid_LWBP_C5[0], 2)+
              pow($fetch_data[3]-$data_centroid_WBP_C5[1], 2) + pow($fetch_data[4]-$data_centroid_LWBP_C5[1], 2)+
              pow($fetch_data[5]-$data_centroid_WBP_C5[2], 2) + pow($fetch_data[6]-$data_centroid_LWBP_C5[2], 2)+
              pow($fetch_data[7]-$data_centroid_WBP_C5[3], 2) + pow($fetch_data[8]-$data_centroid_LWBP_C5[3], 2)+
              pow($fetch_data[9]-$data_centroid_WBP_C5[4], 2) + pow($fetch_data[10]-$data_centroid_LWBP_C5[4], 2)+
              pow($fetch_data[11]-$data_centroid_WBP_C5[5], 2) + pow($fetch_data[12]-$data_centroid_LWBP_C5[5], 2)+
              pow($fetch_data[13]-$data_centroid_WBP_C5[6], 2) + pow($fetch_data[14]-$data_centroid_LWBP_C5[6], 2)
            );
        }
      ?>
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>DC1</th>
                  <th>DC2</th>
                  <th>DC3</th>
                  <th>DC4</th>
                  <th>DC5</th>
                </tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($DC1, 3) ?></td>
                  <td><?php echo number_format($DC2, 3) ?></td>
                  <td><?php echo number_format($DC3, 3) ?></td>
                  <td><?php echo number_format($DC4, 3) ?></td>
                  <td><?php echo number_format($DC5, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <?php if ($DC1 > $DC1_max || $DC2 > $DC2_max || $DC3 > $DC3_max || $DC4 > $DC4_max || $DC5 > $DC5_max) { ?>
            Penggunaan daya melebihi batas maksimal dan memiliki potensi pelanggan melakukan kecurangan.
          <?php } else { ?>
            Penggunaan daya masih dalam batas normal.
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <canvas id="myChart" width="50" height="30"></canvas>
          <script type="text/javascript">
          var ctx = document.getElementById('myChart').getContext('2d');
          var color = Chart.helpers.color;
          var scatterChart = new Chart(ctx, {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Max DC',
                    borderColor: "blue",
                    data: [{
                        x: 2,
                        y: <?php echo number_format($DC1_max, 3); ?>
                    }, {
                        x: 3,
                        y: <?php echo number_format($DC2_max, 3); ?>
                    }, {
                        x: 4,
                        y: <?php echo number_format($DC3_max, 3); ?>
                    }, {
                        x: 5,
                        y: <?php echo number_format($DC4_max, 3); ?>
                    }, {
                        x: 6,
                        y: <?php echo number_format($DC5_max, 3); ?>
                    }]
                },{
                    label: 'DC Testing',
                    borderColor: "red",
                    data: [{
                        x: 2,
                        y: <?php echo number_format($DC1, 3); ?>
                    }, {
                        x: 3,
                        y: <?php echo number_format($DC2, 3); ?>
                    }, {
                        x: 4,
                        y: <?php echo number_format($DC3, 3); ?>
                    }, {
                        x: 5,
                        y: <?php echo number_format($DC4, 3); ?>
                    }, {
                        x: 6,
                        y: <?php echo number_format($DC5, 3); ?>
                    }]
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'linear',
                        position: 'bottom',
                        ticks: {
                            suggestedMin: 1,
                            suggestedMax: 10
                        }
                    }]
                }
            }
        });
          </script>
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
