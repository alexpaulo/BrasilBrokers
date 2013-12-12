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
    <body class="anunciar_imovel passo4">
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
                                        <span>Passo 4</span>
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
        
                            <form action="" class="row">

                                <h2 class="titleDefault type05">
                                    Dados do Proprietário
                                    <span class="alert">Itens obrigatório</span>
                                </h2>

                                <div action="" class="box_form row">
                                    <fieldset>
                                        <label for="nome">
                                            Nome
                                            <span></span>:
                                        </label>
                                        <input name="nome" type="text" class="type_txt">

                                        <label for="cpf">
                                            CPF
                                            <span></span>:
                                        </label>
                                        <input name="cpf" type="number" class="type_txt w210">

                                        <label for="email">
                                            E-mail
                                            <span></span>:
                                        </label>
                                        <input name="email" type="email" class="type_txt">
                                        
                                        <div class="floatLeft">
                                            <label for="tel_cel">
                                                Telefone Celular
                                                <span></span>:
                                            </label>
                                            <input name="tel_cel_codigo" type="text" class="type_txt ddd">
                                            <input name="tel_cel" type="text" class="type_txt tel">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="tel_res">
                                                Telefone Residencial:
                                            </label>
                                            <input name="tel_res_codigo" type="text" class="type_txt ddd">
                                            <input name="tel_res" type="text" class="type_txt tel">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="tel_com">
                                                Telefone Comercial:
                                            </label>
                                            <input name="tel_com_codigo" type="text" class="type_txt ddd">
                                            <input name="tel_com" type="text" class="type_txt tel">
                                        </div>
                                        <div class="clearfix"></div>

                                        <label for="data_nascimento">
                                            Data de Nascimento:
                                        </label>
                                        <input type="date" class="type_txt w120 ico_data" name="data_nascimento">
                                        
                                    </fieldset>
                                </div><!-- /box_form -->

                                

                                <h2 class="titleDefault type05">
                                    Residência Localização
                                </h2>

                                <div action="" class="box_form row">
                                    
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
                                        <div class="selectType border001 w82">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="floatLeft mRight10">
                                        <label for="uf">Cidade:</label>
                                        <div class="selectType border001 w205">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="floatLeft">
                                        <label for="uf">Bairro:</label>
                                        <div class="selectType border001 w205">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <label for="outro_pais">
                                        Outro País
                                        <span></span>:
                                    </label>
                                    <input name="outro_pais" type="text" class="type_txt">
                                    
                                    <label for="">Leia o texto abaixo, lorem ipsum dolor ( título do label a ser definido pelo cliente )</label>
                                    <div class="text" id="scrollAtuacao">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, in rem sint modi deserunt suscipit veritatis harum et numquam eum sequi placeat voluptatum dignissimos incidunt laborum rerum nisi quo autem!
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, in rem sint modi deserunt suscipit veritatis harum et numquam eum sequi placeat voluptatum dignissimos incidunt laborum rerum nisi quo autem!
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, in rem sint modi deserunt suscipit veritatis harum et numquam eum sequi placeat voluptatum dignissimos incidunt laborum rerum nisi quo autem!
                                        </p>
                                    </div><!-- /text -->

                                    <div class="checkboxTypes003 block">
                                        <a href="javascript:void(0);" title="">
                                            <input type="hidden" value="0" name="" id="" class="thatsCheckbox">
                                            Autorizar a intermediação
                                        </a>
                                    </div>
                                </div><!-- /box_form -->


                                
                                <div class="floatRight buttons">
                                    
                                    <a href="#" class="btAzul004">voltar</a>
                                    <input type="submit" value="Finalizar" class="btAzul004">
                                    
                                    <div class="clear"></div>

                                    <a href="#" class="btn_salvar">
                                        <span></span>
                                        Salvar  e continuar depois
                                    </a>
                                </div>

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
