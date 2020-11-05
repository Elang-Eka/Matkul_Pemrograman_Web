<?php
    include ('conn.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama_barang = $_POST['nama_barang'];
        $kategori = $_POST['kategori'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $harga_barang = $_POST['harga_barang'];

        $sql = "INSERT INTO barang (nama_barang, kategori, jumlah_barang, harga_barang) 
                VALUES('$nama_barang','$kategori','$jumlah_barang','$harga_barang')";
        $res = mysqli_query(connection(),$sql);
    
    // apakah query simpan berhasil?
    if( $res ) {
        // kalau berhasil alihkan ke halaman tanda terima dengan status=sukses
        header('Location: tandaterima_barang.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman tanda terima dengan status=gagal
        header('Location: tandaterima_barang.php?status=gagal');
    }


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
            
            <div class="tambahbarang">
            <h1>Input Data Barang Baru</h1>
            <form action="tambah_barang.php" method="POST">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form" placeholder="Masukkan nama barang ...">
                <label>Kategori</label>
                <select class="form" name="kategori">
                    <option> Pilihan </option>
                    <option value="Makanan"> Makanan </option>
                    <option value="Minuman"> Minuman </option>
                    <option value="ATK"> Alat Tulis </option>
                </select>
                
                <label>Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form" placeholder="Masukkan Jumlah Barang ...">
                
                <label>Harga Barang</label>
		        <input type="text" name="harga_barang" class="form" placeholder="Masukkan Harga Barang ...">

                <input type="submit" class="tombol_input" value="Submit">
            </form>
            </div>
        </div>
    </div>
</body>
</html>