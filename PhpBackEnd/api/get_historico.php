<?php
include __DIR__.'/../control/historicoControl.php';
$historicoControl = new HistoricoControl();

header('Content-type: application/json');

if ($historicoControl->selectAll()) {
	http_response_code(200);
	echo json_encode($historicoControl->selectAll());



}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>