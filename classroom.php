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
                    <div class="col-12 d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative z-3 filter__btn">
                        <div class="d-inline-flex align-items-center gap-2">
                            <button type="button" class="btn btn-primary blue rounded-pill shadow-none" 
                            data-bs-toggle="modal" data-bs-target="#createProfileModal"
                            >Add Classroomm</button>
                            <button class="btn btn__base h-36 rounded-pill">
                                Close all Class Rooms
                            </button>
                            <button class="btn btn__base h-36 rounded-pill">
                                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.743 5.225c-2.905-.747-5.886.412-7.515 2.778ZM6.228 8.003H9a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1v-5a1 1 0 0 1 2 0v2.304a9.01 9.01 0 0 1 9.241-3.02 9 9 0 1 1-11.165 9.887 1 1 0 1 1 1.983-.26 7 7 0 1 0 8.684-7.69" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.743 5.225c-2.905-.747-5.886.412-7.515 2.778ZM6.228 8.003H9a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1v-5a1 1 0 0 1 2 0v2.304a9.01 9.01 0 0 1 9.241-3.02 9 9 0 1 1-11.165 9.887 1 1 0 1 1 1.983-.26 7 7 0 1 0 8.684-7.69" fill="#000" fill-opacity=".2"/></svg>
                            </button>
                            <div class="line__divider" style="height:38px;"></div>
                            <button class="btn btn__base h-36 rounded-pill">
                                Audit Log
                            </button>
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
              
            <div class="row g-1">
                <div class="col-5">
                    <div class="bg-white classroom__card" style="border-top-left-radius: 10px;">
                        <div class="px-3 py-3 border-bottom" style="border-top-left-radius: 10px;">
                            <h2 class="fw-semibold small text-dark mb-0">Classrooms List</h2>
                        </div>
                        <div class="px-3 py-3 border-bottom">
                            <div class="filter__btn d-flex flex-wrap align-items-center justify-content-start gap-3 position-relative z-3">
                                <div class="dropdown">
                                    <button class="btn btn__base rounded-pill" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                                            <path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000"
                                                stroke-width="1.58" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Active</a></li>
                                        <li><a class="dropdown-item" href="#">Inactive</a></li>
                                    </ul>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="p_session" id="p_session" class="form-check-input size-20">
                                    <label for="p_session" class="form-check-label">Private Sessions</label>
                                </div> 
                            </div>
                        </div>
                        <div class="overflow-x-auto" style="overflow-y:visible;"> 
                            <table class="table data-table large__table" id="dataTable">
                                <thead>
                                    <tr> 
                                        <th>ID</th>
                                        <th>Classroom Name</th>
                                        <th>Available</th>
                                        <th>Total</th>
                                        <th>Session</th>   
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active"> 
                                        <td>502331</td>
                                        <td>Classroom 3</td>
                                        <td>12</td>
                                        <td>17</td> 
                                        <td>Private</td>  
                                        <td>
                                            <span class="badge bg-warning rounded-2">Building</span>
                                        </td>  
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
                                    <tr> 
                                        <td>502331</td>
                                        <td>Classroom 3</td>
                                        <td>12</td>
                                        <td>17</td> 
                                        <td>Private</td>  
                                        <td>
                                            <span class="badge bg-success rounded-2">Ongoing</span>
                                        </td>  
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
                                    <tr> 
                                        <td>502331</td>
                                        <td>Classroom 3</td>
                                        <td>12</td>
                                        <td>17</td> 
                                        <td>Private</td>  
                                        <td>
                                            <span class="badge bg-secondary rounded-2">Completed</span>
                                        </td>  
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
                </div><!--end::Col-->

                <div class="col-7">
                    <div class="bg-white classroom__card">
                        <div class="px-3 py-2 border-bottom d-flex justify-content-between align-items-center">
                            <h2 class="fw-semibold fs-18 text-dark mb-0">Classroom 3</h2>
                            <div class="d-inline-flex gap-2"> 
                                <button class="btn btn__base d-inline-flex align-items-center gap-1 rounded-pill">
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z"
                                            fill="#212529" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.59 1.92A2 2 0 0 1 6 1.34h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.34a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.42M3.33 6.67a.67.67 0 0 0-.66.67V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.34a.67.67 0 0 0-.66-.67zm7.34-1.33H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.67zm0 4.66c0-.37-.3-.66-.67-.66H6c-.37 0-.67.3-.67.66v2.67c0 .37.3.67.67.67h4c.37 0 .67-.3.67-.67z"
                                            fill="#000" fill-opacity=".2" />
                                    </svg>
                                    <span>Print</span>
                                </button>
                                <button class="btn btn__base btn__delete d-inline-flex align-items-center gap-1 rounded-pill">
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 18 18">
                                        <path
                                            d="M2.25 4.782c0-.363.259-.658.578-.658h1.999c.397-.012.747-.3.882-.724l.022-.075.087-.293c.052-.18.098-.338.163-.478.253-.554.723-.939 1.265-1.037.138-.025.283-.025.45-.025h2.608c.168 0 .313 0 .45.025.543.098 1.013.483 1.266 1.037.064.14.11.297.163.478l.085.293.023.075c.135.425.555.713.952.724h1.928c.32 0 .579.295.579.658s-.259.657-.578.657H2.828c-.32 0-.578-.294-.578-.657"
                                            fill="#fa5252" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.697 16.492h.606c2.087 0 3.13 0 3.81-.664.678-.665.747-1.755.886-3.934l.2-3.141c.075-1.183.113-1.775-.227-2.149s-.915-.375-2.065-.375H6.093c-1.15 0-1.725 0-2.065.375s-.303.966-.227 2.149l.2 3.14c.139 2.18.208 3.27.887 3.935.678.664 1.722.664 3.809.664M7.685 9.134a.57.57 0 0 0-.615-.53c-.31.032-.535.322-.505.648l.375 3.947a.57.57 0 0 0 .615.53c.31-.032.535-.322.505-.648zm3.246-.53c.31.032.535.322.504.648l-.376 3.947a.57.57 0 0 1-.614.53c-.31-.032-.535-.322-.505-.648l.376-3.947a.57.57 0 0 1 .615-.53"
                                            fill="#fa5252" />
                                    </svg>
                                    <span>Delete Classroom</span>
                                </button>
                            </div>
                        </div>
                        <div class="px-3 py-3 border-bottom d-flex flex-wrap align-items-center justify-content-between gap-4 text-muted" style="background-color: #F1F3F5;">
                            <div class="small">Session: <span class="fw-medium text-dark">Private</span></div>
                            <div class="small">Time: <span class="fw-medium text-dark">5:40 PM</span></div>
                            <div class="small">Available: <span class="fw-medium text-dark">17</span></div>
                            <div class="small">Total: <span class="fw-medium text-dark">17</span></div>
                        </div>
                        <div class="px-3 py-3 bg-white border-bottom d-flex flex-wrap align-items-center justify-content-between gap-4 text-muted" style="background-color: #F1F3F5;">
                            <div class="small select__box d-inline-flex align-items-center gap-2">
                                Status: 
                                <select name="status" id="status" class="form-select rounded-pill fs-13">
                                    <option value="Building">Building</option>
                                </select>
                            </div> 
                            <button class="btn btn-primary h-36 d-inline-flex align-items-center rounded-pill px-3 shadow-none"
                                type="button" data-bs-toggle="modal" data-bs-target="#addCustomerModal"
                            >Add Customer</button>
                        </div>
                        <div class="overflow-x-auto" style="overflow-y:visible;"> 
                            <table class="table data-table large__table" id="dataTable">
                                <thead>
                                    <tr> 
                                        <th>ID</th>
                                        <th>Customer Name </th>
                                        <th>Ticket</th>  
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>  
                                        <td>502331</td>
                                        <td>John Lennon</td> 
                                        <td>Private Tandem</td>  
                                        <td style="width: 100px;">
                                            <div class="d-inline-flex gap-2">  
                                                <button class="btn ac__btn border-success" type="button">
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#12b886"/></svg>
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
                                        <td>502331</td>
                                        <td>John Lennon</td> 
                                        <td>Private Tandem</td>  
                                        <td style="width: 100px;">
                                            <div class="d-inline-flex gap-2">  
                                                <button class="btn ac__btn border-success" type="button">
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#12b886"/></svg>
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
                                        <td>502331</td>
                                        <td>John Lennon</td> 
                                        <td>Private Tandem</td>  
                                        <td style="width: 100px;">
                                            <div class="d-inline-flex gap-2">  
                                                <button class="btn ac__btn border-success" type="button">
                                                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.26 5.24c.32.33.32.86 0 1.18l-8.34 8.34a.83.83 0 0 1-1.18 0l-4.16-4.17A.83.83 0 0 1 4.76 9.4L8.33 13l7.75-7.75a.83.83 0 0 1 1.18 0" fill="#12b886"/></svg>
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
                </div><!--end::Col-->
            </div><!--end::Row-->
           
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
                        <label for="session" class="form-label fw-semibold">Session <span class="text-danger">*</span></label>
                        <select name="Session" id="Session" class="form-select">
                            <option value="select">Select</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="time" class="form-label fw-semibold">Select Time <span class="text-danger">*</span></label>
                        <select name="time" id="time" class="form-select">
                            <option value="17:00 AM">17:00 AM</option>
                        </select>
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
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title small fw-semibold" id="addCustomerModalLabel">Add Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create-profile.php" method="post">
                    <div class="mb-4">
                        <label for="customer" class="form-label fw-semibold">Select Customer <span class="text-danger">*</span></label> 
                        <input type="text" class="form-control" name="customer" id="customer" placeholder="Khalid Mohamed" required>
                        <ul class="list-group border rounded-3 mt-3 customer__list shadow-sm">
                            <li class="list-group-item border-0 ps-4 position-relative">
                                <span class="fs-6 text-dark name">Khalid Mohamed</span>
                                <span class="text-muted">kmohamed@gmail.com</span>
                            </li>
                            <li class="list-group-item border-0 ps-4 position-relative">
                                <span class="fs-6 text-dark name">Khalid Mohamed ahmed</span>
                                <span class="text-muted">mohaed@gmail.com</span>
                            </li> 
                        </ul>
                    </div> 
                    <div class="mb-4">
                        <label for="select_ticket" class="form-label fw-semibold">Select Ticket <span class="text-danger">*</span></label>
                        <select name="select_ticket" id="select_ticket" class="form-select">
                            <option value="select">Select</option>
                        </select>
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
    document.querySelectorAll('.customer__list .list-group-item').forEach(item => {
        item.addEventListener('click', function() {
            const input = document.getElementById('customer');
            const listItems = document.querySelectorAll('.customer__list .list-group-item');

            // Extract the name text from the span with class 'name'
            const nameValue = this.querySelector('.name').textContent.trim();
            
            // Update input value
            input.value = nameValue;

            // UI State management
            listItems.forEach(li => li.classList.remove('active'));
            this.classList.add('active');
        });
    });
 </script>