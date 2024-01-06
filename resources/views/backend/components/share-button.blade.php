<div class="row d-flex justify-content-center">
    <div class="col-2 me-lg-2 me-sm-3">
       <a href="https://www.facebook.com/sharer.php?u={{ urlencode(url()->current()) }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-facebook me-2"></i> Share
            </div>
        </a>
    </div>
    <div class="col-2 me-lg-2 me-sm-6">
        <a href="https://twitter.com/share?url={{ url()->current() }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-twitter me-2"></i> Tweet
            </div>
        </a>
    </div>
    <div class="col-2 me-lg-5 me-sm-5">
        <a href="https://api.whatsapp.com/send?text={{ url()->current() }}">
            <div class="d-flex align-items-center mobile-text">
                <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp
            </div>
        </a>
    </div>
    <div class="col-4" id="copyLinkWrapper">
        <a href="#">
            <div class="d-flex align-items-center mobile-text" id="copyLink">
                <i class="fa-solid fa-share me-2"></i> Salin Tautan
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

