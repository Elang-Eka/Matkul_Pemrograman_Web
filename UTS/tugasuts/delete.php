<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['sku'])) {
            //query SQL
            $sku_upd = $_GET['sku'];
            $query = "DELETE FROM barang WHERE sku = '$sku_upd'"; 

            //eksekusi query
            $result = mysqli_query(connection(),$query);

            if ($result) {
                $status = 'ok';
            }
            else{
                $status = 'error';
            }
            
            if( $result ) {
                // kalau berhasil alihkan ke halaman tanda terima dengan status=sukses
                header('Location: deletebarang.php?status=sukses');
            } else {
                // kalau gagal alihkan ke halaman tanda terima dengan status=gagal
                header('Location: deletebarang.php?status=gagal');
            }
        }
    }