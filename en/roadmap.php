<?php
/*
Template Name: roadmap.php
*/
?>

<?php get_header(); ?>

<div id="roadmap">
	<div class="header">
		<?php get_top_banner(); ?>
	</div>

	<div class="content">
		<div class="wrap">
			<div class="title">Roadmap</div>
			<div id="timeline">
				<div class="date topdate d1">2017Q3</div>
				<div class="date bottomdate d2">2018Q1</div>
				<div class="date topdate d3">2018Q2</div>
				<div class="date bottomdate d4">2018Q4</div>
				<div class="date topdate d5">2019Q2</div>

				<div class="frame topframe f1"></div>
				<div class="text-area topframe f1">
					<div class="text toptext">
						<ul type="disc">
							<li>Problem analysis</li>
							<li>Blockchain is introduced in solution</li>
							<li>Supported by Chinese top 3 ticket exchanges</li>
						</ul>
					</div>
				</div>

				<div class="frame bottomframe f2 flipy"></div>
				<div class="text-area bottomframe f2">
					<div class="text bottomtext">
						<ul type="disc">
							<li>Plans proposal to artist managers</li>
						</ul>
					</div>
				</div>

				<div class="frame topframe f3"></div>
				<div class="text-area topframe f3">
					<div class="text toptext">
						<ul type="disc">
							<li>Token sale</li>
							<li>Detailed design of ecosystem</li>
						</ul>
					</div>
				</div>

				<div class="frame bottomframe f4 flipy"></div>
				<div class="text-area bottomframe f4">
					<div class="text bottomtext">
						<ul type="disc">
							<li>Open source implem</li>
							<li>APIs formation and connection to major fan portal</li>
							<li>Beta version available</li>
						</ul>
					</div>
				</div>

				<div class="frame topframe f5"></div>
				<div class="text-area topframe f5">
					<div class="text toptext">
						<ul type="disc">
							<li>Full version available</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>