<?php

include ('conn.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
      $sku = $_POST['sku'];
      $nama_barang = $_POST['nama_barang'];
      $kategori = $_POST['kategori'];
      $jumlah_barang = $_POST['jumlah_barang'];
      $harga_barang = $_POST['harga_barang'];
      
      $query = "UPDATE barang SET nama_barang='$nama_barang', kategori='$kategori', jumlah_barang='$jumlah_barang', 
      harga_barang='$harga_barang' WHERE sku='$sku'";

      $result = mysqli_query(connection(),$query);

      header("Location: http://localhost/tugasuts/barang.php");
  }

  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {
      $sku = $_GET['sku'];
      $query_get = "SELECT * FROM barang WHERE sku = '$sku'";
      $result_get = mysqli_query(connection(),$query_get);
  }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Barokah Minimarket</title>
</head>
<body>
    <div class="all">
        <div class="judul">
            <h1>Pendataan Barokah Minimarket</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="barang.php">Barang</a></li>
                <li><a href="cari.php">Cari</a></li>
                <li><a href="menufilter.php">Filter</a></li>
            </ul>
        </div>
        <div class="badan">
            <div id="beranda">
            <div class="profile">
                <div class="foto">
                    <img src="gambar/account.png" alt="" width="100" height="100">
                    <h3>Pak Adi</h3>
                </div>
                <div class="sambutan">
                    <h3>Minimarket Barokah <br> Informasi Lainnya</h3>
                    <table>
                       <tr>
                          <th>Nama</th>
                          <td>Minimarket Barokah</td>
                       </tr>
                       <tr>
                          <th>Pemilik</th>
                          <td>Pak Adi</td>
                       </tr>
                       <tr>
                          <th>Alamat</th>
                          <td>Surabaya</td>
                       </tr>
                       <tr>
                          <th>Pekerjaan</th>
                          <td>Pengusaha</td>
                       </tr>
                        <tr>
                          <th>Telepon</th>
                          <td>+62 8981 1123 8761</td>
                       </tr>
                   </table>
                </div>
            </div>
            </div>
            
            <div class="updatebarang">
            <h1>Update Data Barang Baru</h1>
            <form action="update.php" method="POST">
                <?php while ($data = mysqli_fetch_array($result_get)) : ?>
                    <label>NAMA BARANG</label>
                    <input type="text" name="nama_barang" class="form" value="<?php echo $data['nama_barang'] ?>">
                    <label>Kategori</label>
                    <select class="form" name="kategori_barang">
                        <option> Pilihan </option>
                        <option value="Makanan" <?php echo $data['kategori']=='Makanan' ? 'selected="selected"' : ''?>> Makanan </option>
                        <option value="Minuman" <?php echo $data['kategori']=='Minuman' ? 'selected="selected"' : ''?>> Minuman </option>
                        <option value="ATK" <?php echo $data['kategori']=='ATK' ? 'selected="selected"' : ''?>> Alat Tulis </option>
                    </select>
                    <label>JUMLAH BARANG</label>
                    <input type="text" name="jumlah_barang" class="form" value="<?php echo $data['jumlah_barang'] ?>">
                    <label>HARGA BARANG</label>
                    <input type="text" name="harga_barang" class="form" value="<?php echo $data['harga_barang'] ?>">
                    <input type="submit" name="submit" class="tombol_input" value="Update">
                <?php endwhile; ?>
            </form>
            </div>
        </div>
    </div>
</body>
</html>