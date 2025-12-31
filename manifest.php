<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main manifest__page">
    <!--begin::App Content Header-->
    <div class="app-content-header pb-1">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="bg-white px-3 py-2"> 
                <div class="row gx-0 gy-3 gy-xl-0">
                    <div class="col-12 d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative z-3 filter__btn">
                        <button class="btn btn__base rounded-pill active fw-bold"
                            type="button" data-bs-toggle="modal" data-bs-target="#addLoadModal"
                        >
                            <span>Add Load</span>
                        </button> 
                        <button class="btn btn__base rounded-pill"
                            data-bs-toggle="modal" data-bs-target="#loadVisibleTvModal"
                        >
                            Set Load Visible count in TV
                        </button> 
                        <button class="btn btn__base rounded-pill"
                             data-bs-toggle="modal" data-bs-target="#insertLoadModal"
                        >
                            Insert Load
                        </button> 
                        <button class="btn btn__base rounded-pill"
                             data-bs-toggle="modal" data-bs-target="#duplicateLoadModal"
                        >
                            Duplicate
                        </button> 
                        <button class="btn btn__base rounded-pill"
                             data-bs-toggle="modal" data-bs-target="#closeAllLoadModal"
                        >
                            Close all load
                        </button> 
                        <button class="btn btn__base rounded-pill"
                                data-bs-toggle="modal" data-bs-target="#checkInAccModal"
                        >
                            Checked-in account
                        </button> 
                        <button class="btn btn__base rounded-pill"
                            data-bs-toggle="modal" data-bs-target="#toggleLoadModal"
                        >
                            Start/Stop load
                        </button> 
                        <button class="btn btn__base rounded-pill"
                            data-bs-toggle="modal" data-bs-target="#addNoteModal"
                        >
                            Manifest Display Note
                        </button> 
                        <button class="btn btn__base rounded-pill">
                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.743 5.225c-2.905-.747-5.886.412-7.515 2.778ZM6.228 8.003H9a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1v-5a1 1 0 0 1 2 0v2.304a9.01 9.01 0 0 1 9.241-3.02 9 9 0 1 1-11.165 9.887 1 1 0 1 1 1.983-.26 7 7 0 1 0 8.684-7.69" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.743 5.225c-2.905-.747-5.886.412-7.515 2.778ZM6.228 8.003H9a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1v-5a1 1 0 0 1 2 0v2.304a9.01 9.01 0 0 1 9.241-3.02 9 9 0 1 1-11.165 9.887 1 1 0 1 1 1.983-.26 7 7 0 1 0 8.684-7.69" fill="#000" fill-opacity=".2"/></svg>
                        </button> 
                        <div class="line__divider"></div>
                        <button class="btn btn__base rounded-pill">
                            Audit Log
                        </button>
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
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jump Count: <span class="fw-bold">200 - 499</span>
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input size-20" id="exampleCheck1">
                                <label class="form-check-label small text-dark" for="exampleCheck1">Rule of mode</label>
                            </div> 
                            <div class="form-check form-switch">
                                <label class="form-check-label fs-12  text-dark" for="loadOnTV">Load on TV</label>
                                <input class="form-check-input m-0" type="checkbox" role="switch" id="loadOnTV" checked>
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label fs-12  text-dark" for="StudentHalt">Student Halt</label>
                                <input class="form-check-input m-0" type="checkbox" role="switch" id="StudentHalt" checked>
                            </div>
                        </div>
                    </div> 
                </div><!--.//row-->
            </div>


            
            <div class="mt-1 bg-white mt-2 position-relative z-2">
                <div class="overflow-x-auto">
                    <div class="d-flex flex-row">
                        <div class="load__list__col">
                            <div class="p-4"> 
                                <h2 class="small fw-semibold m-0 text-dark">Load List</h2>
                            </div>
                            <div class="py-1">
                                <div class="px-4 filter__btn d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative z-3">
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Active</a></li>
                                            <li><a class="dropdown-item" href="#">Inactive</a></li> 
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Aircraft
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Active</a></li>
                                            <li><a class="dropdown-item" href="#">Inactive</a></li> 
                                        </ul>
                                    </div>
                                    <div class="line__divider"></div>
                                    <button class="btn btn-link rounded-pill">Reset Filters</button> 
                                </div>
                            </div>
                            <table class="table data-table load__table large__table" id="dataTable2">
                                <thead>
                                    <tr> 
                                        <th>ID</th>
                                        <th>Load</th>
                                        <th>M</th>
                                        <th>Fuel</th> 
                                        <th>TOT</th>
                                        <th>Depart</th>
                                        <th>P</th>
                                        <th>R</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="type_warning"> 
                                        <td>16744</td>
                                        <td>Jump 44</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>13:07</td>
                                        <td>17m</td>
                                        <td>20</td> 
                                        <td>0</td> 
                                        <td>
                                            <span class="badge bg-warning">On Call</span>
                                        </td> 
                                    </tr> 
                                    <tr class="type_primary active"> 
                                        <td>16744</td>
                                        <td>Jump 44</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>13:07</td>
                                        <td>17m</td>
                                        <td>20</td> 
                                        <td>0</td> 
                                        <td>
                                            <span class="badge bg-primary">Building</span>
                                        </td> 
                                    </tr> 
                                    <tr class="type_success"> 
                                        <td>16743</td>
                                        <td>Jump 43</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>13:07</td>
                                        <td>17m</td>
                                        <td>20</td> 
                                        <td>0</td> 
                                        <td>
                                            <span class="badge bg-success">Departed</span>
                                        </td> 
                                    </tr> 
                                    <tr class="type_secondary"> 
                                        <td>16743</td>
                                        <td>Jump 43</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>13:07</td>
                                        <td>17m</td>
                                        <td>20</td> 
                                        <td>0</td> 
                                        <td>
                                            <span class="badge bg-secondary">Completed</span>
                                        </td> 
                                    </tr>  
                                </tbody>
                            </table>
                        </div><!--.load__list__box-->

                        <div class="load__detail__col">
                            <!-- DESIGN STYLE 1 -->
                            <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                                <h2 class="fs-18 fw-semibold m-0 text-dark">Jump 3/6</h2>
                                <div class="d-inline-flex gap-2">
                                    <div class="data__box d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.55 6.51a3.25 3.25 0 1 0-5.1 0 5 5 0 0 0-2.82 6.6c.27.65.9 1.1 1.62 1.1h.51l.87 3.62A2.46 2.46 0 0 0 12 19.75c1.15 0 2.11-.81 2.37-1.92l.87-3.62h.51c.72 0 1.35-.45 1.62-1.1a5 5 0 0 0-2.82-6.6m-4.3-2.01a1.75 1.75 0 1 1 3.5 0 1.75 1.75 0 0 1-3.5 0M11 7.75c-2.28 0-3.93 2.48-2.98 4.8q.1.16.23.16h.7c.6 0 1.1.43 1.23.99l.9 3.78c.12.48.51.77.92.77s.8-.3.92-.77l.9-3.78c.13-.56.63-.99 1.23-.99h.7q.14 0 .23-.17c.95-2.31-.7-4.79-2.98-4.79z" fill="#141414"/><path d="M5.97 16.39c.34.24.41.7.18 1.04-.7 1-1.1 1.69-1.28 2.2-.17.5-.13.76-.04.97l.08.14c.1.14.33.31 1.09.41.75.1 1.8.1 3.3.1h5.4c1.5 0 2.55 0 3.3-.1.76-.1 1-.27 1.09-.41l.08-.14c.1-.2.13-.47-.04-.96a10 10 0 0 0-1.27-2.2.75.75 0 1 1 1.22-.87 11 11 0 0 1 1.47 2.57 2.7 2.7 0 0 1-.22 2.44c-.48.7-1.27.95-2.13 1.06s-2 .11-3.44.11H9.24c-1.43 0-2.58 0-3.44-.11s-1.65-.36-2.13-1.06l-.2-.35a2.7 2.7 0 0 1-.02-2.09q.39-1.07 1.47-2.57a.75.75 0 0 1 1.05-.18" fill="#141414"/></svg>
                                        <span>JUMPERS <span class="fw-bold">6</span></span> 
                                    </div>
                                    <div class="data__box d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 20.26v-4.5H8q-.69 0-1.25-.3v.57q0 .66-.02 1.12-.02.48-.19.9a2.7 2.7 0 0 1-1.49 1.5q-.43.17-.9.18-.46.03-1.12.02H3a.75.75 0 0 1 0-1.5l1.04-.01c.24-.02.36-.05.44-.08q.47-.2.67-.68.06-.1.08-.43c.02-.25.02-.57.02-1.05v-3.02a2.7 2.7 0 0 1 3-2.71q0-.73.05-1.26a3 3 0 0 1 .43-1.45q.49-.75 1.29-1.1c.5-.23 1.12-.23 1.65-.18.56.06 1.15.2 1.68.34q.76.21 1.3.41.4-2.13.92-3.5c.71-1.96 2.9-2.6 4.77-2.12 1 .25 1.69 1.29 1.3 2.34L17.7 14.27l-.1.17a2.05 2.05 0 0 1-1.9 1.32h-2.95v4.5H14a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1 0-1.5zm.75-6h3.7c.3 0 .55-.25.55-.57 0-.2-.1-.31-.18-.35-1-.46-3.5-1.37-8.1-1.58a1.2 1.2 0 0 0-1.22 1.22c0 .71.57 1.28 1.25 1.28zm2.2-5.8.23.09v.03q-.14 1.17-.17 2.55c-1.15-.3-2.63-.59-4.5-.76q0-.75.03-1.22c.04-.43.12-.64.2-.78q.25-.37.63-.54a2 2 0 0 1 .9-.05q.7.07 1.43.28.74.2 1.25.4m1.55 3.13c.05-3.55.65-5.97 1.22-7.54.37-1 1.6-1.55 3-1.19q.18.06.25.17.05.1.02.2L16.9 12.1l-.21-.12q-.37-.18-.95-.39" fill="#161616"/></svg>
                                        <span>OPEN SLOTS <span class="fw-bold">2</span></span> 
                                    </div>
                                    <div class="data__box pe-2 d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.4 3.2c1.15-.93 2.44-.96 3.57-.95h.11c.48.01.9.02 1.27.16.57.22 1.02.67 1.24 1.24.14.36.15.79.16 1.27v.1c.01 1.14-.01 2.43-.95 3.58-.35.44-.8.77-1.17 1.04l-.12.09c-.42.31-.7.55-.88.84-.21.35-.15.7.04 1.47l1.28 5.25q.24.89.03 1.72a3.3 3.3 0 0 1-.9 1.43c-.24.25-.64.54-1.15.49-.52-.06-.85-.44-1.04-.75l-3.42-5.45-1.19.95c-.72.58-.88.72-.96.9q-.19.4-.16 1.2.01.39.05.79v.01l.04.81c0 .44-.16.96-.4 1.38-.23.38-.68.94-1.4.98-.57.03-.92-.33-1.1-.6a3 3 0 0 1-.28-.6l-1.23-2.8-.2-.4-.05-.03-.35-.16-2.8-1.23-.05-.02a3 3 0 0 1-.54-.27 1.2 1.2 0 0 1-.6-1.1c.04-.7.6-1.16.98-1.39.42-.24.94-.4 1.38-.4q.4 0 .8.04h.02l.78.05q.81.03 1.2-.16c.19-.08.33-.24.91-.96l.95-1.2-5.45-3.41c-.3-.2-.69-.52-.75-1.04-.05-.51.24-.91.49-1.15q.62-.66 1.43-.9a3.4 3.4 0 0 1 1.72.03l5.25 1.28c.77.19 1.12.25 1.47.04a3 3 0 0 0 .93-1c.27-.37.6-.82 1.04-1.17m3.55.56c-1.13-.02-1.91.04-2.61.6-.27.22-.49.52-.78.9l-.08.13c-.3.4-.7.92-1.27 1.27-.91.55-1.86.31-2.5.15l-.1-.02L6.35 5.5c-.45-.11-.74-.1-.97-.04q-.3.06-.69.42l6.07 3.81a.75.75 0 0 1 .2 1.1L9.5 12.65l-.09.1a4 4 0 0 1-1.35 1.29c-.61.28-1.3.31-1.89.3q-.44-.01-.83-.05H5.3l-.73-.04-.23.04a2 2 0 0 0-.44.21l.14.06 2.8 1.23.06.03c.27.12.57.25.8.48.22.22.35.52.47.8l.03.05 1.23 2.8.06.14.05-.08a2 2 0 0 0 .2-.6q0-.3-.04-.72v-.03l-.05-.83c-.01-.58.02-1.28.3-1.89.25-.53.72-.9 1.29-1.35l.1-.09 1.85-1.46a.75.75 0 0 1 1.1.19l3.8 6.07q.37-.4.43-.7c.07-.22.07-.51-.04-.96L17.2 12.4l-.02-.12c-.16-.63-.4-1.58.15-2.49a5 5 0 0 1 1.4-1.35c.38-.3.68-.5.9-.78.56-.7.62-1.48.6-2.61 0-.66-.01-.78-.05-.86a.7.7 0 0 0-.38-.38c-.08-.03-.2-.05-.86-.06m-15.2 10.9" fill="#161616"/></svg>
                                        <span>DEPARTS <span class="fw-bold">37m (13:00)</span></span> 
                                        <div class="control__btn__box d-inline-flex gap-1 ms-3">
                                            <button class="btn rounded-circle d-inline-flex align-items-center justify-content-center">
                                                <svg width="11" height="2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 2"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6667.6667A.6666.6666 0 0 0 10.0001 0H.6667a.6667.6667 0 0 0 0 1.3333h9.3334a.6666.6666 0 0 0 .6666-.6666" fill="#868e96"/></svg>
                                            </button>
                                            <button class="btn plus rounded-circle d-inline-flex align-items-center justify-content-center">
                                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 2.664a.6667.6667 0 0 1 .6668.6667v4h3.9999a.6667.6667 0 1 1 0 1.3334h-4v4a.6666.6666 0 0 1-.6666.6666.6666.6666 0 0 1-.6667-.6666v-4h-4a.6667.6667 0 1 1 0-1.3334h4v-4a.6667.6667 0 0 1 .6667-.6666" fill="#1864ab"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-inline-flex gap-2">
                                    <div class="btn btn__base d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#000" fill-opacity=".2"/></svg>
                                        <span>Print</span> 
                                    </div>
                                    <div class="btn btn__base btn__delete d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M2.25 4.782c0-.363.259-.658.578-.658h1.999c.397-.012.747-.3.882-.724l.022-.075.087-.293c.052-.18.098-.338.163-.478.253-.554.723-.939 1.265-1.037.138-.025.283-.025.45-.025h2.608c.168 0 .313 0 .45.025.543.098 1.013.483 1.266 1.037.064.14.11.297.163.478l.085.293.023.075c.135.425.555.713.952.724h1.928c.32 0 .579.295.579.658s-.259.657-.578.657H2.828c-.32 0-.578-.294-.578-.657" fill="#fa5252"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.697 16.492h.606c2.087 0 3.13 0 3.81-.664.678-.665.747-1.755.886-3.934l.2-3.141c.075-1.183.113-1.775-.227-2.149s-.915-.375-2.065-.375H6.093c-1.15 0-1.725 0-2.065.375s-.303.966-.227 2.149l.2 3.14c.139 2.18.208 3.27.887 3.935.678.664 1.722.664 3.809.664M7.685 9.134a.57.57 0 0 0-.615-.53c-.31.032-.535.322-.505.648l.375 3.947a.57.57 0 0 0 .615.53c.31-.032.535-.322.505-.648zm3.246-.53c.31.032.535.322.504.648l-.376 3.947a.57.57 0 0 1-.614.53c-.31-.032-.535-.322-.505-.648l.376-3.947a.57.57 0 0 1 .615-.53" fill="#fa5252"/></svg>
                                        <span>Delete Load</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-2" style="background-color: #E7F5FF;">
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Load name</p>
                                        <p class="text-dark fw-semibold mb-0 small">A2</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Select max slot</p>
                                        <p class="text-dark fw-semibold mb-0 small">16</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Fuel/Kg</p>
                                        <p class="text-dark fw-semibold mb-0 small">234</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Total weight/load weight</p>
                                        <p class="text-dark fw-semibold mb-0 small">120kg / 1905kg</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-12">
                                <div class="row gy-0 gx-3 align-items-center">
                                    <div class="col">
                                        <div class="border rounded-3 px-3 py-2 d-flex flex-row">
                                            <div class="flex-grow-1">
                                                <p class="text-dark mb-0 small">Public</p>
                                                <p class="text-muted fs-10 mb-0">Drop here to use reserved slots</p> 
                                            </div>
                                            <p class="text-primary mb-0 fs-5 fw-bold">20</p>
                                        </div>
                                    </div>
                                    <div class="control__btn__box pagination d-inline-flex gap-1 align-items-center justify-content-center p-0">
                                        <button class="btn btn-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4715 4.8593a.6667.6667 0 0 0-.9429 0L2.862 7.526a.6667.6667 0 0 0 0 .9428l2.6666 2.6667a.6668.6668 0 0 0 .9429-.9428L4.9429 8.6641h7.7238a.6667.6667 0 1 0 0-1.3334H4.9429l1.5286-1.5286a.6667.6667 0 0 0 0-.9428" fill="#fff"/></svg>
                                        </button>
                                        <input type="text" class="form-control text-center fs-6" value="1">
                                        <button class="btn plus rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.5285 4.8593a.6667.6667 0 0 1 .9429 0L13.138 7.526a.6666.6666 0 0 1 0 .9428l-2.6666 2.6667a.6667.6667 0 1 1-.9428-.9428l1.5285-1.5286H3.3333a.6667.6667 0 1 1 0-1.3334h7.7238L9.5285 5.8021a.6667.6667 0 0 1 0-.9428" fill="#fff"/></svg>
                                        </button>
                                    </div> 
                                    <div class="col">
                                        <div class="border rounded-3 px-3 py-2 d-flex flex-row">
                                            <p class="text-dark mb-0 fs-5 fw-bold">20</p>
                                            <div class="flex-grow-1 text-end">
                                                <p class="text-dark mb-0 small">Reserved</p>
                                                <p class="text-muted fs-10 mb-0">Drop here to use reserved slots</p> 
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div><!--.px-3-->
                            <div class="px-3 py-12">
                                <div class="d-flex flex-row gap-3">
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input size-20" id="breakCheck">
                                        <label class="form-check-label small text-dark" for="breakCheck">Break</label>
                                    </div> 
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input size-20" id="fuelCheck" checked>
                                        <label class="form-check-label small text-dark" for="fuelCheck">Fueling</label>
                                    </div> 
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input size-20" id="openCheck">
                                        <label class="form-check-label small text-dark" for="openCheck">Open</label>
                                    </div> 
                                    <div class="d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="fuelCheck">Status</label>
                                        <select name="status" id="status" class="form-select">
                                            <option value="Building">Building</option>
                                        </select>
                                    </div> 
                                    <div class="d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="pilotList">Pilot</label>
                                        <select name="pilot" id="pilotList" class="form-select">
                                            <option value="Justin Beston, Alex  Moris">Justin Beston, Alex  Moris</option>
                                        </select>
                                    </div> 
                                    <div class="d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="Altitude">Altitude</label>
                                        <select name="pilot" id="Altitude" class="form-select">
                                            <option value="14,000">14,000</option>
                                        </select>
                                    </div> 
                                     
                                </div>
                            </div><!--.px-3-->
                            <table class="table data-table large__table" id="dataTable3">
                                <thead>
                                    <tr> 
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Default jump</th>
                                        <th>Kg</th>
                                        <th>Ticket </th> 
                                        <th>Product choice</th> 
                                        <th>Group Id</th> 
                                        <th>Instructor</th>
                                        <th>Videographer</th>
                                        <th>Status</th> 
                                        <th></th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td>2332323</td>
                                        <td>John Doe</td>
                                        <td>STU</td>
                                        <td>23</td>
                                        <td>STU-104</td>
                                        <td>Tandem</td>
                                        <td>34342244</td>
                                        <td>Justin Beston</td> 
                                        <td>-</td>  
                                        <td><span class="text-success small fw-bold">Delivered</span></td> 
                                        <td>
                                            <div class="d-inline-flex gap-2">  
                                                <button class="btn ac__btn danger d-inline-flex align-items-center justify-content-center px-0"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                                >
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                                </button>
                                            </div>
                                        </td> 
                                    </tr> 
                                     
                                    
                                </tbody>
                            </table>

                            <!-- DESIGN STYLE 2 -->
                            <div class="py-2 bg-dark text-white text-center">Second Design Style</div>
                            <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                                <h2 class="fs-18 fw-semibold m-0 text-dark">Jump 3/6</h2>
                                 
                                <div class="d-inline-flex gap-2">
                                    <div class="btn btn__base d-inline-flex align-items-center gap-1 rounded-pill"> 
                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H12C12.5304 2 13.0391 2.21071 13.4142 2.58579C13.7893 2.96086 14 3.46957 14 4V8.66667C14 8.84348 13.9298 9.01305 13.8047 9.13807L9.13807 13.8047C9.01305 13.9298 8.84348 14 8.66667 14H4C3.46957 14 2.96086 13.7893 2.58579 13.4142C2.21071 13.0391 2 12.5304 2 12V4C2 3.46957 2.21071 2.96086 2.58579 2.58579ZM4 3.33333C3.82319 3.33333 3.65362 3.40357 3.5286 3.5286C3.40357 3.65362 3.33333 3.82319 3.33333 4V12C3.33333 12.1768 3.40357 12.3464 3.5286 12.4714C3.65362 12.5964 3.82319 12.6667 4 12.6667H8V9.33333C8 8.97971 8.14048 8.64057 8.39052 8.39052C8.64057 8.14048 8.97971 8 9.33333 8H12.6667V4C12.6667 3.82319 12.5964 3.65362 12.4714 3.5286C12.3464 3.40357 12.1768 3.33333 12 3.33333H4ZM11.7239 9.33333H9.33333V11.7239L11.7239 9.33333Z" clip-rule="evenodd" fill="#212529" fill-rule="evenodd"/><path d="M2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H12C12.5304 2 13.0391 2.21071 13.4142 2.58579C13.7893 2.96086 14 3.46957 14 4V8.66667C14 8.84348 13.9298 9.01305 13.8047 9.13807L9.13807 13.8047C9.01305 13.9298 8.84348 14 8.66667 14H4C3.46957 14 2.96086 13.7893 2.58579 13.4142C2.21071 13.0391 2 12.5304 2 12V4C2 3.46957 2.21071 2.96086 2.58579 2.58579ZM4 3.33333C3.82319 3.33333 3.65362 3.40357 3.5286 3.5286C3.40357 3.65362 3.33333 3.82319 3.33333 4V12C3.33333 12.1768 3.40357 12.3464 3.5286 12.4714C3.65362 12.5964 3.82319 12.6667 4 12.6667H8V9.33333C8 8.97971 8.14048 8.64057 8.39052 8.39052C8.64057 8.14048 8.97971 8 9.33333 8H12.6667V4C12.6667 3.82319 12.5964 3.65362 12.4714 3.5286C12.3464 3.40357 12.1768 3.33333 12 3.33333H4ZM11.7239 9.33333H9.33333V11.7239L11.7239 9.33333Z" clip-rule="evenodd" fill-opacity=".2" fill-rule="evenodd"/></svg>

                                        <span>Note</span> 
                                    </div>
                                    <div class="btn btn__base d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z" fill="#000" fill-opacity=".2"/></svg>
                                        <span>Print</span> 
                                    </div>
                                    <div class="btn btn__base btn__delete d-inline-flex align-items-center gap-1 rounded-pill">
                                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M2.25 4.782c0-.363.259-.658.578-.658h1.999c.397-.012.747-.3.882-.724l.022-.075.087-.293c.052-.18.098-.338.163-.478.253-.554.723-.939 1.265-1.037.138-.025.283-.025.45-.025h2.608c.168 0 .313 0 .45.025.543.098 1.013.483 1.266 1.037.064.14.11.297.163.478l.085.293.023.075c.135.425.555.713.952.724h1.928c.32 0 .579.295.579.658s-.259.657-.578.657H2.828c-.32 0-.578-.294-.578-.657" fill="#fa5252"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.697 16.492h.606c2.087 0 3.13 0 3.81-.664.678-.665.747-1.755.886-3.934l.2-3.141c.075-1.183.113-1.775-.227-2.149s-.915-.375-2.065-.375H6.093c-1.15 0-1.725 0-2.065.375s-.303.966-.227 2.149l.2 3.14c.139 2.18.208 3.27.887 3.935.678.664 1.722.664 3.809.664M7.685 9.134a.57.57 0 0 0-.615-.53c-.31.032-.535.322-.505.648l.375 3.947a.57.57 0 0 0 .615.53c.31-.032.535-.322.505-.648zm3.246-.53c.31.032.535.322.504.648l-.376 3.947a.57.57 0 0 1-.614.53c-.31-.032-.535-.322-.505-.648l.376-3.947a.57.57 0 0 1 .615-.53" fill="#fa5252"/></svg>
                                        <span>Delete Load</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-2" style="background-color: #E7F5FF;">
                                <div class="d-flex flex-row align-items-center justify-content-center gap-3">
                                    <p class="text-dark mb-0 small">JUMPERS: <span class="fw-semibold">6</span></p> 
                                    <p class="text-dark mb-0 small">OPEN SLOTS: <span class="fw-semibold">10</span></p> 
                                    <div class="data__box pe-2 d-inline-flex align-items-center gap-1 rounded-pill">
                                        <span>DEPARTS <span class="fw-bold">37m (13:00)</span></span> 
                                        <div class="control__btn__box d-inline-flex gap-1 ms-3">
                                            <button class="btn rounded-circle d-inline-flex align-items-center justify-content-center">
                                                <svg width="11" height="2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 2"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6667.6667A.6666.6666 0 0 0 10.0001 0H.6667a.6667.6667 0 0 0 0 1.3333h9.3334a.6666.6666 0 0 0 .6666-.6666" fill="#868e96"/></svg>
                                            </button>
                                            <button class="btn plus rounded-circle d-inline-flex align-items-center justify-content-center">
                                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 2.664a.6667.6667 0 0 1 .6668.6667v4h3.9999a.6667.6667 0 1 1 0 1.3334h-4v4a.6666.6666 0 0 1-.6666.6666.6666.6666 0 0 1-.6667-.6666v-4h-4a.6667.6667 0 1 1 0-1.3334h4v-4a.6667.6667 0 0 1 .6667-.6666" fill="#1864ab"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="px-3 py-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Load name</p>
                                        <p class="text-dark fw-semibold mb-0 small">A2</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Select max slot</p>
                                        <p class="text-dark fw-semibold mb-0 small">16</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Fuel/Kg</p>
                                        <p class="text-dark fw-semibold mb-0 small">234</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-0 small">Total weight/load weight</p>
                                        <p class="text-dark fw-semibold mb-0 small">120kg / 1905kg</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-12">
                                <div class="row gy-0 gx-3 align-items-center">
                                    <div class="col">
                                        <div class="border rounded-3 px-3 py-2 d-flex flex-row">
                                            <div class="flex-grow-1">
                                                <p class="text-dark mb-0 small">Open</p>
                                                <p class="text-muted fs-10 mb-0">Drop here to use free slots</p> 
                                            </div>
                                            <p class="text-primary mb-0 fs-5 fw-bold">20</p>
                                        </div>
                                    </div>
                                    <div class="control__btn__box pagination d-inline-flex gap-1 align-items-center justify-content-center p-0">
                                        <button class="btn btn-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4715 4.8593a.6667.6667 0 0 0-.9429 0L2.862 7.526a.6667.6667 0 0 0 0 .9428l2.6666 2.6667a.6668.6668 0 0 0 .9429-.9428L4.9429 8.6641h7.7238a.6667.6667 0 1 0 0-1.3334H4.9429l1.5286-1.5286a.6667.6667 0 0 0 0-.9428" fill="#fff"/></svg>
                                        </button>
                                        <input type="text" class="form-control text-center fs-6" value="1">
                                        <button class="btn plus rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.5285 4.8593a.6667.6667 0 0 1 .9429 0L13.138 7.526a.6666.6666 0 0 1 0 .9428l-2.6666 2.6667a.6667.6667 0 1 1-.9428-.9428l1.5285-1.5286H3.3333a.6667.6667 0 1 1 0-1.3334h7.7238L9.5285 5.8021a.6667.6667 0 0 1 0-.9428" fill="#fff"/></svg>
                                        </button>
                                    </div> 
                                    <div class="col">
                                        <div class="border rounded-3 px-3 py-2 d-flex flex-row">
                                            <p class="text-dark mb-0 fs-5 fw-bold">20</p>
                                            <div class="flex-grow-1 text-end">
                                                <p class="text-dark mb-0 small">Reserved</p>
                                                <p class="text-muted fs-10 mb-0">Drop here to use reserved slots</p> 
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div><!--.px-3-->
                            <div class="px-3 py-12">
                                <div class="d-flex flex-row gap-3">
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input size-20" id="breakCheck">
                                        <label class="form-check-label small text-dark" for="breakCheck">Break</label>
                                    </div> 
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input size-20" id="fuelCheck" checked>
                                        <label class="form-check-label small text-dark" for="fuelCheck">Fueling</label>
                                    </div> 
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input size-20" id="openCheck">
                                        <label class="form-check-label small text-dark" for="openCheck">Open</label>
                                    </div>  
                                </div>
                            </div><!--.px-3-->
                            <div class="px-3 py-12 border-top">
                                <div class="d-flex flex-row gap-3 secondary__filter__box">
                                    <div class="item__box d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="status2">Status</label>
                                        <select name="status" id="status2" class="form-select">
                                            <option value="Building">Building</option>
                                        </select>
                                    </div> 
                                    <div class="item__box d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="loadMaster">Load  Master:</label>
                                        <select name="status" id="loadMaster" class="form-select">
                                            <option value="Building">Alex Moris</option>
                                        </select>
                                    </div> 
                                    <div class="item__box d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="pilotList">Pilot</label>
                                        <select name="pilot" id="pilotList" class="form-select">
                                            <option value="Justin Beston, Alex  Moris">Justin Beston, Alex  Moris</option>
                                        </select>
                                    </div> 
                                    <div class="item__box d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="Altitude">Altitude</label>
                                        <select name="pilot" id="Altitude" class="form-select">
                                            <option value="14,000">14,000</option>
                                        </select>
                                    </div>  
                                </div>
                            </div><!--.px-3-->
                            <div class="px-3 py-12 border-top" style="background-color: #D0EBFF;">
                                <div class="d-flex flex-row gap-3 secondary__filter__box">
                                    <div class="item__box d-inline-flex align-items-center gap-2"> 
                                        <label class="form-check-label small text-dark" for="status2">Participant Status:</label>
                                        <select name="status" id="status2" class="form-select">
                                            <option value="Refused">Refused</option>
                                        </select>
                                    </div> 
                                    <button class="btn btn-primary small rounded-pill py-1" style="height:34px;">Set</button>
                                </div>
                            </div><!--.px-3-->
                            <table class="table data-table large__table" id="dataTable3">
                                <thead>
                                    <tr> 
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Default jump</th>
                                        <th>Kg</th>
                                        <th>Ticket </th> 
                                        <th>Product choice</th> 
                                        <th>Group Id</th> 
                                        <th>Instructor</th>
                                        <th>Videographer</th>
                                        <th>Status</th> 
                                        <th></th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td>2332323</td>
                                        <td>John Doe</td>
                                        <td>STU</td>
                                        <td>23</td>
                                        <td>STU-104</td>
                                        <td>Tandem</td>
                                        <td>34342244</td>
                                        <td>Justin Beston</td> 
                                        <td>-</td>  
                                        <td><span class="text-success small fw-bold">Delivered</span></td> 
                                        <td>
                                            <div class="d-inline-flex gap-2">  
                                                <button class="btn ac__btn danger d-inline-flex align-items-center justify-content-center px-0"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                                >
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                                </button>
                                            </div>
                                        </td> 
                                    </tr> 
                                     
                                    
                                </tbody>
                            </table>
                        </div><!--.load__detail__col-->

                        <div class="load__list__detail__col filter__btn">
                            <div class="px-3 py-12 d-flex flex-row align-items-center justify-content-between"> 
                                <h2 class="small fw-semibold m-0 text-dark">Load List</h2>
                                <button class="btn btn__base rounded-pill btn-outline-primary">
                                    Add Customer
                                </button>
                            </div>
                            
                           
                           
                            <div class="tab__btns nav flex-row me-3" id="v-pills-tab" role="tablist">
                                <button class="nav-link active" id="v-pills-tademTab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tademTab" type="button" role="tab" aria-controls="v-pills-tademTab" aria-selected="true">Tandems <span>61</span></button>
                                <button class="nav-link ready" id="v-pills-studentTab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-studentTab" type="button" role="tab" aria-controls="v-pills-studentTab" aria-selected="false">Students <span>28</span></button>
                                <button class="nav-link sent" id="v-pills-sportTab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sportTab" type="button" role="tab" aria-controls="v-pills-sportTab" aria-selected="false">Sports <span>32</span></button>
                                <button class="nav-link notcomplete" id="v-pills-teamTab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-teamTab" type="button" role="tab" aria-controls="v-pills-teamTab" aria-selected="false">Teams <span>5</span></button> 
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-tademTab" role="tabpanel" aria-labelledby="v-pills-tademTab-tab" tabindex="0">
                                    <table class="table data-table large__table" id="dataTable">
                                        <thead>
                                            <tr> 
                                                <th>Sent</th>
                                                <th>Name</th>
                                                <th>Kg</th>
                                                <th>Product choice</th> 
                                                <th>Option</th>
                                                <th>Group ID</th>
                                                <th>Instructor</th>
                                                <th>Videographer</th>
                                                <th>Formation</th>
                                                <th>Equipment</th>
                                                <th>Note</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td>11:08:44</td>
                                                <td>Maha Ali</td>
                                                <td>23</td>
                                                <td>Tandem</td>
                                                <td>STU-104</td>
                                                <td>34342244</td>
                                                <td>Justin Beston</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>
                                                    <div class="d-inline-flex gap-2"> 
                                                        <a href="account-detail.php" class="btn ac__btn d-inline-flex align-items-center justify-content-center px-0">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04052 7.86857C7.04052 6.26749 8.33846 4.96955 9.93955 4.96955C11.5406 4.96955 12.8386 6.26749 12.8386 7.86857C12.8386 9.46966 11.5406 10.7676 9.93955 10.7676C8.33846 10.7676 7.04052 9.46966 7.04052 7.86857ZM9.93955 6.21199C9.02464 6.21199 8.28296 6.95367 8.28296 7.86857C8.28296 8.78348 9.02464 9.52516 9.93955 9.52516C10.8545 9.52516 11.5961 8.78348 11.5961 7.86857C11.5961 6.95367 10.8545 6.21199 9.93955 6.21199Z" fill="black"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0354 9.93931C1.0354 5.02168 5.02192 1.03516 9.93955 1.03516C14.8572 1.03516 18.8437 5.02168 18.8437 9.93931C18.8437 14.8569 14.8572 18.8435 9.93955 18.8435C5.02192 18.8435 1.0354 14.8569 1.0354 9.93931ZM9.93955 2.2776C5.7081 2.2776 2.27784 5.70786 2.27784 9.93931C2.27784 11.9036 3.01701 13.6952 4.23237 15.0512L4.48055 14.6168C5.32852 13.1329 6.9066 12.2171 8.61572 12.2171H11.2636C12.9727 12.2171 14.5508 13.1329 15.3988 14.6168L15.6469 15.051C16.8621 13.695 17.6013 11.9035 17.6013 9.93931C17.6013 5.70786 14.171 2.2776 9.93955 2.2776ZM14.7176 15.929L14.32 15.2333C13.6933 14.1364 12.5269 13.4595 11.2636 13.4595H8.61572C7.35246 13.4595 6.18605 14.1364 5.55929 15.2333L5.16166 15.9291C6.47169 16.9755 8.13257 17.601 9.93955 17.601C11.7466 17.601 13.4075 16.9754 14.7176 15.929Z" fill="black"/>
                                                            </svg> 
                                                        </a>
                                                        <button class="btn ac__btn danger d-inline-flex align-items-center justify-content-center px-0"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                                        >
                                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!--.tandem-tab-pane-->
                                <div class="tab-pane fade" id="v-pills-studentTab" role="tabpanel" aria-labelledby="v-pills-studentTab-tab" tabindex="0">
                                    <table class="table data-table large__table" id="dataTable">
                                        <thead>
                                            <tr> 
                                                <th>Sent</th>
                                                <th>Name</th>
                                                <th>Kg</th>
                                                <th>Product choice</th> 
                                                <th>Option</th>
                                                <th>Group ID</th>
                                                <th>Instructor</th>
                                                <th>Videographer</th>
                                                <th>Formation</th>
                                                <th>Equipment</th>
                                                <th>Note</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td>11:08:44</td>
                                                <td>Maha Ali</td>
                                                <td>23</td>
                                                <td>Tandem</td>
                                                <td>STU-104</td>
                                                <td>34342244</td>
                                                <td>Justin Beston</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>-</td> 
                                                <td>
                                                    <div class="d-inline-flex gap-2"> 
                                                        <a href="account-detail.php" class="btn ac__btn d-inline-flex align-items-center justify-content-center px-0">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04052 7.86857C7.04052 6.26749 8.33846 4.96955 9.93955 4.96955C11.5406 4.96955 12.8386 6.26749 12.8386 7.86857C12.8386 9.46966 11.5406 10.7676 9.93955 10.7676C8.33846 10.7676 7.04052 9.46966 7.04052 7.86857ZM9.93955 6.21199C9.02464 6.21199 8.28296 6.95367 8.28296 7.86857C8.28296 8.78348 9.02464 9.52516 9.93955 9.52516C10.8545 9.52516 11.5961 8.78348 11.5961 7.86857C11.5961 6.95367 10.8545 6.21199 9.93955 6.21199Z" fill="black"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0354 9.93931C1.0354 5.02168 5.02192 1.03516 9.93955 1.03516C14.8572 1.03516 18.8437 5.02168 18.8437 9.93931C18.8437 14.8569 14.8572 18.8435 9.93955 18.8435C5.02192 18.8435 1.0354 14.8569 1.0354 9.93931ZM9.93955 2.2776C5.7081 2.2776 2.27784 5.70786 2.27784 9.93931C2.27784 11.9036 3.01701 13.6952 4.23237 15.0512L4.48055 14.6168C5.32852 13.1329 6.9066 12.2171 8.61572 12.2171H11.2636C12.9727 12.2171 14.5508 13.1329 15.3988 14.6168L15.6469 15.051C16.8621 13.695 17.6013 11.9035 17.6013 9.93931C17.6013 5.70786 14.171 2.2776 9.93955 2.2776ZM14.7176 15.929L14.32 15.2333C13.6933 14.1364 12.5269 13.4595 11.2636 13.4595H8.61572C7.35246 13.4595 6.18605 14.1364 5.55929 15.2333L5.16166 15.9291C6.47169 16.9755 8.13257 17.601 9.93955 17.601C11.7466 17.601 13.4075 16.9754 14.7176 15.929Z" fill="black"/>
                                                            </svg> 
                                                        </a>
                                                        <button class="btn ac__btn danger d-inline-flex align-items-center justify-content-center px-0"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                                        >
                                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.155 2.152a1.67 1.67 0 0 1 1.178-.488h3.334a1.667 1.667 0 0 1 1.666 1.667v1.666h3.334a.833.833 0 0 1 0 1.667H16.6l-.767 9.205a2.5 2.5 0 0 1-2.5 2.462H6.667a2.5 2.5 0 0 1-2.5-2.462L3.4 6.664h-.067a.833.833 0 0 1 0-1.667h3.333V3.331c0-.442.176-.866.489-1.179M5.072 6.664l.758 9.098.003.069a.833.833 0 0 0 .834.833h6.666a.833.833 0 0 0 .834-.833l.002-.07.759-9.097zm6.595-1.667H8.333V3.331h3.334zm-3.923 5.59a.833.833 0 0 1 1.179-1.179L10 10.486l1.077-1.078a.833.833 0 1 1 1.179 1.179l-1.078 1.077 1.078 1.078a.833.833 0 1 1-1.179 1.178L10 12.843 8.923 13.92a.833.833 0 0 1-1.179-1.178l1.077-1.078z" fill="#fa5252"/></svg>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!--.students-tab-pane-->
                                <div class="tab-pane fade" id="v-pills-sportTab" role="tabpanel" aria-labelledby="v-pills-sportTab-tab" tabindex="0">
                                    
                                </div><!--.sports-tab-pane-->
                                <div class="tab-pane fade" id="v-pills-teamTab" role="tabpanel" aria-labelledby="v-pills-teamTab-tab" tabindex="0">.
                                    <table class="table data-table large__table" id="dataTable">
                                        <thead>
                                            <tr> 
                                                <th>Sent</th>
                                                <th>Team Name</th>
                                                <th>Formation</th>
                                                <th>Note</th>  
                                                <th></th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td>11:08:44</td>
                                                <td>Maha Ali</td>
                                                <td>Star</td> 
                                                <td>-</td>  
                                                <td>
                                                    <div class="d-inline-flex gap-2"> 
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#addNoteModal" class="btn ac__btn btn-primary d-inline-flex align-items-center justify-content-center px-0">
                                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.34c.46 0 .83.37.83.83v5h5a.83.83 0 0 1 0 1.67h-5v5a.83.83 0 1 1-1.66 0v-5h-5a.83.83 0 1 1 0-1.67h5v-5c0-.46.37-.83.83-.83" fill="#fff"/></svg>
                                                        </button> 
                                                    </div>
                                                </td> 
                                            </tr> 
                                            
                                            
                                        </tbody>
                                    </table>
                                </div><!--.teams-tab-pane-->
                            </div><!--.tab-content-->
                        </div><!--.load__list__box-->
                    </div><!--.//row-->
                </div>
            </div><!--.//data_table-->
             
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->


 
<!-- ADD LOAD MODEL --> 
<div class="modal fade" id="addLoadModal" tabindex="-1" aria-labelledby="addLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title small fw-semibold text-dark" id="addLoadModalLabel">Add Load</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-4">
                <div class="d-flex flex-row load__data gap-3 border rounded-3 p-12 align-items-center">
                    <div class="icon rounded-3 p-2 d-flex align-items-center justify-content-center">
                        <img src="assets/images/icons/plane.png" alt="map" class="img-fluid w-100 rounded-3"> 
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0 small lh-1 text-dark fw-semibold">Aircraft 324</p>
                        <p class="mb-0 fs-12 text-muted">Max Pax: 16 </p>
                    </div>
                </div>
                <div>
                    <label for="aircraft_name" class="form-label fw-semibold">Select Aircraft <span class="text-danger">*</span></label>
                    <select name="aircraft_name" id="aircraft_name" class="form-select">
                        <option value="Select" disabled selected>Select...</option>
                    </select>
                </div>
                <div>
                    <label for="jump_count" class="form-label fw-semibold">Select Jump Count</label>
                    <div class="d-flex flex-row flex-wrap gap-3">
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="no_limit" class="form-check-input size-20">
                            <label for="no_limit">No limit</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="limit_1" class="form-check-input size-20">
                            <label for="limit_1">25-49</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="limit_2" class="form-check-input size-20">
                            <label for="limit_2">50-99</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="limit_3" class="form-check-input size-20">
                            <label for="limit_3">100-199</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="limit_4" class="form-check-input size-20">
                            <label for="limit_4">200-499</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jump_limit" id="limit_5" class="form-check-input size-20">
                            <label for="limit_5">500+</label>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="select_pilot" class="form-label fw-semibold">Select Pilot <span class="text-danger">*</span></label>
                    <select name="select_pilot" id="select_pilot" class="form-select">
                        <option value="Select" disabled selected>Select...</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary small rounded-pill px-4">Add</button> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ADD NOTES Modal -->
