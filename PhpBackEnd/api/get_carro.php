<?php
include __DIR__.'/../control/CarroControl.php';
$carroControl = new CarroControl();

header('Content-type: application/json');

if ($carroControl->selectAll()) {
	http_response_code(200);
	echo json_encode($carroControl->selectAll());



}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>