<?php include('header.php') ?>
<div class="container-fluid p-0">
  <!-- Professional Courses section -->
  <section>
    <div class="w-50 mx-auto p-5 my-md-5 page-heading_section">
      <h1 class="text-uppercase text-center javanese page-title">Professional Courses</h1>
      <div class="text-center">
        <img src="<?= img.'header_bottom_left.png' ?>" class="w-25" alt="">
        <img src="<?= img.'header_bottom_right.png' ?>" class="w-25" alt="">
      </div>
    </div>
    <div class="my-md-5 my-3 w-75 mx-auto">
      <div class="rounded-25 bg-white shadow p-4 fs-4 javanese text-justify box-text">
        <p class="m-0">This page Features courses highly sought after in the global market and by employers worldwide. We've curated courses from our partners that resonate with the audience of the Manchester Professional Exam. Explore the courses below and reach out directly to the respective university or college for any inquiries. They're here to assist you.</p> 
      </div>
    </div>
  </section>

  <!-- Featured Courses section -->
  <section class="bottom-section">
    <div class="my-md-5 w-50 mx-auto heading-section">
      <p class="h1 text-uppercase text-center javanese py-5">Featured Courses and Professional Certificate Programs</p>
      <img src="<?= img.'heading-line.png' ?>" class="heading-line-left" alt="">
      <img src="<?= img.'heading-line.png' ?>" class="heading-line-right" alt="">
    </div>
    <div class="my-md-5 my-3 w-75 mx-auto row">
      <div class="col-md-3 col-12 bg-white shadow rounded-15 fs-4 mb-5 h-fc">
        <form action="">
          <p class="fw-bold">Filter your Search</p>
          <div class="form-check">
            <input class="form-check-input border-blue2" type="checkbox" value="" id="nonCredit">
            <label class="form-check-label" for="nonCredit">
              Professional non-credit
            </label>
          </div>
          <div class="form-check border-bottom-blue2 pb-3">
            <input class="form-check-input border-blue2" type="checkbox" value="" id="creditBearing" checked>
            <label class="form-check-label" for="creditBearing">
            Professional credit bearing
            </label>
          </div>
          <div class="my-3 text-center">
            <label for="byCountry" class="form-label">Search by Country</label>
            <input type="text" class="form-control border-blue2" id="byCountry">
          </div>
          <div class="mb-3 text-center">
            <label for="bySchool" class="form-label">Search by School</label>
            <input type="text" class="form-control border-blue2" id="bySchool">
          </div>
          <div class="mb-3 text-center">
            <label for="byMajor" class="form-label">Search by Major</label>
            <input type="text" class="form-control border-blue2" id="byMajor">
          </div>
        </form>
      </div>
      <div class="col-md-9 col-12">
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/adelphi.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Adelphi University</p>
              <p class="fs-2 m-0">Strategic Leadership</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">3600$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">12</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">18</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/cornell.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Cornell University</p>
              <p class="fs-2 m-0">Financial Management</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">2400$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">10</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">17</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/adelphi.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Adelphi University</p>
              <p class="fs-2 m-0">Strategic Leadership</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">3600$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">12</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">18</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/cornell.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Cornell University</p>
              <p class="fs-2 m-0">Financial Management</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">2400$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">10</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">17</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/adelphi.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Adelphi University</p>
              <p class="fs-2 m-0">Strategic Leadership</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">3600$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">12</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">18</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/cornell.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Cornell University</p>
              <p class="fs-2 m-0">Financial Management</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">2400$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">10</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">17</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <div class="bg-white shadow rounded-15 p-3 my-2">
          <div class="row">
            <div class="col-2 col-sm-2 m-auto text-center px-0">
              <img src="<?= img.'professional_courses/adelphi.png' ?>" class="w-80 program-img">
            </div>
            <div class="col-10 col-sm-8 fw-bold">
              <p class="text-purple fs-5 m-0">Adelphi University</p>
              <p class="fs-2 m-0">Strategic Leadership</p>
            </div>
            <div class="col-12 col-sm-2 text-center">
              <span class="fs-6">Tuition</span> <span class="fs-4 fw-bold">3600$</span>
            </div>
          </div>
          <div class="row">
            <div class="row text-grey my-3 fs-6 col-xl-6 offset-lg-1 col-lg-9 col-md-12 mx-auto mx-lg-5">
              <div class="col-6 px-0">
                <p class="text-grey">Award : <span class="fw-bold text-grey">Certificate</span></p>
                <p class="text-grey">Mode Of Study : <span class="fw-bold text-grey">Online</span></p>
              </div>
              <div class="col-6 px-0">
                <p class="text-grey">Total Credits : <span class="fw-bold text-grey">12</span></p>
                <p class="text-grey">Hours : <span class="fw-bold text-grey">18</span></p>
              </div>
            </div>
          </div>
          <div class="row w-90 mx-auto">
            <div class="col-sm-6 col-12 text-center mb-3 my-sm-auto fs-6 px-0">
              <span class="badge-green rounded-pill right-separator">Online</span>
              <span class="badge-orange rounded-pill">Certificate</span>
            </div>
            <div class="col-sm-6 col-12 text-center">
              <button class="border-green2 rounded bg-white w-75"><a href="" class="text-green fs-4">Program Page</a></button>
            </div>
          </div>
        </div>
        <p class="fs-4 text-center mt-3">
          Load More 
          <i class="fa-solid fa-angle-right fa-rotate-90"></i>
        </p>
      </div>
    </div>
  </section>

</div>
<?php include('footer.php') ?>