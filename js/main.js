$(function(){
	$("#navigation.main-nav>li").mouseenter(function(){
		var li = $(this);
		$('.open').removeClass('open').find('.subMenu').hide();
		li.addClass('open');
		li.find('.subMenu').fadeIn('fast');
	}).mouseleave(function(){
		$(this).removeClass('open').find('.subMenu').fadeOut('fast');
	});
});