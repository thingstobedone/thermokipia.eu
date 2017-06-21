<?php
if( isset($_GET['year']) && !empty($_GET['year'])){ 
	header('Content-disposition: attachment; filename='.$_GET['year'].'.pdf');
	header('Content-type: application/pdf');
	readfile('pdf/'.$_GET['year'].'.pdf');
}
?>