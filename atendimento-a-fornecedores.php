<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brasil Brokers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1000px">
        
        <link href="fav.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body class="fale_conosco atendimento">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="master">
            <?php include("include/header.php") ?>

            <section class="section">
                <div class="wrap">
                    <div class="row">
                        <div class="breadcrumb">
                            <ol class="crumbs">
                                <li class="first">
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Fale Conosco</span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#">
                                        <span>Atendimento a Fornecedores</span>
                                    </a>
                                </li>  
                            </ol><!-- /breadcrumb -->
                        </div><!-- /breadcrumb -->

                        <div class="topShare">
                            <span class="fb">
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-like" data-href="https://www.brasilbrokers.com.br" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
                            </span>
                            <span class="gplus">
                                <!-- Place this tag where you want the +1 button to render. -->
                                <div class="g-plusone" data-size="medium" data-href="http://www.brasilbrokers.com.br"></div>

                                <!-- Place this tag after the last +1 button tag. -->
                                <script type="text/javascript">
                                  window.___gcfg = {lang: 'pt-BR'};

                                  (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                  })();
                                </script>
                            </span>
                        </div><!-- /topShare -->
                    </div><!-- /row -->
                    

                    <aside class="sidebar">
                        <?php include("include/nav_faleconosco.php") ?>
                    </aside><!-- /sidebar -->

                    <article class="article col2">

                        <h1 class="titleDefault">
                            Atendimento <span class="verde">a fornecedores</span>
                        </h1>
                        
                        <div class="box_default row">   
                            <p>
                                Se você é um prestador de serviços e gostaria de oferecer seus serviços à empresa, preencha o formulário abaixo:
                            </p>
                            <form action="">
                                <div class="box_form">

                                    <fieldset>
                                        <label for="nome">
                                            Nome:
                                        </label>
                                        <input name="nome" type="text" class="type_txt">
                                    
                                        <label for="email">
                                            E-mail:
                                        </label>
                                        <input name="email" type="email" class="type_txt">
                                
                                        <label for="telefone">
                                            Telefone:
                                        </label>
                                        <input name="telefone_ddd" type="number" class="type_txt ddd">
                                        <input name="telefone" type="number" class="type_txt tel">
                                    
                                        <div class="clearfix"></div>
                                        

                                        <label for="nome_empresa">
                                            Nome da Empresa:
                                        </label>
                                        <input name="nome_empresa" type="text" class="type_txt">
                                    
                                        <label for="servico_prestado">
                                            Serviço Prestado:
                                        </label>
                                        <input name="servico_prestado" type="text" class="type_txt">
                                
                                        <label for="servicos">
                                            Escreva abaixo uma breve descrição dos seus serviços:
                                        </label>
                                        <textarea name="servicos" id=""></textarea>
                                        
                                    </fieldset>

                                    <input type="submit" class="btAzul004 floatRight" value="Enviar">
                                    <div class="clear"></div>
                                </div><!-- /box_form -->
                            </form>
                        </div><!-- /box_default -->
                    </article><!-- /article -->
                    <div class="clear"></div>
                    
                </div><!-- /wrap -->
            </section><!-- /section -->

            <?php include("include/footer.php") ?>
        </div><!-- /master -->
        <?php include("include/scripts.php") ?>
    </body>
</html>
