<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main system__settings__page"> 
    <!--begin::App Content-->
    <div class="app-content pt-3">
        <!--begin::Container-->
        <div class="container-fluid d-flex flex-column" style="gap: 12px;">
            <div class="bg-white p-12 rounded-3">
                <h1 class="mb-3 fw-semibold fs-18 text-dark">System Settings</h1>
                <div class="bg-light p-3 rounded-3 gap-4 d-inline-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <div class="d-inline-flex align-items-center gap-2">
                        <label for="experience" class="form-check-label fs-12 text-dark">Experience</label>
                        <select name="experience" id="experience" class="form-select small" aria-label="Default select example">
                            <option value="Skydive Dubai Palm">Skydive Dubai Palm</option>
                        </select>
                    </div>
                    <div class="d-inline-flex align-items-center gap-2">
                        <label for="location" class="form-check-label fs-12 text-dark">Location</label>
                        <select name="location" id="location" class="form-select small" aria-label="Default select example">
                            <option value="Palm">Palm</option>
                        </select>
                    </div>
                </div>

                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-12 text-dark active" id="bmiTab-tab" data-bs-toggle="tab" data-bs-target="#bmiTab-tab-pane" type="button" role="tab" aria-controls="bmiTab-tab-pane" aria-selected="true">BMI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-12 text-dark" id="weightTab-tab" data-bs-toggle="tab" data-bs-target="#weightTab-tab-pane" type="button" role="tab" aria-controls="weightTab-tab-pane" aria-selected="false">Weight</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-12 text-dark" id="alertTab-tab" data-bs-toggle="tab" data-bs-target="#alertTab-tab-pane" type="button" role="tab" aria-controls="alertTab-tab-pane" aria-selected="false">Emergency Alert </button>
                    </li> 
                </ul>
                <div class="tab-content py-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="bmiTab-tab-pane" role="tabpanel" aria-labelledby="bmiTab-tab" tabindex="0">
                        <div class="bg-light px-3 py-2 rounded-top-3 fs-18 text-dark fw-semibold">
                            BMI 
                        </div>
                        <div class="p-3 border border-top-0 rounded-bottom-3">
                            <div class="row g-4 gx-5">
                                <div class="col-md-6">
                                    <label for="male" class="form-label fw-semibold">Male <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="male" id="male" placeholder="e.g., 30.5" value="32.0">
                                    <div class="text-muted small mt-2">Up to 2 digits before decimal. Optional 1 digit after decimal.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="male" class="form-label fw-semibold">Female <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="male" id="male" placeholder="e.g., 30.5">
                                    <div class="text-muted small mt-2">Up to 2 digits before decimal. Optional 1 digit after decimal.</div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-end gap-2">
                                        <button class="btn btn-outline-primary rounded-pill shadow-none fw-normal small px-3">Reset</button>
                                        <button class="btn btn-primary rounded-pill shadow-none fw-normal small px-3">Save BMI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end::Tab Pane-->

                    <div class="tab-pane fade" id="weightTab-tab-pane" role="tabpanel" aria-labelledby="weightTab-tab" tabindex="0">
                        <div class="bg-light px-3 py-2 rounded-top-3 fs-18 text-dark fw-semibold">
                            Weight   
                        </div>
                        <div class="p-3 border border-top-0 rounded-bottom-3">
                            <div class="row g-4">
                                <div class="col-lg-6"> 
                                    <label for="male" class="form-label fw-semibold">Male <span class="text-danger">*</span></label>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="male" id="male" placeholder="Min (kg)">
                                            <div class="text-muted small mt-2">max 3 digits</div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="male" id="male" placeholder="Max (kg)">
                                            <div class="text-muted small mt-2">max 3 digits</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <label for="male" class="form-label fw-semibold">Female <span class="text-danger">*</span></label>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="male" id="male" placeholder="Min (kg)">
                                            <div class="text-muted small mt-2">max 3 digits</div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="male" id="male" placeholder="Max (kg)">
                                            <div class="text-muted small mt-2">max 3 digits</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-end gap-2">
                                        <button class="btn btn-outline-primary rounded-pill shadow-none fw-normal small px-3">Reset</button>
                                        <button class="btn btn-primary rounded-pill shadow-none fw-normal small px-3">Save Weight</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end::Tab Pane-->

                    <div class="tab-pane fade" id="alertTab-tab-pane" role="tabpanel" aria-labelledby="alertTab-tab" tabindex="0">
                        <div class="bg-light px-3 py-2 rounded-top-3 fs-18 text-dark fw-semibold d-flex justify-content-between align-items-center">
                            <span>Emergency Alert List</span>   
                            <button type="button" data-bs-toggle="modal" data-bs-target="#addAlertModal" class="btn btn-primary shadow-none rounded-pill px-3 fw-normal h-36 d-inline-flex align-items-center">Add Emergency Alert</button>
                        </div>
                        <div class="px-3 py-2 app-content-header border border-top-0 border-bottom-0 d-flex align-items-center justify-content-between">
                            <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1" style="max-width: 400px;">
                                <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for alert..."> 
                            </div>
                            <div class="">
                                <div class="btn btn__base d-inline-flex align-items-center gap-1 rounded-pill">
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#212529"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#000" fill-opacity=".2"></path>
                                    </svg>
                                    <span>Export to Excel</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 pt-0 border border-top-0 rounded-bottom-3">
                            <div class="table-responsive">
                                <table class="table large__table" id="data__table">
                                    <thead>
                                        <th>Icon</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>Alert</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><rect width="32" height="32" rx="10.105" fill="#b71d18" fill-opacity=".1"/><path opacity=".4" d="M7.579 16.48c0-2.606 0-3.908.863-4.718.863-.809 2.252-.809 5.031-.809h5.053c2.779 0 4.168 0 5.032.81.863.809.863 2.111.863 4.716v1.58c0 2.604 0 3.907-.863 4.716-.864.81-2.253.81-5.032.81h-5.053c-2.779 0-4.168 0-5.031-.81-.863-.809-.863-2.111-.863-4.717z" fill="#b71d18"/><path d="M15.368 16.639v-1.895a.632.632 0 0 1 1.263 0v1.895h1.895a.632.632 0 1 1 0 1.263h-1.895v1.895a.632.632 0 0 1-1.263 0v-1.895h-1.894a.632.632 0 1 1 0-1.263z" fill="#b71d18"/><path fill-rule="evenodd" clip-rule="evenodd" d="M11.173 10.35q.022-.441.1-.807c.09-.41.252-.785.55-1.082.296-.297.671-.459 1.08-.549.403-.088.877-.115 1.413-.115h3.368c.536 0 1.01.027 1.412.115.41.09.785.252 1.082.55.297.296.459.671.549 1.08q.078.367.1.809.554.022 1.012.078c.866.11 1.58.34 2.15.874.576.54.83 1.226.95 2.057.114.797.113 1.811.113 3.072v1.677c0 1.261 0 2.275-.114 3.073-.119.83-.373 1.516-.948 2.056-.57.534-1.285.765-2.15.874-.843.106-1.918.106-3.27.106h-5.14c-1.352 0-2.427 0-3.27-.106-.865-.11-1.58-.34-2.15-.874-.575-.54-.83-1.226-.948-2.056-.115-.798-.115-1.812-.115-3.073v-1.677c0-1.26 0-2.275.115-3.072.119-.83.373-1.517.948-2.057.57-.534 1.285-.765 2.15-.874q.459-.056 1.012-.078m2.196-.027h-.93a4 4 0 0 1 .068-.51c.057-.26.135-.385.208-.459.074-.073.2-.15.46-.208.267-.059.632-.086 1.14-.086h3.37c.508 0 .873.027 1.14.086.26.057.386.135.46.208.073.074.15.2.208.46q.046.208.067.51h-6.191m-3.05 1.36c-.74.093-1.151.267-1.445.542-.288.27-.465.64-.562 1.314-.1.697-.102 1.62-.102 2.942v1.579c0 1.322.002 2.245.102 2.942.097.675.274 1.045.562 1.314.294.276.705.45 1.444.543.754.095 1.75.096 3.156.096h5.052c1.406 0 2.401-.001 3.155-.096.74-.094 1.151-.268 1.445-.543.287-.27.465-.639.562-1.314.1-.697.101-1.62.101-2.942v-1.579c0-1.322-.001-2.245-.101-2.942-.097-.675-.274-1.044-.562-1.314-.294-.275-.705-.45-1.445-.542-.754-.095-1.749-.097-3.155-.097h-5.052c-1.407 0-2.402.002-3.155.097" fill="#b71d18"/></svg>
                                            </td>
                                            <td>11/10/2025 - 18:00</td>
                                            <td>22/12/2025 - 11:00</td>
                                            <td>I'm hurt. Please send help</td>
                                            <td>
                                                <div class="form-check form-switch p-0 m-0">
                                                    <label class="form-check-label fs-12  text-dark" for="loadOnTV">Active</label>
                                                    <input class="form-check-input m-0" type="checkbox" role="switch" id="loadOnTV" checked="">
                                                </div>
                                            </td>
                                            <td>Khalid Ahmed</td>
                                            <td class="text-center" style="width: 50px;">
                                                <button class="btn ac__btn">
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99 1.45h-.1c-1.81 0-3.24 0-4.35.15a4.5 4.5 0 0 0-2.76 1.18A4.5 4.5 0 0 0 1.6 5.54c-.15 1.11-.15 2.54-.15 4.35v.9c0 1.44.02 2.6.15 3.55a4.5 4.5 0 0 0 1.18 2.75 4.5 4.5 0 0 0 2.76 1.19c1.11.15 2.54.15 4.35.15h.05c.34 0 .62-.28.62-.62v-6.42h3.1a.62.62 0 1 0 0-1.24h-3.1V8.08h6.62v1.86a.62.62 0 0 0 1.25 0v-.05c0-1.81 0-3.24-.15-4.35a4.5 4.5 0 0 0-1.18-2.76 4.5 4.5 0 0 0-2.76-1.18c-1.11-.15-2.54-.15-4.35-.15m-.05 5.38h7.2q-.03-.62-.1-1.13c-.13-1-.38-1.6-.82-2.04s-1.04-.7-2.05-.83a36 36 0 0 0-4.23-.14c-1.87 0-3.21 0-4.23.14-1 .13-1.6.4-2.05.83-.44.44-.7 1.04-.83 2.04q-.07.51-.1 1.13zm-.62 1.25v2.07H2.69V8.08zm0 3.3H2.7q0 1.2.06 2.08h6.56zm0 3.32h-6.4c.15.7.38 1.16.74 1.52.44.44 1.04.7 2.05.83.9.12 2.05.13 3.6.14z" fill="#000"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 12.07a1.4 1.4 0 0 0-1.36.02q-.26.16-.5.45l-.03.04-2.6 2.82a3 3 0 0 0-.64.86c-.14.3-.16.63-.2 1.05v.19l-.02.25a.7.7 0 0 0 .57.65l.26.02h.18c.48.02.87.03 1.22-.11.36-.14.64-.41.99-.75l2.69-2.59q.27-.24.43-.5c.24-.42.25-.94.02-1.37q-.16-.26-.42-.51l-.04-.04-.04-.04q-.25-.28-.5-.44m-.84.9q.18-.08.34 0c.03.02.08.06.31.3.24.24.28.29.3.32a.4.4 0 0 1-.01.37l-.3.31-2.59 2.49c-.44.43-.56.53-.7.59s-.28.05-.8.04c.03-.47.05-.6.1-.72.05-.13.15-.24.5-.62l2.55-2.77c.23-.25.28-.28.3-.3" fill="#000"></path></svg>
                                                </button> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end::Tab Pane--> 
                </div><!--end::Tab Content-->
 
            </div><!--.bg-white-->
  
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
 

