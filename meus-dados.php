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
    <body class="meus_dados">
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
                                        <span>Meus Imóveis</span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#">
                                        <span>Meus Dados</span>
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
                        <?php include("include/nav_meusimoveis.php") ?>
                    </aside><!-- /sidebar -->

                    <article class="article col2">

                        <h1 class="titleDefault">
                            Alterar dados<span class="verde">de cadastro</span>
                        </h1>
                        
                        <div class="box_default row">   
                            
                            <p>
                                Altere os dados necessários e clique em <strong>"Alterar"</strong>.
                            </p>
                            <form action="" class="box_form">

                                <fieldset>
                                    <label for="nome">
                                        Nome:
                                    </label>
                                    <input name="nome" type="text" class="type_txt ">

                                    <label for="email">
                                        E-mail:
                                    </label>
                                    <input name="email" type="email" class="type_txt ">
                                
                                    <label for="senha">
                                        Senha:
                                    </label>
                                    <input name="senha" type="password" class="type_txt w210">
                                    <a href="#" class="">Alterar</a>

                                    <label for="senha_confirma">
                                        Confirmar Senha:
                                    </label>
                                    <input name="senha_confirma" type="password" class="type_txt w210">

                                    <label for="cpf">
                                        CPF:
                                    </label>
                                    <input name="cpf" type="number" class="type_txt w210">

                                    <label for="tel_celular">
                                        Telefone Celular:
                                    </label>
                                    <input name="tel_celular_ddd" type="number" class="type_txt w30">
                                    <input name="tel_celular" type="tel" class="type_txt w155">
                                    
                                    <label for="data_nascimento">
                                        Data de Nascimento:
                                    </label>
                                    <input name="data_nascimento" type="date" class="type_txt w110">

                                    <label for="tel_residencial">
                                        Telefone Residencial:
                                    </label>
                                    <input name="tel_residencial_ddd" type="number" class="type_txt w30">
                                    <input name="tel_residencial" type="tel" class="type_txt w155">

                                    <label for="cep">
                                        CEP:
                                    </label>
                                    <input name="cep" type="number" class="type_txt w130 mRight10">
                                    <input name="cep_cod" type="number" class="type_txt w45 mRight10">

                                    <input name="" type="button" class="btAzul004" value="Completar Endereço">

                                    <div class="floatLeft">
                                        <label for="endereco">
                                            Endereço:
                                        </label>
                                        <input name="endereco" type="text" class="type_txt w384 mRight10">
                                    </div>
                                    <div class="floatLeft">
                                        <label for="numero">
                                            Número:
                                        </label>
                                        <input name="numero" type="number" class="type_txt w50 mRight10">
                                    </div>
                                    <div class="floatLeft">
                                        <label for="complemento">
                                            Complemento:
                                        </label>
                                        <input name="complemento" type="text" class="type_txt w155">
                                    </div>

                                    <div class="clearfix"></div>
                                    
                                    <div class="floatLeft mRight10">
                                        <label for="uf">UF:</label>
                                        <div class="selectType border001 w80">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="floatLeft mRight10">
                                        <label for="uf">Cidade:</label>
                                        <div class="selectType border001 w218">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="floatLeft">
                                        <label for="uf">Bairro:</label>
                                        <div class="selectType border001 w218">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <label for="outro_pais">
                                        Outro País:
                                    </label>
                                    <input name="outro_pais" type="text" class="type_txt">
                                        
                                    <div class="checkboxTypes003 block">
                                        <a href="javascript:void(0);" title="">
                                            <input type="hidden" value="0" name="" id="" class="thatsCheckbox">
                                            Aceito receber Ofertas e mensagens da Brasil Brokers  por e-mail
                                        </a>
                                    </div>
                                    <div class="checkboxTypes003 block">
                                        <a href="javascript:void(0);" title="">
                                            <input type="hidden" value="0" name="" id="" class="thatsCheckbox">
                                            Aceito receber mensagens SMS sobre produtos da Brasil Brokers
                                        </a>
                                    </div>

                                    <p class="mTop30">
                                        Caso deseje cancelar o seu cadastro <a href="#">clique aqui</a>.
                                    </p>

                                    <input type="submit" class="btAzul004" value="Alterar">

                                </fieldset>
                            </form><!-- /box_form -->

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
