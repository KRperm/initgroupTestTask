<?php

require_once './smarty-3.1.32/libs/Smarty.class.php';

$smarty = new Smarty();

function sendHTMLemail($email, $theme, $content){
	$headers  = 'MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
	$headers .= 'From: webmaster@example.com';
	if( mail($email, $theme, $content, $headers)){
		return "GOOD";
	}else{
		return "BAD";
	}
	
}

$db = mysqli_connect("host", "login", "password", "dbname");
mysqli_set_charset($db, "utf8");
if(!$db){
	echo "Не смог открыть БД\n";
}else{
	$qr = mysqli_query($db, "SELECT * FROM client INNER JOIN manager ON manager.managerId = client.clientAssignedManager");

	while($row = mysqli_fetch_array($qr)){
		echo $row["clientName"]."<br>\n";
		echo $row["clientEmail"]."<br>\n";
		echo $row["managerName"]."<br>\n";
		echo $row["managerJob"]."<br>\n";
		echo $row["managerPhone"]."<br>\n";
		echo $row["managerEmail"]."<br>\n";

		$smarty->assign('clientName', $row["clientName"]);
		$smarty->assign('managerName', $row["managerName"]);
		$smarty->assign('managerJob', $row["managerJob"]);
		$smarty->assign('managerPhone', $row["managerPhone"]);
		$smarty->assign('managerEmail', $row["managerEmail"]);

		echo sendHTMLemail($row["clientEmail"], "Коммерческое письмо", $smarty->fetch("mail.tpl"))."<br>\n";

		echo "<br>\n";
	}

}

mysqli_close($db);

/*
clientName
managerName
managerJob
managerPhone
managerEmail
https://templates.mailchimp.com/resources/inline-css/
*/