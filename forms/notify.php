<?php
  // -----------------------------------------------------------------------------------------------------------------
  $msg = "Ce message à été envoyer par " . $_POST['name'] . ".\n\n" . "veut etre notifier";
	$header = 'From: ' . $_POST['email'];
	$sub = "Code&Share-BeNotified:Notify me request";

	mail('code.and.share.s19@gmail.com', $sub, $msg, $header);
	header('Location: ../?mail=true');
?>
