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
                            <button class="btn btn-primary rounded-pill"
                                type="button" data-bs-toggle="modal" data-bs-target="#sentManifestModal"
                            >Expire Waiver </button>
                            <button class="btn btn__base btn-light rounded-pill">Selected: 2</button>
                             
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
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="bg-white px-3 py-2 filter__btn position-relative z-3">
                <div class="row g-0 align-items-center">
                    <div class="col-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">
                            <div class="fs-13 text-dark">Expiry Date:</div>
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="9/9/2025 - 9/9/2025"></input> 
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Type
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Age Range
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
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Country
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu px-3 checkboxDropdown">
                                    <li>
                                        <div class="menu-label mb-1">Filters</div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="view_sent" id="view_sent" class="form-check-input">
                                            <label for="view_sent" class="form-check-label">Country name</label>
                                        </div>
                                    </li>  
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gender
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="g_male" id="g_male" class="form-check-input">
                                            <label for="g_male" class="form-check-label">Male</label>
                                        </div>
                                    </li>  
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="g_female" id="g_female" class="form-check-input">
                                            <label for="g_female" class="form-check-label">Female</label>
                                        </div>
                                    </li>  
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Signed as
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="g_male" id="g_male" class="form-check-input">
                                            <label for="g_male" class="form-check-label">Male</label>
                                        </div>
                                    </li>  
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="g_female" id="g_female" class="form-check-input">
                                            <label for="g_female" class="form-check-label">Female</label>
                                        </div>
                                    </li>  
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Status
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu px-3 checkboxDropdown"> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="verfied" id="verfied" class="form-check-input">
                                            <label for="verfied" class="form-check-label">Verified</label>
                                        </div>
                                    </li>  
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="unverifed" id="unverifed" class="form-check-input">
                                            <label for="unverifed" class="form-check-label">Unverified</label>
                                        </div>
                                    </li>  
                                </ul>
                            </div>
                            <div class="line__divider ms-4"></div>
                            <button class="btn rounded-pill btn-link">
                                Reset Filters
                            </button>
                        </div>
                    </div>

                     
                </div><!--.//row-->
            </div>


            
            <div class="mt-1 bg-white mt-2">
                    <div class="overflow-x-auto">

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
                </div><!--.//data_table-->
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->


 
<?php  include('includes/components/waiver-case-offcanvas.inc.php'); ?>


  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 