<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<link rel="StyleSheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
		<style type="text/css">
			.hero-unit {
				padding-top:10px;
				padding-bottom:5px;
			}
		</style>
	</head>

	<body>
		<div class="navbar navbar-static-top navbar-inverse">
			<div class="navbar-inner">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			
				<a class="brand" href="/">cForum</a>
				
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li><a href="/">Home</a></li>
						<li><a href="/kodi">For Kodi :)</a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<div class="hero-unit"> <?php $this->load->view($content); ?> </div>
	</body>
</html>