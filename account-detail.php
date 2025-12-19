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
    <div class="app-content bookingwrapper account__detail__page">
        <!--begin::Container-->
        <div class="container-fluid"> 
            <div class="p-2 text-white" style="background-color: #FA5252;">
                <div class="d-flex align-items-center justify-content-center"> 
                    <p class="m-0 text-white small fw-semibold">Grounded by Desert</p>                             
                </div>
            </div>
            <div class="bg-white p-3 p-lg-4">
                <div class="d-flex gap-3 justify-content-between align-items-center mb-4">
                    <h2 class="small fw-semibold text-dark mb-3">Customer Details</h2>
                    <div class="d-inline-flex align-items-center gap-3 gap-lg-4">
                        <div class="small fw-normal d-flex align-items-center gap-3 justify-content-between"> 
                           <span>Ground Customer</span>
                           <div class="form-check form-switch m-0 p-0"> 
                               <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked">
                           </div>
                       </div>
                        <a href="#" class="btn btn-outline-primary rounded-pill">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.667 2.666a.667.667 0 0 0 0 1.334H8a.667.667 0 1 0 0-1.334zm-1.887 0a2 2 0 0 1 1.887-1.333H8a2 2 0 0 1 1.886 1.333h.78a2 2 0 0 1 2 2V8a.667.667 0 0 1-1.333 0V4.666A.667.667 0 0 0 10.667 4h-.78A2 2 0 0 1 8 5.333H6.667A2 2 0 0 1 4.78 4H4a.667.667 0 0 0-.667.666v8a.666.666 0 0 0 .667.667h3.798a.667.667 0 0 1 0 1.333H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2zm-.113 4.667c0-.368.298-.667.666-.667H8A.667.667 0 0 1 8 8H5.333a.667.667 0 0 1-.666-.667m0 2.667c0-.369.298-.667.666-.667h2a.667.667 0 1 1 0 1.333h-2A.667.667 0 0 1 4.667 10m6.333.666a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2.333 1a2.333 2.333 0 1 1 4.386 1.11l1.418 1.419a.667.667 0 1 1-.942.943l-1.419-1.419a2.333 2.333 0 0 1-3.443-2.053" fill="#1864AB"/></svg>
                            <span>Audit Log</span>
                        </a>
                        <a href="#" class="btn btn-primary px-3 rounded-pill"
                            data-bs-toggle="modal" data-bs-target="#editProfilesModal"
                        >
                            Save
                        </a>
                    </div>
                </div><!--.d-flex-->
                
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
                           <span>Double Manifest</span>
                           <div class="form-check form-switch m-0 p-0"> 
                               <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked2" checked>
                           </div>
                       </div>
                   </div>
   
                    <div class="col d-flex flex-column gap-3">
                        <div class="row g-4 row-cols-1 row-cols-lg-2 row-cols-xxl-3">
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="fname" class="small fw-semibold text-dark">First Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="fname" class="form-control" value="Khalid">
                                    </div>
                                </div> 
                            </div>
                            <div class="col__item"> 
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="mname" class="small fw-semibold text-dark">Mid Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="mname" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col__item"> 
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="lname" class="small fw-semibold text-dark">Last Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="lname" class="form-control" value="Ali">
                                    </div>
                                </div>
                            </div>
                            <div class="col__item"> 
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="dname" class="small fw-semibold text-dark">Display Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="dname" class="form-control" value="Kalid">
                                    </div>
                                </div>
                            </div>
                            <div class="col__item"> 
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
                            </div>
                            <div class="col__item"> 
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
                            </div>
                            <div class="col__item">
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
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="phone" class="small fw-semibold text-dark">Phone</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="phone" class="form-control" value="555 3080 45">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="email" class="small fw-semibold text-dark">Email</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="email" class="form-control" value="ahme23@gmail.com">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="semail" class="small fw-semibold text-dark">Secondary Email</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="semail" class="form-control" value="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="emergency_contact" class="small fw-semibold text-dark">Emergency Contact</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="emergency_contact" class="form-control" value="+971 555 3080 45">  
                                        <input type="text" id="emergency_contact_code" class="form-control" value="+971 555 3080 45">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="emergency_phone" class="small fw-semibold text-dark">Emergency Phone</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="emergency_phone" class="form-control" value="+91 9876543210">   
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
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
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="cname" class="small fw-semibold text-dark">Company Name</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="cname" class="form-control" value="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="lcompanyID" class="small fw-semibold text-dark">Legal Company ID</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="lcompanyID" class="form-control" value="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="address1" class="small fw-semibold text-dark">Adress Line 1</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="address1" class="form-control" value="" placeholder="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="address2" class="small fw-semibold text-dark">Adress Line 2</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="address2" class="form-control" value="" placeholder="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="country" class="small fw-semibold text-dark">County</label>
                                    </div>
                                    <div class="col-8">
                                        <select id="country2" name="country" class="form-select custom_select country_select">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="state" class="small fw-semibold text-dark">State</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="state" class="form-control" value="Dubai" placeholder="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="city" class="small fw-semibold text-dark">City</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="city" class="form-control" value="Dubai" placeholder="-">  
                                    </div>
                                </div>
                            </div>
                            <div class="col__item">
                                <div class="row g-1 align-items-center">
                                    <div class="col-4">
                                        <label for="zip" class="small fw-semibold text-dark">Zip/Postal/Code</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="zip" class="form-control" value="Dubai" placeholder="-">  
                                    </div>
                                </div>
                            </div>
                        </div><!--.//row-->
                         
                    </div><!--.col-->
                </div><!--.d-flex-->

            </div><!--.bg-->

            <div class="bg-white px-3 px-lg-4 pt-3 pb-0 mt-1">
                <ul class="nav nav-tabs account__tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Checklist</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Tickets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Waivers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Credentials</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="jumpLog-tab" data-bs-toggle="tab" data-bs-target="#jumpLog-tab-pane" type="button" role="tab" aria-controls="jumpLog-tab-pane" aria-selected="false">Jump Log</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="equipment-tab" data-bs-toggle="tab" data-bs-target="#equipment-tab-pane" type="button" role="tab" aria-controls="equipment-tab-pane" aria-selected="false">Equipment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profiles-tab" data-bs-toggle="tab" data-bs-target="#profiles-tab-pane" type="button" role="tab" aria-controls="profiles-tab-pane" aria-selected="false">Profiles</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="false">Notes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transctions-tab" data-bs-toggle="tab" data-bs-target="#transctions-tab-pane" type="button" role="tab" aria-controls="transctions-tab-pane" aria-selected="false">Transctions</button>
                    </li>
                </ul>
            </div><!--.bg-->
            <div class="p-3" style="background-color: #F8F9FA;">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="bg-white p-3 rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Pre‑Manifest Checklist</label>
                                    
                                    <div class="dropdown">
                                        <button class="btn btn__base border bg-light rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Tandem
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown">
                                            <li>
                                                <div class="menu-label mb-1">Filters</div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="view_sent" id="view_sent" class="form-check-input">
                                                    <label for="view_sent" class="form-check-label">View Sent</label>
                                                </div>
                                            </li> 
                                            <li>
                                                <div class="line__divider hr" style="margin: 0.5rem -1rem;width: calc(100% + 2rem);"></div>
                                            </li>
                                            <li>
                                                <div class="menu-label mb-1">View Sent</div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="tandeem" id="tandeem" class="form-check-input">
                                                    <label for="tandeem" class="form-check-label">Tandeem</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="sport" id="sport" class="form-check-input">
                                                    <label for="sport" class="form-check-label">Sport</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Student" id="Student" class="form-check-input">
                                                    <label for="Student" class="form-check-label">Student</label>
                                                </div>
                                            </li>  
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn btn__base btn-outline-secondary border px-3 rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#ungroundCustomerModal2"
                                >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.6667 2.6663a.6667.6667 0 0 0 0 1.3334H8a.6667.6667 0 1 0 0-1.3334zm-1.8862 0C5.055 1.8895 5.7958 1.333 6.6667 1.333H8c.8708 0 1.6116.5566 1.8862 1.3333h.7805a2 2 0 0 1 2 2v3.3334a.6667.6667 0 0 1-1.3334 0V4.6663a.6667.6667 0 0 0-.6666-.6666h-.7805C9.6116 4.7765 8.8708 5.333 8 5.333H6.6667c-.8708 0-1.6117-.5565-1.8862-1.3333H4a.6666.6666 0 0 0-.6667.6666v8A.6664.6664 0 0 0 4 13.333h3.798a.6667.6667 0 0 1 0 1.3333H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2zM4.6667 7.333a.6667.6667 0 0 1 .6666-.6667H8a.6667.6667 0 0 1 0 1.3334H5.3333a.6667.6667 0 0 1-.6666-.6667m0 2.6667a.6667.6667 0 0 1 .6666-.6667h2a.6667.6667 0 1 1 0 1.3333h-2a.6666.6666 0 0 1-.6666-.6666M11 10.6663c-.5523 0-1 .4478-1 1s.4477 1 1 1 1-.4477 1-1-.4477-1-1-1m-2.3333 1c0-1.2886 1.0446-2.3333 2.3333-2.3333s2.3333 1.0447 2.3333 2.3333c0 .4019-.1015.78-.2804 1.1101l1.4185 1.4185a.6666.6666 0 0 1 0 .9428.6666.6666 0 0 1-.9428 0l-1.4185-1.4185A2.32 2.32 0 0 1 11 13.9997c-1.2887 0-2.3333-1.0447-2.3333-2.3334" fill="#868E96"/></svg>
                                    <span>Audit Log</span>
                                </button>
                            </div>
                            <div class=" " style="max-width:650px;">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0">
                                                <span class="fw-semibold small text-dark">E-waiver</span>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Signed Date:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;" value="01/08/2025">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Exp:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;" value="01/08/2025">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <span class="fw-semibold small text-dark">Paper waiver</span>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Signed Date:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;"  >
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Exp:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;" value="01/08/2025">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <span class="fw-semibold small text-dark">Shoulder Dislocation</span>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Signed Date:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;" value="01/08/2025">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <label for="signedDate">Exp:</label>
                                                    <div class="flex-grow date-custom">
                                                        <input type="date" class="form-control" style="width:180px;" value="01/08/2025">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--.tab-pane-->
 
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Tickets</label> 
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative" style="z-index: 99;"> 
                                    <input type="text" id="dateRangePicker" class="form-control date__input" value="2025-12-13 to 2026-01-28"> 
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Type
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown">
                                            <li>
                                                <div class="menu-label mb-1">Filters</div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="view_sent" id="view_sent" class="form-check-input">
                                                    <label for="view_sent" class="form-check-label">View Sent</label>
                                                </div>
                                            </li> 
                                            <li>
                                                <div class="line__divider hr" style="margin: 0.5rem -1rem;width: calc(100% + 2rem);"></div>
                                            </li>
                                            <li>
                                                <div class="menu-label mb-1">View Sent</div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="tandeem" id="tandeem" class="form-check-input">
                                                    <label for="tandeem" class="form-check-label">Tandeem</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="sport" id="sport" class="form-check-input">
                                                    <label for="sport" class="form-check-label">Sport</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Student" id="Student" class="form-check-input">
                                                    <label for="Student" class="form-check-label">Student</label>
                                                </div>
                                            </li>  
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="verfied" id="verfied" class="form-check-input">
                                                    <label for="verfied" class="form-check-label">Verify</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="unverified" id="unverified" class="form-check-input">
                                                    <label for="unverified" class="form-check-label">Unverify</label>
                                                </div>
                                            </li>   
                                        </ul>
                                    </div>
                                    <div class="line__divider"></div>
                                    <button class="btn rounded-pill btn-link">
                                        Reset Filters
                                    </button>
                                </div>
                            </div>
                                
                            <div class="table-responsive">
                               <table class="table data-table large__table" id="">
                                    <thead>
                                        <tr> 
                                            <th>Booking ID</th>
                                            <th>Booking ID</th>
                                            <th>Created Date</th>
                                            <th>Expiry Date</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                            <th>Product Choice</th>
                                            <th>Gros Amt.</th>
                                            <th>Product Expiry Date</th>
                                            <th>Status</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td>52936567</td>
                                            <td>55069827</td>
                                            <td>10/10/2022</td>
                                            <td>08/10/2022</td>
                                            <td>Tandem</td>
                                            <td>Classroom</td>
                                            <td>Classroom Session</td>
                                            <td>
                                                <span class="text-success">1750.00</span>
                                            </td>
                                            <td>08/10/2022</td>
                                            <td><span class="badge bg-success">Used</span></td>
                                        </tr> 
                                        <tr> 
                                            <td>52936567</td>
                                            <td>55069827</td>
                                            <td>10/10/2022</td>
                                            <td>08/10/2022</td>
                                            <td>Tandem</td>
                                            <td>Classroom</td>
                                            <td>Classroom Session</td>
                                            <td>
                                                <span class="text-success">1750.00</span>
                                            </td>
                                            <td>08/10/2022</td>
                                            <td><span class="badge bg-danger">Canceled</span></td>
                                        </tr> 
                                        <tr> 
                                            <td>52936567</td>
                                            <td>55069827</td>
                                            <td>10/10/2022</td>
                                            <td>08/10/2022</td>
                                            <td>Tandem</td>
                                            <td>Classroom</td>
                                            <td>Classroom Session</td>
                                            <td>
                                                <span class="text-success">1750.00</span>
                                            </td>
                                            <td>08/10/2022</td>
                                            <td><span class="badge bg-secondary">Unused</span></td>
                                        </tr> 
                                         
                                        
                                    </tbody>
                                </table>  
                            </div>
                        </div>
                    </div><!--.tab-pane-->

                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Waivers</label> 
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">  
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Type
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown">
                                            <li>
                                                <div class="menu-label mb-1">Filters</div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="view_sent" id="view_sent" class="form-check-input">
                                                    <label for="view_sent" class="form-check-label">View Sent</label>
                                                </div>
                                            </li>  
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Signed as
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="verfied" id="verfied" class="form-check-input">
                                                    <label for="verfied" class="form-check-label">Verify</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="unverified" id="unverified" class="form-check-input">
                                                    <label for="unverified" class="form-check-label">Unverify</label>
                                                </div>
                                            </li>   
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </button>
                                        <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="verfied" id="verfied" class="form-check-input">
                                                    <label for="verfied" class="form-check-label">Verify</label>
                                                </div>
                                            </li>  
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" name="unverified" id="unverified" class="form-check-input">
                                                    <label for="unverified" class="form-check-label">Unverify</label>
                                                </div>
                                            </li>   
                                        </ul>
                                    </div>
                                    <div class="line__divider"></div>
                                    <button class="btn rounded-pill btn-link">
                                        Reset Filters
                                    </button>
                                </div>
                            </div>
                                
                            <div class="table-responsive">
                                <table class="table data-table large__table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="">
                                                    <input type="checkbox" class="form-check-input position-relative" id="check">
                                                    <label for="check"></label>
                                                </div>
                                            </th>
                                            <th>Ref. ID</th>
                                            <th>Booking ID</th>
                                            <th>Waiver ID</th>
                                            <th>Full Name</th>
                                            <th>Country</th>
                                            <th>Gender</th>
                                            <th>DOB</th>
                                            <th>Type</th>
                                            <th>Signed Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th> 
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        <tr> 
                                            <?php include('includes/components/waivers-table-tr.inc.php'); ?>
                                        </tr> 
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--.tab-pane-->
 
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Credentials</label> 
                                </div>
                                <a href="#" class="btn btn-primary rounded-pill px-4">
                                    Add Credentials
                                </a>
                            </div>
                                
                            <div class="table-responsive">
                                <table class="table data-table large__table" id="dataTable">
                                    <thead>
                                        <tr> 
                                            <th>Organization</th>
                                            <th>Credential type</th>
                                            <th>Identifier</th>
                                            <th>Restriction</th>
                                            <th>License type</th>
                                            <th>Canopy size</th>
                                            <th>Valid from</th>
                                            <th>Expire date</th>
                                            <th>Verification date</th>
                                            <th>Notes</th>
                                            <th>Check-in status</th> 
                                            <th>Verified by</th>
                                            <th>Wing Loading</th>
                                            <th>Created by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td>USPA</td>
                                            <td>A License</td>
                                            <td>USPA-12345</td>
                                            <td>None</td>
                                            <td>A</td>
                                            <td>170</td>
                                            <td>10/10/2022</td>
                                            <td>
                                                <span class="text-success">09/10/2026</span>
                                            </td>
                                            <td>10/10/2022</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Verified</span>
                                            </td>
                                            <td>Ahmed Ali</td>
                                            <td>10</td>
                                            <td>Jhon Smith</td>
                                        </tr> 
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--.tab-pane-->

                    <div class="tab-pane fade" id="jumpLog-tab-pane" role="tabpanel" aria-labelledby="jumpLog-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Jump Log</label> 
                                </div>
                                
                            </div>
                            <div class="row g-0 align-items-center mb-3">
                                <div class="col-xl-6">
                                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start gap-3"> 
                                        <button class="btn btn__base">
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z" fill="#000" fill-opacity=".2"/></svg>
                                            <span>Send to email</span>
                                        </button>
                                        <button class="btn btn__base"> 
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.667A.667.667 0 0 0 4 3.334v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.334a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.333a.67.67 0 0 1 .195.471v3.334a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.333v-2zM10 3.61l1.057 1.057H10zm1.529 7.528a.667.667 0 1 1 .942-.943l2 2c.26.26.26.683 0 .943l-2 2a.667.667 0 1 1-.942-.943l.861-.861H9.333a.667.667 0 0 1 0-1.334h3.057z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.667A.667.667 0 0 0 4 3.334v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.334a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.333a.67.67 0 0 1 .195.471v3.334a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.333v-2zM10 3.61l1.057 1.057H10zm1.529 7.528a.667.667 0 1 1 .942-.943l2 2c.26.26.26.683 0 .943l-2 2a.667.667 0 1 1-.942-.943l.861-.861H9.333a.667.667 0 0 1 0-1.334h3.057z" fill="#000" fill-opacity=".2"/></svg>
                                            <span>Export</span>
                                        </button>
                                        <button class="btn btn__base"> 
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z" fill="#000" fill-opacity=".2"/></svg>
                                            <span>Print</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2"> 
                                        <input type="text" id="dateRangePicker" class="form-control date__input" value="9/9/2025 - 9/9/2025"> 
                                        <div class="dropdown">
                                            <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Type
                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </button>
                                            <ul class="dropdown-menu px-3 checkboxDropdown">
                                                <li>
                                                    <div class="menu-label mb-1">Filters</div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="view_sent" id="view_sent" class="form-check-input">
                                                        <label for="view_sent" class="form-check-label">View Sent</label>
                                                    </div>
                                                </li> 
                                                <li>
                                                    <div class="line__divider hr" style="margin: 0.5rem -1rem;width: calc(100% + 2rem);"></div>
                                                </li>
                                                <li>
                                                    <div class="menu-label mb-1">View Sent</div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="tandeem" id="tandeem" class="form-check-input">
                                                        <label for="tandeem" class="form-check-label">Tandeem</label>
                                                    </div>
                                                </li>  
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="sport" id="sport" class="form-check-input">
                                                        <label for="sport" class="form-check-label">Sport</label>
                                                    </div>
                                                </li>  
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="Student" id="Student" class="form-check-input">
                                                        <label for="Student" class="form-check-label">Student</label>
                                                    </div>
                                                </li>  
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </button>
                                            <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="verfied" id="verfied" class="form-check-input">
                                                        <label for="verfied" class="form-check-label">Verify</label>
                                                    </div>
                                                </li>  
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="unverified" id="unverified" class="form-check-input">
                                                        <label for="unverified" class="form-check-label">Unverify</label>
                                                    </div>
                                                </li>   
                                            </ul>
                                        </div>
                                        <div class="line__divider"></div>
                                        <button class="btn rounded-pill btn-link">
                                            Reset Filters
                                        </button>
                                    </div>
                                </div>
                            </div><!--.//row-->
                                
                            <div class="table-responsive">
                                <table class="table data-table large__table" id="dataTable">
                                    <thead>
                                        <tr> 
                                            <th>Organization</th>
                                            <th>Credential type</th>
                                            <th>Identifier</th>
                                            <th>Restriction</th>
                                            <th>License type</th>
                                            <th>Canopy size</th>
                                            <th>Valid from</th>
                                            <th>Expire date</th>
                                            <th>Verification date</th>
                                            <th>Notes</th>
                                            <th>Check-in status</th> 
                                            <th>Verified by</th>
                                            <th>Wing Loading</th>
                                            <th>Created by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td>USPA</td>
                                            <td>A License</td>
                                            <td>USPA-12345</td>
                                            <td>None</td>
                                            <td>A</td>
                                            <td>170</td>
                                            <td>10/10/2022</td>
                                            <td>
                                                <span class="text-success">09/10/2026</span>
                                            </td>
                                            <td>10/10/2022</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Verified</span>
                                            </td>
                                            <td>Ahmed Ali</td>
                                            <td>10</td>
                                            <td>Jhon Smith</td>
                                        </tr> 
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--.tab-pane--> 

                    <div class="tab-pane fade" id="equipment-tab-pane" role="tabpanel" aria-labelledby="equipment-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Equipment</label> 
                                </div>
                                <a href="#" class="btn btn-primary rounded-pill px-4"
                                    data-bs-toggle="modal" data-bs-target="#addEquipmentModal"
                                >
                                    Add Equipment
                                </a>
                            </div> 
                                
                            <div class="table-responsive">
                                <table class="table data-table large__table" id="dataTable4">
                                    <thead>
                                        <tr> 
                                            <th>Name</th>
                                            <th>Container Make</th>
                                            <th>Main</th>
                                            <th>Canopy Size</th>
                                            <th>Reverse Canopy</th>
                                            <th>Reverse Canopy Size</th>
                                            <th>AAD Make</th>
                                            <th>Reverse Repack Date</th>
                                            <th>Reverse Due</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td>Equipment 1</td>
                                            <td>UPT</td>
                                            <td>Canopy Name</td>
                                            <td>170</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Vigil</td>
                                            <td>
                                                09/10/2026
                                            </td>
                                            <td>10/10/2022</td>
                                            <td>10/10/2022</td> 
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td> 
                                            <td>
                                                <div class="d-inline-flex align-items-center gap-2">
                                                    <button class="btn ac__btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookingUserDetail" aria-controls="offcanvasBookingUserDetail">
                                                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.21.22l-5.68 5.7a.8.8 0 0 1-.59.24H7.46a.83.83 0 0 1-.83-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 1 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 1 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.48-2.48V7.45c0-.65.26-1.29.72-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.21.22l-5.68 5.7a.8.8 0 0 1-.59.24H7.46a.83.83 0 0 1-.83-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 1 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 1 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.48-2.48V7.45c0-.65.26-1.29.72-1.75" fill="#000" fill-opacity=".2"/></svg>
                                                    </button>
                                                    <button class="btn ac__btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookingUserDetail" aria-controls="offcanvasBookingUserDetail">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.833496 9.99967C0.833496 9.99967 4.16683 3.33301 10.0002 3.33301C15.8335 3.33301 19.1668 9.99967 19.1668 9.99967C19.1668 9.99967 15.8335 16.6663 10.0002 16.6663C4.16683 16.6663 0.833496 9.99967 0.833496 9.99967Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg> 
                                                    </button>
                                                </div>
                                            </td>
                                        </tr> 
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--.tab-pane-->

                    <div class="tab-pane fade" id="profiles-tab-pane" role="tabpanel" aria-labelledby="profiles-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Profiles</label> 
                                </div>
                                <div class="d-inline-flex align-items-center gap-2">
                                    <div class="form-check d-inline-flex">
                                        <input 
                                            type="checkbox"
                                            name="is_renting_profile"
                                            id="is_renting_profile"
                                            class="form-check-input"
                                        >
                                        <label for="is_renting_profile" class="form-check-label">Is renting profile</label>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary rounded-pill">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.667 2.666a.667.667 0 0 0 0 1.334H8a.667.667 0 1 0 0-1.334zm-1.887 0a2 2 0 0 1 1.887-1.333H8a2 2 0 0 1 1.886 1.333h.78a2 2 0 0 1 2 2V8a.667.667 0 0 1-1.333 0V4.666A.667.667 0 0 0 10.667 4h-.78A2 2 0 0 1 8 5.333H6.667A2 2 0 0 1 4.78 4H4a.667.667 0 0 0-.667.666v8a.666.666 0 0 0 .667.667h3.798a.667.667 0 0 1 0 1.333H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2zm-.113 4.667c0-.368.298-.667.666-.667H8A.667.667 0 0 1 8 8H5.333a.667.667 0 0 1-.666-.667m0 2.667c0-.369.298-.667.666-.667h2a.667.667 0 1 1 0 1.333h-2A.667.667 0 0 1 4.667 10m6.333.666a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2.333 1a2.333 2.333 0 1 1 4.386 1.11l1.418 1.419a.667.667 0 1 1-.942.943l-1.419-1.419a2.333 2.333 0 0 1-3.443-2.053" fill="#1864AB"/></svg>
                                        <span>Audit Log</span>
                                    </a>
                                    <a href="#" class="btn btn__base btn-outline-secondary border px-3 rounded-pill"
                                        data-bs-toggle="modal" data-bs-target="#editProfilesModal"
                                    >
                                        Edit
                                    </a>
                                </div>
                            </div> 
                               
                            <div class="d-flex flex-row gap-3 align-items-start">
                                <div class="total__result__box p-3 rounded-3 flex-shrink-0 text-center d-flex flex-column gap-2">
                                    <p class="mb-0 fs-13 text-dark">Total Jumps</p>
                                    <div class="d-inline-block text-primary px-2 py-1 w-100 rounded-3 fs-4 lh-1 fw-bold" style="background-color: #D0EBFF;height:2rem;">50</div>
                                    <div class="bg-white p-2 rounded-3 d-flex flex-column gap-2 mt-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <p class="mb-0 text-dark fs-13">Palm</p>
                                            <div class="number py-1 px-3 px-md-4 rounded-3 success__box fs-18 fw-semibold lh-1">35</div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <p class="mb-0 text-dark fs-13">Other</p>
                                            <div class="d-inline-flex gap-2">
                                                <div class="number py-1 px-2 rounded-3 danger__box fs-18 fw-semibold lh-1">15</div>
                                                <button class="btn p-0"
                                                    type="button" data-bs-target="#addJumpRecordModal" data-bs-toggle="modal"
                                                >
                                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x=".43" y=".43" width="23.14" height="23.14" rx="11.57" stroke="#FAB005" stroke-width=".86"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12 7.43c.32 0 .57.25.57.57v3.43H16a.57.57 0 1 1 0 1.14h-3.43V16a.57.57 0 0 1-1.14 0v-3.43H8a.57.57 0 0 1 0-1.14h3.43V8c0-.32.25-.57.57-.57" fill="#FAB005"/></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1"> 
                                    <div class="bg-light p-3 rounded-3">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-xl-3">
                                                <div class="bg-white p-3 rounded-3">
                                                    <p class="mb-2 fw-semibold small text-dark">Unlicensed</p>
                                                    <div class="d-flex flex-column gap-2">
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Tandem">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="AFF Student">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Solo Student">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="bg-white p-3 rounded-3">
                                                    <p class="mb-2 fw-semibold small text-dark">Licensed</p>
                                                    <div class="d-flex flex-column gap-2">
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Sport">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="TIRC">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Front Rider">
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="bg-white p-3 rounded-3">
                                                    <p class="mb-2 fw-semibold small text-dark">Instructor</p>
                                                    <div class="d-flex flex-column gap-2">
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Tandem Instructor">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="AFF Instructor,">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Coach FGH">
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="bg-white p-3 rounded-3">
                                                    <p class="mb-2 fw-semibold small text-dark">Non-Jumper</p>
                                                    <div class="d-flex flex-column gap-2">
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Pilot">
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control shadow-none h-40" value="Packer">
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--.total_result_box-->
                        </div>
                    </div><!--.tab-pane-->

                    <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Notes</label> 
                                </div> 
                            </div> 
                                
                            <div class="d-flex flex-column gap-2">
                                <div class="bg-light p-2 border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col">
                                            <input type="text" class="form-control bg-transparent shadow-none border-0">
                                        </div>
                                        <button class="btn btn-primary rounded-pill px-4">
                                            Add
                                        </button>
                                    </div>
                                </div>
                                <div class="p-2 border rounded-3">
                                    <p class="fs-12 text-muted mb-0">2025-10-10 14:22 • Ahmed Salim</p>
                                    <p class="mb-0 text-dark">Customer is not fitting to jump</p>
                                </div>
                                <div class="p-2 border rounded-3">
                                    <p class="fs-12 text-muted mb-0">2025-10-10 14:22 • Ahmed Salim</p>
                                    <p class="mb-0 text-dark">Customer is not fitting to jump</p>
                                </div>

                            </div>
                        </div>
                    </div><!--.tab-pane-->

                    <div class="tab-pane fade" id="transctions-tab-pane" role="tabpanel" aria-labelledby="transctions-tab" tabindex="0">
                        <div class="bg-white p-3 filter__btn rounded-3">
                            <div class="d-flex algin-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <label for="checkList" class="fw-semibold small text-dark text-nowrap">Transctions</label> 
                                </div> 
                            </div> 
                                
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Container</th>
                                            <th>AAD</th>
                                            <th>Reserve Renew</th>
                                            <th>Reserve Due (days)</th>
                                            <th>Canopy</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Equipment Name</td>
                                            <td>UPT</td>
                                            <td>Vigil</td>
                                            <td>2025-04-01</td>
                                            <td>180</td>
                                            <td>180</td>
                                            <td>
                                                <span class="text-success fw-semibold">OK</span>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><!--.tab-pane-->
                </div><!--.tab-content-->
                
            </div><!--.bg-->
 
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<?php $isMacher="true"; include('includes/components/waiver-case-offcanvas.inc.php'); ?>
<?php include('includes/components/bookings-offcanvas.inc.php'); ?>

