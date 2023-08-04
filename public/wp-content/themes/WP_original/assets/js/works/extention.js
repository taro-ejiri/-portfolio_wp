$(document).ready(function() {
	// ウインドウの横幅を取得し、「windowWidth」に代入
	var windowWidth = $(window).width();
	if(windowWidth <= 768) {
		var $grid = $('.grid').masonry({
			itemSelector: '.itembox',
			columnWidth: 120,
		});
	} else {
		var $grid = $('.grid').masonry({
			itemSelector: '.itembox',
			columnWidth: 15,
		});
	}
	//class「filter-button」を持つ要素の子要素「li」に対して指定した回数を繰り返し処理
	$('.filter-button li').each(function() {
		$(this).on('click', function() {
			$('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
			var buttonName = $(this).attr('id');
			var className = '.' + buttonName;
			
			if(buttonName == 'all') {
				$('.itembox').show();
			} else {				
				$('.itembox:not(' + className + ')').hide();
				$(className).show();
			}
			$grid.masonry('layout');
		});
	});
});