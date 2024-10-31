<?php
function NFFW_new(){

	echo '<div id="fb-root"></div>';

	echo "<script>(function(d, s, id) {

	var js, fjs = d.getElementsByTagName(s)[0];

	if (d.getElementById(id)) return;

	js = d.createElement(s); js.id = id;

	js.src = '//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3';

	fjs.parentNode.insertBefore(js, fjs);

	}(document, 'script', 'facebook-jssdk'));</script>";

}

add_action('wp_head', 'NFFW_new');