<!-- Add Equipment Modal -->
<div class="modal fade" id="addEquipmentModal" tabindex="-1" aria-labelledby="addEquipmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:674px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="addEquipmentModalLabel">Add Equipment</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto">
                <from class="row g-4">
                    <div class="col-md-6">
                        <label for="equivement_name" class="d-block fw-semibold text-dark mb-1">Equipment Name <span class="text-danger">*</span></label>
                        <input type="text" name="equivement_name" id="equivement_name" class="form-control shadow-none h-40" placeholder="Enter equipment name">
                    </div>
                    <div class="col-md-6">
                        <label for="container_make" class="d-block fw-semibold text-dark mb-1">Container Make <span class="text-danger">*</span></label>
                        <input type="text" name="container_make" id="container_make" class="form-control shadow-none h-40" placeholder="Enter container make">
                    </div>
                    <div class="col-md-6">
                        <label for="main_canopy" class="d-block fw-semibold text-dark mb-1">Main Canopy <span class="text-danger">*</span></label>
                        <input type="text" name="main_canopy" id="main_canopy" class="form-control shadow-none h-40" placeholder="Enter main canopy">
                    </div>
                    <div class="col-md-6">
                        <label for="main_canopy_size" class="d-block fw-semibold text-dark mb-1">Main Canopy Size <span class="text-danger">*</span></label>
                        <input type="text" name="main_canopy_size" id="main_canopy_size" class="form-control shadow-none h-40" placeholder="Enter reverse canopy size">
                    </div>
                    <div class="col-md-6">
                        <label for="reverse_canopy" class="d-block fw-semibold text-dark mb-1">Reverse Canopy <span class="text-danger">*</span></label>
                        <input type="text" name="reverse_canopy" id="reverse_canopy" class="form-control shadow-none h-40" placeholder="Enter reverse canopy size">
                    </div>
                    <div class="col-md-6">
                        <label for="reverse_canopy_size" class="d-block fw-semibold text-dark mb-1">Reverse Canopy Size <span class="text-danger">*</span></label>
                        <input type="text" name="reverse_canopy_size" id="reverse_canopy_size" class="form-control shadow-none h-40" placeholder="Enter main canopy size">
                    </div>
                    <div class="col-md-6">
                        <label for="aad_make" class="d-block fw-semibold text-dark mb-1">AAD Make <span class="text-danger">*</span></label>
                        <input type="text" name="aad_make" id="aad_make" class="form-control shadow-none h-40" placeholder="Enter aad make">
                    </div>
                    <div class="col-md-6">
                        <label for="reserve_repack_date" class="d-block fw-semibold text-dark mb-1">Reserve Repack Date <span class="text-danger">*</span></label>
                        <input type="date" name="reserve_repack_date" id="reserve_repack_date" class="form-control shadow-none h-40" placeholder="Enter reserve repack date">
                    </div>
                    <div class="col-md-6">
                        <label for="reserve_due" class="d-block fw-semibold text-dark mb-1">Reserve Due <span class="text-danger">*</span></label>
                        <input type="date" name="reserve_due" id="reserve_due" class="form-control shadow-none h-40" placeholder="Enter reserve due">
                    </div>
                    <div class="col-md-6">
                        <label for="expiry_date" class="d-block fw-semibold text-dark mb-1">Expiry Date <span class="text-danger">*</span></label>
                        <input type="date" name="expiry_date" id="expiry_date" class="form-control shadow-none h-40" placeholder="Enter expiry date">
                    </div>
                    <div class="col-md-6">
                        <label for="expiry_date" class="d-block fw-semibold text-dark mb-1">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select shadow-none h-40">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="btn__box d-flex justify-content-end gap-3 col-12">
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary rounded-pill">Save</button>
                    </div>
                </from>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<!-- Profile Manager Modal -->
