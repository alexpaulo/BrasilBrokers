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
    <body class="anunciar_imovel passo3">
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
                                        <span>Venda ou Alugue seu Imóvel</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="#">
                                        <span>Anúnciar Imóvel</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="#">
                                        <span>Passo 3</span>
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
                    

                    <article class="article row">

                        <h1 class="titleDefault">
                            Anunciar um <span class="verde"> Imóvel</span>
                        </h1>

                        <div class="box_default w750 floatLeft">
                            <div class="bar_passos"></div>
                            
                            <h2 class="titleDefault type05">Imagens do Imóvel</h2>

                            <form action="" class="row">
                                
                                <div action="" class="box_form row">
                                    <p>
                                       Para inserir imagens do imóvel, clique no botão "Anexar Fotos”.
                                    </p>

                                    <table class="tab_fotos">
                                        <tr>
                                            <td class="col1">
                                                <img src="img/anunciar_imagens_do_imovel.jpg" alt="">
                                            </td>
                                            <td class="col2">
                                                <label>Destaque</label>
                                                <div class="floatLeft mgRight20">
                                                    <label class="radio">
                                                       <input type="radio" name="tipo_imovel" value="Residencial">
                                                       Sim
                                                    </label>
                                                </div>
                                                <div class="floatLeft">
                                                    <label class="radio">
                                                       <input type="radio" name="tipo_imovel" value="Comercial">
                                                       Não
                                                    </label>
                                                </div>    
                                            </td>
                                            <td class="col3">
                                                <label>Nome da Imagem</label>
                                                <span>
                                                    &lt; nome da imagem &gt;
                                                </span>
                                            </td>
                                            <td class="col4">
                                                <a href="#" class="btAzul004">excluir</a>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <label for="curriculo">
                                        Anexar curriculo:
                                    </label>
                                    <div class="custom-upload fotos">
                                        <input name="curriculo" type="file">
                                        <div class="fake-file">
                                            <input disabled="disabled" class="type_txt" >
                                        </div>
                                    </div>
                                    <p>
                                        Caso não possua as imagens agora, você pode incluí-las depois acessando a área Meus Imoveis <br>
                                        As fotos devem ter no máximo XXMB cada. Limite de XX fotos por imóvel
                                    </p>
                                
                                    <div class="floatRight buttons">
                                        <a href="#" class="btAzul004">voltar</a>
                                        <input type="submit" value="Próximo passo" class="btAzul004 proximo">
                                        <p class="legend">
                                            Próximo passo: Dados do proprietário
                                        </p>
                                        <a href="#" class="btn_salvar">
                                            <span></span>
                                            Salvar  e continuar depois
                                        </a>
                                    </div>

                                    <div class="clear"></div>
                                </div><!-- /box_form -->
                                
                            </form><!-- /form -->
                            
                        </div><!-- /box_default -->

                        <aside class="sidebar dicas">
                           <h2 class="titleDefault">
                                Dicas brasil <span class="verde">Brokers</span>
                            </h2> 
                            <p>
                                O primeiro passo para vender ou alugar seu imóvel é fazer uma boa avaliação. Preencha os campos do formulário abaixo corretamente que a Brasil Brokers ajuda você a vender ou alugar seu imóvel de forma rápida e segura.
                            </p>                 
                        </aside><!-- /sidebar -->
                        
                    </article><!-- /article -->

                    
                    
                </div><!-- /wrap -->
            </section><!-- /section -->

            <?php include("include/footer.php") ?>
        </div><!-- /master -->
        <?php include("include/scripts.php") ?>
    </body>
</html>
