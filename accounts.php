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
                            >Send to Manifest</button>
                            <button class="btn btn__base btn-light rounded-pill">Selected: 2</button>
                            <div class="divider d-inline-block" style="width: 1px;height: 24px;background-color: #919EAB80;"></div>
                            <button class="btn ac__btn btn-light rounded-pill px-2" style="width: 52px;">
                                <svg width="24" height="24"  fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.95 2.25q-1-.02-1.7.06c-.49.07-.96.22-1.34.6s-.53.85-.6 1.34q-.07.7-.06 1.7v.1q-.02 1 .06 1.7c.07.49.22.96.6 1.34s.85.53 1.34.6q.7.08 1.7.06h.1q1 .02 1.7-.06c.49-.07.96-.22 1.34-.6s.53-.85.6-1.34q.08-.7.06-1.7v-.1q.02-1-.06-1.7a2.3 2.3 0 0 0-.6-1.34 2.2 2.2 0 0 0-1.34-.6q-.7-.07-1.7-.06zM3.97 3.97c.06-.06.16-.13.48-.17.35-.05.82-.05 1.55-.05s1.2 0 1.55.05c.32.04.42.11.48.17s.13.16.17.48c.05.35.05.82.05 1.55s0 1.2-.05 1.55c-.04.32-.11.42-.17.48s-.16.13-.48.17c-.35.05-.82.05-1.55.05s-1.2 0-1.55-.05c-.32-.04-.42-.11-.48-.17s-.13-.16-.17-.48c-.05-.35-.05-.82-.05-1.55s0-1.2.05-1.55c.04-.32.11-.42.17-.48m1.98 10.28q-1-.02-1.7.06c-.49.07-.96.22-1.34.6s-.53.85-.6 1.34q-.07.7-.06 1.7v.1q-.02 1 .06 1.7c.07.49.22.96.6 1.34s.85.53 1.34.6q.7.07 1.7.06h.1q1 .02 1.7-.06c.49-.07.96-.22 1.34-.6s.53-.85.6-1.34q.08-.7.06-1.7v-.1q.02-1-.06-1.7a2.3 2.3 0 0 0-.6-1.34 2.2 2.2 0 0 0-1.34-.6q-.7-.07-1.7-.06zm-1.98 1.72c.06-.06.16-.13.48-.17.35-.05.82-.05 1.55-.05s1.2 0 1.55.05c.32.04.42.11.48.17s.13.16.17.48c.05.35.05.82.05 1.55s0 1.2-.05 1.55c-.04.32-.11.42-.17.48s-.16.13-.48.17c-.35.05-.82.05-1.55.05s-1.2 0-1.55-.05c-.32-.04-.42-.11-.48-.17s-.13-.16-.17-.48c-.05-.35-.05-.82-.05-1.55s0-1.2.05-1.55c.04-.32.11-.42.17-.48" fill="#161616"/><path d="M2.25 12c0-.41.34-.75.75-.75h6a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m10.5-9a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0z" fill="#161616"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.95 2.25h.1q1-.02 1.7.06c.49.07.96.22 1.34.6s.53.85.6 1.34q.07.7.06 1.7v.1q.02 1-.06 1.7c-.07.49-.22.96-.6 1.34s-.85.53-1.34.6q-.7.08-1.7.06h-.1q-1 .02-1.7-.06a2.3 2.3 0 0 1-1.34-.6 2.2 2.2 0 0 1-.6-1.34q-.07-.7-.06-1.7v-.1q-.02-1 .06-1.7c.07-.49.22-.96.6-1.34s.85-.53 1.34-.6q.7-.07 1.7-.06m-1.5 1.55c-.32.04-.42.11-.48.17s-.13.16-.17.48c-.05.35-.05.82-.05 1.55s0 1.2.05 1.55c.04.32.11.42.17.48s.16.13.48.17c.35.05.82.05 1.55.05s1.2 0 1.55-.05c.32-.04.42-.11.48-.17s.13-.16.17-.48c.05-.35.05-.82.05-1.55s0-1.2-.05-1.55c-.04-.32-.11-.42-.17-.48s-.16-.13-.48-.17c-.35-.05-.82-.05-1.55-.05s-1.2 0-1.55.05" fill="#161616"/><path d="M14.95 11.25q-1-.02-1.7.06c-.49.07-.96.22-1.34.6s-.53.85-.6 1.34q-.07.7-.06 1.7V15a.75.75 0 0 0 1.5 0c0-.73 0-1.2.05-1.55.04-.32.11-.42.17-.48s.16-.13.48-.17c.35-.05.82-.05 1.55-.05h6a.75.75 0 0 0 0-1.5zm3.05 4.5c.73 0 1.2 0 1.55.05.32.04.42.11.48.17s.13.16.17.49c.05.34.05.81.05 1.54s0 1.2-.05 1.55c-.04.33-.11.43-.17.49-.09.09-.26.19-1.05.21a.75.75 0 0 0 .04 1.5c.77-.02 1.52-.1 2.07-.65.38-.38.53-.86.6-1.35q.07-.7.06-1.7v-.1q.02-1-.06-1.7a2.3 2.3 0 0 0-.6-1.34 2.2 2.2 0 0 0-1.34-.6q-.7-.08-1.7-.06H18a.75.75 0 0 0 0 1.5" fill="#161616"/><path d="M15.75 15a.75.75 0 0 0-1.5 0v1.5c0 .85.24 1.56.93 1.95q.46.23.91.26.45.05.91.04.23.02.25.25a.75.75 0 0 0 1.5 0c0-.97-.78-1.75-1.75-1.75q-.45 0-.74-.03a1 1 0 0 1-.35-.08c-.02-.01-.16-.07-.16-.64zm-3 2.77a.75.75 0 0 0-1.5 0v2.77a.75.75 0 0 0 1.5 0zM15 20.25a.75.75 0 0 0 0 1.5h1a.75.75 0 0 0 0-1.5z" fill="#161616"/></svg>
                            </button>
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
            <div class="bg-white px-3 py-2 filter__btn position-relative" style="z-index: 98;">
                <div class="row g-0 align-items-center">
                    <div class="col-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">
                            <button class="btn btn__base rounded-pill active">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.667 10a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm3.329 0a.833.833 0 1 0 0 1.666h.008a.833.833 0 1 0 0-1.666zm3.33 0a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm-6.659 3.333a.833.833 0 1 0 0 1.667h.007a.833.833 0 1 0 0-1.667zm3.329 0a.833.833 0 1 0 0 1.667h.008a.833.833 0 1 0 0-1.667z" fill="#1864AB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 1.667a.625.625 0 0 0-1.25 0v.528c-.67.19-1.236.5-1.707 1.008-.648.701-.936 1.587-1.074 2.696-.136 1.088-.136 2.481-.136 4.26v.516c0 1.778 0 3.171.136 4.259.138 1.11.426 1.995 1.074 2.696.655.707 1.493 1.028 2.541 1.18 1.015.148 2.312.148 3.949.148h1.684c1.637 0 2.934 0 3.949-.147 1.048-.153 1.886-.474 2.541-1.181.648-.701.936-1.587 1.075-2.696.135-1.088.135-2.481.135-4.26v-.516c0-1.778 0-3.171-.136-4.259-.137-1.11-.426-1.995-1.074-2.696-.47-.508-1.036-.817-1.707-1.008v-.528a.625.625 0 1 0-1.25 0v.304c-.947-.096-2.112-.096-3.533-.096H9.158c-1.421 0-2.586 0-3.533.096zM4.399 3.505a.625.625 0 0 0 1.226-.172V3.23c.884-.103 2.027-.104 3.583-.104h1.584c1.556 0 2.699.001 3.583.104v.104a.625.625 0 0 0 1.226.172c.34.135.597.314.813.547.395.427.628 1.011.751 1.995l-.082-.005H2.917l-.082.005c.123-.984.356-1.569.75-1.995.217-.233.474-.412.814-.547M2.742 7.267a76 76 0 0 0-.034 2.936v.428c0 1.831.001 3.147.126 4.148.123.988.356 1.575.752 2.002.388.42.912.663 1.803.793.915.133 2.12.134 3.82.134h1.583c1.698 0 2.904-.001 3.819-.134.891-.13 1.415-.373 1.803-.793.396-.427.63-1.014.752-2.002.125-1 .126-2.317.126-4.148v-.428c0-1.173 0-2.134-.034-2.936a.6.6 0 0 1-.175.024H2.917a.6.6 0 0 1-.175-.024" fill="#1864AB"/></svg>
                                <span>Today</span>
                            </button> 
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="2025-12-13 to 2026-01-28"></input>
                            <input type="text" id="timeOnly" class="form-control time__input" value="09:00 - 12:00"></input> 
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
                                    More Filters
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

                     
                </div><!--.//row-->
            </div>


            <div class="bg-white px-3 mt-1">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-6 order-xl-2">
                        <div class="d-flex align-items-center justify-content-center justify-content-xl-end gap-3">
                            
                            <div class="dropdown"> 
                                <button class="btn btn__base" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M14.25 2.25a1.5 1.5 0 0 1 1.496 1.388l.004.112v10.5a1.5 1.5 0 0 1-1.387 1.496l-.113.004H3.75a1.5 1.5 0 0 1-1.496-1.387l-.004-.113V3.75a1.5 1.5 0 0 1 1.388-1.496l.112-.004zm0 1.5H3.75v10.5h10.5zM6 5.25a.75.75 0 0 1 .745.662L6.75 6v6a.75.75 0 0 1-1.495.088L5.25 12V6A.75.75 0 0 1 6 5.25m3 0a.75.75 0 0 1 .75.75v6a.75.75 0 1 1-1.5 0V6A.75.75 0 0 1 9 5.25m3 0a.75.75 0 0 1 .745.662L12.75 6v6a.75.75 0 0 1-1.495.088L11.25 12V6a.75.75 0 0 1 .75-.75" fill="#282D33"/></svg>
                                    <span>Columns</span>
                                </button>
                                <ul class="dropdown-menu px-3 checkboxDropdown" id="checkboxDropdown">
                                    <li>
                                        <button class="btn btn-link d-block py-2 px-0">Reset</button>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="create_date" id="create_date" class="form-check-input">
                                            <label for="create_date" class="form-check-label">Created Date</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="experienced_date" id="experienced_date" class="form-check-input">
                                            <label for="experienced_date" class="form-check-label">Experience date</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="type" id="type" class="form-check-input">
                                            <label for="type" class="form-check-label">Type</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="name" id="name" class="form-check-input">
                                            <label for="name" class="form-check-label">Name</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="group" id="group" class="form-check-input">
                                            <label for="group" class="form-check-label">Group</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="product_choice" id="product_choice" class="form-check-input">
                                            <label for="product_choice" class="form-check-label">Product Choice</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="discount" id="discount" class="form-check-input">
                                            <label for="discount" class="form-check-label">Discount</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="video_choice" id="video_choice" class="form-check-input">
                                            <label for="video_choice" class="form-check-label">Video Choice</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="other" id="other" class="form-check-input">
                                            <label for="other" class="form-check-label">Others</label>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="created_by" id="created_by" class="form-check-input">
                                            <label for="created_by" class="form-check-label">Created By</label>
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                            <button class="btn btn__base">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z" fill="#000" fill-opacity=".2"/></svg>
                                <span>Send to email</span>
                            </button>
                            <button class="btn btn__base"> 
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.667A.667.667 0 0 0 4 3.334v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.334a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.333a.67.67 0 0 1 .195.471v3.334a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.333v-2zM10 3.61l1.057 1.057H10zm1.529 7.528a.667.667 0 1 1 .942-.943l2 2c.26.26.26.683 0 .943l-2 2a.667.667 0 1 1-.942-.943l.861-.861H9.333a.667.667 0 0 1 0-1.334h3.057z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.667 2.667A.667.667 0 0 0 4 3.334v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.334a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.333a.67.67 0 0 1 .195.471v3.334a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.333v-2zM10 3.61l1.057 1.057H10zm1.529 7.528a.667.667 0 1 1 .942-.943l2 2c.26.26.26.683 0 .943l-2 2a.667.667 0 1 1-.942-.943l.861-.861H9.333a.667.667 0 0 1 0-1.334h3.057z" fill="#000" fill-opacity=".2"/></svg>
                                <span>Export</span>
                            </button>
                            <button class="btn btn__base"> 
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z" fill="#000" fill-opacity=".2"/></svg>
                                <span>Print</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-6 order-xl-1">
                        <nav>
                            <div class="nav nav-tabs tab__btns border-0 justify-content-center justify-content-xl-start" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    All <span>61</span>
                                </button>
                                <button class="nav-link ready" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    Ready <span>28</span>
                                </button>
                                <button class="nav-link sent" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    Sent <span>32</span>
                                </button>
                                <button class="nav-link notcomplete" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">
                                    Not Complete <span>5</span>
                                </button>
                            </div>
                        </nav>
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
                                    <th>Created Date</th>
                                    <th>Experience date</th>
                                    <th>Ref. ID</th>
                                    <th>Booking ID</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Product Choice</th>
                                    <th>Discount</th>
                                    <th>Video Choice</th>
                                    <th>Others</th>
                                    <th>Created By</th>
                                    <th>Gross AMT.</th>
                                    <th>Amount Due</th>
                                    <th>P.Balance</th>
                                    <th>C.Balance</th>
                                    <th>E.Waiver</th>
                                    <th>P.Waiver</th>
                                    <th>Verified On</th>
                                    <th>Arrrived</th>
                                    <th>Last Dive</th>
                                    <th>Total Dives</th>
                                    <th>Certificate</th>
                                    <th>Booking Note</th>
                                    <th>Notes</th>
                                    <th>Sent</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
                                </tr>
                                <tr> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
                                </tr>
                                <tr class="bg-warning"> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
                                </tr>
                                <tr> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
                                </tr>
                                <tr class="bg-success"> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
                                </tr>
                                <tr> 
                                    <?php include('includes/components/table-tr.inc.php'); ?>
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