<div class="modal fade" id="editProfilesModal" tabindex="-1" aria-labelledby="editProfilesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:900px;">
        <div class="modal-content p-0">
            <div class="modal-header border-0 d-flex justify-content-between px-4 py-3">
                <p class="modal-title small fw-semibold text-dark mb-0" id="editProfilesModalLabel">Profile Manager</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto p-0">
                <div class="bg-light p-3 rounded-3">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="bg-white p-3 rounded-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="mb-0 fw-semibold small text-dark">Customer</p>
                                    <div class="form-check"> 
                                        <input type="checkbox" class="form-check-input" value="AFF Student">
                                        <label for="" class="fs-12 text-dark form-check-label">Select All</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="AFF Student">
                                            <label for="" class="fs-12 text-dark form-check-label">AFF Student</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Event Organizer">
                                            <label for="" class="fs-12 text-dark form-check-label">Event Organizer</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="IAD Instructor">
                                            <label for="" class="fs-12 text-dark form-check-label">IAD Instructor</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="JetMan">
                                            <label for="" class="fs-12 text-dark form-check-label">JetMan</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Other Department">
                                            <label for="" class="fs-12 text-dark form-check-label">Other Department</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="SOLO Student">
                                            <label for="" class="fs-12 text-dark form-check-label">SOLO Student</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Sport Jumper">
                                            <label for="" class="fs-12 text-dark form-check-label">Sport Jumper</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Tandem">
                                            <label for="" class="fs-12 text-dark form-check-label">Tandem</label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 rounded-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="mb-0 fw-semibold small text-dark">Professional</p>
                                    <div class="form-check"> 
                                        <input type="checkbox" class="form-check-input" value="">
                                        <label for="" class="fs-12 text-dark form-check-label">Select All</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="AFF Instructor">
                                            <label for="" class="fs-12 text-dark form-check-label">AFF Instructor</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Coach">
                                            <label for="" class="fs-12 text-dark form-check-label">Coach</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Coach FGH">
                                            <label for="" class="fs-12 text-dark form-check-label">Coach FGH</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Examier">
                                            <label for="" class="fs-12 text-dark form-check-label">Examier</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Landed No Jump">
                                            <label for="" class="fs-12 text-dark form-check-label">Landed No Jump</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Load Organizer">
                                            <label for="" class="fs-12 text-dark form-check-label">Load Organizer</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Refusal">
                                            <label for="" class="fs-12 text-dark form-check-label">Refusal</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Staff">
                                            <label for="" class="fs-12 text-dark form-check-label">Staff</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Tandem Instructor">
                                            <label for="" class="fs-12 text-dark form-check-label">Tandem Instructor</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="TI_Handcam Cleared">
                                            <label for="" class="fs-12 text-dark form-check-label">TI_Handcam Cleared</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Videographer">
                                            <label for="" class="fs-12 text-dark form-check-label">Videographer</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Wingsult Instructor">
                                            <label for="" class="fs-12 text-dark form-check-label">Wingsult Instructor</label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 rounded-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <p class="mb-0 fw-semibold small text-dark">Professional - non jumper</p>
                                    <div class="form-check"> 
                                        <input type="checkbox" class="form-check-input" value="">
                                        <label for="" class="fs-12 text-dark form-check-label">Select All</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="DZSO/S&TA">
                                            <label for="" class="fs-12 text-dark form-check-label">DZSO/S&TA</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="GCA/Loader">
                                            <label for="" class="fs-12 text-dark form-check-label">GCA/Loader</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Load Master">
                                            <label for="" class="fs-12 text-dark form-check-label">Load Master</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Loader">
                                            <label for="" class="fs-12 text-dark form-check-label">Loader</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Mainfest">
                                            <label for="" class="fs-12 text-dark form-check-label">Mainfest</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Master Rigger">
                                            <label for="" class="fs-12 text-dark form-check-label">Master Rigger</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Packer">
                                            <label for="" class="fs-12 text-dark form-check-label">Packer</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Pilot">
                                            <label for="" class="fs-12 text-dark form-check-label">Pilot</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Rigger">
                                            <label for="" class="fs-12 text-dark form-check-label">Rigger</label>
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="form-check border p-2 rounded-3"> 
                                            <input type="checkbox" class="form-check-input" value="Video Editor">
                                            <label for="" class="fs-12 text-dark form-check-label">Video Editor</label>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div><!--.modal-body-->
            <div class="modal-footer px-4 py-3">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary rounded-pill">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Profile Manager Modal -->
