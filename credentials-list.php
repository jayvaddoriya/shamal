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
                            data-bs-toggle="modal" data-bs-target="#createCredentialModal"
                            >Create Credential</button>
                             
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <div class="col"> 
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for ...">
                            </div>
                            <button class="btn ac__btn w-auto px-3 rounded-pill active">Name</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Display Name</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">Email</button>
                            <button class="btn ac__btn w-auto px-3 rounded-pill">ID</button> 
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
                                    Organization
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
                                    Credential
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
                         
                    </div>
                     
                </div><!--.//row-->
            </div>


            
            <div class="mt-1 bg-white mt-2">
                <div class="overflow-x-auto" style="overflow-y:visible;"> 
                    <table class="table data-table large__table" id="dataTable">
                        <thead>
                            <tr> 
                                <th>Created Date</th>
                                <th>Updated Date  </th> 
                                <th>Organization </th>
                                <th>Credential Type </th>
                                <th>Identifier </th>
                                <th>Restriction </th>
                                <th>Canopy size </th>
                                <th>Valid from </th>
                                <th>Expire date </th>
                                <th>Notes </th>
                                <th>Status</th>
                                <th>Wing Loading</th>
                                <th>Created by</th>
                                <th></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>08/08/2024</td>  
                                <td>02/10/2025</td>  
                                <td>USPA</td>  
                                <td>A license</td>  
                                <td>USPA – 12345</td>  
                                <td>-</td>  
                                <td>170</td>  
                                <td>08/08/2024</td>  
                                <td>02/10/2025</td>  
                                <td>-</td>  
                                <td><span class="badge bg-success">Active</span></td>  
                                <td>23kg</td>  
                                <td>Jerome Bell</td>  
                                <td>
                                    <div class="d-inline-flex gap-2">  
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" 
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


 
<!-- PROFILE CREATE MODEL --> 
<div class="modal fade" id="createCredentialModal" tabindex="-1" aria-labelledby="createCredentialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title small fw-semibold" id="createCredentialModalLabel">Add Credential</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create-profile.php" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">Select Organization <span class="text-danger">*</span></label> 
                        <select name="organization" id="organization" class="form-select">
                            <option value="">Select Organization</option>
                            <option value="1">Organization 1</option>
                            <option value="2">Organization 2</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="s_credentials" class="form-label fw-semibold">Select Credentials <span class="text-danger">*</span></label> 
                        <select name="s_credentials" id="s_credentials" class="form-select">
                            <option value="" selected disabled>A license</option> 
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Identifier" class="form-label fw-semibold">Identifier <span class="text-danger">*</span></label> 
                        <input type="text" name="identifier" id="identifier" class="form-control" placeholder="Enter Identifier" value="USPA – 12345">
                    </div>
                    <div class="mb-4">
                        <label for="v_date" class="form-label fw-semibold">Validation Date <span class="text-danger">*</span></label> 
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" name="v_date" id="v_date" class="form-control fromDatePicker" placeholder="From" style='background:url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjY2NjY3IDEuNjY0MDZDNy4xMjY5IDEuNjY0MDYgNy41IDIuMDM3MTYgNy41IDIuNDk3NFYzLjMzMDczSDEyLjVWMi40OTc0QzEyLjUgMi4wMzcxNiAxMi44NzMxIDEuNjY0MDYgMTMuMzMzMyAxLjY2NDA2QzEzLjc5MzYgMS42NjQwNiAxNC4xNjY3IDIuMDM3MTYgMTQuMTY2NyAyLjQ5NzRWMy4zMzA3M0gxNUMxNi4zODA3IDMuMzMwNzMgMTcuNSA0LjQ1MDAyIDE3LjUgNS44MzA3M1YxNS44MzA3QzE3LjUgMTcuMjExNCAxNi4zODA3IDE4LjMzMDcgMTUgMTguMzMwN0g1QzMuNjE5MjkgMTguMzMwNyAyLjUgMTcuMjExNCAyLjUgMTUuODMwN1Y1LjgzMDczQzIuNSA0LjQ1MDAyIDMuNjE5MjkgMy4zMzA3MyA1IDMuMzMwNzNINS44MzMzM1YyLjQ5NzRDNS44MzMzMyAyLjAzNzE2IDYuMjA2NDMgMS42NjQwNiA2LjY2NjY3IDEuNjY0MDZaTTUuODMzMzMgNC45OTc0SDVDNC41Mzk3NiA0Ljk5NzQgNC4xNjY2NyA1LjM3MDQ5IDQuMTY2NjcgNS44MzA3M1Y4LjMzMDczSDE1LjgzMzNWNS44MzA3M0MxNS44MzMzIDUuMzcwNDkgMTUuNDYwMiA0Ljk5NzQgMTUgNC45OTc0SDE0LjE2NjdWNS44MzA3M0MxNC4xNjY3IDYuMjkwOTcgMTMuNzkzNiA2LjY2NDA2IDEzLjMzMzMgNi42NjQwNkMxMi44NzMxIDYuNjY0MDYgMTIuNSA2LjI5MDk3IDEyLjUgNS44MzA3M1Y0Ljk5NzRINy41VjUuODMwNzNDNy41IDYuMjkwOTcgNy4xMjY5IDYuNjY0MDYgNi42NjY2NyA2LjY2NDA2QzYuMjA2NDMgNi42NjQwNiA1LjgzMzMzIDYuMjkwOTcgNS44MzMzMyA1LjgzMDczVjQuOTk3NFpNMTUuODMzMyA5Ljk5NzRINC4xNjY2N1YxNS44MzA3QzQuMTY2NjcgMTYuMjkxIDQuNTM5NzYgMTYuNjY0MSA1IDE2LjY2NDFIMTVDMTUuNDYwMiAxNi42NjQxIDE1LjgzMzMgMTYuMjkxIDE1LjgzMzMgMTUuODMwN1Y5Ljk5NzRaTTcuNSAxMy4zMzA3QzcuNSAxMi44NzA1IDcuODczMSAxMi40OTc0IDguMzMzMzMgMTIuNDk3NEgxMS42NjY3QzEyLjEyNjkgMTIuNDk3NCAxMi41IDEyLjg3MDUgMTIuNSAxMy4zMzA3QzEyLjUgMTMuNzkxIDEyLjEyNjkgMTQuMTY0MSAxMS42NjY3IDE0LjE2NDFIOC4zMzMzM0M3Ljg3MzEgMTQuMTY0MSA3LjUgMTMuNzkxIDcuNSAxMy4zMzA3WiIgZmlsbD0iIzg2OEU5NiIvPgo8L3N2Zz4K") no-repeat right 12px center; background-size:20px 20px;'>
                            </div>
                            <div class="col-6">
                                <input type="text" name="v_date" id="v_date" class="form-control toDatePicker" placeholder="To" style='background:url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjY2NjY3IDEuNjY0MDZDNy4xMjY5IDEuNjY0MDYgNy41IDIuMDM3MTYgNy41IDIuNDk3NFYzLjMzMDczSDEyLjVWMi40OTc0QzEyLjUgMi4wMzcxNiAxMi44NzMxIDEuNjY0MDYgMTMuMzMzMyAxLjY2NDA2QzEzLjc5MzYgMS42NjQwNiAxNC4xNjY3IDIuMDM3MTYgMTQuMTY2NyAyLjQ5NzRWMy4zMzA3M0gxNUMxNi4zODA3IDMuMzMwNzMgMTcuNSA0LjQ1MDAyIDE3LjUgNS44MzA3M1YxNS44MzA3QzE3LjUgMTcuMjExNCAxNi4zODA3IDE4LjMzMDcgMTUgMTguMzMwN0g1QzMuNjE5MjkgMTguMzMwNyAyLjUgMTcuMjExNCAyLjUgMTUuODMwN1Y1LjgzMDczQzIuNSA0LjQ1MDAyIDMuNjE5MjkgMy4zMzA3MyA1IDMuMzMwNzNINS44MzMzM1YyLjQ5NzRDNS44MzMzMyAyLjAzNzE2IDYuMjA2NDMgMS42NjQwNiA2LjY2NjY3IDEuNjY0MDZaTTUuODMzMzMgNC45OTc0SDVDNC41Mzk3NiA0Ljk5NzQgNC4xNjY2NyA1LjM3MDQ5IDQuMTY2NjcgNS44MzA3M1Y4LjMzMDczSDE1LjgzMzNWNS44MzA3M0MxNS44MzMzIDUuMzcwNDkgMTUuNDYwMiA0Ljk5NzQgMTUgNC45OTc0SDE0LjE2NjdWNS44MzA3M0MxNC4xNjY3IDYuMjkwOTcgMTMuNzkzNiA2LjY2NDA2IDEzLjMzMzMgNi42NjQwNkMxMi44NzMxIDYuNjY0MDYgMTIuNSA2LjI5MDk3IDEyLjUgNS44MzA3M1Y0Ljk5NzRINy41VjUuODMwNzNDNy41IDYuMjkwOTcgNy4xMjY5IDYuNjY0MDYgNi42NjY2NyA2LjY2NDA2QzYuMjA2NDMgNi42NjQwNiA1LjgzMzMzIDYuMjkwOTcgNS44MzMzMyA1LjgzMDczVjQuOTk3NFpNMTUuODMzMyA5Ljk5NzRINC4xNjY2N1YxNS44MzA3QzQuMTY2NjcgMTYuMjkxIDQuNTM5NzYgMTYuNjY0MSA1IDE2LjY2NDFIMTVDMTUuNDYwMiAxNi42NjQxIDE1LjgzMzMgMTYuMjkxIDE1LjgzMzMgMTUuODMwN1Y5Ljk5NzRaTTcuNSAxMy4zMzA3QzcuNSAxMi44NzA1IDcuODczMSAxMi40OTc0IDguMzMzMzMgMTIuNDk3NEgxMS42NjY3QzEyLjEyNjkgMTIuNDk3NCAxMi41IDEyLjg3MDUgMTIuNSAxMy4zMzA3QzEyLjUgMTMuNzkxIDEyLjEyNjkgMTQuMTY0MSAxMS42NjY3IDE0LjE2NDFIOC4zMzMzM0M3Ljg3MzEgMTQuMTY0MSA3LjUgMTMuNzkxIDcuNSAxMy4zMzA3WiIgZmlsbD0iIzg2OEU5NiIvPgo8L3N2Zz4K") no-repeat right 12px center; background-size:20px 20px;'>
                            </div>
                        </div> 
                    </div>
                    <div class="mb-4">
                        <label for="canopy" class="form-label fw-semibold">Canopy <span class="text-danger">*</span></label> 
                        <div class="position-relative">
                            <input type="text" name="canopy" id="canopy" class="form-control" placeholder="Enter canopy size" value="">
                            <div class="position-absolute top-50 translate-middle-y end-0 px-3 text-dark">Sq. Ft</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="canopy" class="form-label fw-semibold">Wing Loading <span class="text-danger">*</span></label> 
                        <input type="text" name="canopy" id="canopy" class="form-control" placeholder="Enter canopy size" value="23kg" readonly disabled> 
                    </div>
                     
                     
                    <div class="mb-4"> 
                        <div class="form-check ps-0">
                            <input class="form-check-input m-0 size-20" type="checkbox" id="profile—status" checked>
                            <label class="form-check-label fw-semibold" for="profile—status">Verified</label>
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
 
<script>
    $('#createCredentialModal').on('shown.bs.modal', function () {
        $('.fromDatePicker').each(function () {
            if (!$(this).data('daterangepicker')) {
                $(this).daterangepicker({
                    singleDatePicker: true,
                    autoUpdateInput: false,
                    parentEl: '#createCredentialModal',
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(chosen_date) {
                    this.element.val(chosen_date.format('DD/MM/YYYY'));
                });
            }
        });
    });
    $('#createCredentialModal').on('shown.bs.modal', function () {
        $('.toDatePicker').each(function () {
            if (!$(this).data('daterangepicker')) {
                $(this).daterangepicker({
                    singleDatePicker: true,
                    autoUpdateInput: false,
                    parentEl: '#createCredentialModal',
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(chosen_date) {
                    this.element.val(chosen_date.format('DD/MM/YYYY'));
                });
            }
        });
    });

</script>