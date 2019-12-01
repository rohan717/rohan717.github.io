<!-- ========== FOOTER ========== -->
<footer id="SVGcurvedShape" class="svg-preloader">
  <!-- SVG Shape -->
  <figure>
    <img class="js-svg-injector" src="assets/img/curved-2.svg" alt="Image Description"
         data-parent="#SVGcurvedShape">
  </figure>
  <!-- End SVG Shape -->

  <!-- Content -->
  <div class="bg-dark">
    <div class="container space-2 space-md-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-4 d-flex align-items-start flex-column mb-7 mb-lg-0">
          <!-- Logo -->
          <a class="d-flex align-items-center mb-lg-auto" href="../home/index.html" aria-label="Front">
          <img src="assets/img/logo.png" alt="">
            <!-- <span class="brand brand-light">Front</span> -->
          </a>
          <!-- End Logo -->

          <p class="small text-white-50 mb-0">© Teetz. 2019 Htmlstream.<br>All rights reserved.</p>
        </div>

        <div class="col-6 col-md-4 col-lg-2 mb-7 mb-md-0">
          <h3 class="h6 text-white">About</h3>

          <!-- List Group -->
          <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
            <li><a class="list-group-item list-group-item-action" href="../pages/about-agency.html">Why us</a></li>
            <li><a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Our Team</a></li>
            <li><a class="list-group-item list-group-item-action" href="../pages/careers.html">Our Mission</a></li>
            <li><a class="list-group-item list-group-item-action" href="../pages/grid-right-sidebar.html">Blog</a></li>
          </ul>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-4 col-lg-2 mb-7 mb-md-0">
          <h3 class="h6 text-white">Services</h3>

          <!-- List Group -->
          <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
            <li><a class="list-group-item list-group-item-action" href="../account/dashboard.html">Dental Implants</a></li>
            <li><a class="list-group-item list-group-item-action" href="../account/my-tasks.html">Root Canal</a></li>
            <li><a class="list-group-item list-group-item-action" href="../account/projects.html">Teeth Whitening</a></li>
            <li><a class="list-group-item list-group-item-action" href="../account/invite-friends.html">Wisdom Teeth</a></li>
          </ul>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-4 col-lg-3">
          <h3 class="h6 text-white">Contacts</h3>

          <!-- Address -->
          <address class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
            <a class="list-group-item list-group-item-action" href="#">+1 (062) 109-9222</a>
            <a class="list-group-item list-group-item-action" href="mailto:support@htmlstream.com">support@htmlstream.com</a>
            <a class="list-group-item list-group-item-action" href="#">153 Williamson Plaza, Maggieberg, MT 09514</a>
          </address>
          <!-- End Address -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Content -->
</footer>
<!-- ========== END FOOTER ========== -->


<script src="<?php echo $url?>assets/js/jquery.min.js"></script>
<script src="<?php echo $url?>assets/js/jquery-migrate.min.js"></script>
<script src="<?php echo $url?>assets/js/popper.min.js"></script>
<script src="<?php echo $url?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo $url?>assets/js/slick.js"></script>
<script src="<?php echo $url?>assets/js/svg-injector.min.js"></script>
<script src="<?php echo $url?>assets/js/hs.megamenu.js"></script>
<script src="<?php echo $url?>assets/js/jquery.fancybox.min.js"></script>
<!-- JS Front -->
<script src="<?php echo $url?>assets/js/hs.core.js"></script>
<script src="<?php echo $url?>assets/js/hs.slick-carousel.js"></script>
<script src="<?php echo $url?>assets/js/hs.header.js"></script>
<script src="<?php echo $url?>assets/js/hs.unfold.js"></script>
<script src="<?php echo $url?>assets/js/hs.svg-injector.js"></script>
<script src="<?php echo $url?>assets/js/hs.fancybox.js"></script>

<script>
  $(window).on('load', function () {

    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 767.98,
      hideTimeOut: 0
    });

        // initialization of svg injector module
        $.HSCore.components.HSSVGIngector.init('.js-svg-injector');

    
  });

  $(document).on('ready', function () {
    // initialization of slick carousel
    $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
    $.HSCore.components.HSFancyBox.init('.js-fancybox');

    $.HSCore.components.HSHeader.init($('#header'));

    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));
  });
</script>