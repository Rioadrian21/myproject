<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel=stylesheet>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="<?= base_url('user'); ?>">Sijaja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal" data-target="#logoutModal">Log out</a>

            </div>
        </nav>
    </header>

    <section class="latar">
        <img class="embed-responsive" src="assets/img/blackwp.png" alt="">

        <div class="hero">
            <h2>Hallo <?= $user['name']; ?>.... Selamat Datang... :)</h2>
        </div>
    </section>

    <section class="home py-5" id="home">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>SIJAJA</h6>
                <h2>Sistem Informasi Jasa Jahit</h2>
                <p>Anda ingin membuat baju, Seragam Sekolah, kemeja dll tapi gatau caranya menjahit?
                    Tenang saja ya, anda bisa mempercayakan semuanya kepada Si Jaja kami
                    Hanya dalam waktu kurang dari 7 hari, sudah bisa si ambil loh!
                    Anda juga bisa memilih sendiri bahan yang akan digunakan atau bisa juga dengan mempercayakan jasa kami!</p>
                <a href="#product">Order Now !</a>
            </div>
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img class="img-fluid" src="assets/img/home.png" alt="">
            </div>
        </div>
    </section>

    <section class="about py-5" id="about">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img class="img-fluid" src="assets/img/about.png" alt="">
            </div>
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>SIJAJA</h6>
                <h2>Sistem Informasi Jasa Jahit</h2>
                <p>Sistem Informasi jasa jahit atau di kenal dengan sijaja, berdiri pada tanggal 12 desember 2022, Yang berdomisili,
                    pembuatan awal di kab.kawarang, di buat oleh tangan mahasiswa ubsi cikampek, untuk penempatan kami berada di daerah galuh mas.</p>
                <a href="#product">Order Now !</a>
            </div>
        </div>
    </section>

    <section class="product py-5" id="product">
        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center pt-5">
                <h2 class="font-weight-bold pb-5 text-light">
                    Our Product
                </h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container-fluid">
                <?php foreach ($product as $pro) : ?>
                    <div data-toggle="modal" data-target="#popupmodal<?= $pro->id_product ?>" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                        <img class="img-fluid" src="assets/img/<?= $pro->img ?>" alt="">
                        <h5 class="font-weight-bold pt-3"><?= $pro->nama_product ?></h5>
                        <h5 class="font-weight-bold pt-3">Rp. <?= $pro->harga ?></h5>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="contact py-5" id="contact">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-4 col-md-4 col-12 w-50 pt-5 pb-5">
                <h6>Contact Us</h6>
                <h3>Have some questions? <br> Text Us !!</h3>
                <form action="https://formspree.io/f/mbjbeoje" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-user btn-outline-success" name="message" id="" cols="30" rows="5" placeholder="Type Your Message Here...." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%;">Send</button>
                </form>
            </div>
            <div class="img col-lg-4 col-md-4 col-12 w-50 pt-5 pb-5 mr-5">
                <img class="img-fluid" src="assets/img/pesan.png" alt="">
            </div>
        </div>
    </section>




    <!-- footer -->

    <footer class="text-center">
        <div class="my-3">

            <!-- Facebook -->
            <a class="fb-ic text-primary" target="_blank" href="https://www.facebook.com">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic text-primary" target="_blank" href="https://www.twitter.com">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic text-danger" target="_blank" href="https://www.google.com">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!--Linkedin -->
            <a class="li-ic text-dark" target="_blank" href="https://id.linkedin.com">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!--Instagram-->
            <a class="ins-ic text-danger" target="_blank" href="https://instagram.com/">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic text-danger" target="_blank" href="https://id.pinterest.com/">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"></i>
            </a>

        </div>

        <!-- Copyright -->
        <div class="copyright py-3 bg-dark text-light">© <?= date('Y') ?> Copyright :
            <a href="<?= base_url('user'); ?>"> www.sijaja.com</a>
        </div>
        <!-- Copyright -->

    </footer>


    <!-- load modal logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content kotak">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to leave ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session !</div>
                <div class="modal-foooter">
                    <button class="btn btn-secondary py-0 px-3 small mb-3 ml-3" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary py-0 px-3 small mb-3" href="<?= base_url('auth/logout'); ?>">Log out</a>
                </div>

            </div>
        </div>
    </div>

    <!-- load modal insert data -->
    <?php foreach ($product as $pro) : ?>
        <div class="modal fade" id="popupmodal<?= $pro->id_product ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content kotak">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Now !</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col my-auto">
                                <img class="img-fluid" src="assets/img/<?= $pro->img ?>" alt="">
                                <h3 class="text-center"><?= $pro->nama_product ?></h3>
                            </div>
                            <div class="col">
                                <form action="<?= base_url('user/tambah'); ?>" method="post">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $pro->nama_product ?>" name="jenis">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="number" class="form-control form-control-user btn-outline-success" value="<?= $pro->harga ?>" name="harga">
                                    </div>
                                    <div class="form-group mb-2">
                                        <select class="form-control form-control-user btn-outline-success" name="bahan">
                                            <option value="" disable>Pilih Bahan....</option>
                                            <option value="Katun">Katun</option>
                                            <option value="Slik">Slik</option>
                                            <option value="Linen">Linen</option>
                                            <option value="Toyobo">Toyobo</option>
                                            <option value="Inma">Inma</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <select class="form-control form-control-user btn-outline-success" name="ukuran">
                                            <option value="" disable>Pilih Ukuran....</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XL">XL</option>
                                            <option value="L">L</option>
                                            <option value="M">M</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="number" class="form-control form-control-user btn-outline-success" value="" name="jumlah" placeholder="Jumlah....">
                                    </div>
                                    <div class="form-group mb-5">
                                        <select class="form-control form-control-user btn-outline-success" name="warna">
                                            <option value="" disable>Pilih Warna....</option>
                                            <option value="Merah">Merah</option>
                                            <option value="Kuning">Kuning</option>
                                            <option value="Hijau">Hijau</option>
                                            <option value="Biru">Biru</option>
                                            <option value="Hitam">Hitam</option>
                                            <option value="Putih">Putih</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="width: 100%;" onclick="return confirm('Are you sure to order our product ?');">Order Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>










    <!-- load jquery js file -->
    <script src=" <?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>





</html>