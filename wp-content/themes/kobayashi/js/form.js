// Contact Form 7
$(function () {
	$('.service_detail').insertAfter('.box_subject .wpcf7-list-item.first');
	$('.box_subject input').change(function() {
		if($('input[name=youken]:eq(0)').prop('checked')){
			if($('.service_detail').hasClass('close')){
				$('.service_detail').slideDown('500');
				$('.service_detail').removeClass('close').addClass('open');
			}
		} else {
			if($('.service_detail').hasClass('open')){
				$('.service_detail').slideUp('500');
				$('.service_detail').removeClass('open').addClass('close');
				$('.service_detail input[type="checkbox"]').removeAttr('checked').prop("checked", false).change();
			}
		}

	});
});
