<div class="row d-flex justify-content-center">
    <div class="col-lg-2 col-md-3 col-3 me-lg-3 col-1">
       <a href="https://www.facebook.com/sharer.php?u={{ urlencode(url()->current()) }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-facebook me-2"></i> <span class="d-lg-block d-none">Share</span>
            </div>
        </a>
    </div>
    <div class="col-lg-2 col-md-3 col-3 me-lg-3 col-1">
        <a href="https://twitter.com/share?url={{ url()->current() }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-twitter me-2"></i> <span class="d-lg-block d-none">Tweet</span>
            </div>
        </a>
    </div>
    <div class="col-lg-2 col-md-3 col-3 me-lg-5 col-1">
        <a href="https://api.whatsapp.com/send?text={{ url()->current() }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-whatsapp me-2"></i> <span class="d-lg-block d-none">WhatsApp</span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-3 ms-lg-4 col-3" id="copyLinkWrapper">
        <a href="#">
            <div class="d-flex align-items-center mobile-text" id="copyLink">
                <i class="fa-solid fa-share me-2"></i> <span class="d-lg-block d-none">Salin Tautan</span>
            </div>
        </a>
    </div>
</div>

@push('scripts')
    <script>
        const text = '{{url()->current()}}';

        $('#copyLinkWrapper').on('click', function(){
            navigator.clipboard.writeText(text);
            alert('Tautan telah disalin');
        });

    </script>

@endpush

