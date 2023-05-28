<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><?= $title ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- COLOR PALETTE -->
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data <?= $title; ?></h3>
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
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>

                        <?php
                        echo form_open_multipart('profil_website/prosesUpdate/' . $website['id_profil_website']);
                        ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Website</label>
                                    <input type="text" class="form-control" name="nama_website" placeholder="Masukkan Nama Website" value="<?= $website['nama_website'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Website" value="<?= $website['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Website 1</label>
                                    <input type="file" class="form-control" id="preview_gambar_web1" name="gambar_web1">
                                </div>
                                <div class="form-group">
                                    <img src="<?= ($website['gambar_web1']) ? base_url('gambar_profil_website/' . $website['gambar_web1']) : base_url('gambar_profil_website/default.png') ?>" id="gambar_load_sekolah1" width="100" height="" alt="<?= $website['nama_website'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Website 2</label>
                                    <input type="file" class="form-control" id="preview_gambar_web2" name="gambar_web2">
                                </div>
                                <div class="form-group">
                                    <img src="<?= ($website['gambar_web2']) ? base_url('gambar_profil_website/' . $website['gambar_web2']) : base_url('gambar_profil_website/default.png') ?>" id="gambar_load_sekolah2" width="100" height="" alt="<?= $website['nama_website'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat Website</label>
                                    <textarea name="alamat" class="form-control" id="" cols="5" rows="4"><?= $website['alamat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Logo</label>
                                    <input type="file" class="form-control" id="preview_gambar_logo" name="logo">
                                </div>
                                <div class="form-group">
                                    <img src="<?= ($website['logo']) ? base_url('gambar_profil_website/' . $website['logo']) : base_url('gambar_profil_website/default.png') ?>" id="gambar_load_logo" width="100" height="" alt="<?= $website['nama_website'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Whatsapp Website</label>
                                    <input type="text" name="wa" class="form-control" placeholder="Masukkan Nomor Whatsapp" value="<?= $website['wa'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Web Landing Home</label>
                                    <textarea name="deskripsi_atas" class="form-control" id="" cols="5" rows="4"><?= $website['deskripsi_atas'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Web Landing Profil Sekolah</label>
                                    <textarea name="deskripsi_bawah" class="form-control" id="" cols="5" rows="4"><?= $website['deskripsi_bawah'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-edit"></i> Edit</button>
                    </div>
                    <?php
                    echo form_close();
                    ?>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>