<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List User</title>
</head>
<body>
	<h1>List User</h1>
	<ul>
		<?php foreach($users as $user): ?>
			<li> <?php echo $user['name']; ?> </li>
		<?php endforeach; ?>
	</ul>
</body>
</html>