<div class="modal fade" id="addJumpRecordModal" tabindex="-1" aria-labelledby="addJumpRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:472px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="addJumpRecordModalLabel">Add Jumps</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto">
                <div class="jump__counter__box d-flex flex-row gap-3 text-dark small">
                    <button class="btn rounded-circle p-0 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24"><path fill="#212529" d="M5.25 12a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75"/></svg>
                    </button>
                    <div class="flex-grow-1">
                        <input type="text"
                            name="jump_count"
                            id="jump_count"
                            class="form-control text-center"
                            value="25"
                            readonly
                            style="pointer-events:none;color:#ADB5BD;"
                        >
                    </div>
                    <button class="btn btn-plus rounded-circle p-0 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 256 256">
                            <path fill="currentColor" d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8Z"/>
                        </svg>
                    </button>
                </div>
                <div class="btn__box d-flex justify-content-end gap-2 mt-4 mt-md-5">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary rounded-pill">Save</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>


<!-- Profile Manager Modal -->
<div class="modal fade" id="ungroundCustomerModal" tabindex="-1" aria-labelledby="ungroundCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:510px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="ungroundCustomerModalLabel">Unground Customer</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto">
                <p class="m-0 text-dark small">
                    Are you sure want to unground this customer?”
                </p>
                <div class="btn__box d-flex justify-content-end gap-2 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger rounded-pill">Yes, Unground Customer</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<!-- Profile Manager Modal -->
