<?php
/*
Template Name: howlivecoinswork.php
*/
?>

<?php get_header(); ?>

<style type="text/css">

/* arrow content */
.arrow_content {
	width: 300px;
	height: 80px;
	display: table-cell;
	vertical-align: middle;
	text-align: left;
	padding: 10px;
}

/* top arrow frame */
.arrow_box_top {
	position: absolute;
	background: #ffffff;
	border-radius: 5px;
}
.arrow_box_top:after {
	bottom: 100%;
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(255, 255, 255, 0);
	border-bottom-color: #ffffff;
	border-width: 10px;
	margin-left: -10px;
}

/* left arrow frame */
.arrow_box_left {
	position: absolute;
	background: #ffffff;
	border-radius: 5px;
}
.arrow_box_left:after {
	right: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(255, 255, 255, 0);
	border-right-color: #ffffff;
	border-width: 10px;
	margin-top: -10px;
}

/* right arrow frame */

.arrow_box_right {
	position: absolute;
	background: #ffffff;
	border-radius: 5px;
}
.arrow_box_right:after {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(255, 255, 255, 0);
	border-left-color: #ffffff;
	border-width: 10px;
	margin-top: -10px;
}

/* bottom arrow frame */
.arrow_box_bottom {
	position: absolute;
	background: #ffffff;
	border-radius: 5px;
}
.arrow_box_bottom:after {
	top: 100%;
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(255, 255, 255, 0);
	border-top-color: #ffffff;
	border-width: 10px;
	margin-left: -10px;
}

.interactive-area {
	width: 40px;
	height: 40px;
	position: absolute;
	cursor:pointer;
}
</style>

<script type="text/javascript">
	function ShowTips(idx)
	{
		//alert(idx);
		$('#mask').show();

		for (var i = 1; i <= 11; ++i)
		{
			var obj_name = '#tip' + i;

			if (i == idx)
			{
				$(obj_name).show();
			}
			else
			{
				$(obj_name).hide();
			}
		}
	}

	function HideTips()
	{
		$('#mask').hide();

		for (var i = 0; i <= 11; ++i)
		{
			var obj_name = '#tip' + i;

			$(obj_name).hide();
		}
	}
</script>

