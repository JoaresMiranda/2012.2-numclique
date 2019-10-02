        <!-- Links -->
        <div id="Links">
        	<div id="SquareBanner">
            	<h3>Publicidade</h3>
                <div>
                	<?php if (function_exists('dfrads')) { echo dfrads('7563931'); } ?>
                </div>
            </div>
            
            <div id="Parceiros">
            	<h3>Parceiros</h3>
                <div>
                	<ul id="thumbBlogs">
                    	<li><a href="http://desdeabarriga.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_extra/desde-a-barriga.jpg"></a></li>
                        <li><a href="http://iradex.net" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_extra/iradex.jpg"></a></li>
                        <li><a href="http://garotasnerds.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_extra/garotas-nerds.jpg"></a></li>
                        <li><a href="http://ueba.com.br" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_extra/ueba.jpg"></a></li>
                        <li><a href="http://foradarota.com.br" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_extra/fora-da-rota.jpg"></a></li>
                    </ul>
                	<ul id="linksBlogs">
						<?php
                        $bookmarks = get_bookmarks(array(
                                'orderby' => 'name',
                                'order' => 'ASC'
                            ));
                        
                        foreach ($bookmarks as $bm) {
                        printf('<li><a href="%s">%s</a></li>', $bm->link_url, __($bm->link_name));
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Links -->
        
        <!-- Tags -->
        <div id="Tags">
            <h3>Tags</h3>
            <div>
                <?php wp_tag_cloud('number=60'); ?>
            </div>
        </div>
        <!-- /Tags -->
