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
                        <button class="btn btn-primary rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#createOrganaizationModal">
                            Create New User
                        </button>
                    </div>
                    <div class="col-xl-6">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <div class="col"> 
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for ...">
                            </div>
                            <button class="btn ac__btn w-auto px-3 rounded-pill active">Name</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Email</button> 
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Phone No.</button> 
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
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Role
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
                                <th>Creation Date</th>
                                <th>Updated Date</th>
                                <th>Master Profile</th>
                                <th>Profile </th>
                                <th>Fields</th>
                                <th>Status</th>
                                <th>Created By</th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>08/08/2024</td>
                                <td>08/09/2025</td>
                                <td>Unlicensed</td>
                                <td>Tandem</td>
                                <td>E-waiver, P-waiver</td>
                                <td>
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </td> 
                                <td>Admin</td>
                                <td>
                                    <div class="d-inline-flex gap-2"> 
                                        <button class="btn ac__btn">
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99 1.45h-.1c-1.81 0-3.24 0-4.35.15a4.5 4.5 0 0 0-2.76 1.18A4.5 4.5 0 0 0 1.6 5.54c-.15 1.11-.15 2.54-.15 4.35v.9c0 1.44.02 2.6.15 3.55a4.5 4.5 0 0 0 1.18 2.75 4.5 4.5 0 0 0 2.76 1.19c1.11.15 2.54.15 4.35.15h.05c.34 0 .62-.28.62-.62v-6.42h3.1a.62.62 0 1 0 0-1.24h-3.1V8.08h6.62v1.86a.62.62 0 0 0 1.25 0v-.05c0-1.81 0-3.24-.15-4.35a4.5 4.5 0 0 0-1.18-2.76 4.5 4.5 0 0 0-2.76-1.18c-1.11-.15-2.54-.15-4.35-.15m-.05 5.38h7.2q-.03-.62-.1-1.13c-.13-1-.38-1.6-.82-2.04s-1.04-.7-2.05-.83a36 36 0 0 0-4.23-.14c-1.87 0-3.21 0-4.23.14-1 .13-1.6.4-2.05.83-.44.44-.7 1.04-.83 2.04q-.07.51-.1 1.13zm-.62 1.25v2.07H2.69V8.08zm0 3.3H2.7q0 1.2.06 2.08h6.56zm0 3.32h-6.4c.15.7.38 1.16.74 1.52.44.44 1.04.7 2.05.83.9.12 2.05.13 3.6.14z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 12.07a1.4 1.4 0 0 0-1.36.02q-.26.16-.5.45l-.03.04-2.6 2.82a3 3 0 0 0-.64.86c-.14.3-.16.63-.2 1.05v.19l-.02.25a.7.7 0 0 0 .57.65l.26.02h.18c.48.02.87.03 1.22-.11.36-.14.64-.41.99-.75l2.69-2.59q.27-.24.43-.5c.24-.42.25-.94.02-1.37q-.16-.26-.42-.51l-.04-.04-.04-.04q-.25-.28-.5-.44m-.84.9q.18-.08.34 0c.03.02.08.06.31.3.24.24.28.29.3.32a.4.4 0 0 1-.01.37l-.3.31-2.59 2.49c-.44.43-.56.53-.7.59s-.28.05-.8.04c.03-.47.05-.6.1-.72.05-.13.15-.24.5-.62l2.55-2.77c.23-.25.28-.28.3-.3" fill="#000"/></svg>
                                        </button>
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#000" fill-opacity=".2"/></svg>
                                        </button>
                                    </div>
                                </td> 
                            </tr> 
                            <tr> 
                                <td>08/08/2024</td>
                                <td>08/09/2025</td>
                                <td>Unlicensed</td>
                                <td>Tandem Instructor</td> 
                                <td>
                                    <div class="dropdown hover__menu">
                                        <button class="btn btn-link p-0 fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            E-waiver, P-waiver 2+
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">E-waiver</a></li>
                                            <li><a class="dropdown-item" href="#">P-waiver</a></li> 
                                            <li><a class="dropdown-item" href="#">Tandem Instructor Procedure</a></li>
                                            <li><a class="dropdown-item" href="#">Location Briefing</a></li>
                                        </ul>
                                    </div>
                                </td> 
                                <td>
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </td> 
                                <td>Admin</td>
                                <td>
                                    <div class="d-inline-flex gap-2"> 
                                        <button class="btn ac__btn">
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99 1.45h-.1c-1.81 0-3.24 0-4.35.15a4.5 4.5 0 0 0-2.76 1.18A4.5 4.5 0 0 0 1.6 5.54c-.15 1.11-.15 2.54-.15 4.35v.9c0 1.44.02 2.6.15 3.55a4.5 4.5 0 0 0 1.18 2.75 4.5 4.5 0 0 0 2.76 1.19c1.11.15 2.54.15 4.35.15h.05c.34 0 .62-.28.62-.62v-6.42h3.1a.62.62 0 1 0 0-1.24h-3.1V8.08h6.62v1.86a.62.62 0 0 0 1.25 0v-.05c0-1.81 0-3.24-.15-4.35a4.5 4.5 0 0 0-1.18-2.76 4.5 4.5 0 0 0-2.76-1.18c-1.11-.15-2.54-.15-4.35-.15m-.05 5.38h7.2q-.03-.62-.1-1.13c-.13-1-.38-1.6-.82-2.04s-1.04-.7-2.05-.83a36 36 0 0 0-4.23-.14c-1.87 0-3.21 0-4.23.14-1 .13-1.6.4-2.05.83-.44.44-.7 1.04-.83 2.04q-.07.51-.1 1.13zm-.62 1.25v2.07H2.69V8.08zm0 3.3H2.7q0 1.2.06 2.08h6.56zm0 3.32h-6.4c.15.7.38 1.16.74 1.52.44.44 1.04.7 2.05.83.9.12 2.05.13 3.6.14z" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 12.07a1.4 1.4 0 0 0-1.36.02q-.26.16-.5.45l-.03.04-2.6 2.82a3 3 0 0 0-.64.86c-.14.3-.16.63-.2 1.05v.19l-.02.25a.7.7 0 0 0 .57.65l.26.02h.18c.48.02.87.03 1.22-.11.36-.14.64-.41.99-.75l2.69-2.59q.27-.24.43-.5c.24-.42.25-.94.02-1.37q-.16-.26-.42-.51l-.04-.04-.04-.04q-.25-.28-.5-.44m-.84.9q.18-.08.34 0c.03.02.08.06.31.3.24.24.28.29.3.32a.4.4 0 0 1-.01.37l-.3.31-2.59 2.49c-.44.43-.56.53-.7.59s-.28.05-.8.04c.03-.47.05-.6.1-.72.05-.13.15-.24.5-.62l2.55-2.77c.23-.25.28-.28.3-.3" fill="#000"/></svg>
                                        </button>
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#000" fill-opacity=".2"/></svg>
                                        </button>
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
                <p class="modal-title small fw-semibold text-dark mb-0" id="createOrganaizationModalLabel">Create New User</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div>
                    <label for="name" class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                    <input type="text"
                        name="name" 
                        id="name"
                        class="form-control"
                        placeholder="Enter user name"
                    >
                </div>
                <div>
                    <label for="phone" class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                    <input type="text"
                        name="phone" 
                        id="phone"
                        class="form-control"
                        placeholder="Enter phone number"
                    >
                </div>
                <div>
                    <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                    <input type="text"
                        name="email" 
                        id="email"
                        class="form-control"
                        placeholder="Enter email"
                    >
                </div>
                <div>
                    <label for="select_role" class="form-label fw-semibold">Select Role <span class="text-danger">*</span></label>
                    <select name="role" id="role" class="form-select">
                        <option value="Select...">Select...</option>
                    </select>
                </div>
                <div >
                    <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                    <div class="form-check form-switch ps-0">
                        <label class="form-check-label" for="switchCheckChecked44">Active</label>
                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked44" checked>
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
 