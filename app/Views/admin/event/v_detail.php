<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><?= $title ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="callout">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 5px;">
                                    <a href="<?= base_url('/event') ?>" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-mail-reply"></i> Kembali</a>
                                </div>
                                <div class="col-md-12">
                                    <table class="table">
                                        <tr>
                                            <th width="160px">Nama Event</th>
                                            <td width="20px">:</td>
                                            <td><?= $event['nama_event'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Event</th>
                                            <td>:</td>
                                            <td><?= $event['tanggal_event'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Gambar</th>
                                            <td>:</td>
                                            <td><img src="<?= base_url('gambar_event/' . $event['gambar']) ?>" style="height: 200px; width: 250px;" alt="<?= $event['nama_event'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <td>:</td>
                                            <td><?= $event['deskripsi'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
</div>