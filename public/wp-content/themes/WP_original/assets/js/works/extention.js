$(document).ready(function() {
	// ウインドウの横幅を取得し「windowWidth」に代入
	var windowWidth = $(window).width();
	if(windowWidth <= 768) {
		var $grid = $('.p-archiveWorks__grid').masonry({
			itemSelector: '.p-archiveWorks__itembox',
			columnWidth: 120,
		});
	} else {
		var $grid = $('.p-archiveWorks__grid').masonry({
			itemSelector: '.p-archiveWorks__itembox',
			columnWidth: 15,
		});
	}
	//class「p-archiveWorks__filterBtn」を持つ要素の子要素「li」に対して指定した回数を繰り返し処理
    $('.p-archiveWorks__filterBtn').each(function() {
		$(this).on('click', function() {
			$('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
			var buttonName = $(this).attr('id');
			var className = '.' + buttonName;
			if(buttonName == 'all') {
				$('.p-archiveWorks__itembox').show();
			} else {
				$('.p-archiveWorks__itembox:not(' + className + ')').hide();
				$(className).show();
			}
			$grid.masonry('layout');
		});
	});
});