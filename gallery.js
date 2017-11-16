jQuery(document).ready(function($) {

    $('.thumb-img a').click(function() {
        var thmb = this;
        var src = $(this).data('url');
        $('.featured-img').fadeOut(400,function(){
            thmb.src = this.src;
            $(this).fadeIn(400)[0].src = src;
        });
    });

});