<div class="modal fade" id="ungroundCustomerModal2" tabindex="-1" aria-labelledby="ungroundCustomerModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:510px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="ungroundCustomerModalLabel">Ground Customer</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 ff-noto">
                <p class="m-0 text-dark small">
                    Are you sure you want to ground this customer? They won’t be able to check‑in at the selected location until ungrounded.
                </p>
                <form action="" class="mt-4">
                    <div>
                        <label for="" class="fw-semibold text-dark d-block mb-1 small">Reason / Notes <span class="text-danger">*</span></label>
                        <textarea name="" id="" class="form-control shadow-none h-auto" rows="4" placeholder="Enter reason / notes"></textarea>
                    </div>
                </form>
                <div class="btn__box d-flex justify-content-end gap-2 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger rounded-pill">Ground Customer</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>


<!-- Profile Manager Modal -->
<div class="modal fade" id="verifyWaiverModal" tabindex="-1" aria-labelledby="verifyWaiverModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:510px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="verifyWaiverModalLabel">Verify Waiver</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 ff-noto">
                <p class="m-0 text-dark small">
                    There is a waiver already verified. Do you want to replace it with this one?
                </p>
                 
                <div class="btn__box d-flex justify-content-end gap-2 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-pill replaceWaiverModal">Yes, Match & Replace</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<!-- Profile Manager Modal -->
