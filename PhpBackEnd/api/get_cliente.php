<?php
include __DIR__.'/../control/ClienteControl.php';
$clienteControl = new ClienteControl();

header('Content-type: application/json');

if ($clienteControl->selectAll()) {
	http_response_code(200);
	echo json_encode($clienteControl->selectAll());



}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>