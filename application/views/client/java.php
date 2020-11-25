<section class="content">
    <div class="container">
        <h1 style="padding-top: 30px;">JAVA TOUR</h1>
    </div>
    <div class="row justify-content-center">
        <?php $no = 1; ?>
        <?php foreach ($row->result() as $key => $data) :
            if ($data->category_id == 1) { ?>
                <div class="col-lg-2 my-2 mx-2 shadow">
                    <div class="contents py-3">
                        <?php if ($data->image != null) { ?>
                            <img style="margin-top: 5px;" src="<?= base_url('assets/img/item/' . $data->image) ?>" class="card-img-top" alt="...">
                        <?php } ?>
                        <p style="margin-top: 10px;"><i class="fa fa-map-marker" style="size: 15px; margin-right: 5px;"></i><?= $data->address; ?></p>
                        <h6 class="text-primary">
                            <?= $data->name ?>
                        </h6>
                        <?php
                        $fullOverview = $data->overview;
                        $overview = character_limiter($fullOverview, 50);
                        ?>
                        <p><?= $overview ?></p>
                        <span style="font-size: 12px;" class="pull-left"><i class="fa fa-clock" style="margin-right: 5px; color: #A2A2A2;"></i><?= $data->duration ?></span>
                        <span style="font-size: 16px;" class="text-primary pull-right">
                            <b><?= "Rp " . number_format(($data->price), 0, ',', '.') ?></b>
                        </span><br><br>
                    </div>
                </div>
        <?php
            }
        endforeach; ?>
    </div>
</section>