<!-- Check-in Modal -->
<div class="modal fade" id="checkInModal" tabindex="-1" aria-labelledby="checkInModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:674px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="checkInModalLabel">Check‑In List</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto">
                <div class="user__box d-flex flex-row gap-3 border-top border-bottom border-start-0 border-end-0 p-3 align-items-center">
                    <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                        class="img-fluid rounded-circle object-fit-cover" style="width:2rem;height:2rem;" 
                    >
                    <div class="col">
                        <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                        <div class="d-flex fs-12 align-items-center gap-2">
                            <span class="">moali38@mail.com</span><span class="dot"></span>
                            <span>Booking ID: 2323421</span>
                        </div>
                    </div>
                </div><!--.user_box-->
                <table class="table modal__data__table mb-0">
                    <tbody>
                        <tr>
                            <td>ID Scanned</td>
                            <td>
                                <div class="badge bg-danger">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.77 1.51a4 4 0 0 1 2.46 0c.8.27 1.42.9 2.04 1.77.63.88 1.32 2.1 2.21 3.67l.04.07c.89 1.57 1.58 2.8 2 3.78.44 1 .66 1.86.48 2.69-.17.83-.6 1.58-1.22 2.16-.62.57-1.46.8-2.52.92s-2.44.12-4.22.12h-.08c-1.78 0-3.16 0-4.22-.12s-1.9-.35-2.52-.92A4 4 0 0 1 1 13.49c-.18-.83.04-1.69.47-2.69.43-.99 1.12-2.2 2.01-3.78l.04-.07c.89-1.57 1.58-2.8 2.2-3.67s1.26-1.5 2.05-1.77m1 6.76c.18.03.43.1.65.31.22.22.28.47.31.66l.02.48v3.03a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 0-1.5h.03zM9 5.25a.75.75 0 0 0 0 1.5.75.75 0 0 0 0-1.5" fill="#B71D18"/></svg> 
                                    <span>Required</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>E‑Waiver/P‑Waiver</td>
                            <td> 
                                <svg width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><rect width="26" height="26" rx="13" fill="#22C55E" fill-opacity=".16"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.94 13a8.06 8.06 0 1 0 16.12 0 8.06 8.06 0 0 0-16.12 0m11.57-2.8c.3.28.32.75.04 1.06l-4.12 4.5a.75.75 0 0 1-1.09.02l-1.87-1.87a.75.75 0 1 1 1.06-1.07l1.32 1.33 3.6-3.93a.75.75 0 0 1 1.06-.04" fill="#118D57"/></svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td> 
                                <div class="badge bg-warning">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.77 1.51a4 4 0 0 1 2.46 0c.8.27 1.42.9 2.04 1.77.63.88 1.32 2.1 2.21 3.67l.04.07c.89 1.57 1.58 2.8 2 3.78.44 1 .66 1.86.48 2.69-.17.83-.6 1.58-1.22 2.16-.62.57-1.46.8-2.52.92s-2.44.12-4.22.12h-.08c-1.78 0-3.16 0-4.22-.12s-1.9-.35-2.52-.92A4 4 0 0 1 1 13.49c-.18-.83.04-1.69.47-2.69.43-.99 1.12-2.2 2.01-3.78l.04-.07c.89-1.57 1.58-2.8 2.2-3.67s1.26-1.5 2.05-1.77m1 6.76c.18.03.43.1.65.31.22.22.28.47.31.66l.02.48v3.03a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 0-1.5h.03zM9 5.25a.75.75 0 0 0 0 1.5.75.75 0 0 0 0-1.5" fill="#B76E00"/></svg>
                                    <span>Must be less than or equal to 100kg</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>BMI</td>
                            <td> 
                                <div class="badge bg-warning">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.77 1.51a4 4 0 0 1 2.46 0c.8.27 1.42.9 2.04 1.77.63.88 1.32 2.1 2.21 3.67l.04.07c.89 1.57 1.58 2.8 2 3.78.44 1 .66 1.86.48 2.69-.17.83-.6 1.58-1.22 2.16-.62.57-1.46.8-2.52.92s-2.44.12-4.22.12h-.08c-1.78 0-3.16 0-4.22-.12s-1.9-.35-2.52-.92A4 4 0 0 1 1 13.49c-.18-.83.04-1.69.47-2.69.43-.99 1.12-2.2 2.01-3.78l.04-.07c.89-1.57 1.58-2.8 2.2-3.67s1.26-1.5 2.05-1.77m1 6.76c.18.03.43.1.65.31.22.22.28.47.31.66l.02.48v3.03a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 0-1.5h.03zM9 5.25a.75.75 0 0 0 0 1.5.75.75 0 0 0 0-1.5" fill="#B76E00"/></svg>
                                    <span>Male BMI must be less than or equal to 30</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td> 
                                <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                            </td>
                        </tr>
                        <tr>
                            <td>Shoulder Dislocation</td>
                            <td> 
                                <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn__box d-flex justify-content-end gap-3 mt-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary rounded-pill" disabled>Proceed to Check-in</button>
                </div>
            </div><!--.modal-body-->
        </div>
    </div>
