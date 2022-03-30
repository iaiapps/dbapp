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
    @endpush
</div>
