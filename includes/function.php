<?php
function site_url()
{
	return sprintf
	(
	    "%s://%s/CupaLigii/",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}