</div>

<!-- Sent to Manifest Modal -->
<div class="modal fade" id="sentManifestModal" tabindex="-1" aria-labelledby="sentManifestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:674px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="sentManifestModalLabel"></p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body ff-noto scroll">
                <div class="d-flex flex-column gap-4">
                    <div>
                        <div class="user__box d-flex flex-row gap-2 border-top border-bottom border-start-0 border-end-0 p-3 align-items-center">
                            <div class="input">
                                <input 
                                    type="checkbox"
                                    class="form-check-input size-20"
                                    id="checkIn"
                                    name="checkIn"
                                    value="checkIn"
                                >
                            </div>
                            <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                                class="img-fluid rounded-circle object-fit-cover" style="width:2rem;height:2rem;" 
                            >
                            <div class="col">
                                <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                                <div class="d-flex fs-12 align-items-center gap-2">
                                    <span class="">moali38@mail.com</span><span class="dot"></span>
                                    <span>Booking ID: 2323421</span>
                                </div>
                            </div>
                        </div><!--.user_box-->
                        <table class="table modal__data__table mb-0">
                            <tbody>
                                <tr>
                                    <td>ID Scanned</td>
                                    <td>
                                        <div class="badge bg-danger">
                                            <img src="assets/images/icons/alert-red.svg" alt="check" width="18" height="18">
                                            <span>Required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E‑Waiver/P‑Waiver</td>
                                    <td> 
                                        <div class="badge bg-danger">
                                            <img src="assets/images/icons/alert-red.svg" alt="check" width="18" height="18">
                                            <span>Required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td> 
                                        <div class="badge bg-warning">
                                            <img src="assets/images/icons/alert-yellow.svg" alt="check" width="18" height="18">
                                            <span>Must be less than or equal to 100kg</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>BMI</td>
                                    <td> 
                                        <div class="badge bg-warning">
                                            <img src="assets/images/icons/alert-yellow.svg" alt="check" width="18" height="18">
                                            <span>Male BMI must be less than or equal to 30</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td> 
                                        <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shoulder Dislocation</td>
                                    <td> 
                                        <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>

                    <div>
                        <div class="user__box d-flex flex-row gap-2 border-top border-bottom border-start-0 border-end-0 p-3 align-items-center">
                            <div class="input">
                                <input 
                                    type="checkbox"
                                    class="form-check-input size-20"
                                    id="checkIn"
                                    name="checkIn"
                                    value="checkIn"
                                >
                            </div>
                            <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                                class="img-fluid rounded-circle object-fit-cover" style="width:2rem;height:2rem;" 
                            >
                            <div class="col">
                                <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                                <div class="d-flex fs-12 align-items-center gap-2">
                                    <span class="">moali38@mail.com</span><span class="dot"></span>
                                    <span>Booking ID: 2323421</span>
                                </div>
                            </div>
                        </div><!--.user_box-->
                        <table class="table modal__data__table mb-0">
                            <tbody>
                                <tr>
                                    <td>ID Scanned</td>
                                    <td>
                                        <div class="badge bg-danger">
                                            <img src="assets/images/icons/alert-red.svg" alt="check" width="18" height="18">
                                            <span>Required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E‑Waiver/P‑Waiver</td>
                                    <td> 
                                        <div class="badge bg-danger">
                                            <img src="assets/images/icons/alert-red.svg" alt="check" width="18" height="18">
                                            <span>Required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td> 
                                        <div class="badge bg-warning">
                                            <img src="assets/images/icons/alert-yellow.svg" alt="check" width="18" height="18">
                                            <span>Must be less than or equal to 100kg</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>BMI</td>
                                    <td> 
                                        <div class="badge bg-warning">
                                            <img src="assets/images/icons/alert-yellow.svg" alt="check" width="18" height="18">
                                            <span>Male BMI must be less than or equal to 30</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td> 
                                        <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shoulder Dislocation</td>
                                    <td> 
                                        <img src="assets/images/icons/check-blue.svg" alt="check" width="26" height="26">
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div><!--.flex-->
            </div><!--.modal-body-->
            <div class="btn__box d-flex justify-content-end gap-3 px-3 pb-3">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary fw-normal rounded-pill">Proceed to Check-in</button>
            </div>
        </div>
    </div>
