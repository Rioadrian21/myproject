<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel=stylesheet>
    <style>
        .dashboard {
            background-color: black;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="<?= base_url('admin'); ?>">Sijaja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#dashboard">Dashboard</a>
                    </li>
                </ul>
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal" data-target="#logoutModal">Log out</a>

            </div>
        </nav>
    </header>

    <section class="latar">
        <img class="embed-responsive" src="assets/img/blackwp.png" alt="">

        <div class="hero">
            <h2>Admin : <?= $user['name']; ?></h2>
        </div>
    </section>

    <section class="dashboard container-fluid" id="dashboard">
        <div class="col mx-auto align-items-center py-5">
            <div class="container text-center">
                <h2 class="text-white">Data who was ordered !</h2>
                <div class="table-responsive-xl">
                    <table class="table table-fluid table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jenis</th>
                                <th>Bahan</th>
                                <th>Ukuran</th>
                                <th>Banyak</th>
                                <th>Jumlah harga</th>
                                <th>Warna</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order as $od) : ?>
                                <tr>
                                    <td><?= $od['name'] ?></td>
                                    <td><?= $od['email'] ?></td>
                                    <td><?= $od['jenis'] ?></td>
                                    <td><?= $od['bahan'] ?></td>
                                    <td><?= $od['ukuran'] ?></td>
                                    <td><?= $od['banyak'] ?></td>
                                    <td>Rp. <?= $od['jumlah_harga'] ?></td>
                                    <td><?= $od['warna'] ?></td>
                                    <td>
                                        <a class="btn btn-outline-success py-0" href="<?= base_url() ?>Admin/edit/<?= $od['id']; ?>"> Edit </a>
                                        <a class="btn btn-outline-success py-0" href="<?= base_url() ?>Admin/hapus/<?= $od['id']; ?>" onclick="return confirm('Apakah anda yakin sudah selesai?');"> Selesai </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->

    <footer class=" text-center">
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
        <div class="copyright py-3 bg-dark text-light">© 2020 Copyright :
            <a href="<?= base_url('admin'); ?>"> www.sijaja.com</a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- load modal -->
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


    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>


</html>