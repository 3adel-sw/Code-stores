<?php
include('layouts/header.php')
?>
<?php
include('layouts/navbar.php')
?>
        <!-- Image Background -->
        <img src="assets/img/background-page.png" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100 position-absolute " />
    <!-- Start Buy Points -->
    <!-- Buy Points Section -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="container-box p-4 col-md-8 border border-white border-4">
            <h2 class="text-light">BALL POINTS</h2>
            <!-- First Section -->
            <div id="pointsSection">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card  box-card text-center  text-white">
                            <div class="card-body">
                                <h5 class="card-title">6,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="70" alt="image-money">
                                <p class="card-text">EGP 1,250</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card  box-card text-center  text-white">
                            <div class="card-body">
                                <h5 class="card-title">11,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="70" alt="image-money">
                                <p class="card-text">EGP 2,300</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  box-card text-center  text-white">
                            <div class="card-body">
                                <h5 class="card-title">20,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="70" alt="image-money">
                                <p class="card-text">EGP 4,200</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Section (Initially Hidden) -->
            <div id="extraSection" class="hidden-section">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card box-card text-center  text-white">
                            <div class="card-body">
                                <h5 class="card-title">30,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="50" alt="image-money">
                                <p class="card-text">EGP 6,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-card text-center text-white">
                            <div class="card-body">
                                <h5 class="card-title">50,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="50" alt="image-money">
                                <p class="card-text">EGP 9,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box-card text-center  text-white">
                            <div class="card-body">
                                <h5 class="card-title">100,000BP</h5>
                                <img src="assets/img/mony-buy.png" width="50" alt="image-money">
                                <p class="card-text">EGP 18,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Arrow -->
            <div id="leftArrow" class="arrow left-arrow text-white">
                <span style="font-size: 2rem;"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="29" viewBox="0 0 37 29" fill="none">
                        <path d="M0.87736 12.1949C0.315558 12.7574 0 13.5199 0 14.3149C0 15.1099 0.315558 15.8724 0.87736 16.4349L12.1894 27.7529C12.7521 28.3157 13.5155 28.6318 14.3114 28.6318C15.1073 28.6318 15.8706 28.3157 16.4334 27.7529C16.9962 27.1901 17.3123 26.4268 17.3123 25.6309C17.3123 24.835 16.9962 24.0717 16.4334 23.5089L10.2414 17.3149H33.3114C34.107 17.3149 34.8701 16.9988 35.4327 16.4362C35.9953 15.8736 36.3114 15.1105 36.3114 14.3149C36.3114 13.5192 35.9953 12.7562 35.4327 12.1936C34.8701 11.6309 34.107 11.3149 33.3114 11.3149H10.2414L16.4334 5.12287C16.712 4.84421 16.9331 4.51339 17.0839 4.14929C17.2347 3.7852 17.3123 3.39497 17.3123 3.00088C17.3123 2.60678 17.2347 2.21655 17.0839 1.85246C16.9331 1.48836 16.712 1.15754 16.4334 0.878874C16.1547 0.600208 15.8239 0.379162 15.4598 0.22835C15.0957 0.0775375 14.7055 -8.58307e-05 14.3114 -8.58307e-05C13.9173 -8.58307e-05 13.527 0.0775375 13.1629 0.22835C12.7988 0.379162 12.468 0.600208 12.1894 0.878874L0.87736 12.1949Z" fill="white" />
                    </svg></span>
            </div>
            <!-- Right Arrow -->
            <div id="rightArrow" class="arrow right-arrow text-white">
                <span style="font-size: 2rem;"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="29" viewBox="0 0 37 29" fill="none">
                        <path d="M35.434 16.437C35.9958 15.8745 36.3114 15.112 36.3114 14.317C36.3114 13.522 35.9958 12.7595 35.434 12.197L24.122 0.878962C23.5593 0.316172 22.7959 -8.38621e-09 22 0C21.2041 8.38622e-09 20.4408 0.316172 19.878 0.878962C19.3153 1.44175 18.9991 2.20506 18.9991 3.00096C18.9991 3.79687 19.3153 4.56017 19.878 5.12296L26.07 11.317H3.00004C2.20439 11.317 1.44133 11.633 0.878723 12.1956C0.316113 12.7582 4.19617e-05 13.5213 4.19617e-05 14.317C4.19617e-05 15.1126 0.316113 15.8757 0.878723 16.4383C1.44133 17.0009 2.20439 17.317 3.00004 17.317H26.07L19.878 23.509C19.5994 23.7876 19.3783 24.1184 19.2275 24.4825C19.0767 24.8466 18.9991 25.2369 18.9991 25.631C18.9991 26.0251 19.0767 26.4153 19.2275 26.7794C19.3783 27.1435 19.5994 27.4743 19.878 27.753C20.1567 28.0316 20.4875 28.2527 20.8516 28.4035C21.2157 28.5543 21.6059 28.6319 22 28.6319C22.3941 28.6319 22.7844 28.5543 23.1485 28.4035C23.5126 28.2527 23.8434 28.0316 24.122 27.753L35.434 16.437Z" fill="white" />
                    </svg></span>
            </div>
        </div>
    </div>
    <!-- End Buy Points -->
          <!-- Fille Footer   -->
          <?php
include('layouts/footer.php')
?>
<!-- 
link to the project 
http://localhost/Project-work/Ballerz-Websit/ -->