<?php get_header(); global $query_string; ?>
		
        <?php 
		if( is_paged() ):
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		?>
        <p id="tituloPagina">Página <?php echo $paged; ?></p>
        <?php 
		endif; 
		?>
    
		<?php if( ! is_paged() && is_home() ) : 
			
			if( is_home() )
				query_posts( $query_string . '&posts_per_page=5' );		
		
		?>

		<?php
		
         while (have_posts()) : the_post(); ?>
        
        <!-- Post -->
        <div id="Post">
            <div id="TopPost">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="metaPost"><?php the_time('d \d\e F \d\e Y') ?> - por <?php the_author_posts_link(); ?></p>
            </div>
        
            <div id="TxtPost">
                <?php the_content('(Mais...)'); ?>
            </div>
        
            <div id="FooterPost">
                <p class="btsShare"><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
            </div>
        </div>
        <!-- /Post -->
        
        <?php break; endwhile; ?>        
		
        <?php endif; ?>
        
        <?php include_once 'redes-sociais.php'; ?>
    
        <!-- Posts -->
        <div id="Posts">
            <?php			
             while (have_posts()) : the_post(); 
			 ?>
            	
            <!-- box post -->
            <div class="boxPost">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbposts' ); ?></a>
                <div class="tituloBoxPost">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="footerBoxPost">
                    <p><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
                </div>
            </div>
            <!-- /box post -->
            
            <?php 
				
			endwhile; ?>        
            <?php wp_reset_query(); ?>
        </div>
        <!-- Posts -->
            
        <!-- Paginacao -->
        <div id="Paginacao">
        	<?php wp_pagenavi(); ?>
        </div>
        <!-- /Paginacao -->
        
<?php get_sidebar(); ?>
        
<?php get_footer(); ?>