<div class="modal fade" id="replaceWaiverModal" tabindex="-1" aria-labelledby="replaceWaiverModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered my-0" style="max-width:965px;">
        <div class="modal-content flex-column rounded-0"> 
            <div class="user__box w-100 d-flex flex-row gap-3 border-bottom border-top-0 border-start-0 border-end-0 p-3 align-items-center">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                    class="img-fluid rounded-circle object-fit-cover flex-shrink-0" style="width:2rem;height:2rem;" 
                >
                <div class="flex-grow-1">
                    <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                    <div class="d-flex fs-12 align-items-center gap-2">
                        <span class="">moali38@mail.com</span><span class="dot"></span>
                        <span>Booking ID: 2323421</span>
                    </div>
                </div> 
            </div><!--.user_box-->
            <div class="px-4 border-bottom">
                <div class="row g-0 align-items-center">
                    <div class="col-6 border-end">
                        <div class="py-3">
                            <p class="small text-dark mb-0">Type</p>
                            <p class="small text-dark mb-0 fw-bold">Tandeem</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="py-3 ps-4">
                            <p class="small text-muted mb-0">Double click to add note</p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body px-4 pb-0 ff-noto">
                <div class="bg-white p-4 rounded-4 border shadow-sm scroll__box">
                    <h2 class="fs-2 text-center text-danger mb-3">Lorem ipsum dolor sit amet consectetur</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input size-20" id="checkbox1">
                        <label for="checkbox1" class="form-check-label fw-medium">I Agree</label>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input size-20" id="checkbox1">
                        <label for="checkbox1" class="form-check-label fw-medium">I Agree</label>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
                    </p>
                </div>
            </div><!--.offcanvas-body-->
        </div>
       
    </div>