<div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="addNoteModalLabel">Notes</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="bg-light p-3 d-flex flex-row align-items-start gap-3">
                    <textarea name="notes" id="notes" class="form-control bg-transparent p-0 border-0 shadow-none h-auto" rows="1" placeholder="Enter notes"></textarea>
                    <button class="btn btn-primary rounded-pill">Add</button>
                </div>
                <div class="px-3 pb-4 pt-3">
                    <p class="fs-12 text-muted mb-0">2025-10-10 14:22 • Admin</p>
                    <p class="fs-6 text-dark mb-0">Customer is fitting to jump</p>
                </div> 
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- LOAD VISIBLE ON TV Modal -->
<div class="modal fade" id="loadVisibleTvModal" tabindex="-1" aria-labelledby="loadVisibleTvModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="loadVisibleTvModalLabel">Set Load Visible on TV</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="">
                    <label for="total_load" class="form-label fw-semibold">Total Load Visible in TV <span class="text-danger">*</span></label>
                    <input type="text" name="total_load" id="total_load" class="form-control" placeholder="Enter total load">
                    <p class="mb-0 small text-muted mt-2">Max digit allowed (2)</p>
                </div>
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary blue small rounded-pill px-4">Update</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- INSERT LOAD Modal -->
<div class="modal fade" id="insertLoadModal" tabindex="-1" aria-labelledby="insertLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="insertLoadModalLabel">Insert Load</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div class="">
                    <label for="before_load" class="form-label fw-semibold">Insert Load Before <span class="text-danger">*</span></label>
                    <select name="before_load" id="before_load" class="form-select">
                        <option value="Select..." disabled selected>Select...</option>
                    </select> 
                </div>
                <div class="">
                    <label for="aircraft_select" class="form-label fw-semibold">Select Aircraft<span class="text-danger">*</span></label>
                    <select name="aircraft_select" id="aircraft_select" class="form-select">
                        <option value="Select..." disabled selected>Select...</option>
                    </select> 
                </div>
                <div class="">
                    <label for="copies" class="form-label fw-semibold">No. of Copies</label>
                    <input type="text" name="copies" id="copies" class="form-control" placeholder="Enter no. of copies"> 
                </div>
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary blue small rounded-pill px-4">Insert</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- DUPLICATE LOAD Modal -->
<div class="modal fade" id="duplicateLoadModal" tabindex="-1" aria-labelledby="duplicateLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="duplicateLoadModalLabel">Duplicate Load</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div class="">
                    <label for="load" class="form-label fw-semibold">Load <span class="text-danger">*</span></label>
                    <select name="load" id="load" class="form-select">
                        <option value="Jump A2" disabled selected>Jump A2</option>
                    </select> 
                </div>
                <div class="">
                    <label for="copies" class="form-label fw-semibold">No. of Copies</label>
                    <input type="text" name="copies" id="copies" class="form-control" placeholder="Enter no. of copies"> 
                </div>
                <div class="">
                    <label for="aircraft_select" class="form-label fw-semibold">Select Aircraft<span class="text-danger">*</span></label>
                    <select name="aircraft_select" id="aircraft_select" class="form-select">
                        <option value="Select..." disabled selected>Select...</option>
                    </select> 
                </div> 
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary blue small rounded-pill px-4">Insert</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- CLOSE ALL LOAD Modal -->
<div class="modal fade" id="closeAllLoadModal" tabindex="-1" aria-labelledby="closeAllLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="closeAllLoadModalLabel">Close All Load</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width:30px;">
                                <input type="checkbox" name="" id="" class="form-check-input size-20">
                            </th>
                            <th>ID</th>
                            <th>Load</th>
                            <th>Status</th> 
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:30px;">
                                    <input type="checkbox" name="Jump 44" id="Jump 44" class="form-check-input size-20">
                                </td>
                                <td>16744</td>
                                <td>Jump 44</td>
                                <td><span class="badge bg-warning">On Call</span></td>
                            </tr>
                            <tr>
                                <td style="width:30px;">
                                    <input type="checkbox" name="Jump 42" id="Jump 42" class="form-check-input size-20">
                                </td>
                                <td>16742</td>
                                <td>Jump 42</td>
                                <td><span class="badge bg-success">Departed</span></td>
                            </tr>
                            <tr>
                                <td style="width:30px;">
                                    <input type="checkbox" name="Jump 41" id="Jump 41" class="form-check-input size-20">
                                </td>
                                <td>16741</td>
                                <td>Jump 41</td>
                                <td><span class="badge bg-secondary">Completed</span></td>
                            </tr>
                            <tr>
                                <td style="width:30px;">
                                    <input type="checkbox" name="Jump 41" id="Jump 41" class="form-check-input size-20">
                                </td>
                                <td>16741</td>
                                <td>Jump 41</td>
                                <td><span class="badge bg-secondary">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary blue small rounded-pill px-4">Confirm</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- CLOSE ALL LOAD Modal -->
