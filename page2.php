<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Page Two of DEV Site</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function() {
		});
	</script>
</head>

<body>
	<div id="header">
		<p>This is a test header..</p>
	</div>
	<div id="content">
		<?php
			echo("blah ");
			echo($_GET['username']);
			
		?>
	</div>
	<div id="footer">
		<a href="index"> Link back to Home</a>
		<br />
		<a href="page2"> page 2 </a>
		<br />
		<a href="page3"> page 3 </a>
	</div>
</body>
</html>

