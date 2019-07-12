jQuery(document).ready(function($) {

var url = wnm_custom.template_url;
var home_url = wnm_custom.url
var ajaxurl = home_url + '/wp-admin/admin-ajax.php';

$("form.submit").submit(function (e){
        e.preventDefault();
        
        var name = $(this).find('input#name').val();
        var phone =   $(this).find('input#tel').val();
        var spamFirst = $(this).find('textarea[name=comment]').val();
        var spamSecond = $(this).find('textarea[name=message]').val();
        $.ajax({
                type: "POST",
                url: ajaxurl,
                data: {
                    action: 'ajax_order',
                    name: name,
                    phone: phone,
                    spamFirst: spamFirst,
                    spamSecond: spamSecond
                },
                error: (function() {
                    $('.modal .value').html('Пожалуйста, проверьте правильность заполнение полей');
                    $('.modal .value').append('<span class="close">x</span>');
                }),
                beforeSend: (function (){
                    $('#loader').css({
                        display: 'block'
                    });
                    $('.overlay').addClass('on');
                }),
                complete: (function (){
                    $('#loader').css({
                        display: 'none'
                    });
                })
            }).done(function (data) {
                $('input#name').val('')
                $('input#tel').val('');
                $('.overlay').addClass('on');
                $('.modal .value').html('Благодарим за Ваше сообщение');
                $('.modal .value').append('<span class="close">x</span>');
                $('.modal').fadeIn( 100 ).addClass('show');
                $(document).mouseup(function (e){ 
                        var div = $('.modal.show .value');
                        if (!div.is(e.target)&& div.has(e.target).length === 0) {
                            $('.overlay').removeClass('on');
                            $('.modal').hide();
                            $('.modal').removeClass('show');
                        }
                });    
        });
        return false;
    });
});