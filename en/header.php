<?php
/*
Template Name: header.php
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

		<script text="text/javascript">
			function SwitchPage(index)
			{
				$target_link = '';
				switch(index)
				{
					case 0:
						$target_link = '/index.php';
						break;
					case 1:
						$target_link = '/index.php/whattosolve/';
						break;
					case 2:
						$target_link = '/index.php/howlivecoinswork/';
						break;
					case 3:
						$target_link = '/index.php/tokeninfo/';
						break;
					case 4:
						$target_link = '/index.php/roadmap/';
						break;
					case 5:
						$target_link = '/index.php/document/';
						break;
					case 6:
						$target_link = '/index.php/team/';
						break;
					case 7:
						$target_link = '/index.php/faq/';
						break;
					case 8:
						$target_link = '/index.php/contact/';
						break;
					}

				window.location.href='<?php echo home_url(); ?>' + $target_link;
			}
		</script>
	</head>

	<body>