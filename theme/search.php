<?php get_header(); ?>


		<?php
        if (have_posts ()) : ?>

		<?php include_once 'redes-sociais.php'; ?>

        <!-- Posts -->
        <div id="Posts">

        <?php while (have_posts ()) : the_post(); ?>    	
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

        </div>
        <!-- Posts -->

		<?php	
        else: ?>

        <!-- Post -->
        <div id="Post">
            <div id="TopPost">
            	<h1>Oops...</h1>
                <p class="metaPost">deu zica! Não encontramos nada com o termo que você está buscando.</p>
            </div>
            
            <div id="TxtPost">
                <p>Vamos tentar o seguinte... volte para a <a href="<?php bloginfo('home'); ?>">página inicial</a> do blog que dá certo!</p>
            </div>
            
        </div>
        <!-- /Post -->

		<?php include_once 'redes-sociais.php'; ?>

		<?php
        endif; ?>       

<?php get_sidebar(); ?>
        
<?php get_footer(); ?>