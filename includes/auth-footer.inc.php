
<?php
if(isset(($page)) && $page === 'signup') {
    echo '<script src="assets/js/jquery-3.7.1.min.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.1.0/js/intlTelInput.min.js" integrity="sha512-nSv4TmHKiFdWKcAEKs+OW4rd9OPo4ZNNVHxhpIQj/dZwLSDrjO8Lq6YJn5AzFeFwqXaA+u9xdVvRbfkfExTkLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
}
?>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"
    ></script> 
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"
    ></script> 
     <?php if(isset($activeSelect2) && $activeSelect2 == "true") { ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $('.country_select').select2();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad/dist/signature_pad.umd.min.js"></script>

        <script>
        const canvas = document.getElementById("signatureCanvas");
        let signaturePad = new SignaturePad(canvas);

        function resizeCanvas() {
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        // Fix: Resize when modal is shown
        document.getElementById("signatureModal").addEventListener("shown.bs.modal", function () {
            resizeCanvas();
            signaturePad.clear();
        });

        document.getElementById("clearBtn").addEventListener("click", () => signaturePad.clear());

        document.getElementById("saveBtn").addEventListener("click", () => {
            if (signaturePad.isEmpty()) return alert("Please provide a signature.");
            document.getElementById("signatureImage").value = signaturePad.toDataURL();
            alert("Signature saved!");
        });
        </script>

      <?php } ?>
</body>
</html>