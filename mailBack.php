<?php
    session_start();
	/*$_SESSION['user'];*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mail result</title>
	<link rel="stylesheet" type="text/css" href="OstapukCurs.css">
	<script async="" type="text/javascript" src="http://yandex.st/jquery/2.0.3/jquery.js"></script>
	<script src="jquery.js" type="text/javascript"></script>
	<script src="jquery.maskedinput.min.js" type="text/javascript"></script>
    </head>
	<body>
    <header>
	<div id="tit">
	<a class="title" href="index1.php"><p class="title"><span id="decor">Декор</span><span id="stroy">Строй</span></p></a>
	</div>
	
<div id="phone1">
	<div class="headernum">
	<img id="icon0" src="pics/icon1.png" alt="phoneicon">
	<p id="number1"><a class="number1" href="tel:+375292083282">+375 16 427-40-40</a></p>
	</div>
	
	<div class="regtit">
	<!---<a class="open-popup" id="regtit1" href="#authmodal">Авторизоваться</a> / <a class="open-popup2" id="regtit2" href="#regmodal">Зарегистрироваться</a>--->
	<?php
	if ($_SESSION['user']==='false') {
	?>
    <a href="exit.php" class="hidden">Вход</a>
	<?php
	}else{?>
	<p class="logout"><span id="hello" class="logout">Привет, <?=$_SESSION['user']['name']?></span><a href="exit.php" class="logout">Выйти</a>
	</p>
	<?php
	}?>
	
	</div>
	</div>
	
	
    </header>
    
    <nav>
    <div id="navigation">
	<ul class="topmenu">
		<li class="two"><a class="mainmenu" href="index2.php" >Каталог</a></li>
		<li class="three"><a class="mainmenu" href="index3.php" >Колеровка краски</a></li>
		<li class="four"><a class="mainmenu" href="index4.php" >Контакты</a></li>
		<li class="invisible"><button type="button" class="btn btn-primary regtit" data-toggle="modal" data-target="#cart-modal">Корзина <span class="badge badge-light">3</span></button></li>
	</ul>
    </div>
    </nav>

   
    
	<div id="article">
	<div class="contKoler">
	<div class="result">
	
	<?php
	$mail= $_POST['email'];
	$message= $_POST['message']; 
	
	if($_SESSION['user']==='false') {
	echo "Пожалуйства вернитесь обратно и авторизуйтесь.";
	}else
	{
	$cl_fb = $_SESSION['user']['id'];
	$name=$_SESSION['user']['name'];
	$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
	$mysqli->query("SET NAMES 'UTF8'");
	$mysqli->query("INSERT INTO `order_feedback` (`client`, `mail`, `text_message`) VALUES ('$cl_fb', '$mail', '$message')");
	echo "<b>Спасибо за сообщение, $name! </b><br><br>Наши менеджеры в ближайшее время ответят вам.";	
	}?>

	</div>
	</div>
	</div>   
   <footer>
	<div id="foot1">
	<p>© 2022 Oksana Ostapuk</p>
	</div>
	<div id="foot2">
	<p class="foot">ЧТУП "ШопСтрой"</br>
	225306, Брестская обл., г. Кобрин, ул. Дзержинского 1А</br>
	+375 16 427-40-40<br>
	<a class="igicon" href="https://www.instagram.com/dekorstroy_kobrin/"><img class="igicon" src="pics/igicon.png" alt="instaramcon"></a></p>
	</div>
  </footer>
    
	</body>
</html>

