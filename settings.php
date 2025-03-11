<?php
include('layouts/header.php')
?>
<?php
include('layouts/navbar.php')
?>
    <!-- End Header  -->
<!-- Image Background -->
<img src="assets/img/background-websit-hight.jpg" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100vh position-absolute " />
<!-- End Image Background -->
<!-- Start Settings -->
<div class="container-fluid p-0 overflow-hidden container-settings position-relative ">
    <div class="row">
        <!-- Left Navigation -->
        <div class="col-md-3 box-settings overflow-hidden bg-left   ">
            <h3 class="mb-5  mt-5 text-light">Settings</h3>
            <ul class="nav flex-column cursor-pointer fs-5 mb-4  mt-4">
                <div class="line-settings "></div>
                <div class="nav-link-settings active">
                    <li class="nav-item mb-2 mt-2 nav-link-settings">
                        <a class="nav-link" data-target="myAccount">My Account</a>
                    </li>
                </div>
                <div class="line-settings"></div>
                <div class="nav-link-settings ">
                    <li class="nav-item mb-2  mt-2">
                        <a class="nav-link" data-target="about">About</a>
                    </li>
                </div>
                <div class="line-settings"></div>
                <div class="nav-link-settings ">
                    <li class="nav-item  mb-2  mt-2">
                        <a class="nav-link" data-target="userAgreement">User Agreement</a>
                    </li>
                    <div class="line-settings"></div>
                </div>
                <div class="nav-link-settings ">
                    <li class="nav-item mb-2  mt-2">
                        <a class="nav-link" data-target="signOut">Sign Out</a>
                    </li>
                </div>
                <div class="line-settings"></div>
                <li class="nav-item">
                    <a class="nav-link"></a>
                </li>
            </ul>
        </div>
        <!-- Right Content -->
        <div class="col-md-9 p-4 cursor-pointer z-2">
            <!-- My Account -->
            <div id="myAccount" class="content-section active-section content-container text-light text-start p-0 animate__bounceInRight">
                <h5 class="text-center">Your personal space to manage your football collection and profile</h5>
                <div class="row">
                    <span class="mt-4 fs-r8">
                        <strong>Username:</strong> [NAME]
                        <span class="btn-eidt" data-bs-toggle="modal" data-bs-target="#editNameModal">Edit</span>
                    </span>
                    <span class="mt-4 fs-r8">
                        <strong>Email:</strong> [Email]
                        <span class="btn-eidt" data-bs-toggle="modal" data-bs-target="#editEmailModal">Edit</span>
                    </span>
                    <span class="mt-4 fs-r8"><strong>Ball Points:</strong> [Current BP Balance]</span>
                    <span class="mt-4 fs-r8"><strong>Balance:</strong> [Current BP Balance]</span>
                    <h6 class="mt-3 mb-3 ">Inventory</h6>
                    <div class="container text-center">
                        <ul class="row list-unstyled mt-2 ">
                            <li class="col-6 ">Badges <samp class="fs-r0">(Quantity)</samp></li>
                            <li class="col-6">Posters <samp class="fs-r0">(Quantity)
                                </samp></li>
                            <li class="col-6">Medals <samp class="fs-r0">(Quantity)</samp></li>
                            <li class="col-6">Kits <samp class="fs-r0">(Quantity)</samp></li>
                        </ul>
                    </div>
                    <p class="p-change-password mt-1 ">If you want to secure your account with a new password:</p>
                    <a href="change-password.php" class="text-change-password mb-1">[Change Password]</a>
                    <!-- Modals -->
                    <!-- Edit Name Modal -->
                    <div class="modal fade  " id="editNameModal" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editNameModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="editNameModalLabel">Edit Username</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editNameForm">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">New Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter new username" required>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class="btn btn-outline-dark ">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Email Modal -->
                    <div class="modal fade " id="editEmailModal" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editNameModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editEmailModalLabel">Edit Email</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editEmailForm">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">New Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter new email" required>
                                        </div>
                                        <button type="submit" class="btn d-grid gap-2 col-6 mx-auto">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About -->
            <div id="about" class="content-section animate__bounceInRight">
                <div class="about-section text-light text-start">
                    <lu>
                        <p class="text-start mt-4">Welcome to Ballerz, the ultimate football-themed mystery box experience! 
                            Our mission is to bring the thrill of discovering exclusive football memorabilia and collectibles to fans worldwide. Whether you're after your favorite team's latest kits, iconic retro shirts, or unique posters and badges, we've got something for every football enthusiast. </p>
                        <h5 class="mt-4">Why Choose Ballerz?</h5>
                        <li>A fair and transparent mystery box system.</li>
                        <li>A thriving marketplace to trade and expand your collection.</li>
                        <p class="mt-4">
                            Join us and start your journey to collect the greatest football merchandise from around the world!
                        </p>
                        <p class="mt-4">
                            For inquiries, email us at
                            <a href="mailto:support@ballerz.com">support@ballerz.com</a>
                            or follow us on social media.
                        </p>
                    </lu>
                </div>
            </div>

            <!-- User Agreement -->
            <div id="userAgreement" class="userAgreement content-section text-start text-light animate__bounceInRight">
                <h5 class="text-start ">User Agreement</h5>
                <p>Effective Date: <span>[Insert Date]</span> </p>
                <p>Welcome to Ballerzi. By using our application, you agree to comply with the following terms and conditions. Please read them carefully.</p>
                <h5>1.Acceptance of Terms</h5>
                <p>By creating an account and using our services, you agree to be bound by this agreement, our Privacy Policy, and all applicable laws and regulations.</p>
                <h5>2.User Accounts</h5>
                <lu>
                    <li>
                        You must provide accurate and complete information when creating your account.
                    </li>
                    <li>
                        Are responsible for maintaining the confidentiality of your account credentials.
                    </li>
                    <li>
                        Any unauthorized activity on your account should be reported.
                    </li>
                    </>
            </div>

            <!-- Sign Out -->
            <div id="signOut" class="content-section signOut text-light animate__bounceInRight">
                <!-- Button to trigger the modal -->
                <h5 class="mt-4">Are you sure you want to Sign out of your Ballerz account?</h5>
                <lu class="content-signOut text-start mx-auto" style="max-width: 400px;">
                    <p class="text-start mt-4">Signing out will:</p>
                    <li class="mt-4">End your current session.</li>
                    <li>Require you to enter your credentials to Sign in again.</li>
                    <p class="mt-4 text-start">If you are sure to Sign out, then click on Sign out below.</p>
                </lu>
                <i class="arrow-button-single d-lg-block d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                        <g clip-path="url(#clip0_558_150)">
                            <path d="M6.83757 12.948C7.01335 13.1236 7.25163 13.2222 7.50007 13.2222C7.74851 13.2222 7.98679 13.1236 8.16257 12.948L11.6994 9.41299C11.8753 9.23712 11.9741 8.99859 11.9741 8.74987C11.9741 8.50115 11.8753 8.26261 11.6994 8.08674C11.5236 7.91087 11.285 7.81207 11.0363 7.81207C10.7876 7.81207 10.5491 7.91087 10.3732 8.08674L8.43757 10.0217V2.81237C8.43757 2.56373 8.3388 2.32527 8.16298 2.14946C7.98717 1.97364 7.74871 1.87487 7.50007 1.87487C7.25143 1.87487 7.01297 1.97364 6.83716 2.14946C6.66134 2.32527 6.56257 2.56373 6.56257 2.81237V10.0217L4.62757 8.08674C4.54049 7.99966 4.43711 7.93058 4.32333 7.88345C4.20955 7.83633 4.0876 7.81207 3.96445 7.81207C3.84129 7.81207 3.71934 7.83633 3.60557 7.88345C3.49179 7.93058 3.3884 7.99966 3.30132 8.08674C3.21424 8.17383 3.14516 8.27721 3.09803 8.39099C3.0509 8.50477 3.02665 8.62671 3.02665 8.74987C3.02665 8.87302 3.0509 8.99497 3.09803 9.10875C3.14516 9.22253 3.21424 9.32591 3.30132 9.41299L6.83757 12.948Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_558_150">
                                <rect width="15" height="15" fill="white" transform="matrix(-1 0 0 -1 15 15)" />
                            </clipPath>
                        </defs>
                    </svg>
                </i>

                <!-- Sign Out Button -->

                <div class="d-flex flex-column align-items-start">
                    <button id="signOutButton" class="btn-transparent fw-bold mt-4">
                        <!-- Tast a link  -->
                        <a href="login.php">
                            [Sign Out]
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Settings -->
<!-- Footer -->
          <?php
include('layouts/footer.php')
?>



<!-- 
link to the project 
http://localhost/Project-work/Ballerz-Websit/ -->