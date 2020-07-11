<section class="content-header">
    <h1>Sales Report
        <small>Laporan Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li><a href="">Report</a></li>
        <li class="active">Penjualan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penjualan</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Grand Total</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td>
                                <?= $data->invoice ?><br>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>Detail</button>
                            </td>
                            <td><?= indo_date($data->date) ?></td>
                            <td><?= $data->customer_id == null ? "Umum" : $data->customer_name ?></td>
                            <td class="text-right"><?= indo_currency($data->total_price) ?></td>
                            <td class="text-right"><?= indo_currency($data->discount) ?></td>
                            <td class="text-right"><?= indo_currency($data->final_price) ?></td>
                            <td style="width: 130px;">
                                <a href="<?= site_url('sale/cetak/' . $data->sale_id); ?>" target="_blank" class="btn btn-warning btn-xs">
                                    <i class="fa fa-print"></i> print
                                </a>
                                <form action="<?= site_url('customer/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="customer_id" value="<?= $data->sale_id ?>">
                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
                                        <i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>