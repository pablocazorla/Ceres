// Ceres
;(function(){
	var $window,$frame,$postLink,

	ceres = {
		init : function(){
			$window = $(window);
			$frame = $('#frame');

			return this
			.headerMain();
		},
		headerMain : function(){
			$('.get-header').click(function(){
				$frame.toggleClass('open-header');
			});
			return this;
		}





















	}
	$('document').ready(function(){ceres.init();});
})();