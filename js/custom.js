jQuery(document).ready(function($) {
    width = $(window).width();
    height = $(window).height();
    if( width > 1024 ){
        $('.more').on('mouseover',function(){
            $(this).find('div.d-none').removeClass('d-none').addClass('d-flex');
        });
        $('.more').on('mouseout',function(){
            $(this).find('div.desc').removeClass('d-flex').addClass('d-none');
        });
    }
    if( width <= 1024 ){
        $('.more').on('click',function(){
            $(this).find('div.desc').toggleClass('d-none');
        });
    }
    $(document).on("click","a.down", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
    $('.fancybox').fancybox();
    $(window).scroll(function() {
        if( $(this).scrollTop() > 400 ){
            $("#toTop").css({'display': 'block'});
        }
        else{
            $("#toTop").css({'display': 'none'});
        }
    });
    $(document).on('click', '.modal .value .close', function(){
       $('.modal').hide();
       $('.modal').removeClass('show');
       $('.overlay').removeClass('on');
    });
    $('.burger').on('click', function(){
        $('.menu').toggleClass('d-flex');
    });
});
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
