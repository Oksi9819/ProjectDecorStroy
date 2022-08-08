<?php
	session_start();


	$login=$_POST['login'];
	$surname=$_POST['surname'];
	$name=$_POST['name'];
	$patronymic=$_POST['patronymic'];
	$phone=$_POST['phone'];
	$birthday=$_POST['birthday'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	
	$error_fields = [];

	if ($login === '') {
    $error_fields[] = 'login';
	}

	if ($surname === '') {
    $error_fields[] = 'surname';
	}

	if ($name === '') {
    $error_fields[] = 'name';
	}

	if ($patronymic === '') {
    $error_fields[] = 'patronymic';
	}

	if ($phone === '') {
    $error_fields[] = 'phone';
	}

	if ($birthday === '') {
    $error_fields[] = 'birthday';
	}
	
	if ($mail === '') {
    $error_fields[] = 'mail';
	}
	
	if ($pass === '') {
    $error_fields[] = 'pass';
	}

	if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Check if the fields are correct",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}
	
	$mysqli=new mysqli ('localhost', 'root', '1234', 'dekorstroy');
	$mysqli->query("SET NAMES 'UTF8'");
	
	
	$result=$mysqli->query("SELECT*FROM `client` WHERE `login`='$login'");
	$user=$result->fetch_assoc();
	if(mysqli_num_rows($result)>0){
		$response = [
        "status" => false,
        "type" => 1,
        "message" => "This login already exists",
        "fields" => $user['login']
    ];

    echo json_encode($response);
    die();
	
	}else{
	
	$mysqli->query("INSERT INTO `client` (`login`, `client_surname`, `client_name`, `client_patronymic`, `client_phone`, `client_birthday`, `client_email`, `pass`) VALUES('$login', '$surname', '$name', '$patronymic', '$phone', '$birthday', '$mail', '$pass') ");

	$response = [
        "status" => true,
        "message" => "Registration completed successfully!",
    ];
    echo json_encode($response);
	}
	$mysqli->close();
	header('Location: index1.php');
?>