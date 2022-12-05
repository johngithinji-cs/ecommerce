<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register a New User</title>
</head>
<body>
    <?php echo form_open('user/newUser');?>
	<p>
		Enter your name<?php echo form_input('name','','class="myclass"');?>
	</p>
	<?php form_close();?>
</body>
</html>
