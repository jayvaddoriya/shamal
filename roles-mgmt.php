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
                            <a href="create-role.php" class="btn btn-primary rounded-pill shadow-none" 
                            >Create New Role</a> 
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <div class="col"> 
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for ...">
                            </div> 
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
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative z-3">
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Experiences <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Created by <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Status <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                             
                        </div>
                    </div>
                </div><!--.//row-->
            </div>



            <div class="mt-1 bg-white mt-2 position-relative z-2">
                <div class="overflow-x-auto">
                    <table class="table data-table load__table large__table" id="dataTable2">
                        <thead>
                            <tr>
                                <th>Role Name</th>
                                <th>Experiences</th>
                                <th>Created Date</th>
                                <th>Updated Date</th>
                                <th>Status</th>
                                <th>Created by </th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="type_warning">
                                <td>Admin</td>
                                <td>Sky Dive Palm, Deep Dive Dubai</td>
                                <td>2025-10-01</td>
                                <td>2025-10-05</td>
                                <td>
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="switchCheckChecked">Active</label>
                                        <input class="form-check-input m-0" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    </div>
                                </td>
                                <td>Ahmed Ali</td>
                                <td style="width: 160px">
                                    <div class="d-inline-flex gap-2"> 
                                        <button class="btn ac__btn btn-primary p-0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasAuditDetail" aria-controls="offcanvasAuditDetail"
                                        > 
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g clip-path="url(#a)" stroke="#fff" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"><path d="M.833 10S4.167 3.333 10 3.333 19.167 10 19.167 10 15.833 16.666 10 16.666.833 10 .833 10"/><path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"/></clipPath></defs></svg>
                                        </button> 
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
                </div>
            </div><!--.//data_table-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

 


<!-- footer and all scripts -->
<?php
include('includes/footer.inc.php');
?>