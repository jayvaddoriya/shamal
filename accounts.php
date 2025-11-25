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
                            <button class="btn btn-primary rounded-pill">Send to Manifest</button>
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
            <div class="bg-white px-3 py-2 filter__btn">
                <div class="row g-0 align-items-center">
                    <div class="col-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">
                            <button class="btn btn__base rounded-pill active">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.667 10a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm3.329 0a.833.833 0 1 0 0 1.666h.008a.833.833 0 1 0 0-1.666zm3.33 0a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm-6.659 3.333a.833.833 0 1 0 0 1.667h.007a.833.833 0 1 0 0-1.667zm3.329 0a.833.833 0 1 0 0 1.667h.008a.833.833 0 1 0 0-1.667z" fill="#1864AB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 1.667a.625.625 0 0 0-1.25 0v.528c-.67.19-1.236.5-1.707 1.008-.648.701-.936 1.587-1.074 2.696-.136 1.088-.136 2.481-.136 4.26v.516c0 1.778 0 3.171.136 4.259.138 1.11.426 1.995 1.074 2.696.655.707 1.493 1.028 2.541 1.18 1.015.148 2.312.148 3.949.148h1.684c1.637 0 2.934 0 3.949-.147 1.048-.153 1.886-.474 2.541-1.181.648-.701.936-1.587 1.075-2.696.135-1.088.135-2.481.135-4.26v-.516c0-1.778 0-3.171-.136-4.259-.137-1.11-.426-1.995-1.074-2.696-.47-.508-1.036-.817-1.707-1.008v-.528a.625.625 0 1 0-1.25 0v.304c-.947-.096-2.112-.096-3.533-.096H9.158c-1.421 0-2.586 0-3.533.096zM4.399 3.505a.625.625 0 0 0 1.226-.172V3.23c.884-.103 2.027-.104 3.583-.104h1.584c1.556 0 2.699.001 3.583.104v.104a.625.625 0 0 0 1.226.172c.34.135.597.314.813.547.395.427.628 1.011.751 1.995l-.082-.005H2.917l-.082.005c.123-.984.356-1.569.75-1.995.217-.233.474-.412.814-.547M2.742 7.267a76 76 0 0 0-.034 2.936v.428c0 1.831.001 3.147.126 4.148.123.988.356 1.575.752 2.002.388.42.912.663 1.803.793.915.133 2.12.134 3.82.134h1.583c1.698 0 2.904-.001 3.819-.134.891-.13 1.415-.373 1.803-.793.396-.427.63-1.014.752-2.002.125-1 .126-2.317.126-4.148v-.428c0-1.173 0-2.134-.034-2.936a.6.6 0 0 1-.175.024H2.917a.6.6 0 0 1-.175-.024" fill="#1864AB"/></svg>
                                <span>Today</span>
                            </button> 
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="9/9/2025 - 9/9/2025"></input>
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
                                        <button class="btn btn-link d-block py-1 px-1">Reset</button>
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

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>