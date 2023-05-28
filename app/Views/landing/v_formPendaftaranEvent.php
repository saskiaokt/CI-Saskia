<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url('gambar_event/' . $event['gambar']) ?>" width="50%" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url('gambar_event/' . $event['gambar']) ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Gambar</small>
                            <a class="h5 d-block text-white mt-1 mb-0"><?= $event['nama_event'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-success ps-4">Event</h6>
                    <h2 class="mt-2"><?= $event['nama_event'] ?></h2>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-calendar text-success me-2"></i><?= date('d F Y', strtotime($event['tanggal_event'])) ?></h6>
                        <h6 class="mb-0"><i class="fa fa-user text-success me-2"></i>Admin </h6>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
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
                    </div>
                </div>
                <div class="row mt-2">
                    <?= form_open_multipart('landing/prosesPendaftaran'); ?>
                    <?= csrf_field(); ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" id="nama_lengkap" value="<?= old('nama_lengkap') ?>" autofocus required>
                            <input type="hidden" class="form-control" name="id_event" id="id_event" value="<?= $event['id_event'] ?>">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" id="email" value="<?= old('email') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="wa">Nomor Whatsapp</label>
                            <input type="number" class="form-control" name="wa" placeholder="Masukkan Nomor Whatsapp" id="wa" value="<?= old('wa') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option class="Laki-laki">Laki-laki</option>
                                <option class="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" cols="10" rows="5" placeholder="Masukkan Alamat Lengkap" required><?= old('alamat') ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-success py-sm-3 px-sm-4 rounded-pill animated slideInRight">Daftar</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!-- About End -->