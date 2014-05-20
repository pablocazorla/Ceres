// Ceres
;(function(){
	var $window,$menuLink,$frame,$postLink,

	ceres = {
		init : function(){
			$frame = $('#frame')
			$menuLink = $('#menu-principal a');
			$postLink = $('.post-link');






			return this
			.ajaxLoader();
		},
		ajaxLoader : function(){
			$menuLink.click(function(e){
				e.preventDefault();
				var currentURL =window.location.href,
					cat = $.trim($(this).text().toLowerCase()),
					cl = 'list '+cat,
					url = $(this).attr('href');
					
				if(url != currentURL){
					var $container = $('.panel.list.'+cat+' .panel-content').html('');
					if($frame.hasClass('menu-min')) cl += ' menu-min';
					$frame.removeClass().addClass(cl);

					$.ajax({
						url: url+'?async=1',
						cache: false,
						success : function(data){
							$container.html(data);
						},
						error : function(){
							window.location.href = url;
						},
						complete : function(){
							window.location.href = url;
						}
					});
				}
				
			});
			$postLink.click(function(e){
				e.preventDefault();
				var cat = $(this).attr('rel'),
					cl = 'post '+cat,
					url = $(this).attr('href'),
					$container = $('.panel.post.'+cat+' .panel-content').html('');

				if($frame.hasClass('menu-min')) cl += ' menu-min';
				$frame.removeClass().addClass(cl);

				$.ajax({
					url: url+'?async=1',
					cache: false,
					success : function(data){
						$container.html(data);
					},
					error : function(data){
						console.log(data);
					},
					complete : function(){
						window.location.href = url;
					}
				});


			});
			return this;
		}





















	}
	$('document').ready(function(){ceres.init();});
})();