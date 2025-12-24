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
                    <div class="col-9">
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-2 position-relative z-3">
                            <button class="btn btn__base rounded-pill active">
                                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.667 10a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm3.329 0a.833.833 0 1 0 0 1.666h.008a.833.833 0 1 0 0-1.666zm3.33 0a.833.833 0 1 0 0 1.666h.007a.833.833 0 1 0 0-1.666zm-6.659 3.333a.833.833 0 1 0 0 1.667h.007a.833.833 0 1 0 0-1.667zm3.329 0a.833.833 0 1 0 0 1.667h.008a.833.833 0 1 0 0-1.667z" fill="#1864AB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.625 1.667a.625.625 0 0 0-1.25 0v.528c-.67.19-1.236.5-1.707 1.008-.648.701-.936 1.587-1.074 2.696-.136 1.088-.136 2.481-.136 4.26v.516c0 1.778 0 3.171.136 4.259.138 1.11.426 1.995 1.074 2.696.655.707 1.493 1.028 2.541 1.18 1.015.148 2.312.148 3.949.148h1.684c1.637 0 2.934 0 3.949-.147 1.048-.153 1.886-.474 2.541-1.181.648-.701.936-1.587 1.075-2.696.135-1.088.135-2.481.135-4.26v-.516c0-1.778 0-3.171-.136-4.259-.137-1.11-.426-1.995-1.074-2.696-.47-.508-1.036-.817-1.707-1.008v-.528a.625.625 0 1 0-1.25 0v.304c-.947-.096-2.112-.096-3.533-.096H9.158c-1.421 0-2.586 0-3.533.096zM4.399 3.505a.625.625 0 0 0 1.226-.172V3.23c.884-.103 2.027-.104 3.583-.104h1.584c1.556 0 2.699.001 3.583.104v.104a.625.625 0 0 0 1.226.172c.34.135.597.314.813.547.395.427.628 1.011.751 1.995l-.082-.005H2.917l-.082.005c.123-.984.356-1.569.75-1.995.217-.233.474-.412.814-.547M2.742 7.267a76 76 0 0 0-.034 2.936v.428c0 1.831.001 3.147.126 4.148.123.988.356 1.575.752 2.002.388.42.912.663 1.803.793.915.133 2.12.134 3.82.134h1.583c1.698 0 2.904-.001 3.819-.134.891-.13 1.415-.373 1.803-.793.396-.427.63-1.014.752-2.002.125-1 .126-2.317.126-4.148v-.428c0-1.173 0-2.134-.034-2.936a.6.6 0 0 1-.175.024H2.917a.6.6 0 0 1-.175-.024" fill="#1864AB"/></svg>
                                <span>Today</span>
                            </button> 
                            <input type="text" id="dateRangePicker" class="form-control date__input" value="2025-12-13 to 2026-01-28"></input>
                            
                            <div class="line__divider ms-2"></div>
                            <button class="btn rounded-pill btn-link">
                                Reset Filters
                            </button>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <button class="btn rounded-pill btn__base btn-outline-danger fw-bold align-items-center"
                            data-bs-toggle="modal" data-bs-target="#clearAllModal" type="button"
                        >
                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.15 2.16q.5-.49 1.18-.5h3.34a1.67 1.67 0 0 1 1.66 1.67V5h3.34a.83.83 0 0 1 0 1.67h-.07l-.77 9.2a2.5 2.5 0 0 1-2.5 2.46H6.67a2.5 2.5 0 0 1-2.5-2.46l-.77-9.2h-.07a.83.83 0 0 1 0-1.67h3.34V3.33c0-.44.17-.86.48-1.17m-2.08 4.5.76 9.1v.07a.83.83 0 0 0 .84.84h6.66a.83.83 0 0 0 .84-.84v-.06l.76-9.1zM11.67 5H8.33V3.33h3.34zM8.33 8.33c.46 0 .84.38.84.84v5a.83.83 0 0 1-1.67 0v-5c0-.46.37-.84.83-.84m3.34 0c.46 0 .83.38.83.84v5a.83.83 0 0 1-1.67 0v-5c0-.46.38-.84.84-.84" fill="#FA5252"/></svg>
                            <span>Clear All Alerts</span>
                        </button>
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
                                <th>Request Date</th>
                                <th>Time </th>
                                <th>Customer </th>
                                <th>Alert</th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td class="position-static">
                                    <div class="row__selection">
                                        <input type="checkbox" class="form-check-input position-relative mx-2" id="check">
                                        <label for="check"></label>
                                    </div>
                                </td>
                                <td>10/12/2025</td>
                                <td>12:34:24</td>
                                <td>John Smith</td>
                                <td>I’m Ok, Walking Back</td> 
                                <td>
                                    <div class="d-inline-flex gap-2">
                                        <button class="btn ac__btn btn-primary p-0" type="button"
                                            data-bs-toggle="modal" data-bs-target="#locationModal"
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.3346a5.8333 5.8333 0 0 0-4.125 9.958l3.5365 3.5356a.8333.8333 0 0 0 1.1779 0l3.5355-3.5355a5.834 5.834 0 0 0-.8841-8.975A5.833 5.833 0 0 0 10 3.3347M5.8333 2.932a7.5 7.5 0 0 1 9.4701 11.5392l-3.5358 3.5359a2.5 2.5 0 0 1-3.534.0003l-3.537-3.5361A7.5 7.5 0 0 1 5.8334 2.9319M10 7.5011c-.9205 0-1.6667.7461-1.6667 1.6666S9.0795 10.8344 10 10.8344s1.6667-.7462 1.6667-1.6667S10.9205 7.5011 10 7.5011M6.6667 9.1677c0-1.841 1.4924-3.3333 3.3333-3.3333s3.3333 1.4924 3.3333 3.3333S11.8409 12.5011 10 12.5011s-3.3333-1.4924-3.3333-3.3334" fill="#fff"/></svg>
                                        </button> 
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                        >
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.98682 1.44971H9.89211C8.07756 1.4497 6.65234 1.44969 5.53959 1.59929C4.39932 1.7526 3.49461 2.07318 2.78377 2.78402C2.07293 3.49486 1.75235 4.39956 1.59905 5.53984C1.44944 6.65258 1.44945 8.07781 1.44946 9.89235V9.99249C1.44946 10.251 1.44946 10.5016 1.4499 10.7445C1.44961 10.7523 1.44946 10.7601 1.44946 10.768C1.44946 10.7767 1.44964 10.7854 1.45 10.794C1.45296 12.231 1.47237 13.3973 1.59905 14.3396C1.75235 15.4799 2.07293 16.3846 2.78377 17.0954C3.49461 17.8062 4.39932 18.1268 5.53959 18.2801C6.65233 18.4297 8.07755 18.4297 9.89209 18.4297H9.93947C9.94081 18.4297 9.94215 18.4297 9.94348 18.4297C10.2847 18.4275 10.5607 18.1502 10.5607 17.8085L10.5607 11.3892H13.6668C14.0099 11.3892 14.288 11.1111 14.288 10.768C14.288 10.4249 14.0099 10.1468 13.6668 10.1468H10.5607V8.07605H17.1798C17.1869 8.63224 17.187 9.24997 17.187 9.93971C17.187 10.2828 17.4652 10.5609 17.8082 10.5609C18.1513 10.5609 18.4295 10.2828 18.4295 9.93971V9.89236C18.4295 8.07782 18.4295 6.65257 18.2799 5.53984C18.1266 4.39956 17.806 3.49485 17.0952 2.78401C16.3843 2.07318 15.4796 1.7526 14.3393 1.59929C13.2266 1.44969 11.8014 1.4497 9.98682 1.44971ZM9.93876 6.83361C9.93852 6.83361 9.93899 6.83361 9.93876 6.83361C9.93899 6.83361 9.93994 6.83361 9.94017 6.83361H17.1451C17.1245 6.41715 17.094 6.04362 17.0485 5.70539C16.9137 4.70289 16.6581 4.10407 16.2166 3.66255C15.7751 3.22104 15.1763 2.96543 14.1738 2.83065C13.1534 2.69347 11.8117 2.69215 9.93946 2.69215C8.06721 2.69215 6.72552 2.69347 5.70514 2.83065C4.70264 2.96544 4.10383 3.22104 3.66231 3.66255C3.22079 4.10407 2.96519 4.70289 2.83041 5.70539C2.78493 6.04362 2.75439 6.41715 2.73387 6.83361L9.93876 6.83361ZM9.31825 8.07605V10.1468L2.69192 10.1468L2.6919 9.93971C2.6919 9.24997 2.69208 8.63224 2.69917 8.07605H9.31825ZM9.31825 11.3892H2.69515C2.7008 12.19 2.71629 12.8714 2.75875 13.46H9.31825V11.3892ZM9.31825 14.7024H2.92055C3.0688 15.3979 3.3045 15.8591 3.66231 16.2169C4.10383 16.6584 4.70264 16.914 5.70515 17.0488C6.60895 17.1703 7.76485 17.1852 9.31825 17.187V14.7024Z" fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2545 12.0732C16.827 11.8359 16.308 11.8438 15.8879 12.0937C15.7123 12.1981 15.5601 12.3634 15.3961 12.5417L15.3565 12.5847L12.7566 15.4015C12.4703 15.7112 12.247 15.9528 12.1151 16.2564C11.9835 16.5593 11.9581 16.8889 11.9253 17.3134L11.9111 17.496C11.9054 17.568 11.8977 17.6659 11.9025 17.7527C11.9085 17.8601 11.9361 18.0293 12.0691 18.1803C12.2037 18.333 12.3702 18.3811 12.4794 18.3993C12.5656 18.4137 12.664 18.4161 12.7343 18.4179L12.9114 18.4226C13.3946 18.4357 13.778 18.4461 14.1344 18.3069C14.4897 18.1681 14.767 17.9005 15.1184 17.5614L17.8058 14.973C17.981 14.8048 18.1423 14.6499 18.2437 14.4719C18.4842 14.05 18.4916 13.532 18.2635 13.1033C18.1673 12.9225 18.0106 12.7629 17.8403 12.5894L17.8 12.5483L17.7591 12.5065C17.59 12.3332 17.4331 12.1724 17.2545 12.0732ZM16.4148 12.9796C16.5198 12.9172 16.6476 12.9153 16.7541 12.9745C16.7825 12.9902 16.826 13.0269 17.0633 13.2694C17.3 13.5111 17.337 13.5564 17.3535 13.5874C17.4156 13.7043 17.4135 13.8469 17.3482 13.9615C17.3308 13.9919 17.2927 14.036 17.0492 14.2705L14.4642 16.7603C14.0217 17.1864 13.8984 17.2924 13.7594 17.3467C13.6293 17.3975 13.4806 17.405 12.9532 17.3923C12.9904 16.9225 13.009 16.7857 13.0605 16.6672C13.1141 16.5438 13.2058 16.4347 13.5619 16.0489L16.114 13.2839C16.3442 13.0344 16.3867 12.9963 16.4148 12.9796Z" fill="black"/>
                                            </svg> 
                                        </button> 
                                    </div>
                                </td> 
                            </tr> 
                            <tr class="bg-warning"> 
                                <td class="position-static">
                                    <div class="row__selection">
                                        <input type="checkbox" class="form-check-input position-relative mx-2" id="check">
                                        <label for="check"></label>
                                    </div>
                                </td>
                                <td>10/12/2025</td>
                                <td>12:34:24</td>
                                <td>John Smith</td>
                                <td>Please send Help, Customer injured</td> 
                                <td>
                                    <div class="d-inline-flex gap-2">
                                        <button class="btn ac__btn btn-primary p-0" type="button"
                                            data-bs-toggle="modal" data-bs-target="#locationModal"
                                        >
                                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.3346a5.8333 5.8333 0 0 0-4.125 9.958l3.5365 3.5356a.8333.8333 0 0 0 1.1779 0l3.5355-3.5355a5.834 5.834 0 0 0-.8841-8.975A5.833 5.833 0 0 0 10 3.3347M5.8333 2.932a7.5 7.5 0 0 1 9.4701 11.5392l-3.5358 3.5359a2.5 2.5 0 0 1-3.534.0003l-3.537-3.5361A7.5 7.5 0 0 1 5.8334 2.9319M10 7.5011c-.9205 0-1.6667.7461-1.6667 1.6666S9.0795 10.8344 10 10.8344s1.6667-.7462 1.6667-1.6667S10.9205 7.5011 10 7.5011M6.6667 9.1677c0-1.841 1.4924-3.3333 3.3333-3.3333s3.3333 1.4924 3.3333 3.3333S11.8409 12.5011 10 12.5011s-3.3333-1.4924-3.3333-3.3334" fill="#fff"/></svg>
                                        </button> 
                                        <button class="btn ac__btn"
                                            type="button" data-bs-toggle="modal" data-bs-target="#attachmentModal" 
                                        >
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.98682 1.44971H9.89211C8.07756 1.4497 6.65234 1.44969 5.53959 1.59929C4.39932 1.7526 3.49461 2.07318 2.78377 2.78402C2.07293 3.49486 1.75235 4.39956 1.59905 5.53984C1.44944 6.65258 1.44945 8.07781 1.44946 9.89235V9.99249C1.44946 10.251 1.44946 10.5016 1.4499 10.7445C1.44961 10.7523 1.44946 10.7601 1.44946 10.768C1.44946 10.7767 1.44964 10.7854 1.45 10.794C1.45296 12.231 1.47237 13.3973 1.59905 14.3396C1.75235 15.4799 2.07293 16.3846 2.78377 17.0954C3.49461 17.8062 4.39932 18.1268 5.53959 18.2801C6.65233 18.4297 8.07755 18.4297 9.89209 18.4297H9.93947C9.94081 18.4297 9.94215 18.4297 9.94348 18.4297C10.2847 18.4275 10.5607 18.1502 10.5607 17.8085L10.5607 11.3892H13.6668C14.0099 11.3892 14.288 11.1111 14.288 10.768C14.288 10.4249 14.0099 10.1468 13.6668 10.1468H10.5607V8.07605H17.1798C17.1869 8.63224 17.187 9.24997 17.187 9.93971C17.187 10.2828 17.4652 10.5609 17.8082 10.5609C18.1513 10.5609 18.4295 10.2828 18.4295 9.93971V9.89236C18.4295 8.07782 18.4295 6.65257 18.2799 5.53984C18.1266 4.39956 17.806 3.49485 17.0952 2.78401C16.3843 2.07318 15.4796 1.7526 14.3393 1.59929C13.2266 1.44969 11.8014 1.4497 9.98682 1.44971ZM9.93876 6.83361C9.93852 6.83361 9.93899 6.83361 9.93876 6.83361C9.93899 6.83361 9.93994 6.83361 9.94017 6.83361H17.1451C17.1245 6.41715 17.094 6.04362 17.0485 5.70539C16.9137 4.70289 16.6581 4.10407 16.2166 3.66255C15.7751 3.22104 15.1763 2.96543 14.1738 2.83065C13.1534 2.69347 11.8117 2.69215 9.93946 2.69215C8.06721 2.69215 6.72552 2.69347 5.70514 2.83065C4.70264 2.96544 4.10383 3.22104 3.66231 3.66255C3.22079 4.10407 2.96519 4.70289 2.83041 5.70539C2.78493 6.04362 2.75439 6.41715 2.73387 6.83361L9.93876 6.83361ZM9.31825 8.07605V10.1468L2.69192 10.1468L2.6919 9.93971C2.6919 9.24997 2.69208 8.63224 2.69917 8.07605H9.31825ZM9.31825 11.3892H2.69515C2.7008 12.19 2.71629 12.8714 2.75875 13.46H9.31825V11.3892ZM9.31825 14.7024H2.92055C3.0688 15.3979 3.3045 15.8591 3.66231 16.2169C4.10383 16.6584 4.70264 16.914 5.70515 17.0488C6.60895 17.1703 7.76485 17.1852 9.31825 17.187V14.7024Z" fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2545 12.0732C16.827 11.8359 16.308 11.8438 15.8879 12.0937C15.7123 12.1981 15.5601 12.3634 15.3961 12.5417L15.3565 12.5847L12.7566 15.4015C12.4703 15.7112 12.247 15.9528 12.1151 16.2564C11.9835 16.5593 11.9581 16.8889 11.9253 17.3134L11.9111 17.496C11.9054 17.568 11.8977 17.6659 11.9025 17.7527C11.9085 17.8601 11.9361 18.0293 12.0691 18.1803C12.2037 18.333 12.3702 18.3811 12.4794 18.3993C12.5656 18.4137 12.664 18.4161 12.7343 18.4179L12.9114 18.4226C13.3946 18.4357 13.778 18.4461 14.1344 18.3069C14.4897 18.1681 14.767 17.9005 15.1184 17.5614L17.8058 14.973C17.981 14.8048 18.1423 14.6499 18.2437 14.4719C18.4842 14.05 18.4916 13.532 18.2635 13.1033C18.1673 12.9225 18.0106 12.7629 17.8403 12.5894L17.8 12.5483L17.7591 12.5065C17.59 12.3332 17.4331 12.1724 17.2545 12.0732ZM16.4148 12.9796C16.5198 12.9172 16.6476 12.9153 16.7541 12.9745C16.7825 12.9902 16.826 13.0269 17.0633 13.2694C17.3 13.5111 17.337 13.5564 17.3535 13.5874C17.4156 13.7043 17.4135 13.8469 17.3482 13.9615C17.3308 13.9919 17.2927 14.036 17.0492 14.2705L14.4642 16.7603C14.0217 17.1864 13.8984 17.2924 13.7594 17.3467C13.6293 17.3975 13.4806 17.405 12.9532 17.3923C12.9904 16.9225 13.009 16.7857 13.0605 16.6672C13.1141 16.5438 13.2058 16.4347 13.5619 16.0489L16.114 13.2839C16.3442 13.0344 16.3867 12.9963 16.4148 12.9796Z" fill="black"/>
                                            </svg> 
                                        </button> 
                                    </div>
                                </td> 
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


 
<!-- PROFILE CREATE MODEL --> 
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:675px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="locationModalLabel">View Customer Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="assets/images/resources/map.png" alt="map" class="img-fluid w-100 rounded-3">
                <div class="d-flex justify-content-center mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill px-4" data-bs-dismiss="modal">Cancel</button> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clear Modal -->
<div class="modal fade" id="clearAllModal" tabindex="-1" aria-labelledby="clearAllModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:620px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="clearAllModalLabel">Add Your Signature</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2" fill="#495057"/></svg>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div>
                    <p>
                        Are you sure want to <b>delete</b> this item?
                    </p>
                </div>
                 <div class="d-flex justify-content-end mt-4 gap-2">
                    <button type="button" class="btn btn-outline-secondary small rounded-pill" data-bs-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-danger small rounded-pill shadow-none px-4" data-bs-dismiss="modal">Clear</button> 
                </div>
            </div><!--.modal-body-->
             
        </div>
    </div>
</div>
  

<!-- footer and all scripts -->
<?php   
    include('includes/footer.inc.php'); 
?>
 