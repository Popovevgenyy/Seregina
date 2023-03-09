<a href="../index.html">На главную</a><br>
<?php
session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " товаров";
}

require_once "db.php";


$query = "SELECT * FROM piano";
$req = mysqli_query($connection, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
	$data_from_db[] = $result;
}

# var_dump($data_from_db);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Заказ</title>
	<link rel="stylesheet" href="css/style.css">
</head>



<body>

	<h1>Выберите товары, которые хотите приобрести</h1>

	<div id="center">

		<?php foreach($data_from_db as $course_item): ?>

		<div class="course_item">
			<h2>
				<?php echo $course_item['title']?>
			</h2>

			<p>
				<?php echo $course_item['decsription']?>
			</p>

			<p><strong>
				<?php echo $course_item['price']?> рублей
			</strong></p>

			<a href="single.php?id=<?php echo $course_item['id']?>">
				Подробнее
			</a>

			<a href="cart.php?course_id=<?php echo $course_item['id']?>">
				В корзину
			</a>
		</div>
		
		<?php endforeach;?>

	</div>

</body>
</html>