<?php 
include __DIR__."/../includes/function.inc.php";

$data = json_decode(file_get_contents("php://input"),true);

if(isset($data) and ($data['form_type'] == 'contactUs')){
	$info = $data['data'];

	$subject = "EU-India Consulting - New Query from Website";
	$html = "<p>Here is the information submitted through website</p><br><p><b>Name: </b>".$info['name']."</p><p><b>Email: </b>".$info['email']."</p><p><b>Comments: </b>".$info['message']."</p>";
	$to = "eu.indiaconsulting@gmail.com";
	sendMail($to, $subject, $html);
	exit;
}

?>