<!-- ALERT TEAMS Modal -->
<div class="modal fade team__modal" id="addAlertModal" tabindex="-1" aria-labelledby="addAlertModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="addAlertModalLabel">Add Emergency Alert</p>
               
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-4"> 
                <div class="">
                    <label for="alert_msg" class="form-label fs-6 fw-semibold text-dark mb-2">Emergency Alert <span class="text-danger">*</span></label>
                    <textarea rows="4" cols="4" name="alert_msg" id="alert_msg" class="form-control" placeholder="Enter alert message"></textarea>
                    <div class="small text-muted mt-2">Max 500 chars. Duplicate not allowed</div>
                </div>
                <div>
                     <div class="drag__drop__upload__box p-4 round text-center text-muted position-relative" id="galleryDropZone">
                        <input type="file" name="gallery[]" id="gallery" class="position-absolute top-0 start-0 w-100 h-100 opacity-0" accept="image/jpeg,image/png,image/webp">
                        <div class="space-y-2 pb-4">
                            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path fill-rule="evenodd" clip-rule="evenodd" d="M27.984 12.568a10.9 10.9 0 0 0-3.827-.01 10.4 10.4 0 0 0-3.512 1.296c-2.133 1.274-3.55 3.216-4.029 5.35a2.08 2.08 0 0 1-2.033 1.627c-2.076 0-4.05.79-5.49 2.168-1.438 1.375-2.228 3.22-2.228 5.123s.79 3.749 2.228 5.124c1.44 1.378 3.414 2.168 5.49 2.168a2.083 2.083 0 1 1 0 4.167c-3.123 0-6.135-1.186-8.37-3.324-2.239-2.141-3.514-5.065-3.514-8.135s1.275-5.993 3.514-8.134a12.06 12.06 0 0 1 6.79-3.222c.996-2.68 2.945-4.96 5.505-6.489a14.5 14.5 0 0 1 4.926-1.823 15 15 0 0 1 5.295.014c1.748.318 3.418.944 4.915 1.85a13.3 13.3 0 0 1 3.813 3.457 12.05 12.05 0 0 1 2.092 4.591c.177.815.266 1.641.266 2.468a9.375 9.375 0 0 1-.232 18.747H37.5a2.083 2.083 0 1 1 0-4.167h2.083a5.209 5.209 0 0 0 0-10.417H37.5a2.083 2.083 0 0 1-2.033-2.54 7.4 7.4 0 0 0 .01-3.205 7.9 7.9 0 0 0-1.373-3.003 9.1 9.1 0 0 0-2.618-2.366 10.3 10.3 0 0 0-3.502-1.315m-4.457 10.956a2.083 2.083 0 0 1 2.946 0l6.25 6.25a2.083 2.083 0 1 1-2.946 2.947l-2.694-2.694v13.72a2.083 2.083 0 1 1-4.166 0v-13.72l-2.694 2.694a2.083 2.083 0 0 1-2.946-2.947z" fill="#212529"/></svg>
                            <p class="text-dark fw-semibold fs-18 mb-2">Upload icon here</p>
                            <p class="small text-muted mb-0">Drag'n'drop files here to upload. We can accept only .png,j pg files that are less than 100kb in size.</p>
                            <button class="btn btn-primary px-5 rounded-pill h-36 position-absolute start-50 translate-middle-x fw-normal shadow-none" style="bottom: -18px;width:250px">Select files</button>
                        </div>
                    </div> 
                    <div id="galleryPreview" class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4 mt-4"></div> 
                </div>
                <div>
                    <label for="alert_msg" class="form-label fs-6 fw-semibold text-dark mb-0">Status <span class="text-danger">*</span></label>
                    <div class="form-check form-switch p-0 m-0">
                        <label class="form-check-label fs-12  text-dark" for="loadOnTV">Active</label>
                        <input class="form-check-input m-0" type="checkbox" role="switch" id="loadOnTV" checked="">
                    </div>
                </div>
                <div class="mt-3 pb-2 px-2 d-flex flex-row justify-content-end gap-2">
                    <button class="btn btn-outline-secondary rounded-pill h-36 small shadow-none d-inline-flex align-items-center" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-primary blue fw-normal rounded-pill h-36 shadow-none d-inline-flex align-items-center">Save</button>
                </div>
            </div><!--.modal-body-->

        </div>
    </div>
