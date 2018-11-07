$(document).ready(function(){
    
    var s1 = $('#s1');
    var s2 = $('#s2');
    
    s1.owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        dots:false,
        items:1,
        // autoplay:true,
        deltaY:5000
       /* responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            960:{
                items:3
            },
        }*/
    });
    function dynamicText(){
        var title = $('.owl-item.active .item').find(".dynamic-text-title").text();
        var text  = $('.owl-item.active .item').find('.dynamic-text-content').text();

        $('.dynamic-text .dynamic-text-title').text(title);
        $('.dynamic-text .dynamic-text-content').text(text);
    }

    s2.owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        items:1,
        navContainer: '.s-nav',
        onTranslated: function() {
            dynamicText();
        },
        onInitialized: function() {
            dynamicText();
        }
    });


});