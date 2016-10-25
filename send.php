<?php
	if(empty($_COOKIE['sms']) && ($_POST['name'] != null) && ($_POST['phone'] != null))
	{
		
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	
	
	$alpha_sms_key='5dbae9a7965c066698d93a74bd008c8bd189cb41';
		$input_xml = '<?xml version="1.0" encoding="utf-8" ?>
		<package key="'.$alpha_sms_key.'">
		<message>
		<msg recipient= "+380636451202" sender= "GarageZpUa" type="0">Клиент с opt.xenon.com.ua. '.$name.': '.$phone.' '.$str.'</msg>
		
		
		</message>
		
		</package>';
		$curl = curl_init("http://alphasms.ua/api/xml.php"); 
		$xml = array("xml" => "test.xml"); 
		curl_setopt($curl, CURLOPT_POST, true); 
		curl_setopt($curl, CURLOPT_POSTFIELDS, $input_xml);
		curl_exec($curl); 
		setcookie ("sms", "send",time()+86400);
	}
	else
	{
		return "Вы уже заказали звонок.";
	}
?>