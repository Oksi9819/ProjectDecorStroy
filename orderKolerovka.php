<?php
    session_start();
	/*$_SESSION['user'];*/
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Color result</title>
	<link rel="stylesheet" type="text/css" href="OstapukCurs.css">
	<link rel="stylesheet" type="text/css" href="popupstyle.css">
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
	</ul>
    </div>
    </nav>
    
	<div id="article">
	
	<div class="contKoler">
	<div class="popup-bg">
     <div class="popup">
         <img class="close-popup" src="pics/close.png" alt="">
         <form id="authmodal" action="auth.php" method="post">
			<p>Чтобы авторизоваться, заполните поля:</p>
			<input type="text" class="form-control1" name="login" id="login" placeholder="Введите логин"><br>
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
	<div class="result">	 
	<?php
	$amount= $_POST['amount']; 
	$color= $_POST['color']; 
	$price=62;
	settype($amount, "integer");
	$sum= $price * $amount; 
	
	if($_SESSION['user']==='false') {
	echo "Пожалуйства вернитесь обратно и авторизуйтесь.";
	}else
	{
	$clid=$_SESSION['user']['id'];
	$name=$_SESSION['user']['name'];
	$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
	$mysqli->query("SET NAMES 'UTF8'");
	$mysqli->query("INSERT INTO `order_color` (`client`, `color`, `litr`, `kol_sum`) VALUES('$clid', '$color', '$amount', '$sum')");	
	echo "<b>Ваша заявка на колеровку краски успешно отправлена! </b><br><br>Имя: $name<br>Кол-во краски: $amount л.<br>Выбранный цвет: $color<br>Сумма заказа: $sum руб.";
	
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
    <script type="text/javascript">
		let tooltip;
		
		document.onmouseover = function(event) {
		let anchorElem = event.target.closest('[data-tooltip]');
		if (!anchorElem) return;
		tooltip = showTooltip(anchorElem, anchorElem.dataset.tooltip);
		}
		
		
		document.onmouseout = function() {
		if (tooltip) {
			tooltip.remove();
			tooltip = false;
		}
		}
		
		function showTooltip(anchorElem, html) {
		let tooltipElem = document.createElement('td');
		tooltipElem.className = 'tooltip';
		tooltipElem.innerHTML = html;
		document.body.append(tooltipElem);
		
		let coords = anchorElem.getBoundingClientRect();
		
		// позиционируем подсказку над центром элемента
		let left = coords.left + (anchorElem.offsetWidth - tooltipElem.offsetWidth) / 2;
		if (left < 0) left = 0;

		let top = coords.top - tooltipElem.offsetHeight - 5;
		if (top < 0) {
		top = coords.top + anchorElem.offsetHeight + 5;
		}

		tooltipElem.style.left = left + 'px';
		tooltipElem.style.top = top + 'px';
		
		return tooltipElem;
		}
		
		function calc() {	
		var price = 62;
		document.getElementById('sum').innerHTML = parseInt(document.getElementById('amount').value) * parseInt(price);
		}
		
		
		jQuery(function($){
		$("#phoneorder").mask("+375 (99) 999-99-99");
		})
		    
		
		
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
	</body>
</html>

