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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body>
    <!-- navbar start -->
    <div class="fixed-top">
        <div class="p-4 header shadow">
            <div class="container text-white" style="font-size: 15px">
                <a href="#" class="text-white" style="font-size: 13px">+62-81353304990 </a>
                <b class="ml-2">|</b>
                <a href="#" class="text-white ml-2" style="font-size: 13px">booking@traviora.com</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light rounded rounded-0 shadow">
            <div class="container">
                <a class="navbar-brand pt-3" href="<?= site_url('client/home'); ?>">
                    <img src="<?= base_url() ?>assets/img/Logo.png" alt="Logo Traviora" height="70%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-uppercase mx-auto" style="font-size: 15px">
                        <li class="nav-item <?= $this->uri->segment(2) == 'home' ? 'active' : ''; ?>">
                            <a class="nav-link font-weight-bold " href="<?= site_url('client/home'); ?>">Home</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == 'java' ? 'active' : ''; ?>">
                            <a class="nav-link font-weight-bold" href="<?= site_url('client/java'); ?>">JAVA TOURS</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == 'bali' ? 'active' : ''; ?>">
                            <a class="nav-link font-weight-bold" href="<?= site_url('client/bali'); ?>">BALI TOURS</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == 'lombok' ? 'active' : ''; ?>">
                            <a class="nav-link font-weight-bold" href="<?= site_url('client/lombok'); ?>">LOMBOK TOURS</a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(2) == 'java' ? 'blog' : ''; ?>">
                            <a class="nav-link font-weight-bold" href="<?= site_url('client/blog'); ?>">BLOG</a>
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
    <!-- Footer -->

    <!-- FOOTER -->
    <footer class="main-footer" style="margin-left: 0px; margin-top: 30px;">
        <div class="container mb-5">
            <div class="row justify-content-center primary">
                <div class="col-lg-4 py-4 px-3 footer-map">
                    <h2 class="store pt-4 mb-3"><b>Need Help?</b></h2>
                    <div class="pl-4 mt-4" style="border-left-width: 3px;  border-left-color: #0098c7; border-left-style: solid;">
                        <h4 class="mt-5" style="color: darkgray;">Call Us</h4>
                        <h4 class="mt-3" style="color: darkslategrey;">+62-81353304990</h4>
                    </div><br>
                    <div class="pl-4 mt-4" style="border-left-width: 3px;  border-left-color: #0098c7; border-left-style: solid;">
                        <h4 class="mt-3" style="color: darkgray;">Email for Us</h4>
                        <h4 class="mt-3" style="color: darkslategrey;">irvanhidayat@gmail.com</h4>
                    </div><br>
                    <div class="pl-4 mt-4" style="border-left-width: 3px;  border-left-color: #0098c7; border-left-style: solid;">
                        <h4 class="mt-3" style="color: darkgray;">Follow Us</h4>
                        <div class="mt-3">
                            <a href="#"><i class="fab fa-facebook" style="height: 25px; width: 25px;"></i>&nbsp;&nbsp;&nbsp;</a>
                            <a href="#"><i class="fab fa-twitter" style="height: 25px; width: 25px;"> </i>&nbsp;&nbsp;&nbsp;</a>
                            <a href="#"><i class="fab fa-instagram" style="height: 25px; width: 25px;"> </i>&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pt-4">
                    <h2 class="store pt-4 mb-3"><b>Related Links</b></h2>
                    <li class="mt-5" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="aboutus" style="color: darkslategrey;">About Us</a></h4>
                    </li>
                    <li class="mt-3" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="contactus" style="color: darkslategrey;">Contact us</a></h4>
                    </li>
                    <li class="mt-3" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="howtobook" style="color: darkslategrey;">How To Book</a></h4>
                    </li>
                    <li class="mt-3" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="privacypolice" style="color: darkslategrey;">Privacy Policy</a></h4>
                    </li>
                    <li class="mt-3" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="becomeapartner" style="color: darkslategrey;">Become a Partner</a></h4>
                    </li>
                    <li class="mt-3" style="display: block;">
                        <h4><a href="#" class="stretched-link" id="termsandconditions" style="color: darkslategrey;">Terms and Conditions</a></h4>
                    </li>
                </div>
                <div class="col-lg-3 pt-4">
                    <h2 class="store pt-4 mb-3"><b>Destination</b></h2>
                    <h4 class="mt-5"><a href="<?= site_url('client/java'); ?>" class="stretched-link" style="color: darkslategrey;">Java Island</a></h4>
                    <h4 class="mt-3"><a href="<?= site_url('client/bali'); ?>" class="stretched-link" style="color: darkslategrey;">Bali Island</a></h4>
                    <h4 class="mt-3"><a href="<?= site_url('client/lombok'); ?>" class="stretched-link" style="color: darkslategrey;">Lombok Island</a></h4>
                </div>
                <div class="col-lg-2 pt-4">
                    <h2 class="store pt-4 mb-3"><b>Settings</b></h2>
                    <h4 class="mt-5">Currency</h4>
                    <button class="btn btn-primary pl-5 pr-5">IDR</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- COPYRIGHT -->
    <footer class="main-footer" style="margin-left: 0px;">
        <div class="container mb-3 mt-4">
            <div class="pull-right ">
                <h4><b>Version</b> 1.0.0</h4>
            </div>
            <h4><strong class="pull-left">Copyright © 2020 <a href="#">Traviora</a>.</strong>&nbsp; All rights
                reserved.</h4>
        </div>
        <!-- /.container -->
    </footer>
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