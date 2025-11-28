<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header pb-1">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="bg-white px-3 py-2"> 
                <div class="row gx-0 gy-3 gy-xl-0">
                    <div class="col-xl-6">
                        <div class="d-inline-flex align-items-center gap-3"> 
                            <button class="btn ac__btn btn-light rounded-pill px-3 d-flex align-items-center gap-2" style="width: auto;font-size:14px;">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.333C2 2.597 2.597 2 3.333 2H6c.736 0 1.333.597 1.333 1.333V6c0 .736-.597 1.333-1.333 1.333H3.333A1.333 1.333 0 0 1 2 6zm4 0H3.333V6H6zm2.667 0C8.667 2.597 9.264 2 10 2h2.667C13.403 2 14 2.597 14 3.333V6c0 .736-.597 1.333-1.333 1.333H10A1.333 1.333 0 0 1 8.667 6zm4 0H10V6h2.667zm-8 .667c.368 0 .666.298.666.667v.006a.667.667 0 1 1-1.333 0v-.006C4 4.298 4.298 4 4.667 4m6.666 0c.368 0 .667.298.667.667v.006a.667.667 0 0 1-1.333 0v-.006c0-.369.298-.667.666-.667M2 10c0-.736.597-1.333 1.333-1.333H6c.736 0 1.333.597 1.333 1.333v2.667C7.333 13.403 6.736 14 6 14H3.333A1.333 1.333 0 0 1 2 12.667zm6.667-.667c0-.368.298-.666.666-.666h2a.667.667 0 1 1 0 1.333H10v1.333a.667.667 0 1 1-1.333 0zm4.666-.666c.368 0 .667.298.667.666v.007a.667.667 0 0 1-1.333 0v-.007c0-.368.298-.666.666-.666M3.333 10v2.667H6V10zm1.334.667c.368 0 .666.298.666.666v.007a.667.667 0 1 1-1.333 0v-.007c0-.368.298-.666.667-.666m6 .666c0-.368.298-.666.666-.666h2c.368 0 .667.298.667.666v2a.667.667 0 0 1-1.333 0V12h-1.334a.667.667 0 0 1-.666-.667m-2 2c0-.368.298-.666.666-.666h2a.667.667 0 1 1 0 1.333h-2a.667.667 0 0 1-.666-.667" fill="#212529"/></svg>
                                <span>Scan QR Code</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <div class="col"> 
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for ...">
                            </div>
                            <button class="btn ac__btn w-auto px-3 rounded-pill active">Name</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Display Name</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Email</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">ID</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Bok ID</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content bookingwrapper">
        <!--begin::Container-->
        <div class="container-fluid"> 
            <div class="bg-white p-4">
                <h2 class="fs-5 fw-semibold text-dark"></h2>
                <div class="d-flex flex-row gap-4">
                   <div class="d-flex flex-column gap-3 flex-shrink-0" style="width: 180px;">
                       <div class="qr__code__box rounded-3">
                           <img src="assets/images/resources/qr-code.png" alt="code" class="img-fluid">
                           <p class="small text-dark fw-semibold mb-0 mt-3">Khalid Ali</p>
                           <p class="fs-12 text-dark mb-0">
                               Short ID: 
                               <span class="fw-bold">12243439</span>
                               <a href="@" class="link">Copy</a>
                           </p> 
                       </div>
                       <button class="btn btn-success small fw-normal d-flex align-items-center gap-1 justify-content-center">
                           <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.3 2.7a.7.7 0 0 0 0 1.3h1.4a.7.7 0 0 0 0-1.3zm-1.9 0a2 2 0 0 1 2-1.4h1.3a2 2 0 0 1 1.9 1.4h.7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.7a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2zm0 1.3h-.7a1 1 0 0 0-.7.7v8a1 1 0 0 0 .7.6h6.6a1 1 0 0 0 .7-.6v-8a1 1 0 0 0-.7-.7h-.7a2 2 0 0 1-2 1.3H7.4a2 2 0 0 1-2-1.3m0 5.3q0-.5.6-.6A.7.7 0 1 1 6 10a1 1 0 0 1-.7-.7m5.7.5-2 2q-.4.5-.9 0l-.7-.7a.7.7 0 1 1 1-.9l.2.2 1.5-1.5a.7.7 0 0 1 1 1m-5.8 1.5q0-.5.7-.6A.7.7 0 0 1 6 12a1 1 0 0 1-.7-.7" fill="#fff"/></svg>
                           <span>Checkin</span>
                       </button>
                       <div class="qr__code__box rounded-3 small fw-normal d-flex align-items-center gap-1 justify-content-between"> 
                           <span>Ground Customer</span>
                           <div class="form-check form-switch m-0 p-0"> 
                               <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked">
                           </div>
                       </div>
                       <div class="qr__code__box rounded-3 small fw-normal d-flex align-items-center gap-1 justify-content-between"> 
                           <span>Double Manifest</span>
                           <div class="form-check form-switch m-0 p-0"> 
                               <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked2" checked>
                           </div>
                       </div>
                   </div>
   
                   <div class="col d-flex flex-column gap-3">
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="fname" class="small fw-semibold text-dark">First Name</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="fname" class="form-control" value="Khalid">
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="mname" class="small fw-semibold text-dark">Mid Name</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="mname" class="form-control" value="">
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="lname" class="small fw-semibold text-dark">Last Name</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="lname" class="form-control" value="Ali">
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="dname" class="small fw-semibold text-dark">Display Name</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="dname" class="form-control" value="Kalid">
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="dob" class="small fw-semibold text-dark">D.O.B</label>
                           </div>
                           <div class="col-8">
                               <div class="row g-2 align-items-center">
                                   <div class="col-7"> 
                                       <input type="text" id="dob" class="form-control" value="11/2/1999">
                                   </div>
                                   <div class="col-5 d-flex align-items-center gap-2">
                                       <div class="flex-grow">
                                           <input type="text" id="age" class="form-control" value="26 Age"> 
                                       </div>
                                       <div class="flex-shrink-0">
                                           <input type="checkbox" name="age" id="age" class="form-check-input">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="dob" class="small fw-semibold text-dark">Weight</label>
                           </div>
                           <div class="col-8">
                               <div class="row g-2 align-items-center">
                                   <div class="col-5"> 
                                       <div class="position-relative">
                                           <input type="text" id="dob" class="form-control" value="65">
                                           <small class="text-dark position-absolute top-50 translate-middle-y end-0 z-3 pe-2">KG</small>
                                       </div>
                                   </div>
                                   <div class="col-7 d-flex align-items-center gap-2">
                                       <div class="flex-grow">
                                           <div class="position-relative">
                                               <input type="text" id="dob" class="form-control" value="-" style="width:66px;">
                                               <small class="text-dark position-absolute top-50 translate-middle-y end-0 z-3 pe-2">BMI</small>
                                           </div>
                                       </div>
                                       <div class="flex-shrink-0">
                                           <input type="checkbox" name="verify" id="verify" class="form-check-input">
                                           <label for="verify" class="form-check-label fs-13">Verify</label>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="dob" class="small fw-semibold text-dark">Height</label>
                           </div>
                           <div class="col-8">
                               <div class="position-relative">
                                   <input type="text" id="dob" class="form-control" value="172">
                                   <small class="text-dark position-absolute top-50 translate-middle-y end-0 z-3 pe-2">CM</small>
                               </div> 
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="phone" class="small fw-semibold text-dark">Phone</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="phone" class="form-control" value="+971 555 3080 45">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="email" class="small fw-semibold text-dark">Email</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="email" class="form-control" value="ahme23@gmail.com">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="semail" class="small fw-semibold text-dark">Secondary Email</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="semail" class="form-control" value="-">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="enum" class="small fw-semibold text-dark">Emergency Contact</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="enum" class="form-control" value="-">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="ephone" class="small fw-semibold text-dark">Emergency Phone</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="ephone" class="form-control" value="-">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="ephone" class="small fw-semibold text-dark">Gender</label>
                           </div>
                           <div class="col-8 d-flex align-items-center justify-content-between">
                               <div class="form-check">
                                   <input type="radio" name="gender" id="male" class="form-check-input" checked>
                                   <label for="male" class="form-check-label">Male</label>
                               </div>
                               <div class="form-check">
                                   <input type="radio" name="gender" id="female" class="form-check-input">
                                   <label for="female" class="form-check-label">Female</label>
                               </div>
                               <div class="form-check">
                                   <input type="radio" name="gender" id="other" class="form-check-input">
                                   <label for="other" class="form-check-label">Other</label>
                               </div>
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="cname" class="small fw-semibold text-dark">Company Name</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="cname" class="form-control" value="-">  
                           </div>
                       </div>
                       <div class="row g-1 align-items-center">
                           <div class="col-4">
                               <label for="lcompanyID" class="small fw-semibold text-dark">Legal Company ID</label>
                           </div>
                           <div class="col-8">
                               <input type="text" id="lcompanyID" class="form-control" value="-">  
                           </div>
                       </div>
                   </div><!--.col-->
               </div><!--.d-flex-->

            </div>
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->


<?php include('includes/components/bookings-offcanvas.inc.php'); ?>


 
<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>