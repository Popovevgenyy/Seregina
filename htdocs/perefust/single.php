<?php 
session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товаров";
}

require_once "db.php";

if ( isset($_GET['id']) ) {
	$query = "SELECT * FROM piano WHERE id=" . $_GET['id'];

	$req = mysqli_query($connection, $query);
	$current_course = mysqli_fetch_assoc($req);
	// var_dump($current_course);

	if (empty($current_course)) {
		header("Location: 404.php");
	}
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="../index.html">Главная</a>

	<h1>
		<?php echo $current_course['title']?>
	</h1>

	<p>
		<?php echo $current_course['decsription']?>
	</p>

	<p><strong>
		<?php echo $current_course['price']?> рублей
	</strong></p>

	<a href="order.php?title=<?php echo $current_course['title']?>">Купить в 1 клик</a>
	<br>
	<a href="cart.php?course_id=<?php echo $current_course['id']?>">Добавить в корзину</a>

	
</body>
</html>