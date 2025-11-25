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
        <p class="text-dark">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 12H5" stroke="#1C7ED6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 19L5 12L12 5" stroke="#1C7ED6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
            <a href="login.php" class="link">Return to Sign In</a>
        </p> 
        <h1 class="fs-2 fw-normal text-dark">Forgot Password</h1>
        <p class="text-dark">
            We’ve sent a 4-digit verification code to your email 
            <span class="fw-semibold">useremail@gmail.com</span> 
            <a href="forgot-password.php" class="link">edit</a> 
        </p>
        <form action="#" method="post" class="d-flex flex-column gap-3 mb-3 mt-4">
            <div>
                <label for="email" class="small d-block text-dark mb-2 fs-6">Please enter it below to continue.</label>
                <div class="otp-wrapper d-flex justify-content-between">
                    <input type="text" maxlength="1" class="otp-input">
                    <input type="text" maxlength="1" class="otp-input">
                    <input type="text" maxlength="1" class="otp-input">
                    <input type="text" maxlength="1" class="otp-input">
                </div>
                <div id="otpError" class="otp-error-text text-center d-none">Invalid code. Please try again.</div>

            </div> 
            <div>
                <div class="resend__code__box text-center fs-6 rounded-2 p-2">
                    Resend code in 
                    <span class="fw-bold" id="timer">59</span>
                    seconds
                </div>
            </div>
            <div>
                <button type="submit" id="verifyBtn" class="btn btn-primary w-100 mt-3">Verify</button>
            </div>
        </form>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle w-100 px-5 d-xl-flex d-none flex-row align-items-center justify-content-between gap-3">
        <div class="fw-medium gradient-text lh-sm">Forgot <br> Password</div>
        <div class="fw-medium title__box p-4 rounded-3 w-100">
            <div class="text-white fs-3 lh-1 mb-2">Experience Dubai Adventures</div>
            <p class="text-white mb-0 fw-light lh-sm" style="font-size: 12px;">
                Discover offerings from Skydive Dubai, Deep Dive Dubai, XDubai, and InFlight Dubai — thrilling experiences and iconic attractions.
            </p>
        </div>
    </div>
</main>

<script>
    // ---------------------------
    // OTP Auto Move
    // ---------------------------
    const inputs = document.querySelectorAll(".otp-input");
    const verifyBtn = document.getElementById("verifyBtn");
    const timerBox = document.querySelector(".resend__code__box");
    const timerSpan = document.getElementById("timer");

    let countdown = 59;

    // hide verify button initially
    verifyBtn.style.display = "none";

    // Auto-move & validation
    inputs.forEach((input, index) => {
        input.addEventListener("keyup", function (e) {
            if (e.key >= 0 && e.key <= 9) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            } else if (e.key === "Backspace") {
                if (index > 0) {
                    inputs[index - 1].focus();
                }
            } else {
                input.value = ""; 
            }

            checkOtpFilled();
        });
    });

    // ---------------------------
    // Check if all 4 digits filled
    // ---------------------------
    function checkOtpFilled() {
        const allFilled = Array.from(inputs).every(inp => inp.value.trim() !== "");

        if (allFilled) {
            verifyBtn.style.display = "block";  // show verify button
            timerBox.style.display = "none";    // hide timer
        } else {
            verifyBtn.style.display = "none";
            timerBox.style.display = "block";
        }
    }

    // ---------------------------
    // Start Timer on Page Load
    // ---------------------------
    function startTimer() {
        let timer = setInterval(() => {
            timerSpan.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(timer);
                timerExpired();
            }

            countdown--;
        }, 1000);
    }

    startTimer();

    // ---------------------------
    // When Timer Reaches 0
    // ---------------------------
    function timerExpired() {
        // disable input fields
        inputs.forEach(i => i.disabled = true);

        // show resend message
        timerBox.innerHTML = `
            <span class="text-danger fw-bold">Code expired.</span>
            <br>
            <a href="#" onclick="resendCode()" class="link">Resend Code</a>
        `;
    }

    // ---------------------------
    // Handle Resend
    // ---------------------------
    function resendCode() {
        countdown = 59;

        // reset UI
        inputs.forEach(i => {
            i.disabled = false;
            i.value = "";
        });
        inputs[0].focus();

        verifyBtn.style.display = "none";
        timerBox.style.display = "block";
        timerBox.innerHTML = `Resend code in <span class="fw-bold" id="timer">59</span> seconds`;

        timerSpan = document.getElementById("timer");

        startTimer();
    } 




    function showOtpError() {
        const otpError = document.getElementById("otpError");

        // show error text
        otpError.classList.remove("d-none");

        // Apply error border + shake animation
        inputs.forEach(i => {
            i.classList.add("error");
            i.classList.add("shake");
            setTimeout(() => i.classList.remove("shake"), 400);
        });

        // keep the values — do NOT clear

        // keep verifyBtn hidden only if needed
        verifyBtn.style.display = "none"; 
        timerBox.style.display = "block";
    }


    document.getElementById("verifyBtn").addEventListener("click", function (e) {
    e.preventDefault();

    const code = Array.from(inputs).map(i => i.value).join("");

    const correctCode = "1234"; // demo

    if (code !== correctCode) {
        showOtpError();
        return;
    }

    // success...
    window.location.href = "index.php";
});

</script>

<?php include_once('includes/auth-footer.inc.php'); ?>