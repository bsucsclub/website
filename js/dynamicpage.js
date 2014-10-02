$(function() {

    if(Modernizr.history){

		var newHash = "",$mainContent = $("#main-content"),$pageWrap = $("#page-wrap"), baseHeight = 0,$el;
		$pageWrap.height($pageWrap.height());
		baseHeight = $pageWrap.height() - $mainContent.height();
		
		//update url so we can use back+forward browser buttons
		$("nav").delegate("a", "click", function() {
			_link = $(this).attr("href");
			history.pushState(null, null, _link);
			loadContent(_link);
			return false;
		});


		//fade out old page, fade in new page
		function loadContent(href){
			
			$mainContent.find("#guts").fadeOut(400, function() {
				$mainContent.hide().load(href + " #guts", function() {
				$mainContent.fadeIn(400, function() {
					$pageWrap.animate({
						height: baseHeight + $mainContent.height() + "px"
					});
				});
				
				
				//console.log(href);
				
				});
			});
		}
		

		$(window).bind('popstate', function(){
		   _link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
		   loadContent(_link);
		});

		} // otherwise, history is not supported, so nothing fancy here.

    
});
