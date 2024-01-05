<footer class="main-footer h-auto text-right">
    <strong>Copyright &copy; <span id="thisYear"></span> <a href="{{url()->current().'#'}}" class="text-orange fw-bolder">Transportasi ULBI</a>.</strong>
    All rights reserved.
</footer>
@push('scripts')
    <script>
        const date = new Date().getFullYear();
        $('#thisYear').text(date);
    </script>
@endpush
