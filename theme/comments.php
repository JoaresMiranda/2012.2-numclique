<!-- Comentarios -->
		<div id="Comentarios">
        	
              <?php if ( comments_open() ) : ?>
              
 				 <?php if (get_option('comment_registration') && !$user_ID ) : ?>
  						<p id="comments-blocked">Voc&ecirc; precisa <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logar</a> para comentar.</p>
  				<?php else : ?>

            
                        <div id="CxFormComentario">
                            <p class="tituloPagina">Comentários</p>
                            <p class="aviso">Atenção! Todos os comentários são sujeitos à moderação, pois não queremos passar aos leitores comentários que não condizem com o que estamos comentando, como exemplo: xingamentos, vírus e outras informações com sentido parecido. Lembrando que aceitamos a sua opinião e críticas são bem aceitas quando possui coerência com o que estamos falando. Deixe seu comentário e entre na conversa.</p>
                            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="Comente">
                                <p><span>Nome</span> <input type="text" name="author"  value="<?php echo $comment_author; ?>" id="NomeComentario"></p>
                                <p><span>E-mail</span> <input type="text" name="email" value="<?php echo $comment_author_email; ?>" id="EmailComentario"></p>
                                <p><span>Site</span> <input type="text" name="url" value="<?php echo $comment_author_url; ?>" id="SiteComentario"></p>
                                <p><span>Comentário</span> <textarea name="comment" id="MensagemComentario"></textarea></p>
                                <p><input name="submit" type="submit" value="Publicar Comentário" id="BtComentar"></p>
                                 <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                                 <?php do_action('comment_form', $post->ID); ?>
                            </form>
                        </div>
                        
           	 <?php endif; ?>
             
                        <div id="ComentarioFacebook">
                            <div id="fb-root"></div>
                            <script>(function(d){
                              var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                              js = d.createElement('script'); js.id = id; js.async = true;
                              js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                              d.getElementsByTagName('head')[0].appendChild(js);
                            }(document));</script>
                            <div class="fb-comments" data-href="<?php echo urlencode(get_permalink($post->ID)); ?>" data-num-posts="10" data-width="670"></div>
                        </div>
            
           
             <?php if ($comments) : ?>
            
            <div id="OlhaQuemEstaFalando">
            	<p class="tituloPagina">Olha quem está falando</p>
                
                <div class="cxComentario">
                	
                   
						  <?php 
                            $numPingBacks = $numComments = 0;
                            
                            foreach ($comments as $comment) 
							{
                                if (get_comment_type() != "comment") 
									$numPingBacks++;
								else
                            		$numComments++;
                            }
                        
                           
                            if ($numComments != 0) : 
					?>
                    	
                            <?php foreach ($comments as $comment) : ?>
                            <?php if (get_comment_type()=="comment") : ?>
                        	
                             <div class="boxComentario" id="<?php comment_ID() ?>">
                                <div class="infoComentarista">
                                     <?php echo get_avatar( $comment, $size = '50' ); ?>
                                    <h4><?php get_autor_comentarios_link() ?></h4>
                                    <p class="dataComentario"><?php comment_date('d \d\e F \d\e Y') ?></p>
                                </div>
                                <div class="msgComentarista">
                                        <?php if ($comment->comment_approved == '0') : ?>
                                            <em>Seu coment&aacute;rio est&aacute; aguardando modera&ccedil;&atilde;o.</em>
                                        <?php else: ?>
                                            <?php comment_text() ?>
                                        <?php endif; ?>
                                </div>
                              </div>
                         
                            <?php endif; 
							endforeach; ?>
                   <?php  endif; ?>
                   
            </div>
          </div>
          <? endif; ?>
            <?php else: ?>
            	<!-- TODO : Comentario fechado -->
			<?php endif; ?>
        </div>
		<!-- /Comentarios -->
