<!-- header menu -->
<?php include('includes/header.inc.php'); ?>


<!--begin::App Main-->
<main class="app-main">

    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="mt-3 bg-white px-3 py-2 filter__btn">
                <div class="row g-0 align-items-center">
                    <div class="col-8">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2">

                            <div class="dropdown">
                                <button class="btn btn__base rounded-pill" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Instructor commissions
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                                        <path d="m4.75 7.13 4.75 4.75 4.75-4.76" stroke="#000" stroke-width="1.58"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
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
                                            <input type="checkbox" name="unverifed" id="unverifed"
                                                class="form-check-input">
                                            <label for="unverifed" class="form-check-label">Unverified</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-4  ">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2">
                            <button class="btn rounded-pill btn__base btn__export fw-bold align-items-center">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z"
                                        fill="#212529" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.74 4.36 8 7.86l5.26-3.5a.7.7 0 0 0-.6-.36H3.34a.7.7 0 0 0-.59.36m10.6 1.55L8.36 9.22a.7.7 0 0 1-.74 0l-4.96-3.3v5.41c0 .37.3.67.66.67h9.34c.36 0 .66-.3.66-.67zm-12-1.24a2 2 0 0 1 2-2h9.33a2 2 0 0 1 2 2v6.66a2 2 0 0 1-2 2H3.33a2 2 0 0 1-2-2z"
                                        fill="#000" fill-opacity=".2" />
                                </svg>
                                <span>Send to email</span>
                            </button> <button class="btn rounded-pill btn__base btn__export fw-bold align-items-center">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.667 2.665A.667.667 0 0 0 4 3.332v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.332a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.334a.67.67 0 0 1 .195.471v3.333a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.334v-2zM10 3.608l1.057 1.057H10zm1.529 7.529a.667.667 0 1 1 .943-.943l2 2c.26.26.26.682 0 .943l-2 2a.667.667 0 0 1-.943-.943l.862-.862H9.333a.667.667 0 1 1 0-1.333h3.058z"
                                        fill="#212529" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.667 2.665A.667.667 0 0 0 4 3.332v9.333a.667.667 0 0 0 .667.667h3a.667.667 0 0 1 0 1.333h-3a2 2 0 0 1-2-2V3.332a2 2 0 0 1 2-2h4.666c.177 0 .347.07.472.195l3.333 3.334a.67.67 0 0 1 .195.471v3.333a.667.667 0 0 1-1.333 0V6h-2a1.333 1.333 0 0 1-1.333-1.334v-2zM10 3.608l1.057 1.057H10zm1.529 7.529a.667.667 0 1 1 .943-.943l2 2c.26.26.26.682 0 .943l-2 2a.667.667 0 0 1-.943-.943l.862-.862H9.333a.667.667 0 1 1 0-1.333h3.058z"
                                        fill="#000" fill-opacity=".2" />
                                </svg>
                                <span>Export to Excel</span>
                            </button> <button class="btn rounded-pill btn__base btn__export fw-bold align-items-center">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z"
                                        fill="#212529" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.59 1.92A2 2 0 0 1 6 1.33h4a2 2 0 0 1 2 2v2h.67a2 2 0 0 1 2 2V10a2 2 0 0 1-2 2H12v.67a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V12h-.67a2 2 0 0 1-2-2V7.33a2 2 0 0 1 2-2H4v-2a2 2 0 0 1 .59-1.41M3.33 6.67a.67.67 0 0 0-.66.66V10a.67.67 0 0 0 .66.67H4V10c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v.67h.67a.67.67 0 0 0 .66-.67V7.33a.67.67 0 0 0-.66-.66zm7.34-1.34H5.33v-2A.67.67 0 0 1 6 2.67h4a.67.67 0 0 1 .67.66zm0 4.67c0-.37-.3-.67-.67-.67H6c-.37 0-.67.3-.67.67v2.67c0 .37.3.66.67.66h4c.37 0 .67-.3.67-.66z"
                                        fill="#000" fill-opacity=".2" />
                                </svg>
                                <span>Print</span>
                            </button>
                        </div>
                    </div>

                </div><!--.//row-->
            </div>

            <div class="bg-white mt-1">
                <div class="overflow-x-auto">
                    <table class="table data-table large__table mb-3" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Transaction</th>
                                <th>Ticket Used</th>
                                <th>Value Per IIem</th>
                                <th>Invoice Value</th>
                                <th>Quantity</th>
                                <th>No. of Items</th>
                                <th>No. of Slots</th>
                                <th>Total Credited</th>
                                <th>Total Debited</th>
                                <th>Total Invoicable to Dropzone</th>
                                <th>Total Invoicable to Jumper</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cornelia Mihai</td>
                                <td>Tandem Ins</td>
                                <td>0</td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>9</td>
                                <td>23</td>
                                <td>9</td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-success">1,530.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Cornelia Mihai</td>
                                <td>Tandem Ins</td>
                                <td>0</td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>9</td>
                                <td>23</td>
                                <td>9</td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-success">1,530.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Cornelia Mihai</td>
                                <td>Tandem Ins</td>
                                <td>0</td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>9</td>
                                <td>23</td>
                                <td>9</td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-success">1,530.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Cornelia Mihai</td>
                                <td>Tandem Ins</td>
                                <td>0</td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>
                                    <span class="text-success">170.00</span>
                                </td>
                                <td>9</td>
                                <td>23</td>
                                <td>9</td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-success">1,530.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                            </tr>




                        </tbody>
                        <tfoot class="total">
                            <tr>
                                <td colspan="5">Total</td>
                                <td>44</td>
                                <td>44</td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-success">273,960.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                                <td><span class="text-muted">0.00</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!--end::overflow-->
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