document.addEventListener('DOMContentLoaded', function () {
    var galleryElement = document.querySelector('.lightgallery');
    if (galleryElement) {
        lightGallery(galleryElement, {
            selector: '.gallery-item' // Selector for individual gallery items
        });
    }
});