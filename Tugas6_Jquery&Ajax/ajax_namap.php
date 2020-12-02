<?php 
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['p'])) {
          //query SQL
          $nama_pendidikan = $_GET['nama_pendidikan'];
          $tahun_awal = $_GET['tahun_awal'];
          $tahun_akhir = $_GET['tahun_akhir'];
          $query = "INSERT INTO riwayat_pendidikan (nama_pendidikan, tahun_awal, tahun_akhir)
          VALUES ('$nama_pendidikan','$tahun_awal','$tahun_akhir')"; 

          //eksekusi query
          $req = mysqli_query(connection(),$query);

      }
  }