<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main"> 
    <!--begin::App Content-->
    <div class="app-content pt-3">
        <!--begin::Container-->
        <div class="container-fluid d-flex flex-column" style="gap: 12px;">
            <div class="bg-white p-4 rounded-3">
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <h1 class="mb-0 fw-semibold fs-18 text-dark">Manifest Rules</h1>
                    <button class="btn btn-primary px-3 rounded-pill text-white">Save Settings</button>
                </div>
                <div class="row g-4 gx-5">
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Set Self-Manifest to Load threshold Time </label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="23">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Set Self-Manifest withdraw from Load Threshold Time </label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Set Re-Manifest to Load threshold Time  (min)</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                </div>
            </div><!--.bg-white-->

            <div class="bg-white p-4 rounded-3">
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <h2 class="mb-0 fw-semibold fs-18 text-dark">Validity</h2> 
                </div>
                <div class="row g-4 gx-5">
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Tandem Instructor Procedure Validity</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="23">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">P-Waiver Validity</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Equipment Validity</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">EP Review Expiry</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Tandem EP Review Expiry</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                </div>
            </div><!--.bg-white-->

            <div class="bg-white p-4 rounded-3">
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <h2 class="mb-0 fw-semibold fs-18 text-dark">Visibility & Alerts</h2> 
                </div>
                <div class="row g-4 gx-5">
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Load Visible on TV</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="23">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold">Emergency Alerts Duration</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="4">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">min</div>
                        </div>
                    </div> 
                </div>
            </div><!--.bg-white-->

            <div class="bg-white p-4 rounded-3">
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <h2 class="mb-0 fw-semibold fs-18 text-dark">BMI & Weight Rules</h2> 
                </div>
                <div class="row g-4 gx-5">
                    <div class="col-md-6">
                        <label for="BMI" class="form-label fw-semibold">BMI</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="BMI" id="BMI" placeholder="Enter BMI" value="23">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">Male</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold d-none d-md-block">&nbsp;</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="24">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">Female</div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <label for="BMI" class="form-label fw-semibold">Max Weight</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="BMI" id="BMI" placeholder="Enter BMI" value="100">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">Male</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="self-manifest" class="form-label fw-semibold d-none d-md-block">&nbsp;</label>
                        <div class="d-flex flex-row gap-3">
                            <div class="flex-grow-1"> 
                                <input type="text" class="form-control" name="self-manifest" id="self-manifest" placeholder="Enter self-manifest" value="110">
                            </div>
                            <div class="flex-shrink-0 px-3 d-inline-flex align-items-center bg-gradient rounded-1">Female</div>
                        </div>
                    </div> 
                </div>
            </div><!--.bg-white-->

            <div class="bg-white p-4 rounded-3">
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between mb-3">
                    <h2 class="mb-0 fw-semibold fs-18 text-dark">Operational Controls</h2> 
                </div>
                <div class="row g-4 gx-5">
                    <div class="col-12">
                        <label for="BMI" class="form-label fw-semibold">Stand By Allowed</label>
                        <select name="" id="" class="form-select">
                            <option value="1">True</option>
                            <option value="2">False</option>
                        </select> 
                    </div>
                     
                </div>
            </div><!--.bg-white-->


             
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
 