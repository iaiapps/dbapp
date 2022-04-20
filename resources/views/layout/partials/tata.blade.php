<script src="{{ url('new_theme') }}/js/tata.js"></script>

@if (Session::has('success'))
    <script>
        tata.success("OK", "{!! Session::get('success') !!}")
    </script>
@endif
@if (Session::has('error'))
    <script>
        tata.error("Gagal", "{!! Session::get('error') !!}")
    </script>
@endif
@if (Session::has('warn'))
    <script>
        tata.warn("Maaf", "{!! Session::get('warn') !!}")
    </script>
@endif
@if (Session::has('info'))
    <script>
        tata.info('Info', "{!! Session::get('info') !!}", {
            animate: 'slide',
            closeBtn: false,
        })
    </script>
@endif
