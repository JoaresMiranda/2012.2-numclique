    </div>
    <!-- /Content -->
    
    <!-- Footer -->
    <div id="Footer">
        <div id="ContentFooter">
            <h5><a href="#">NumClique</a></h5>
            
            <div id="Busca">
                <form id="frmBusca" method="get" action="<?php bloginfo('home'); ?>">
                    <fieldset>
                        <legend>Pesquisa</legend>
                        <p>
                            <label for="Palavra">Palavra:</label>
                            <input type="text" value="busca" name="s" id="s" onfocus="if(this.value=='busca')this.value=''" onblur="if(this.value=='')this.value='busca'" />
                            <button name="sa" id="Buscar" type="submit">Ok</button>
                        </p>
                    </fieldset>
                </form>
                <p id="Assine">Assine nosso <a href="http://www.numclique.net/feed">Feed / RSS</a></p>
            </div>
        </div>
    </div>
    <!-- /Footer -->

    <div id="Creditos">
        <p>Tema criado por <a href="http://www.numclique.net">Joares Miranda</a></p>
        <p>utilizando <a href="http://wordpress.org" target="_blank">wordpress</a></p>
    </div>

</div>
<!-- /Site -->

<?php wp_footer(); ?>

</body>
</html>