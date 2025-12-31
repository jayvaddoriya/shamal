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
                    <div class="col-md-7">
                        <div class="d-inline-flex align-items-center gap-3">
                            <button type="button" class="btn btn-primary blue rounded-pill shadow-none" 
                            data-bs-toggle="modal" data-bs-target="#createProfileModal"
                            >Create Classroom</button>
                             
                        </div>
                    </div>
                    <div class="col-md-5">
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
             


            
            <div class="mt-1 bg-white mt-2">
                <div class="overflow-x-auto" style="overflow-y:visible;"> 
                    <table class="table data-table large__table" id="dataTable">
                        <thead>
                            <tr> 
                                <th>Classroom</th>
                                <th>Total Pax</th>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Ticket</th>   
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>AFF Ground</td>
                                <td>1/5</td>
                                <td>502331</td>
                                <td>John Lennon</td> 
                                <td>Private Tandem</td>  
                                <td>
                                    <div class="d-inline-flex gap-2">  
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#000" fill-opacity=".2"/></svg>
                                        </button>
                                        <button class="btn ac__btn btn-outline-danger p-0"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                        </button>
                                    </div>
                                </td> 
                            </tr> 
                            <tr> 
                                <td>AFF Ground</td>
                                <td>1/5</td>
                                <td>502331</td>
                                <td>John Lennon</td> 
                                <td>Private Tandem</td>  
                                <td>
                                    <div class="d-inline-flex gap-2">  
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#000" fill-opacity=".2"/></svg>
                                        </button>
                                        <button class="btn ac__btn btn-outline-danger p-0"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                        </button>
                                    </div>
                                </td> 
                            </tr> 
                            <tr> 
                                <td>AFF Ground</td>
                                <td>1/5</td>
                                <td>502331</td>
                                <td>John Lennon</td> 
                                <td>Private Tandem</td>  
                                <td>
                                    <div class="d-inline-flex gap-2">  
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.84 2.4a2.57 2.57 0 0 1 3.63 3.64l-1.05 1.05a1 1 0 0 1-.22.22l-5.67 5.7a.8.8 0 0 1-.59.24H7.45a.83.83 0 0 1-.82-.83V9.94q0-.34.24-.59l5.7-5.67a1 1 0 0 1 .22-.23zm-.58 2.92-4.98 4.96v1.32H9.6l4.96-4.98zm2.47.12-1.3-1.29.58-.57a.91.91 0 0 1 1.29 1.29zM3.2 5.7c.47-.47 1.1-.73 1.76-.73h.83a.83.83 0 0 1 0 1.66h-.83a.83.83 0 0 0-.83.82v7.46a.83.83 0 0 0 .83.83h7.46a.83.83 0 0 0 .82-.83v-.83a.83.83 0 0 1 1.66 0v.83a2.5 2.5 0 0 1-2.48 2.48H4.97a2.5 2.5 0 0 1-2.49-2.48V7.45c0-.65.27-1.29.73-1.75" fill="#000" fill-opacity=".2"/></svg>
                                        </button>
                                        <button class="btn ac__btn btn-outline-danger p-0"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
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


 
<!-- PROFILE CREATE MODEL --> 
<div class="modal fade" id="createProfileModal" tabindex="-1" aria-labelledby="createProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title small fw-semibold" id="createProfileModalLabel">Add Classroom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create-profile.php" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">Classroom Name</label> 
                        <input type="text" class="form-control" name="profile" id="profile" placeholder="USPA" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">Total Pax <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="A license" required>
                    </div>
                    
                     
                     
                    <div class="mb-4"> 
                        <div class="form-check ps-0">
                            <input class="form-check-input m-0 size-20" type="checkbox" id="profile—status" checked>
                            <label class="form-check-label fw-semibold" for="profile—status">Select Private Session</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 gap-2">
                        <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="openModalTwo" class="btn btn-primary small fw-bold blue rounded-pill px-4">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 
<!-- PROFILE CREATE MODEL --> 
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:512px;">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title small fw-semibold" id="deleteConfirmModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create-profile.php" method="post">
                    <div class="mb-4">
                        <p>
                            Are you sure want to <b>delete</b> this item?
                        </p>
                    </div>
                     
                    <div class="d-flex justify-content-end mt-3 gap-2">
                        <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="openModalTwo" class="btn btn-danger small fw-bold blue rounded-pill px-4">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 
  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 