$("#large").elevateZoom({
    gallery:'gal',
    galleryActiveClass: 'active',
    imageCrossfade: true,
    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif',
    zoomType				: "inner",
    cursor: "crosshair",
    scrollZoom: true
    }
);

//pass the images to Fancybox
$("#small").bind("click", function(e) {
    var ez =   $('#large').data('elevateZoom');
    $.fancybox(ez.getGalleryList());
    return false;
});
