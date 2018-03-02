<?php
/*
Template Name: faq.php
*/
?>

<?php get_header(); ?>

<script type="text/javascript">
	function OnDocumentClicked(value)
	{
		//alert(value);
	}
</script>

<div id="faq">
	<div class="header">
		<?php get_top_banner(); ?>

		<div class="wrap">
			<div class="title">Frequently Asked Questions</div>
		</div>
	</div>

	<div class="content">
		<div class="wrap">

<?php
	echo "<div class='content-title' style='margin-top: 100px;'>Basic Information</div>";
	echo "<div class='content-line' style='margin-top: 58px;'></div>";

	$basic_info_query = new WP_Query('category_name=BasicInformation');

	if ($basic_info_query->have_posts()):
		while($basic_info_query->have_posts()):
			$basic_info_query->the_post();
			$id_value = $post->ID;
			$title_value = $post->post_title;
			echo "<div class='content-frame' onclick='OnDocumentClicked(\"" . $id_value . "\");'>";
				echo "<div class='content-frame-title'>" . $title_value . "</div>";
				echo "<div class='content-frame-icon'></div>";
				echo "<div class='content-line'></div>";
			echo "</div>";
		endwhile;
	endif;

	wp_reset_query();

	echo "<div class='content-title' style='margin-top: 100px;'>Token Information</div>";
	echo "<div class='content-line' style='margin-top: 58px;'></div>";

	$token_info_query = new WP_Query('category_name=TokenInformation');

	if ($token_info_query->have_posts()):
		while($token_info_query->have_posts()):
			$token_info_query->the_post();
			$id_value = $post->ID;
			$title_value = $post->post_title;
			echo "<div class='content-frame' onclick='OnDocumentClicked(\"" . $id_value . "\");'>";
				echo "<div class='content-frame-title'>" . $title_value . "</div>";
				echo "<div class='content-frame-icon'></div>";
				echo "<div class='content-line'></div>";
			echo "</div>";
		endwhile;
	endif;

	wp_reset_query();

	echo "<div class='content-title' style='margin-top: 100px;'>LiveCoins Ecosystem</div>";
	echo "<div class='content-line' style='margin-top: 58px;'></div>";

	$livecoin_info_query = new WP_Query('category_name=LiveCoinEcosystem');

	if ($livecoin_info_query->have_posts()):
		while($livecoin_info_query->have_posts()):
			$livecoin_info_query->the_post();
			$id_value = $post->ID;
			$title_value = $post->post_title;
			echo "<div class='content-frame' onclick='OnDocumentClicked(\"" . $id_value . "\");'>";
				echo "<div class='content-frame-title'>" . $title_value . "</div>";
				echo "<div class='content-frame-icon'></div>";
				echo "<div class='content-line'></div>";
			echo "</div>";
		endwhile;
	endif;

	wp_reset_query();

	echo "<div style='width: 100%; height: 180px'></div>";
?>

		</div>
	</div>
</div>

<?php get_footer(); ?>