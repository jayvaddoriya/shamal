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
                         
                    </div>
                    <div class="col-xl-6">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <div class="col"> 
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for ...">
                            </div>
                            <button class="btn ac__btn w-auto px-3 rounded-pill active">Organization</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Credentials</button> 
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
            <div class="bg-white px-3 py-2 filter__btn">
                <div class="row g-0 align-items-center">
                    <div class="col-9">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2"> 
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="2025-12-13 to 2026-01-28"></input> 
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Created By
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
                            <div class="line__divider"></div>
                            <button class="btn rounded-pill btn-link">
                                Reset Filters
                            </button>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <button class="btn rounded-pill btn__base btn__export fw-bold align-items-center">
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.665A.667.667 0 0 0 4 3.332v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.332a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.334a.67.67 0 0 1 .195.471v3.333a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.334v-2zM10 3.608l1.057 1.057H10zm1.529 7.529a.667.667 0 1 1 .943-.943l2 2c.26.26.26.682 0 .943l-2 2a.667.667 0 0 1-.943-.943l.862-.862H9.333a.667.667 0 1 1 0-1.333h3.058z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.665A.667.667 0 0 0 4 3.332v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.332a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.334a.67.67 0 0 1 .195.471v3.333a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.334v-2zM10 3.608l1.057 1.057H10zm1.529 7.529a.667.667 0 1 1 .943-.943l2 2c.26.26.26.682 0 .943l-2 2a.667.667 0 0 1-.943-.943l.862-.862H9.333a.667.667 0 1 1 0-1.333h3.058z" fill="#000" fill-opacity=".2"/></svg>
                            <span>Export to Excel</span>
                        </button>
                    </div>
                     
                </div><!--.//row-->
            </div>


            
            <div class="mt-1 bg-white mt-2">
                <div class="overflow-x-auto" style="overflow-y:visible;"> 
                    <table class="table data-table large__table" id="dataTable">
                        <thead>
                            <tr> 
                                <th>Creatied Date</th>
                                <th>Experience Date</th>
                                <th>Ref ID</th>
                                <th>Type </th>
                                <th>Category</th>
                                <th>Full name</th>
                                <th>Product Choice</th> 
                                <th>Video Choice</th>
                                <th>Other</th>
                                <th>Gross Amt</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>08/08/2024</td>
                                <td>08/09/2025</td>
                                <td>24282945</td>
                                <td>24282945</td>
                                <td>Tandem</td>
                                <td>Mainfest</td>
                                <td>Wade Warren</td>
                                <td>Customer Session</td>
                                <td>-</td>
                                
                                <td>
                                    <span class="text-success">1750.00</span>
                                </td>
                                <td>08/09/2025</td>
                                <td>
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </td> 
                            </tr> 
                             
                                
                            
                        </tbody>
                    </table>
                </div><!--end::overflow-->
            </div><!--.//data_table-->
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

 
<!-- Clear Modal -->
<div class="modal fade" id="createOrganaizationModal" tabindex="-1" aria-labelledby="createOrganaizationModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:674px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="createOrganaizationModalLabel">Add Your Signature</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-3">
                <div>
                    <label for="organization" class="form-label">Organization <span class="text-danger">*</span></label>
                    <input type="text"
                        name="organization" 
                        id="organization"
                        class="form-control"
                        placeholder="Enter organization name"
                    >
                </div>
                <div>
                    <div class="bg-light border rounded-3 create__credentials__form">
                        <label for="password" class="form-label fw-semibold d-block p-3 border-bottom">Credentials <span class="text-danger">*</span></label>
                        <div class="bg-white p-3 border">
                            <div class="d-flex flex-row align-items-center gap-4">
                                <div class="flex-grow-1">
                                    <input 
                                        class="form-control" type="text"
                                        placeholder="Credentials 1"
                                    >
                                </div>
                                <div class="flex-shrink-0" style="width: 5.5rem;">
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </div>
                                <div class="flex-shrink-0" style="width: 2.5rem;">
                                    <button class="btn btn-outline-danger p-0 justify-content-center align-items-center rounded-circle">
                                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.2 2.2q.5-.5 1.1-.5h3.4a2 2 0 0 1 1.6 1.6V5h3.4a.8.8 0 0 1 0 1.7h-.1l-.8 9.2a2.5 2.5 0 0 1-2.5 2.4H6.7A2.5 2.5 0 0 1 4.2 16l-.8-9.2a.8.8 0 0 1 0-1.7h3.3V3.3q0-.6.5-1.1M5 6.7l.7 9v.1a1 1 0 0 0 .9.9h6.6a1 1 0 0 0 .9-.9l.7-9.1zM11.7 5H8.3V3.3h3.4zm-4 5.6A.8.8 0 0 1 9 9.4l1.1 1 1-1a.8.8 0 1 1 1.3 1.2l-1.1 1 1 1.1a.8.8 0 1 1-1.1 1.2L10 13l-1 1a.8.8 0 0 1-1.3-1.2l1.1-1z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.2 2.2q.5-.5 1.1-.5h3.4a2 2 0 0 1 1.6 1.6V5h3.4a.8.8 0 0 1 0 1.7h-.1l-.8 9.2a2.5 2.5 0 0 1-2.5 2.4H6.7A2.5 2.5 0 0 1 4.2 16l-.8-9.2a.8.8 0 0 1 0-1.7h3.3V3.3q0-.6.5-1.1M5 6.7l.7 9v.1a1 1 0 0 0 .9.9h6.6a1 1 0 0 0 .9-.9l.7-9.1zM11.7 5H8.3V3.3h3.4zm-4 5.6A.8.8 0 0 1 9 9.4l1.1 1 1-1a.8.8 0 1 1 1.3 1.2l-1.1 1 1 1.1a.8.8 0 1 1-1.1 1.2L10 13l-1 1a.8.8 0 0 1-1.3-1.2l1.1-1z" fill="#fa5252"/></svg>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-4 mt-3">
                                <div class="flex-grow-1">
                                    <input 
                                        class="form-control" type="text"
                                        placeholder="Credentials 1"
                                    >
                                </div>
                                <div class="flex-shrink-0" style="width: 5.5rem;">
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </div>
                                <div class="flex-shrink-0" style="width: 2.5rem;">
                                    <button class="btn btn-outline-danger p-0 justify-content-center align-items-center rounded-circle">
                                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.2 2.2q.5-.5 1.1-.5h3.4a2 2 0 0 1 1.6 1.6V5h3.4a.8.8 0 0 1 0 1.7h-.1l-.8 9.2a2.5 2.5 0 0 1-2.5 2.4H6.7A2.5 2.5 0 0 1 4.2 16l-.8-9.2a.8.8 0 0 1 0-1.7h3.3V3.3q0-.6.5-1.1M5 6.7l.7 9v.1a1 1 0 0 0 .9.9h6.6a1 1 0 0 0 .9-.9l.7-9.1zM11.7 5H8.3V3.3h3.4zm-4 5.6A.8.8 0 0 1 9 9.4l1.1 1 1-1a.8.8 0 1 1 1.3 1.2l-1.1 1 1 1.1a.8.8 0 1 1-1.1 1.2L10 13l-1 1a.8.8 0 0 1-1.3-1.2l1.1-1z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.2 2.2q.5-.5 1.1-.5h3.4a2 2 0 0 1 1.6 1.6V5h3.4a.8.8 0 0 1 0 1.7h-.1l-.8 9.2a2.5 2.5 0 0 1-2.5 2.4H6.7A2.5 2.5 0 0 1 4.2 16l-.8-9.2a.8.8 0 0 1 0-1.7h3.3V3.3q0-.6.5-1.1M5 6.7l.7 9v.1a1 1 0 0 0 .9.9h6.6a1 1 0 0 0 .9-.9l.7-9.1zM11.7 5H8.3V3.3h3.4zm-4 5.6A.8.8 0 0 1 9 9.4l1.1 1 1-1a.8.8 0 1 1 1.3 1.2l-1.1 1 1 1.1a.8.8 0 1 1-1.1 1.2L10 13l-1 1a.8.8 0 0 1-1.3-1.2l1.1-1z" fill="#fa5252"/></svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-link small fw-bold d-flex align-items-center gap-3">
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1" fill="#1864ab"/></svg>
                                    <span>Add Credential</span>
                                </button>
                            </div>
                        </div><!--.bg-white-->

                    </div>
                    <div class="mt-4">
                        <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                        <div class="form-check form-switch ps-0">
                            <label class="form-check-label" for="switchCheckChecked44">Active</label>
                            <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked44" checked>
                        </div>
                    </div>
                </div>
                 <div class="d-flex justify-content-end mt-3 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary small rounded-pill shadow-none px-4" data-bs-dismiss="modal">Save</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>
  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 