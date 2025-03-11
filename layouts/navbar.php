    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 w-100 z-1 ">
        <div class="container-fluid fst-normal fs-5">
            <!-- Logo -->
            <img src="assets/img/logo.png" alt="logo" class="logo rounded-circle">
            <a class="navbar-brand text-light fw-bold fs-4" href="index.php">BALLERZ </a>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end fs-3" id="navbarNav">
                <ul class="navbar-nav list-group" id="nav-toggle">
                    <li class="nav-item me-4"><a class="nav-link  text-light <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?> " href="index.php">Home</a></li>
                    <li class="nav-item me-4"><a class="nav-link  text-light <?php echo basename($_SERVER['PHP_SELF']) == 'locker.php' ? 'active' : ''; ?>  " href="locker.php">Locker</a></li>
                    <li class="nav-item me-4"><a class="nav-link  text-light <?php echo basename($_SERVER['PHP_SELF']) == 'store.php' ? 'active' : ''; ?> " href="store.php">Store</a></li>
                    <li class="nav-item me-4"><a class="nav-link  text-light <?php echo basename($_SERVER['PHP_SELF']) == 'trading.php' ? 'active' : ''; ?> " href="trading.php">Trading</a></li>
                    <li class="nav-item me-4 d-block d-lg-none"><a class="nav-link  text-light <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?> " href="settings.php">Settings</a></li>
                    <li class="nav-item me-4 d-block d-lg-none"><a class="nav-link  text-light btn-transparent fw-bold <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?> " href="login.php">[Sign Out]</a></li>
                </ul>
            </div>
            <!-- User Info -->
            <div class="navbar-toggler-right cursor-pointer flex-shrink-0  gap-3 d-none d-lg-flex menu-container position-relative " id="menuButton">
                <svg class="z-40" xmlns="http://www.w3.org/2000/svg" width="36" height="26" viewBox="0 0 36 26" fill="none">
                    <path class="z-4" d="M2 13H34M2 2H34M2 24H34" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div id="dropdownMenu" class="dropdown-menu position-absolute ">
                    <a href="settings.php" class="dropdown-item" id="showSettings"> Settings</a>
                    <div class="line-menu"></div>
                    <a href="buy-bp.php" class="dropdown-item">Buy BP</a>
                </div>
            </div>
            <div class="user-item d-none d-lg-flex flex-column text-primary m-1">
                <div class="user-info flex-direction d-flex align-items-center"><a href="sing-up.html">

                        <span class="name me-3 text-light fw-bold fs-4"> <a href="login.php">Name </a></span>
                        <img src="assets/img/user.png" class="rounded-circle" alt="User">
                    </a>
                </div>
                <div class="user-item flex-direction">
                    <a href="">

                        <span class="amount me ">10,000 BP</span>
                        <a href="#" class="btn btn-sm  add-money "><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9 0C6.62201 0.0288535 4.34956 0.986329 2.66794 2.66794C0.986329 4.34956 0.0288535 6.62201 0 9C0.0288535 11.378 0.986329 13.6504 2.66794 15.3321C4.34956 17.0137 6.62201 17.9711 9 18C11.378 17.9711 13.6504 17.0137 15.3321 15.3321C17.0137 13.6504 17.9711 11.378 18 9C17.9711 6.62201 17.0137 4.34956 15.3321 2.66794C13.6504 0.986329 11.378 0.0288535 9 0ZM14.1429 9.64286H9.64286V14.1429H8.35714V9.64286H3.85714V8.35714H8.35714V3.85714H9.64286V8.35714H14.1429V9.64286Z" fill="white" />
                            </svg></a>
                </div>
                </a>
            </div>
        </div>
    </nav>
    <!-- End navbar -->
    </header>