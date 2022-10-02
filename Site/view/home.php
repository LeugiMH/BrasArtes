<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrasArtes - Home</title>

    <?php
    //Include head padrão
    include_once "headPadrao.php";
    
    ?>
<style>
    .img{
        height: 20rem;
        object-fit: cover;
    }
    .carousel-home-img{
        object-fit: cover;
        max-height: 100vh;
        width: 100%;
        height: 1000px;
    }
    .carousel-products-img{
        object-fit: cover;
        height:350px;
        border-radius: 5px;
    }
    .tr-contatos{
        height: 4rem;
    }
    .section-mensagem{
        background: url("<?php echo URL.'/recursos/imagens/Fundo Madeira 2.jpg'?>");
        color:white;
    }
</style>
</head>
<body>

<!-- Start Carousel -->
<div id="carousel-Home" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel-Home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel-Home" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel-Home" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="7000">
            <img src="<?php echo URL.'/recursos/imagens/Cozinha-Carousel.jpg'?>" class="carousel-home-img d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Cozinha otimizada</h5>
                <p>Do seu jeito com um estilo próprio</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
            <img src="<?php echo URL.'/recursos/imagens/Estante-Carousel.jpg'?>" class="carousel-home-img d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Estante decorativa</h5>
                <p>No formato certo para cada gosto</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
            <img src="<?php echo URL.'/recursos/imagens/Quarto-Carousel.jpg'?>" class="carousel-home-img d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Quarto customizado</h5>
                <p>Utilização de espaço eficiente</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-Home" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel-Home" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Carousel -->

<!-- Start Personalize -->
<div class="container-fluid p-0 py-5 py-lg-6">
    <div class="container col-md-8 px-3">
        <h1 class="display-5 fw-bold text-center">
            Personalize!
        </h1>
        <p class="lead mx-auto text-center">
            Para otimizar seu espaço, a BrasArtes desenvolve produtos que atende suas necessidades. Agora, espaço pequeno não é mais o problema. Nossos produtos como: utensílio, decoração, presentes ou móveis, totalmente personalizados.
        </p>
    </div>
</div>
<!-- End Personalize -->

<!-- Start Utensílios -->
<div class="container-fluid p-0 py-5 py-lg-6">
    <div class="container col-md-8 px-3">
        <h1 class="display-5 fw-bold text-center">
            Um pouco do que fazemos
        </h1>
        <p class="lead mx-auto text-center">
            Trabalhos de madeira em marchetaria
        </p>
    </div>
    <div class="row mt-4 mt-xl-6 w-100 m-0">
        <div class="col-xl-4 mt-4 mt-xl-0">
            <div class="col-xl-4 mx-auto carousel slide" id="carousel2" data-bs-ride="carousel" style="width:90%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Claudiao.jpg'?>" class="d-block w-100 carousel-products-img">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Desenho personalizado em diferentes tons de madeira</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Claudiao 2.jpg'?>" class="d-block w-100 carousel-products-img">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Canal próximo a borda, enviando o escoamento de líquidos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Claudiao 3.jpg'?>" class="d-block w-100 carousel-products-img">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Com a sua logo em madeira nobre e de alta qualidade</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>        
        </div>
        <div class="col-xl-4 mt-4 mt-xl-0">
            <div class="col-xl-4 mx-auto carousel slide" id="carousel1" data-bs-ride="carousel" style="width:90%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Perfeito para uma pessoa especial</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi1.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Bordas refinadas de madeira de qualidade</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi2.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Detalhes em alta qualidade</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>        
        </div>
        <div class="col-xl-4 mt-4 mt-xl-0">
            <div class="col-xl-4 mx-auto carousel slide" id="carousel3" data-bs-ride="carousel" style="width:90%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Desenho personalizado em diferentes tons de madeira</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi1.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Canal próximo a borda, enviando o escoamento de líquidos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo URL.'/recursos/imagens/Tabua-Mi2.jpg'?>" class="d-block w-100 carousel-products-img" alt="...">
                        <div class=" d-md-block">
                            <h5 class="text-center  ">Tábua de corte</h5>
                            <p class="text-center   ">Com a sua logo em madeira nobre e de alta qualidade</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>        
        </div>
    </div> 
</div>
<!-- End Utensílios -->

<!-- Start Mensagem -->
<div class="container-fluid p-0 py-5 py-lg-6 section-mensagem">
    <div class="container col-md-8 px-3">
        <h1 class="display-5 fw-bold text-center">
            Se interessou?
        </h1>
        <p class="lead mx-auto text-center">
            Tem alguma ideia de produto que queira fazer? Escreva para nós descrevendo seu produto, ou entre em <a href="#contato" class="link-primary fw-normal">contato</a>.
        </p>
    </div>
    <div class="container col-sm-8 p-3 pt-5">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="Telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="tel" aria-describedby="telHelp">
                <div id="telHelp" class="form-text" style="color:white;">(Opcional)</div>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" style="color:white;">(Opcional)</div>
            </div>
            <div class="mb-3">
                <textarea name="msg" id="mensagem" rows="10" placeholder="Mensagem" class="form-control" style="max-height:500px;"></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<!-- End Mensagem -->

<!-- Start Contatos -->
<div id="contato" class="container-fluid py-5 py-lg-6">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 p-0">
            <h1 class="display-5 fw-bold text-center">
                Contatos
            </h1>
            <p class="lead mx-auto text-center">
                Entre em contanto para começar a desenvover seu produto, único e do seu jeito.
            </p>
        </div>
        <div class="col-lg-6 p-3">
            <table class="w-100">
                <tbody>
                    <tr class="tr-contatos">
                        <td class="align-middle"><i class="bi bi-telephone fs-2"></i></td>
                        <td class="align-middle px-3 fs-5">
                            <a href="tel:5511993834373" class="link-cinza" target="_blank">
                                (11) 99383-4373
                            </a>
                        </td>
                    </tr>
                    <tr class="tr-contatos">
                        <td class="align-middle"><i class="bi bi-whatsapp fs-2" style="color:#25d366;"></i></td>
                        <td class="align-middle px-3 fs-5">
                            <a href="https://wa.me/5511993834373" class="link-cinza" target="_blank">
                                (11) 99383-4373
                            </a>
                        </td>
                    </tr>
                    <tr class="tr-contatos">
                        <td class="align-middle"><i class="bi bi-envelope fs-2"></i></td>
                        <td class="align-middle px-3 fs-5">
                            <a href="mailto:contato@brasartes.com.br" class="link-cinza" target="_blank">
                                contato@brasartes.com.br
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Contatos -->

<!-- Start Footer -->
<div class="container-fluid p-5 py-lg-6 bg-cinza">
    <div class="container col-md-8 px-3">
        <h1 class="display-5 fw-normal text-center">
            Footer
        </h1>
        <p class="lead text-center text-light m-0">
            © Copyright 2022 BrasArtes. Todos os Direitos Reservados.
        </p>
    </div>
</div>
<!-- End Footer -->

    <?php
    //include body padrão
    include_once "bodyPadrao.php";
    
    ?>
</body>
</html>