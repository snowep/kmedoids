<?php include '../../conn.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include 'manhattan_navbar.php'; ?>
    <div class="container-fluid">
      <!-- Row kosong -->
      <div class="row" style="padding-top: 80px;"></div>
      <!-- Row label -->
      <div class="row">
        <div class="col-md-2">
          <h5>Medoid Awal</h5>
        </div>
        <div class="col-md-5">
          <h5>WBP</h5>
        </div>
        <div class="col-md-5">
          <h5>LWBP</h5>
        </div>
      </div>
      <!-- Row table data -->
      <div class="row">
        <!-- Angka acak -->
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
              </thead>
              <?php
                $query_update_init = $db->query("UPDATE tb_training SET C5DC1='0', C5DC2='0', C5DC3='0', C5DC4='0', C5DC5='0', C_before='', C_after='', hasil='0'");
                $S = 0;

                // do {
                //   $K_C1 = rand(1,103);
                //   $K_C2 = rand(1,103);
                //   $K_C3 = rand(1,103);
                //   $K_C4 = rand(1,103);
                //   $K_C5 = rand(1,103);
                // } while (
                //   $K_C1 == $K_C2 && $K_C1 == $K_C3 && $K_C1 == $K_C4 && $K_C1 == $K_C5 &&
                //   $K_C2 == $K_C3 && $K_C2 == $K_C4 && $K_C2 == $K_C5 &&
                //   $K_C3 == $K_C4 && $K_C3 == $K_C5 &&
                //   $K_C4 == $K_C5);
                $K_C1 = 1;
                $K_C2 = 2;
                $K_C3 = 3;
                $K_C4 = 4;
                $K_C5 = 5;
              ?>
              <tbody>
                <tr>
                  <td><?php echo $K_C1 ?></td>
                  <td><?php echo $K_C2 ?></td>
                  <td><?php echo $K_C3 ?></td>
                  <td><?php echo $K_C4 ?></td>
                  <td><?php echo $K_C5 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data WBP -->
        <div class="col-md-5">
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
                $query_medoid_init_WBP_C4 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C4."'");
                $data_medoid_init_WBP_C4 = $query_medoid_init_WBP_C4->fetch();
                $query_medoid_init_WBP_C5 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C5."'");
                $data_medoid_init_WBP_C5 = $query_medoid_init_WBP_C5->fetch();
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
                <tr>
                  <td>4</td>
                  <td><?php echo $data_medoid_init_WBP_C4[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C4[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?php echo $data_medoid_init_WBP_C5[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C5[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data LWBP -->
        <div class="col-md-5">
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
                $query_medoid_init_LWBP_C4 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C4."'");
                $data_medoid_init_LWBP_C4 = $query_medoid_init_LWBP_C4->fetch();
                $query_medoid_init_LWBP_C5 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C5."'");
                $data_medoid_init_LWBP_C5 = $query_medoid_init_LWBP_C5->fetch();
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
                  <td>3</td>
                  <td><?php echo $data_medoid_init_LWBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>4</td>
                  <td><?php echo $data_medoid_init_LWBP_C4[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C4[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?php echo $data_medoid_init_LWBP_C5[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C5[$i] ?></td>
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
                  <th colspan="5">Jarak Centroid</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $cost_init_C5DC1 = 0;
                  $cost_init_C5DC2 = 0;
                  $cost_init_C5DC3 = 0;
                  $cost_init_C5DC4 = 0;
                  $cost_init_C5DC5 = 0;
                  $query_data = $db->query("SELECT * FROM tb_training");
                  while ($fetch_data = $query_data->fetch()) {
                    $C5DC1 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C1[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C1[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C1[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C1[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C1[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C1[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C1[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C1[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C1[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C1[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C1[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C1[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C1[7], 2)
                      );
                    $C5DC2 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C2[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C2[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C2[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C2[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C2[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C2[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C2[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C2[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C2[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C2[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C2[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C2[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C2[7], 2)
                      );
                    $C5DC3 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C3[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C3[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C3[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C3[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C3[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C3[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C3[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C3[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C3[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C3[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C3[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C3[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C3[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C3[7], 2)
                      );
                    $C5DC4 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C4[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C4[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C4[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C4[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C4[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C4[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C4[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C4[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C4[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C4[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C4[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C4[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C4[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C4[7], 2)
                      );
                    $C5DC5 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C5[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C5[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C5[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C5[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C5[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C5[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C5[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C5[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C5[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C5[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C5[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C5[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C5[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C5[7], 2)
                      );
                      //C3DC1 dan C3DC2 variable masuk ke database

                      if (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC1) {
                        $C = 'C1';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC2) {
                        $C = 'C2';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC3) {
                        $C = 'C3';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC4){
                        $C = 'C4';
                      } else {
                        $C = 'C5';
                      }
                      $query_update_C_before = $db->query("UPDATE tb_training SET C5DC1='$C5DC1', C5DC2='$C5DC2', C5DC3='$C5DC3', C5DC4='$C5DC4', C5DC5='$C5DC5', C_before='$C' WHERE pelanggan='$fetch_data[0]'");
                      $cost_init_C5DC1 += $C5DC1;
                      $cost_init_C5DC2 += $C5DC2;
                      $cost_init_C5DC3 += $C5DC3;
                      $cost_init_C5DC4 += $C5DC4;
                      $cost_init_C5DC5 += $C5DC5;
                      $cost_init_total = $cost_init_C5DC1 + $cost_init_C5DC2 + $cost_init_C5DC3 + $cost_init_C5DC4 + $cost_init_C5DC5;
                  }
                ?>
                <tr>
                  <td><?php echo number_format($cost_init_C5DC1, 3) ?></td>
                  <td><?php echo number_format($cost_init_C5DC2, 3) ?></td>
                  <td><?php echo number_format($cost_init_C5DC3, 3) ?></td>
                  <td><?php echo number_format($cost_init_C5DC4, 3) ?></td>
                  <td><?php echo number_format($cost_init_C5DC5, 3) ?></td>
                </tr>
                <tr>
                  <th>Total Cost</th>
                  <th colspan="4"><?php echo number_format($cost_init_total, 3) ?></th>
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
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
              </thead>
              <?php
                do {
                  $Kn_C1 = rand(1,103);
                  $Kn_C2 = rand(1,103);
                  $Kn_C3 = rand(1,103);
                  $Kn_C4 = rand(1,103);
                  $Kn_C5 = rand(1,103);
                } while (
                  // C1
                  $K_C1 == $K_C2 && $K_C1 == $K_C3 && $K_C1 == $K_C4 && $K_C1 == $K_C5 &&
                  $K_C1 == $Kn_C1 && $K_C1 == $Kn_C2 && $K_C1 == $Kn_C3 && $K_C1 == $Kn_C4 && $K_C1 == $Kn_C5 &&
                  // C2
                  $K_C2 == $K_C3 && $K_C2 == $K_C4 && $K_C2 == $K_C5 &&
                  $K_C2 == $Kn_C1 && $K_C2 == $Kn_C2 && $K_C2 == $Kn_C3 && $K_C2 == $Kn_C4 && $K_C2 == $Kn_C5 &&
                  // C3
                  $K_C3 == $K_C4 && $K_C3 == $K_C5 &&
                  $K_C3 == $Kn_C1 && $K_C3 == $Kn_C2 && $K_C3 == $Kn_C3 && $K_C3 == $Kn_C4 && $K_C3 == $Kn_C5 &&
                  // C4
                  $K_C4 == $K_C5 &&
                  $K_C4 == $Kn_C1 && $K_C4 == $Kn_C2 && $K_C4 == $Kn_C3 && $K_C4 == $Kn_C4 && $K_C4 == $Kn_C5 &&
                  // C5
                  $K_C5 == $Kn_C1 && $K_C5 == $Kn_C2 && $K_C5 == $Kn_C3 && $K_C5 == $Kn_C4 && $K_C5 == $Kn_C5 &&
                  // New C1
                  $Kn_C1 == $Kn_C2 && $Kn_C1 == $Kn_C3 && $Kn_C1 == $Kn_C4 && $Kn_C1 == $Kn_C5 &&
                  // New C2
                  $Kn_C2 == $Kn_C3 && $Kn_C2 == $Kn_C4 && $Kn_C2 == $Kn_C5 &&
                  // New C3
                  $Kn_C3 == $Kn_C4 && $Kn_C3 == $Kn_C5 &&
                  // New C4
                  $Kn_C4 == $Kn_C5);
              ?>
              <tbody>
                <tr>
                  <td><?php echo $Kn_C1 ?></td>
                  <td><?php echo $Kn_C2 ?></td>
                  <td><?php echo $Kn_C3 ?></td>
                  <td><?php echo $Kn_C4 ?></td>
                  <td><?php echo $Kn_C5 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data WBP -->
        <div class="col-md-5">
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
                $query_medoid_init_WBP_C4 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C4."'");
                $data_medoid_init_WBP_C4 = $query_medoid_init_WBP_C4->fetch();
                $query_medoid_init_WBP_C5 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C5."'");
                $data_medoid_init_WBP_C5 = $query_medoid_init_WBP_C5->fetch();
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
                <tr>
                  <td>4</td>
                  <td><?php echo $data_medoid_init_WBP_C4[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C4[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?php echo $data_medoid_init_WBP_C5[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_WBP_C5[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Data LWBP -->
        <div class="col-md-5">
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
                $query_medoid_init_LWBP_C4 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C4."'");
                $data_medoid_init_LWBP_C4 = $query_medoid_init_LWBP_C4->fetch();
                $query_medoid_init_LWBP_C5 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$Kn_C5."'");
                $data_medoid_init_LWBP_C5 = $query_medoid_init_LWBP_C5->fetch();
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
                  <td>3</td>
                  <td><?php echo $data_medoid_init_LWBP_C3[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C3[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>4</td>
                  <td><?php echo $data_medoid_init_LWBP_C4[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C4[$i] ?></td>
                  <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?php echo $data_medoid_init_LWBP_C5[0] ?></td>
                  <?php
                    for ($i=1; $i < 8; $i++) {
                  ?>
                  <td><?php echo $data_medoid_init_LWBP_C5[$i] ?></td>
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
                  <th colspan="5">Jarak Centroid</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $cost_new_C5DC1 = 0;
                  $cost_new_C5DC2 = 0;
                  $cost_new_C5DC3 = 0;
                  $cost_new_C5DC4 = 0;
                  $cost_new_C5DC5 = 0;
                  $query_data = $db->query("SELECT * FROM tb_training");
                  while ($fetch_data = $query_data->fetch()) {
                    $C5DC1 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C1[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C1[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C1[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C1[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C1[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C1[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C1[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C1[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C1[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C1[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C1[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C1[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C1[7], 2)
                      );
                    $C5DC2 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C2[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C2[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C2[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C2[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C2[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C2[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C2[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C2[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C2[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C2[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C2[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C2[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C2[7], 2)
                      );
                    $C5DC3 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C3[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C3[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C3[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C3[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C3[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C3[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C3[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C3[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C3[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C3[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C3[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C3[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C3[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C3[7], 2)
                      );
                    $C5DC4 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C4[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C4[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C4[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C4[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C4[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C4[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C4[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C4[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C4[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C4[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C4[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C4[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C4[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C4[7], 2)
                      );
                    $C5DC5 =
                      abs(
                        pow($fetch_data[1]-$data_medoid_init_WBP_C5[1], 2) + pow($fetch_data[2]-$data_medoid_init_LWBP_C5[1], 2)+
                        pow($fetch_data[3]-$data_medoid_init_WBP_C5[2], 2) + pow($fetch_data[4]-$data_medoid_init_LWBP_C5[2], 2)+
                        pow($fetch_data[5]-$data_medoid_init_WBP_C5[3], 2) + pow($fetch_data[6]-$data_medoid_init_LWBP_C5[3], 2)+
                        pow($fetch_data[7]-$data_medoid_init_WBP_C5[4], 2) + pow($fetch_data[8]-$data_medoid_init_LWBP_C5[4], 2)+
                        pow($fetch_data[9]-$data_medoid_init_WBP_C5[5], 2) + pow($fetch_data[10]-$data_medoid_init_LWBP_C5[5], 2)+
                        pow($fetch_data[11]-$data_medoid_init_WBP_C5[6], 2) + pow($fetch_data[12]-$data_medoid_init_LWBP_C5[6], 2)+
                        pow($fetch_data[13]-$data_medoid_init_WBP_C5[7], 2) + pow($fetch_data[14]-$data_medoid_init_LWBP_C5[7], 2)
                      );
                      //C3DC1 dan C3DC2 variable masuk ke database

                      if (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC1) {
                        $C = 'C1';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC2) {
                        $C = 'C2';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC3) {
                        $C = 'C3';
                      } elseif (min($C5DC1, $C5DC2, $C5DC3, $C5DC4, $C5DC5) == $C5DC4){
                        $C = 'C4';
                      } else {
                        $C = 'C5';
                      }
                      $query_update_C_before = $db->query("UPDATE tb_training SET C5DC1='$C5DC1', C5DC2='$C5DC2', C5DC3='$C5DC3', C5DC4='$C5DC4', C5DC5='$C5DC5', C_after='$C' WHERE pelanggan='$fetch_data[0]'");
                      $cost_new_C5DC1 += $C5DC1;
                      $cost_new_C5DC2 += $C5DC2;
                      $cost_new_C5DC3 += $C5DC3;
                      $cost_new_C5DC4 += $C5DC4;
                      $cost_new_C5DC5 += $C5DC5;
                      $cost_new_total = $cost_new_C5DC1 + $cost_new_C5DC2 + $cost_new_C5DC3 + $cost_new_C5DC4 + $cost_new_C5DC5;
                  }
                  $query_update_hasil = $db->query("UPDATE tb_training SET hasil='1' WHERE C_before=C_after");
                  $query_update_C = $db->query("UPDATE tb_training SET C_before=C_after");
                  $stop_iteration = 0;

                  $S = $cost_new_total - $cost_init_total;
                  // $query_check_hasil = $db->query("SELECT * FROM tb_training WHERE hasil='0'");
                  if ($S < 0) {
                    $stop_iteration++;
                  }
                ?>
                <tr>
                  <td><?php echo number_format($cost_new_C5DC1, 3) ?></td>
                  <td><?php echo number_format($cost_new_C5DC2, 3) ?></td>
                  <td><?php echo number_format($cost_new_C5DC3, 3) ?></td>
                  <td><?php echo number_format($cost_new_C5DC4, 3) ?></td>
                  <td><?php echo number_format($cost_new_C5DC5, 3) ?></td>
                </tr>
                <tr>
                  <th>Total Cost</th>
                  <th colspan="3"><?php echo number_format($cost_new_total, 3) ?></th>
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
                  <th><?php echo number_format($S, 3) ?></th>
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
            $query_anggota_C4 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C4'");
            $total_data_anggota_C4 = $query_anggota_C4->rowCount();
            $query_anggota_C5 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C5'");
            $total_data_anggota_C5 = $query_anggota_C5->rowCount();
          ?>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="5">Anggota Cluster</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $total_data_anggota_C1 ?></td>
                  <td><?php echo $total_data_anggota_C2 ?></td>
                  <td><?php echo $total_data_anggota_C3 ?></td>
                  <td><?php echo $total_data_anggota_C4 ?></td>
                  <td><?php echo $total_data_anggota_C5 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php
          $cost_init_total = $cost_new_total;
          if ($stop_iteration == 0) {
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
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>S<sub>1</sub></th>
                  <th>S<sub>2</sub></th>
                  <th>S<sub>3</sub></th>
                  <th>S<sub>4</sub></th>
                  <th>S<sub>5</sub></th>
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

                $query_DBI_C3 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C3'");
                $S3 = 0;
                $total_data_DBI_C3 = $query_DBI_C3->rowCount();

                while ($data_DBI_C3 = $query_DBI_C3->fetch()) {
                  $S3 +=
                    pow(($data_DBI_C3[1]-$data_medoid_init_WBP_C3[1]), 2) + pow(($data_DBI_C3[2]-$data_medoid_init_LWBP_C3[1]), 2) +
                    pow(($data_DBI_C3[3]-$data_medoid_init_WBP_C3[2]), 2) + pow(($data_DBI_C3[4]-$data_medoid_init_LWBP_C3[2]), 2) +
                    pow(($data_DBI_C3[5]-$data_medoid_init_WBP_C3[3]), 2) + pow(($data_DBI_C3[6]-$data_medoid_init_LWBP_C3[3]), 2) +
                    pow(($data_DBI_C3[7]-$data_medoid_init_WBP_C3[4]), 2) + pow(($data_DBI_C3[8]-$data_medoid_init_LWBP_C3[4]), 2) +
                    pow(($data_DBI_C3[9]-$data_medoid_init_WBP_C3[5]), 2) + pow(($data_DBI_C3[10]-$data_medoid_init_LWBP_C3[5]), 2) +
                    pow(($data_DBI_C3[11]-$data_medoid_init_WBP_C3[6]), 2) + pow(($data_DBI_C3[12]-$data_medoid_init_LWBP_C3[6]), 2) +
                    pow(($data_DBI_C3[13]-$data_medoid_init_WBP_C3[7]), 2) + pow(($data_DBI_C3[14]-$data_medoid_init_LWBP_C3[7]), 2);
                }
                $S3 = sqrt($S3 / $total_data_DBI_C3);

                $query_DBI_C4 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C4'");
                $S4 = 0;
                $total_data_DBI_C4 = $query_DBI_C4->rowCount();

                while ($data_DBI_C4 = $query_DBI_C4->fetch()) {
                  $S4 +=
                    pow(($data_DBI_C4[1]-$data_medoid_init_WBP_C4[1]), 2) + pow(($data_DBI_C4[2]-$data_medoid_init_LWBP_C4[1]), 2) +
                    pow(($data_DBI_C4[3]-$data_medoid_init_WBP_C4[2]), 2) + pow(($data_DBI_C4[4]-$data_medoid_init_LWBP_C4[2]), 2) +
                    pow(($data_DBI_C4[5]-$data_medoid_init_WBP_C4[3]), 2) + pow(($data_DBI_C4[6]-$data_medoid_init_LWBP_C4[3]), 2) +
                    pow(($data_DBI_C4[7]-$data_medoid_init_WBP_C4[4]), 2) + pow(($data_DBI_C4[8]-$data_medoid_init_LWBP_C4[4]), 2) +
                    pow(($data_DBI_C4[9]-$data_medoid_init_WBP_C4[5]), 2) + pow(($data_DBI_C4[10]-$data_medoid_init_LWBP_C4[5]), 2) +
                    pow(($data_DBI_C4[11]-$data_medoid_init_WBP_C4[6]), 2) + pow(($data_DBI_C4[12]-$data_medoid_init_LWBP_C4[6]), 2) +
                    pow(($data_DBI_C4[13]-$data_medoid_init_WBP_C4[7]), 2) + pow(($data_DBI_C4[14]-$data_medoid_init_LWBP_C4[7]), 2);
                }
                $S4 = sqrt($S4 / $total_data_DBI_C4);

                $query_DBI_C5 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C5'");
                $S5 = 0;
                $total_data_DBI_C5 = $query_DBI_C5->rowCount();

                while ($data_DBI_C5 = $query_DBI_C5->fetch()) {
                  $S5 +=
                    pow(($data_DBI_C5[1]-$data_medoid_init_WBP_C5[1]), 2) + pow(($data_DBI_C5[2]-$data_medoid_init_LWBP_C5[1]), 2) +
                    pow(($data_DBI_C5[3]-$data_medoid_init_WBP_C5[2]), 2) + pow(($data_DBI_C5[4]-$data_medoid_init_LWBP_C5[2]), 2) +
                    pow(($data_DBI_C5[5]-$data_medoid_init_WBP_C5[3]), 2) + pow(($data_DBI_C5[6]-$data_medoid_init_LWBP_C5[3]), 2) +
                    pow(($data_DBI_C5[7]-$data_medoid_init_WBP_C5[4]), 2) + pow(($data_DBI_C5[8]-$data_medoid_init_LWBP_C5[4]), 2) +
                    pow(($data_DBI_C5[9]-$data_medoid_init_WBP_C5[5]), 2) + pow(($data_DBI_C5[10]-$data_medoid_init_LWBP_C5[5]), 2) +
                    pow(($data_DBI_C5[11]-$data_medoid_init_WBP_C5[6]), 2) + pow(($data_DBI_C5[12]-$data_medoid_init_LWBP_C5[6]), 2) +
                    pow(($data_DBI_C5[13]-$data_medoid_init_WBP_C5[7]), 2) + pow(($data_DBI_C5[14]-$data_medoid_init_LWBP_C5[7]), 2);
                }
                $S5 = sqrt($S5 / $total_data_DBI_C5);
                ?>
                <tr>
                  <td><?php echo number_format($S1, 3) ?></td>
                  <td><?php echo number_format($S2, 3) ?></td>
                  <td><?php echo number_format($S3, 3) ?></td>
                  <td><?php echo number_format($S4, 3) ?></td>
                  <td><?php echo number_format($S5, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
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
                $M13 =
                  sqrt(
                    pow($data_medoid_init_WBP_C1[1]-$data_medoid_init_WBP_C3[1], 2) + pow($data_medoid_init_LWBP_C1[1]-$data_medoid_init_LWBP_C3[1], 2)+
                    pow($data_medoid_init_WBP_C1[2]-$data_medoid_init_WBP_C3[2], 2) + pow($data_medoid_init_LWBP_C1[2]-$data_medoid_init_LWBP_C3[2], 2)+
                    pow($data_medoid_init_WBP_C1[3]-$data_medoid_init_WBP_C3[3], 2) + pow($data_medoid_init_LWBP_C1[3]-$data_medoid_init_LWBP_C3[3], 2)+
                    pow($data_medoid_init_WBP_C1[4]-$data_medoid_init_WBP_C3[4], 2) + pow($data_medoid_init_LWBP_C1[4]-$data_medoid_init_LWBP_C3[4], 2)+
                    pow($data_medoid_init_WBP_C1[5]-$data_medoid_init_WBP_C3[5], 2) + pow($data_medoid_init_LWBP_C1[5]-$data_medoid_init_LWBP_C3[5], 2)+
                    pow($data_medoid_init_WBP_C1[6]-$data_medoid_init_WBP_C3[6], 2) + pow($data_medoid_init_LWBP_C1[6]-$data_medoid_init_LWBP_C3[6], 2)+
                    pow($data_medoid_init_WBP_C1[7]-$data_medoid_init_WBP_C3[7], 2) + pow($data_medoid_init_LWBP_C1[7]-$data_medoid_init_LWBP_C3[7], 2)
                  );
                $M14 =
                  sqrt(
                    pow($data_medoid_init_WBP_C1[1]-$data_medoid_init_WBP_C4[1], 2) + pow($data_medoid_init_LWBP_C1[1]-$data_medoid_init_LWBP_C4[1], 2)+
                    pow($data_medoid_init_WBP_C1[2]-$data_medoid_init_WBP_C4[2], 2) + pow($data_medoid_init_LWBP_C1[2]-$data_medoid_init_LWBP_C4[2], 2)+
                    pow($data_medoid_init_WBP_C1[3]-$data_medoid_init_WBP_C4[3], 2) + pow($data_medoid_init_LWBP_C1[3]-$data_medoid_init_LWBP_C4[3], 2)+
                    pow($data_medoid_init_WBP_C1[4]-$data_medoid_init_WBP_C4[4], 2) + pow($data_medoid_init_LWBP_C1[4]-$data_medoid_init_LWBP_C4[4], 2)+
                    pow($data_medoid_init_WBP_C1[5]-$data_medoid_init_WBP_C4[5], 2) + pow($data_medoid_init_LWBP_C1[5]-$data_medoid_init_LWBP_C4[5], 2)+
                    pow($data_medoid_init_WBP_C1[6]-$data_medoid_init_WBP_C4[6], 2) + pow($data_medoid_init_LWBP_C1[6]-$data_medoid_init_LWBP_C4[6], 2)+
                    pow($data_medoid_init_WBP_C1[7]-$data_medoid_init_WBP_C4[7], 2) + pow($data_medoid_init_LWBP_C1[7]-$data_medoid_init_LWBP_C4[7], 2)
                  );
                $M15 =
                  sqrt(
                    pow($data_medoid_init_WBP_C1[1]-$data_medoid_init_WBP_C5[1], 2) + pow($data_medoid_init_LWBP_C1[1]-$data_medoid_init_LWBP_C5[1], 2)+
                    pow($data_medoid_init_WBP_C1[2]-$data_medoid_init_WBP_C5[2], 2) + pow($data_medoid_init_LWBP_C1[2]-$data_medoid_init_LWBP_C5[2], 2)+
                    pow($data_medoid_init_WBP_C1[3]-$data_medoid_init_WBP_C5[3], 2) + pow($data_medoid_init_LWBP_C1[3]-$data_medoid_init_LWBP_C5[3], 2)+
                    pow($data_medoid_init_WBP_C1[4]-$data_medoid_init_WBP_C5[4], 2) + pow($data_medoid_init_LWBP_C1[4]-$data_medoid_init_LWBP_C5[4], 2)+
                    pow($data_medoid_init_WBP_C1[5]-$data_medoid_init_WBP_C5[5], 2) + pow($data_medoid_init_LWBP_C1[5]-$data_medoid_init_LWBP_C5[5], 2)+
                    pow($data_medoid_init_WBP_C1[6]-$data_medoid_init_WBP_C5[6], 2) + pow($data_medoid_init_LWBP_C1[6]-$data_medoid_init_LWBP_C5[6], 2)+
                    pow($data_medoid_init_WBP_C1[7]-$data_medoid_init_WBP_C5[7], 2) + pow($data_medoid_init_LWBP_C1[7]-$data_medoid_init_LWBP_C5[7], 2)
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
                $M23 =
                  sqrt(
                    pow($data_medoid_init_WBP_C2[1]-$data_medoid_init_WBP_C3[1], 2) + pow($data_medoid_init_LWBP_C2[1]-$data_medoid_init_LWBP_C3[1], 2)+
                    pow($data_medoid_init_WBP_C2[2]-$data_medoid_init_WBP_C3[2], 2) + pow($data_medoid_init_LWBP_C2[2]-$data_medoid_init_LWBP_C3[2], 2)+
                    pow($data_medoid_init_WBP_C2[3]-$data_medoid_init_WBP_C3[3], 2) + pow($data_medoid_init_LWBP_C2[3]-$data_medoid_init_LWBP_C3[3], 2)+
                    pow($data_medoid_init_WBP_C2[4]-$data_medoid_init_WBP_C3[4], 2) + pow($data_medoid_init_LWBP_C2[4]-$data_medoid_init_LWBP_C3[4], 2)+
                    pow($data_medoid_init_WBP_C2[5]-$data_medoid_init_WBP_C3[5], 2) + pow($data_medoid_init_LWBP_C2[5]-$data_medoid_init_LWBP_C3[5], 2)+
                    pow($data_medoid_init_WBP_C2[6]-$data_medoid_init_WBP_C3[6], 2) + pow($data_medoid_init_LWBP_C2[6]-$data_medoid_init_LWBP_C3[6], 2)+
                    pow($data_medoid_init_WBP_C2[7]-$data_medoid_init_WBP_C3[7], 2) + pow($data_medoid_init_LWBP_C2[7]-$data_medoid_init_LWBP_C3[7], 2)
                  );
                $M24 =
                  sqrt(
                    pow($data_medoid_init_WBP_C2[1]-$data_medoid_init_WBP_C4[1], 2) + pow($data_medoid_init_LWBP_C2[1]-$data_medoid_init_LWBP_C4[1], 2)+
                    pow($data_medoid_init_WBP_C2[2]-$data_medoid_init_WBP_C4[2], 2) + pow($data_medoid_init_LWBP_C2[2]-$data_medoid_init_LWBP_C4[2], 2)+
                    pow($data_medoid_init_WBP_C2[3]-$data_medoid_init_WBP_C4[3], 2) + pow($data_medoid_init_LWBP_C2[3]-$data_medoid_init_LWBP_C4[3], 2)+
                    pow($data_medoid_init_WBP_C2[4]-$data_medoid_init_WBP_C4[4], 2) + pow($data_medoid_init_LWBP_C2[4]-$data_medoid_init_LWBP_C4[4], 2)+
                    pow($data_medoid_init_WBP_C2[5]-$data_medoid_init_WBP_C4[5], 2) + pow($data_medoid_init_LWBP_C2[5]-$data_medoid_init_LWBP_C4[5], 2)+
                    pow($data_medoid_init_WBP_C2[6]-$data_medoid_init_WBP_C4[6], 2) + pow($data_medoid_init_LWBP_C2[6]-$data_medoid_init_LWBP_C4[6], 2)+
                    pow($data_medoid_init_WBP_C2[7]-$data_medoid_init_WBP_C4[7], 2) + pow($data_medoid_init_LWBP_C2[7]-$data_medoid_init_LWBP_C4[7], 2)
                  );
                $M25 =
                  sqrt(
                    pow($data_medoid_init_WBP_C2[1]-$data_medoid_init_WBP_C5[1], 2) + pow($data_medoid_init_LWBP_C2[1]-$data_medoid_init_LWBP_C5[1], 2)+
                    pow($data_medoid_init_WBP_C2[2]-$data_medoid_init_WBP_C5[2], 2) + pow($data_medoid_init_LWBP_C2[2]-$data_medoid_init_LWBP_C5[2], 2)+
                    pow($data_medoid_init_WBP_C2[3]-$data_medoid_init_WBP_C5[3], 2) + pow($data_medoid_init_LWBP_C2[3]-$data_medoid_init_LWBP_C5[3], 2)+
                    pow($data_medoid_init_WBP_C2[4]-$data_medoid_init_WBP_C5[4], 2) + pow($data_medoid_init_LWBP_C2[4]-$data_medoid_init_LWBP_C5[4], 2)+
                    pow($data_medoid_init_WBP_C2[5]-$data_medoid_init_WBP_C5[5], 2) + pow($data_medoid_init_LWBP_C2[5]-$data_medoid_init_LWBP_C5[5], 2)+
                    pow($data_medoid_init_WBP_C2[6]-$data_medoid_init_WBP_C5[6], 2) + pow($data_medoid_init_LWBP_C2[6]-$data_medoid_init_LWBP_C5[6], 2)+
                    pow($data_medoid_init_WBP_C2[7]-$data_medoid_init_WBP_C5[7], 2) + pow($data_medoid_init_LWBP_C2[7]-$data_medoid_init_LWBP_C5[7], 2)
                  );
                $M31 =
                  sqrt(
                    pow($data_medoid_init_WBP_C3[1]-$data_medoid_init_WBP_C1[1], 2) + pow($data_medoid_init_LWBP_C3[1]-$data_medoid_init_LWBP_C1[1], 2)+
                    pow($data_medoid_init_WBP_C3[2]-$data_medoid_init_WBP_C1[2], 2) + pow($data_medoid_init_LWBP_C3[2]-$data_medoid_init_LWBP_C1[2], 2)+
                    pow($data_medoid_init_WBP_C3[3]-$data_medoid_init_WBP_C1[3], 2) + pow($data_medoid_init_LWBP_C3[3]-$data_medoid_init_LWBP_C1[3], 2)+
                    pow($data_medoid_init_WBP_C3[4]-$data_medoid_init_WBP_C1[4], 2) + pow($data_medoid_init_LWBP_C3[4]-$data_medoid_init_LWBP_C1[4], 2)+
                    pow($data_medoid_init_WBP_C3[5]-$data_medoid_init_WBP_C1[5], 2) + pow($data_medoid_init_LWBP_C3[5]-$data_medoid_init_LWBP_C1[5], 2)+
                    pow($data_medoid_init_WBP_C3[6]-$data_medoid_init_WBP_C1[6], 2) + pow($data_medoid_init_LWBP_C3[6]-$data_medoid_init_LWBP_C1[6], 2)+
                    pow($data_medoid_init_WBP_C3[7]-$data_medoid_init_WBP_C1[7], 2) + pow($data_medoid_init_LWBP_C3[7]-$data_medoid_init_LWBP_C1[7], 2)
                  );
                $M32 =
                  sqrt(
                    pow($data_medoid_init_WBP_C3[1]-$data_medoid_init_WBP_C2[1], 2) + pow($data_medoid_init_LWBP_C3[1]-$data_medoid_init_LWBP_C2[1], 2)+
                    pow($data_medoid_init_WBP_C3[2]-$data_medoid_init_WBP_C2[2], 2) + pow($data_medoid_init_LWBP_C3[2]-$data_medoid_init_LWBP_C2[2], 2)+
                    pow($data_medoid_init_WBP_C3[3]-$data_medoid_init_WBP_C2[3], 2) + pow($data_medoid_init_LWBP_C3[3]-$data_medoid_init_LWBP_C2[3], 2)+
                    pow($data_medoid_init_WBP_C3[4]-$data_medoid_init_WBP_C2[4], 2) + pow($data_medoid_init_LWBP_C3[4]-$data_medoid_init_LWBP_C2[4], 2)+
                    pow($data_medoid_init_WBP_C3[5]-$data_medoid_init_WBP_C2[5], 2) + pow($data_medoid_init_LWBP_C3[5]-$data_medoid_init_LWBP_C2[5], 2)+
                    pow($data_medoid_init_WBP_C3[6]-$data_medoid_init_WBP_C2[6], 2) + pow($data_medoid_init_LWBP_C3[6]-$data_medoid_init_LWBP_C2[6], 2)+
                    pow($data_medoid_init_WBP_C3[7]-$data_medoid_init_WBP_C2[7], 2) + pow($data_medoid_init_LWBP_C3[7]-$data_medoid_init_LWBP_C2[7], 2)
                  );
                $M34 =
                  sqrt(
                    pow($data_medoid_init_WBP_C3[1]-$data_medoid_init_WBP_C4[1], 2) + pow($data_medoid_init_LWBP_C3[1]-$data_medoid_init_LWBP_C4[1], 2)+
                    pow($data_medoid_init_WBP_C3[2]-$data_medoid_init_WBP_C4[2], 2) + pow($data_medoid_init_LWBP_C3[2]-$data_medoid_init_LWBP_C4[2], 2)+
                    pow($data_medoid_init_WBP_C3[3]-$data_medoid_init_WBP_C4[3], 2) + pow($data_medoid_init_LWBP_C3[3]-$data_medoid_init_LWBP_C4[3], 2)+
                    pow($data_medoid_init_WBP_C3[4]-$data_medoid_init_WBP_C4[4], 2) + pow($data_medoid_init_LWBP_C3[4]-$data_medoid_init_LWBP_C4[4], 2)+
                    pow($data_medoid_init_WBP_C3[5]-$data_medoid_init_WBP_C4[5], 2) + pow($data_medoid_init_LWBP_C3[5]-$data_medoid_init_LWBP_C4[5], 2)+
                    pow($data_medoid_init_WBP_C3[6]-$data_medoid_init_WBP_C4[6], 2) + pow($data_medoid_init_LWBP_C3[6]-$data_medoid_init_LWBP_C4[6], 2)+
                    pow($data_medoid_init_WBP_C3[7]-$data_medoid_init_WBP_C4[7], 2) + pow($data_medoid_init_LWBP_C3[7]-$data_medoid_init_LWBP_C4[7], 2)
                  );
                $M35 =
                  sqrt(
                    pow($data_medoid_init_WBP_C3[1]-$data_medoid_init_WBP_C5[1], 2) + pow($data_medoid_init_LWBP_C3[1]-$data_medoid_init_LWBP_C5[1], 2)+
                    pow($data_medoid_init_WBP_C3[2]-$data_medoid_init_WBP_C5[2], 2) + pow($data_medoid_init_LWBP_C3[2]-$data_medoid_init_LWBP_C5[2], 2)+
                    pow($data_medoid_init_WBP_C3[3]-$data_medoid_init_WBP_C5[3], 2) + pow($data_medoid_init_LWBP_C3[3]-$data_medoid_init_LWBP_C5[3], 2)+
                    pow($data_medoid_init_WBP_C3[4]-$data_medoid_init_WBP_C5[4], 2) + pow($data_medoid_init_LWBP_C3[4]-$data_medoid_init_LWBP_C5[4], 2)+
                    pow($data_medoid_init_WBP_C3[5]-$data_medoid_init_WBP_C5[5], 2) + pow($data_medoid_init_LWBP_C3[5]-$data_medoid_init_LWBP_C5[5], 2)+
                    pow($data_medoid_init_WBP_C3[6]-$data_medoid_init_WBP_C5[6], 2) + pow($data_medoid_init_LWBP_C3[6]-$data_medoid_init_LWBP_C5[6], 2)+
                    pow($data_medoid_init_WBP_C3[7]-$data_medoid_init_WBP_C5[7], 2) + pow($data_medoid_init_LWBP_C3[7]-$data_medoid_init_LWBP_C5[7], 2)
                  );
                $M41 =
                  sqrt(
                    pow($data_medoid_init_WBP_C4[1]-$data_medoid_init_WBP_C1[1], 2) + pow($data_medoid_init_LWBP_C4[1]-$data_medoid_init_LWBP_C1[1], 2)+
                    pow($data_medoid_init_WBP_C4[2]-$data_medoid_init_WBP_C1[2], 2) + pow($data_medoid_init_LWBP_C4[2]-$data_medoid_init_LWBP_C1[2], 2)+
                    pow($data_medoid_init_WBP_C4[3]-$data_medoid_init_WBP_C1[3], 2) + pow($data_medoid_init_LWBP_C4[3]-$data_medoid_init_LWBP_C1[3], 2)+
                    pow($data_medoid_init_WBP_C4[4]-$data_medoid_init_WBP_C1[4], 2) + pow($data_medoid_init_LWBP_C4[4]-$data_medoid_init_LWBP_C1[4], 2)+
                    pow($data_medoid_init_WBP_C4[5]-$data_medoid_init_WBP_C1[5], 2) + pow($data_medoid_init_LWBP_C4[5]-$data_medoid_init_LWBP_C1[5], 2)+
                    pow($data_medoid_init_WBP_C4[6]-$data_medoid_init_WBP_C1[6], 2) + pow($data_medoid_init_LWBP_C4[6]-$data_medoid_init_LWBP_C1[6], 2)+
                    pow($data_medoid_init_WBP_C4[7]-$data_medoid_init_WBP_C1[7], 2) + pow($data_medoid_init_LWBP_C4[7]-$data_medoid_init_LWBP_C1[7], 2)
                  );
                $M42 =
                  sqrt(
                    pow($data_medoid_init_WBP_C4[1]-$data_medoid_init_WBP_C2[1], 2) + pow($data_medoid_init_LWBP_C4[1]-$data_medoid_init_LWBP_C2[1], 2)+
                    pow($data_medoid_init_WBP_C4[2]-$data_medoid_init_WBP_C2[2], 2) + pow($data_medoid_init_LWBP_C4[2]-$data_medoid_init_LWBP_C2[2], 2)+
                    pow($data_medoid_init_WBP_C4[3]-$data_medoid_init_WBP_C2[3], 2) + pow($data_medoid_init_LWBP_C4[3]-$data_medoid_init_LWBP_C2[3], 2)+
                    pow($data_medoid_init_WBP_C4[4]-$data_medoid_init_WBP_C2[4], 2) + pow($data_medoid_init_LWBP_C4[4]-$data_medoid_init_LWBP_C2[4], 2)+
                    pow($data_medoid_init_WBP_C4[5]-$data_medoid_init_WBP_C2[5], 2) + pow($data_medoid_init_LWBP_C4[5]-$data_medoid_init_LWBP_C2[5], 2)+
                    pow($data_medoid_init_WBP_C4[6]-$data_medoid_init_WBP_C2[6], 2) + pow($data_medoid_init_LWBP_C4[6]-$data_medoid_init_LWBP_C2[6], 2)+
                    pow($data_medoid_init_WBP_C4[7]-$data_medoid_init_WBP_C2[7], 2) + pow($data_medoid_init_LWBP_C4[7]-$data_medoid_init_LWBP_C2[7], 2)
                  );
                $M43 =
                  sqrt(
                    pow($data_medoid_init_WBP_C4[1]-$data_medoid_init_WBP_C3[1], 2) + pow($data_medoid_init_LWBP_C4[1]-$data_medoid_init_LWBP_C3[1], 2)+
                    pow($data_medoid_init_WBP_C4[2]-$data_medoid_init_WBP_C3[2], 2) + pow($data_medoid_init_LWBP_C4[2]-$data_medoid_init_LWBP_C3[2], 2)+
                    pow($data_medoid_init_WBP_C4[3]-$data_medoid_init_WBP_C3[3], 2) + pow($data_medoid_init_LWBP_C4[3]-$data_medoid_init_LWBP_C3[3], 2)+
                    pow($data_medoid_init_WBP_C4[4]-$data_medoid_init_WBP_C3[4], 2) + pow($data_medoid_init_LWBP_C4[4]-$data_medoid_init_LWBP_C3[4], 2)+
                    pow($data_medoid_init_WBP_C4[5]-$data_medoid_init_WBP_C3[5], 2) + pow($data_medoid_init_LWBP_C4[5]-$data_medoid_init_LWBP_C3[5], 2)+
                    pow($data_medoid_init_WBP_C4[6]-$data_medoid_init_WBP_C3[6], 2) + pow($data_medoid_init_LWBP_C4[6]-$data_medoid_init_LWBP_C3[6], 2)+
                    pow($data_medoid_init_WBP_C4[7]-$data_medoid_init_WBP_C3[7], 2) + pow($data_medoid_init_LWBP_C4[7]-$data_medoid_init_LWBP_C3[7], 2)
                  );
                $M45 =
                  sqrt(
                    pow($data_medoid_init_WBP_C4[1]-$data_medoid_init_WBP_C5[1], 2) + pow($data_medoid_init_LWBP_C4[1]-$data_medoid_init_LWBP_C5[1], 2)+
                    pow($data_medoid_init_WBP_C4[2]-$data_medoid_init_WBP_C5[2], 2) + pow($data_medoid_init_LWBP_C4[2]-$data_medoid_init_LWBP_C5[2], 2)+
                    pow($data_medoid_init_WBP_C4[3]-$data_medoid_init_WBP_C5[3], 2) + pow($data_medoid_init_LWBP_C4[3]-$data_medoid_init_LWBP_C5[3], 2)+
                    pow($data_medoid_init_WBP_C4[4]-$data_medoid_init_WBP_C5[4], 2) + pow($data_medoid_init_LWBP_C4[4]-$data_medoid_init_LWBP_C5[4], 2)+
                    pow($data_medoid_init_WBP_C4[5]-$data_medoid_init_WBP_C5[5], 2) + pow($data_medoid_init_LWBP_C4[5]-$data_medoid_init_LWBP_C5[5], 2)+
                    pow($data_medoid_init_WBP_C4[6]-$data_medoid_init_WBP_C5[6], 2) + pow($data_medoid_init_LWBP_C4[6]-$data_medoid_init_LWBP_C5[6], 2)+
                    pow($data_medoid_init_WBP_C4[7]-$data_medoid_init_WBP_C5[7], 2) + pow($data_medoid_init_LWBP_C4[7]-$data_medoid_init_LWBP_C5[7], 2)
                  );
                $M51 =
                  sqrt(
                    pow($data_medoid_init_WBP_C5[1]-$data_medoid_init_WBP_C1[1], 2) + pow($data_medoid_init_LWBP_C5[1]-$data_medoid_init_LWBP_C1[1], 2)+
                    pow($data_medoid_init_WBP_C5[2]-$data_medoid_init_WBP_C1[2], 2) + pow($data_medoid_init_LWBP_C5[2]-$data_medoid_init_LWBP_C1[2], 2)+
                    pow($data_medoid_init_WBP_C5[3]-$data_medoid_init_WBP_C1[3], 2) + pow($data_medoid_init_LWBP_C5[3]-$data_medoid_init_LWBP_C1[3], 2)+
                    pow($data_medoid_init_WBP_C5[4]-$data_medoid_init_WBP_C1[4], 2) + pow($data_medoid_init_LWBP_C5[4]-$data_medoid_init_LWBP_C1[4], 2)+
                    pow($data_medoid_init_WBP_C5[5]-$data_medoid_init_WBP_C1[5], 2) + pow($data_medoid_init_LWBP_C5[5]-$data_medoid_init_LWBP_C1[5], 2)+
                    pow($data_medoid_init_WBP_C5[6]-$data_medoid_init_WBP_C1[6], 2) + pow($data_medoid_init_LWBP_C5[6]-$data_medoid_init_LWBP_C1[6], 2)+
                    pow($data_medoid_init_WBP_C5[7]-$data_medoid_init_WBP_C1[7], 2) + pow($data_medoid_init_LWBP_C5[7]-$data_medoid_init_LWBP_C1[7], 2)
                  );
                $M52 =
                  sqrt(
                    pow($data_medoid_init_WBP_C5[1]-$data_medoid_init_WBP_C2[1], 2) + pow($data_medoid_init_LWBP_C5[1]-$data_medoid_init_LWBP_C2[1], 2)+
                    pow($data_medoid_init_WBP_C5[2]-$data_medoid_init_WBP_C2[2], 2) + pow($data_medoid_init_LWBP_C5[2]-$data_medoid_init_LWBP_C2[2], 2)+
                    pow($data_medoid_init_WBP_C5[3]-$data_medoid_init_WBP_C2[3], 2) + pow($data_medoid_init_LWBP_C5[3]-$data_medoid_init_LWBP_C2[3], 2)+
                    pow($data_medoid_init_WBP_C5[4]-$data_medoid_init_WBP_C2[4], 2) + pow($data_medoid_init_LWBP_C5[4]-$data_medoid_init_LWBP_C2[4], 2)+
                    pow($data_medoid_init_WBP_C5[5]-$data_medoid_init_WBP_C2[5], 2) + pow($data_medoid_init_LWBP_C5[5]-$data_medoid_init_LWBP_C2[5], 2)+
                    pow($data_medoid_init_WBP_C5[6]-$data_medoid_init_WBP_C2[6], 2) + pow($data_medoid_init_LWBP_C5[6]-$data_medoid_init_LWBP_C2[6], 2)+
                    pow($data_medoid_init_WBP_C5[7]-$data_medoid_init_WBP_C2[7], 2) + pow($data_medoid_init_LWBP_C5[7]-$data_medoid_init_LWBP_C2[7], 2)
                  );
                $M53 =
                  sqrt(
                    pow($data_medoid_init_WBP_C5[1]-$data_medoid_init_WBP_C3[1], 2) + pow($data_medoid_init_LWBP_C5[1]-$data_medoid_init_LWBP_C3[1], 2)+
                    pow($data_medoid_init_WBP_C5[2]-$data_medoid_init_WBP_C3[2], 2) + pow($data_medoid_init_LWBP_C5[2]-$data_medoid_init_LWBP_C3[2], 2)+
                    pow($data_medoid_init_WBP_C5[3]-$data_medoid_init_WBP_C3[3], 2) + pow($data_medoid_init_LWBP_C5[3]-$data_medoid_init_LWBP_C3[3], 2)+
                    pow($data_medoid_init_WBP_C5[4]-$data_medoid_init_WBP_C3[4], 2) + pow($data_medoid_init_LWBP_C5[4]-$data_medoid_init_LWBP_C3[4], 2)+
                    pow($data_medoid_init_WBP_C5[5]-$data_medoid_init_WBP_C3[5], 2) + pow($data_medoid_init_LWBP_C5[5]-$data_medoid_init_LWBP_C3[5], 2)+
                    pow($data_medoid_init_WBP_C5[6]-$data_medoid_init_WBP_C3[6], 2) + pow($data_medoid_init_LWBP_C5[6]-$data_medoid_init_LWBP_C3[6], 2)+
                    pow($data_medoid_init_WBP_C5[7]-$data_medoid_init_WBP_C3[7], 2) + pow($data_medoid_init_LWBP_C5[7]-$data_medoid_init_LWBP_C3[7], 2)
                  );
                $M54 =
                  sqrt(
                    pow($data_medoid_init_WBP_C5[1]-$data_medoid_init_WBP_C4[1], 2) + pow($data_medoid_init_LWBP_C5[1]-$data_medoid_init_LWBP_C4[1], 2)+
                    pow($data_medoid_init_WBP_C5[2]-$data_medoid_init_WBP_C4[2], 2) + pow($data_medoid_init_LWBP_C5[2]-$data_medoid_init_LWBP_C4[2], 2)+
                    pow($data_medoid_init_WBP_C5[3]-$data_medoid_init_WBP_C4[3], 2) + pow($data_medoid_init_LWBP_C5[3]-$data_medoid_init_LWBP_C4[3], 2)+
                    pow($data_medoid_init_WBP_C5[4]-$data_medoid_init_WBP_C4[4], 2) + pow($data_medoid_init_LWBP_C5[4]-$data_medoid_init_LWBP_C4[4], 2)+
                    pow($data_medoid_init_WBP_C5[5]-$data_medoid_init_WBP_C4[5], 2) + pow($data_medoid_init_LWBP_C5[5]-$data_medoid_init_LWBP_C4[5], 2)+
                    pow($data_medoid_init_WBP_C5[6]-$data_medoid_init_WBP_C4[6], 2) + pow($data_medoid_init_LWBP_C5[6]-$data_medoid_init_LWBP_C4[6], 2)+
                    pow($data_medoid_init_WBP_C5[7]-$data_medoid_init_WBP_C4[7], 2) + pow($data_medoid_init_LWBP_C5[7]-$data_medoid_init_LWBP_C4[7], 2)
                  );
              ?>
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>12</sub></th>
                  <th>M<sub>13</sub></th>
                  <th>M<sub>14</sub></th>
                  <th>M<sub>15</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($M12, 3) ?></td>
                  <td><?php echo number_format($M13, 3) ?></td>
                  <td><?php echo number_format($M14, 3) ?></td>
                  <td><?php echo number_format($M15, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>21</sub></th>
                  <th>M<sub>23</sub></th>
                  <th>M<sub>24</sub></th>
                  <th>M<sub>25</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($M21, 3) ?></td>
                  <td><?php echo number_format($M23, 3) ?></td>
                  <td><?php echo number_format($M24, 3) ?></td>
                  <td><?php echo number_format($M25, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>31</sub></th>
                  <th>M<sub>32</sub></th>
                  <th>M<sub>34</sub></th>
                  <th>M<sub>35</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($M31, 3) ?></td>
                  <td><?php echo number_format($M32, 3) ?></td>
                  <td><?php echo number_format($M34, 3) ?></td>
                  <td><?php echo number_format($M35, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>41</sub></th>
                  <th>M<sub>42</sub></th>
                  <th>M<sub>43</sub></th>
                  <th>M<sub>45</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($M41, 3) ?></td>
                  <td><?php echo number_format($M42, 3) ?></td>
                  <td><?php echo number_format($M43, 3) ?></td>
                  <td><?php echo number_format($M45, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>M<sub>51</sub></th>
                  <th>M<sub>52</sub></th>
                  <th>M<sub>53</sub></th>
                  <th>M<sub>54</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($M51, 3) ?></td>
                  <td><?php echo number_format($M52, 3) ?></td>
                  <td><?php echo number_format($M53, 3) ?></td>
                  <td><?php echo number_format($M54, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="table-responsive">
            <table class="table table-sm">
              <?php
                $R12 = ($S1 + $S2) / $M12; $R13 = ($S1 + $S3) / $M13; $R14 = ($S1 + $S4) / $M14; $R15 = ($S1 + $S5) / $M15;
                $R21 = ($S2 + $S1) / $M21; $R23 = ($S2 + $S3) / $M23; $R24 = ($S2 + $S4) / $M24; $R25 = ($S2 + $S5) / $M25;
                $R31 = ($S3 + $S1) / $M31; $R32 = ($S3 + $S2) / $M32; $R34 = ($S3 + $S4) / $M34; $R35 = ($S3 + $S5) / $M35;
                $R41 = ($S4 + $S1) / $M41; $R42 = ($S4 + $S2) / $M42; $R43 = ($S4 + $S3) / $M43; $R45 = ($S4 + $S5) / $M45;
                $R51 = ($S5 + $S1) / $M51; $R52 = ($S5 + $S2) / $M52; $R53 = ($S5 + $S3) / $M53; $R54 = ($S5 + $S4) / $M54;
              ?>
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>12</sub></th>
                  <th>R<sub>13</sub></th>
                  <th>R<sub>14</sub></th>
                  <th>R<sub>15</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($R12, 3) ?></td>
                  <td><?php echo number_format($R13, 3) ?></td>
                  <td><?php echo number_format($R14, 3) ?></td>
                  <td><?php echo number_format($R15, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>21</sub></th>
                  <th>R<sub>23</sub></th>
                  <th>R<sub>24</sub></th>
                  <th>R<sub>25</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($R21, 3) ?></td>
                  <td><?php echo number_format($R23, 3) ?></td>
                  <td><?php echo number_format($R24, 3) ?></td>
                  <td><?php echo number_format($R25, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>31</sub></th>
                  <th>R<sub>32</sub></th>
                  <th>R<sub>34</sub></th>
                  <th>R<sub>35</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($R31, 3) ?></td>
                  <td><?php echo number_format($R32, 3) ?></td>
                  <td><?php echo number_format($R34, 3) ?></td>
                  <td><?php echo number_format($R35, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>41</sub></th>
                  <th>R<sub>42</sub></th>
                  <th>R<sub>43</sub></th>
                  <th>R<sub>45</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($R41, 3) ?></td>
                  <td><?php echo number_format($R42, 3) ?></td>
                  <td><?php echo number_format($R43, 3) ?></td>
                  <td><?php echo number_format($R45, 3) ?></td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>R<sub>51</sub></th>
                  <th>R<sub>52</sub></th>
                  <th>R<sub>53</sub></th>
                  <th>R<sub>54</sub></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo number_format($R51, 3) ?></td>
                  <td><?php echo number_format($R52, 3) ?></td>
                  <td><?php echo number_format($R53, 3) ?></td>
                  <td><?php echo number_format($R54, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>D<sub>1</sub></th>
                  <th>D<sub>2</sub></th>
                  <th>D<sub>3</sub></th>
                  <th>D<sub>4</sub></th>
                  <th>D<sub>5</sub></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $D1 = max($R12,$R13,$R14,$R15);
                  $D2 = max($R21,$R23,$R24,$R25);
                  $D3 = max($R31,$R32,$R34,$R35);
                  $D4 = max($R41,$R42,$R43,$R45);
                  $D5 = max($R51,$R52,$R53,$R54);
                ?>
                <tr>
                  <td><?php echo number_format($D1, 3) ?></td>
                  <td><?php echo number_format($D2, 3) ?></td>
                  <td><?php echo number_format($D3, 3) ?></td>
                  <td><?php echo number_format($D4, 3) ?></td>
                  <td><?php echo number_format($D5, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>DB</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $DB = ($D1 + $D2 + $D3 + $D4 + $D5) / 5;
                  $_SESSION['DBM_C5'] = $DB;
                  $query = $db->query("UPDATE tb_centroid SET
                          Daya_WBP_1=$data_medoid_init_WBP_C1[1], Daya_LWBP_1=$data_medoid_init_LWBP_C1[1],
                          Daya_WBP_2=$data_medoid_init_WBP_C1[2], Daya_LWBP_2=$data_medoid_init_LWBP_C1[2],
                          Daya_WBP_3=$data_medoid_init_WBP_C1[3], Daya_LWBP_3=$data_medoid_init_LWBP_C1[3],
                          Daya_WBP_4=$data_medoid_init_WBP_C1[4], Daya_LWBP_4=$data_medoid_init_LWBP_C1[4],
                          Daya_WBP_5=$data_medoid_init_WBP_C1[5], Daya_LWBP_5=$data_medoid_init_LWBP_C1[5],
                          Daya_WBP_6=$data_medoid_init_WBP_C1[6], Daya_LWBP_6=$data_medoid_init_LWBP_C1[6],
                          Daya_WBP_7=$data_medoid_init_WBP_C1[7], Daya_LWBP_7=$data_medoid_init_LWBP_C1[7], username='' WHERE cluster='5' AND C='C1'");
                  $query = $db->query("UPDATE tb_centroid SET
                          Daya_WBP_1=$data_medoid_init_WBP_C2[1], Daya_LWBP_1=$data_medoid_init_LWBP_C2[1],
                          Daya_WBP_2=$data_medoid_init_WBP_C2[2], Daya_LWBP_2=$data_medoid_init_LWBP_C2[2],
                          Daya_WBP_3=$data_medoid_init_WBP_C2[3], Daya_LWBP_3=$data_medoid_init_LWBP_C2[3],
                          Daya_WBP_4=$data_medoid_init_WBP_C2[4], Daya_LWBP_4=$data_medoid_init_LWBP_C2[4],
                          Daya_WBP_5=$data_medoid_init_WBP_C2[5], Daya_LWBP_5=$data_medoid_init_LWBP_C2[5],
                          Daya_WBP_6=$data_medoid_init_WBP_C2[6], Daya_LWBP_6=$data_medoid_init_LWBP_C2[6],
                          Daya_WBP_7=$data_medoid_init_WBP_C2[7], Daya_LWBP_7=$data_medoid_init_LWBP_C2[7], username='' WHERE cluster='5' AND C='C2'");
                  $query = $db->query("UPDATE tb_centroid SET
                          Daya_WBP_1=$data_medoid_init_WBP_C3[1], Daya_LWBP_1=$data_medoid_init_LWBP_C3[1],
                          Daya_WBP_2=$data_medoid_init_WBP_C3[2], Daya_LWBP_2=$data_medoid_init_LWBP_C3[2],
                          Daya_WBP_3=$data_medoid_init_WBP_C3[3], Daya_LWBP_3=$data_medoid_init_LWBP_C3[3],
                          Daya_WBP_4=$data_medoid_init_WBP_C3[4], Daya_LWBP_4=$data_medoid_init_LWBP_C3[4],
                          Daya_WBP_5=$data_medoid_init_WBP_C3[5], Daya_LWBP_5=$data_medoid_init_LWBP_C3[5],
                          Daya_WBP_6=$data_medoid_init_WBP_C3[6], Daya_LWBP_6=$data_medoid_init_LWBP_C3[6],
                          Daya_WBP_7=$data_medoid_init_WBP_C3[7], Daya_LWBP_7=$data_medoid_init_LWBP_C3[7], username='' WHERE cluster='5' AND C='C3'");
                  $query = $db->query("UPDATE tb_centroid SET
                          Daya_WBP_1=$data_medoid_init_WBP_C4[1], Daya_LWBP_1=$data_medoid_init_LWBP_C4[1],
                          Daya_WBP_2=$data_medoid_init_WBP_C4[2], Daya_LWBP_2=$data_medoid_init_LWBP_C4[2],
                          Daya_WBP_3=$data_medoid_init_WBP_C4[3], Daya_LWBP_3=$data_medoid_init_LWBP_C4[3],
                          Daya_WBP_4=$data_medoid_init_WBP_C4[4], Daya_LWBP_4=$data_medoid_init_LWBP_C4[4],
                          Daya_WBP_5=$data_medoid_init_WBP_C4[5], Daya_LWBP_5=$data_medoid_init_LWBP_C4[5],
                          Daya_WBP_6=$data_medoid_init_WBP_C4[6], Daya_LWBP_6=$data_medoid_init_LWBP_C4[6],
                          Daya_WBP_7=$data_medoid_init_WBP_C4[7], Daya_LWBP_7=$data_medoid_init_LWBP_C4[7], username='' WHERE cluster='5' AND C='C4'");
                  $query = $db->query("UPDATE tb_centroid SET
                          Daya_WBP_1=$data_medoid_init_WBP_C5[1], Daya_LWBP_1=$data_medoid_init_LWBP_C5[1],
                          Daya_WBP_2=$data_medoid_init_WBP_C5[2], Daya_LWBP_2=$data_medoid_init_LWBP_C5[2],
                          Daya_WBP_3=$data_medoid_init_WBP_C5[3], Daya_LWBP_3=$data_medoid_init_LWBP_C5[3],
                          Daya_WBP_4=$data_medoid_init_WBP_C5[4], Daya_LWBP_4=$data_medoid_init_LWBP_C5[4],
                          Daya_WBP_5=$data_medoid_init_WBP_C5[5], Daya_LWBP_5=$data_medoid_init_LWBP_C5[5],
                          Daya_WBP_6=$data_medoid_init_WBP_C5[6], Daya_LWBP_6=$data_medoid_init_LWBP_C5[6],
                          Daya_WBP_7=$data_medoid_init_WBP_C5[7], Daya_LWBP_7=$data_medoid_init_LWBP_C5[7], username='' WHERE cluster='5' AND C='C5'");
                ?>
                <tr>
                  <td><?php echo number_format($DB, 3) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../../bootstrap/dist/js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
  </script>
</html>
