<?php
    session_start();
	/*$_SESSION['user'];*/

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="OstapukCurs.css">
	<link rel="stylesheet" type="text/css" href="popupstyle.css">
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
	<a class="open-popup" id="regtit1" href="#authmodal">Авторизоваться</a> / <a class="open-popup2" id="regtit2" href="#regmodal">Зарегистрироваться</a>
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
    <p class="article" id="zero">Наш магазин находится <span id="one">по адресу</span></p>
    <p class="article" id="two">Брестская область, г. Кобрин, ул. Дзержинского 1А.</p>
    
	<div id="map" style="position:relative;overflow:hidden;"><a href="https://yandex.by/maps/org/dekor_stroy/84916628766/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Декор строй</a><a href="https://yandex.by/maps/26010/kobrin/category/building_supplies_store/184107753/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительный магазин в Кобрине</a><iframe src="https://yandex.by/map-widget/v1/-/CCU5BLA3GC" width="100%" height="100%" allowfullscreen="true" style="position:relative;"></iframe></div> 
	
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
	
	
	<div class="inputarticle">
		<div class="item1"><img id="icon1" src="pics/icon2.png" alt="phoneicon"></div>
		<div class="item2">
			<div class="cont"><p class="article2"><span class="graph">График работы</span> магазина:</p>
			<p class="article2">ПН-ПТ (9:00-18:00),<br/>СБ (9:00-16:00),<br/>ВС (10:00-15:00).</p>
			</div>
		</div>
	</div>

	<div class="inputarticle">
		<div class="item1" id="c4"><img id="icon2" src="pics/icon1.png" alt="phoneicon"></div>
		<div class="item2" id="c3">
			<div class="cont"><p class="article2"><span class="graph">Для связи:</span></p>
			<p class="article2"><span id="phnumber">+375 16 427-40-40 (магазин)</span></br>+375 16 423-87-71 (администрация)</p>
			</div>
		</div>
	</div>
	
	<div class="inputarticle">
		<div class="item1" id="c1"><img id="icon3" src="pics/icon3.png" alt="phoneicon"></div>
		<div class="item2" id="c2">
			<div class="cont"><p class="article2">dekorstroy@gmail.com</p></div>
		</div>
	</div>

<!--ФОРМА ОБРАТНОЙ СВЯЗИ-->

<button class="formfour" id="formbutton" name="runbutton" onClick="$('#formfour').show();">Связаться</button>
  <form id="formfour" action="./mailBack.php" method="post">
   <h4 class="formfour">Оставьте сообщение, заполнив форму</h4>
  E-mail:<br/>
  <input type="text" name="email" class="formfour" required="required"><br/>
  Сообщение:<br/>
  <textarea rows="4" maxlength="400" name="message" class="formfour" required="required"></textarea><br/>
  <input type="submit" value="Отправить сообщение" class="formfour">
  </form>

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
	<a class="igicon" href="https://www.instagram.com/dekorstroy_kobrin/"><img class="igicon" src="pics/igicon.png" alt="instaramcon"></a></p>
	</div>
  </footer>
    
	</body>
</html>