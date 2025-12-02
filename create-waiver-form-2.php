<?php include_once('includes/auth-header.inc.php'); ?>

<div class="create__waiver__wrapper auth__layout d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="bg-white p-4 form__wrapper w-100 position-relative z-3 rounded-3 mx-auto">
            <h1 class="fs-2 fw-normal text-dark">Enter reference number</h1>
             
            <form action="#" method="post" class="row g-3 mb-3 mt-1">
                <div class="col-12">
                    <label for="first_name" class="small d-block text-dark mb-1">Enter reference number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name"
                        placeholder="Enter reference number"
                    >
                </div>
                 
                <div>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#checkInModal" class="btn btn-primary w-100 fw-normal mt-3">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:450px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="successModalLabel"></p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body p-4 pt-0 ff-noto text-center">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px" viewBox="0 0 24 24"><g fill="none" stroke="#118D57" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="m8 12l3 3l5-6"/></g></svg>
                </div>
                <p class="text-dark small mb-4">
                    <span class="fs-4 fw-semibold d-block">Waiver submitted successfully!</span>
                    For more bookings or information, <br> visit our website <a href="https://www.example.com" class="link">https://www.example.com</a>
                </p>
                
                <div class="btn__box d-flex justify-content-end gap-3 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-pill">OKAY</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<!-- Check-in Modal -->
<div class="modal fade" id="checkInModal" tabindex="-1" aria-labelledby="checkInModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:544px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="checkInModalLabel"></p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body p-4 ff-noto">
                <div class="mb-4">
                    <svg width="72" height="72" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><rect width="72" height="72" rx="36" fill="#FAB005" fill-opacity=".1"/><path fill-rule="evenodd" clip-rule="evenodd" d="M32.93 16.77A6 6 0 0 1 41.22 19L55.4 43.5l.12.25A6 6 0 0 1 50.01 52H21.68a6 6 0 0 1-5.13-8.5L30.75 19a6 6 0 0 1 2.18-2.24M21.9 48H50a2 2 0 0 0 1.87-2.64L37.75 21l-.02-.03a2 2 0 0 0-3.5 0l-.02.03-14.12 24.36A2 2 0 0 0 21.9 48M36 28a2 2 0 0 1 2 2v4a2 2 0 0 1-4 0v-4c0-1.1.9-2 2-2m0 12a2 2 0 0 1 2 2v.02a2 2 0 0 1-4 0V42c0-1.1.9-2 2-2" fill="#FAB005"/><path fill-rule="evenodd" clip-rule="evenodd" d="M32.93 16.77A6 6 0 0 1 41.22 19L55.4 43.5l.12.25A6 6 0 0 1 50.01 52H21.68a6 6 0 0 1-5.13-8.5L30.75 19a6 6 0 0 1 2.18-2.24M21.9 48H50a2 2 0 0 0 1.87-2.64L37.75 21l-.02-.03a2 2 0 0 0-3.5 0l-.02.03-14.12 24.36A2 2 0 0 0 21.9 48M36 28a2 2 0 0 1 2 2v4a2 2 0 0 1-4 0v-4c0-1.1.9-2 2-2m0 12a2 2 0 0 1 2 2v.02a2 2 0 0 1-4 0V42c0-1.1.9-2 2-2" fill="#000" fill-opacity=".2"/></svg>
                </div>
                <p class="text-dark small mb-4">
                    Entered reference number is incorrect, Please click on View type to view waiver type”
                </p>
                <label for="gender" class="form-label text-dark fw-medium fs-18">Gender <span class="text-danger">*</span></label>
                <div class="d-flex flex-row" style="gap:.5rem 2rem;"> 
                    <div class="form-check">
                        <input type="radio" class="form-check-input size-24" id="tandem" checked>
                        <label for="tandem" class="form-check-label fw-medium fs-18">Tandem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input size-24" id="sport">
                        <label for="sport" class="form-check-label fw-medium fs-18">Sport</label>
                    </div>
                </div>
                <div class="btn__box d-flex justify-content-end gap-3 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-pill confirmBtn">Confirm</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<?php include_once('includes/auth-footer.inc.php'); ?>
<script>
    $(".confirmBtn").on("click", function(){
        $("#successModal").modal("show");
        $("#checkInModal").modal("hide");
    });
</script>