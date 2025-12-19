<div class="offcanvas offcanvas-end auditOffcanvas" tabindex="-1" id="offcanvasAuditDetail"
    aria-labelledby="offcanvasAuditDetailLabel">
    <div class="offcanvas-header p-0 d-block bg-white">
        <div
            class="user__box w-100 d-flex flex-row gap-3 border-bottom border-start-0 border-end-0 p-3 align-items-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                class="img-fluid rounded-circle object-fit-cover flex-shrink-0" style="width:2rem;height:2rem;">
            <div class="flex-grow-1">
                <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                <div class="d-flex fs-12 align-items-center gap-2">
                    <span class="">moali38@mail.com</span><span class="dot"></span>
                    <span>Booking ID: 2323421</span>
                </div>
            </div>
            <?php if (isset($isMacher) && $isMacher == "true") { ?>
                <div class="">
                    <div class="d-inline-flex gap-3">
                        <div class="form-check">
                            <label for="verify">Verify</label>
                            <input type="checkbox" class="form-check-input size-20" id="verify">
                        </div>
                        <button class="btn match__btn  px-4 rounded-pill fw-normal activeMatchModal">Match</button>
                    </div>
                </div>
            <?php } ?>

        </div><!--.user_box-->
        <div class="px-4 border-bottom">
            <div class="row g-0 align-items-center">
                <div class="col-6 border-end">
                    <div class="py-3">
                        <p class="small text-dark mb-0">Type</p>
                        <p class="small text-dark mb-0 fw-bold">Tandeem</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="py-3 ps-4">
                        <p class="small text-muted mb-0">Double click to add note</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-body px-4 pb-0 ff-noto">
        <div class="bg-white p-4 rounded-4 border shadow-sm scroll__box">
            <h2 class="fs-2 text-center text-danger mb-3">Lorem ipsum dolor sit amet consectetur</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input size-20" id="checkbox1">
                <label for="checkbox1" class="form-check-label fw-medium">I Agree</label>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
        </div>
    </div><!--.offcanvas-body-->
</div>



