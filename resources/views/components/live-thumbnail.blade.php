<script>
    // $('#judulArtikel').on('input', function() {
    //     const titleVal = $(this).val().toLowerCase();
    //     const titleValSlugged = titleVal.split(' ').join('-');
    //     $('#slugArtikel').val(titleValSlugged);
    // });

    $('#thumbnailInput').on('change', function() {
        const thumbnailPreview = $('#thumbnail');
        const image = $('#thumbnailInput').prop('files');

        const reader = new FileReader();
        reader.readAsDataURL(image[0]);
        reader.onload = function(e) {
            const previewThumbnailTemplate =
                `<img src="${e.target.result}" alt="" class="w-100 h-100 p-0 m-0">`
            $('#thumbnail').empty().append(previewThumbnailTemplate);
        }

    });
</script>
<x-post-article-image url="{{ '/admin/article/upload/image' }}" />