<div class="modal fade" id="checkInAccModal" tabindex="-1" aria-labelledby="checkInAccModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:970px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="checkInAccModalLabel">Checked-in account</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div class="table-responsive rounded-3 overflow-hidden">
                    <table class="table text-center">
                        <thead> 
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Profile Type</th> 
                            <th>Check in time</th>
                            <th>Check out time</th>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>Yash Kukreja</td>
                                <td>yash@example.com</td>
                                <td>Tandem</td>
                                <td>10:45</td>
                                <td>-</td>
                            </tr>
                            <tr> 
                                <td>Yash Kukreja</td>
                                <td>yash@example.com</td>
                                <td>Tandem</td>
                                <td>10:45</td>
                                <td>-</td>
                            </tr>
                            <tr> 
                                <td>Yash Kukreja</td>
                                <td>yash@example.com</td>
                                <td>Tandem</td>
                                <td>10:45</td>
                                <td>-</td>
                            </tr>
                             
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>  
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>

<!-- TOGGLE LOAD Modal -->
<div class="modal fade" id="toggleLoadModal" tabindex="-1" aria-labelledby="toggleLoadModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="toggleLoadModalLabel">Start/Stop load</p>
                <button type="button" class="btn-close shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column gap-4">
                <div class="table-responsive rounded-3 overflow-hidden">
                    <label for="select_aircraft" class="form-label fw-semibold">Select Aircraft <span class="text-danger">*</span></label>
                    <select name="select_aircraft" id="select_aircraft" class="form-select">
                        <option value="Select...">Select...</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>  
                    <button type="button" class="btn btn-danger small rounded-pill px-4">Stop</button>  
                    <button type="button" class="btn btn-success small rounded-pill px-4">Resume</button>  
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>
  
 

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 