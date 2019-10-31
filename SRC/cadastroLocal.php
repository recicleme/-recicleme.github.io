<!DOCTYPE html>
<html>

<?php include "index_header.php"?>


<!--Cadastro de Local-->

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">

        </div>

        <!--Form de cadastro de local de coleta-->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Cadastro de Local de Coleta</p>

                <form action="../../index.html" method="post">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nomeLocal" id="nomeLocal" placeholder="Nome">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-building"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="enderecoLocal" id="enderecoLocal" placeholder="Endereço">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-location-arrow"></span>
                            </div>
                        </div>
                    </div>


                    <!--Esse Aqui ??-->


                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" name="" placeholder="Telefone">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                    </div>


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