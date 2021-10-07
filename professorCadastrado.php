
<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
    <link rel="icon" type="image/png" sizes="32x32" href="/the_favicon/favicon-32x32.png?v=zX7n49rwEM">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Harvard </title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">         
            <link rel="stylesheet" href="css/jquery-ui.css">            
            <link rel="stylesheet" href="css/main.css">
            <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-16x16.png">
        </head>
        <body>  
            <header id="header" id="home">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                                <ul>
                                    <li><a href="https://www.instagram.com/harvard/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/Harvard" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/Harvard" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/school/harvard-university/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                                <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span
                                        class="text">+1 617-495-1000</span></a>
                                <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span
                                        class="text">harvard@contact.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                        <div id="logo">
                            <a href="index.php"><img src="img/Harvard-removebg-preview.png" alt="" title="" style="max-width: 150px;"></a>
                        </div>
                        <nav id="nav-menu-container">
                            <ul class="nav-menu">
                            <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">Sobre</a></li>
                                <li><a href="courses.php">Alunos</a></li>
                                <li><a href="merenda.php">Merenda</a></li>
                                <li><a href="professor.php">Professores</a></li>
                                <li><a href="curso.php">Cursos</a></li>
                                <li><a href="contact.php">Contato</a></li>
                                <li><a href="chefao.php">Chefão da poha toda!</a></li>
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Tela de cadastrados
                    </h1>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-courses Area -->
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Tela de Cadastrados</h1>

                    </div>
                </div>
            </div>
            <body>
    <h1>
        <center>Tabela<center>
    </h1>

   
    <?php

require './classes/Professor.php';
$professor = new Professor();
$listaDeProfessor = $professor->listar();

?>

<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>


    <tbody>

        <?php foreach ($listaDeProfessor as $p) { ?>
            <tr>
                <td><?php echo $p['codprof']; ?></td>

                <td>
                    <a href="editarProfessor.php?codprof=<?php echo $p['codprof']; ?>">
                        <?php echo utf8_encode($p['nomprof']); ?>
                    </a>
                </td>
                <td><?php echo $p['descprof']; ?></td>

                    <td>
                        <a href="eliminarProfessor.php?codprof=<?php echo $p ['codprof'];?>">
                        Eliminar
                        </a>
                    </td>

            </tr>
        <?php } ?>

    </tbody>
</table>
    <a href="#" class="primary-btn text-uppercase" style="text-align:center">Voltar ao cadastro</a>

   


</body>
        </div>
    </section>
  

    <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Melhores Cursos</h4>
                                <ul>
                                    <li><a href="#">Medicina</a></li>
                                    <li><a href="#">Programador Web</a></li>
                                    <li><a href="#">Administração</a></li>
                                    <li><a href="#">Contabilidade</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Alunos Destaque</h4>
                                <ul>
                                    <li><a href="#">Wagner</a></li>
                                    <li><a href="#">Leonardo</a></li>
                                    <li><a href="#">Guilherme Jeske</a></li>
                                    <li><a href="#">João Victor da Crus</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Projetos</h4>
                                <ul>
                                    <li><a href="#">DSPI de Inovações</a></li>
                                    <li><a href="#">Inova Harvard</a></li>
                                    <li><a href="#">Investimentos Harvard</a></li>
                                    <li><a href="#">Termos de serviços</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Infraestrutura</h4>
                                <ul>
                                    <li><a href="#">Laboratórios</a></li>
                                    <li><a href="#">Laboratorio de Petroquimica</a></li>
                                    <li><a href="#">Bibliotecas</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Notícias</h4>
                                <p>Não perca nenhuma novidade!</p>
                                <div class="" id="mc_embed_signup">
                                    <form target="_blank"
                                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="EMAIL"
                                                placeholder="Coloque seu E-mail " onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Coloque seu E-mail '" required="" type="email">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit">
                                                    <span class="lnr lnr-arrow-right"></span>
                                                </button>
                                            </div>
                                            <div class="info"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom row align-items-center justify-content-between">
                        <p class="footer-text m-0 col-lg-6 col-md-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>  <a href="index.php"
                                target="_blank">Universidade Harvard</a> Todos os direitos reservados
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        <div class="col-lg-6 col-sm-12 footer-social">
                                    <a href="https://www.instagram.com/harvard/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/Harvard" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/Harvard" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/school/harvard-university/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->
        
        
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="js/easing.min.js"></script>
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/jquery.tabs.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/mail-script.js"></script>
            <script src="js/main.js"></script>
        </body>
        
        </html>