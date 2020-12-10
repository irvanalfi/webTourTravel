<section class="main-carousel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <a href="jacket.php">
                                <div class="carousel-caption mb-5">
                                    <h4 class="mb-5">Jak</h4>
                                </div>
                                <!-- <img src="<?php echo base_url('assets/img/item/' . $row->image) ?>"> -->
                                
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="tshirt.php">
                                <div class="carousel-caption mb-5">
                                    <h4 class="mb-5">Jalo</h4>
                                </div>
                                <!-- <img src="<?php echo base_url('assets/img/item/' . $row->image) ?>"> -->
                                <img src="img/ss4@2x.jpg" class="d-block w-90">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="sweater.php">
                                <div class="carousel-caption mb-5">
                                    <h4 class="mb-5">SWEAT</h4>
                                </div>
                                <!-- <img src="<?php echo base_url('assets/img/item/' . $row->image) ?>"> -->
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
        <h1><?= $row->name ?></h1>
        <h3><?= $row->address ?></h3>
        <h2>Overview</h1>
            <h3><?= $row->overview ?>
        </h2>
        <h2>Price</h2>
        <h3>Rp. <?= $row->price ?></h3>

    </div>

</section>