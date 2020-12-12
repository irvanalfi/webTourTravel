<section>
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="" style="margin-top: 135px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/bannerTipis.jpg" alt="banner">
        </div>
    </div>
</section>
</div>
<section style="margin-top:-230px; margin-bottom:80px; font-family: Montserrat !important;">
    <div class="container">
        <div class="sections">
            <div class="section-title">
                <div class="custom-title-cont">
                    <div class="belakang" style="background: rgba(255, 255, 255, 0); border-color: white;"></div>
                    <div class="depan" style="background: rgba(255, 255, 255, 0); color: white; text-shadow: 2px 2px 5px #0000006e;">
                        <b>Chart</b> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart">
    <div class="container">
        <div class="row ">
            <div class="col-md mb-5">
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr class="thead">
                            <th>No</th>
                            <th>Product Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Subtotal</th>
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
                            <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                            <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                            <td class="nav-link text-dark" style="font-size: 15px">
                                <a href="<?= base_url('client/hapus_keranjang/') ?><?= $items['rowid'] ?>"><i class=" fas fa-trash"></i></a> </td>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                <br><br>
                <div class="checkout-left row">
                    <div class="col-md-4">
                        <h4>Subtotal</h4>
                        <?php
                        $no = 1;
                        foreach ($this->cart->contents() as $items) : ?>
                            <ul>
                                <li><?php echo $items['name'] ?>
                                    <i>-</i>
                                    <span>Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></span>
                                </li>
                                <i></i>
                            <?php endforeach; ?>
                            <hr>
                            <li style="color: black"> Total
                                <i>-</i>
                                <span>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.')  ?></span>
                            </li>
                            </ul><br><br><br>

                            <div class="information-wrapper">
                                <a class="submit check_out" href="<?= base_url('client/proses_bayar') ?>">CHECKOUT </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>