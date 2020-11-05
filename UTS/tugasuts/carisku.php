<?php 
    include 'conn.php';
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
            
            <div class="databarang">

            <form action="carisku.php" method="GET">
                <label>Cari :</label>
                <input type="text" name="cari" placeholder="Cari SKU">
                <input type="submit" value="Cari">
            </form>
            <h1>Daftar Barang</h1>
            <table border="3">
                <thead>
                    <tr>
                        <td><h2>SKU</h2></td>
                        <td><h2>Nama Barang</h2></td>
                        <td><h2>Kategori</h2></td>
                        <td><h2>Jumlah Stok</h2></td>
                        <td><h2>Harga</h2></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $query = "SELECT * from barang where sku like '%".$cari."%'";

                    //eksekusi query
                    $data = mysqli_query(connection(),$query);			
                }else{
                    $query = "SELECT * from barang";
                    $data = mysqli_query(connection(),$query);		
                }
                $no = 1;
                ?>
                <?php while($d = mysqli_fetch_array($data)): ?>
                <tr>
                    <td><h2><?php echo $d['sku']; ?></h2></td>
                    <td><h2><?php echo $d['nama_barang']; ?></h2></td>
                    <td><h2><?php echo $d['kategori']; ?></h2></td>
                    <td><h2><?php echo $d['jumlah_barang']; ?></h2></td>
                    <td><h2><?php echo $d['harga_barang']; ?></h2></td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            </form>
            </div>
    </div>
</body>
</html>