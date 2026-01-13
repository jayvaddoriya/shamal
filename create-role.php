<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header pb-1">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="bg-white px-3 py-2 filter__btn">
                <div class="row gx-0 gy-3 gy-xl-0">
                    <div class="col-xl-6">
                        <div class="d-inline-flex align-items-center gap-3">
                            <a href="roles-mgmt.php" class="btn btn__base rounded-pill shadow-none">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.805 3.531c.26.26.26.683 0 .943L4.943 7.336h7.724a.667.667 0 1 1 0 1.333H4.943l2.862 2.862a.667.667 0 1 1-.943.943l-4-4a.667.667 0 0 1 0-.943l4-4c.26-.26.682-.26.943 0" fill="#212529"/></svg>
                                Back to Roles
                            </a> 
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
            <div class="bg-white p-4 filter__btn position-relative z-3 d-flex flex-column gap-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fs-18 fw-semibold text-dark mb-0">Create New Role</h2>
                    <div class="d-inline-flex gap-2">
                        <a href="roles-mgmt.php" class="btn btn__base h-36 bg-white rounded-pill shadow-none"> 
                            Cancel
                        </a> 
                        <a href="#" class="btn btn-primary h-36 rounded-pill shadow-none"> 
                            Save
                        </a> 
                    </div>
                </div>

                <div>
                    <label for="" class="form-label fw-semibold">Role Name <span class="text-danger">*</span></label>
                    <div style="max-width: 400px;"> 
                        <input type="text" class="form-control" placeholder="Enter role name">
                    </div>
                </div>

                <div>
                    <label for="" class="form-label fw-semibold">Select Experience (Min 1) <span class="text-danger">*</span></label>
                    <div class="bg-light rounded-3 p-3 d-flex flex-row flex-wrap gap-4"> 
                        <div class="form-check">
                            <input type="checkbox" name="all" id="all" class="form-check-input size-20">
                            <label for="all" class="form-check-label">All</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input001" class="form-check-input size-20">
                            <label for="input001" class="form-check-label">Sky Dive Palm</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input002" value="Sky Dive Desert" class="form-check-input size-20">
                            <label for="input002" class="form-check-label">Sky Dive Desert</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input003" value="Gyrocopter" class="form-check-input size-20">
                            <label for="input003" class="form-check-label">Gyrocopter</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input004" value="Deep Dive Dubai" class="form-check-input size-20">
                            <label for="input004" class="form-check-label">Deep Dive Dubai</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input005" value="X-Line" class="form-check-input size-20">
                            <label for="input005" class="form-check-label">X-Line</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="all" id="input006" value="Config Modules" class="form-check-input size-20">
                            <label for="input006" class="form-check-label">Config Modules</label>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="" class="form-label fw-semibold">Select Module <span class="text-danger">*</span></label>
                    <div class="small text-muted mb-3">Permissions based on selected Experience</div>

                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-skyDivePalm-tab" data-bs-toggle="tab" data-bs-target="#nav-skyDivePalm" type="button" role="tab" aria-controls="nav-skyDivePalm" aria-selected="true">Sky Dive Palm</button>
                            <button class="nav-link" id="nav-skyDiveDesert-tab" data-bs-toggle="tab" data-bs-target="#nav-skyDiveDesert" type="button" role="tab" aria-controls="nav-skyDiveDesert" aria-selected="false">Sky Dive Desert</button> 
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-skyDivePalm" role="tabpanel" aria-labelledby="nav-skyDivePalm-tab" tabindex="0">
                            <div class="border rounded-3 overflow-hidden">
                                <div class="py-3 px-4 bg-light">
                                    <p class="small fw-semibold mb-0">Role</p>
                                </div>
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="check001" value="Bookings" class="form-check-input size-20">
                                                    <label for="check001" class="form-check-label fw-semibold">Bookings</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="check002" value="List" class="form-check-input size-20">
                                                    <label for="check002" class="form-check-label">List</label>
                                                </div>
                                            </td>
                                            <td colspan="3">
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="check002" value="Send To Manifest" class="form-check-input size-20">
                                                    <label for="check002" class="form-check-label">Send To Manifest</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkReport" value="Reports" class="form-check-input size-20">
                                                    <label for="checkReport" class="form-check-label fw-semibold">Reports</label>
                                                </div>
                                            </td>
                                            <td colspan="3">
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkLP" value=" List of Reports" class="form-check-input size-20">
                                                    <label for="checkLP" class="form-check-label">List of Reports</label>
                                                </div>
                                            </td>
                                            <td>
                                                 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkWaiver" value="Waiver" class="form-check-input size-20">
                                                    <label for="checkWaiver" class="form-check-label fw-semibold">Waiver</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkList" value="List" class="form-check-input size-20">
                                                    <label for="checkList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkWaAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkWaAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkWaEdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkWaEdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkWaView" value="View" class="form-check-input size-20">
                                                    <label for="checkWaView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkCredential" value="Credential" class="form-check-input size-20">
                                                    <label for="checkCredential" class="form-check-label fw-semibold">Credential</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkCREList" value="List" class="form-check-input size-20">
                                                    <label for="checkCREList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkCREAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkCREAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkCREEdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkCREEdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkCREView" value="View" class="form-check-input size-20">
                                                    <label for="checkCREView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkProfile" value="Profile" class="form-check-input size-20">
                                                    <label for="checkProfile" class="form-check-label fw-semibold">Profile</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPROList" value="List" class="form-check-input size-20">
                                                    <label for="checkPROList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPROAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkPROAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPROEdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkPROEdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPROView" value="View" class="form-check-input size-20">
                                                    <label for="checkPROView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAircraft" value="Aircraft" class="form-check-input size-20">
                                                    <label for="checkAircraft" class="form-check-label fw-semibold">Aircraft</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAIRList" value="List" class="form-check-input size-20">
                                                    <label for="checkAIRList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAIRAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkAIRAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAIREdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkAIREdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAIRView" value="View" class="form-check-input size-20">
                                                    <label for="checkAIRView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPilot" value="Pilot" class="form-check-input size-20">
                                                    <label for="checkPilot" class="form-check-label fw-semibold">Pilot</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPILOTList" value="List" class="form-check-input size-20">
                                                    <label for="checkPILOTList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPILOTAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkPILOTAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPILOTEdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkPILOTEdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkPILOTView" value="View" class="form-check-input size-20">
                                                    <label for="checkPILOTView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkFormation" value="Formation" class="form-check-input size-20">
                                                    <label for="checkFormation" class="form-check-label fw-semibold">Formation</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkFORMAList" value="List" class="form-check-input size-20">
                                                    <label for="checkFORMAList" class="form-check-label">List</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkFORMAAdd" value="Add" class="form-check-input size-20">
                                                    <label for="checkFORMAAdd" class="form-check-label">Add</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkFORMAEdit" value="Edit" class="form-check-input size-20">
                                                    <label for="checkFORMAEdit" class="form-check-label">Edit</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkFORMAView" value="View" class="form-check-input size-20">
                                                    <label for="checkFORMAView" class="form-check-label">View</label>
                                                </div>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkAccount" value="Account" class="form-check-input size-20">
                                                    <label for="checkAccount" class="form-check-label fw-semibold">Account</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC" value="List" class="form-check-input size-20">
                                                    <label for="vcAC" class="form-check-label">View Checklist</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vtAC" value="View Tickets" class="form-check-input size-20">
                                                    <label for="vtAC" class="form-check-label">View Tickets</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="veAC" value="View Equipment" class="form-check-input size-20">
                                                    <label for="veAC" class="form-check-label">View Equipment</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vpAC" value="View Profiles" class="form-check-input size-20">
                                                    <label for="vpAC" class="form-check-label">View Profiles</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vtAC" value="View Transactions" class="form-check-input size-20">
                                                    <label for="vtAC" class="form-check-label">View Transactions</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vwAC" value="" class="form-check-input size-20">
                                                    <label for="vwAC" class="form-check-label">View Waivers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vjlAC" value="" class="form-check-input size-20">
                                                    <label for="vjlAC" class="form-check-label">View Jump Log</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC" value="" class="form-check-input size-20">
                                                    <label for="vcAC" class="form-check-label">View Credentials</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vnAC" value="" class="form-check-input size-20">
                                                    <label for="vnAC" class="form-check-label">View Notes</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vdmAC" value="" class="form-check-input size-20">
                                                    <label for="vdmAC" class="form-check-label">Enable/Disable Double Manifest</label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="ecAC" value="" class="form-check-input size-20">
                                                    <label for="ecAC" class="form-check-label">Edit Customer</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="iedlAC" value="" class="form-check-input size-20">
                                                    <label for="iedlAC" class="form-check-label">Increase Equipment Date</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aecAC" value="" class="form-check-input size-20">
                                                    <label for="aecAC" class="form-check-label">Add/Edit Credential</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="anAC" value="" class="form-check-input size-20">
                                                    <label for="anAC" class="form-check-label">Add Note</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="ucAC" value="" class="form-check-input size-20">
                                                    <label for="ucAC" class="form-check-label">Unground Customer</label>
                                                </div>
                                            </td>  
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeeAC" value="" class="form-check-input size-20">
                                                    <label for="aeeAC" class="form-check-label">Add/Edit Equipment</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeclAC" value="" class="form-check-input size-20">
                                                    <label for="aeclAC" class="form-check-label">Add/Edit Credential</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="epAC" value="" class="form-check-input size-20">
                                                    <label for="epAC" class="form-check-label">Edit Profile</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="gAC" value="" class="form-check-input size-20">
                                                    <label for="gAC" class="form-check-label">Ground Customer</label>
                                                </div> 
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkManifest" value="Manifest" class="form-check-input size-20">
                                                    <label for="checkManifest" class="form-check-label fw-semibold">Manifest</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC1" value="" class="form-check-input size-20">
                                                    <label for="vcAC1" class="form-check-label">View Checked-in Staff</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vtAC1" value="" class="form-check-input size-20">
                                                    <label for="vtAC1" class="form-check-label">Delete Load</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="veAC1" value="" class="form-check-input size-20">
                                                    <label for="veAC1" class="form-check-label">Manifest Display Note</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vpAC1" value="" class="form-check-input size-20">
                                                    <label for="vpAC1" class="form-check-label">Add Member in Team</label>
                                                </div> 
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vwAC1" value="" class="form-check-input size-20">
                                                    <label for="vwAC1" class="form-check-label"> Load on TV</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vjlAC1" value="" class="form-check-input size-20">
                                                    <label for="vjlAC1" class="form-check-label">Close All Load</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC1" value="" class="form-check-input size-20">
                                                    <label for="vcAC1" class="form-check-label">Add Customer to Standby</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vnAC1" value="" class="form-check-input size-20">
                                                    <label for="vnAC1" class="form-check-label">Remove Member from Team</label>
                                                </div> 
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="ecAC1" value="" class="form-check-input size-20">
                                                    <label for="ecAC1" class="form-check-label">Add/Insert Load</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="iedlAC2" value="" class="form-check-input size-20">
                                                    <label for="iedlAC2" class="form-check-label">Start/Stop Load</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aecAC1" value="" class="form-check-input size-20">
                                                    <label for="aecAC1" class="form-check-label">Create/Edit Team</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="anAC1" value="" class="form-check-input size-20">
                                                    <label for="anAC1" class="form-check-label">Enable/Disable Student Halt</label>
                                                </div> 
                                            </td>  
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeeAC1" value="" class="form-check-input size-20">
                                                    <label for="aeeAC1" class="form-check-label">Duplicate Load</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeclAC1" value="" class="form-check-input size-20">
                                                    <label for="aeclAC1" class="form-check-label">Set Load Visible Count in TV</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="epAC1" value="" class="form-check-input size-20">
                                                    <label for="epAC1" class="form-check-label">Delete Team</label>
                                                </div> 
                                            </td>  
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="checkLocation" value="Location" class="form-check-input size-20">
                                                    <label for="checkLocation" class="form-check-label fw-semibold">Location Settings</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC2" value="" class="form-check-input size-20">
                                                    <label for="vcAC2" class="form-check-label">Self-Manifest Threshold</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vtAC2" value="" class="form-check-input size-20">
                                                    <label for="vtAC2" class="form-check-label">Equipment Validity</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="veAC3" value="" class="form-check-input size-20">
                                                    <label for="veAC3" class="form-check-label">Weight</label>
                                                </div> 
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vwAC2" value="" class="form-check-input size-20">
                                                    <label for="vwAC2" class="form-check-label">Re-Manifest Threshold</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vjlAC2" value="" class="form-check-input size-20">
                                                    <label for="vjlAC2" class="form-check-label">EP Review Validity</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="vcAC2" value="" class="form-check-input size-20">
                                                    <label for="vcAC2" class="form-check-label">Weight</label>
                                                </div> 
                                            </td> 
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="ecAC2" value="" class="form-check-input size-20">
                                                    <label for="ecAC2" class="form-check-label">Tandem Instructor Validity</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="iedlAC2" value="" class="form-check-input size-20">
                                                    <label for="iedlAC2" class="form-check-label">Emergency Alerts</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aecAC2" value="" class="form-check-input size-20">
                                                    <label for="aecAC2" class="form-check-label">Standby Allowed</label>
                                                </div> 
                                            </td>  
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeeAC2" value="" class="form-check-input size-20">
                                                    <label for="aeeAC2" class="form-check-label">P-Waiver Validity</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="" id="aeclAC2" value="" class="form-check-input size-20">
                                                    <label for="aeclAC2" class="form-check-label">BMI</label>
                                                </div> 
                                            </td>  
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end::tab-pane-->
                        <div class="tab-pane fade" id="nav-skyDiveDesert" role="tabpanel" aria-labelledby="nav-skyDiveDesert-tab" tabindex="0">...</div> 
                    </div><!--end::tab-content-->

                    <div class="d-flex gap-2 mt-4 justify-content-end">
                        <a href="roles-mgmt.php" class="btn btn__base h-36 bg-white rounded-pill shadow-none"> 
                            Cancel
                        </a> 
                        <a href="#" class="btn btn-primary h-36 rounded-pill shadow-none"> 
                            Save
                        </a> 
                    </div>
                </div><!--end::div-->
            </div><!-- bg-white p-4 filter__btn -->


 

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