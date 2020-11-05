<?php
    include ('conn.php');
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
            
            <div class="datautama">
            <?php if(isset($_GET['status'])): ?>
            <h2>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Barang Berhasil di Hapus!";
                    } else {
                        echo "Barang Gagal di Hapus!";
                    }
                ?>
            </h2>
            <?php endif; ?>

            <form>
                <center>
                    <a class="link" href="tambah_barang.php"><h2>Tambah Lagi</h2></a>
                    <a class="link" href="barang.php"><h2>Lihat Data Barang</h2></a>
                </center>
            </form>
            </div>
        </div>
        <div></div>
    </div>
</body>
</html>