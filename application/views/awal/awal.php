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
                <p class="text-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi vitae minima fugit sint omnis voluptate alias architecto odio dolorum illo provident natus impedit ipsam distinctio maiores ipsum, adipisci sequi voluptatum!
                    Provident aliquam cumque fuga reiciendis labore dignissimos? Placeat voluptatibus vero quaerat ullam consectetur quibusdam nemo exercitationem iure tenetur sapiente, architecto quisquam magni ut illo incidunt voluptatum? Totam fugiat at corrupti.
                    Eaque assumenda nobis nostrum temporibus quos molestias tenetur autem perspiciatis eligendi reiciendis labore, aperiam, vero doloremque excepturi exercitationem aliquam qui, dolor et quis. Laborum, quibusdam natus id voluptates officiis cum?</p>
                <a class="btn btn-outline-primary" href="<?= base_url('auth'); ?>">Sign in</a>
            </div>
        </div>
    </div>

</body>

</html>