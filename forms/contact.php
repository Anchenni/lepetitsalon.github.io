<?php
  // -----------------------------------------------------------------------------------------------------------------
  $msg = "Ce message à été envoyer par " . $_POST['name'] . ".\n\n" . $_POST['message'];
	$header = 'From: ' . $_POST['email'];
	$sub = "Code&Share-tmpweb-contact:" . $_POST['subject'];

	mail('code.and.share.s19@gmail.com', $sub, $msg, $header);
	header('Location: ../?mail=true');
?>
