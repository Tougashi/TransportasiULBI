<script>
    $().ready(function() {
        var HOST = "{{ route('upload-image-body') }}";

        addEventListener("trix-attachment-add", function(event) {
            if (event.attachment.file) {
                uploadFileAttachment(event.attachment)
            }
        })

        function uploadFileAttachment(attachment) {
            uploadFile(attachment.file, setProgress, setAttributes)

            function setProgress(progress) {
                attachment.setUploadProgress(progress)
            }

            function setAttributes(attributes) {
                attachment.setAttributes(attributes)
            }
        }

        function uploadFile(file, progressCallback, successCallback) {
            var formData = createFormData(file);

            $.ajax({
                url: HOST,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': getMeta('csrf-token'),
                },
                data: formData,
                processData: false,
                contentType: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();

                    // Upload progress
                    xhr.upload.addEventListener("progress", function(event) {
                        if (event.lengthComputable) {
                            var progress = (event.loaded / event.total) * 100;
                            progressCallback(progress);
                        }
                    });

                    // On load
                    xhr.addEventListener("load", function(event) {
                        if (xhr.status === 200) {
                            var attributes = {
                                url: xhr.responseText,
                                href: xhr.responseText +
                                    "?content-disposition=attachment",
                            };
                            successCallback(attributes);
                        } else {
                            errorCallback(xhr.statusText);
                        }
                    });

                    return xhr;
                },
                success: function(response) {
                    $('#bodyImageField').val(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    console.log(xhr.responseText);
                },
            });

        }

        function createFormData(file) {
            var data = new FormData()
            data.append("Content-Type", file.type)
            data.append("file", file)
            return data
        }

        function getMeta(metaName) {
            const metas = document.getElementsByTagName('meta');

            for (let i = 0; i < metas.length; i++) {
                if (metas[i].getAttribute('name') === metaName) {
                    return metas[i].getAttribute('content');
                }
            }

            return '';
        }
    });
</script>