</div>

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 
<script>
    // Gallery Drag and Drop Preview
    const galleryDropZone = document.getElementById('galleryDropZone');
    const galleryInput = document.getElementById('gallery');
    const galleryPreview = document.getElementById('galleryPreview');

    galleryDropZone.addEventListener('click', () => galleryInput.click());

    galleryDropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        galleryDropZone.classList.add('border-blue-500', 'bg-blue-50');
    });

    galleryDropZone.addEventListener('dragleave', () => {
        galleryDropZone.classList.remove('border-blue-500', 'bg-blue-50');
    });

    galleryDropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        galleryDropZone.classList.remove('border-blue-500', 'bg-blue-50');
        galleryInput.files = e.dataTransfer.files;
        handleGalleryPreview();
    });

    galleryInput.addEventListener('change', handleGalleryPreview);

    function handleGalleryPreview() {
        galleryPreview.innerHTML = '';
        Array.from(galleryInput.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                // Create a wrapper div for the image
                const wrapper = document.createElement('div');
                wrapper.className = 'position-relative'; // Added group for potential hover actions

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'object-contain round border border-gray-300 w-100 aspect-ratio-16x9';
                
                // Append image to div, then div to preview container
                wrapper.appendChild(img);
                galleryPreview.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });
    }
</script>