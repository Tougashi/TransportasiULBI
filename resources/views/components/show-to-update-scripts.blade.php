<script>
    let formTitle = $('#formTitle').text();

    if(formTitle === 'Detail'){
        $('form input').attr('readonly','readonly');
    }

    function removeReadonly(){
        $(window).scrollTop(0);
        $('form input').removeAttr('readonly');
        $('#submitBtn').removeAttr('onclick');
        $('#submitBtn').text('Simpan');
        $('#bodyValue').hide();
        $('#trixField').removeClass('d-none');
        infoToasts('Anda sedang berada di Mode edit data');
    }

    function changeMode(event){
        event.preventDefault();
        $('#formTitle').text('Edit');
        setTimeout(() => {
            removeReadonly();
        }, 1000);

    }
</script>
