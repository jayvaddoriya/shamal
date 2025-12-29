<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main">
     
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid pt-3">
            
            
            <div class="row g-3">
                <div class="col-lg-4 d-flex">
                    <div class="bg-white p-4 rounded-3 text-center w-100">
                        <div class="avater__box mx-auto position-relative mb-3 rounded-circle overflow-hidden">
                            <img src="assets/images/resources/Avatar.png" alt="" class="img-fluid rounded-circle object-fit-cover">
                            <div class="upload__box position-absolute bottom-0 end-0 top-0 start-0 d-flex align-items-center justify-content-center">
                                <label for="" class="upload__btn">
                                    <svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 13.67a1 1 0 0 1 1 1v1.66h1.67a1 1 0 0 1 0 2H17V20a1 1 0 1 1-2 0v-1.67h-1.67a1 1 0 0 1 0-2H15v-1.66a1 1 0 0 1 1-1" fill="#fff"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.04 28h5.92c4.16 0 6.25 0 7.74-.98q.97-.64 1.63-1.6c1-1.47 1-3.52 1-7.6s0-6.13-1-7.6a6 6 0 0 0-1.63-1.6c-.96-.63-2.16-.86-4-.94-.88 0-1.64-.65-1.81-1.5A2.75 2.75 0 0 0 18.18 4h-4.36c-1.32 0-2.45.91-2.7 2.18-.18.85-.94 1.5-1.82 1.5-1.84.08-3.04.3-4 .94q-.97.64-1.63 1.6c-1 1.47-1 3.51-1 7.6s0 6.13 1 7.6q.65.95 1.63 1.6c1.5.98 3.58.98 7.74.98m8.3-10.67a5.33 5.33 0 1 1-10.67 0 5.33 5.33 0 0 1 10.66 0m2.66-5a1 1 0 0 0 0 2h1.33a1 1 0 0 0 0-2z" fill="#fff"/></svg>
                                    <span class="text-white small d-block">Update photo</span>
                                    <input type="file" name="file" id="file" class="w-100 h-100  opacity-0 position-absolute top-0 start-0">
                                </label>
                            </div>
                        </div>
                        <h2 class="fs-18 text-dark fw-bold mb-0">Khalid Ahmed</h2>
                        <p class="text-center small text-dark">System Administrator</p>
                        <div class="text-center mt-4">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#logOutModal" class="btn btn-danger log__out__btn px-4 rounded-pill">Logout</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-white p-4 rounded-3"> 
                        <h2 class="fs-18 text-dark fw-bold mb-0">My Profile</h2>
                        <p class="text-center small text-dark">View and manage your account details</p>
                        <div class="row g-4 mt-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold">Admin Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="Khalid Ahmed" placeholder="Enter admin name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="text" name="email" id="email" class="form-control bg-light" value="lahmaed@mail.com" placeholder="Enter admin name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Role</label>
                                <input type="text" name="email" id="email" class="form-control bg-light" value="System Administrator" placeholder="Enter admin name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Experience</label>
                                <input type="text" name="email" id="email" class="form-control bg-light" value="Sky dive Palm" placeholder="Enter admin name">
                            </div>
                            <div class="col-12 d-flex justify-content-end gap-3">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#otpModal" class="btn btn-success px-4 rounded-pill">Change Password </button>
                                <button class="btn btn-primary px-4 rounded-pill">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.//data_table-->
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<!-- Logout Confirm Modal -->
<div class="modal fade" id="logOutModal" tabindex="-1" aria-labelledby="logOutModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:510px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="logOutModalLabel">Logout</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div>
                    <p>
                        Are you sure you want to logout?
                    </p>
                </div>
                 <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-danger small rounded-pill shadow-none px-4" data-bs-dismiss="modal">Logout</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- OTP Confirm Modal -->
<div class="modal fade auth__layout" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:444px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-none justify-content-end"> 
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body p-4">
                <h1 class="fs-2 fw-normal text-dark">Verify</h1>
                <p class="text-dark">
                    We’ve sent a 4-digit verification code to your email 
                    <span class="fw-semibold">useremail@gmail.com</span> 
                    <a href="forgot-password.php" class="link">edit</a> 
                </p>
                <form action="#" method="post" class="d-flex flex-column gap-3 mb-3 mt-4">
                    <div>
                        <label for="email" class="small d-block text-dark mb-2 fs-6">Please enter it below to continue.</label>
                        <div class="otp-wrapper d-flex justify-content-between" style="gap: 12px;">
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
                        <button type="button" id="verifyBtn" class="btn btn-primary w-100 mt-3">Verify</button>
                    </div>
                </form>
            </div><!--.modal-body-->
             
        </div>
    </div> 
</div>



<!-- OTP Confirm Modal -->
<div class="modal fade auth__layout" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:444px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-none justify-content-end"> 
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body p-4">
                <h1 class="fs-2 fw-normal text-dark">Reset Password</h1>
                <p class="text-dark">
                    Create a new password for your account.
                </p>
                <form action="#" method="post" class="d-flex flex-column gap-3 mb-3 mt-4">
                    <div>
                        <label for="password" class="small d-block text-dark mb-2 fs-6">New Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password">
                    </div>
                    <div>
                        <label for="confirm_password" class="small d-block text-dark mb-2 fs-6">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Enter your new password">
                    </div>
                    <div>
                        <button class="btn btn-primary w-100">Save New Password</button>
                    </div>
                </form>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>
 

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 

<script>
  const modalOneEl = document.getElementById('otpModal');
  const modalTwoEl = document.getElementById('changePasswordModal');

  const modalOne = new bootstrap.Modal(modalOneEl);
  const modalTwo = new bootstrap.Modal(modalTwoEl);

  document.getElementById('verifyBtn').addEventListener('click', () => {
    modalOne.hide();
    modalOneEl.addEventListener(
      'hidden.bs.modal',
      () => modalTwo.show(),
      { once: true }
    );
  });
</script>