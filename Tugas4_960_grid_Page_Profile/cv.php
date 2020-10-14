<?php
    $title = "Page Profile | Elang";
    $judul_atas = "CURRICULUM";
    $judul_bawah = "VITAE";
    $kontak = "KONTAK SAYA";
    $telp = "TELEPON";
    $isi_telp = "087854857434";
    $email = "EMAIL";
    $isi_email = "elangputra87@gmail.com";
    $lokasi = "LOKASI";
    $isi_lokasi = "Jl.KENANGA <br> RT06 RW 04 <br> DS. KEBOAN SIKEP <br> GEDANGAN SIDOARJO";
    $pagetentang = "TENTANG SAYA";
    $pageriwayat = "RIWAYAT SAYA";
    $pagetkontak = "KONTAK";
    $pagetket = "KETERAMPILAN";
    $namadepan = "ELANG EKA";
    $namabelakang = "MARGA PUTRA";
    $tentangsaya = "TENTANG SAYA";
    $isi_tentangsaya = "Saya Elang Eka Marga Putra, <br> umur 20 tahun lahir 8 Desember <br> 1999 tinggal di Sidoarjo, <br> saya kuliah di UPN <br> Veteran Jawa Timur ";
    $riwayatpendidikan = "RIWAYAT PENDIDIKAN";
    $riwayattahun1 = "2006 - 2012";
    $riwayatsd = "SDN KEBOAN SIKEP 2";
    $riwayattahun2 = "2012 - 2015";
    $riwayatsmp = "SMP NEGERI 2 SEDATI";
    $riwayattahun3 = "2015 - 2018";
    $riwayatsma = "SMA HANGTUAH 2 SIDOARJO";
    $riwayattahun4 = "2018 - Sekarang";
    $riwayatkuliah = "UPN 'VETERAN' JAWA TIMUR";
    $keterampilan = "KETERAMPILAN";
    $ket_nama1 = "C PROGRAMMING";
    $ket_nama2 = "JAVA PROGRAMMING";
    $ket_nama3 = "ADOBE PHOTOSHOP";
    $fotoprofil = "./gambar/foto.png";
    $gambartelepon = './gambar/tel.png';
    $gambaremail = './gambar/email.png';
    $gambarlokasi = './gambar/lokasi.png';
    $gambarskill1 = './gambar/c.png';
    $gambarskill2 = './gambar/java.png';
    $gambarskill3 = './gambar/photoshop.png';
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
                        <h3><?php echo $isi_telp ?></h3>
                    </div>
                    <div class="email">
                        <img src=<?php echo $gambaremail ?> alt="email">
                        <h1><?php echo $email ?></h1>
                        <h3><?php echo $isi_email ?></h3>
                    </div>
                    <div class="lokasi">
                        <img src=<?php echo $gambarlokasi ?> alt="lokasi">
                        <h1><?php echo $lokasi ?></h1>
                        <h3><?php echo $isi_lokasi ?></h3>
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
                    <h1><?php echo $namadepan ?></h1>
                </div>
                <div class="namabelakang">
                    <h1><?php echo $namabelakang ?></h1>
                </div>
            </div>

            <div id="tentang" class="tentangsaya">
                <h1><?php echo $tentangsaya ?></h1>
                <svg width="400" height="100">
                    <rect class="borderts" width="50" height="5"/>
                </svg>
                <h3><?php echo $isi_tentangsaya ?></h3>
            </div>

            <div id="history" class="riwayat_p">
                <h1><?php echo $riwayatpendidikan ?></h1>
                <svg width="400" height="100">
                    <rect class="borderrp" width="50" height="5"/>
                </svg>
                <div class="isirp">
                    <h5><?php echo $riwayattahun1 ?></h5>
                    <h3><?php echo $riwayatsd ?></h3>
                    <h5><?php echo $riwayattahun2 ?></h5>
                    <h3><?php echo $riwayatsmp ?></h3>
                    <h5><?php echo $riwayattahun3 ?></h5>
                    <h3><?php echo $riwayatsma ?></h3>
                    <h5><?php echo $riwayattahun4 ?></h5>
                    <h3><?php echo $riwayatkuliah ?></h3>
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
                        <h5><?php echo $ket_nama1 ?></h5>
                    </div>
                    <div class="ket2">
                        <img src=<?php echo $gambarskill2 ?> alt="">
                        <h5><?php echo $ket_nama2 ?></h5>
                    </div>
                    <div class="ket3">
                        <img src=<?php echo $gambarskill3 ?> alt="">
                        <h5><?php echo $ket_nama3 ?></h5>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>