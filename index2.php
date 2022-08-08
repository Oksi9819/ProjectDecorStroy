<?php
    session_start();
	
		$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
		$mysqli->query("SET NAMES 'UTF8'");
		
		require_once($_SERVER['DOCUMENT_ROOT'].'/Decor/functs.php'); 


		$kraski=get_products('1');
		$emali=get_products('2');
		$laki=get_products('3');
		$shpatli=get_products('4');
		$shtukaty=get_products('5');
		$grunty=get_products('6');
		$polplinty=get_products('7');
		$potplinty=get_products('8');
		$metugly=get_products('9');
		$mdfugly=get_products('10');
		$slesinsty=get_products('12');
		$sverla=get_products('13');
		$valiki=get_products('14');
		$kisti=get_products('15');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Catalog</title>

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
  
	<div id="article" class="article_page3">	
		<div class="description" id="desc_page2">
		<p class="article_page3">В нашем магазине представлен широкий выбор продукции.<br>Всех производителей мы тщательно отбираем, чтобы вы всегда могли быть уверены в качестве наших товаров! <br><br> <i>*Обращаем Ваше внимание, что информация в Каталоге носит ознакомительный характер.<br>Уточняйте наличие товаров и их стоимость у менеджеров по телефону: +375 16 427-40-40</i></p>
		</div>
		
		<div class="categories" id="container_page2">
			<div class="categories" id="ct1">
			<a class="categories" href= "#category1"><img class="categories" src="pics/lak.png" alt="laki"></a>
			<p class="categories"><a class="categories" href= "#category1">ЛАКОКРАСОЧНАЯ ПРОДУКЦИЯ</a></p>
			</div>
			
			<div class="categories" id="ct2">
			<a class="categories" href= "#category2"><img class="categories" src="pics/smeci.png" alt="smeci"></a>
			<p class="categories"><a class="categories" href= "#category2">СТРОИТЕЛЬНЫЕ СМЕСИ</a></p>
			</div>
			
			<div class="categories" id="ct3">
			<a class="categories" href= "#category3"><img class="categories" src="pics/plintusa.png" alt="plintusa"></a>
			<p class="categories"><a class="categories" href= "#category3">ПЛИНТУСЫ</a></p>
			</div>
		
			<div class="categories" id="ct4">
			<a class="categories" href= "#category4"><img class="categories" src="pics/ugly.png" alt="ugly"></a>
			<p class="categories"><a class="categories" href= "#category4">ДЕКОРАТИВНЫЕ УГЛЫ</a></p>
			</div>
			
			<div class="categories" id="ct5">
			<a class="categories" href= "#category5"><img class="categories" src="pics/instruments.png" alt="instruments"></a>
			<p class="categories"><a class="categories" href= "#category5">ИНСТРУМЕНТЫ</a></p>
			</div>
		</div>
		
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
		
		<div class="products">
		
		<!--ЛАКОКРАСОЧНАЯ ПРОДУКЦИЯ-->
		<p class="products" id="category1">Лакокрасочная продукция</p>
		
		<div class="subcategories" id="container_page2_1">
			<div class="subcategories" id="subct1_1">
			<p class="subcategories"><a class="subcategories" href= "#subcategory1_1">КРАСКИ</a></p>
			</div>
			
			<div class="subcategories" id="subct1_2">
			<p class="subcategories"><a class="subcategories" href= "#subcategory1_2">ЭМАЛИ</a></p>
			</div>
			
			<div class="subcategories" id="subct1_3">
			<p class="subcategories"><a class="subcategories" href= "#subcategory1_3">ЛАКИ</a></p>
			</div>
		</div>
		
		<p class="products" id="subcategory1_1">Краски</p> 
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($kraski)): ?>
				<?php $cols=0; ?>
				<?php foreach ($kraski as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory1_2">Эмали</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($emali)): ?>
				<?php $cols=0; ?>
				<?php foreach ($emali as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td> 
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory1_3">Лаки</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($laki)): ?>
				<?php $cols=0; ?>
				<?php foreach ($laki as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td> 
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<!--СТРОИТЕЛЬНЫЕ СМЕСИ-->
		<p class="products" id="category2">Строительные смеси</p>
		
		<div class="subcategories" id="container_page2_2">
			<div class="subcategories" id="subct2_1">
	
			<p class="subcategories"><a class="subcategories" href= "#subcategory2_1">ШПАТЛЕВКИ</a></p>
			</div>
			
			<div class="subcategories" id="subct2_2">
			
			<p class="subcategories"><a class="subcategories" href= "#subcategory2_2">ШТУКАТУРКИ</a></p>
			</div>
			
			<div class="subcategories" id="subct2_3">
			
			<p class="subcategories"><a class="subcategories" href= "#subcategory2_3">ГРУНТОВКИ</a></p>
			</div>
		</div>
		
		<p class="products" id="subcategory2_1">Шпатлевки</p> 
		<table class="products" id="laki">
			<tr>
				<?php if(!empty($shpatli)): ?>
				<?php $cols=0; ?>
				<?php foreach ($shpatli as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory2_2">Штукатурки</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($shtukaty)): ?>
				<?php $cols=0; ?>
				<?php foreach ($shtukaty as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td> 
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory2_3">Грунтовки</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($grunty)): ?>
				<?php $cols=0; ?>
				<?php foreach ($grunty as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td> 
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<!--ПЛИНТУСЫ-->
		<p class="products" id="category3">Плинтусы</p>
		
		<div class="subcategories" id="container_page2_3">
			<div class="subcategories" id="subct3_1">
	
			<p class="subcategories"><a class="subcategories" href= "#subcategory3_1">НАПОЛЬНЫЕ ПЛИНТУСЫ</a></p>
			</div>
			
			<div class="subcategories" id="subct3_2">
			
			<p class="subcategories"><a class="subcategories" href= "#subcategory3_2">ПОТОЛОЧНЫЕ ПЛИНТУСЫ</a></p>
			</div>	
		</div>
		
		<p class="products" id="subcategory3_1">Напольные плинтусы</p> 
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($polplinty)): ?>
				<?php $cols=0; ?>
				<?php foreach ($polplinty as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory3_2">Потолочные плинтусы</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($potplinty)): ?>
				<?php $cols=0; ?>
				<?php foreach ($potplinty as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
	
		<!--ДЕКОРАТИВНЫЕ УГЛЫ-->
		<p class="products" id="category4">Декоративные углы</p>
		
		<div class="subcategories" id="container_page2_4">
			<div class="subcategories" id="subct4_1">
			<p class="subcategories"><a class="subcategories" href= "#subcategory4_1">МЕТАЛЛИЧЕСКИЕ УГЛЫ</a></p>
			</div>
			
			<div class="subcategories" id="subct4_2">
			<p class="subcategories"><a class="subcategories" href= "#subcategory4_2">УГЛЫ ИЗ МДФ</a></p>
			</div>
		</div>
		
		<p class="products" id="subcategory4_1">Металлические углы</p> 
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($metugly)): ?>
				<?php $cols=0; ?>
				<?php foreach ($metugly as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory4_2">Углы из МДФ</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($mdfugly)): ?>
				<?php $cols=0; ?>
				<?php foreach ($mdfugly as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		
		<!--ИНСТРУМЕНТЫ-->
		<p class="products" id="category5">Инструменты</p>
		
		<div class="subcategories" id="container_page2_5">
			<div class="subcategories" id="subct5_1">
			<p class="subcategories"><a class="subcategories" href= "#subcategory5_1">СЛЕСАРНЫЙ ИНСТРУМЕНТ</a></p>
			</div>
			
			<div class="subcategories" id="subct5_2">
			<p class="subcategories"><a class="subcategories" href= "#subcategory5_2">СВЕРЛА</a></p>
			</div>
			
			<div class="subcategories" id="subct5_3">
			<p class="subcategories"><a class="subcategories" href= "#subcategory5_3">ВАЛИКИ</a></p>
			</div>
			
			<div class="subcategories" id="subct5_4">
			<p class="subcategories"><a class="subcategories" href= "#subcategory5_4">КИСТИ</a></p>
			</div>
		</div>
		
		<p class="products" id="subcategory5_1">Слесарный инструмент</p> 
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($slesinsty)): ?>
				<?php $cols=0; ?>
				<?php foreach ($slesinsty as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory5_2">Сверла</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($sverla)): ?>
				<?php $cols=0; ?>
				<?php foreach ($sverla as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory5_3">Валики</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($valiki)): ?>
				<?php $cols=0; ?>
				<?php foreach ($valiki as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" onchange="calc()" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		
		<p class="products" id="subcategory5_4">Кисти</p>
		<table class="products" id="laki" cols="4">
			<tr>
				<?php if(!empty($kisti)): ?>
				<?php $cols=0; ?>
				<?php foreach ($kisti as $product): ?>
				<td>
					<table class="inner_products">
						<tr class="picprod">
							<td><img class="inner_products" id="" src="pics/<?= $product['product_image'] ?>" alt="red"></td>
						</tr>
						<tr class="price">
							<td class="price"><p class="price"><a href="?cart=add&id=<?= $product['id_product']?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id_product']?>" style="color: white">КУПИТЬ</a></p></td>
							
						</tr>
						<tr class="invisible" height="40">
							<td>Кол-во: <input type="number" id="amount" name="amount" required="required" step="1" min="1"></td>
						</tr>
						<tr>
							<td class="inner_desc"><p class="inner_products_name"><?= $product['product_name'] ?></p><p class="inner_products_price"><?= $product['product_price'] ?> руб.</p><p class="inner_products_desc"><?= $product['product_desc']?></p></td>
						</tr>
					</table>
				</td>
				<?php ++$cols; 
					if ($cols%4==0) {
				?>
			</tr><tr>
				<?php
					;}
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
		</table>
		</div>	
		</div>   
		<button class="formfour" name="runbutton" id="gocatalog"><a class="formfour" href="#tit">&#8639; Вверх &#8638;</a></button>
		
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