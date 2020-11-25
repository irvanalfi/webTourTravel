<!--baner-->
<section>
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="" style="margin-top: 135px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/bannerTipis.jpg" alt="banner">
        </div>
    </div>
</section>
</div>
<section style="margin-top:-230px; margin-bottom:90px;">
    <div class="container">
        <div class="sections">
            <div class="section-title">
                <div class="custom-title-cont">
                    <div class="belakang" style="background: rgba(255, 255, 255, 0); border-color: white;"></div>
                    <div class="depan" style="background: rgba(255, 255, 255, 0); color: white; text-shadow: 2px 2px 5px #0000006e;">
                        <b>BLOG TRAVIORA</b> </div>
                </div>
            </div>
            <!-- <div class="section-subtitle">
                Find your own favorite destination. Let’s get it!</div> -->
        </div>
    </div>
</section>
<!-- content -->
<section>
    <div class="contain">
        <div class="container">
            <hr>
            <div class="row pt-3">
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