<?php
$style = 'style.php';
$title = "UserPage";
require "page.php";
?>

<body>
    <div class="container-fluid" style="height: 50vh">
        <?php
        require "cabecalho-on.php";
        ?>

        <section class="section section-top section-full">
            <!-- Cover -->
            <div class="bg-cover"></div>

            <!-- Overlay -->
            <div class="bg-overlay"></div>

            <!-- Triangles -->
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

            <!-- Content -->
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-lg-7"></div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>
    </div>
    <div class="container-fluid container">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1521401830884-6c03c1c87ebb?" alt="Los Angeles" class="d-block" style="width: 100%" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1601918774946-25832a4be0d6?" alt="Chicago" class="d-block" style="width: 100%" />
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1590856029620-9b5a4825d3be?" alt="Nicaragua" class="d-block" style="width: 100%" />
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <!-- Seção 4 Cards Rating-->
    <div class="container-fluid container py-3 mt-4">
        <h2 class="h3 text-white">Inspirações para suas próximas viagens</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://images.unsplash.com/photo-1533654793924-4fc4949fb71e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            My mom and I stayed in the Silver Cloud during our
                            time in Napa and absolutely loved it, and would've
                            loved to stay longer. It's in a sweet, ...
                        </p>
                        <div class="">
                            <div class="d-flex">
                                <img src="namedB.jpg" class="ml-0 mr-2 img-fluidX rounded-circle w-25 mb-2 mt-2" alt="..." />
                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Bianca
                                    </h5>
                                    <p class="TextNames">São Paulo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://images.unsplash.com/photo-1520908695049-da13395b27a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1225&q=80" class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            Great place to stay. Very clean, affordable, and
                            good location.
                        </p>
                        <div class="">
                            <div class="d-flex">
                                <img src="yuri.jpg" class="ml-0 mr-2 img-fluidX rounded-circle w-25 mb-2 mt-2" alt="..." />
                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Yuri
                                    </h5>
                                    <p class="TextNames">Salvador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            Kathryn is delightful and so is her home. Would love
                            to come back. Thank you for everything!
                        </p>
                        <div class="">
                            <div class="d-flex">
                                <img src="thiago-thiago.jpg" class="ml-0 mr-2 img-fluidX rounded-circle w-25 mb-2 mt-2" alt="..." />
                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Thiago
                                    </h5>
                                    <p class="TextNames">Salvador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
</body>

</html>