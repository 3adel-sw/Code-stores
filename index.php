<?php
include('layouts/header.php')
?>

<?php
include('layouts/navbar.php')
?>

    <!-- End Header  -->
  <!-- Image Background -->
  <img src="assets/img/background-page.png" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100vh position-absolute " />
  <div class="container mt-5">
      <div class="row g-5 content-slider home">
          <!-- Image 1 -->
          <div class="col-6 col-md-3 mb-4">
              <a href="index.php">
                  <div class="image-container position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer ">
                      <h2 class="text-overlay home top-20 position-absolute start-50 translate-middle  d-inline-block text-truncate animate__backOutRight light-color" >GENERAL</h2>
                  <img src=" assets/img/home.png" alt="home 1" class=" w-100 h-100 rounded-5" style="object-fit: cover;">
              </a>
          </div>
      </div>
      <!-- Image 2 -->
      <div class="col-6 col-md-3 mb-4">
          <a href="locker-packe.php">
              <div class="image-container  position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer ">
                  <h2 class="text-overlay top-20 position-absolute start-50 translate-middle  d-inline-block text-truncate animate__backOutRight light-color" >Locker</h2>
                  <img src="assets/img/home-1.png" alt="home 2" class=" w-100 h-100 rounded-5" style="object-fit: cover;">
          </a>
      </div>
  </div>
  <!-- Image 3 -->
  <div class="col-6 col-md-3 mb-4">
      <a href="store.php">
          <div class="image-container position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer">
              <h2 class="text-overlay home top-20 position-absolute start-50 translate-middle  d-inline-block text-truncate animate__backOutRight light-color" >Store</h2>
              <img src="assets/img/home-2.png" alt="home 3" class=" w-100 h-100 rounded-5" style="object-fit: cover;">
          </div>
      </a>
  </div>
  <!-- Image 4 -->
  <div class="col-6 col-md-3 mb-4">
      <a href="store.php ">
          <div class="image-container position-relative  custom-max-width rounded-5 border border-white border-5  cursor-pointer">
              <h2 class="text-overlay home top-20 position-absolute start-50 translate-middle  d-inline-block text-truncate animate__backOutRight light-color" >Trading</h2>
                    <img src=" assets/img/home-3.png" alt="home 4" class=" w-100 h-100 rounded-5" style="object-fit: cover;">
          </div>
      </a>
  </div>
  </div>
  </div>
  
    <?php
include('layouts/footer.php')
?>