</div>

<!-- Attachment Modal -->
<div class="modal fade" id="attachmentModal" tabindex="-1" aria-labelledby="attachmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:1060px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="attachmentModalLabel">Attach/Update</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 ff-noto scroll">
                <div class="row g-0 app-content-header border-top pt-3">
                    <div class="col-lg-7">
                        <div class="user__box w-100 d-flex flex-row gap-3 align-items-center border-0"> 
                            <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                                class="img-fluid rounded-circle object-fit-cover" style="width:2rem;height:2rem;" 
                            >
                            <div class="col">
                                <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                                <div class="d-flex fs-12 align-items-center gap-2">
                                    <span class="">moali38@mail.com</span><span class="dot"></span>
                                    <span>Booking ID: 2323421</span>
                                </div>
                            </div>
                        </div><!--.user_box-->  
                    </div>
                    <div class="col-lg-5 filter__btn">
                         <div class="search__form rounded-pill d-flex align-items-center gap-0 px-1">
                            <input type="text" class="form-control rounded-pill border-0 shadow-none bg-transparent" placeholder="Search for customer..."> 
                            <button class="btn ac__btn w-auto px-3 rounded-pill active">Name</button> 
                            <button class="btn ac__btn w-auto px-4 rounded-pill fw-semibold">ID</button>
                        </div>
                    </div>
                </div><!--.row-->

                <div class="table-responsiv mt-4">
                    <table class="table audit__table attachment__table mb-0"
                        style="--sortDown: url('./assets/images/icons/sort-down.svg'); --sortUp: url('./assets/images/icons/sort-up.svg');"> 
                        <thead>
                            <tr>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Waiver ID 
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Name 
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Email 
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        DOB 
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Signed Date 
                                    </div>
                                </th>
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Expiry Date 
                                    </div>
                                </th> 
                                <th>
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        Status
                                    </div>
                                </th> 
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8" class="text-center">No record is found</td> 
                            </tr>
                            <tr>
                                <td>#13242</td>
                                <td>Mohamad Ali <img src="assets/images/icons/alert-yellow.svg" alt="alert" width="18" height="18"></td>
                                <td>moh1233@gmail.com</td>
                                <td>1/1/1995 <b>(34)</b></td>
                                <td>31/06/2026, 2:55:00 PM</td>
                                <td>01/07/2026</td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input size-20" id="verify">
                                        <label for="verify">Verify</label>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn ac__btn viewWaiverCaseDetail"
                                        type="button"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.833496 9.99967C0.833496 9.99967 4.16683 3.33301 10.0002 3.33301C15.8335 3.33301 19.1668 9.99967 19.1668 9.99967C19.1668 9.99967 15.8335 16.6663 10.0002 16.6663C4.16683 16.6663 0.833496 9.99967 0.833496 9.99967Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#13242</td>
                                <td>Mohamad Ali <img src="assets/images/icons/alert-yellow.svg" alt="alert" width="18" height="18"></td>
                                <td>moh1233@gmail.com</td>
                                <td>1/1/1995 <b>(34)</b></td>
                                <td>31/06/2026, 2:55:00 PM</td>
                                <td>01/07/2026</td>
                                <td>
                                    <div class="badge bg-success">
                                        Verified
                                    </div>
                                </td>
                                <td>
                                    <button class="btn ac__btn viewWaiverCaseDetail"
                                        type="button"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.833496 9.99967C0.833496 9.99967 4.16683 3.33301 10.0002 3.33301C15.8335 3.33301 19.1668 9.99967 19.1668 9.99967C19.1668 9.99967 15.8335 16.6663 10.0002 16.6663C4.16683 16.6663 0.833496 9.99967 0.833496 9.99967Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#13242</td>
                                <td>Mohamad Ali <img src="assets/images/icons/alert-yellow.svg" alt="alert" width="18" height="18"></td>
                                <td>moh1233@gmail.com</td>
                                <td>1/1/1995 <b>(34)</b></td>
                                <td>31/06/2026, 2:55:00 PM</td>
                                <td>01/07/2026</td>
                                <td>
                                    <div class="badge bg-danger">
                                        Expired
                                    </div>
                                </td>
                                <td>
                                    <button class="btn ac__btn viewWaiverCaseDetail"
                                        type="button"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.833496 9.99967C0.833496 9.99967 4.16683 3.33301 10.0002 3.33301C15.8335 3.33301 19.1668 9.99967 19.1668 9.99967C19.1668 9.99967 15.8335 16.6663 10.0002 16.6663C4.16683 16.6663 0.833496 9.99967 0.833496 9.99967Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-start">customer-waiver-signed.pdf</td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input size-20" id="verify">
                                        <label for="verify">Verify</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex gap-2"> 
                                        <button class="btn ac__btn danger" 
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.155a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667V5h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.667h-.067a.833.833 0 0 1 0-1.667h3.333V3.334c0-.442.176-.866.489-1.179M5.072 6.667l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zM11.667 5H8.333V3.334h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.18L10 10.49l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.077a.833.833 0 1 1-1.179 1.179L10 12.845l-1.077 1.078a.833.833 0 1 1-1.179-1.179l1.077-1.077z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.155a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667V5h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.667h-.067a.833.833 0 0 1 0-1.667h3.333V3.334c0-.442.176-.866.489-1.179M5.072 6.667l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zM11.667 5H8.333V3.334h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.18L10 10.49l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.077a.833.833 0 1 1-1.179 1.179L10 12.845l-1.077 1.078a.833.833 0 1 1-1.179-1.179l1.077-1.077z" fill="#FA5252"/></svg>
                                        </button>
                                        <button class="btn ac__btn viewWaiverCaseDetail"
                                            type="button"
                                        >
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.833496 9.99967C0.833496 9.99967 4.16683 3.33301 10.0002 3.33301C15.8335 3.33301 19.1668 9.99967 19.1668 9.99967C19.1668 9.99967 15.8335 16.6663 10.0002 16.6663C4.16683 16.6663 0.833496 9.99967 0.833496 9.99967Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table> 
                </div>
            </div><!--.modal-body-->
            <div class="btn__box filter__btn d-flex justify-content-end gap-3 pt-1 px-3 pb-3">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn__base fw-normal rounded-pill"> 
                    <svg width="20" height="21" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21"><g clip-path="url(#a)" stroke="#000" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M13.33 14 10 10.5 6.67 14M10 10.5v7.88"/><path d="M17 16.1a4.3 4.3 0 0 0 1.82-2.1c.37-.9.44-1.89.22-2.83a4.4 4.4 0 0 0-1.48-2.37A4 4 0 0 0 15 7.87h-1.05a7 7 0 0 0-1.37-2.78 7 7 0 0 0-2.4-1.87 6.4 6.4 0 0 0-5.81.23Q3.02 4.2 2.1 5.5a7.2 7.2 0 0 0-1.04 6 7 7 0 0 0 1.43 2.76"/><path d="M13.33 14 10 10.5 6.67 14"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v21H0z"/></clipPath></defs></svg> 
                    Upload Manually
                </button>
                <button type="button" class="btn btn-primary match__btn fw-normal rounded-pill">Match Waiver</button>
            </div>
        </div>
    </div>
</div>
<?php $isMacher="true"; include('includes/components/waiver-case-offcanvas.inc.php'); ?>


<!-- Audit Log Modal -->
<div class="modal fade" id="auditLogModal" tabindex="-1" aria-labelledby="auditLogModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:830px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="auditLogModalLabel">Audit Log</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0 ff-noto scroll">
                <p class="text-dark2 small">Booking ID: <span class="fw-bold">293823892</span></p>
                
                <div class="table-responsive">
                    <table class="table audit__table mb-0"
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-11-20</td>
                                <td>10:15 AM</td>
                                <td>Admin</td>
                                <td>Status</td>
                                <td>Pending</td>
                                <td>Approved</td>
                            </tr>
                            <tr>
                                <td>2025-11-21</td>
                                <td>02:45 PM</td>
                                <td>Shuvro</td>
                                <td>Priority</td>
                                <td>Low</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td>2025-11-22</td>
                                <td>09:30 AM</td>
                                <td>Manager</td>
                                <td>Assigned To</td>
                                <td>Team A</td>
                                <td>Team B</td>
                            </tr>
                            <tr>
                                <td>2025-11-23</td>
                                <td>04:10 PM</td>
                                <td>System</td>
                                <td>Version</td>
                                <td>1.2</td>
                                <td>1.3</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div><!--.modal-body-->
            <div class="btn__box text-center px-3 pb-3">
                <button type="button" class="btn btn-outline-secondary rounded-3 viewAllLogs" data-bs-dismiss="modal">View All Logs</button> 
            </div>
        </div>
    </div>
</div>

<style>
    .modal .audit__table th .sort { 
        background: var(--sortDown) no-repeat center center / 1rem;
    }
    .modal .audit__table th.active-asc .sort {
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
    document.querySelectorAll(".viewAllLogs").forEach(el => {
        el.addEventListener("click", () => {
            window.location.href = "audit-log.php";
        });
    });
</script> 


<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>

<script>
    $(document).on("click", ".viewWaiverCaseDetail", function () {

    // Close active modal (if any)
    const modalEl = document.querySelector(".modal.show");
    if (modalEl) {
        const activeModal = bootstrap.Modal.getInstance(modalEl);
        if (activeModal) activeModal.hide();
    }

    // Debug check
    console.log(document.getElementById("offcanvasAuditDetail"));

    // Open Offcanvas safely
    const offcanvas = new bootstrap.Offcanvas("#offcanvasAuditDetail", {
        backdrop: true
    });
    offcanvas.show();
});


</script>

 