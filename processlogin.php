 
 <html>
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>David's DEV Environment</title>
	<link rel="stylesheet" type="text/css" href="logonresult.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function() {
		});
	</script>
</head>

<body>
	<div id="header">
		<p>Header!</p>
	</div>
	<div id="content">
		<?php 
			if($_GET['username'] == 'david') { //if username is david
				if($_GET['password'] == '1234') { //if pass is 1234
					echo('Success!'); 
				} else {
					echo('Fail!'); 
				}
			} else {
				if($_GET['username'] == 'mitchell') { //if username is mitchell
					if($_GET['password'] == 'shawna') { //if pas is shawna
						echo('Success');
					} else {
						echo('Fail!');
					}
				} else {
					if($_GET['username'] == 'root') { //if username is mitchell
						if($_GET['password'] == 'david') { //if pas is shawna
							echo('Success');
						} else {
							echo('Fail!');
						}
					} else {
						if($_GET['username'] == 'james') { //if username is mitchell
							if($_GET['password'] == 'dunno') { //if pas is shawna
								echo('Success');
							} else {
								echo('Fail!');
							}
						} else {
							echo('Fail');
						}	
					}	
				}	
			} 
		?>
	</div>
	<div id="footer">
		<a href="index"> Link back to Home</a>
		<br />
	</div>
</body>
</html>
