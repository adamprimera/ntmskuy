<!-- Scripts JS -->
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>

<!-- Datatable Simple JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->

<!-- Datatable JS  -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


<!-- Litepicker Bundle JS -->
<script src="<?= base_url(); ?>assets/vendor/litepicker/litepicker.bundle.js"></script>

<!-- Litepicker Mobile Friendly -->
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>

<!-- Litepicker Script JS -->
<script src="<?= base_url(); ?>assets/vendor/litepicker/litepicker.js"></script>

<!-- PickerJS Script JS -->
<script src="<?= base_url(); ?>assets/vendor/pickerjs/picker.min.js"></script>

<script>
    function litepickerSingle(el) {
        const input = el[0];
        if (input) {
            const picker = new Litepicker({
                element: input,
                plugins: ['mobilefriendly'],
                mobilefriendly: {
                    breakpoint: 480,
                }
            });
        }
    }
</script>