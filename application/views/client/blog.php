<!--baner-->
<section>
    <div class="container">
        <div class="" style="margin-top: 135px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/banner.jpg" alt="banner">
        </div>
</section><br><br>
<!-- content -->
<section>
    <div class="contain">
        <div class="container">
            <div class="row">
                <?php $no = 1; ?>
                <?php foreach ($row->result() as $key => $data) : ?>
                    <div class="card mb-3" style="max-width: 720px;">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img src="<?= base_url('assets/img/blog/' . $data->image) ?>" class="card-img" alt="gambar content">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data->title ?></h5>
                                    <?php
                                    $fullContent = $data->content;
                                    $content = character_limiter($fullContent, 200);
                                    ?>
                                    <p class="card-text"><?= $content ?></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="#" class="btn btn-primary pl-4 pr-4">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>