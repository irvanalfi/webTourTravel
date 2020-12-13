<section>
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="" style="margin-top:px">
        </div>
    </div>
</section>
<section style="margin-top : 90px; margin-bottom:10px; font-family: Montserrat !important;">
    <div class="container">
        <div class="sections">
            <div class="section-title">
                <div class="custom-title-cont">
                    <div class="belakang" style="background: rgba(255, 255, 255, 0); border-color: darkorange;"></div>
                    <div class="depan" style="background: rgba(255, 255, 255, 0); color: orange; text-shadow: 2px 2px 5px #0000006e;">
                        <b>Chart</b> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr class="thead">
                            <th>No</th>
                            <th>Product Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($this->cart->contents() as $items) : ?>
                        <tbody>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $items['name'] ?></td>
                            <td><?php echo $items['qty'] ?></td>
                            <td align="right"><?= indo_currency($items['price']); ?></td>
                            <td class="nav-link text-dark" style="font-size: 15px">
                                <a href="<?= base_url('client/hapus_keranjang/') ?><?= $items['rowid'] ?>"><i class=" fas fa-trash"></i></a> </td>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>Your Booking</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        $no = 1;
                        foreach ($this->cart->contents() as $items) : ?>
                            <h4 class="card-title" style="text-align: left;"><?= $items['name'] ?></h4>
                            <p class="card-text" style="text-align: right;"><?= indo_currency($items['price']); ?></p>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer text-muted">
                        <p>Total : <?= indo_currency($this->cart->total()); ?></p>
                        <a href="<?= base_url('client/proses_bayar') ?>" class="btn btn-primary pull-left">Checkout</a>
                        <a href="#" class="btn btn-warning pull-right">Cancel</a>
                    </div>
                </div>

                <!-- <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td> -->
            </div>
        </div>
    </div>
</section>