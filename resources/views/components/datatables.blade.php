<div>
    @push('foot')
        <script src="{{ url('new_theme') }}/assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="{{ url('new_theme') }}/assets/datatables/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable({
                    "lengthChange": false,
                    "pageLength": 100,
                    // "lengthMenu": [
                    //     [10, 25, 50, -1],
                    //     [10, 25, 50, "All"]
                    // ]
                });
            });
        </script>

        <script>
            $(function() {
                $('.date-picker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    dateFormat: 'MM yy',
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });
            });
        </script>
    @endpush
</div>
