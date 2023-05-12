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
  <?php $currentPage = "experiences";
  include "includes/header.php"; ?>

  <main>
    <section class="min-vh-100 pt-10 pb-3 text-center text-white d-grid align-items-center" style="background: url('src/images/bg_experiences.jpg') no-repeat center center; background-size: cover">
      <div class="container">
        <h1 class="display-5 font-cormorant fw-bold mb-4">Eco Sanctuaries Experiences</h1>
        <div class="col-lg-5 mx-auto">
          <p class="mb-10">Discover paradise through a variety of experiences in and out of the sanctuary.</p>
          <a href="#" class="btn btn-beige text-uppercase fs-7 fw-bold rounded-0 font-cormorant" style="width: 200px; --bs-btn-padding-y: 13px;">Book now</a>
        </div>
      </div>
    </section>

    <section class="text-center d-grid align-items-center py-7">
      <div class="container">
        <div class="col-lg-10 mx-auto pb-7">
          <h2 class="display-6 font-cormorant fw-bold mb-4">Experiences within the Sanctuary</h2>
          <p class="mb-3">We connect guests to healing experiences that allow them to go within through activities such as yoga, sound, healing, and breathwork. We offer community-based and nature-based experiences that allow them to harness the healing powers of nature, while experiencing our biodiverse island and supporting local livelihood.</p>
          <p class="mb-0">We have an in house Kawan Restaurant and Bar (Kawan meaning flock of birds in native language) where the menu was crafted intentionally for guests to taste local and international flavors while using local, fresh, garden-grown produce. Through our restaurant, we are able to offer authentic, personal culinary experiences for our guests and visitors of Nacpan Beach. Private dining experiences and intimate banquets may be catered to. </p>
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <img src="src/images/experience/experience_1.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="src/images/experience/experience_2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="src/images/experience/experience_3.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="src/images/experience/yoga_1.jpg" alt="" class="img-fluid h-100 object-fit-cover">
        </div>
        <div class="col-lg-6 bg-beige p-3 p-lg-7 d-grid align-content-center justifcy-content-center">
          <h3 class="text-uppercase fw-medium fs-7 mb-2" style="letter-spacing: 6px">Wellness</h3>
          <h4 class="fs-2 fw-bold font-cormorant mb-4">Yoga and mindfulness retreats</h4>
          <p class="mb-3">Our space was designed as a venue for people to come together and come in contact with nature and themselves through yoga and mindfulness retreats.</p>
          <p class="mb-0">We customize programs with our partner SoulSpeak Mindfulness and Yoga Retreats, and also welcome other groups who wish to hold space in our sanctuary. For pre-scheduled multi-day retreats, you may view the schedules posted on our pages. Contact us if you want to collaborate.</p>
        </div>
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