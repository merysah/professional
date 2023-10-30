<?php include('header.php') ?>
<div class="container-fluid p-0">
  <!-- Identification section -->
  <section class="bottom-section">
    <div class="w-50 mx-auto p-5 my-md-5 page-heading_section">
      <h1 class="text-uppercase text-center javanese page-title">Identification</h1>
      <div class="text-center">
        <img src="<?= img.'header_bottom_left.png' ?>" class="w-25" alt="">
        <img src="<?= img.'header_bottom_right.png' ?>" class="w-25" alt="">
      </div>
    </div>
    <div class="w-75 my-md-5 mx-auto">
      <div class="row">
        <div class="col-md-6 col-12">
          <p class="fs-2 text-uppercase text-center javanese text-nowrap">Facial Identification</p>
          <div class="card border-blue2 rounded-25 w-100 d-flex justify-content-center align-items-center id-box">
            <div class="img-border">
              <img src="<?= img.'identification/User_alt_light.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Access camera</p>

            <!-- <div class="text-center">
              <img src="<?= img.'identification/check_mark.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Done</p> -->

            <!-- <div class="text-center">
              <img src="<?= img.'identification/failed_mark.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Try again</p> -->
          </div>
          <div class="fs-4 javanese mt-5 w-75 mx-auto text-justify">
            <p class="mb-0">Please take a clear picture of your face using your laptop camera.</p>
            <p>Picture must be taken live and not uploaded.</p>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <p class="fs-2 text-uppercase text-center javanese text-nowrap">ID Identification</p>
          <div class="card border-blue2 rounded-25 w-100 d-flex justify-content-center align-items-center id-box">
            <div class="img-border">
              <img src="<?= img.'identification/ID.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Access camera</p>

            <!-- <div class="text-center">
              <img src="<?= img.'identification/check_mark.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Done</p> -->

            <!-- <div class="text-center">
              <img src="<?= img.'identification/failed_mark.png' ?>" class="w-80" alt="">
            </div>
            <p class="fs-3 text-center javanese mt-3">Try again</p> -->
          </div>
          <div class="fs-4 javanese mt-5 w-75 mx-auto text-justify">
            <p class="mb-0">Please present your identification for verification purposes. Take a clear picture of your identification using your laptop camera,</p>
            <p>Picture must be taken live and not uploaded.</p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn bg-grey3 text-white fs-3 px-5 pt-3 rounded-pill javanese">NEXT</button>
        <!-- <button class="btn bg-green text-white fs-3 px-5 pt-3 rounded-pill javanese">NEXT</button> -->
      </div>
    </div>
  </section>
</div>
<?php include('footer.php') ?>