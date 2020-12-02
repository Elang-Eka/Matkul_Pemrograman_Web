<?php 
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          //query SQL
          $id=$_GET['id'];
          $query = "DELETE from riwayat_pendidikan where id_riwayat =$id"; 

          //eksekusi query
          $req = mysqli_query(connection(),$query);

  }
  ?>