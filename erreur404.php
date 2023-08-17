<?php
	if (!$_SERVER['REQUEST_URI'] == "")
		$getp = substr($_SERVER['REQUEST_URI'],1);
	else
		$getp = "cv";

if($getp == "cv" || $getp == "mon-portfolio"){
	header('Status: 200');
	header('Location: /?p=' . $getp );
	break;
}
else{
	header('Status: 200');
	header('Location: /404.php' );	
}
?>