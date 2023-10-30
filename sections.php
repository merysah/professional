<?php include('header.php') ?>
<div class="container-fluid p-0">
  <!-- Sections section -->
  <section>
    <div class="w-60 mx-auto p-5 my-md-5 page-heading_section">
      <h1 class="text-uppercase text-center javanese page-title">Section 1</h1>
      <div class="text-center">
        <img src="<?= img.'header_bottom_left.png' ?>" class="w-25" alt="">
        <img src="<?= img.'header_bottom_right.png' ?>" class="w-25" alt="">
      </div>
    </div>
  </section>

  <!-- General Knowledge section -->
  <section class="bottom-section">
    <div class="my-md-5 w-60 mx-auto heading-section">
      <p class="h1 text-uppercase text-center javanese py-md-5 pt-5">General Knowledge</p>
      <!-- <p class="h1 text-uppercase text-center javanese py-md-5 pt-5">True or False Questions</p> -->
      <!-- <p class="h1 text-uppercase text-center javanese py-md-5 pt-5">Technical Expertise</p> -->
      <!-- <p class="h1 text-uppercase text-center javanese py-md-5 pt-5">Risk Mitigation and Problem Solving</p> -->
      <!-- <p class="h1 text-uppercase text-center javanese py-md-5 pt-5">In-depth Academic Comprehension</p> -->
      <img src="<?= img.'heading-line.png' ?>" class="heading-line-left" alt="">
      <img src="<?= img.'heading-line.png' ?>" class="heading-line-right" alt="">
    </div>
    <div class="bg-blue3 rounded-pill shadow text-white d-inline-block px-4 py-2 w-fc d-flex mx-auto text-center align-items-center">
      <div class="fs-4 text-white lh-1 pe-2">00<div class="text-white fs-6">minutes</div></div>
      <span class="text-white">:</span>
      <div class="fs-4 text-white lh-1 ps-2">30<div class="text-white fs-6">seconds</div></div> 
    </div>
    <div class="w-75 mx-auto mt-md-5 mt-3 text-justify fs-4 box-text">
      <p>Today's grandparents are joining their grandchildren on social media, but the different generations' online habits couldn't be more different. In the UK the over-55s are joining Facebook in increasing numbers, meaning that they will soon be the site's second biggest user group, with 3.5 million users aged 55-64 and 2.9 million over-65s.</p>
      <p>Sheila, aged 59, says, 'I joined to see what my grandchildren are doing, as my daughter posts videos and photos of them. It's a much better way to see what they're doing than waiting for letters and photos in the post. </p>
    </div>
    <div class="box border-blue2 bg-white rounded-15 w-75 mx-auto my-md-5 my-3 fs-3 box-text text-center p-4 fw-bold">
      Day dreaming helps in formation of new ideas.
      <div class="d-flex justify-content-around w-50 mt-md-5 mt-3 mx-auto answer-options">
        <button class="text-uppercase mt-3 purple-button bg-blue3 shadow fs-3 text-white">TRUE</button>
        <button class="text-uppercase mt-3 purple-button bg-blue3 shadow fs-3 text-white">FALSE</button>
      </div>
    </div>
    <div class="w-75 mx-auto my-md-3 d-flex justify-content-between align-items-center">
      <button class="text-uppercase purple-button shadow fs-3"><a href="" class="text-white">BACK</a></button>
      <span class="fs-3">1/10</span>
      <button class="text-uppercase purple-button shadow fs-3"><a href="" class="text-white">NEXT</a></button>
    </div>
  </section>
</div>
<?php include('footer.php') ?>