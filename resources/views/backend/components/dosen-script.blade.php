<script>
    let jumlahInput = 1;
    let inputValue = [];
    $('#appenderInput').on('click', function(){
        jumlahInput++;
        $('#riwayatPendidikan').append(`
        <input type="text" name="" class="form-control mb-2" id="riwayatPendidikanInput${jumlahInput}"
                      placeholder="Riwayat Pendidikan" required>
        `);
    });

    function cekInput(){
        for(let i=0; i<=jumlahInput; i++)
        {
            let input = $(`#riwayatPendidikanInput${i}`).val();
            if(input){
                if(inputValue.includes(input)){
                    inputValue = [];
                }
                inputValue.push(input);
            }
        }
        $('#riwayat').val(JSON.stringify(inputValue));
    }

    $('#submitBtn').on('click', function(){
        cekInput();
    });
</script>
