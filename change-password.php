<?php
include('layouts/header.php')
?>
     <!-- Image Background -->
     <img src="assets/img/background-login.png" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100vh position-absolute " />
<!-- Change Password Form -->

<div class="form-container animate__animated animate__backInRight w-100 overflow-hidden d-flex justify-content-center align-items-center position-absolute">
    <div class="image-section  " id="imageSection">
        <img src="assets/img/imgs-login.jpg" alt="Image" class="animate__animated animate__backInDown animate__delay-1s w-100 h-100 z-5 rounded-6 object-fit-cover ">
    </div>
    <div class="form-section" id="formSection">
        <div id="loginForm" class="form active">
            <h2 class="h2-login text-center fw-bold">Change Password</h2>
            <div class="icons social-icons text-center mb-3 ">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path d="M17.4719 0H1.02031C0.456809 0 0 0.456809 0 1.02031V17.4719C0 18.0354 0.456809 18.4922 1.02031 18.4922H17.4719C18.0354 18.4922 18.4922 18.0354 18.4922 17.4719V1.02031C18.4922 0.456809 18.0354 0 17.4719 0Z" fill="#3D5A98" />
                        <path d="M12.7574 18.4907V11.3298H15.1605L15.5199 8.53913H12.7574V6.75788C12.7574 5.95006 12.9824 5.3985 14.1402 5.3985H15.6184V2.8985C14.9026 2.82404 14.1833 2.78857 13.4637 2.79225C11.3355 2.79225 9.86992 4.08913 9.86992 6.48131V8.53913H7.4668V11.3298H9.86992V18.4907H12.7574Z" fill="white" />
                    </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M6.65166 0.541839C8.81238 -0.199947 11.162 -0.179545 13.3095 0.599652C14.4889 1.04116 15.5694 1.71127 16.4892 2.57153C16.1767 2.9059 15.847 3.2184 15.5282 3.5434C14.922 4.14861 14.3162 4.75174 13.711 5.35278C13.1077 4.7758 12.3779 4.34776 11.5798 4.10278C10.5585 3.7944 9.472 3.77329 8.4395 4.04175C7.407 4.31021 6.4684 4.85787 5.72666 5.62465C5.07921 6.2833 4.58889 7.07968 4.29228 7.95434L1.05322 5.44653C2.21261 3.1474 4.22002 1.38875 6.65166 0.541839Z" fill="#E33629" />
                        <path d="M0.193746 7.93091C0.367841 7.06809 0.656876 6.23251 1.05312 5.44653L4.29218 7.9606C3.86846 9.20842 3.86846 10.5612 4.29218 11.809C3.21302 12.6424 2.13333 13.4799 1.05312 14.3215C0.0611684 12.347 -0.24136 10.0973 0.193746 7.93091Z" fill="#F8BD00" />
                        <path d="M9.88302 8.03247H19.183C19.5011 9.77768 19.4151 11.5726 18.9315 13.2793C18.4865 14.8488 17.6222 16.2674 16.4315 17.3825C15.3861 16.5668 14.3361 15.7575 13.2908 14.9418C13.8091 14.5923 14.2514 14.1417 14.5913 13.6171C14.9312 13.0924 15.1617 12.5046 15.269 11.8887H9.88302C9.88146 10.6043 9.88302 9.31841 9.88302 8.03247Z" fill="#587DBD" />
                        <path d="M1.05176 14.3216C2.13197 13.4882 3.21165 12.6507 4.29082 11.8091C4.70833 13.0344 5.50239 14.0964 6.55957 14.8435C7.21896 15.3095 7.96821 15.633 8.75957 15.7935C9.53935 15.9385 10.3392 15.9385 11.1189 15.7935C11.8964 15.6619 12.6378 15.3691 13.2955 14.9341C14.3408 15.7497 15.3908 16.5591 16.4361 17.3747C15.2922 18.4149 13.8977 19.1401 12.3893 19.4794C10.7243 19.8708 8.98914 19.852 7.33301 19.4247C6.02317 19.075 4.79969 18.4584 3.73926 17.6138C2.61685 16.7227 1.70013 15.5997 1.05176 14.3216Z" fill="#319F43" />
                    </svg></a>
            </div>
            <form>
                <div class="mb-3">
                    <div class="input-group">
                        <label for="password" class="form-label"></label>
                        <input type="password" class="form-control" placeholder="Password" required Password="Password" id="password">
                        <span class="input-group-text cursor-pointer toggle-password " onclick="togglePassword('password')"><i class="fas fa-lock"></i></span>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <label for="password" class="form-label"></label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword">
                            <span class="input-group-text cursor-pointer toggle-password" onclick="togglePassword('confirmPassword')"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-form w-100">Login</button>
            </form>
            <div class="text-center d-flex justify-content-end">
                <button class=" btn btn-link mt-3 align-content-end " id=""> <a href="settings.php"> Cancel</button> </a>
            </div>
        </div>
    </div>
</div>
<script>
    // Function to toggle password visibility
    function togglePassword(fieldId) {
        const passwordField = document.getElementById(fieldId);
        passwordField.type = passwordField.type === "password" ? "text" : "password";
    }
    // Apply the typing functionality to both fields
    ["password", "confirmPassword"].forEach((fieldId) =>
        showPasswordWhileTyping(fieldId)
    );

    function showPasswordWhileTyping(fieldId, delay = 200) {
        const passwordField = document.getElementById(fieldId);
        let timeoutId;
        passwordField.addEventListener("input", () => {
            passwordField.type = "text"; // Show password while typing
            clearTimeout(timeoutId); // Clear previous timeout
            timeoutId = setTimeout(() => {
                passwordField.type = "password"; // Hide password after inactivity
            }, delay);
        });
    }
  </script>
<?php
include('layouts/footer.php')
?>