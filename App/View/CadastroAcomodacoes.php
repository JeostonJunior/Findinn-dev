<?php
require_once 'page.php';
$title = "Cadastro de Acomodação";
$style = "";
?>

<body class="bg-dark text-white">
    <section>
        <div class="container-fluid">
            <div class="border">
                <nav>
                    <div class="ps-5 pt-4">
                        <a href="UserPage"><img src="logo.png" alt="logo" /></a>
                    </div>
                </nav>
            </div>
            <h1 class="d-flex mt-3 mb-0 justify-content-center">
                Cadastre seu Imóvel
            </h1>
            <div class="mt-2">
                <section class="d-flex border justify-content-center">
                    <div class="w-50">
                        <form name="cadastroImovel" method="post" action="MinhasAcomodacoes" class="form-div" enctype="multipart/form-data">
                            <div class="form-row d-flex">
                                <div class="form-group col-md-12">
                                    <label for="nomeCartao">Nome do Cartão</label>
                                    <input type="text" name="nomeCartao" class="form-control" id="nomeCartao" placeholder="" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="numeroCartao">Numero do Cartão</label>
                                    <input type="number" name="numeroCartao" class="form-control" id="numeroCartao" placeholder="1234.5555.664.789" required />
                                </div>
                                <div class="form-group col-md-3 ps-1">
                                    <label for="validadeCartao">Validade</label>
                                    <input type="date" name="validadeCartao" class="form-control" id="validadeCartao" required />
                                </div>
                                <div class="form-group col-md-3 ps-1">
                                    <label for="cvvCartao">CVV</label>
                                    <input type="number" name="cvvCartao" class="form-control" id="cvvCartao" placeholder="192" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="cepImovel">CEP</label>
                                    <input type="number" name="cepImovel" class="form-control" id="cepImovel" placeholder="20.20-20" required />
                                </div>
                                <div class="form-group col-md-6 ps-1">
                                    <label for="ruaImovel">Rua</label>
                                    <input type="text" name="ruaImovel" class="form-control" id="ruaImovel" placeholder="Rua dos Bobos" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="numeroImovel">Número</label>
                                    <input type="number" name="numeroImovel" class="form-control" id="numeroImovel" placeholder="nº 0" required />
                                </div>
                                <div class="form-group col-md-6 ps-1">
                                    <label for="compImovel">Complemento</label>
                                    <input type="text" name="compImovel" class="form-control" id="compImovel" placeholder="2° Andar" />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4">
                                    <label for="cidadeImovel">Cidade</label>
                                    <input type="text" name="cidadeImovel" class="form-control" id="cidadeImovel" placeholder="Salvador" required />
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="estadoImovel">Estado</label>
                                    <input type="text" name="estadoImovel" class="form-control" id="estadoImovel" placeholder="Bahia" required />
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="paisImovel">País</label>
                                    <input type="text" name="paisImovel" class="form-control" id="paisImovel" placeholder="Brasil" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4">
                                    <label for="tipoResidencia">Tipo de Residência</label>
                                    <input type="text" name="tipoResidencia" class="form-control" id="tipoResidencia" placeholder="Fazenda" required />

                                    <!-- <select
                                            id="inputResidencia"
                                            class="form-control"
                                        >
                                            <option selected>
                                                Escolher...
                                            </option>
                                            <option value="1">Quarto</option>
                                            <option value="2">
                                                Apartamento
                                            </option>
                                            <option value="3">Casa</option>
                                            <option value="4">Fazenda</option>
                                        </select> -->
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="capacidadeImovel">Capacidade Máxima</label>
                                    <input type="number" name="capacidadeImovel" class="form-control" id="capacidadeImovel" placeholder="5" />
                                    <!-- <select
                                            id="inputCapacidade"
                                            class="form-control"
                                        >
                                            <option selected>
                                                Escolher...
                                            </option>
                                            <option value="1">3</option>
                                            <option value="2">5</option>
                                            <option value="3">8</option>
                                            <option value="4">10</option>
                                            <option value="5">15</option>
                                        </select> -->
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="diariaImovel">Preço Diaria</label>
                                    <input type="number" name="diariaImovel" class="form-control" id="diariaImovel" placeholder="R$ 500,00 " required />
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group">
                                    <label for="adicionais">Adicionais</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input ms-1" id="cozinha" name="cozinha" />
                                        <label class="custom-control-label" for="cozinha">Cozinha</label>
                                        <input type="checkbox" class="form-check-input" id="jacuzzi" name="jacuzzi" />
                                        <label class="custom-control-label" for="jacuzzi">Jacuzzi</label>
                                        <input type="checkbox" class="form-check-input" id="refrigerador" name="refrigerador" />
                                        <label class="custom-control-label" for="refrigerador">Refrigerador</label>
                                        <input type="checkbox" class="form-check-input" id="wifi" name="wifi" />
                                        <label class="custom-control-label" for="wifi">Wifi</label><br />
                                        <input type="checkbox" class="form-check-input ms-1" id="ar" name="ar" />
                                        <label class="custom-control-label" for="ar">Ar-Condicionado</label>
                                        <input type="checkbox" class="form-check-input" id="garagem" name="garagem" />
                                        <label class="custom-control-label tamanho-label" for="garagem">Garagem</label>
                                        <input type="checkbox" class="form-check-input" id="alarme" name="alarme" />
                                        <label class="custom-control-label tamanho-label" for="alarme">Alarme de Incêndio</label><br />
                                        <input type="checkbox" name="camera" class="form-check-input ms-1" id="camera" />
                                        <label class="custom-control-label tamanho-label" for="camera">Câmera de Segurança</label>
                                        <input type="checkbox" name="detector" class="form-check-input" id="detector" />
                                        <label class="custom-control-label tamanho-label" for="detector">Detector de Fumaça</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4 ps-1 me-3">
                                    <label for="imagemImovel">Fotos</label>
                                    <input type="file" id="imagemImovel" name="imagemImovel" accept="image/png, image/jpeg" />
                                </div>
                            </div>
                            <div class="form-group col-md-2 mt-1">
                                <label for="descricaoImovel">Descrição</label>
                                <textarea id="descricaoImovel" name="descricaoImovel" rows="5" cols="70">
                                    </textarea>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-success">
                                    Cadastrar Imóvel
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <?php require_once 'footer.php'; ?>
</body>

</html>