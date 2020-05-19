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
      <div class="row" style="padding-top: 80px;">

      </div>
      <?php
        $query = $db->query("UPDATE tb_training SET C2DC1='0', C2DC2='0', C_before='', C_after='', hasil='0'");
        $S = 0;
        for ($i=1; $i <= 103; $i++) {
      ?>
      <div class="row">
        <div class="col-md-2">
          <h5>Iterasi <?php echo $i ?></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
        <?php
          if ($i == 1) {
        ?>
          <h5>Medoid Awal</h5>
        <?php
          } else {
        ?>
          <h5>Medoid Baru</h5>
        <?php
          }
        ?>
        </div>
        <div class="col-md-4">
          <h5>WBP</h5>
        </div>
        <div class="col-md-4">
          <h5>LWBP</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
          <!-- Mulai || Cari angka acak C1, C2 untuk medoid awal -->
          <?php
            do {
              $K_C1 = rand(1,103);
              $K_C2 = rand(1,103);
            } while ($K_C1 == $K_C2);
          ?>
          <!-- Selesai || Cari angka acak C1, C2 untuk medoid awal -->
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th colspan="2">Angka Acak</th>
                </tr>
                <tr>
                  <th>C1</th>
                  <th>C2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- Tampilkan angka acak yang sudah di cari di atas -->
                  <td><?php echo $K_C1 ?></td>
                  <td><?php echo $K_C2 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">Cluster</th>
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
              <tbody>
                <!-- Menampilkan data WBP pelanggan sesuai angka acak diatas -->
                <?php
                  // query ke database C1
                  $query_C1 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C1."'");
                  // hitung berapa baris yang muncul di database
                  $totalData = $query_C1->rowCount();
                  // Mulai || menampilkan data dari database
                  while ($data_C1 = $query_C1->fetch()) {
                ?>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_C1[0]; ?></td>
                  <?php
                    // Mulai || looping untuk menampilakn kolom WBP hari ke-1 hingga ke-7
                    for ($j=1; $j < 8; $j++) {
                  ?>
                  <td><?php echo $data_C1[$j]; ?></td>
                  <?php
                    }
                    // Selesai || looping untuk menampilakn kolom WBP hari ke-1 hingga ke-7
                  ?>
                </tr>
                <?php
                  }
                  // Selesai || menampilkan data dari database
                  // query ke database C2
                  $query_C2 = $db->query("SELECT pelanggan, Daya_WBP_1, Daya_WBP_2, Daya_WBP_3, Daya_WBP_4, Daya_WBP_5, Daya_WBP_6, Daya_WBP_7 FROM tb_training WHERE pelanggan = '".$K_C2."'");
                  // hitung berapa baris yang muncul di database
                  $totalData = $query_C2->rowCount();
                  // Mulai || menampilkan data dari database
                  while ($data_C2 = $query_C2->fetch()) {
                ?>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_C2[0]; ?></td>
                  <?php
                    // Mulai || looping untuk menampilakn kolom WBP hari ke-1 hingga ke-7
                    for ($j=1; $j < 8; $j++) {
                  ?>
                  <td><?php echo $data_C2[$j]; ?></td>
                  <?php
                    }
                    // Selesai || looping untuk menampilakn kolom WBP hari ke-1 hingga ke-7
                    ?>
                </tr>
                <?php
                  }
                  // Selesai || menampilkan data dari database
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2">Cluster</th>
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
              <tbody>
                <!-- Menampilkan data LWBP pelanggan sesuai angka acak diatas -->
                <?php
                  // query ke database C1
                  $query_C1 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C1."'");
                  // hitung berapa baris yang muncul di database
                  $totalData = $query_C1->rowCount();
                  // Mulai || menampilkan data dari database
                  while ($data_C1 = $query_C1->fetch()) {
                ?>
                <tr>
                  <td>1</td>
                  <td><?php echo $data_C1[0]; ?></td>
                  <?php
                    // Mulai || looping untuk menampilakn kolom LWBP hari ke-1 hingga ke-7
                    for ($j=1; $j < 8; $j++) {
                  ?>
                  <td><?php echo $data_C1[$j]; ?></td>
                  <?php
                    }
                    // Selesai || looping untuk menampilakn kolom LWBP hari ke-1 hingga ke-7
                  ?>
                </tr>
                <?php
                  }
                  // Selesai || menampilkan data dari database
                  // query ke database C2
                  $query_C2 = $db->query("SELECT pelanggan, Daya_LWBP_1, Daya_LWBP_2, Daya_LWBP_3, Daya_LWBP_4, Daya_LWBP_5, Daya_LWBP_6, Daya_LWBP_7 FROM tb_training WHERE pelanggan = '".$K_C2."'");
                  // hitung berapa baris yang muncul di database
                  $totalData = $query_C2->rowCount();
                  // Mulai || menampilkan data dari database
                  while ($data_C2 = $query_C2->fetch()) {
                ?>
                <tr>
                  <td>2</td>
                  <td><?php echo $data_C2[0]; ?></td>
                  <?php
                    // Mulai || looping untuk menampilakn kolom LWBP hari ke-1 hingga ke-7
                    for ($j=1; $j < 8; $j++) {
                  ?>
                  <td><?php echo $data_C2[$j]; ?></td>
                  <?php
                    }
                    // Selesai || looping untuk menampilakn kolom LWBP hari ke-1 hingga ke-7
                    ?>
                </tr>
                <?php
                  }
                  // Selesai || menampilkan data dari database
                ?>
              </tbody>
            </table>
          </div>
        </div>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $query_Medoid_C1 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$K_C1."'");
                    $query_Medoid_C2 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$K_C2."'");
                    $query_DataTraining = $db->query("SELECT * FROM tb_training");

                    $medoid_Awal_C1 = $query_Medoid_C1->fetch();
                    $medoid_Awal_C2 = $query_Medoid_C2->fetch();
                    $cost_Awal_DC1C1 = 0;
                    $cost_Awal_DC1C2 = 0;

                    while ($dataTraining = $query_DataTraining->fetch()) {
                      $pelanggan = $dataTraining[0];
                      $DC1C1 =
                        sqrt(
                          pow($dataTraining[1]-$medoid_Awal_C1[1], 2)+
                          pow($dataTraining[2]-$medoid_Awal_C1[2], 2)+
                          pow($dataTraining[3]-$medoid_Awal_C1[3], 2)+
                          pow($dataTraining[4]-$medoid_Awal_C1[4], 2)+
                          pow($dataTraining[5]-$medoid_Awal_C1[5], 2)+
                          pow($dataTraining[6]-$medoid_Awal_C1[6], 2)+
                          pow($dataTraining[7]-$medoid_Awal_C1[7], 2)+
                          pow($dataTraining[8]-$medoid_Awal_C1[8], 2)+
                          pow($dataTraining[9]-$medoid_Awal_C1[9], 2)+
                          pow($dataTraining[10]-$medoid_Awal_C1[10], 2)+
                          pow($dataTraining[11]-$medoid_Awal_C1[11], 2)+
                          pow($dataTraining[12]-$medoid_Awal_C1[12], 2)+
                          pow($dataTraining[13]-$medoid_Awal_C1[13], 2)+
                          pow($dataTraining[14]-$medoid_Awal_C1[14], 2)
                          );

                      $DC1C2 =
                        sqrt(
                          pow($dataTraining[1]-$medoid_Awal_C2[1], 2)+
                          pow($dataTraining[2]-$medoid_Awal_C2[2], 2)+
                          pow($dataTraining[3]-$medoid_Awal_C2[3], 2)+
                          pow($dataTraining[4]-$medoid_Awal_C2[4], 2)+
                          pow($dataTraining[5]-$medoid_Awal_C2[5], 2)+
                          pow($dataTraining[6]-$medoid_Awal_C2[6], 2)+
                          pow($dataTraining[7]-$medoid_Awal_C2[7], 2)+
                          pow($dataTraining[8]-$medoid_Awal_C2[8], 2)+
                          pow($dataTraining[9]-$medoid_Awal_C2[9], 2)+
                          pow($dataTraining[10]-$medoid_Awal_C2[10], 2)+
                          pow($dataTraining[11]-$medoid_Awal_C2[11], 2)+
                          pow($dataTraining[12]-$medoid_Awal_C2[12], 2)+
                          pow($dataTraining[13]-$medoid_Awal_C2[13], 2)+
                          pow($dataTraining[14]-$medoid_Awal_C2[14], 2)
                          );

                          if ($DC1C1 < $DC1C2) {
                            $C = 'C1';
                          } else {
                            $C = 'C2';
                          }
                          $query = $db->query("UPDATE tb_training SET C2DC1='$DC1C1', C2DC2='$DC1C2', C_before='$C' WHERE pelanggan='$pelanggan'");
                          $cost_Awal_DC1C1 += $DC1C1;
                          $cost_Awal_DC1C2 += $DC1C2;
                    }
                  ?>
                  <td><?php echo $cost_Awal_DC1C1 ?></td>
                  <td><?php echo $cost_Awal_DC1C2 ?></td>
                </tr>
                <tr>
                  <th>Total Cost</th>
                  <th><?php echo $costTotal_Baru = $cost_Awal_DC1C1+$cost_Awal_DC1C2 ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <?php
            if ($i == 1) {
              $costTotal_Lama = 0;
            }
            $S = $costTotal_Lama - $costTotal_Baru;
          ?>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                  <?php
                    if ($S < 0) {
                  ?>
                  <th>S < 0</th>
                  <?php
                    } else {
                  ?>
                  <th>S >= 0</th>
                  <?php
                    }
                  ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $S ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
          <?php
            echo $C;
            if ($S < 0) {
              $costTotal_Lama = $costTotal_Baru;
            } else {
              break;
            }
          ?>
      <hr>
      <?php
        }
      ?>
      <div class="row">
        <div class="col-md-5">
          <h1 class="display-4">Iterasi selesai</h1>
        </div>
      </div>
    </div>

  </body>
</html>
