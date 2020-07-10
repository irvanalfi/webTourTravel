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
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td><?= $data->invoice ?></td>
                            <td><?= $data->date ?></td>
                            <td><?= $data->customer_id ?></td>
                            <td><?= $data->total_price ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->final_price ?></td>
                            <td class="text-center" width="160px">

                                <a href="<?= site_url('sale/cetak/' . $data->sale_id); ?>" class="btn btn-warning btn-xs">
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