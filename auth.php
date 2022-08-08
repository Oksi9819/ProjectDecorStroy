
<?php
	session_start();

	$login=$_POST['login'];
	$pass=$_POST['pass'];
	
	$error_fields = [];

	if ($login === '') {
    $error_fields[] = 'login';
	}

	if ($pass === '') {
    $error_fields[] = 'password';
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
	
	$result=$mysqli->query("SELECT*FROM `client` WHERE `login`='$login' AND `pass`='$pass'");
	$user=$result->fetch_assoc();
	
	
	if(!$user) {
    $response = [
        "status" => false,
        "message" => "Incorrect login or password",
    ];

    echo json_encode($response);
	 die();
	 header('Location: index1.php');
	}else {
	$_SESSION['user']=[
	"id"=>$user['id_client'],
	"login"=>$user['login'],
	"name"=>$user['client_name'],
	"surname"=>$user['client_surname']
	];
	
	 $response = [
        "status" => true,
		"message"=>"Hello, ".$_SESSION['user']['name'],
    ];

    echo json_encode($response);
	
	if ($user['id_client']== 18){
		header('Location: admin.php');
	}else{
	header('Location: index1.php');}
	}
	
	
?>