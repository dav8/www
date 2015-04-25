 <?php 
	if(($_GET['username'] == 'david'    && $_GET['password'] == '1234') 
	|| ($_GET['username'] == 'mitchell' && $_GET['password'] == 'shawna') 
	|| ($_GET['username'] == 'james'    && $_GET['password'] == 'idontevenknow')) {
		echo('Success!'); 
	} else {
		echo('Fail!');
	}