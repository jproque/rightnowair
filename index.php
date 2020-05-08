<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Right Now Air Solutions</title>

  <?php include("includes/head.php"); ?>

  <style>
    .bg-transparent.scrolled {
      background: black !important;
      transition: 0.75s ease;
    }
    .navbar-collapse.scrolled {
      background: black !important;
      transition: 0.75s ease;
    }

    @media (max-width: 990px) {
      .navbar-collapse {
        background: black;
        padding: 20px;
        border-radius: 1rem !important;
      }
    }
    .badge-secondary {
      background: rgb(57,178,97) !important;
    }
  </style>

</head>
<body>
  <?php include("includes/navigation.php"); ?>

  <!-- start of carousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- carsousel image #1 for desktop -->
        <img src="assets/home-01.jpg" class="w-100 d-none d-md-block" alt="...">
        <!-- carsousel image #1 for mobile -->
        <img src="assets/mobile-home-01.jpg" class="w-100 d-block d-sm-block d-md-none" alt="...">
      </div>
      <div class="carousel-item">
        <!-- carsousel image #2 for desktop -->
        <img src="assets/home-02.jpg" class="w-100 d-none d-md-block" alt="...">
        <!-- carsousel image #2 for mobile -->
        <img src="assets/mobile-home-02.jpg" class="w-100 d-block d-sm-block d-md-none" alt="...">
      </div>
      <div class="carousel-item">
        <!-- carsousel image #3 for desktop -->
        <img src="assets/home-03.jpg" class="w-100 d-none d-md-block" alt="...">
        <!-- carsousel image #3 for mobile -->
        <img src="assets/mobile-home-03.jpg" class="w-100 d-block d-sm-block d-md-none" alt="...">
      </div>
    </div>
</div>
<!-- end of carousel -->

<!-- start of service descriptions (text below carousel) -->
<div class="container marketing mx-auto mt-5 mb-5 text-center">
  <div class="row">
    <div class="col-lg-3">
      <img src="assets/rna-maintenance.png">
      <h2 class="mt-4">Monthly Maintenance</h2>
      <p class="text-secondary">We offer monthly commercial maintenance services to ensure that the resources keeping your environment clean, healthy, and comfortable continue to operate efficiently and trouble free.</p>
      <p><a class="btn btn-outline-success mb-3" href="maintenance.php" role="button">Learn More</a></p>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="assets/rna-buildouts.png">
      <h2 class="mt-4">System Enhancements</h2>
      <p class="text-secondary">Our team delivers innovative solutions by finding opportunities to improve energy consumption and air quality. We also rebuild and repair your current system to prevent frequent system failures.</p>
      <p><a class="btn btn-outline-success mb-3" href="system_enhancements.php" role="button">Learn More</a></p>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="assets/rna-new-unit-installs.png">
      <h2 class="mt-4">New Unit<br> Installs</h2>
      <p  class="text-secondary">We provide unit installation and post-sale system service for new air conditioning units. We also offer a variety of the latest energy efficient HVAC units from industry leaders to keep you cool and save you money.</p>
      <p><a class="btn btn-outline-success mb-3" href="services.php" role="button">Learn More</a></p>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="assets/rna-uv-light.png" height="92px">
      <h2 class="mt-4">UV Light<br> Installs <span class="badge badge-secondary">NEW</span></h2>
      <p  class="text-secondary">We provide unit installation and post-sale system service for new air conditioning units. We also offer a variety of the latest energy efficient HVAC units from industry leaders to keep you cool and save you money.</p>
      <p><a class="btn btn-outline-success mb-3" href="uv_lights.php" role="button">Learn More</a></p>
    </div><!-- /.col-lg-3 -->
  </div><!-- /.row -->
</div>
  <!-- end of service descriptions (text below carousel) -->

  <!-- satisfaction guranteed section (start) -->
  <div class="row featurette my-5">
  <div class="col-md-5 order-md-1">
    <img src="assets/satisfaction-guaranteed.jpg" class="img-fluid align-self-start pr-3" alt="Responsive image">
  </div>
    <div class="col-md-7 order-md-2 align-self-start mt-5">
      <h2 class="featurette-heading mb-2 pl-2 text-muted">We <span style="color: #39B261;">guarantee</span> that:</h2>
      <ul class="list-unstyled">
        <li class="media mt-5">
          <img src="assets/icon-live-person.png" class="pr-3 align-self-center">
          <div class="media-body">
            <h4 class="mt-2 mb-1">You will speak with <span style="color: #39B261;">real people</span>.</h4>
          </div>
        </li>
        <li class="media my-4 mt-5">
          <img src="assets/icon-clean.png" class="pr-3 align-self-center">
          <div class="media-body">
            <h4 class="mt-2 mb-1">We will keep your property <span style="color: #39B261;">clean</span>.</h4>
          </div>
        </li>
        <li class="media mt-5">
          <img src="assets/icon-diagnose.png" class="pr-3 align-self-center">
          <div class="media-body">
            <h4 class="mt-2 mb-1">We will never guess, we'll <span style="color: #39B261;">diagnose</span> the exact problem.</h4>
          </div>
        </li>
        <li class="media mt-5">
          <img src="assets/icon-on-time.png" class="pr-3 pl-2 align-self-center">
          <div class="media-body">
            <h4 class="mt-2 mb-1">We will be <span style="color: #39B261;">on time</span> for your appointment.</h4>
          </div>
        </li>
      </ul>
  </div>
</div>

  <?php include("includes/manufacturers.php"); ?>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/scripts.php"); ?>

  <script>
    $(window).scroll(function(){
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
    });
  </script>
</body>

</html>
