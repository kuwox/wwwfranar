<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$cookie_prefix = "ts-";
$cookie_time = time()+31536000;
if (isset($_GET['scheme'])) {
	$scheme = $_GET['scheme'];
	$_SESSION[$cookie_prefix. 'scheme'] = $scheme;
	setcookie ($cookie_prefix. 'scheme', $scheme, $cookie_time, '/', false);
}
$jstpl = base64_decode('PGRpdiBjbGFzcz0idHBsY3JpZ2h0Ij48YSBocmVmPSJodHRwOi8vd3d3Lmpvb21sYXNoYWNrLmNvbSIgdGl0bGU9Ikpvb21sYSAxLjUgVGVtcGxhdGVzIj5Kb29tbGEgMS41IFRlbXBsYXRlcyBieSBKb29tbGFzaGFjazwvYT48L2Rpdj4=');
?>
