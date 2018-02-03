<?php
/*
Template Name: index.php
 */
?>

<?php get_header(); ?>

<script type="text/javascript">
	var selected_btn_index = -1;

	function OnContentButtonClicked(index)
	{
		if (selected_btn_index == index || index < 1 || index > 3)
		{
			return;
		}

		var root_path = "<?php echo get_stylesheet_directory_uri(); ?>";

		SetImage("whitepaper-icon", index == 1, "url(" + root_path + '/assets/image/0/home_icon_whitepaper_unselected.png)', "url(" + root_path + '/assets/image/0/home_icon_whitepaper_select.png)');
		SetImage("whitepaper", index == 1, "url(" + root_path + '/assets/image/0/home_button_select_blue.png)', "url(" + root_path + '/assets/image/0/home_button_unselected_blue.png)');
		SetImage("presentation-icon", index == 2, "url(" + root_path + '/assets/image/0/home_icon_presentation_unselected.png)', "url(" + root_path + '/assets/image/0/home_icon_presentation_select.png)');
		SetImage("presentation", index == 2, "url(" + root_path + '/assets/image/0/home_button_select_blue.png)', "url(" + root_path + '/assets/image/0/home_button_unselected_blue.png)');
		SetImage("tutorial-icon", index == 3, "url(" + root_path + '/assets/image/0/home_icon_tutorial_unselected.png)', "url(" + root_path + '/assets/image/0/home_icon_tutorial_select.png)');
		SetImage("tutorial", index == 3, "url(" + root_path + '/assets/image/0/home_button_select_blue.png)', "url(" + root_path + '/assets/image/0/home_button_unselected_blue.png)');
		
		selected_btn_index = index;
	}

	function SetImage(obj_name, bSelected, selected_value, unselected_value)
	{
		var name = "#" + obj_name;
		var target_value = bSelected ? selected_value : unselected_value;
		$(name).css("background-image", target_value);
	}
</script>

<div id="index">
	<div class="header">
		<?php get_top_banner(); ?>
		<div class="wrap">
			<div class="title">
				Reshape Live<br/>Event Market with A<br/>Decentralized Ecosystem
			</div>
			<div class="sub-title">
				Build a direct funding and selling channel between artists <br/>and fans. No intermediaries and more. Artists and fans <br/>can work together on a live event
			</div>
			<div id="video">
				<div class="play"></div>
			</div>
			<div id="livecoins">
				<span class="ds text">Direct Sales</span>
				<span class="sm text">Service Market</span>
				<span class="ep text">Efficient Promoting</span>
				<span class="af text">Alernative Funding</span>
				<span class="tp text">Ticket Pricing</span>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="wrap">
			<div class="img-tts content-img">
				<span class="content-title">2,000,000,000 LIN</span>
				<span class="content-sub-title">Total Token Supply</span>
			</div>
			<div class="img-sc content-img">
				<span class="content-title">$ 6,000,000</span>
				<span class="content-sub-title">Soft Cap</span>
			</div>
			<div class="img-hc content-img">
				<span class="content-title">$ 12,000,000</span>
				<span class="content-sub-title">Hard Cap</span>
			</div>
			<div id="whitepaper" class="btn btn-whitepaper" onclick="OnContentButtonClicked(1)">
				<div id="whitepaper-icon" class="btn-icon icon-whitepaper">
					<span class="icon-text">Whitepaper</span>
				</div>
			</div>
			<div id="presentation" class="btn btn-presentation" onclick="OnContentButtonClicked(2)">
				<div id="presentation-icon" class="btn-icon icon-presentation">
					<span class="icon-text">Presentation</span>
				</div>
			</div>
			<div id="tutorial" class="btn btn-tutorial" onclick="OnContentButtonClicked(3)">
				<div id="tutorial-icon" class="btn-icon icon-tutorial">
					<span class="icon-text">Tutorial</span>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>