</div>

 
<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
<script>
    $(".activeMatchModal").click(function() {
        $("#verifyWaiverModal").modal("show");
    });
    $(".replaceWaiverModal").click(function() {
        $("#verifyWaiverModal").modal("hide");
        $("#replaceWaiverModal").modal("show");
    });
</script>

<script>
    const inputPhone = document.querySelector("#phone"); 
    const itiPhone = window.intlTelInput(inputPhone, {
        initialCountry: "ae",
        loadUtils: () => import("/intl-tel-input/js/utils.js?1762589505757"),
    });
    itiPhone.promise.then(() => {
        console.log("Initialised!");
    });

    const inputContact = document.querySelector("#emergency_contact"); 
    const itiContact = window.intlTelInput(inputContact, {
        initialCountry: "ae",
        // separateDialCode : true,
        loadUtils: () => import("/intl-tel-input/js/utils.js?1762589505757"),
    });
    itiContact.promise.then(() => {
        console.log("Initialised!");
    });

    const inputEmergencyPhone = document.querySelector("#emergency_phone"); 
    const itiEmergencyPhone = window.intlTelInput(inputEmergencyPhone, {
        initialCountry: "ae",
        loadUtils: () => import("/intl-tel-input/js/utils.js?1762589505757"),
    });
    itiEmergencyPhone.promise.then(() => {
        console.log("Initialised!");
    });
</script>

<script>
    document.querySelectorAll('.jump__counter__box').forEach(box => {
        const input = box.querySelector('#jump_count');
        const minusBtn = box.querySelector('button:first-child');
        const plusBtn  = box.querySelector('.btn-plus');

        const MIN = 0;   // change if needed
        const MAX = 999; // optional limit

        minusBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10) || 0;
            if (value > MIN) {
                input.value = value - 1;
            }
        });

        plusBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10) || 0;
            if (value < MAX) {
                input.value = value + 1;
            }
        });
    });
</script>
