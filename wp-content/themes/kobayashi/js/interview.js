// tab
function gethashID (hashIDName){
	if(hashIDName){
		//タブ設定
		$('.interview_tab li').find('a').each(function() {
			var idName = $(this).attr('href');
			if(idName == hashIDName){
				var parentElm = $(this).parent();
				$('.interview_tab li').removeClass("active");
				$(parentElm).addClass("active");
				//表示させるエリア設定
				$(".interview_wrapper").removeClass("is_active");
				$(hashIDName).addClass("is_active");
			}
		});
	}
}

//tab click
$('.interview_tab a').on('click', function() {
	var idName = $(this).attr('href');
	gethashID (idName);
	return false;
});