<div class="offcanvas offcanvas-end auditOffcanvas" tabindex="-1" id="offcanvaswithNoteDetail"
    aria-labelledby="offcanvasAuditDetailLabel">
    <div class="offcanvas-header p-0 d-block bg-white">
        <div
            class="user__box w-100 d-flex flex-row gap-3 border-bottom border-start-0 border-end-0 p-3 align-items-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <img src="assets/images/icons/user.png" alt="user" width="32" height="32"
                class="img-fluid rounded-circle object-fit-cover flex-shrink-0" style="width:2rem;height:2rem;">
            <div class="flex-grow-1">
                <p class="small fw-semibold text-dark mb-0">Mohamed Ali</p>
                <div class="d-flex fs-12 align-items-center gap-2">
                    <span class="">moali38@mail.com</span><span class="dot"></span>
                    <span>Booking ID: 2323421</span>
                </div>
            </div>
            <?php if (isset($isMacher) && $isMacher == "true") { ?>
                <div class="">
                    <div class="d-inline-flex gap-3">
                        <div class="form-check">
                            <label for="verify">Verify</label>
                            <input type="checkbox" class="form-check-input size-20" id="verify">
                        </div>
                        <button class="btn match__btn  px-4 rounded-pill fw-normal activeMatchModal">Match</button>
                    </div>
                </div>
            <?php } ?>
            <div class="d-inline-flex align-items-center gap-3">

                <a href="#"
                    class="btn d-flex align-items-center justify-content-center gap-1 fs-12 bg-light rounded-pill"><svg
                        width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.79738 3.31284C5.5777 3.31284 5.36702 3.4001 5.21169 3.55544C5.05635 3.71077 4.96909 3.92145 4.96909 4.14113V15.7372C4.96909 15.9569 5.05635 16.1676 5.21169 16.3229C5.36702 16.4783 5.5777 16.5655 5.79738 16.5655H14.0803C14.3 16.5655 14.5107 16.4783 14.666 16.3229C14.8213 16.1676 14.9086 15.9569 14.9086 15.7372V7.4543H12.4237C11.9844 7.4543 11.563 7.27977 11.2523 6.9691C10.9417 6.65843 10.7671 6.23707 10.7671 5.79771V3.31284H5.79738ZM12.4237 4.48422L13.7372 5.79771H12.4237V4.48422ZM4.0403 2.38405C4.50631 1.91805 5.13835 1.65625 5.79738 1.65625H11.5954C11.8151 1.65625 12.0258 1.74352 12.1811 1.89885L16.3226 6.04032C16.4779 6.19565 16.5652 6.40633 16.5652 6.62601V15.7372C16.5652 16.3963 16.3034 17.0283 15.8374 17.4943C15.3714 17.9603 14.7393 18.2221 14.0803 18.2221H5.79738C5.13835 18.2221 4.50631 17.9603 4.0403 17.4943C3.5743 17.0283 3.3125 16.3963 3.3125 15.7372V4.14113C3.3125 3.4821 3.5743 2.85006 4.0403 2.38405ZM9.93884 8.28259C10.3963 8.28259 10.7671 8.65343 10.7671 9.11089V12.081L11.4239 11.4242C11.7474 11.1008 12.2718 11.1008 12.5953 11.4242C12.9187 11.7477 12.9187 12.2721 12.5953 12.5956L10.5245 14.6663C10.2011 14.9898 9.67662 14.9898 9.35315 14.6663L7.28242 12.5956C6.95895 12.2721 6.95895 11.7477 7.28242 11.4242C7.60589 11.1008 8.13033 11.1008 8.4538 11.4242L9.11055 12.081V9.11089C9.11055 8.65343 9.48139 8.28259 9.93884 8.28259Z"
                            fill="#212529" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.79738 3.31284C5.5777 3.31284 5.36702 3.4001 5.21169 3.55544C5.05635 3.71077 4.96909 3.92145 4.96909 4.14113V15.7372C4.96909 15.9569 5.05635 16.1676 5.21169 16.3229C5.36702 16.4783 5.5777 16.5655 5.79738 16.5655H14.0803C14.3 16.5655 14.5107 16.4783 14.666 16.3229C14.8213 16.1676 14.9086 15.9569 14.9086 15.7372V7.4543H12.4237C11.9844 7.4543 11.563 7.27977 11.2523 6.9691C10.9417 6.65843 10.7671 6.23707 10.7671 5.79771V3.31284H5.79738ZM12.4237 4.48422L13.7372 5.79771H12.4237V4.48422ZM4.0403 2.38405C4.50631 1.91805 5.13835 1.65625 5.79738 1.65625H11.5954C11.8151 1.65625 12.0258 1.74352 12.1811 1.89885L16.3226 6.04032C16.4779 6.19565 16.5652 6.40633 16.5652 6.62601V15.7372C16.5652 16.3963 16.3034 17.0283 15.8374 17.4943C15.3714 17.9603 14.7393 18.2221 14.0803 18.2221H5.79738C5.13835 18.2221 4.50631 17.9603 4.0403 17.4943C3.5743 17.0283 3.3125 16.3963 3.3125 15.7372V4.14113C3.3125 3.4821 3.5743 2.85006 4.0403 2.38405ZM9.93884 8.28259C10.3963 8.28259 10.7671 8.65343 10.7671 9.11089V12.081L11.4239 11.4242C11.7474 11.1008 12.2718 11.1008 12.5953 11.4242C12.9187 11.7477 12.9187 12.2721 12.5953 12.5956L10.5245 14.6663C10.2011 14.9898 9.67662 14.9898 9.35315 14.6663L7.28242 12.5956C6.95895 12.2721 6.95895 11.7477 7.28242 11.4242C7.60589 11.1008 8.13033 11.1008 8.4538 11.4242L9.11055 12.081V9.11089C9.11055 8.65343 9.48139 8.28259 9.93884 8.28259Z"
                            fill="black" fill-opacity="0.2" />
                    </svg>
                    Download PDF</a>
            </div>
        </div><!--.user_box-->
        <div class="px-4 border-bottom">
            <div class="row g-0 align-items-center">
                <div class="col-6 border-end">
                    <div class="py-3">
                        <p class="small text-dark mb-0">Type</p>
                        <p class="small text-dark mb-0 fw-bold">Tandeem</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="py-3 ps-4 d-flex align-items-center justify-content-between">
                        <input type="text" class="small border-0 text-muted mb-0" placeholder="Add Note"></input>
                        <div class="d-inline-flex align-items-center gap-3">
                            <a href="#" class="btn btn-primary blue rounded-pill">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 border-bottom">
            <div class="d-flex justify-content-between align-items-center">

                <div class="py-3">
                    <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                    <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                </div>
                <button class="btn rounded-pill btn-link" type="button" data-bs-toggle="modal"
                    data-bs-target="#notesModal">
                    View All Notes
                </button>

            </div>
        </div>
    </div>
    <div class="offcanvas-body px-4 pb-0 ff-noto">
        <div class="bg-white p-4 rounded-4 border shadow-sm scroll__box" style="height: calc(100vh - 16.5rem)">
            <h2 class="fs-2 text-center text-danger mb-3">Lorem ipsum dolor sit amet consectetur</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input size-20" id="checkbox1">
                <label for="checkbox1" class="form-check-label fw-medium">I Agree</label>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, veritatis iste? Veniam dignissimos fugit
                ipsum, hic sapiente fugiat, ad dolor nobis tenetur ut ab quaerat?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, ipsum? Beatae facilis culpa optio
                reiciendis laborum, nemo nisi quasi minus magnam ad sequi. Minima dolor, harum nisi in nemo at
                temporibus delectus, ex eum sequi commodi nam distinctio error autem vero, debitis esse consequuntur
                aperiam sint quidem! Aspernatur, vitae repellat repudiandae omnis molestiae accusantium doloremque.
            </p>
        </div>
    </div><!--.offcanvas-body-->
</div>

<div class="modal fade" id="notesModal" tabindex="-1" aria-labelledby="notesModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="max-width:615px;">
        <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-between">
                <p class="modal-title small fw-semibold text-dark mb-0" id="notesModalLabel">Notes</p>
                <button type="button" class="btn shadow-none p-0 border-0" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.4 6.4q.6-.4 1.2 0l4.4 4.4 4.4-4.4a.8.8 0 1 1 1.2 1.2L13.2 12l4.4 4.4a.8.8 0 0 1-1.2 1.2L12 13.2l-4.4 4.4a.8.8 0 0 1-1.2-1.2l4.4-4.4-4.4-4.4a1 1 0 0 1 0-1.2"
                            fill="#495057" />
                    </svg>
                </button>
            </div>
            <div class="modal-body pt-0 ff-noto scroll">
                <div class="border-bottom border-top">
                    <div class="p-2 d-flex align-items-center justify-content-between bg-light">
                        <input type="text" class="small bg-light border-0 text-muted mb-0"
                            placeholder="Add Note"></input>
                        <div class="d-inline-flex align-items-center gap-3">
                            <a href="#" class="btn btn-primary blue rounded-pill">Add </a>
                        </div>
                    </div>
                </div>
                <div class="scroll d-flex flex-column g-0 scroll__box" style="height: 360px">
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                    <div class="p-2 border-bottom">
                        <p class="small text-gray mb-0">2025-10-10 14:22 • Admin</p>
                        <p class="medium text-dark mb-0 ">Customer is fitting to jump</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>