$(document).ready(function(){
    $('#upload-form').submit(function(e){
        e.preventDefault(); // Mencegah reload halaman

        var formData = new FormData(this); // ✅ otomatis support multi-file

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
