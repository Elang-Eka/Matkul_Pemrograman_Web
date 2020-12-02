<?php 
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          //query SQL
          $query = "SELECT * from riwayat_pendidikan"; 

          //eksekusi query
          $req = mysqli_query(connection(),$query);
        
          while($data = mysqli_fetch_array($req)): ?>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="header">
                        <div class="header-bg"></div>
                        <div class="service-header" onclick="Delete(<?php echo $data['id_riwayat'] ?>)">
                            <div class="icon">
                                <i class="fa fa-trash-o"></i>
                            </div>
                            <h4 class="service-title"><?php echo $data["nama_pendidikan"] ?></h4>
                        </div>
                    </div>
                    <div class="body"><?php echo $data["tahun_awal"]."-".$data["tahun_akhir"]?></div>
                </div>
            </div> <!-- /.col-md-4 -->
        <?php endwhile;
  }
  ?>