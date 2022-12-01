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
                <p>Rio v2 ipsum dolor sit amet consectetur adipisicing elit. Doloribus, nostrum omnis ipsum tenetur illo saepe consequuntur corporis alias eaque harum ab sint earum vel modi quisquam hic, animi autem porro.</p>
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
                <p>Lutfi ipsum dolor sit amet consectetur adipisicing elit. Doloribus, nostrum omnis ipsum tenetur illo saepe consequuntur corporis alias eaque harum ab sint earum vel modi quisquam hic, animi autem porro.</p>
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
                <div data-toggle="modal" data-target="#popupmodal1" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss1.png" alt="">
                    <h5 class="font-weight-bold pt-3">Kemeja</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal2" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss2.png" alt="">
                    <h5 class="font-weight-bold pt-3">Batik</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal3" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss3.png" alt="">
                    <h5 class="font-weight-bold pt-3">Jas</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal4" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss4.png" alt="">
                    <h5 class="font-weight-bold pt-3">Jaket</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal5" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss5.png" alt="">
                    <h5 class="font-weight-bold pt-3">Sweeter</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal6" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss6.png" alt="">
                    <h5 class="font-weight-bold pt-3">Hoodie</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal7" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss7.png" alt="">
                    <h5 class="font-weight-bold pt-3">Seragam</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal8" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss8.png" alt="">
                    <h5 class="font-weight-bold pt-3">Couple</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal9" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss9.png" alt="">
                    <h5 class="font-weight-bold pt-3">Kebaya</h5>
                </div>
                <div data-toggle="modal" data-target="#popupmodal10" class="one col-lg-2 col-md-3 col-12 w-25 m-1" style="cursor: pointer;">
                    <img class="img-fluid" src="assets/img/ss10.png" alt="">
                    <h5 class="font-weight-bold pt-3">T-shirt</h5>
                </div>
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
    <div class="modal fade" id="popupmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss1.png" alt="">
                            <h3 class="text-center">Kemeja</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Kemeja" name="jenis">
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

    <div class="modal fade" id="popupmodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss2.png" alt="">
                            <h3 class="text-center">Batik</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Batik" name="jenis">
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

    <div class="modal fade" id="popupmodal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss3.png" alt="">
                            <h3 class="text-center">Jas</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Jas" name="jenis">
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

    <div class="modal fade" id="popupmodal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss4.png" alt="">
                            <h3 class="text-center">Jaket</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Jaket" name="jenis">
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

    <div class="modal fade" id="popupmodal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss5.png" alt="">
                            <h3 class="text-center">Sweeter</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Sweeter" name="jenis">
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

    <div class="modal fade" id="popupmodal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss6.png" alt="">
                            <h3 class="text-center">Hoodie</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Hoodie" name="jenis">
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

    <div class="modal fade" id="popupmodal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss7.png" alt="">
                            <h3 class="text-center">Seragam</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Seragam" name="jenis">
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

    <div class="modal fade" id="popupmodal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss8.png" alt="">
                            <h3 class="text-center">Couple</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Couple" name="jenis">
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

    <div class="modal fade" id="popupmodal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss9.png" alt="">
                            <h3 class="text-center">Kebaya</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="Kebaya" name="jenis">
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

    <div class="modal fade" id="popupmodal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="img-fluid" src="assets/img/ss10.png" alt="">
                            <h3 class="text-center">T-shirt</h3>
                        </div>
                        <div class="col">
                            <form action="<?= base_url('user/tambah'); ?>" method="post">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['name']; ?>" name="nami">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $user['email']; ?>" name="email">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="T-shirt" name="jenis">
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








    <!-- load jquery js file -->
    <script src=" <?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>





</html>