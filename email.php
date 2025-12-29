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
                            <button class="btn btn__base rounded-pill active">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.667 10a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm3.329 0a.833.833 0 1 0 0 1.666h.008a.833.833 0 1 0 0-1.666zm3.33 0a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm-6.659 3.333a.833.833 0 1 0 0 1.667h.007a.833.833 0 1 0 0-1.667zm3.329 0a.833.833 0 1 0 0 1.667h.008a.833.833 0 1 0 0-1.667z" fill="#1864AB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 1.667a.625.625 0 0 0-1.25 0v.528c-.67.19-1.236.5-1.707 1.008-.648.701-.936 1.587-1.074 2.696-.136 1.088-.136 2.481-.136 4.26v.516c0 1.778 0 3.171.136 4.259.138 1.11.426 1.995 1.074 2.696.655.707 1.493 1.028 2.541 1.18 1.015.148 2.312.148 3.949.148h1.684c1.637 0 2.934 0 3.949-.147 1.048-.153 1.886-.474 2.541-1.181.648-.701.936-1.587 1.075-2.696.135-1.088.135-2.481.135-4.26v-.516c0-1.778 0-3.171-.136-4.259-.137-1.11-.426-1.995-1.074-2.696-.47-.508-1.036-.817-1.707-1.008v-.528a.625.625 0 1 0-1.25 0v.304c-.947-.096-2.112-.096-3.533-.096H9.158c-1.421 0-2.586 0-3.533.096zM4.399 3.505a.625.625 0 0 0 1.226-.172V3.23c.884-.103 2.027-.104 3.583-.104h1.584c1.556 0 2.699.001 3.583.104v.104a.625.625 0 0 0 1.226.172c.34.135.597.314.813.547.395.427.628 1.011.751 1.995l-.082-.005H2.917l-.082.005c.123-.984.356-1.569.75-1.995.217-.233.474-.412.814-.547M2.742 7.267a76 76 0 0 0-.034 2.936v.428c0 1.831.001 3.147.126 4.148.123.988.356 1.575.752 2.002.388.42.912.663 1.803.793.915.133 2.12.134 3.82.134h1.583c1.698 0 2.904-.001 3.819-.134.891-.13 1.415-.373 1.803-.793.396-.427.63-1.014.752-2.002.125-1 .126-2.317.126-4.148v-.428c0-1.173 0-2.134-.034-2.936a.6.6 0 0 1-.175.024H2.917a.6.6 0 0 1-.175-.024" fill="#1864AB"/></svg>
                                <span>Today</span>
                            </button> 
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="2025-12-13 to 2026-01-28"></input> 
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
                        <button class="btn rounded-pill btn__base btn-primary fw-bold align-items-center" 
                            data-bs-toggle="modal" data-bs-target="#emailModal" type="button"
                        >
                            Send Email
                        </button>
                    </div>
                     
                </div><!--.//row-->
            </div>
 
            
            <div class="mt-1 bg-white mt-2">
                <div class="" style="overflow-y:visible;"> 
                    <table class="table data-table large__table" id="dataTable">
                        <thead>
                            <tr> 
                                <th style="width: 1.25rem;">
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <th>Name</th>
                                <th>Email </th>
                                <th>Booking ID</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 1.25rem;">
                                    <input type="checkbox" class="form-check-input">
                                </td> 
                                <td>John Smith</td> 
                                <td>john@email.com</td>  
                                <td>24392349</td> 
                            </tr> 
                            <tr> 
                                <td style="width: 1.25rem;">
                                    <input type="checkbox" class="form-check-input">
                                </td> 
                                <td>John Smith</td> 
                                <td>john@email.com</td>  
                                <td>24392349</td> 
                            </tr> 
                            <tr> 
                                <td style="width: 1.25rem;">
                                    <input type="checkbox" class="form-check-input">
                                </td> 
                                <td>John Smith</td> 
                                <td>john@email.com</td>  
                                <td>24392349</td> 
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
 

<!-- Check-in Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:674px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="emailModalLabel">Send Email (3)</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto pt-2">
                <div class="mb-4">
                    <label for="subject" class="fw-semibold form-label">Email Subject </label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter email subject ">
                </div><!--.user_box-->
                <div class="mb-4"> 
                    <div id="editor" class="bg-white border" style="height: 200px"></div>
                    <input type="hidden" name="content" id="content">
                </div>
                <div class="btn__box d-flex justify-content-between align-items-center gap-3 mt-4">
                    <p class="mb-0 text-dark">Selected: <b>3 recipients</b></p>
                    <div class="d-inline-flex gap-3"> 
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary rounded-pill">Send Email</button>
                    </div>
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
    // Initialize Quill editors
    const quillEn = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['link', 'image'],
                ['clean']
            ]
        },
        placeholder: 'Write your blog content here...'
    });
 
</script>