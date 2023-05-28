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
            <div class="col-sm-12">
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= $title; ?></h3>

                        <div class="box-tools pull-right">
                            <a href="<?= base_url('/event'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Kembali</i></a>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <?php
                        $errors = session()->getFlashdata('errors');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach ($errors as $key => $value) { ?>
                                        <li><?= esc($value); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php  } ?>

                        <?php
                        echo form_open_multipart('event/prosesEdit/' . $event['id_event']);
                        ?>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nama Event</label>
                                <input type="text" class="form-control" name="nama_event" placeholder="Masukkan Nama Event" value="<?= $event['nama_event'] ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Tanggal Event</label>
                                <input type="date" class="form-control" name="tanggal_event" placeholder="Masukkan Tanggal Event" value="<?= $event['tanggal_event'] ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" class="form-control" id="preview_gambar" name="gambar">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <img src="<?= ($event['gambar']) ? base_url('gambar_event/' . $event['gambar']) : base_url('gambar_event/default.png') ?>?>" id="gambar_load" width="150" height="" alt="<?= $event['nama_event'] ?>">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea id="editor1" name="deskripsi" rows="10" cols="80"><?= $event['deskripsi'] ?></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-send-o"></i> Edit</button>
                    </div>
                    <?php
                    echo form_close();
                    ?>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>