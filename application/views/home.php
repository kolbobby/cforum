<style type="text/css">
	h1 {
		display:none;
	}
	
	#unlock-confirm {
		float:right;
		border-left:1px solid #CCC;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$('#unlock-confirm').css({ 'width':$('#unlock-switch').width(), 'height': $('#unlock-confirm').parent('div').height() });
		$('#unlock-switch').draggable({
			axis: "x", 
			containment: "parent", 
			stop: function(event, ui) {
				var size = $(this).parent('div').width();
				if(size - ui.position.left == $(this).width())
					unlock_site();
				else
					$(this).animate({ 'left': 0 });
			}
		});
	})
	
	function unlock_site() {
		$(document).ready(function() {
			$('#unlock-confirm').css({ 'border-left': '1px solid green' });
			$('#unlock-switch').slideUp();
			$('#unlock-confirm').slideUp();
			$('h1').delay(400).slideDown();
		})
	}
</script>
<h1>Welcome to cForum!</h1>
<div><span id="unlock-switch" class="ui-widget-content">Slide to the right to unlock!</span><div id="unlock-confirm"></div></div>