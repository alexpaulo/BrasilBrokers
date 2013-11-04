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
    <body class="institucional servicos_exclusivos">
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
                                        <span>Serviços Exclusivos</span>
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

                    <article class="article">

                        <h1 class="titleDefault">
                            Serviços <span class="verde">Exclusivos</span>
                        </h1>
                        
                        <h3 class="subtitleDefault">
                            Nessa página você encontra a descrição de nossos Serviços Exclusivos por região.
                        </h3>
                        
                        <img src="img/img_inst_servicoexclusivo.jpg" alt="">
                        
                        <div class="box_pesquisa">
                            <h4>
                                consultar os serviços exclusivos em outras regiões
                            </h4>
                            <form action="">
                                <div class="wrapSelects row">
                                    <div class="selectType w125">
                                        <input type="text" name="" id="" class="thatsTxt" disabled>
                                        <select name="" id="" class="thatsSelect">
                                            <option value="">SP</option>
                                        </select>
                                    </div><!-- /selectType -->
                                    
                                    <div class="selectType w200">
                                        <input type="text" name="" id="" class="thatsTxt" disabled>
                                        <select name="" id="" class="thatsSelect">
                                            <option value="">Ribeirão Preto</option>
                                        </select>
                                    </div><!-- /selectType -->

                                </div><!-- /wrapSelects -->
                                <input type="submit" class="btAzul004" value="Pesquisar">
                            </form>
                        </div><!-- /box_pesquisa -->
                        
                        <div class="box_default bdNone row">
                            <h4 class="titleDefault type02">
                                Novos Serviços
                            </h4>
                            <p>
                                <a href="servicos-exclusivos_detalhe.php" class="lnk_gray" >
                                    Nosso foco é a geração de VGV com qualidade para Brasil Brokers e para os clientes. 
                                </a>
                            </p>                                                  
                            
                            <ul class="list_half">
                                <li>
                                    <h5>Inteligência Imobiliária</h5>
                                    <p>Estudos e pesquisas de mercado.</p>
                                </li>
                                <li>
                                    <h5>Crédito Imobiliário</h5>
                                    <p>Especialistas para auxiliar você.</p>
                                </li>
                                <li>
                                    <h5>Consultoria Jurídica</h5>
                                    <p>Departamento Jurídico altamente qualificado.</p>
                                </li>
                                <li>
                                    <h5>Marketing</h5>
                                    <p>EA gente conhece e reconhece a força do marketing.</p>
                                </li>
                            </ul>
                                
                        </div><!-- /box_default -->
                    </article><!-- /article -->
                    <div class="clear"></div>
                </div><!-- /wrap -->
            </section><!-- /section -->

            <?php include("include/footer.php") ?>
        </div>
        <?php include("include/scripts.php") ?>
    </body>
</html>
