<?php

function get_top_banner()
{
	$ret = '';
	$ret .= "<div id='banner'>";
		$ret .= "<div class='logo'></div>";
		$ret .= "<div class='english navsize'>English</div>";
		$ret .= "<div class='lang-split'>|</div>";
		$ret .= "<div class='chinese navsize text-transparent'>Chinese</div>";

		$ret .= "<div class='contacts navsize text-transparent'>CONTACTS</div>";
		$ret .= "<div class='faq navsize text-transparent'>FAQ</div>";
		$ret .= "<div class='team navsize text-transparent'>TEAM</div>";
		$ret .= "<div class='documents navsize text-transparent'>DOCUMENTS</div>";
		$ret .= "<div class='roadmap navsize text-transparent'>ROADMAP</div>";
		$ret .= "<div class='tokensale navsize text-transparent'>TOKEN SALE</div>";
		$ret .= "<div class='howworks navsize text-transparent'>HOW LIVECOINS WORKS</div>";
		$ret .= "<div class='whattosolve navsize text-transparent'>WHAT TO SOLVE</div>";

	$ret .= "</div>";
	echo $ret;
}

?>