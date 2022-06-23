<?php
$style = "acomodacoes.css";
$title = "FINDINN - ACOMODAÇÕES";
require "page.php";
?>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" /></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-align">
                    <form class="d-flex" role="search" method="post" action="filtrarBusca.php">
                        <li class="nav-item text-white">
                            <label for="localizacao">Localização</label>

                            <input class="form-control me-2" type="search" name="localizacao" placeholder="Salvador..." aria-label="Procurar" />
                        </li>
                        <li class="nav-item text-white ps-2">
                            <label for="dataInicial">Data de Início</label>

                            <input class="form-control me-2" type="date" name="dataInicio" placeholder="" aria-label="Data" />
                        </li>
                        <li class="nav-item dropdown text-white ps-2">
                            <label for="dataFinal">Data Final</label>

                            <input class="form-control me-2" type="date" name="dataFinal" placeholder="" aria-label="Data" />
                        </li>
                        <li class="ps-2 pt-4">
                            <input class="btn btn-success" type="submit" name="procurar" value="Procurar" aria-label="Procurar" />
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Cards-->
    <section class="mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 ps-2 pe-2">
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 ps-2 pe-2">
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mt-3 g-4 ps-2 pe-2">
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="acomodacao.html"><img src="https://images.unsplash.com/photo-1558358083-87ded6f761fd?" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">
                                <strong class="text-dark">A partir de R$100</strong>/pessoa
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php require "footer.php"; ?>
</body>

</html>