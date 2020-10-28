<?php
    include ('conn.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email']; 
        $lokasi = $_POST['lokasi'];
        $tentang_saya = $_POST['tentang_saya'];
        $tahun_pendidikan = $_POST['tahun_pendidikan'];
        $nama_pendidikan = $_POST['nama_pendidikan'];
        $keterampilan1 = $_POST['keterampilan1'];
        $keterampilan2 = $_POST['keterampilan2'];
        $keterampilan3 = $_POST['keterampilan3'];

        $sql = "INSERT INTO nama (nama_depan,nama_belakang) 
                VALUES('$nama_depan','$nama_belakang')";
        $res = mysqli_query(connection(),$sql);
        $sql = "INSERT INTO kontak_saya (telepon,email,lokasi) 
                VALUES('$telepon','$email','$lokasi')";
        $res = mysqli_query(connection(),$sql);
        $sql = "INSERT INTO tentang_saya (tentang_saya) 
                VALUES('$tentang_saya')";
        $res = mysqli_query(connection(),$sql);
        $sql = "INSERT INTO riwayat_pendidikan (tahun_pendidikan,nama_pendidikan) 
                VALUES('$tahun_pendidikan','$nama_pendidikan')";
        $res = mysqli_query(connection(),$sql);
        $sql = "INSERT INTO keterampilan (keterampilan1,keterampilan2,keterampilan3) 
                VALUES('$keterampilan1','$keterampilan2','$keterampilan3')";
        $res = mysqli_query(connection(),$sql);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Create</title>
</head>
<body>
    <h1>ISI DATA CV</h1>
    <form action="form.php" method="POST">
        <table>
            <tr>
                <td>Nana Depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Lokasi/alamat</td>
                <td>:</td>
                <td><input type="text" name="lokasi"></td>
            </tr>
            <tr>
                <td>Tentang saya</td>
                <td>:</td>
                <td><input type="text" name="tentang_saya"></td>
            </tr>
            <tr>
                <td>Rentang Pendidikan</td>
                <td>:</td>
                <td><input type="text" name="lokasi"> Contoh : 1999-2000 </td>
            </tr>
            <tr>
                <td>Jenjang Pendidikan</td>
                <td>:</td>
                <td><input type="text" name="nama_pendidikan"></td>
            </tr>
            <tr>
                <td>Keterampilan 1</td>
                <td>:</td>
                <td><input type="text" name="keterampilan1"></td>
            </tr>
            <tr>
                <td>Keterampilan 2</td>
                <td>:</td>
                <td><input type="text" name="keterampilan2"></td>
            </tr>
            <tr>
                <td>Keterampilan 3</td>
                <td>:</td>
                <td><input type="text" name="keterampilan3"></td>
            </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>