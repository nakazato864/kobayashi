/**
 * File navigation.js.
 */

var widthFlag = ''; // ページ幅判定フラグ

function mediaQueriesWin(){
	var width = $(window).width();
	if(width < 1024  && widthFlag != 'sp'){
		widthFlag = 'sp';
		$("#masthead .btn_menu").click(function () {
			$(this).toggleClass('active');
			$("#masthead").toggleClass('panelActive');
			$("#site-navigation").slideToggle();
			return false;
		});
	} else if(width >= 1024  && widthFlag != 'pc') {
		widthFlag = 'pc';
		$("#site-navigation").removeAttr('style');
	}
}

$(window).on('load resize',function(){
	mediaQueriesWin();
});
