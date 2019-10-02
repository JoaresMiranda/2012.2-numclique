<?php
// Template Name: Contato
?>

<?php
if($_POST['btEnviarCt']): //Se o formulário tiver sido enviado

	//Pegando informações do formulário
	$nome = utf8_decode(trim($_POST['nome']));
	$email = trim($_POST['email']);
	$assunto = utf8_decode(trim($_POST['assunto']));
	$mensagem = utf8_decode(trim($_POST['msg']));
	
	//Validando o envio
	if($nome == NULL && !$erro) $erro = "nome";
	if($email == NULL && !$erro) $erro = "email";
	if($assunto == NULL && !$erro) $erro = "assunto";
	if($mensagem == NULL && !$erro) $erro = "mensagem";
			
	//Se houver erro
	if($erro):
		if($erro == "nome") $alert = "Preencha o seu nome!";
		if($erro == "email") $alert = "Preencha o seu e-mail!";
		if($erro == "assunto") $alert = "Preencha o assunto!";
		if($erro == "mensagem") $alert = "Preencha a mensagem!";
		
		echo '<script type="text/javascript">';
		echo '	alert("'.$alert.'");';
		echo '	history.go(-1);';
		echo '</script>';
	else:
		//Corpo do e-mail
		$corpo .= "<strong>Nome: </strong>$nome<br />\r";
		$corpo .= "<strong>E-mail: </strong>$email<br />\r";
		$corpo .= "<strong>Assunto: </strong>$assunto<br /><br />\r\r";
		$corpo .= nl2br($mensagem);
		
		//Monta o e-mail para envio
		$headers .= "From: $nome <$email>\r\n";
		$headers .= "Reply-To: $nome <$email>\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "X-Mailer: PHP/".phpversion();

		$enviarMail = wp_mail("colunistas@numclique.net", "[NumClique] - ".$assunto, $corpo, $headers);
		
		if($enviarMail):
			echo '<script type="text/javascript">';
			echo '	alert("E-mail enviado com sucesso!\nAguarde que em breve entrarei em contato!");';
			echo '	window.location="";';
			echo '</script>';
		else:
			echo '<script type="text/javascript">';
			echo '	alert("Falha no envio do e-mail!\nTente novamente mais tarde!");';
			echo '	history.go(-1);';
			echo '</script>';
		endif;
	endif;
	
endif;
?>

<?php get_header(); ?>

    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>    	
        <!-- Post -->
        <div id="Post">
            <div id="TopPost">
            	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="metaPost">mais conhecido como Fale conosco</p>
            </div>
            
            <div id="TxtPost">
            	<?php the_content(); ?>

                <form id="ctForm" action="" method="post">
                    <p><span id="nome">* Nome</span> <input type="text" id="ctNome" name="nome" /></p>
                    <p><span id="email">* E-mail</span> <input type="text" id="ctEMail" name="email" /></p>
                    <p><span id="url">URL (site)</span> <input type="text" id="ctURL" name="url" /></p>
                    <p><span id="assunto">* Assunto</span> <input type="text" id="ctAssunto" name="assunto" /></p>
                    <p><span id="mensagem">* Mensagem</span> <textarea id="ctMsgs" name="msg"></textarea></p>
                    <p><input type="submit" value="Enviar mensagem" id="btEnviarCt" name="btEnviarCt" /></p>
                </form>

            </div>
            
            <div id="FooterPost">
            	<p class="btsShare"><g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
            </div>
        </div>
        <!-- /Post -->
        
	<?php }
    } wp_reset_query(); ?>


	<?php include_once 'redes-sociais.php'; ?>

<?php get_sidebar(); ?>
        
<?php get_footer(); ?>