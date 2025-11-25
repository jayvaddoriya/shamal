<?php include_once('includes/auth-header.inc.php'); ?>

<main class="position-relative d-flex align-items-center justify-content-center h-100 auth__layout p-4">
    <img src="assets/images/resources/login-bg.png" alt="Image"
        class="position-absolute top-0 start-0 w-100 h-100"
    >
    <div class="position-absolute bottom-0 end-0 w-100 text-center pb-5"> 
        <img src="assets/images/resources/auth-logos.png" alt="Image"
            class="img-fluid"
        >
    </div>
    <div class="bg-white p-4 form__wrapper w-100 position-relative z-3 rounded-3">
        <h1 class="fs-2 fw-normal text-dark">Sign up</h1>
        <p class="text-dark">
            Already have an account? <a href="login.php" class="link">Sign in</a>
        </p>
        <form action="#" method="post" class="d-flex flex-column gap-3 mb-3 mt-4">
            <div>
                <label for="email" class="small d-block text-dark mb-1">Email<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="email"
                    placeholder="you@mail.com"
                >
            </div>
            <div>
                <label for="password" class="small d-block text-dark mb-1">Password<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="password"
                    placeholder="Enter You Password"
                >
            </div>
            <div class="text-end">
                <a href="" class="link">Forgot Password?</a>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </div>
        </form>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle w-100 px-5 d-xl-flex d-none flex-row align-items-center justify-content-between gap-3">
        <div class="fw-medium gradient-text">Sign in</div>
        <div class="fw-medium title__box p-4 rounded-3 w-100">
            <div class="text-white fs-3 lh-1 mb-2">Experience Dubai Adventures</div>
            <p class="text-white mb-0 fw-light lh-sm" style="font-size: 12px;">
                Discover offerings from Skydive Dubai, Deep Dive Dubai, XDubai, and InFlight Dubai — thrilling experiences and iconic attractions.
            </p>
        </div>
    </div>
</main>

<?php include_once('includes/auth-footer.inc.php'); ?>