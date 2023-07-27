<?php 
	require 'php/connect.php';

	if (isset($_POST['send'])) {



	$komments = R::dispense('komments');
	$komments->name = $_POST['name'];
	$komments->comment  = $_POST['comment'];

	R::store($komments);
	header('location: /');
		};
	// print_r('$name', '$com');
	//  $sql = "INSERT INTO form ('id', 'name', 'comment');
	//  VALUES ('$name', '$com')";

	//   if ($mysqli->query($sql) === TRUE) {
	//   	echo "Все окей!";
	//   }
	//   else {
	//   	echo "пздц";
	//   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<script src="jquery.js"></script>
	<script src="js.js"></script>
	<title>Document</title>
</head>
<body>
	<div class="back_nav"></div>
	<nav class="nav">
					
					<img src="Снимок.png" alt="" class="nav_photo">
					
	
		<ul>
			<li><a href="index.php" class="a_nav">Главная</a></li>
			<li><a href="" class="a_nav">|</a></li>
	

			<li><a href="pages/news.html" class="a_nav">Новости сайта</a></li>
					<li><a href="" class="a_nav">|</a></li>
			<li><a href="pages/contact.html" class="a_nav">Контакты</a></li>
					<li><a href="" class="a_nav">|</a></li>
			<li><a href="pages/gallery.html" class="a_nav">Полезная информация</a></li>
		</ul>
	</nav>
	<div class="sidenav">
 
  <a href="#about">Легкие работы</a>
  <div class="small_nav">
  <a href="pages/fox.html">Лиса</a>
  <a href="pages/cat.html">Кошка</a>
  <a href="pages/heart.html">Сердце</a>
  <a href="pages/mouse.html">Мышка</a>
  <a href="pages/cup.html">Стаканчик</a>
  </div>
  <a href="#services">Средние работы и посложнеее</a>
  <div class="small_nav">
  <a href="pages/penguin.html">Пингвин</a>
  <a href="pages/tiger.html">Тигр</a>
  <a href="pages/swan.html">Лебедь</a>
  <a href="pages/crab.html">Краб</a>
  <a href="pages/frog.html">Лягушка</a>
  <a href="pages/crane.html">Журавлик</a>
  </div>
  <a href="#clients">Скрапбукинг</a>
</div>

  <div class="star">
<div id="rating">
	<p class="rat_text">Оцените наш сайт</p>
    <div class="rating">

  <input type="radio" id="star-1" name="rating" value="1">
  <label for="star-1" title="Оценка «5»"></label>

  <input type="radio" id="star-2" name="rating" value="2">
  <label for="star-2" title="Оценка «4»"></label>

  <input type="radio" id="star-3" name="rating" value="3">
  <label for="star-3" title="Оценка «3»"></label>

  <input type="radio" id="star-4" name="rating" value="4">
  <label for="star-4" title="Оценка «2»"></label>

  <input type="radio" id="star-5" name="rating" value="5">
  <label for="star-5" title="Оценка «1»"></label>

</div>
</div>
</div>
  <div class="main">
  	<h1>Добро пожаловать на наш сайт!</h1>
<h3>Здесь Вы научитесь делать поделки из бумаги и оригинально оформлять альбомы при помощи подробных схем с описанием. <br><br>
Также Вы сможете найти полезные материалы, делиться своими работами, узнавать новую информацию и получать ответы на интересующие вопросы.<br><br>
Желаю творческих успехов!</h3>
<!-- 	<img src="img/origami_gifka.gif" alt="" class="main_photo"> -->
<img src="img/back.jpg" alt="" class="main_photo" >



<div class="com-block">
	<!-- сам комментарий -->
	<form action="" method="post">
<div class="comment">
	<p>
		<input type="text" name="name" id="name"placeholder="Введите имя" required/>
	</p>
	<p>
		<textarea name="comment" id="comment" placeholder="Оставьте комментарий" required/></textarea>
	</p>
	<p>
		<button type="submit" id="submit" name="send">Отправить</button>
	</p>
	</form>
</div>

	<!-- сам комментарий -->
<?php
	$komen = mysqli_query($con, "SELECT * FROM `komments` ORDER BY 'id'");
?>
<?php
	 while($kom = mysqli_fetch_assoc($komen)) { ?>
<!-- блок отзывов -->
<div class="com_form">
	<div class="com_el">
		<p class="com_el_text" style="color: gray;"><?= $kom['name'];?></p>
	</div>
	<div class="com_el">
		<p class="com_el_text" style="color: #363636;"><?= $kom['comment'];?></p>
	</div><br>

</div>
<?php
	}
?>

<!-- блок отзывов -->	
</div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</body>
</html>