<style type="text/css">
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
					$('#unlock-confirm').css({ 'border-right': '1px solid green' });
				else
					$(this).animate({ 'left': 0 });
			}
		});
	})
</script>
<h1>Welcome to cForum!</h1>
<div><span id="unlock-switch" class="ui-widget-content">This is draggable!</span><div id="unlock-confirm"></div></div>