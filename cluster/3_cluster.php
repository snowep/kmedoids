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
    <?php include 'cluster_navbar.php'; ?>
    <div class="container-fluid">
      <!-- Row kosong -->
      <div class="row" style="padding-top: 80px;"></div>
      <!-- Row label -->
      <div class="row">
        <div class="col-md-1">
          <h5>Medoid Awal</h5>
        </div>
        <div class="col-md-4">
          <h5>WBP</h5>
        </div>
        <div class="col-md-4">
          <h5>LWBP</h5>
        </div>
      </div>
      <!-- Row table data -->
      <div class="row">
        <!-- Angka acak -->
        <div class="col-md-1">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                </tr>
              </thead>
              <?php
                $query_update_init = $db->query("UPDATE tb_training SET C3DC1='0', C3DC2='0', C3DC3='0', C_before='', C_after='', hasil='0'");
                $S = 0;

                do {
                  $K_C1 = rand(1,103);
                  $K_C2 = rand(1,103)
                  $K_C3 = rand(1,103);
                } while ($K_C1 == $K_C2 && $K_C1 == $K_C3 && $K_C2 == $K_C3);
              ?>
              <tbody>
                <tr>
                  <td><?php echo $K_C1 ?></td>
                  <td><?php echo $K_C2 ?></td>
                  <td><?php echo $K_C3 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data WBP -->
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">C</th>
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
                $query_medoid_init_WBP_C1 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C1."'");
                $data_medoid_init_WBP_C1 = $query_medoid_init_WBP_C1->fetch();
                $query_medoid_init_WBP_C2 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C2."'");
                $data_medoid_init_WBP_C2 = $query_medoid_init_WBP_C2->fetch();
                $query_medoid_init_WBP_C3 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C3."'");
                $data_medoid_init_WBP_C3 = $query_medoid_init_WBP_C3->fetch();
              ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_medoid_init_WBP_C1[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C1[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_WBP_C2[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C2[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>3</td>
                  <td><?php echo $data_medoid_init_WBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data LWBP -->
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">C</th>
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
                $query_medoid_init_LWBP_C1 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C1."'");
                $data_medoid_init_LWBP_C1 = $query_medoid_init_LWBP_C1->fetch();
                $query_medoid_init_LWBP_C2 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C2."'");
                $data_medoid_init_LWBP_C2 = $query_medoid_init_LWBP_C2->fetch();
                $query_medoid_init_LWBP_C3 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C3."'");
                $data_medoid_init_LWBP_C3 = $query_medoid_init_LWBP_C3->fetch();
              ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_medoid_init_LWBP_C1[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C1[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_LWBP_C2[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C2[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_LWBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data jarak centroid -->
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="2">Jarak Centroid</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C2</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $cost_init_DC1C1 = 0;
                  $cost_init_DC1C2 = 0;
                  $cost_init_DC1C3 = 0;
                  $query_data = $db->query("SELECT * FROM tb_training");
                  while ($fetch_data = $query_data->fetch()) {
                    $DC1C1 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C1[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C1[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C1[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C1[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C1[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C1[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C1[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C1[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C1[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C1[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C1[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C1[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C1[7], 2)
                      );
                    $DC1C2 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C2[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C2[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C2[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C2[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C2[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C2[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C2[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C2[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C2[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C2[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C2[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C2[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C2[7], 2)
                      );
                    $DC1C3 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C3[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C3[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C3[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C3[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C3[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C3[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C3[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C3[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C3[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C3[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C3[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C3[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C3[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C3[7], 2)
                      );
                      //DC1C1 dan DC1C2 variable masuk ke database

                      if (min($DC1C1, $DC1C2, $DC1C3) == $DC1C1) {
                        $C = 'C1';
                      } elseif (min($DC1C1, $DC1C2, $DC1C3) == $DC1C) {
                        $C = 'C2';
                      } else {
                        $C = 'C3';
                      }
                      $query_update_C_before = $db->query("UPDATE tb_training SET C3DC1='$DC1C1', C3DC2='$DC1C2', C3DC3='$DC1C3', C_before='$C' WHERE pelanggan='$fetch_data[0]'");
                      $cost_init_DC1C1 += $DC1C1;
                      $cost_init_DC1C2 += $DC1C2;
                      $cost_init_DC1C3 += $DC1C3;
                      $cost_init_total = $cost_init_DC1C1 + $cost_init_DC1C2 + $cost_init_DC1C3;
                  }
                ?>
                <tr>
                  <td><?php echo $cost_init_DC1C1 ?></td>
                  <td><?php echo $cost_init_DC1C2 ?></td>
                  <td><?php echo $cost_init_DC1C3 ?></td>
                </tr>
                <tr>
                  <th>Total Cost</th>
                  <th><?php echo $cost_init_total ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Row table iterasi medoids -->
      <?php
        for ($x=1; $x <= 100; $x++) {
      ?>
      <!-- Row label -->
      <div class="row">
        <div class="col-md-1">
          <h5>Iterasi ke-<?php echo $x ?></h5>
        </div>
      </div>
      <div class="row">
        <!-- Angka acak -->
        <div class="col-md-1">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                </tr>
              </thead>
              <?php
                do {
                  $Kn_C1 = rand(1,103);
                  $Kn_C2 = rand(1,103);
                  $Kn_C3 = rand(1,103);
                } while (
                  $Kn_C1 == $Kn_C2 && $Kn_C1 == $Kn_C3 && $Kn_C2 == $Kn_C3 &&
                  $Kn_C1 == $K_C1 && $Kn_C2 == $K_C2 && $K_C3 == $Kn_C3 );
              ?>
              <tbody>
                <tr>
                  <td><?php echo $Kn_C1 ?></td>
                  <td><?php echo $Kn_C2 ?></td>
                  <td><?php echo $Kn_C3 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data WBP -->
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">C</th>
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
                $query_medoid_init_WBP_C1 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C1."'");
                $data_medoid_init_WBP_C1 = $query_medoid_init_WBP_C1->fetch();
                $query_medoid_init_WBP_C2 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C2."'");
                $data_medoid_init_WBP_C2 = $query_medoid_init_WBP_C2->fetch();
                $query_medoid_init_WBP_C3 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C3."'");
                $data_medoid_init_WBP_C3 = $query_medoid_init_WBP_C3->fetch();
              ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_medoid_init_WBP_C1[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C1[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_WBP_C2[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C2[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_WBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data LWBP -->
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">C</th>
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
                $query_medoid_init_LWBP_C1 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C1."'");
                $data_medoid_init_LWBP_C1 = $query_medoid_init_LWBP_C1->fetch();
                $query_medoid_init_LWBP_C2 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C2."'");
                $data_medoid_init_LWBP_C2 = $query_medoid_init_LWBP_C2->fetch();
                $query_medoid_init_LWBP_C3 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C3."'");
                $data_medoid_init_LWBP_C3 = $query_medoid_init_LWBP_C3->fetch();
              ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_medoid_init_LWBP_C1[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C1[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_LWBP_C2[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C2[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_medoid_init_LWBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data jarak centroid -->
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="2">Jarak Centroid</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $cost_new_DC1C1 = 0;
                  $cost_new_DC1C2 = 0;
                  $query_data = $db->query("SELECT * FROM tb_training");
                  while ($fetch_data = $query_data->fetch()) {
                    $DC1C1 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C1[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C1[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C1[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C1[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C1[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C1[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C1[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C1[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C1[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C1[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C1[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C1[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C1[7], 2)
                      );
                    $DC1C2 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C2[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C2[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C2[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C2[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C2[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C2[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C2[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C2[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C2[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C2[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C2[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C2[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C2[7], 2)
                      );
                    $DC1C3 =
                      sqrt(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C3[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C3[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C3[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C3[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C3[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C3[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C3[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C3[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C3[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C3[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C3[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C3[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C3[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C3[7], 2)
                      );
                      //DC1C1 dan DC1C2 variable masuk ke database

                      if (min($DC1C1, $DC1C2, $DC1C3) == $DC1C1) {
                        $C = 'C1';
                      } elseif (min($DC1C1, $DC1C2, $DC1C3) == $DC1C) {
                        $C = 'C2';
                      } else {
                        $C = 'C3';
                      }
                      $query_update_C_before = $db->query("UPDATE tb_training SET C3DC1='$DC1C1', C3DC2='$DC1C2', C3DC3='$DC1C3', C_after='$C' WHERE pelanggan='$fetch_data[0]'");
                      $cost_new_DC1C1 += $DC1C1;
                      $cost_new_DC1C2 += $DC1C2;
                      $cost_new_DC1C3 += $DC1C3;
                      $cost_new_total = $cost_new_DC1C1 + $cost_new_DC1C2 + $cost_new_DC1C3;
                  }
                  $query_update_hasil = $db->query("UPDATE tb_training SET hasil='1' WHERE C_before=C_after");
                  $query_update_C = $db->query("UPDATE tb_training SET C_before=C_after");
                  $stop_iteration = 0;
                  $query_check_hasil = $db->query("SELECT * FROM tb_training WHERE hasil='0'");
                  while ($check_hasil = $query_check_hasil->fetch()) {
                    $stop_iteration++;
                  }

                  $S = $cost_init_total - $cost_new_total;
                ?>
                <tr>
                  <td><?php echo $cost_new_DC1C1 ?></td>
                  <td><?php echo $cost_new_DC1C2 ?></td>
                  <td><?php echo $cost_new_DC1C3 ?></td>
                </tr>
                <tr>
                  <th>Total Cost</th>
                  <th><?php echo $cost_new_total ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>S</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><?php echo $S ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <?php
            $query_anggota_C1 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C1'");
            $total_data_anggota_C1 = $query_anggota_C1->rowCount();
            $query_anggota_C2 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C2'");
            $total_data_anggota_C2 = $query_anggota_C2->rowCount();
            $query_anggota_C3 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C3'");
            $total_data_anggota_C3 = $query_anggota_C3->rowCount();
          ?>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="2">Anggota Cluster</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $total_data_anggota_C1 ?></td>
                  <td><?php echo $total_data_anggota_C2 ?></td>
                  <td><?php echo $total_data_anggota_C3 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php
          $cost_init_total = $cost_new_total;
          if ($stop_iteration == 0 && $S > 0) {
            break;
          }
        }
      ?>
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4">Iterasi selesai</h1>
          <br>
          <h2 class="display-4">Perhitungan DBI</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>S<sub>1</sub></th>
                  <th>S<sub>2</sub></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query_DBI_C1 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C1'");
                $S1 = 0;
                $total_data_DBI_C1 = $query_DBI_C1->rowCount();

                while ($data_DBI_C1 = $query_DBI_C1->fetch()) {
                  $S1 +=
                    pow(($data_DBI_C1[1]-$data_medoid_init_WBP_C1[1]), 2) + pow(($data_DBI_C1[2]-$data_medoid_init_LWBP_C1[1]), 2) +
                    pow(($data_DBI_C1[3]-$data_medoid_init_WBP_C1[2]), 2) + pow(($data_DBI_C1[4]-$data_medoid_init_LWBP_C1[2]), 2) +
                    pow(($data_DBI_C1[5]-$data_medoid_init_WBP_C1[3]), 2) + pow(($data_DBI_C1[6]-$data_medoid_init_LWBP_C1[3]), 2) +
                    pow(($data_DBI_C1[7]-$data_medoid_init_WBP_C1[4]), 2) + pow(($data_DBI_C1[8]-$data_medoid_init_LWBP_C1[4]), 2) +
                    pow(($data_DBI_C1[9]-$data_medoid_init_WBP_C1[5]), 2) + pow(($data_DBI_C1[10]-$data_medoid_init_LWBP_C1[5]), 2) +
                    pow(($data_DBI_C1[11]-$data_medoid_init_WBP_C1[6]), 2) + pow(($data_DBI_C1[12]-$data_medoid_init_LWBP_C1[6]), 2) +
                    pow(($data_DBI_C1[13]-$data_medoid_init_WBP_C1[7]), 2) + pow(($data_DBI_C1[14]-$data_medoid_init_LWBP_C1[7]), 2);
                }
                $S1 = sqrt($S1 / $total_data_DBI_C1);

                $query_DBI_C2 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C2'");
                $S2 = 0;
                $total_data_DBI_C2 = $query_DBI_C2->rowCount();

                while ($data_DBI_C2 = $query_DBI_C2->fetch()) {
                  $S2 +=
                    pow(($data_DBI_C2[1]-$data_medoid_init_WBP_C2[1]), 2) + pow(($data_DBI_C2[2]-$data_medoid_init_LWBP_C2[1]), 2) +
                    pow(($data_DBI_C2[3]-$data_medoid_init_WBP_C2[2]), 2) + pow(($data_DBI_C2[4]-$data_medoid_init_LWBP_C2[2]), 2) +
                    pow(($data_DBI_C2[5]-$data_medoid_init_WBP_C2[3]), 2) + pow(($data_DBI_C2[6]-$data_medoid_init_LWBP_C2[3]), 2) +
                    pow(($data_DBI_C2[7]-$data_medoid_init_WBP_C2[4]), 2) + pow(($data_DBI_C2[8]-$data_medoid_init_LWBP_C2[4]), 2) +
                    pow(($data_DBI_C2[9]-$data_medoid_init_WBP_C2[5]), 2) + pow(($data_DBI_C2[10]-$data_medoid_init_LWBP_C2[5]), 2) +
                    pow(($data_DBI_C2[11]-$data_medoid_init_WBP_C2[6]), 2) + pow(($data_DBI_C2[12]-$data_medoid_init_LWBP_C2[6]), 2) +
                    pow(($data_DBI_C2[13]-$data_medoid_init_WBP_C2[7]), 2) + pow(($data_DBI_C2[14]-$data_medoid_init_LWBP_C2[7]), 2);
                }
                $S2 = sqrt($S2 / $total_data_DBI_C2);
                ?>
                <tr>
                  <td><?php echo $S1 ?></td>
                  <td><?php echo $S2 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>12</sub></th>
                  <th>M<sub>21</sub></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $M12 =
                    sqrt(
                      pow($data_medoid_init_WBP_C1[1]-$data_medoid_init_WBP_C2[1], 2) + pow($data_medoid_init_LWBP_C1[1]-$data_medoid_init_LWBP_C2[1], 2)+
                      pow($data_medoid_init_WBP_C1[2]-$data_medoid_init_WBP_C2[2], 2) + pow($data_medoid_init_LWBP_C1[2]-$data_medoid_init_LWBP_C2[2], 2)+
                      pow($data_medoid_init_WBP_C1[3]-$data_medoid_init_WBP_C2[3], 2) + pow($data_medoid_init_LWBP_C1[3]-$data_medoid_init_LWBP_C2[3], 2)+
                      pow($data_medoid_init_WBP_C1[4]-$data_medoid_init_WBP_C2[4], 2) + pow($data_medoid_init_LWBP_C1[4]-$data_medoid_init_LWBP_C2[4], 2)+
                      pow($data_medoid_init_WBP_C1[5]-$data_medoid_init_WBP_C2[5], 2) + pow($data_medoid_init_LWBP_C1[5]-$data_medoid_init_LWBP_C2[5], 2)+
                      pow($data_medoid_init_WBP_C1[6]-$data_medoid_init_WBP_C2[6], 2) + pow($data_medoid_init_LWBP_C1[6]-$data_medoid_init_LWBP_C2[6], 2)+
                      pow($data_medoid_init_WBP_C1[7]-$data_medoid_init_WBP_C2[7], 2) + pow($data_medoid_init_LWBP_C1[7]-$data_medoid_init_LWBP_C2[7], 2)
                    );
                  $M21 =
                    sqrt(
                      pow($data_medoid_init_WBP_C2[1]-$data_medoid_init_WBP_C1[1], 2) + pow($data_medoid_init_LWBP_C2[1]-$data_medoid_init_LWBP_C1[1], 2)+
                      pow($data_medoid_init_WBP_C2[2]-$data_medoid_init_WBP_C1[2], 2) + pow($data_medoid_init_LWBP_C2[2]-$data_medoid_init_LWBP_C1[2], 2)+
                      pow($data_medoid_init_WBP_C2[3]-$data_medoid_init_WBP_C1[3], 2) + pow($data_medoid_init_LWBP_C2[3]-$data_medoid_init_LWBP_C1[3], 2)+
                      pow($data_medoid_init_WBP_C2[4]-$data_medoid_init_WBP_C1[4], 2) + pow($data_medoid_init_LWBP_C2[4]-$data_medoid_init_LWBP_C1[4], 2)+
                      pow($data_medoid_init_WBP_C2[5]-$data_medoid_init_WBP_C1[5], 2) + pow($data_medoid_init_LWBP_C2[5]-$data_medoid_init_LWBP_C1[5], 2)+
                      pow($data_medoid_init_WBP_C2[6]-$data_medoid_init_WBP_C1[6], 2) + pow($data_medoid_init_LWBP_C2[6]-$data_medoid_init_LWBP_C1[6], 2)+
                      pow($data_medoid_init_WBP_C2[7]-$data_medoid_init_WBP_C1[7], 2) + pow($data_medoid_init_LWBP_C2[7]-$data_medoid_init_LWBP_C1[7], 2)
                    );
                ?>
                <tr>
                  <td><?php echo $M12 ?></td>
                  <td><?php echo $M21 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>12</sub></th>
                  <th>R<sub>21</sub></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $R12 = ($S1 + $S2) / $M12;
                  $R21 = ($S2 + $S1) / $M21;
                ?>
                <tr>
                  <td><?php echo $R12 ?></td>
                  <td><?php echo $R21 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>D<sub>1</sub></th>
                  <th>D<sub>2</sub></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $D1 = max($R12,0);
                  $D2 = max($R21,0);
                ?>
                <tr>
                  <td><?php echo $D1 ?></td>
                  <td><?php echo $D2 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>DB</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $DB = ($D1 + $D2) / 2;
                ?>
                <tr>
                  <td><?php echo $DB ?></td>
                </tr>
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
