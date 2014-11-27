<article class="video">
	
	<aside class="aside-category">
		<?php the_category('&nbsp;&nbsp; | &nbsp;&nbsp;', 'single'); ?>
	</aside>
	
	<h2>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink zu <?php the_title(); ?>" rel="bookmark">
			<i class="fa fa-video-camera"></i><?php the_title(); ?>
		</a>
	</h2>
		
	<aside class="aside-meta">
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
			<i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_time( 'd.m.Y' ); ?>
		</time>
		
		<span class="author">
			<i class="fa fa-user"></i>&nbsp;&nbsp;<?php the_author_link(); ?>
		</span>
			
		<span class="comments">
		<i class="fa fa-comments"></i>&nbsp;&nbsp;
		<?php comments_popup_link(	'Kommentar schreiben',
									'1 Kommentar',
									'% Kommentare'); ?>
		</span>
	</aside>
		
	<?php the_content(); ?>
	
</article>
