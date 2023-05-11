<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Eco Sanctuaries El Nido" />
  <meta property="og:description" content="Eco Sanctuaries is a nature lodge and retreat sanctuary in Nacpan Beach, El Nido Palawan offering accommodations, culinary offerings, nature-based and wellness experiences." />
  <meta property="og:url" content="https://www.ecosanctuarieselnido.com/" />
  <meta property="og:image" content="https://www.ecosanctuarieselnido.com/src/images/bg_home.jpg" />

  <title>Eco Sanctuaries El Nido</title>

  <link rel="apple-touch-icon" sizes="180x180" href="src/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="src/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="src/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="src/images/favicon/site.webmanifest">

  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="src/css/main.css">
</head>

<body>
  <?php $currentPage = "home";
  include "includes/header.php"; ?>

  <main>
    <section class="min-vh-100 pt-10 text-center text-white d-grid justify-content-center align-content-center" style="background: url('src/images/bg_home.jpg') no-repeat center top;">
      <div class="container">
        <img src="src/images/logo_eco_sanctuaries.svg" alt="Eco Sanctuaries logo" class="logo mb-5">
        <h1 class="display-5 font-cormorant fw-bold mb-4">A Sanctuary for People and Nature</h1>
        <div class="col-lg-5 mx-auto">
          <p class="mb-10">We are a sanctuary for people and nature in Nacpan beach, located in one of the most biodiverse islands in the Philippines and one of the world's best islands, El Nido, Palawan.</p>
          <a href="#" class="btn btn-beige text-uppercase fs-7 fw-bold rounded-0 font-cormorant" style="--bs-btn-padding-x: 61px; --bs-btn-padding-y: 13px;">Book now</a>
        </div>
      </div>
    </section>

    <section class="text-center d-grid justify-content-center align-content-center" style="height: 446px;">
      <div class="container">
        <h2 class="display-6 font-cormorant fw-bold mb-3">We are more than just an accommodation</h2>
        <div class="col-lg-5 mx-auto">
          <p class="mb-4">We are a sanctuary for people and nature in Nacpan beach, located in one of the most biodiverse islands in the Philippines and one of the world's best islands, El Nido, Palawan.</p>
          <a href="#" class="btn btn-dark text-uppercase fs-7 fw-bold rounded-0 font-cormorant" style="--bs-btn-padding-x: 61px; --bs-btn-padding-y: 13px;">Learn more</a>
        </div>
      </div>
    </section>

    <section class="bg-beige text-white">
      <div class="container py-7">
        <h2 class="display-6 font-cormorant fw-bold text-center mb-7">The Eco Sanctuaries Experience</h2>

        <div class="row row-cols-3 g-3">
          <div class="col position-relative">
            <img src="src/images/home/nature_lodges.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">Nature Lodges</h3>
          </div>

          <div class="col position-relative">
            <img src="src/images/home/sustainability.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">Sustainability</h3>
          </div>

          <div class="col position-relative">
            <img src="src/images/home/wellness_activities.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">wellness activities</h3>
          </div>

          <div class="col position-relative">
            <img src="src/images/home/ecotourism.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">Ecotourism</h3>
          </div>

          <div class="col position-relative">
            <img src="src/images/home/culinary_offerings.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">Culinary offerings</h3>
          </div>

          <div class="col position-relative">
            <img src="src/images/home/local_livelihood.jpg" alt="" class="img-fluid">
            <h3 class="fs-5 position-absolute d-none">Local livelihood</h3>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h2 class="display-6 font-cormorant fw-bold mb-3">Testimonials</h2>
      </div>
    </section>
  </main>

  <?php include "includes/footer.php"; ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="src/js/main.js"></script>
</body>

</html>