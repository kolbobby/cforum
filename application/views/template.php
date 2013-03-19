<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<style type="text/css">
			.hero-unit {
				padding-top:10px;
				padding-bottom:5px;
			}
			
			.footer {
				width:90%;
				margin-left:5%;
				margin-right:5%;
				border-top:1px solid #CCC;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#unlock-switch').draggable({ axis: "x", containment: "parent" });
			})
		</script>
	</head>

	<body>
		<?php include_once "includes/navigation.php"; ?>
	
		<div class="hero-unit"> <?php $this->load->view($content); ?> </div>
		
		<?php include_once "includes/footer.php"; ?>
	</body>
</html>