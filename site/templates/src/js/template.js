/**
 * Created by vladimirlozkin on 07.09.18.
 */
$(document).ready(function() {
    $(window).scroll(function(){
        if ($(this).scrollTop()>500) {
            $('#menu').addClass('active');
        }
        else {
            $('#menu').removeClass('active');
        };
    });

    $('.js-input').on('focus focusout', function(e) {
        e.preventDefault();
        $(e.target).parent().toggleClass('is_focused');
        if (e.type="focus") {
            $(e.target).parent().removeClass('error');
        }
        if(e.type == 'focusout') {
            $(e.target).val($.trim($(e.target).val()));
        }
    });
    $('.js-input').on('change keyup', function(e) {
        e.preventDefault();
        if($.trim($(e.target).val()) !== '' && !$(e.target).hasClass('is_filled')) {
            $(e.target).parent().addClass('is_filled');
        } else {
            $(e.target).parent().removeClass('is_filled');
        }
    });
    $('.js-phone').on('focusout', function(e) {
        e.preventDefault();
        var val = $(this).val().replace(/[^0-9]/gi,'');
        if(val.substr(0, 1) == 7) {
            val = '+7' + val.substr(1, val.length - 1);
        }
        $(this).val(val);
    });
});