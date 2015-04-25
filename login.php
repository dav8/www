<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login / Register</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function() {
		});
	</script>
</head>

<body>
	<div id="header">
		<p>Header</p>
	</div>
	<div id="content">
		<form action="processlogin" method="get"> 
			Username: <input type="text" name="username" id="username" >
			<button> Login </button>
			<br />
			Password: <input type="password" name="password" id="password" >
			<br />
			<a href="index"> Forgot Password? </a>
			
		</form>
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
