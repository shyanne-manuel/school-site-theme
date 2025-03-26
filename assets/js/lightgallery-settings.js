document.addEventListener('DOMContentLoaded', function () {
    var galleryElement = document.querySelector('.wp-block-gallery'); // Target WordPress Gallery block
    if (galleryElement) {
        lightGallery(galleryElement, {
            selector: 'img', // Target links inside the gallery
            download: false // Disable the download button (optional)
        });
    }
});