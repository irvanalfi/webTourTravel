    <!-- TITLE -->
    <section>
        <div class="" style="padding-top: 115px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/banner.jpg" alt="banner">
        </div>
    </section>
    <section>
        <div class="">
            <div class="sections">
                <div class="section-title">
                    <div class="custom-title-cont">
                        <div class="belakang"></div>
                        <div class="depan">
                            OUR PACKETS </div>
                    </div>
                </div>
                <div class="section-subtitle">
                    Find your own favorite destination. Let’s get it!</div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="">
            <div class="row justify-content-center">
                <?php $no = 1; ?>
                <?php foreach ($row->result() as $key => $data) : ?>
                    <div class="col-lg-3 my-2 mx-4 shadow">
                        <div class="contents py-3">
                            <?php if ($data->image != null) { ?>
                                <img style="margin-top: 5px;" src="<?= base_url('assets/img/item/' . $data->image) ?>" class="card-img-top" alt="...">
                            <?php } ?>
                            <p style="margin-top: 10px;"><i class="fa fa-map-marker" style="size: 15px; margin-right: 5px;"></i><?= $data->address; ?></p>
                            <h5 class="text-primary">
                                <?= $data->name ?>
                            </h5>
                            <?php
                            $fullOverview = $data->overview;
                            $overview = character_limiter($fullOverview, 50);
                            ?>
                            <p><?= $overview ?></p>
                            <span style="font-size: 12px;" class="pull-left"><i class="fa fa-clock" style="margin-right: 5px;"></i><?= $data->duration ?></span>
                            <span style="font-size: 16px;" class="text-primary pull-right">
                                <b><?= "Rp " . number_format(($data->price), 0, ',', '.') ?></b>
                            </span><br><br>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>