<div class="about-author clearfix">

       <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
	   <h4>Written by: <?php the_author(); ?></h4>
           <?php the_author_meta('description'); ?>

       	 <?php if ( !get_the_author_meta('twitter', $current_author->ID) ) : ?> 
                <!--no Twitter info provided, display default user -->
		<a href="http://twitter.com/loneplacebo" class="twitter-follow-button">Follow @loneplacebo</a>
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>	
					
		<?php else : ?> 
	                <!--link to author's twitter account-->
			<a href="<?php the_author_meta('twitter', $current_author->ID); ?>" class="twitter-follow-button">Follow @tonykhue</a>
			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
		<?php endif; ?>

</div>