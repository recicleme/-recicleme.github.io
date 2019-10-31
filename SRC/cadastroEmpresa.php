<!DOCTYPE html>
<html>

<?php include "index_header.php"?>


<!--Cadastro Empresas-->


<body class="hold-transition register-page" id="bodycadastroEmpresa(TIRAR A BORDA)">
    <div class="register-box">
        <div class="register-logo">

        </div>

        <!--Form do Cadastro-->

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Cadastro de Empresas</p>

                <form action="../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="razaoSocial" id="razaoSocial" placeholder="Nome">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-building"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="enderecoEmpresa" id="enderecoEmpresa" placeholder="Endereço">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-location-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="telefoneEmpresa" id="telefoneEmpresa" placeholder="Telefone">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="emailEmpresa" id="emailEmpresa" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>


                    <!--Botão Cadastro-->

                    <div class="row">

                        <div class="col-4">
                            <button type="submit" class="btn btn-success  btn-flat">Cadastrar</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>