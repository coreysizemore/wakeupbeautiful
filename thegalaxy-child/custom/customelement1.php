<?php
	
	if( have_rows('services_blocks') ):

		echo '<div id="service_block_wrapper">';
		
		echo '<h2>Our Services</h2><h1>Cosmetic Procedures</h1><span class="grad-bar"></span>';
				
		while ( have_rows('services_blocks') ) : the_row();
				        
			echo '<div class="services_block"><div class="services_info">';
			
			$link = get_sub_field('page_link');
						
			echo '<h3>' . get_sub_field('title') . '</h3>';
						
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div></div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>