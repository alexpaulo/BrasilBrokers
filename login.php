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
                                        <span>Cadastre-se ou Identifique-se</span>
                                    </a>
                                </li>  
                            </ol><!-- /breadcrumb -->
                        </div><!-- /breadcrumb -->
                    </div><!-- /row -->
                    

                    <article class="article row">

                        <h1 class="titleDefault">
                            Cadastre-se ou <span class="verde">Identifique-se</span>
                        </h1>

                        <div class="box_default row">
                            <p>
                                Para acessar a área do cliente, cadastre-se ou se caso já esteja cadastrado, identifique-se através de seu login e senha.
                            </p>
                            
                            <form action="" class="box_form floatLeft">

                                <fieldset>
                                    <legend>Já tenho cadastro</legend>
                                    <label for="email">
                                        E-mail:
                                    </label>
                                    <input name="email" type="email" class="">
                                    
                                    <label for="senha">
                                        Senha:
                                    </label>
                                    <input name="senha" type="password" class="peq">

                                    <input type="submit" class="btAzul004" value="Entrar">
                                    <div class="clearfix"></div>
                                    <a href="#" title="Esqueci minha senha">Esqueci minha senha</a>

                                    <p class="alert">
                                        Faça seu login, <strong>complete seu cadastro</strong> e receba ofertas exclusivas por e-mail!
                                    </p>
                                    
                                </fieldset>
                            </form><!-- /box_form -->

                            <form action="" class="box_form floatRight">
                                <legend>Ainda não tenho cadastro</legend>
                                <p>
                                    Cadastre-se e tenha acesso a todas as funcionalidades da <br>Área do Cliente
                                </p>
                                <fieldset>

                                    <label for="Nome">
                                        Nome:
                                    </label>
                                    <input name="Nome" type="text" class="">

                                    <label for="email">
                                        E-mail:
                                    </label>
                                    <input name="email" type="email" class="">

                                    <label for="senha">
                                        Senha:
                                    </label>
                                    <input name="senha" type="password" class="peq">

                                    <label for="senha_confirma">
                                        Confirmar Senha:
                                    </label>
                                    <input name="senha_confirma" type="password" class="peq">

                                    <input type="submit" class="btAzul004" value="Entrar">
                                    
                                </fieldset>
                            </form><!-- /box_form -->

                            <p>
                                Utilize o Facebook para fazer o login <a href="#" class="login_facebook"></a>
                            </p>
                            
                        </div><!-- /box_default -->
                        
                    </article><!-- /article -->

                    
                    
                </div><!-- /wrap -->
            </section><!-- /section -->

            <?php include("include/footer.php") ?>
        </div><!-- /master -->
        <?php include("include/scripts.php") ?>
    </body>
</html>
