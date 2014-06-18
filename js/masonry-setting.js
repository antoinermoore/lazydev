/* 
 * Masonry setting for footer
 */


jQuery(document).ready(function($){
    $('#footer-widgets').masonry ({
        columnWidth: 400,
        itemSelector: '.widget',
        isFitWidth: true,
        isAnimated: true
    }); 
});