<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
</head>

<body class="bg-dark">


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="<?= base_url('user'); ?>">Sijaja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit Data</a>
                    </li>
                </ul>
                <a href="<?= base_url('Admin'); ?>" class="btn btn-outline-warning my-2 my-sm-0">Kembali</a>

            </div>
        </nav>
    </header>

    <div class="my-5 py-3"></div>

    <?php foreach ($data_lama as $od) : ?>

        <div class="container">
            <div class="row">
                <form class="bg-white pr-5 pt-4 rip" action="<?= base_url() ?>Admin/update/<?= $od['id']; ?>" method="post">

                    <table class="table-fluid">
                        <tr>
                            <td width="150px" class="text-center">
                                <label for="name">Nama</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $od['name'] ?>" name="name">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="email">E-mail</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user btn-outline-success" value="<?= $od['email'] ?>" name="email">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="jenis">Jenis</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <select class="form-control form-control-user btn-outline-success" name="jenis">
                                        <?php foreach ($product as $p) : ?>
                                            <?php if ($od['jenis'] == $p->nama_product) : ?>
                                                <option value="<?= $od['jenis']; ?>" selected><?= $od['jenis']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $p->nama_product; ?>"><?= $p->nama_product; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="harga">Harga</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <input type="number" class="form-control form-control-user btn-outline-success" value="<?php if ("Kemeja" == $od['jenis']) : echo 150000;
                                                                                                                            elseif ("Batik" == $od['jenis']) : echo 200000;
                                                                                                                            elseif ("Jas" == $od['jenis']) : echo 500000;
                                                                                                                            elseif ("Jaket" == $od['jenis']) : echo 150000;
                                                                                                                            elseif ("Hoodie" == $od['jenis']) : echo 80000;
                                                                                                                            elseif ("Sweater" == $od['jenis']) : echo 70000;
                                                                                                                            elseif ("Seragam" == $od['jenis']) : echo 50000;
                                                                                                                            elseif ("Baju Couple" == $od['jenis']) : echo 40000;
                                                                                                                            elseif ("Kebaya" == $od['jenis']) : echo 120000;
                                                                                                                            elseif ("T-shirt" == $od['jenis']) : echo 30000;
                                                                                                                            endif; ?>" name="harga">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="bahan">Bahan</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <select class="form-control form-control-user btn-outline-success" name="bahan">
                                        <?php foreach ($bahan as $b) : ?>
                                            <?php if ($b == $od['bahan']) : ?>
                                                <option value="<?= $b; ?>" selected><?= $b; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $b; ?>"><?= $b; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="ukuran">Ukuran</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <select class="form-control form-control-user btn-outline-success" name="ukuran">
                                        <?php foreach ($ukuran as $u) : ?>
                                            <?php if ($u == $od['ukuran']) : ?>
                                                <option value="<?= $u; ?>" selected><?= $u; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $u; ?>"><?= $u; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="banyak">Jumlah</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <input type="number" class="form-control form-control-user btn-outline-success" value="<?= $od['banyak'] ?>" name="banyak">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for="warna">Warna</label>
                            </td>
                            <td>
                                <div class="form-group mb-2">
                                    <select class="form-control form-control-user btn-outline-success" name="warna">
                                        <?php foreach ($warna as $w) : ?>
                                            <?php if ($w == $od['warna']) : ?>
                                                <option value="<?= $w; ?>" selected><?= $w; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $w; ?>"><?= $w; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr height="70px">
                            <td class="text-right">
                                <button type="submit" class="btn btn-success">simpan</button>

                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="<?= base_url('Admin'); ?>">Kembali</a>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>

    <?php endforeach; ?>

    <br><br><br>
    <footer class="text-center">
        <!-- Copyright -->
        <div class="copyright py-3 bg-dark text-light">© <?= date('Y') ?> Copyright :
            <a href="#"> www.sijaja.com</a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- load jquery js file -->
    <script src=" <?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>





</html>