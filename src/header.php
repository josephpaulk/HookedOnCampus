<html>
	<head>
		<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="js/jqueryuicoverflow-ii/js/ui.coverflow.js"></script>
		<script type="text/javascript" src="js/jqueryuicoverflow-ii/js/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="js/jqueryuicoverflow-ii/js/app.js"></script>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/reset.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost:8888/HookedOnCampus/src/css/main.css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			$(function() {

				var demo = {

					yScroll : function(wrapper, scrollable) {

						var wrapper = $(wrapper), scrollable = $(scrollable), loading = $('<div class="loading">Loading...</div>').appendTo(wrapper), internal = null, images = null;
						scrollable.hide();
						images = scrollable.find('img');
						completed = 0;

						images.each(function() {
							if(this.complete)
								completed++;
						});
						if(completed == images.length) {
							setTimeout(function() {
								loading.hide();
								wrapper.css({
									overflow : 'hidden'
								});
								scrollable.slideDown('slow', function() {
									enable();
								});
							}, 0);
						}

						function enable() {
							var inactiveMargin = 99, wrapperWidth = wrapper.width(), wrapperHeight = wrapper.height(), scrollableHeight = scrollable.outerHeight() + 2 * inactiveMargin, wrapperOffset = 0, top = 0, lastTarget = null;

							wrapper.mousemove(function(e) {
								lastTarget = e.target;
								wrapperOffset = wrapper.offset();
								top = (e.pageY - wrapperOffset.top) * (scrollableHeight - wrapperHeight) / wrapperHeight - inactiveMargin;
								if(top < 0) {
									top = 0;
								}
								wrapper.scrollTop(top);
							});
						}

					}
				}

				demo.yScroll('#scroll-pane', 'ul#sortable');

			});

		</script>
	</head>
	<body>
		<div id="header">
			<h1>HookedOnCampus</h1>
			<?php
			include ("views/login.php");
			?>
		</div>
