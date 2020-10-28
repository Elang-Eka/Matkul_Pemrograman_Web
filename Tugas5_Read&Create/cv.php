<?php
    $title = "Page Profile | Elang";
    $judul_atas = "CURRICULUM";
    $judul_bawah = "VITAE";
    $kontak = "KONTAK SAYA";
    $telp = "TELEPON";
    $email = "EMAIL";
    $lokasi = "LOKASI";
    $pagetentang = "TENTANG SAYA";
    $pageriwayat = "RIWAYAT SAYA";
    $pagetkontak = "KONTAK";
    $pagetket = "KETERAMPILAN";
    $tentangsaya = "TENTANG SAYA";
    $riwayatpendidikan = "RIWAYAT PENDIDIKAN";
    $keterampilan = "KETERAMPILAN";
    $fotoprofil = "./gambar/foto.png";
    $gambartelepon = './gambar/tel.png';
    $gambaremail = './gambar/email.png';
    $gambarlokasi = './gambar/lokasi.png';
    $gambarskill1 = './gambar/c.png';
    $gambarskill2 = './gambar/java.png';
    $gambarskill3 = './gambar/photoshop.png';

    include ('conn.php');
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title ?></title>
</head>

<body>

    <div class="tubuh">

        <div class="t_kiri">

            <div class="trapezoidkiri"></div>

            <div class="judul">
                <div class="j_atas">
                    <h1><?php echo $judul_atas?></h1>
                </div>
                <div class="j_bawah"> 
                    <h1><?php echo $judul_bawah ?></h1>
                </div>
            </div>

            <div class="p_kiri">
                <svg width="528px" height="100">
                    <rect class="borderts" width="528px" height="10"/>
                </svg>
            </div>
            
            <div id="contact" class="kontak">
                <h1><?php echo $kontak?></h1>
                <svg width="400" height="100">
                <rect class="borderkontak" width="50" height="5"/>
                </svg>
                <div class="isikontak">
                    <div class="telepon">
                        <img src=<?php echo $gambartelepon ?> alt="telepon">
                        <h1><?php echo $telp ?></h1>
                        <?php 
                        $sql = "SELECT * FROM kontak_saya";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($kontak1 = mysqli_fetch_array($res)): ?>
                            <h3><?php echo $kontak1["telepon"] ?></h3>
                        <?php endwhile; ?>
                    </div>
                    <div class="email">
                        <img src=<?php echo $gambaremail ?> alt="email">
                        <h1><?php echo $email ?></h1>
                        <?php 
                        $sql = "SELECT * FROM kontak_saya";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($kontak = mysqli_fetch_array($res)): ?>
                            <h3><?php echo $kontak["email"] ?></h3>
                        <?php endwhile; ?>
                    </div>
                    <div class="lokasi">
                        <img src=<?php echo $gambarlokasi ?> alt="lokasi">
                        <h1><?php echo $lokasi ?></h1>
                        <?php 
                        $sql = "SELECT * FROM kontak_saya";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($kontak = mysqli_fetch_array($res)): ?>
                            <h3><?php echo $kontak["lokasi"] ?></h3>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>


        <div class="hexagon" style="background-image: url(<?php echo $fotoprofil ?>);">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
        </div>


        <div class="t_kanan">
        
        

            <div class="page">
                <ul>
                    <button><a href="#tentang"><?php echo $pagetentang ?></a></button>
                    <button><a href="#contact"><?php echo $pagetkontak ?></a></button>
                    <button><a href="#history"><?php echo $pageriwayat ?></a></button>
                    <button><a href="#skill"><?php echo $pagetket ?></a></button>
                </ul>
            </div>

            <div class="p_kanan">
                <svg width="528px" height="100">
                    <rect class="borderts" width="528px" height="10"/>
                </svg>
            </div>
            
            <div class="trapezoidkanan"></div>

            <div class="nama">
                <div class="namadepan">
                    <?php 
                        $sql = "SELECT * FROM nama";
                        $res = mysqli_query(connection(),$sql);
                    ?>
                    <?php while($nama = mysqli_fetch_array($res)): ?>
                        <h1><?php echo $nama["nama_depan"] ?></h1>
                    <?php endwhile; ?>
                </div>
                <div class="namabelakang">
                    <?php 
                        $sql = "SELECT * FROM nama";
                        $res = mysqli_query(connection(),$sql);
                    ?>
                    <?php while($nama = mysqli_fetch_array($res)): ?>
                        <h1><?php echo $nama["nama_belakang"] ?></h1>
                    <?php endwhile; ?>
                </div>
            </div>

            <div id="tentang" class="tentangsaya">
                <h1><?php echo $tentangsaya ?></h1>
                <svg width="400" height="100">
                    <rect class="borderts" width="50" height="5"/>
                </svg>
                <?php 
                $sql = "SELECT * FROM tentang_saya";
                $res = mysqli_query(connection(),$sql);
                ?>
                <?php while($tentang_saya = mysqli_fetch_array($res)): ?>
                    <h3><?php echo $tentang_saya["tentang_saya"] ?></h3>
                <?php endwhile; ?>
            </div>

            <div id="history" class="riwayat_p">
                <h1><?php echo $riwayatpendidikan ?></h1>
                <svg width="400" height="100">
                    <rect class="borderrp" width="50" height="5"/>
                </svg>
                <div class="isirp">
                        <?php 
                        $sql = "SELECT * FROM riwayat_pendidikan";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($riwayat= mysqli_fetch_array($res)): ?>
                            <h5><?php echo $riwayat["tahun_pendidikan"]?></h5>
                            <h3><?php echo $riwayat["nama_pendidikan"] ?></h3>
                        <?php endwhile; ?>
                </div>
            </div>

            <div id="skill" class="keterampilan">
                <h1><?php echo $keterampilan ?></h1>
                <svg width="400" height="100">
                    <rect class="borderket" width="50" height="5"/>
                </svg>
                <div class="isiket">
                    <div class="ket1">
                        <img src=<?php echo $gambarskill1 ?> alt="">
                        <?php 
                        $sql = "SELECT * FROM keterampilan";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($ket = mysqli_fetch_array($res)): ?>
                            <h5><?php echo $ket["keterampilan1"]?></h5>
                        <?php endwhile; ?>
                    </div>
                    <div class="ket2">
                        <img src=<?php echo $gambarskill2 ?> alt="">
                        <?php 
                        $sql = "SELECT * FROM keterampilan";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($ket = mysqli_fetch_array($res)): ?>
                            <h5><?php echo $ket["keterampilan2"]?></h5>
                        <?php endwhile; ?>
                    </div>
                    <div class="ket3">
                        <img src=<?php echo $gambarskill3 ?> alt="">
                        <?php 
                        $sql = "SELECT * FROM keterampilan";
                        $res = mysqli_query(connection(),$sql);
                        ?>
                        <?php while($ket = mysqli_fetch_array($res)): ?>
                            <h5><?php echo $ket["keterampilan3"]?></h5>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>