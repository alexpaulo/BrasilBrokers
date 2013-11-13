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
    <body class="imoveis_favoritos">
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
                                        <span>Imóveis Favoritos</span>
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
                            Imóveis <span class="verde">Favoritos</span>
                        </h1>
                        
                        <h3 class="subtitleDefault">
                            Lista de imóveis selecionados por você.
                        </h3>
                        
                        <div class="headerBusca row">
                            <div class="result">Exibidos <strong>10</strong> de <strong>1000</strong></div>
                            
                            <div class="floatRight">
                                <div class="selectType w100 border001">
                                    <input type="text" name="" id="" class="thatsTxt" disabled>
                                    <select name="" id="" class="thatsSelect">
                                        <option value="">Ordenar por</option>
                                        <option value="">EUA</option>
                                        <option value="">Argentina</option>
                                    </select>
                                </div>
                            </div><!-- /floatRight -->
                            <div class="clear"></div>
                            
                            <a href="javascript:void(0);" title="" class="btAzul001 floatLeft btComparar">
                                <span class="txt">Comparar imóveis selecionados </span>
                            </a>

                            <a href="javascript:void(0);" title="" class="btAzul001 floatRight">
                                <span class="txt">Solicitar mais informações de toda a seleção de imóveis</span>
                            </a>
                        </div><!-- /headerBusca -->
                        
                        <div class="wrap_resultado_da_busca row">
                            <ul class="lista_resultado_da_busca">
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel exclusivo"></div>
                                            <div class="thatsLabel lancamento"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="">A partir de:</span>
                                                <span class="price">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel pronto"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="line">De: R$ 986.000,00</span>
                                                <span class="price destaq">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel exclusivo"></div>
                                            <div class="thatsLabel breve"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="">A partir de:</span>
                                                <span class="price">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel exclusivo"></div>
                                            <div class="thatsLabel lancamento"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="">A partir de:</span>
                                                <span class="price">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel exclusivo"></div>
                                            <div class="thatsLabel pronto"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="line">De: R$ 986.000,00</span>
                                                <span class="price destaq">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                                <li>
                                    <div class="title">
                                        <strong>RESIDENCIAL BARCELONETA</strong>
                                        <div class="checkboxTypes002">
                                            <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                        </div>
                                        <div class="titleBts">
                                            <a href="#" class="thatsLinks" title="Corretor online"><span class="label_tooltip">Corretor online</span><span class="icoHeadSet003"></span></a>
                                            <a href="#" class="thatsLinks" title="Atendimento por email"><span class="label_tooltip">Atendimento por email</span><span class="icoMail003"></span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="infos row">
                                        <div class="wrapImg">
                                            <div class="thatsImg">
                                                <img src="img/exemploIMGimovel001.jpg" height="129" width="191" alt="">
                                            </div>

                                            <div class="thatsLabel breve"></div>
                                            
                                            <div class="clear"></div>
                                        </div><!-- /wrapImg -->

                                        <div class="wrapTxt">
                                            <div class="thatsDescr">
                                                Santana - São Paulo - SP<br>
                                                380.00m² de área privativa<br>
                                                1, 2 ou 3 Dorms (sendo 2 suítes)
                                            </div>
                                            
                                            <div class="thatsPrice">
                                                <span class="">A partir de:</span>
                                                <span class="price">R$ 986.000,00</span>
                                            </div>
                                        </div><!-- /wrapTxt -->

                                        <div class="wrapRight">    
                                            <a href="#" title="" class="btAzul002">
                                                <span>Mais detalhes</span>
                                            </a>

                                            <div class="checkboxTypes002">
                                                <a href="javascript:void(0);" title=""><input type="hidden" value="0" name="" id="" class="thatsCheckbox">Comparar imóvel</a>
                                            </div>
                                        </div><!-- /wrapRight -->
                                    </div><!-- /infos -->
                                </li>
                            </ul><!-- /lista_resultado_da_busca -->
                            <div class="clear"></div>

                            <div class="pagerType001">
                                <a href="#" title="" class="">Anterior</a>
                                <a href="#" title="" class="pageNum ativo">01</a>
                                <a href="#" title="" class="pageNum">02</a>
                                <a href="#" title="" class="pageNum">03</a>
                                <a href="#" title="" class="pageNum">04</a>
                                <a href="#" title="" class="pageNum">05</a>
                                <a href="#" title="" class="">Próxima</a>
                            </div><!-- /pagerType001 -->
                        </div><!-- /wrap_resultado_da_busca -->
                       
                        <div class="clear"></div>
                    
                    </article><!-- /article -->
                    <div class="clear"></div>
                    
                </div><!-- /wrap -->
            </section><!-- /section -->

            <?php include("include/footer.php") ?>
        </div><!-- /master -->
        <?php include("include/scripts.php") ?>
    </body>
</html>
