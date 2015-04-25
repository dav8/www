<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function() {
		});
	</script>
</head>

<body>
	<div id="header">
		<p>Header..</p>
	</div>
	<div id="content">
		<p>Your results!</p>
		<br />
		<?php
			$correct=0;
			if ($_GET['answer1'] == '42') {
				$correct++;
			}
			if ($_GET['answer2'] == 'earth') {
				$correct++;
			}
			if ($_GET['answer3'] == 'canada') {
				$correct++;
			}
			if ($_GET['answer4'] == 'english') {
				$correct++;
			} else if ($_GET['answer4'] == 'french') {
				$correct++;
			}

			echo("You got $correct Questions Correct!");
		?>
		<br />
		<?php
			if ($correct>=2) {
				echo('<p class="win">Success!</p>');
			} else {
				echo('<p class="fail">Fail!</p>
					<br />
					<a href="Quiz"> Click Here to Retry the Quiz!</a>');
			}
		?>
	</div>
	<div id="footer">
		<a href="index"> Link back to Home</a>
		<br />
		<a href="login"> Login Here!</a>
		<br />
		<a href="page2"> page 2 </a>
		<br />
		<a href="page3"> page 3 </a>
	</div>
</body>
</html>
