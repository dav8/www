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
		<p>Answer these questions correctly!</p>
		<br />
		<p>Good Luck... </p>
		<hr />
			
		<form action="quizanswer2" method="get">
			<label for="answer1"> Question #1 - What is the meaning of life? </label>
			<input type="text" name="answer1" id="answer1" >
			<br />
			<label for="answer2"> Question #2 - What planet are we on? </label>
			<input type="text" name="answer2" id="answer2" >
			<br />
			<label for="answer3"> Question #3 - What Country are we in?</label>
			<input type="text" name="answer3" id="answer3" >
			<br />
			<label for="answer4"> Question #4 - What language do we speak here?</label>
			<input type="text" name="answer4" id="answer4" >
			<br />
			<label for="radio1"> Do you prefer Apples or Oranges?</label>
			<input type="radio" name="fruit" value="Apples"> Apples
			<input type="radio" name="fruit" value="Oranges"> Oranges
			<br />
			<label for="carlist"> What Brand of Vehicle do you drive? </label>
			<select>
				<option value="ford">Ford</option>
				<option value="honda">Honda</option>
				<option value="bmw" selected>BMW</option>
				<option value="mercedes">Mercedes-Benz</option>
				<option value="hyundai">Hyundai</option>
			</select>
			<br />
			<button> Submit </button>
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
