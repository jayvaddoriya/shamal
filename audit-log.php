<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header pb-1">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="bg-white px-3 py-2 filter__btn"> 
                <div class="row gx-0 gy-3 gy-xl-0">
                    <div class="col-lg-8 col-xxl-9">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">
                            <div class="dropdown">
                                <button class="btn btn__base bg-white rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Pages
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base bg-white rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Section
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
                            <div class="line__divider ms-4"></div>
                            <button class="btn rounded-pill btn-link">
                                Reset Filters
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-3">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for customer, id">
                             
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
            <div class="mt-1 bg-white mt-2">
                <div class="table-responsive">
                    <table class="table audit__table log__table mb-0"
                        style="--sortDown: url('./assets/images/icons/sort-down.svg'); --sortUp: url('./assets/images/icons/sort-up.svg');"> 
                        <thead>
                            <tr>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Date <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Time <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Created/Updated by <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Page <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Section <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Field <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Old Value <span class="sort"></span>
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        New Value <span class="sort"></span>
                                    </div>
                                </th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
                            </tr>
                            <tr>
                                <?php include('includes/components/audit-log-table-tr.inc.php') ?>
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


<?php include('includes/components/waiver-case-offcanvas.inc.php'); ?>












 
<style>
    .audit__table th .sort { 
        background: var(--sortDown) no-repeat center center / 1rem;
    }
    .audit__table th.active-asc .sort {
        background: var(--sortUp) no-repeat center center / 1rem;
    }
</style>
<script>
    document.querySelectorAll(".audit__table th").forEach(th => {
        th.addEventListener("click", () => {
            // remove active state from others
            document.querySelectorAll(".audit__table th").forEach(el => el.classList.remove("active-asc", "active-desc"));

            // toggle asc/desc
            if (th.classList.contains("active-asc")) {
                th.classList.remove("active-asc");
                th.classList.add("active-desc");
            } else {
                th.classList.remove("active-desc");
                th.classList.add("active-asc");
            }
        });
    }); 
</script>
<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>