<?php
		function debug(array $data):void
		{
		echo '<pre>'.print_r($data,1).'</pre>';
		}
		


		function get_products(int $subcategory):array
		{
		global $mysqli;
		
		$res=$mysqli->query("SELECT * FROM `product` WHERE `id_subcategory`='$subcategory' AND `amount`>'0'");
		return $res->fetch_all(MYSQLI_ASSOC);
		}
		
		function get_reviews():array
		{
			
		global $mysqli;
		
		$rev=$mysqli->query("SELECT client.client_surname, client.client_name, client.client_patronymic, client.client_phone, reviews.review_id, reviews.review_text, reviews.status FROM `client` INNER JOIN `reviews` ON client.id_client=reviews.id_client WHERE reviews.status='Не обработан' OR reviews.status='Выполняется'");
		return $rev->fetch_all(MYSQLI_ASSOC);
		}
		
		function get_reviews_toprint():array
		{
			
		global $mysqli;
		
		$rev_print=$mysqli->query("SELECT client.client_surname, client.client_name, client.client_patronymic, client.client_phone, reviews.review_id, reviews.review_text, reviews.status FROM `client` INNER JOIN `reviews` ON client.id_client=reviews.id_client WHERE reviews.status='Обработан'");
		return $rev_print->fetch_all(MYSQLI_ASSOC);
		}
		
		function get_messages():array
		{
			
		global $mysqli;
		
		$mes=$mysqli->query("SELECT client.client_surname, client.client_name, client.client_patronymic, client.client_phone, order_feedback.id_feedback, order_feedback.mail, order_feedback.text_message, order_feedback.status FROM `client` INNER JOIN `order_feedback` ON client.id_client=order_feedback.client WHERE order_feedback.status='На рассмотрении' OR order_feedback.status='Обрабатывается'");
		return $mes->fetch_all(MYSQLI_ASSOC);
		}
		
		function get_order_color():array
		{
			
		global $mysqli;
		
		$kol=$mysqli->query("SELECT * FROM `client` INNER JOIN `order_color` ON client.id_client=order_color.client");
		return $kol->fetch_all(MYSQLI_ASSOC);
		}

		function get_product(int $id):array
		{
			global $mysqli;
			$stmt=$mysqli->prepare("SELECT * FROM `product` WHERE `id_product`=?");
			$stmt->execute(['id']);
			return $stmt->fetch();
		}
		
		function add_to_cart($product):void
		{
			if(isset($_SESSION['cart'][$product['id_product']])){
				$_SESSION['cart'][$product['id_product']]['qty']+=1;
			}else{
				$_SESSION['cart'][$product['id_product']]=[
					'product_name'=>$product['product_name'],
					'product_image'=>$product['product_image'],
					'product_price'=>$product['product_price'],
					'qty'=>1,
				];
			}
			
			$_SESSION['cart.qty']=!empty($_SESSION['cart.qty'])?++$_SESSION['cart.qty']:1;
			$_SESSION['cart.sum']=!empty($_SESSION['cart.sum'])?$_SESSION['cart.sum']+$product['product_price']:$product['product_price'];
		}

?>