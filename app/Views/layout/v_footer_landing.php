<!-- Footer Start -->
<div class="container-fluid bg-success text-light footer wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5 px-lg-5">
    <div class="row g-5">
      <div class="col-md-6 col-lg-6">
        <h5 class="text-white mb-4">Kontak</h5>
        <p><i class="fa fa-map-marker-alt me-3"></i><?= $website['alamat'] ?></p>
        <p><i class="fa fa-envelope me-3"></i><?= $website['email'] ?></p>
        <div class="d-flex pt-2">
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <h5 class="text-white mb-4">Lokasi</h5>
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.354334354859!2d106.81863438680998!3d-6.173958458599926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1684090171020!5m2!1sid!2sid" width="90%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
      </div>
    </div>
  </div>
  <div class="container px-lg-5">
    <div class="copyright">
      <div class="row">
        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#"><?= $website['nama_website'] ?></a>, All Right Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed By <a class="border-bottom" href="#">Admin <?= $website['nama_website'] ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/wow/wow.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/template-landing/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url() ?>/template-landing/js/main.js"></script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(2000, 0).slideUp(2000, function() {
      $(this).remove();
    });
  }, 9000);
</script>
</body>

</html>