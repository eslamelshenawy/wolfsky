(function($) {
	"use strict";
	function lemon_box_style(){
		
		var $linkStyle = $( 'link#lemon_preset-css' );
		$('.panel-primary-color').on('click', 'li', function(){
			$(this).addClass('active').siblings('.active').removeClass('active');
			var link_preset = $( this ).data( 'link' );
			$linkStyle.attr( 'href', link_preset );
			//console.log(link_preset);
		});
		
		var $bgStyle = $( '.section,.section-inverse,body' );
		$('.panel-primary-bg').on('click', 'li', function(){
			$(this).addClass('active').siblings('.active').removeClass('active');
			var link_bg = $( this ).data( 'link' );
			$bgStyle.attr( 'style', 'background: url('+link_bg+') repeat scroll center top;' );
			//console.log(link_preset);
		});

		$('.panel-selector-open').on('click', function(){
			$(this).parent().toggleClass('in');
		});
		
		$('#panel-style-selector .panel-select-homepage a').each(function(){
			$(this).hover(function(){
				var img_link = $(this).data('img');
				$('#panel-style-selector .demo-popup').show(500);
				$('#panel-style-selector .demo-popup').html('<img src="' + img_link + '" alt="">');
			},function(){
				$('#panel-style-selector .demo-popup').hide(200);
				$('#panel-style-selector .demo-popup').empty();
			});
		});
	}
	jQuery(document).ready( function(){
		lemon_box_style();
	});
	
})(window.jQuery);