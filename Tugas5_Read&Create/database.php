<?php 
  include ('conn.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <h2>Nama</h2>
    <table border="6">
        <thead>
            <tr>
                <td>Nama Depan</td>    
                <td>Nama Belakang</td>
            </tr>
        </thead>

        <tbody>
        <?php 
            $sql = "SELECT * FROM nama";
            $res = mysqli_query(connection(),$sql);
        ?>
        
        <?php while($data = mysqli_fetch_array($res)): ?>
            <tr>
                <td><?php echo $data["nama_depan"] ?></td>
                <td><?php echo $data["nama_belakang"] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Tentang Saya</h2>
    <table border="6">
        <thead>
            <tr>
                <td>Tentang Saya</td>
            </tr>
        </thead>

        <tbody>
        <?php 
            $sql = "SELECT * FROM tentang_saya";
            $res = mysqli_query(connection(),$sql);
        ?>
        
        <?php while($data = mysqli_fetch_array($res)): ?>
            <tr>
                <td><?php echo $data["tentang_saya"] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    
    <h2>Kontak Saya</h2>
    <table border="6">
        <thead>
            <tr>
                <td>Telepon</td>    
                <td>Email</td>
                <td>Lokasi</td>
            </tr>
        </thead>

        <tbody>
        <?php 
            $sql = "SELECT * FROM kontak_saya";
            $res = mysqli_query(connection(),$sql);
        ?>
        
        <?php while($data = mysqli_fetch_array($res)): ?>
            <tr>
                <td><?php echo $data["telepon"] ?></td>
                <td><?php echo $data["email"] ?></td>
                <td><?php echo $data["lokasi"] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Riwayat Pendidikan</h2>
    <table border="6">
        <thead>
            <tr>
                <td>Tahun Pendidikan</td>    
                <td>Jenjang Pendidikan</td>
            </tr>
        </thead>

        <tbody>
        <?php 
            $sql = "SELECT * FROM riwayat_pendidikan";
            $res = mysqli_query(connection(),$sql);
        ?>
        
        <?php while($data = mysqli_fetch_array($res)): ?>
            <tr>
                <td><?php echo $data["tahun_pendidikan"] ?></td>
                <td><?php echo $data["nama_pendidikan"] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Keterampilan</h2>
    <table border="6">
        <thead>
            <tr>
                <td>keterampilan 1</td>    
                <td>keterampilan 2</td>
                <td>keterampilan 3</td>
            </tr>
        </thead>

        <tbody>
        <?php 
            $sql = "SELECT * FROM keterampilan";
            $res = mysqli_query(connection(),$sql);
        ?>
        
        <?php while($data = mysqli_fetch_array($res)): ?>
            <tr>
                <td><?php echo $data["keterampilan1"] ?></td>
                <td><?php echo $data["keterampilan2"] ?></td>
                <td><?php echo $data["keterampilan3"] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>