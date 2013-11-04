$(function(){

	//headerBar:
		function getHeaderInfo(){
			var headerElement = $('#header'),
				headerHeight = headerElement.height(),
				headerOffsetTop = headerElement.offset().top,
				windowHeight = $(window).height(),
				headerBarFixed = $('#topBar_header');

			$(window).scroll(function(){
				var getScrollPosition = $(window).scrollTop();
				actionIF(getScrollPosition);
			});
			function actionIF(getScrollPosition){
				if( getScrollPosition <= (headerOffsetTop + headerHeight) ){
					headerBarFixed.stop(true, true).animate({'top':'-100%'}, 1000);
				}else if( getScrollPosition > (headerOffsetTop + headerHeight + 50) ){
					headerBarFixed.stop(true, false).animate({'top':'0%'}, 1000);
				}
			}
		}
		getHeaderInfo();
	//headerBar-fim

});