<div id="hlcw">
	<div class="header">
		<?php get_top_banner(); ?>

		<div class="wrap">
			<div class="title">How Livecoins Works</div>
			<div class="title-content">
				Marketing system: less spending, higher conversion rate <br/> Pricing System: rational, incentive-compatible and efficient <br/>Service providers system: competitive, value-added and transparent
			</div>
			<div class="flow-image"></div>
			<div id="mask" class="flow-image-mask" style="display: none;"></div>


			<div id="tip1" class="arrow_box_left" style="left: 130px; top: 530px; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Fans：</font>Use fiat money/BTC/ETH to buy LIN in token exchanges
				</div>
			</div>
			<div id="area1" class="interactive-area" style="left: 76px; top: 550px;" onmousemove="ShowTips(1);" onmouseout="HideTips();"></div>

			<div id="tip2" class="arrow_box_left" style="left: 430px; top: 555px; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Review Committee：</font>Give feedbacks to the applications submitted (approved/rejected)
				</div>
			</div>
			<div id="area2" class="interactive-area" style="left: 378px; top: 575px;" onmousemove="ShowTips(2);" onmouseout="HideTips();"></div>

			<div id="tip3" class="arrow_box_left" style="left: 355px; top: 605px; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Fans：</font>Participated in the bidding of the live events published on the platforms. The bidding includes two parts: tickets pricing system &amp; event discount pricing system. Fans can participate in anyone/ both of the biddings.

				</div>
			</div>
			<div id="area3" class="interactive-area" style="left: 300px; top: 655px;" onmousemove="ShowTips(3);" onmouseout="HideTips();"></div>

			<div id="tip4" class="arrow_box_left" style="left: 650px; top: 665px; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Pricing System：</font>Pricing system can determine the allocation and pricing of tickets and discounts using a well-designed mechanism. Each participant will receive a pack with a pair of rights, which is called EventPack.
				</div>
			</div>
			<div id="area4" class="interactive-area" style="left: 598px; top: 715px;" onmousemove="ShowTips(4);" onmouseout="HideTips();"></div>

			<div id="tip5" class="arrow_box_bottom" style="left: 695px; top: 450px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">LiveCoins Ecosystem：</font>LiveCoins Ecosystem will  ask for a 1% commission for each successful event, and will immediately burn  these LIN.
				</div>
			</div>
			<div id="area5" class="interactive-area" style="left: 832px; top: 570px;" onmousemove="ShowTips(5);" onmouseout="HideTips();"></div>

			<div id="tip6" class="arrow_box_bottom" style="left: 320px; top: 770px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">EventPack：</font>Tickets will be sent to those fans who won the tickets in the bidding according to the determined allocation results.
				</div>
			</div>
			<div id="area6" class="interactive-area" style="left: 455px; top: 882px;" onmousemove="ShowTips(6);" onmouseout="HideTips();"></div>

			<div id="tip7" class="arrow_box_bottom" style="left: 275px; top: 875px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Marketing System：</font>As a kind of promotion, artists can choose to give back a part of the event profits to fans to encourage them for further support and participation.
				</div>
			</div>
			<div id="area7" class="interactive-area" style="left: 410px; top: 990px;" onmousemove="ShowTips(7);" onmouseout="HideTips();"></div>

			<div id="tip8" class="arrow_box_bottom" style="left: 540px; top: 435px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">EventPack：</font>According to what was written in application, a part of the funds collected will be used as deposits to buy services. Artists cannot use this part of funds for their own interests.
				</div>
			</div>
			<div id="area8" class="interactive-area" style="left: 675px; top: 568px;" onmousemove="ShowTips(8);" onmouseout="HideTips();"></div>

			<div id="tip9" class="arrow_box_top" style="left: 318px; top: 460px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">Artists：</font>Choose the services needed in Service Providers System. The cost will be paid by the deposits to buy services.
				</div>
			</div>
			<div id="area9" class="interactive-area" style="left: 450px; top: 405px;" onmousemove="ShowTips(9);" onmouseout="HideTips();"></div>

			<div id="tip10" class="arrow_box_bottom" style="left: 320px; top: 783px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">EventPack：</font>After the events have been carried out as planned, EventPack will distribute the event discount, which is a certain percentage of event profits, according to the allocation  determined by the pricing system.
				</div>
			</div>
			<div id="area10" class="interactive-area" style="left: 455px; top: 935px;" onmousemove="ShowTips(10);" onmouseout="HideTips();"></div>

			<div id="tip11" class="arrow_box_right" style="left: 240px; top: 533px; width: 310px !important; display: none;">
				<div class="arrow_content">
					<font style="font-weight: bold;">EventPack：</font>After the events have been carried out as planned, EventPack will give the artists the remaining funds as their return for giving the performances
				</div>
			</div>
			<div id="area11" class="interactive-area" style="left: 565px; top: 565px;" onmousemove="ShowTips(11);" onmouseout="HideTips();"></div>


			<div class="info-frame if1">
				<div class="if-title">Artist</div>
				<div class="if-content">
					<ul>
						<li>Directly reach potential fans</li>
						<li>Raise funds from fans</li>
						<li>Regain values eroded by intermediaries</li>
					</ul>
				</div>
			</div>

			<div class="info-frame if2">
				<div class="if-title">Fans</div>
				<div class="if-content">
					<ul>
						<li>Lower ticket prices</li>
						<li>Work directly with artist on live event</li>
						<li>Support artists through secured and low-cost funding</li>
						<li>More diversified artists and new artists</li>
					</ul>
				</div>
			</div>

			<div class="info-frame if3">
				<div class="if-title">Service Providers</div>
				<div class="if-content">
					<ul>
						<li>More chances to work with artists</li>
						<li>A fair market to compete on value</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>