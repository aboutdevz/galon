<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="<?= site_url('owner/cetakJual/'); ?>" class="btn btn-icon icon-left btn-danger" target="__blank"><i class="fas fa-file"></i>Cetak Penjualan</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['tanggal']; ?></td>
                                            <td><?= $t['pemasukan']; ?></td>
                                            <td><?= $t['pengeluaran']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center"> <h4> Jumlah Pendapatan</h4></td>
                                        <td align="left">
                                            <?php foreach ($pendapatan as $p): ?>
                                                <h4>Rp.
                                                    <?= number_format($p['jumlah_pendapatan'], 0) ?>
                                                </h4>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>