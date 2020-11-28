<section class="content-header">
    <h1>Profil WEB
        <small>Pengaturan Profil dan Atribut Web</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Profil</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Profil Web</h3>
            <div class="pull-right">
                <a href="<?= site_url('profile/edit'); ?>" class="btn btn-primary">
                    <i class="fa fa-pencil"></i> Edit Tampilan</a>
            </div><br>
            <hr>
        </div>
        <?php foreach ($row->result() as $key => $data) : ?>
        <?php endforeach; ?>
        <div class="row box-body">
            <div class="col-lg-6">
                <h5><b>Logo</b></h5>
                <?php if ($data->logo != null) { ?>
                    <img src="<?= base_url('assets/img/profil/' . $data->logo) ?>" style="width:250px;">
                <?php } else {
                    echo "No Image";
                } ?>
                <br><br>
                <h5><b>Banner Utama</b></h5>
                <?php if ($data->banner_utama != null) { ?>
                    <img src="<?= base_url('assets/img/profil/' . $data->banner_utama) ?>" style="width:450px;">
                <?php } else {
                    echo "No Image";
                } ?>
                <br><br>
                <h5><b>Banner Umum</b></h5>
                <?php if ($data->banner_umum != null) { ?>
                    <img src="<?= base_url('assets/img/profil/' . $data->banner_umum) ?>" style="width:450px;">
                <?php } else {
                    echo "No Image";
                } ?><br><br>
                <h5><b>About</b></h5>
                <h5><?= $data->about; ?></h5>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Web Name</b></h5>
                        <h5><?= $data->web_name; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Status Peusahaan</b></h5>
                        <h5><?= $data->status_name; ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Address1</b></h5>
                        <h5><?= $data->address1; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Address2</b></h5>
                        <h5><?= $data->address2; ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Email1</b></h5>
                        <h5><?= $data->email1; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Email2</b></h5>
                        <h5><?= $data->email2; ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Phone</b></h5>
                        <h5><?= $data->phone; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Whatsapp</b></h5>
                        <h5><?= $data->whatsapp; ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Link Facebook</b></h5>
                        <h5><?= $data->facebook; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Link Instagram</b></h5>
                        <h5><?= $data->instagram; ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5><b>Link Twitter</b></h5>
                        <h5><?= $data->twitter; ?></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5><b>Link Youtube</b></h5>
                        <h5><?= $data->youtube; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>