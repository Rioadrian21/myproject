<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJAJA</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        .latar {
            background-size: cover;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(assets/img/uu.jpg);
        }

        .logo {
            position: absolute;
            font-size: large;
            font-weight: bolder;
            margin: 2.5rem;
        }

        .tengah {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tengah a {
            border-radius: 10px;
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>

<body>
    <div class="latar">
        <div class="logo text-light">
            SIJAJA
        </div>

        <div class="container">
            <div class="tengah">
                <h1 class="text-light text-center">WEB SISTEM INFORMASI JASA JAHIT</h1>
                <p class="text-light text-center">Sistem Informasi jasa jahit atau di kenal dengan sijaja, berdiri pada tanggal 12 desember 2022, Yang berdomisili,
                    pembuatan awal di kab.kawarang, di buat oleh tangan mahasiswa ubsi cikampek, untuk penempatan kami berada di daerah galuh mas,
                    dengan adanya sistem jahit berbasis web ini tidak hanya mempermudah kaum mageran tapi juga untuk pengembangan di era digital seperti ini yang hampir 100% semua nya memakai via online
                    Tempat kami sangat cocok untuk anda yang ingin membuat baju, seragam sekolah, kemeja dll, silahkan coba dan daftar kan diri anda.</p>
                <a class="btn btn-outline-primary" href="<?= base_url('auth'); ?>">Sign in</a>
            </div>
        </div>
    </div>

</body>

</html>