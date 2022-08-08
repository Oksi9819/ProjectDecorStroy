<?php
    session_start();
	/*$_SESSION['user'];*/
	$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
	$mysqli->query("SET NAMES 'UTF8'");
	require_once($_SERVER['DOCUMENT_ROOT'].'/Decor/functs.php');
	$reviews_print=get_reviews_toprint();
	$dfg=get_products(1);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main</title>
	<link rel="stylesheet" type="text/css" href="OstapukCurs.css">
	<link rel="stylesheet" type="text/css" href="popupstyle.css">
	<script src="jquery.js" type="text/javascript"></script>	
	<script src="jquery.maskedinput.min.js" type="text/javascript"></script>
    </head>
    
	<body>
    <header>
	<div id="tit" >
	<a class="title" href="index1.php"><p class="title"><span id="decor">Декор</span><span id="stroy">Строй</span></p></a>
	</div>
	<div>
	</div>
	<div id="phone1">
	<div class="headernum">
	<img id="icon0" src="pics/icon1.png" alt="phoneicon">
	<p id="number1"><a class="number1" href="tel:+375292083282">+375 16 427-40-40</a></p>
	</div>
	
	<div class="regtit">
	<a class="open-popup" id="regtit1" href="#authmodal">Авторизоваться</a> / <a class="open-popup2" id="regtit2" href="#regmodal">Зарегистрироваться</a>
	<?php
	if ($_SESSION['user']==='false') {
	?>
    <a href="exit.php" class="hidden">Вход</a>
	<?php
	}else{?>
	<p class="logout"><span id="hello" class="logout">Привет, <?=$_SESSION['user']['name']?></span><a href="exit.php" class="logout">Выйти</a></p>
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

	<div class="popup-bg">
     <div class="popup">
         <img class="close-popup" src="pics/close.png" alt="">
         <form id="authmodal" action="auth.php" method="post">
			<p>Чтобы авторизоваться, заполните поля:</p>
			<input type="text" class="form-control1" name="login" id="login" placeholder="Введите логин" required="required"><br>
			<input type="text" class="form-control1" name="pass" id="pass" placeholder="Введите пароль" required="required" maxlength="8"><br/>
			<p class="msg none">Lorem ipsum.</p>
			<button class="btn-success1" type="submit" >Авторизоваться</button>
         </form>
     </div>
	</div>

	<div class="popup-bg2">
     <div class="popup2">
         <img class="close-popup2" src="pics/close.png" alt="">
         <form id="regmodal" action="check.php" method="post">
			<p>Чтобы зарегистрироваться, заполните поля:</p>
			<input type="text" class="form-control2" name="login" id="login" placeholder="Введите логин. Длина от 5 до 15 символов" required="required"><br>
			<input type="text" class="form-control2" name="surname" id="surname" placeholder="Введите фамилию" required="required"><br>
			<input type="text" class="form-control2" name="name" id="name" placeholder="Введите имя" required="required"><br>
			<input type="text" class="form-control2" name="patronymic" id="patronymic" placeholder="Введите отчество" required="required"><br>
			<input type="text" class="form-control2" name="phone" id="phone" placeholder="Введите телефон" required="required"><br/>
			<input type="date" class="form-control2" name="birthday" id="birthday" placeholder="Введите дату рождения" required="required"><br/>
			<input type="text" class="form-control2" name="mail" id="mail" placeholder="Введите e-mail" required="required"><br/>
			<input type="text" class="form-control2" name="pass" id="pass" placeholder="Введите пароль. Длина от 5 до 15 символов" required="required" maxlength="8"><br/>
			<p class="msg none">Lorem ipsum.</p>
			<button class="btn btn-success" type="submit" >Зарегистрироваться</button>
         </form>
     </div>
	</div>
	
	<div class="banner">
	<img id="mainbanner" src="pics/banner.png">
	</div>
	<div class="description">
	<p class="article" id="main1">ДекорСтрой - магазин строительных товаров в г.Кобрине.<br> Мы предлагаем вам широкий ассортимент лучших строительных материалов по низким ценам, но с неизменно высоким качеством и отличным обслуживанием покупателей. <br>Мы с удовольствием помогаем нашим клиентам не потерять деньги, покупая "лишие" товары. <br>Всегда стараемся помочь подобрать самый лучший вариант под запрос и возможности клиента. <br>И результат нас очень радует - счастливы наблюдать наших постоянных клиентов, которые уже годами доверяют нам!<p>
	</div>
	<div class="benefits">
	<div class="inputbenefits" id="inputbenefit1">
	<p class="benefitsarticle">Широкий ассортимент</p>
	</div>
	<div class="inputbenefits" id="inputbenefit2">
	<p class="benefitsarticle">Профессиональная консультация</p>
	</div>
	<div class="inputbenefits" id="inputbenefit3">
	<p class="benefitsarticle">Персональные скидки</p>
	</div>
	</div>

	<button class="formfour" name="runbutton" id="gocatalog"><a class="formfour" href="index2.php">Смотреть товар</a></button>

	<button class="formfour" id="reviewbutton" name="runbutton" onClick="$('#formfour').show();">Отзыв</button>
  <form id="formfour" action="" method="post">
   <h4 class="formfour">Оставьте отзыв, заполнив форму</h4>
	Текст отзыва:<br/>
  <textarea rows="4" maxlength="400" name="rev" class="formfour" required="required" value="Поле для отзыва"></textarea><br/>
  <input type="submit" value="Отправить отзыв" class="formfour">
  </form>
  
  <div class="rev_answer">
	<?php  

		if (!empty($_POST['rev']))
		{
			$reviewtext = trim($_POST['rev']);
			if($_SESSION['user']==='false') {
			echo "<b>Сперва необходимо авторизоваться.</b>";
		}else{
			$name=$_SESSION['user']['name'];
			$clid=$_SESSION['user']['id'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("INSERT INTO `reviews` (`id_client`,`review_text`) VALUES ('$clid', '$reviewtext')");?>
			<p class="rev_answer"><?php echo "<b>$name, спасибо за Ваш отзыв!</b>";?></p>
			<?php
			$mysqli->close();
			}
		}
	?>
	</div>
  
	<p class="review">Отзывы</p>
	<table class="review">
	<tr cols="3">
		<?php if(!empty($reviews_print)): ?>
				<?php $cols=0; ?>
				<?php foreach ($reviews_print as $review_print): ?>
				<td class="revie">
					<table>
						<tr>
							<td><p class="revie"><b><?= $review_print['client_name']?>:</b><br><br><?= $review_print['review_text']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%3==0) {
				?>
				</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
	</tr>
	</table>
	
	<script>
	jQuery(function($){
	$("#phone").mask("+375 (99) 999-99-99");
	});

	$('.open-popup').click(function(e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
    $('html').addClass('no-scroll');
	});

	$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(800);
    $('html').removeClass('no-scroll');
	});
	
	$('.open-popup2').click(function(e) {
    e.preventDefault();
    $('.popup-bg2').fadeIn(800);
    $('html').addClass('no-scroll');
	});

	$('.close-popup2').click(function() {
    $('.popup-bg2').fadeOut(800);
    $('html').removeClass('no-scroll');
	});
	</script>
	
	
</div>   
<footer>
	<div id="foot1">
	<p>© 2022 Oksana Ostapuk</p>
	</div>
	<div id="foot2">
	<p class="foot">ЧТУП "ШопСтрой"</br>
	225306, Брестская обл., г. Кобрин, ул. Дзержинского 1А</br>
	+375 16 427-40-40<br>
	<a class="igicon" href="https://www.instagram.com/dekorstroy_kobrin/"><img class="igicon" src="pics/igicon.png" alt="instaramcon"></a>
	</p>
	
	</div>
  </footer>
    
	</body>
</html>

