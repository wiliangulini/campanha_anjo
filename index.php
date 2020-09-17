<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <title>Landing Anjos</title>
    <?php echo file_get_contents("hotjar.html") ?>
    <style>
        <?php echo file_get_contents("bootstrap.min.css") ?>
       <?php echo file_get_contents("style.css") ?>
       <?php echo file_get_contents("owl.carousel.min.css") ?>
    </style>
</head>
<body>
    <div class="container-fluid top">
        <div class="row d-flex justify-content-center">
            <div class="col-md-1">
                <picture>
                    <source srcset="img/Artboard2.webp" type="image/webp">
                    <source srcset="img/Artboard2.png" type="image/png">
                    <img src="img/Artboard2.png">
                </picture>
            </div>
            <div class="col-md-10 d-flex">
                <div class="menu">
                        <nav>
                            <div id="menuMobile" class="menuMobile">
                                <div class="mm_line"></div>
                                <div class="mm_line"></div>
                                <div class="mm_line"></div>
                            </div>
                            <ul class="ul">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#funcao">Como Funciona</a></li>
                                <li><a href="#funcao1">Quem Faz</a></li>
                                <li><a href="#funcao2">Depoimentos</a></li>
                                <a href="cadastro/index.php" class="btn btn-primary">Entrar</a>
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid background">
            <div class="row">
                <article class="col-md-6">
                    <h1><strong>Ajude dezenas de pessoas sem sair de casa!</strong></h1>
                    <p>As suas experiências podem encorajar alguém a encontrar uma solução para o problema que esta vivendo. Orgulhe-se da sua história e das suas batalhas!</p>
                    <div class="a">
                        <a href="cadastro/index.php" class="btn btn-primary">Quero fazer parte disso :)</a>
                        <a href="#" class="btn btn2" data-toggle="modal" data-target="#exampleModal">Se preferir assista ao vídeo</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Assista nosso vídeo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <video controls>
                                   <source src="EYHE.mp4" type="video/mp4"/>
                               </video>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>    
                </article>
            </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <h1 id="funcao">Somos uma plataforma de suporte<br> emocional e evolução pessoal.</h1>
                <p>Acreditamos que dialogar é fundamental para o desenvolvimento humano. Assim,<br> todos podem ter um caminho para converter as dificuldades em aprendizado.</p>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard3.webp" type="image/webp">
                        <source srcset="img/Artboard3.png" type="image/png">
                        <img src="img/Artboard3.png">
                    </picture>
                    <h4><strong>ANJOS</strong></h4>
                    <p>Pessoas que estão dispostas a ajudar quem está passando por sutações difíceis na vida.</p>
                </div>
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard2.webp" type="image/webp">
                        <source srcset="img/Artboard2.png" type="image/png">
                        <img src="img/Artboard2.png">
                    </picture>
                    <h4><strong>PLATAFORMA</strong></h4>
                    <p>Nós realizamos a conexão! Somos um canal entre quem precisa de ajuda e quem quer ajudar.</p>
                </div>
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard4.webp" type="image/webp">
                        <source srcset="img/Artboard4.png" type="image/png">
                        <img src="img/Artboard4.png">
                    </picture>
                    <h4><strong>HERÓIS</strong></h4>
                    <p>Pessoas que estão passando por desafios e precisam de auxilio emocional para enfrentá-las.</p>
                </div>
            </div>
        </div>
    </section>
    <aside>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-md-6">
                    <picture>
                        <source srcset="img/Artboard12.webp" type="image/webp">
                        <source srcset="img/Artboard12.png" type="image/png">
                        <img src="img/Artboard12.png">
                    </picture>
                </div>
                <div class="col-md-6">
                    <h3>Por que ser um Anjo Eyhe?</h3>
                    <p>Ser parte de algo que realmente faz diferença na vida das pessoas traz mais sentido e propósito à nossa jornada. A gratidão é infinita e aqui você se torna merecedor de toda ela.<br><br> Ser um Anjo significa prestar auxílio com muita empatia, através do nosso chat, nos momentos em que as coisas parecem estar desmoronando para quem está do outro lado da tela.</p>
                    <a href="" class="btn btn-primary">Conheça um de nossos Anjos</a>
                </div>
            </div>
        </div>
    </aside>
    <section class="section1">
        <div class="container-fluid">
            <h2>Principais requisitos para ser um anjo</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard5.webp" type="image/webp">
                        <source srcset="img/Artboard5.png" type="image/png">
                        <img src="img/Artboard5.png">
                    </picture>
                    <p>Preocupar-se com o<br> bem-estar do próximo, ter<br> paciência e compaixão.</p>
                </div>
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard6.webp" type="image/webp">
                        <source srcset="img/Artboard6.png" type="image/png">
                        <img src="img/Artboard6.png">
                    </picture>
                    <p>Estar disposto a compartilhar<br> sua história para inspirar<br> outras pessoas.</p>
                </div>
                <div class="col-md-3 d-flex">
                    <picture>
                        <source srcset="img/Artboard7.webp" type="image/webp">
                        <source srcset="img/Artboard7.png" type="image/png">
                        <img src="img/Artboard7.png">
                    </picture>
                    <p>Ceder alguns minutos do seu<br> dia para fazer a diferença na<br> vida de alguém.</p>
                </div>
                <div class="pintar"></div>
            </div>
        </div>
        <div class="container-fluid c2">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <h5 id="funcao1"><strong>Conheça alguns de nossos Anjos</strong></h5>
                    <p>Se você estiver precisando de uma renda extra, você também pode se tornar um Anjo Premium! Você receberá um valor em dinheiro em troca do tempo que está dispondo para conversar com pessoas que precisam de apoio.</p>
                </div>
            </div>
            <div class="pintar2"></div>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                       <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                       <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="img/rap.webp" type="image/webp">
                            <source srcset="img/rap.png" type="image/png">
                            <img src="img/rap.png">
                        </picture>
                    </div>
                </div>
        </div>
    </section>
    <div class="container">
        <h2 id=""><strong>Veja como funciona para participar:</strong></h2>
        <div class="row justify-content-around">
            <div class="col-md-4">
                <picture>
                    <source srcset="img/Artboard8.webp" type="image/webp">
                    <source srcset="img/Artboard8.png" type="image/png">
                    <img src="img/Artboard8.png">
                </picture>
                <h4>1º Cadastra-se</h4>
                <p>É muito importante completar seu cadastro com todas as informações solicitadas. Assim podemos te conehcer melhor e entrar em contato!</p>
            </div>
            <div class="col-md-4">
                <picture>
                    <source srcset="img/Artboard9.webp" type="image/webp">
                    <source srcset="img/Artboard9.png" type="image/png">
                    <img src="img/Artboard9.png">
                </picture>
                <h4>2º Realize o treinamento</h4>
                <p>Após o cadastro, vamos disponibilizar um breve treinamento sobre o funcionamento da plataforma e sobre o método da escuta ativa.</p>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-4">
                <picture>
                    <source srcset="img/Artboard10.webp" type="image/webp">
                    <source srcset="img/Artboard10.png" type="image/png">
                    <img src="img/Artboard10.png">
                </picture>
                <h4>3º Converse</h4>
                <p>Quando completar seu treinamento, o time Eyhe vai entrar em contato através de uma ligação agendada, para liberar seuacesso ao perfil de Anjo.</p>
            </div>
            <div class="col-md-4">
                <picture>
                    <source srcset="img/Artboard11.webp" type="image/webp">
                    <source srcset="img/Artboard11.png" type="image/png">
                    <img src="img/Artboard11.png">
                </picture>
                <h4>4º Comece a receber</h4>
                <p>Após realizar 3 atendimentos de forma voluntaria e gratuita, você ja pode começar a ser remunerado financeiramente por cada conexão, se assim quiser.</p>
            </div>
        </div>
        <div class="row justify-content-center cadastro">
            <a href="cadastro/index.php" class="btn btn-primary">Quero me cadastrar</a>
        </div>
    </div>
    <aside>
    <div class="container-fluid car" id="funcao2">
		<div id="slideshow" class="slide carousel">
			<ol class="carousel-indicators">
				<li data-target="#slideshow" data-slide-to="0" class="active"></li>
				<li data-target="#slideshow" data-slide-to="1"></li>
				<li data-target="#slideshow" data-slide-to="2"></li>
				<li data-target="#slideshow" data-slide-to="3"></li>
			</ol>	
			<div class="carousel-inner">
				<div class="carousel-item active">
                    <picture>
                        <source srcset="img/rap.webp" type="image/webp">
                        <source srcset="img/rap.png" type="image/png">
                        <img src="img/rap.png">
                    </picture>
                    <h3>Anderson Wilian Baldin</h3>
                    <p>"O valor proposto para cada conversa, mesmo sendo simbólico <br>quando comparado à preciosidade do seu tempo, é dinâmico,<br> assim como funciona em outros aplicativos."</p>
				</div>
				<div class="carousel-item">
                    <picture>
                        <source srcset="img/rap.webp" type="image/webp">
                        <source srcset="img/rap.png" type="image/png">
                        <img src="img/rap.png">
                    </picture>
                    <h3>Anderson Wilian Baldin</h3>
                    <p>"O valor proposto para cada conversa, mesmo sendo simbólico <br>quando comparado à preciosidade do seu tempo, é dinâmico,<br> assim como funciona em outros aplicativos."</p>
				</div>
				<div class="carousel-item">
                    <picture>
                        <source srcset="img/rap.webp" type="image/webp">
                        <source srcset="img/rap.png" type="image/png">
                        <img src="img/rap.png">
                    </picture>
                    <h3>Anderson Wilian Baldin</h3>
                    <p>"O valor proposto para cada conversa, mesmo sendo simbólico <br>quando comparado à preciosidade do seu tempo, é dinâmico,<br> assim como funciona em outros aplicativos."</p>
				</div>
				<div class="carousel-item">
                    <picture>
                        <source srcset="img/rap.webp" type="image/webp">
                        <source srcset="img/rap.png" type="image/png">
                        <img src="img/rap.png">
                    </picture>
                    <h3>Anderson Wilian Baldin</h3>
                    <p>"O valor proposto para cada conversa, mesmo sendo simbólico <br>quando comparado à preciosidade do seu tempo, é dinâmico,<br> assim como funciona em outros aplicativos."</p>
				</div>
			</div>

			<a class="carousel-control-prev" href="#slideshow" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#slideshow" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>
	</div>
    </aside>
    <div class="container c1">
        <div class="row">
            <div class="col-md-7">
                <picture>
                    <source srcset="img/Artboard13.webp" type="image/webp">
                    <source srcset="img/Artboard13.png" type="image/png">
                    <img src="img/Artboard13.png">
                </picture>
            </div>
            <div class="col-md-5">
               <h3><strong>A solidariedade é impagável. Mas, seu tempo pode ser dinheiro.</strong></h3>
               <p>
               Se você estiver precisando de uma renda extra, você também pode se tornar um Anjo Premium! Você receberá um valor em dinheiro em troca do tempo que está dispondo para conversar com pessoas que precisam de apoio.
               <br><br>
               A solidariedade não tem preço, porém, quem recebe a ajuda não é o único que ganha. Quando acolhemos alguém com verdadeira empatia, dispostos a ouvir e ajudar, recebemos a profunda gratidão de quem está sendo apoiado.
               </p>
               <a href="cadastro/index.php" class="btn btn-primary">Quero ser um Anjo Premium</a>
            </div>
        </div>
    </div>
    <div class="container-fluid cf">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <picture>
                    <source srcset="img/Artboard14.webp" type="image/webp">
                    <source srcset="img/Artboard14.png" type="image/png">
                    <img src="img/Artboard14.png">
                </picture>
            </div>
            <div class="col-md-6 n2">
                <h4>Ajude 2 vezes mais!!</h4>
                <p>
                    Além de ajudar as pessoas com quem se conecta, você popde destinar o valor em dinheiro que receberia diretamente para um projeto social que o Eyhe apoia! Incrível, né?
                    <br><br>
                    Atualmente, apoiamos um projeto da cidade onde o Eyhe nasceu. O Remanso da Pedreira atende 60 crianças carentes de 3 à 12 anos. Assista o vídeo e se emocione com a gente.
                </p>
                <button class="btn btn-primary">Conheça mais do projeto</button>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h6>É dessa forma que o Eyhe conecta você às pessoas que buscam apoio emocioanl, com muita segurança e seriedade. Afinal, o respeito pela vida vem sempre em primeiro lugar e o zelo por cada história torna nosso proposito ainda mais verdadeiro e siginficativo na evolução coletiva.</h6>
                </div>    
            </div>
        </div>
    </footer>
    <footer class="foo">
        <div class="container footer">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget about_widget">
                        <a href="index.php" class="footer-logo">
                            <picture>
                                <source srcset="img/eyhe_branco.webp" type="image/webp">
                                <source srcset="img/eyhe_branco.png" type="image/png">
                                <img src="img/eyhe_branco.png">
                            </picture>
                        </a>
                        <p>Conversas inspiradoras para <br> alegrar a sua alma.</p>
                        <p>contato@eyhe.com.br</p>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/eyheoficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/eyheoficial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Menu</h4>
                            <ul>
                                <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                                <li><a href="#funcao"><i class="fas fa-chevron-right"></i> Como Funciona</a></li>
                                <li><a href="blog.php"><i class="fas fa-chevron-right"></i> Blog</a></li>
                            </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <script src="jquery3.5.1.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c8b899d21d.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>