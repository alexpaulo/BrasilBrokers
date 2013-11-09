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
    <body class="login">
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
                                        <span>Avalie seu Imóvel</span>
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
                            Cadastre-se ou <span class="verde">Identifique-se</span>
                        </h1>

                        <div class="box_default w750 floatLeft">
                            <p>
                                Pensando em vender ou alugar seu imóvel? <br/>
                                A Brasil Brokers ajuda você a realizar o melhor negócio! Preencha o formulário abaixo com os dados do seu imóvel e seus dados pessoais. Nosso departamento comercial entrará em contato assim que possível.
                            </p>
                            
                            <form action="" class="row">
                                <h2 class="titleDefault type05">
                                    Dados do proprietário
                                    <span class="alert">Preenchimento obrigatório</span>
                                </h2>

                                <div action="" class="box_form row">
                                    <fieldset>
                                        <label for="nome">
                                            Nome
                                            <span></span>:
                                        </label>
                                        <input name="nome" type="text" class="">

                                        <label for="email">
                                            E-mail
                                            <span></span>:
                                        </label>
                                        <input name="email" type="email" class="">
                                        
                                        <div class="floatLeft">
                                            <label for="tel_cel">
                                                Telefone Celular
                                                <span></span>:
                                            </label>
                                            <input name="tel_cel_codigo" type="text" class="ddd">
                                            <input name="tel_cel" type="text" class="tel">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="tel_res">
                                                Telefone Residencial
                                                <span></span>:
                                            </label>
                                            <input name="tel_res_codigo" type="text" class="ddd">
                                            <input name="tel_res" type="text" class="tel">
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                        <label for="aceito_email">
                                            <input type="checkbox" name="aceito_email" value="">
                                            Aceito receber mensagens Brasil Brokers por e-mail
                                        </label>
                                        <label for="aceito_sms">
                                            <input type="checkbox" name="" value="aceito_sms">
                                            Aceito receber mensagens Brasil Brokers por SMS
                                        </label>
                                    </fieldset>
                                </div><!-- /box_form -->

                                <h2 class="titleDefault type05">Dados do Imóvel</h2>

                                <div action="" class="box_form row">
                                    <fieldset>
                                        <legend>Localização</legend>
                                        <label for="endereco">
                                            Endereço
                                            <span></span>:
                                        </label>
                                        <input name="endereco" type="text" class="end">
                                        
                                        <label for="cep">
                                            CEP
                                            <span></span>:
                                        </label>
                                        <input name="cep" type="text" class="cep_col1">
                                        <input name="cep_codigo" type="text" class="cep_col2">
                                        <input type="button" value="Completar Endereço" class="btAzul004">
                                    </fieldset>

                                    <fieldset class="floatLeft col1">
                                        <legend>Tipo do Imóvel</legend>
                                        <label for="tipo_residencial" class="floatLeft">
                                            <input type="checkbox" name="tipo_residencial" value="">
                                            Residencial
                                        </label>
                                        <label for="tipo_comercial" class="floatLeft">
                                            <input type="checkbox" name="tipo_comercial" value="">
                                            Comercial
                                        </label>
                                        <div class="clearfix"></div>
                                        <label for="metragem">
                                            Metragem Aproximada:
                                        </label>
                                        <input name="metragem" type="text" class="peq">
                                    </fieldset>

                                    <fieldset class="floatLeft col2 row">
                                        <legend>Finalidade</legend>
                                        <div class="floatLeft">
                                            <label for="finalidade_venda" class="check">
                                                <input type="checkbox" name="finalidade_venda" value="">
                                                Para Venda
                                            </label>
                                            <label for="finalidade_locacao" class="check">
                                                <input type="checkbox" name="finalidade_locacao" value="">
                                                Para Locação
                                            </label>
                                            <label for="finalidade_todas" class="check">
                                                <input type="checkbox" name="finalidade_todas" value="">
                                                Para Venda ou Locação
                                            </label>
                                        </div>  
                                        <div class="floatLeft">
                                            <label for="valor_venda">Valor pretendido da Venda</label>
                                            <input name="valor_venda" type="text" class="peq">
                                            
                                            <label for="valor_locacao">Valor pretendido da Locação</label>
                                            <input name="valor_locacao" type="text" class="peq">
                                        </div>
                                    </fieldset>
                                </div><!-- /box_form -->
                                <input type="submit" value="Enviar" class="btAzul004 floatRight">
                            </form><!-- /form -->
                            
                        </div><!-- /article -->

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
