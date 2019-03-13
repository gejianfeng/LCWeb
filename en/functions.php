<?php

function get_top_banner()
{
	$ret = '';
	$ret .= "<div id='banner'>";
		$ret .= "<div class='logo' style='cursor:pointer;' onclick='SwitchPage(0)'></div>";
		$ret .= "<div class='english navsize'>English</div>";
		$ret .= "<div class='lang-split'>|</div>";
		$ret .= "<div class='chinese navsize text-transparent'>Chinese</div>";

		if (is_page('contact')) 
		{
			$ret .= "<div class='contacts navsize'>CONTACTS</div>";
		}
		else
		{
			$ret .= "<div class='contacts navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(8)'>CONTACTS</div>";
		}

		if (is_page('document')) 
		{
			$ret .= "<div class='documents navsize'>DOCUMENTS</div>";
		}
		else
		{
			$ret .= "<div class='documents navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(5)'>DOCUMENTS</div>";
		}

		if (is_page('faq')) {
			$ret .= "<div class='faq navsize'>FAQ</div>";
		}
		else
		{
			$ret .= "<div class='faq navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(7)'>FAQ</div>";
		}

		if (is_page('howlivecoinswork')) 
		{
			$ret .= "<div class='howworks navsize'>HOW LIVECOINS WORKS</div>";
		}
		else
		{
			$ret .= "<div class='howworks navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(2)'>HOW LIVECOINS WORKS</div>";
		}

		if (is_page('roadmap')) 
		{
			$ret .= "<div class='roadmap navsize'>ROADMAP</div>";
		}
		else
		{
			$ret .= "<div class='roadmap navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(4)'>ROADMAP</div>";
		}

		//if (is_page('team')) 
		//{
		//	$ret .= "<div class='team navsize'>TEAM</div>";
		//}
		//else
		//{
		//	$ret .= "<div class='team navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(6)'>TEAM</div>";
		//}

		if (is_page('tokeninfo')) 
		{
			$ret .= "<div class='tokensale navsize'>TOKEN SALE</div>";
		}
		else
		{
			$ret .= "<div class='tokensale navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(3)'>TOKEN SALE</div>";
		}

		if (is_page('whattosolve')) 
		{
			$ret .= "<div class='whattosolve navsize'>WHAT TO SOLVE</div>";
		}
		else
		{
			$ret .= "<div class='whattosolve navsize text-transparent' style='cursor:pointer;' onclick='SwitchPage(1)'>WHAT TO SOLVE</div>";
		}

		//$ret .= "<div class='contacts navsize text-transparent'>CONTACTS</div>";
		//$ret .= "<div class='faq navsize text-transparent'>FAQ</div>";
		//$ret .= "<div class='team navsize text-transparent'>TEAM</div>";
		//$ret .= "<div class='documents navsize text-transparent'>DOCUMENTS</div>";
		//$ret .= "<div class='roadmap navsize text-transparent'>ROADMAP</div>";
		//$ret .= "<div class='tokensale navsize text-transparent'>TOKEN SALE</div>";
		//$ret .= "<div class='howworks navsize text-transparent'>HOW LIVECOINS WORKS</div>";
		//$ret .= "<div class='whattosolve navsize text-transparent'>WHAT TO SOLVE</div>";

	$ret .= "</div>";
	echo $ret;
}

?>