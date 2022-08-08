<?php
    session_start();
	/*$_SESSION['user'];*/
	$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
	$mysqli->query("SET NAMES 'UTF8'");
	require_once($_SERVER['DOCUMENT_ROOT'].'/Decor/functs.php');
	$reviews=get_reviews();
	$colororders=get_order_color();
	$ordered_messages=get_messages();





?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
	<link rel="stylesheet" type="text/css" href="OstapukCurs.css">
	<link rel="stylesheet" type="text/css" href="popupstyle.css">
	<script src="jquery.js" type="text/javascript"></script>	
	<script src="jquery.maskedinput.min.js" type="text/javascript"></script>
	<script src="Main.js"></script>
    </head>
    
	<body>
    <header>
	<div id="tit" >
	<p class="title"><span id="decor">Декор</span><span id="stroy">Строй</span></p>
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
    </nav>
    
<div id="article">

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
	
	<table  class="admin_review">
	<tr><p class="review">Страница администратора</p></tr>
	<tr>
		<td><p class="review">ОТЗЫВЫ</p></td>
	</tr>
	<tr>
		<td><table class="admin_inner_review">
				<tr cols="7" class="zagolovok">
					<td>Код отзыва</td>
					<td>Фамилия</td>
					<td>Имя</td>
					<td>Отчество</td>
					<td>Номер телефона</td>
					<td>Текст отзыва</td>
					<td>Статус</td>
				</tr>
			<?php if(!empty($reviews)): ?>
				<?php foreach ($reviews as $review): ?>
				<tr cols="7">
					<td><?=$review['review_id']?>
					</td>
					<td><?=$review['client_surname']?>
					</td>
					<td><?=$review['client_name']?>
					</td>
					<td><?=$review['client_patronymic']?>
					</td>
					<td><?=$review['client_phone']?>
					</td>
					<td><?=$review['review_text']?>
					</td>
					<td><?=$review['status']?>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#change_revstatus').show();">Изменить статус отзыва</button>
			<form id="change_revstatus" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить статус отзыва</h4>
			Введите id отзыва: <input type="number" id="id_rev" name="id_rev" class="formfour" required="required"><br/>
			Выберите новый статус: <select id="color" name="new_status" required="required"  onchange="calc()">
				<option value="">Выберите значение</option>
				<option>Обработан</option>
				<option>Обрабатывается</option>
				</select><br/>
			<input type="submit" value="Изменить статус" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
	<tr>
		<td><p class="review">ОСТАВЛЕННЫЕ СООБЩЕНИЯ</p></td>
	</tr>
	<tr>
		<td><table class="admin_inner_review">
				<tr cols="8" class="zagolovok">
					<td>Код сообщения</td>
					<td>Фамилия</td>
					<td>Имя</td>
					<td>Отчество</td>
					<td>Телефон</td>
					<td>Эл. адрес</td>
					<td>Текст сообщения</td>
					<td>Статус</td>
				</tr>
			<?php if(!empty($ordered_messages)): ?>
				<?php foreach ($ordered_messages as $ordered_message): ?>
				<tr cols="7">
					<td><?=$ordered_message['id_feedback']?>
					</td>
					<td><?=$ordered_message['client_surname']?>
					</td>
					<td><?=$ordered_message['client_name']?>
					</td>
					<td><?=$ordered_message['client_patronymic']?>
					</td>
					<td><?=$ordered_message['client_phone']?>
					</td>
					<td><?=$ordered_message['mail']?>
					</td>
					<td><?=$ordered_message['text_message']?>
					</td>
					<td><?=$ordered_message['status']?>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#change_messtatus').show();">Изменить статус сообщения</button>
			<form id="change_messtatus" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить статус сообщения</h4>
			Введите id сообщения: <input type="number" id="id_mes" name="id_mes" class="formfour" required="required"><br/>
			Выберите новый статус: <select id="color" name="new_mes_status" required="required"  onchange="calc()">
				<option value="">Выберите значение</option>
				<option>Обработан</option>
				<option>Обрабатывается</option>
				</select><br/>
			<input type="submit" value="Изменить статус" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td><p class="review">ИЗМЕНИТЬ КАТАЛОГ</p></td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#delete_product').show();">Удалить товар</button>
			<form id="delete_product" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы удалить товар</h4>
			Введите id товара: <input type="number" id="id_del" name="id_del" class="formfour" required="required"><br/>
			<input type="submit" value="Удалить товар" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#add_product').show();">Добавить товар</button>
			<form id="add_product" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы добавить товар</h4>
			<h4 class="formfour">Категория товара: 1-Краски, 2-Эмали, 3-Лаки, 4-Шпатлевки, 5-Штукатурки, 6-Грунтовки, 7-Напольные плинтусы, 8-Потолочные плинтусы, 9-Металлические углы, 10-Углы из МДФ, 12-Слесарный инструмент, 13-Сверла, 14-Валики, 15-Кисти.</h4>
			<h4 class="formfour">Бренд товара: 1-Alpina, 2-Caparol, 3-Эмалька, 4-VGT, 5-Sniezka, 6-Ceresit, 7-Condor, 9-Тайфун, 10-KNAUF, 11-Ideal, 12-VOX, 13-Decomaster, 14-Союз, 15-Hauberk, 16-Акор, 17-Yourtools, 18-Stanley, 19-VAGNER, 20-MEGA.</h4>
			Введите наименование: (до 150 символов) <input type="text" name="new_item_name" class="formfour" required="required" maxlength="150"><br/>
			Введите описание: (до 500 символов) <input type="text" name="new_item_desc" class="formfour" required="required" maxlength="500"><br/>
			Выберите категорию: <select id="color" name="new_item_subcat" required="required">
				<option value="">Выберите значение</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				</select><br/>
			Выберите бренд: <select id="color" name="new_item_brand" required="required">
				<option value="">Выберите значение</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				</select><br/>
			Введите цену, руб.: <input type="number" id="new_item_price" name="new_item_price" class="formfour" required="required" min="0"><br/>
			Введите кол-во, шт.: <input type="number" id="new_item_amount" name="new_item_amount" class="formfour" required="required" min="1"><br/>
			<input type="submit" value="Добавить товар" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#edit_product_name').show();">Изменить наименование товара</button>
			<form id="edit_product_name" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить наименование товара</h4>
			Введите id товара: <input type="number" id="id_prod_name" name="id_prod_name" class="formfour" required="required"><br/>
			Введите новое наименование: <input type="text" name="new_name" class="formfour" required="required"><br/>
			<input type="submit" value="Изменить наименование" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#edit_product_desc').show();">Изменить описание товара</button>
			<form id="edit_product_desc" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить описание</h4>
			Введите id товара: <input type="number" id="id_prod_desc" name="id_prod_desc" class="formfour" required="required"><br/>
			Введите новое описание: <input type="text" name="new_desc" class="formfour" required="required"><br/>
			<input type="submit" value="Изменить описание" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#edit_product_price').show();">Изменить цену товара</button>
			<form id="edit_product_price" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить цену</h4>
			Введите id товара: <input type="number" id="id_prod_price" name="id_prod_price" class="formfour" required="required"><br/>
			Введите новую цену: <input type="number" id="new_price" name="new_price" class="formfour" required="required" onchange="calc()" step="0.5" min="1"><br/>
			<input type="submit" value="Изменить цену" class="formfour">
			</form>
		</td>
	</tr>
	<tr>
		<td><p class="review">ЗАКАЗЫ НА КОЛЕРОВКУ КРАСКИ</p></td>
	</tr>
	<tr>
		<td><table class="admin_inner_colors">
				<tr cols="8" class="zagolovok">
					<td>Код заказа</td>
					<td>Фамилия</td>
					<td>Имя</td>
					<td>Отчество</td>
					<td>Номер телефона</td>
					<td>Цвет</td>
					<td>Количество, л.</td>
					<td>Сумма заказа, руб.</td>
					<td>Статус</td>
				</tr>
			<?php if(!empty($colororders)): ?>
				<?php foreach ($colororders as $colororder): ?>
				<tr cols="7">
					<td><?=$colororder['id_order']?>
					</td>
					<td><?=$colororder['client_surname']?>
					</td>
					<td><?=$colororder['client_name']?>
					</td>
					<td><?=$colororder['client_patronymic']?>
					</td>
					<td><?=$colororder['client_phone']?>
					</td>
					<td><?=$colororder['color']?>
					</td>
					<td><?=$colororder['litr']?>
					</td>
					<td><?=$colororder['kol_sum']?>
					</td>
					<td><?=$colororder['status']?>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<button class="change_status_review" name="runbutton" onClick="$('#change_orderstatus').show();">Изменить статус заказа</button>
			<form id="change_orderstatus" action="" method="post">
			<h4 class="formfour">Заполните форму, чтобы изменить статус заказа</h4>
			Введите id заказа: <input type="number" id="id_order" name="id_order" class="formfour" required="required"><br/>
			Выберите новый статус: <select id="color" name="new_order_status" required="required"  onchange="calc()">
				<option value="">Выберите значение</option>
				<option>Готов</option>
				<option>Выполняется</option>
				</select><br/>
			<input type="submit" value="Изменить статус" class="formfour">
			</form>
		</td>
	</tr>
	</table>
	
	<?php  

		if (!empty($_POST['new_item_name']) && !empty($_POST['new_item_desc']) && !empty($_POST['new_item_brand']) && !empty($_POST['new_item_subcat']) && !empty($_POST['new_item_amount']) && !empty($_POST['new_item_price']))
		{
			$new_item_name = $_POST['new_item_name'];
			$new_item_desc = $_POST['new_item_desc'];
			$new_item_brand = $_POST['new_item_brand'];
			$new_item_subcat = $_POST['new_item_subcat'];
			$new_item_price = $_POST['new_item_price'];
			$new_item_amount = $_POST['new_item_amount'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("INSERT INTO `product` (`product_name`, `product_desc`, `id_brand`, `id_subcategory`, `product_price`, `amount`) VALUES('$new_item_name', '$new_item_desc', '$new_item_brand', '$new_item_subcat', '$new_item_price', '$new_item_amount') ");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_rev']) && !empty($_POST['new_status']))
		{
			$id_rev = $_POST['id_rev'];
			$new_status = $_POST['new_status'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `reviews` SET `status`= '$new_status' WHERE `review_id`='$id_rev'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_mes']) && !empty($_POST['new_mes_status']))
		{
			$id_mes = $_POST['id_mes'];
			$new_mes_status = $_POST['new_mes_status'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `order_feedback` SET `status`= '$new_mes_status' WHERE `id_feedback`='$id_mes'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_order']) && !empty($_POST['new_order_status']))
		{
			$id_order = $_POST['id_order'];
			$new_order_status = $_POST['new_order_status'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `order_color` SET `status`= '$new_order_status' WHERE `id_order`='$id_order'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_del']))
		{
			$id_del = $_POST['id_del'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("DELETE FROM `product` WHERE `id_product`='$id_del'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_prod_name']) && !empty($_POST['new_name']))
		{
			$id_prod_name = $_POST['id_prod_name'];
			$new_name = $_POST['new_name'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `product` SET `product_name`= '$new_name' WHERE `id_product`='$id_prod_name'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_prod_desc']) && !empty($_POST['new_desc']))
		{
			$id_prod_desc = $_POST['id_prod_desc'];
			$new_desc = $_POST['new_desc'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `product` SET `product_desc`= '$new_desc' WHERE `id_product`='$id_prod_desc'");
			$mysqli->close();
		}
	?>
	
	<?php  

		if (!empty($_POST['id_prod_price']) && !empty($_POST['new_price']))
		{
			$id_prod_price = $_POST['id_prod_price'];
			$new_price = $_POST['new_price'];
			$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
			$mysqli->query("SET NAMES 'UTF8'");
			$mysqli->query("UPDATE `product` SET `product_price`= '$new_price' WHERE `id_product`='$id_prod_price'");
			$mysqli->close();
		}
	?>
	
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

