<?php
/*
Template Name: document.php
*/
?>

<?php get_header(); ?>

<div id="document">
	<div class="header">
		<?php get_top_banner(); ?>
	</div>

	<div class="content">
		<div class="wrap">
			<div class="title">Documents</div>

<script type="text/javascript">
	
	var count = 0;
	var move_max_cnt = 0;
	var obj_count = 0;
	var obj_pos_array;

	$(document).ready(function(){
		var obj = document.getElementById("cell0");

		while (obj != null) 
		{
			obj_count++;
			obj = document.getElementById("cell" + obj_count.toString());
		}

		if (obj_count > 0)
		{
			obj_pos_array = new Array(obj_count);
			for (var i = 0; i < obj_count; ++i)
			{
				obj_pos_array[i] = i;
			}
		}
	});

	function OnDocumentClicked(value)
	{
		//alert(value);
	}

	function OnNextClicked()
	{
		if (move_max_cnt > 0 || obj_count <= 0)
		{
			return;
		}

		for(var i = 0; i < obj_count; ++i)
		{
			var obj_name = "#cell" + i.toString();

			var CurPosIdx = obj_pos_array[i];

			if (CurPosIdx > 2) {
				CurPosIdx = CurPosIdx - obj_count;
			}

			var NextPosIdx = CurPosIdx + 1;

			obj_pos_array[i] = NextPosIdx;

			var StartPos = (260 + 22) * CurPosIdx;
			var EndPos = (260 + 22) * NextPosIdx;

			move_max_cnt++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= -1 && CurPosIdx <= 2)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx < 0 || NextPosIdx > 2)
				{
					$(obj_name).hide();
				}
				move_max_cnt--;
			});
		}
	}

	function OnPreviewClicked()
	{
		if (move_max_cnt > 0 || obj_count <= 0)
		{
			return;
		}

		for(var i = 0; i < obj_count; ++i)
		{
			var obj_name = "#cell" + i.toString();

			var CurPosIdx = obj_pos_array[i];

			if (CurPosIdx < 0) {
				CurPosIdx = CurPosIdx + obj_count;
			}

			var NextPosIdx = CurPosIdx - 1;

			obj_pos_array[i] = NextPosIdx;

			var StartPos = (260 + 22) * CurPosIdx;
			var EndPos = (260 + 22) * NextPosIdx;

			move_max_cnt++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= 0 && CurPosIdx <= 3)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx < 0 || NextPosIdx > 2)
				{
					$(obj_name).hide();
				}
				move_max_cnt--;
			});
		}
	}

</script>

<?php
	$document_query = new WP_Query('category_name=DocumentName');
	$count = 0;
	$title_array = array();
	$content_array = array();

	if ($document_query->have_posts()):
		while($document_query->have_posts()):
			$document_query->the_post();
			$title_array[] = $post->post_title;
			$content_array[] = $post->post_content;
			$count++;
		endwhile;
	endif;

	wp_reset_query();

	if ($count == 0)
	{
		return;
	}

	if ($count > 3)
	{
		echo "<div class='arrow leftarrow' onclick='OnPreviewClicked();'></div>";
		echo "<div class='arrow rightarrow' onclick='OnNextClicked();'></div>";
	}

	if ($count == 1)
	{
		$title = $title_array[0];
		$content = $content_array[0];
		echo "<div class='cell' style='left:382px; top:182px' onclick='OnDocumentClicked(\"" . $title . "\");'>";
			echo $content;
		echo "</div>";
	}
	elseif ($count == 2)
	{
		$title1 = $title_array[0];
		$content1 = $content_array[0];
		echo "<div class='cell' style='left:241px; top:182px' onclick='OnDocumentClicked(\"" . $title1 . "\");'>";
			echo $content1;
		echo "</div>";

		$title2 = $title_array[1];
		$content2 = $content_array[1];
		echo "<div class='cell' style='left:523px; top:182px' onclick='OnDocumentClicked(\"" . $title2 . "\");'>";
			echo $content2;
		echo "</div>";
	}
	elseif ($count >= 3)
	{
		echo "<div class='scrollrect'>";

		for ($i = 0; $i < $count; $i++)
		{
			$offset = (260 + 22) * $i;

			$title = $title_array[$i];
			$content = $content_array[$i];

			echo "<div id='cell" . $i . "' class='cell' style='left:" . $offset . "px; top:0px' onclick='OnDocumentClicked(\"" . $title . "\");'>";
				echo $content_array[$i];
			echo "</div>";
		}

		echo "</div>";
	}
?>

		</div>
	</div>
</div>

<?php get_footer(); ?>