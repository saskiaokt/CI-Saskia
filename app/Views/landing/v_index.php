<?php

function tanggal_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}

?>
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- About Start -->
<div class="container-xxl py-5" id="profil-website">
    <br><br>
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Profil Website</h6>
                    <h2 class="mt-2"><?= $website['nama_website'] ?></h2>
                </div>
                <p class="mb-4"><?= $website['deskripsi_bawah'] ?></p>
                <p>
                    Alamat : <?= $website['alamat'] ?>
                </p>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <h6 class="mb-3"><i class="fa fa-check text-success me-2"></i>Jumlah Event : <?= $jumlahEvent ?></h6>
                        <h6 class="mb-0"><i class="fa fa-check text-success me-2"></i>jumlah Seluruh Pendaftar : <?= $jumlahPendaftar ?></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-success rounded-pill px-4 me-3" href="mailto:<?= $website['email'] ?>" target="_blank">Kirim Email</a>
                    <a target="_blank" class="btn btn-outline-success btn-square" href="https://wa.me/62<?= $website['wa'] ?>?text=Hallo Pak/Bu!!! %0ASaya izin bertanya perihal informasi Penerimaan Peserta Didik Baru (PPDB) di <?= $website['nama_website'] ?>. %0APertanyaan : "><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url() ?>/gambar_profil_website/<?= $website['gambar_web2'] ?>" width="100%" style="border-radius: 10%;" alt="Gambar <?= $website['nama_website'] ?>">
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Event -->
<div class="container-xxl py-5" id="event">
    <br>
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-success ps-4">Kumpulan</h6>
            <h2 class="mt-2">Event</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    <?php foreach ($event as $row) { ?>
                        <div class="testimonial-item border rounded p-4">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon ">
                                    <img src="<?= base_url('gambar_event/' . $row['gambar']) ?>" width="100%" alt="Foto <?= $row['nama_event'] ?>">
                                </div>
                                <h5 class="mb-3"><?= $row['nama_event'] ?></h5>
                                <a class="btn px-3 mt-auto mx-auto" href="<?= base_url('/landing/detailEvent/' . $row['id_event']) ?>">Detail <i class="fa fa-arrow-circle-right m-1"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>