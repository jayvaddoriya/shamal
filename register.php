<?php $page="signup"; include_once('includes/auth-header.inc.php'); ?>

<main class="position-relative d-flex align-items-center justify-content-center h-100 auth__layout p-4">
    <img src="assets/images/resources/login-bg.png" alt="Image"
        class="position-absolute top-0 start-0 w-100 h-100"
    > 
    <div>

        <div class="bg-white p-4 form__wrapper w-100 position-relative z-3 rounded-3 mx-auto">
            <h1 class="fs-2 fw-normal text-dark">Sign up</h1>
            <p class="text-dark">
                Already have an account? <a href="login.php" class="link">Sign in</a>
            </p>
            <form action="#" method="post" class="row g-3 mb-3 mt-4">
                <div class="col-md-6">
                    <label for="first_name" class="small d-block text-dark mb-1">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name"
                        placeholder="Enter your first name"
                    >
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="small d-block text-dark mb-1">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="last_name"
                        placeholder="Enter your last name"
                    >
                </div>
                <div class="col-12">
                    <label for="email" class="small d-block text-dark mb-1">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="email"
                        placeholder="Enter your email"
                    >
                </div>
                <div class="col-12">
                    <label for="mobile_code" class="small d-block text-dark mb-1">Mobile Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control w-100" id="mobile_code"
                        placeholder="e.g. 50 555 0123"
                    >
                </div>
                <div class="position-relative">
                    <label for="password" class="small d-block text-dark mb-1">Password<span class="text-danger">*</span></label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="password"
                        placeholder="Enter Your Password"
                    >
    
                    <button type="button" class="btn toogle__password position-absolute border-0 shadow-none">
                        <i class="bi bi-eye"></i>
                    </button> 
                </div>
                <div class="position-relative">
                    <label for="password2" class="small d-block text-dark mb-1">Password<span class="text-danger">*</span></label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="password2"
                        placeholder="Enter Your Password"
                    >
    
                    <button type="button" id="toogle__password2" class="btn toogle__password position-absolute border-0 shadow-none">
                        <i class="passIcon2 bi bi-eye"></i>
                    </button> 
                </div> 
                <div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">Sign up</button>
                </div>
            </form>
        </div>
        <div class=" w-100 text-center position-relative z-3 mt-5"> 
            <img src="assets/images/resources/auth-logos.png" alt="Image"
                class="img-fluid"
            >
        </div>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle w-100 px-5 d-xl-flex d-none flex-row align-items-center justify-content-between gap-3">
        <div class="fw-medium gradient-text">Sign up</div>
        <div class="fw-medium title__box p-4 rounded-3 w-100">
            <div class="text-white fs-3 lh-1 mb-2">Experience Dubai Adventures</div>
            <p class="text-white mb-0 fw-light lh-sm" style="font-size: 12px;">
                Discover offerings from Skydive Dubai, Deep Dive Dubai, XDubai, and InFlight Dubai — thrilling experiences and iconic attractions.
            </p>
        </div>
    </div>
    
</main>

<?php $page="signup"; include_once('includes/auth-footer.inc.php'); ?>
<script>
    const input = document.querySelector("#mobile_code"); 
    const iti = window.intlTelInput(input, {
        initialCountry: "ae",
        loadUtils: () => import("/intl-tel-input/js/utils.js?1762589505757"),
    });
    iti.promise.then(() => {
        console.log("Initialised!");
    });
</script>
<script>
    document.querySelector(".toogle__password").addEventListener("click", function () {
        const passInput = document.getElementById("password");
        const icon = this.querySelector("i");

        if (passInput.type === "password") {
            passInput.type = "text";          // show password
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            passInput.type = "password";      // hide password (default)
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    });
    document.querySelector("#toogle__password2").addEventListener("click", function () {
        const passInput = document.getElementById("password2");
        const icon2 = this.querySelector(".passIcon2");

        if (passInput.type === "password") {
            passInput.type = "text";          // show password
            icon2.classList.remove("bi-eye");
            icon2.classList.add("bi-eye-slash");
        } else {
            passInput.type = "password";      // hide password (default)
            icon2.classList.remove("bi-eye-slash");
            icon2.classList.add("bi-eye");
        }
    });
</script>