<?php 
 echo "<link rel='stylesheet' href=css/style.css>"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Форма регистрации</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  
    <script src='main.js'></script>
   
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
<?php
if($_COOKIE['user'] == ''):
?>
        <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="phpform/check.php" method="post">
					<label for="chk" aria-hidden="true">Зарегистрироваться</label>
					<input type="text" name="login" id="login" placeholder="Ваш логин">
					<input type="text" name="name" id="name" placeholder="Ваше имя" >
					<input type="text" name="pass" id="pass" placeholder="Ваш пароль" >
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="phpform/auth.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="login" id="login" placeholder="Ваш логин" >
					<input type="text" name="pass" id="pass" placeholder="Ваш пароль" >
					<button type="submit">Login</button>
				</form>
			</div>
	</div>
    <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Что бы выйти нажмите <a href="phpform/exit.php">здесь</a>.</p>
<?php endif;?>
    </div>
    </body>
</html>