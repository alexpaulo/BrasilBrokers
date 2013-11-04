$(function(){

	//footerBar:
		function getFooterInfo(){
			var footerElement = $('#footer'),
				headerElementHeight = $('#header').height(),
				footerHeight = footerElement.height(),
				footerOffsetTop = footerElement.offset().top,
				windowHeight = $(window).height(),
				footerBarFixed = $('#bottomBar_footer');

			$(window).scroll(function(){
				var getScrollPosition = $(window).scrollTop();
				actionIF002(getScrollPosition);
			});
			function actionIF002(getScrollPosition){
				if( getScrollPosition > headerElementHeight ){
					footerBarFixed.stop(true, false).animate({'bottom':'0%'}, 1000);
				}else{
					footerBarFixed.stop(true, true).animate({'bottom':'-100%'}, 1000);
				}
			}
		}
		getFooterInfo();
	//footerBar-fim

});