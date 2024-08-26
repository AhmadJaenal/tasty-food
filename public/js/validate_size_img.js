function validateFileSizeAndPreviewImg() {
    const fileInput = document.getElementById('imgInput');
    const fileError = document.getElementById('file-error');
    const imgPreview = document.getElementById('img-preview');
    const maxSize = 2 * 1024 * 1024;

    if (fileInput.files && fileInput.files[0]) {
        const fileSize = fileInput.files[0].size;

        if (fileSize > maxSize) {
            fileError.style.display = 'block';
            imgPreview.style.display = 'none';
            fileInput.value = '';
        } else {
            fileError.style.display = 'none';

            const reader = new FileReader();

            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            };

            reader.readAsDataURL(fileInput.files[0]); 
        }
    }
}
