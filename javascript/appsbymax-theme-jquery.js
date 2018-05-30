jQuery(document).ready(function(){
	// masonry.js
	var $grid = jQuery('.grid').imagesLoaded(function(){
			$grid.masonry({
			// options
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true
		});

	});
   

});