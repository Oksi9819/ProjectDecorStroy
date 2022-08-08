<?php
    session_start();
	/*$_SESSION['user'];*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Color</title>
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
	<img id="mainbanner" src="pics/Banner1.png">
	</div>
	<div class="description" id="desc_page3">
	<p class="article_page3">Предлагаем всем покупателям красок воспользоваться услугой компьютерной колеровки. </p>
	<p class="article_page3">Колеровка красок позволит быстро и точно подобрать необходимый оттенок. </p>
	<p class="article_page3">Вы точно будете уверены, что получите "цвет-в-цвет".</p>
	<p class="article_page3">Выбирайте оттенок из палитры и оставляйте заявку. И в кратчайние сроки мы сделаем ваш заказ.</p>
	<p class="article_page3">Персональная консультация – бесплатно.</p>
	</div>
	
	<!--Палитра-->
	<div class="palitra" id="palitra_container">
	<div class="inner_palitra_container" id="palitra_text">
	<p class="inner_palitra_container" id="palitra_t">Палитра:</p>
	</div>
	<div class="inner_palitra_container" id="palitra_colors">
	
	<!--таблица 14*6-->
	<table class="palitra" id="palitra">
	<tr class="palitra">
		<td class="palitra" id="p1" data-tooltip="#f2e904"></td>
		<td class="palitra" id="p2" data-tooltip="#fdd200"></td>
		<td class="palitra" id="p3" data-tooltip="#feb201"></td>
		<td class="palitra" id="p4" data-tooltip="#ffa854"></td>
		<td class="palitra" id="p5" data-tooltip="#ff7104"></td>
		<td class="palitra" id="p6" data-tooltip="#ff8853"></td>
		<td class="palitra" id="p7" data-tooltip="#ff380a"></td>
		<td class="palitra" id="p8" data-tooltip="#de226f"></td>
		<td class="palitra" id="p9" data-tooltip="#c25c83"></td>
		<td class="palitra" id="p10" data-tooltip="#644c8d"></td>
		<td class="palitra" id="p11" data-tooltip="#04337e"></td>
		<td class="palitra" id="p12" data-tooltip="#0361af"></td>
		<td class="palitra" id="p13" data-tooltip="#0096de"></td>
		<td class="palitra" id="p14" data-tooltip="#0193a1"></td>
	</tr>
	<tr class="palitra">
		<td class="palitra" id="p15" data-tooltip="#f5f05e"></td>
		<td class="palitra" id="p16" data-tooltip="#fff004"></td>
		<td class="palitra" id="p17" data-tooltip="#ffce5d"></td>
		<td class="palitra" id="p18" data-tooltip="#fdc982"></td>
		<td class="palitra" id="p19" data-tooltip="#fd9e53"></td>
		<td class="palitra" id="p20" data-tooltip="#ffae81"></td>
		<td class="palitra" id="p21" data-tooltip="#ff7a51"></td>
		<td class="palitra" id="p22" data-tooltip="#ed6d9d"></td>
		<td class="palitra" id="p23" data-tooltip="#da88a6"></td>
		<td class="palitra" id="p24" data-tooltip="#8c7bac"></td>
		<td class="palitra" id="p25" data-tooltip="#0064a9"></td>
		<td class="palitra" id="p26" data-tooltip="#008ac8"></td>
		<td class="palitra" id="p27" data-tooltip="#00b4f0"></td>
		<td class="palitra" id="p28" data-tooltip="#00b3bf"></td>
	</tr>
	<tr class="palitra">
		<td class="palitra" id="p29" data-tooltip="#f8f49f"></td>
		<td class="palitra" id="p30" data-tooltip="#fdf19f"></td>
		<td class="palitra" id="p31" data-tooltip="#ffe897"></td>
		<td class="palitra" id="p32" data-tooltip="#ffdfb8"></td>
		<td class="palitra" id="p33" data-tooltip="#fdc795"></td>
		<td class="palitra" id="p34" data-tooltip="#ffd2b2"></td>
		<td class="palitra" id="p35" data-tooltip="#feac8f"></td>
		<td class="palitra" id="p36" data-tooltip="#ffa4cc"></td>
		<td class="palitra" id="p37" data-tooltip="#ecb9cd"></td>
		<td class="palitra" id="p38" data-tooltip="#b9add1"></td>
		<td class="palitra" id="p39" data-tooltip="#7199c9"></td>
		<td class="palitra" id="p40" data-tooltip="#2fb5dc"></td>
		<td class="palitra" id="p41" data-tooltip="#35d3f8"></td>
		<td class="palitra" id="p42" data-tooltip="#5cd0db"></td>
	</tr>
	<tr class="palitra">
		<td class="palitra" id="p43" data-tooltip="#019b4c"></td>
		<td class="palitra" id="p44" data-tooltip="#46aa02"></td>
		<td class="palitra" id="p45" data-tooltip="#1d8f54"></td>
		<td class="palitra" id="p46" data-tooltip="#96c63b"></td>
		<td class="palitra" id="p47" data-tooltip="#798b01"></td>
		<td class="palitra" id="p48" data-tooltip="#d98629"></td>
		<td class="palitra" id="p49" data-tooltip="#f9a623"></td>
		<td class="palitra" id="p50" data-tooltip="#ff9a2d"></td>
		<td class="palitra" id="p51" data-tooltip="#da9c4d"></td>
		<td class="palitra" id="p52" data-tooltip="#da6c1b"></td>
		<td class="palitra" id="p53" data-tooltip="#c04528"></td>
		<td class="palitra" id="p54" data-tooltip="#b05b00"></td>
		<td class="palitra" id="p55" data-tooltip="#834105"></td>
		<td class="palitra" id="p56" data-tooltip="#3d3634"></td>
	</tr>
	<tr class="palitra">
		<td class="palitra" id="p57" data-tooltip="#31b481"></td>
		<td class="palitra" id="p58" data-tooltip="#80c762"></td>
		<td class="palitra" id="p59" data-tooltip="#6bb281"></td>
		<td class="palitra" id="p60" data-tooltip="#c8d461"></td>
		<td class="palitra" id="p61" data-tooltip="#a1af56"></td>
		<td class="palitra" id="p62" data-tooltip="#eda965"></td>
		<td class="palitra" id="p63" data-tooltip="#fec36a"></td>
		<td class="palitra" id="p64" data-tooltip="#ffba76"></td>
		<td class="palitra" id="p65" data-tooltip="#eabb80"></td>
		<td class="palitra" id="p66" data-tooltip="#f09858"></td>
		<td class="palitra" id="p67" data-tooltip="#e77454"></td>
		<td class="palitra" id="p68" data-tooltip="#d58542"></td>
		<td class="palitra" id="p69" data-tooltip="#b16f41"></td>
		<td class="palitra" id="p70" data-tooltip="#7a7470"></td>
	</tr>
	<tr class="palitra">
		<td class="palitra" id="p71" data-tooltip="#96d4b2"></td>
		<td class="palitra" id="p72" data-tooltip="#c4e0a4"></td>
		<td class="palitra" id="p73" data-tooltip="#b1cfb2"></td>
		<td class="palitra" id="p74" data-tooltip="#dae8a4"></td>
		<td class="palitra" id="p75" data-tooltip="#cccf93"></td>
		<td class="palitra" id="p76" data-tooltip="#f5cd9d"></td>
		<td class="palitra" id="p77" data-tooltip="#f8e2a7"></td>
		<td class="palitra" id="p78" data-tooltip="#fed9a8"></td>
		<td class="palitra" id="p79" data-tooltip="#efdbae"></td>
		<td class="palitra" id="p80" data-tooltip="#fabf95"></td>
		<td class="palitra" id="p81" data-tooltip="#feaa90"></td>
		<td class="palitra" id="p82" data-tooltip="#f1b585"></td>
		<td class="palitra" id="p83" data-tooltip="#dba278"></td>
		<td class="palitra" id="p84" data-tooltip="#b2adaf"></td>
	</tr>
	</table>
	</div>
	<div class="inner_palitra_container" id="palitra_description">
	<p class="inner_palitra_container">Узнавайте подробности у менеджеров по телефону:</br>+375 16 427-40-40</p>
	</div>
	</div>
    
    
<!--ФОРМА ОБРАТНОЙ СВЯЗИ-->

  <form id="form3" action="./orderKolerovka.php" method="post">
   <h4 class="formfour">Оставьте заявку на колеровку краски</h4>
Выберите цвет: 
	<select class="formfour" id="color" name="color" required="required"  onchange="calc()">
	<option value="">Выберите значение</option>
	<option>#f2e904</option>
	<option>#fdd200</option>
	<option>#feb201</option>
	<option>#ffa854</option>
	<option>#ff7104</option>
	<option>#ff8853</option>
	<option>#ff380a</option>
	<option>#de226f</option>
	<option>#c25c83</option>
	<option>#644c8d</option>
	<option>#04337e</option>
	<option>#0361af</option>
	<option>#0096de</option>
	<option>#0193a1</option>
	
	<option>#f5f05e</option>
	<option>#fff004</option>
	<option>#ffce5d</option>
	<option>#fdc982</option>
	<option>#fd9e53</option>
	<option>#ffae81</option>
	<option>#ff7a51</option>
	<option>#ed6d9d</option>
	<option>#da88a6</option>
	<option>#8c7bac</option>
	<option>#0064a9</option>
	<option>#008ac8</option>
	<option>#00b4f0</option>
	<option>#00b3bf</option>
	
	<option>#f8f49f</option>
	<option>#fdf19f</option>
	<option>#ffe897</option>
	<option>#ffdfb8</option>
	<option>#fdc795</option>
	<option>#ffd2b2</option>
	<option>#feac8f</option>
	<option>#ffa4cc</option>
	<option>#ecb9cd</option>
	<option>#b9add1</option>
	<option>#7199c9</option>
	<option>#2fb5dc</option>
	<option>#35d3f8</option>
	<option>#5cd0db</option>
	
	<option>#019b4c</option>
	<option>#46aa02</option>
	<option>#1d8f54</option>
	<option>#96c63b</option>
	<option>#798b01</option>
	<option>#d98629</option>
	<option>#f9a623</option>
	<option>#ff9a2d</option>
	<option>#da9c4d</option>
	<option>#da6c1b</option>
	<option>#c04528</option>
	<option>#b05b00</option>
	<option>#834105</option>
	<option>#3d3634</option>
	
	<option>#31b481</option>
	<option>#80c762</option>
	<option>#6bb281</option>
	<option>#c8d461</option>
	<option>#a1af56</option>
	<option>#eda965</option>
	<option>#fec36a</option>
	<option>#ffba76</option>
	<option>#eabb80</option>
	<option>#f09858</option>
	<option>#e77454</option>
	<option>#d58542</option>
	<option>#b16f41</option>
	<option>#7a7470</option>
	
	<option>#96d4b2</option>
	<option>#c4e0a4</option>
	<option>#b1cfb2</option>
	<option>#dae8a4</option>
	<option>#cccf93</option>
	<option>#f5cd9d</option>
	<option>#f8e2a7</option>
	<option>#fed9a8</option>
	<option>#efdbae</option>
	<option>#fabf95</option>
	<option>#feaa90</option>
	<option>#f1b585</option>
	<option>#dba278</option>
	<option>#b2adaf</option>
	</select><br/>
Кол-во (литров): 
	<input type="number" id="amount" name="amount" class="formfour" required="required" onchange="calc()" step="0.5" min="1"><br/>
Стоимость заказа составит: 
	<output id="sum" name="sum" class="formfour">0</output> руб.<br/>
  
	<input type="submit" value="Отправить заявку" class="formfour"><br/>

  </form>


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
		
		
		
	</script>
	</body>
</html>