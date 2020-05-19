<?php
  include '../conn.php';

  //update database DC1C1 = 0, dan DC1C2 = 0, C_before dan C_after = null, hasil = 0
  $query_update_init = $db->query("UPDATE tb_training SET C2DC1='0', C2DC2='0', C_before='', C_after='', hasil='0'");
  //inisialisasi nilai awal dari simpangan = 0
  $S = 0;
  //1. inisialisasi pusat cluster k=2
  //inisialisasi data acak menggunakan do while
  do {
    $K_C1 = rand(1,103);
    $K_C2 = rand(1,103);
  } while ($K_C1 == $K_C2);
  //Tampilkan data LWBP dan WBP pelanggan berdasarkan angka acak yang sudah didapatkan.
  //ambil data menggunakan query ke database
  $query_medoid_init_C1 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$K_C1."'");
  $data_medoid_init_C1 = $query_medoid_init_C1->fetch();
  echo $data_medoid_init_C1[0]." | ";
  for ($i=1; $i < 15; $i++) {
    echo $data_medoid_init_C1[$i]." ";
  }
  echo "<br>";
  $query_medoid_init_C2 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$K_C2."'");
  $data_medoid_init_C2 = $query_medoid_init_C2->fetch();
  echo $data_medoid_init_C2[0]." | ";
  for ($i=1; $i < 15; $i++) {
    echo $data_medoid_init_C2[$i]." ";
  }
  echo "<br>";
  echo "<hr>";
  //selesai menampilkan data Pelanggan
  //mencari jarak data ke pusat cluster menggunakan euclidean distance
  //inisialisasi cost Awal
  $cost_init_DC1C1 = 0;
  $cost_init_DC1C2 = 0;
  //mengambil data pelanggan dalam database
  $query_data = $db->query("SELECT * FROM tb_training");
  while ($fetch_data = $query_data->fetch()) {
    echo $fetch_data[0]." ";
    for ($i=1; $i < 15; $i++) {
      echo $fetch_data[$i]." ";
    }
    //menghitung jarak ke pusat cluster
    $DC1C1 =
      sqrt(
        pow($fetch_data[1]-$data_medoid_init_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_C1[2], 2)+
        pow($fetch_data[3]-$data_medoid_init_C1[3], 2) + pow($fetch_data[4]-$data_medoid_init_C1[4], 2)+
        pow($fetch_data[5]-$data_medoid_init_C1[5], 2) + pow($fetch_data[6]-$data_medoid_init_C1[6], 2)+
        pow($fetch_data[7]-$data_medoid_init_C1[7], 2) + pow($fetch_data[8]-$data_medoid_init_C1[8], 2)+
        pow($fetch_data[9]-$data_medoid_init_C1[9], 2) + pow($fetch_data[10]-$data_medoid_init_C1[10], 2)+
        pow($fetch_data[11]-$data_medoid_init_C1[11], 2) + pow($fetch_data[12]-$data_medoid_init_C1[12], 2)+
        pow($fetch_data[13]-$data_medoid_init_C1[13], 2) + pow($fetch_data[14]-$data_medoid_init_C1[14], 2)
        );
    $DC1C2 =
      sqrt(
        pow($fetch_data[1]-$data_medoid_init_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_C2[2], 2)+
        pow($fetch_data[3]-$data_medoid_init_C2[3], 2) + pow($fetch_data[4]-$data_medoid_init_C2[4], 2)+
        pow($fetch_data[5]-$data_medoid_init_C2[5], 2) + pow($fetch_data[6]-$data_medoid_init_C2[6], 2)+
        pow($fetch_data[7]-$data_medoid_init_C2[7], 2) + pow($fetch_data[8]-$data_medoid_init_C2[8], 2)+
        pow($fetch_data[9]-$data_medoid_init_C2[9], 2) + pow($fetch_data[10]-$data_medoid_init_C2[10], 2)+
        pow($fetch_data[11]-$data_medoid_init_C2[11], 2) + pow($fetch_data[12]-$data_medoid_init_C2[12], 2)+
        pow($fetch_data[13]-$data_medoid_init_C2[13], 2) + pow($fetch_data[14]-$data_medoid_init_C2[14], 2)
        );
    echo $DC1C1." | ".$DC1C2;
    if ($DC1C1 < $DC1C2) {
      $C = 'C1';
    } else {
      $C = 'C2';
    }
    $query_update_C_before = $db->query("UPDATE tb_training SET C2DC1='$DC1C1', C2DC2='$DC1C2', C_before='$C' WHERE pelanggan='$fetch_data[0]'");
    //jarak ke pusat cluster sudah di temukan
    //mencari jumlah jarak ke pusat cluster C1, dan C2
    $cost_init_DC1C1 += $DC1C1;
    $cost_init_DC1C2 += $DC1C2;
    echo "<br>";
  }
  echo "<hr>";
  echo $cost_init_DC1C1." | ".$cost_init_DC1C2."<br>";
  echo $cost_init_total = $cost_init_DC1C1 + $cost_init_DC1C2;
  echo "<hr>";
  //Mulai iterasi medoids
  //cari angka acak baru untuk medoid baru
  for($i = 0;$i < 100; $i++) {
    do {
      $Kn_C1 = rand(1,103);
      $Kn_C2 = rand(1,103);
    } while ($Kn_C1 == $Kn_C2 && $Kn_C1 == $K_C1 && $Kn_C2 == $K_C2);
    $query_medoid_init_C1 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$Kn_C1."'");
    $data_medoid_init_C1 = $query_medoid_init_C1->fetch();
    echo $data_medoid_init_C1[0]." | ";
    for ($i=1; $i < 15; $i++) {
      echo $data_medoid_init_C1[$i]." ";
    }
    echo "<br>";
    $query_medoid_init_C2 = $db->query("SELECT * FROM tb_training WHERE pelanggan = '".$Kn_C2."'");
    $data_medoid_init_C2 = $query_medoid_init_C2->fetch();
    echo $data_medoid_init_C2[0]." | ";
    for ($i=1; $i < 15; $i++) {
      echo $data_medoid_init_C2[$i]." ";
    }
    //selesai menampilkan data Pelanggan
    //mencari jarak data ke pusat cluster menggunakan euclidean distance
    //inisialisasi cost Awal
    $cost_init_DC1C1 = 0;
    $cost_init_DC1C2 = 0;
    //mengambil data pelanggan dalam database
    $query_data = $db->query("SELECT * FROM tb_training");
    while ($fetch_data = $query_data->fetch()) {
      $fetch_data[0]." ";
      for ($i=1; $i < 15; $i++) {
        $fetch_data[$i]." ";
      }
      //menghitung jarak ke pusat cluster
      $DC1C1 =
        sqrt(
          pow($fetch_data[1]-$data_medoid_init_C1[1], 2) + pow($fetch_data[2]-$data_medoid_init_C1[2], 2)+
          pow($fetch_data[3]-$data_medoid_init_C1[3], 2) + pow($fetch_data[4]-$data_medoid_init_C1[4], 2)+
          pow($fetch_data[5]-$data_medoid_init_C1[5], 2) + pow($fetch_data[6]-$data_medoid_init_C1[6], 2)+
          pow($fetch_data[7]-$data_medoid_init_C1[7], 2) + pow($fetch_data[8]-$data_medoid_init_C1[8], 2)+
          pow($fetch_data[9]-$data_medoid_init_C1[9], 2) + pow($fetch_data[10]-$data_medoid_init_C1[10], 2)+
          pow($fetch_data[11]-$data_medoid_init_C1[11], 2) + pow($fetch_data[12]-$data_medoid_init_C1[12], 2)+
          pow($fetch_data[13]-$data_medoid_init_C1[13], 2) + pow($fetch_data[14]-$data_medoid_init_C1[14], 2)
          );
      $DC1C2 =
        sqrt(
          pow($fetch_data[1]-$data_medoid_init_C2[1], 2) + pow($fetch_data[2]-$data_medoid_init_C2[2], 2)+
          pow($fetch_data[3]-$data_medoid_init_C2[3], 2) + pow($fetch_data[4]-$data_medoid_init_C2[4], 2)+
          pow($fetch_data[5]-$data_medoid_init_C2[5], 2) + pow($fetch_data[6]-$data_medoid_init_C2[6], 2)+
          pow($fetch_data[7]-$data_medoid_init_C2[7], 2) + pow($fetch_data[8]-$data_medoid_init_C2[8], 2)+
          pow($fetch_data[9]-$data_medoid_init_C2[9], 2) + pow($fetch_data[10]-$data_medoid_init_C2[10], 2)+
          pow($fetch_data[11]-$data_medoid_init_C2[11], 2) + pow($fetch_data[12]-$data_medoid_init_C2[12], 2)+
          pow($fetch_data[13]-$data_medoid_init_C2[13], 2) + pow($fetch_data[14]-$data_medoid_init_C2[14], 2)
          );
      //jarak ke pusat cluster sudah di temukan
      //menampilkan jumlah jarak ke pusat cluster C1, dan C2
      $cost_init_DC1C1 += $DC1C1;
      $cost_init_DC1C2 += $DC1C2;
      if ($DC1C1 < $DC1C2) {
        $C = 'C1';
      } else {
        $C = 'C2';
      }
      $query_update_C_before = $db->query("UPDATE tb_training SET C2DC1='$DC1C1', C2DC2='$DC1C2', C_after='$C' WHERE pelanggan='$fetch_data[0]'");
    }
    $query = $db->query("UPDATE tb_training SET hasil='1' WHERE C_before=C_after");
    $query = $db->query("UPDATE tb_training SET C_before=C_after");

    $cek_exit=0;
    $qry=$db->query("SELECT * FROM tb_training WHERE hasil='0'");

    while($res=$qry->fetch()){
      $cek_exit++;
    }

    echo "<hr>";
    echo $cost_init_DC1C1." | ".$cost_init_DC1C2."<br>";
    echo $cost_new_total = $cost_init_DC1C1 + $cost_init_DC1C2;
    echo "<hr>";
    $S = $cost_init_total - $cost_new_total;
    $cost_init_total = $cost_new_total;
    echo "!".$S."<br>";
    if($cek_exit==0 && $S > 0){
      break;
    }
  }
  echo "<br><br>Perhitungan DBI<br>";
  $query_DBI_C1 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C1'");
  $S1 = 0;
  $total_data_DBI_C1 = $query_DBI_C1->rowCount();

  while ($data_DBI_C1 = $query_DBI_C1->fetch()) {
    $S1 +=
      pow(($data_DBI_C1[1]-$data_medoid_init_C1[1]), 2) + pow(($data_DBI_C1[2]-$data_medoid_init_C1[2]), 2) +
      pow(($data_DBI_C1[3]-$data_medoid_init_C1[3]), 2) + pow(($data_DBI_C1[4]-$data_medoid_init_C1[4]), 2) +
      pow(($data_DBI_C1[5]-$data_medoid_init_C1[5]), 2) + pow(($data_DBI_C1[6]-$data_medoid_init_C1[6]), 2) +
      pow(($data_DBI_C1[7]-$data_medoid_init_C1[7]), 2) + pow(($data_DBI_C1[8]-$data_medoid_init_C1[8]), 2) +
      pow(($data_DBI_C1[9]-$data_medoid_init_C1[9]), 2) + pow(($data_DBI_C1[10]-$data_medoid_init_C1[10]), 2) +
      pow(($data_DBI_C1[11]-$data_medoid_init_C1[11]), 2) + pow(($data_DBI_C1[12]-$data_medoid_init_C1[12]), 2) +
      pow(($data_DBI_C1[13]-$data_medoid_init_C1[13]), 2) + pow(($data_DBI_C1[14]-$data_medoid_init_C1[14]), 2);
  }
  $S1 = sqrt($S1 / $total_data_DBI_C1);
  echo $S1." | ".$total_data_DBI_C1."<br>";

  $query_DBI_C2 = $db->query("SELECT * FROM tb_training WHERE C_after = 'C2'");
  $S2 = 0;
  $total_data_DBI_C2 = $query_DBI_C2->rowCount();

  while ($data_DBI_C2 = $query_DBI_C2->fetch()) {
    $S2 +=
      pow(($data_DBI_C2[1]-$data_medoid_init_C2[1]), 2) + pow(($data_DBI_C2[2]-$data_medoid_init_C2[2]), 2) +
      pow(($data_DBI_C2[3]-$data_medoid_init_C2[3]), 2) + pow(($data_DBI_C2[4]-$data_medoid_init_C2[4]), 2) +
      pow(($data_DBI_C2[5]-$data_medoid_init_C2[5]), 2) + pow(($data_DBI_C2[6]-$data_medoid_init_C2[6]), 2) +
      pow(($data_DBI_C2[7]-$data_medoid_init_C2[7]), 2) + pow(($data_DBI_C2[8]-$data_medoid_init_C2[8]), 2) +
      pow(($data_DBI_C2[9]-$data_medoid_init_C2[9]), 2) + pow(($data_DBI_C2[10]-$data_medoid_init_C2[10]), 2) +
      pow(($data_DBI_C2[11]-$data_medoid_init_C2[11]), 2) + pow(($data_DBI_C2[12]-$data_medoid_init_C2[12]), 2) +
      pow(($data_DBI_C2[13]-$data_medoid_init_C2[13]), 2) + pow(($data_DBI_C2[14]-$data_medoid_init_C2[14]), 2);
  }
  $S2 = sqrt($S2 / $total_data_DBI_C2);
  echo $S2." | ".$total_data_DBI_C2;
?>
