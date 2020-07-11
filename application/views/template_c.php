<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traviora</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
    <!-- navbar start -->
    <div class="fixed-top">
        <div class="p-4 header">
            <div class="container text-white" style="font-size: 15px">
                <a href="#" class="text-white" style="font-size: 13px">+62-81353304990 </a><b>|</b>
                <a href="#" class="text-white" style="font-size: 13px">booking@traviora.com</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light rounded rounded-0">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url() ?>assets/img/Logo.png" alt="Logo Traviora" height="70%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-uppercase mx-auto" style="font-size: 15px">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold  text-dark" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">JAVA TOURS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">BALI TOURS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">LOMBOK TOURS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">BLOG</a>
                        </li>
                    </ul>
                    <a href="" class="nav-link text-dark" style="font-size: 15px"><i class="fas fa-shopping-cart"></i><b>(<span>12</span>)</b></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->
    <!-- Content -->
    <?php echo $contents ?>

    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/all.js"></script>
</body>

</html>