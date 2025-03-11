
<?php
include('layouts/header.php')
?>

<?php
include('layouts/navbar.php')
?>

    <!-- Image Background -->
    <img src="assets/img/background-page.png" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100vh position-absolute " />
    <div class="container  mt-4">
        <div class="row g-5 position-relative content-slider store">
            <!-- Image 1 -->
            <div class="col-6 col-md-4">
                <div class="image-container store left  position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer ">
                    <h2 class="text-overlay store top-15 position-absolute start-50 translate-middle active d-inline-block text-truncate animate__backOutRight light-color">THE CLASSIC</h2>
                  <img src=" assets/img/store-1.png" alt="store 1" class="rounded-5 w-100 h-100" style="object-fit: cover;">
                        <div class="custom-text-store text-center feedly-color"><span>25,000BP</span></div>
                </div>

            </div>
            <!-- Image 2 -->
            <div class="col-6 col-md-4">
                <div class="image-container store position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer">
                    <h2 class="text-overlay store top-15 position-absolute start-50 translate-middle d-inline-block text-truncate animate__backOutRight light-color" >THE BEST</h2>
                    <img src=" assets/img/store-2.png" alt="store 1" class="rounded-5 w-100 h-100" style="object-fit: cover;">
                        <div class="custom-text-store text-center feedly-color"><span>25,000BP</span></div>
                </div>

            </div>
            <!-- Image 3 -->
            <div class="col-6 col-md-4">
                <div class="image-container store right  position-relative  custom-max-width rounded-5 border border-white border-5 cursor-pointer ">
                    <h2 class="text-overlay store top-15 position-absolute start-50 translate-middle d-inline-block text-truncate animate__backOutRight light-color" >MY BEST</h2>
                    <img src="assets/img/store-3.png" alt="store 1" class="rounded-5 w-100 h-100" style="object-fit: cover;">
                    <div class="custom-text-store  text-center feedly-color"><span>25,000BP</span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    <footer class="footer-store text-light  text-center w-100  py-3 " style="
    top: 200px;
    position: relative;
    margin-top: 25px;
    margin-bottom: 0;
">
        <div class="container-footer-store">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="fs-3 text-footer light-color">MY PACKS</h5>


                    <p></p>
                </div>

                <div class="col-md-4 overflow-hidden">
                    <div class="rotated-div " style="
    position: absolute;
  right: 440px;
    bottom: 20px;">
                        <svg class="responsive-svg" viewBox="0 0 4 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 84L2 4.30955e-08" stroke="white" stroke-width="4" />
                        </svg>
                    </div>
                    <h5 class="fs-3 text-footer light-color"> STANDARD PACKS </h5>
                    <div class="svg-wrapper1" data-svg-wrapper style="
    position: absolute;
    top: 0;
    border-radius: 20px" ;>
                        <svg class="responsive-svg" viewBox="0 0 4 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 84L2 4.30955e-08" stroke="white" stroke-width="4" />
                        </svg>
                    </div>
                    <div class="line-footer d-block m-0 rounded-3 d-none d-md-block"></div>

                    <p></p>
                </div>

                <div class="col-md-4 overflow-hidden">
                    <h5 class="fs-3 text-footer light-color">PROMO PACKS</h5>
                    <div class="line-footer d-block m-0 rounded-3 d-none d-md-block"></div>
                    <p></p>
                </div>
            </div>
        </div>
    </footer>
    
  <?php
include('layouts/footer.php')
?>

<!-- 
link to the project 
http://localhost/Project-work/Ballerz-Websit/ -->