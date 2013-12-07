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
    <body class="solicitar_busca">
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
                                        <span>Solicitar Busca de Imóveis</span>
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
                            Solicitar <span class="verde">Busca de Imóveis</span>
                        </h1>
                        
                        <div class="box_default row">
                            <p>
                                Preencha as características do imóvel que você procura e em breve um de nossos corretores entrará em contato com você.
                            </p>
                            <form action="" class="box_form">

                                <div class="banner">
                                    <img src="img/banner_busca_imoveis.png" alt="">
                                </div>

                                <fieldset>

                                    <legend>Onde</legend>
                                    
                                    <div class="floatLeft">
                                        <div class="selectType border001 w100">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="Brasil">Brasil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="floatLeft">
                                        <div class="selectType border001 w100">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="SP">SP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="floatLeft">
                                        <div class="selectType border001 w210">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="Todas as localidades">Todas as localidades</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="floatLeft">
                                        <div class="selectType border001 w210">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="São Paulo">São Paulo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="floatLeft">
                                        <div class="selectType border001 w210">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="Selecione a Região/Bairro">Selecione a Região/Bairro</option>
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset>

                                    <legend>O que</legend>
                                    
                                    <div class="">
                                        <div class="selectType border001 w210">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="Comprar">Comprar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="selectType border001 w210">
                                            <input type="text" name="" id="" class="thatsTxt" disabled>
                                            <select name="" id="" class="thatsSelect">
                                                <option value="Selecione o tipo de imóvel">Selecione o tipo de imóvel</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <h4>Estágio da Obra</h4>
                                    <div class="checkboxTypes003">
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Breve Lançamento" name="" id="" class="thatsCheckbox">Breve Lançamento</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Lançamento" name="" id="" class="thatsCheckbox">Lançamento</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Em Construção" name="" id="" class="thatsCheckbox">Em Construção</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Pronto para Morar" name="" id="" class="thatsCheckbox">Pronto para Morar</a>
                                    </div><!-- /checkboxTypes003 -->
                                    
                                    <div class="row">
                                        <h4>Metragem</h4>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                De
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78 mRight10">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                Até
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>Dormitórios</h4>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                De
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78 mRight10">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                Até
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>Vagas de Garagem</h4>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                De
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78 mRight10">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                Até
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78">
                                        </div>
                                    </div>
                                    
                                    <h4>Itens de Lazer</h4>
                                    <div class="checkboxTypes003">
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Academia" name="" id="" class="thatsCheckbox">Academia</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Churrasqueira" name="" id="" class="thatsCheckbox">Churrasqueira</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Mobiliado" name="" id="" class="thatsCheckbox">Mobiliado</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Piscina" name="" id="" class="thatsCheckbox">Piscina</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Quadras de Esportes" name="" id="" class="thatsCheckbox">Quadras de Esportes</a>
                                        <a href="javascript:void(0);" title=""><input type="hidden" value="Salão de Festas" name="" id="" class="thatsCheckbox">Salão de Festas</a>
                                    </div><!-- /checkboxTypes003 -->
                                    
                                    <div class="row">
                                        <h4>Preço da Compra</h4>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                De
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78 mRight10">
                                        </div>
                                        <div class="floatLeft">
                                            <label for="lorem">
                                                Até
                                            </label>
                                            <input name="lorem" type="text" class="type_txt w78">
                                        </div>
                                    </div>
                                    
                                    <div class="row radio">
                                        <h4>Pretende Financiar o Imóvel</h4>
                                        
                                        <label class="floatLeft w78 mRight10">
                                            <input type="radio" name="avaliacao" value="">
                                            Sim
                                        </label>
                                        <label class="floatLeft w78">
                                            <input type="radio" name="avaliacao" value="">
                                            Não
                                        </label>
                                    </div>
                                    
                                    <div class="row radio">
                                        <h4>Gostaria de receber uma proposta de financiamento pelo nosso banco parceiro o HSBC ?</h4>
                                        
                                        <label class="floatLeft w78 mRight10">
                                            <input type="radio" name="avaliacao" value="">
                                            Sim
                                        </label>
                                        <label class="floatLeft w78">
                                            <input type="radio" name="avaliacao" value="">
                                            Não
                                        </label>
                                    </div>
                                    
                                    <label for="">Mensagem</label>
                                    <textarea name="" id=""></textarea>

                                    <label for="">Dias da semana que deseja ser contatado</label>
                                    <div class="selectType border001 w210">
                                        <input type="text" name="" id="" class="thatsTxt" disabled>
                                        <select name="" id="" class="thatsSelect">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <label for="">Horários/ Períodos que deseja ser contatado:</label>
                                    <div class="selectType border001 w210">
                                        <input type="text" name="" id="" class="thatsTxt" disabled>
                                        <select name="" id="" class="thatsSelect">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <h4>Dados para contato</h4>
                                    <label for="nome">
                                            Nome:
                                        </label>
                                        <input name="nome" type="text" class="type_txt">
                                        
                                        <label for="email">
                                            E-mail:
                                        </label>
                                        <input name="email" type="email" class="type_txt mail">
                                    
                                        <label for="telefone">
                                            Telefone:
                                        </label>
                                        <input name="telefone_ddd" type="number" class="type_txt ddd">
                                        <input name="telefone" type="number" class="type_txt tel">
                                        
                                </fieldset>
                                <input type="submit" class="btAzul004 floatRight" value="Enviar">
                                
                                <div class="clear"></div>
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
