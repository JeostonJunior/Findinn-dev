<?php
$style = "cadastrar.css";
$title = "Login";
require "page.php";
?>

<body class="d-flex bg-dark mt-5">
    <nav class="ms-3">
        <div class="container justify-content-center">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html"><img src="logo.png" alt="logo" />
            </a>
        </div>
    </nav>
    <div class="container d-flex justify-content-center centralize">
        <div class="text-white mt-5 w-25">
            <h1 class="pb-3 flex">Login de Usuário</h1>
            <form name="cadLivro" method="post" action="incluirLivro" enctype="multipart/form-data">
                <div class="form-group pt-2">
                    <label for="Nome">Email</label>
                    <input type="Nome" class="form-control" id="Nome" placeholder="Informe o seu Email" name="Nome" required />
                </div>
                <div class="form-group pt-2">
                    <label for="Nome">Senha</label>
                    <input type="Senha" class="form-control" id="Senha" placeholder="Informe a sua Senha" name="Senha" required />
                </div>
                <div class="flex">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>