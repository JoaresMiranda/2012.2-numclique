<?php get_header(); ?>

    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>    	
        <!-- Post -->
        <div id="Post">
            <div id="TopPost">
            	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="metaPost"><?php the_time('d \d\e F \d\e Y') ?> - por <?php the_author_posts_link(); ?></p>
            </div>

            <div class="AdSenseTopPost">
                <?php if (function_exists('dfrads')) { echo dfrads('8998482'); } ?>
            </div>
            
            <div id="TxtPost">
            	<?php the_content(); ?>
            </div>
            
            <div id="FooterPost">
            	<p class="btsShare"><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
            </div>
        </div>
        <!-- /Post -->
        
	<?php }
    } wp_reset_query(); ?>


        <?php include_once 'redes-sociais.php'; ?>
		
        <!-- Posts Relacionados -->
        <div id="PostsRelacionados">

			<?php
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);
            
            if ($tags) {
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
            'tag_in' => $tag_ids,
            'post_not_in' => array($post->ID),
            'posts_per_page'=>3, // Number of related posts to display.
            'caller_get_posts'=>1
            );
            
            $my_query = new wp_query( $args );
			
			if( $my_query->have_posts() ): 
            ?>
            <p id="tituloPagina">Posts Relacionados</p>
            <?php
            while( $my_query->have_posts() ):
            $my_query->the_post();
            ?>

            <!-- box post -->
            <div class="boxPost">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbposts' ); ?></a>
                <div class="tituloBoxPost">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <!-- /box post -->

            <? endwhile; 
				endif;
            }
            $post = $orig_post;
            wp_reset_query();
            ?>
        
        </div>
        <!-- /Posts Relacionados -->        

		<?php comments_template( ); ?>

<?php get_sidebar(); ?>
        
<?php get_footer(); ?>