<!DOCTYPE html>
<html>

<?php include "index_header.php"?>

<!--Cadastro Itens-->

<body class="hold-transition register-page" id="bodyItens">
    <div class="register-box ">
        <div class="register-logo ">

        </div>
        <!--Form de Cadastro de Itens-->
        <div class="card ">
            <div class="card-body register-card-body ">
                <p class="login-box-msg ">Cadastro de Item</p>

                <form action="../../index.html " method="post ">


                    <div class="input-group mb-3 ">
                        <select class="form-control" name="idItem" id="idItem" placeholder="Item">
                                    
                                      <option>Vidro</option>
                                      <option>Plástico</option>
                                      <option>Borracha</option>
                                      <option>Papel</option>
                                </select>
                        <div class="input-group-append ">
                            <div class="input-group-text ">
                                <span class="fa fa-pen "></span>
                            </div>
                        </div>
                    </div>



                    <!-- <div class="input-group mb-3 ">
                                    <select class="form-control" name="materialItem" id="materialItem" placeholder="Material">
                                            <option>Vidro</option>
                                            <option>Plástico</option>
                                            <option>Borracha</option>
                                            <option>Papel</option>
                                    </select>
                                        <div class="input-group-append ">
                                    <div class="input-group-text ">
                                        <span class="fa fa-recycle "></span>
                                    </div>
                                </div>
                            </div> -->



                    <div class="input-group mb-3 ">
                        <select class="form-control" name="qtdItem" id="qtdItem" placeholder="Quantidade">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                </select>
                        <div class="input-group-append ">
                            <div class="input-group-text ">
                                <span class="fa fa-list-ol "></span>
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-3 ">
                        <input type="text " class="form-control " name="" placeholder="Empresa ">
                        <div class="input-group-append ">
                            <div class="input-group-text ">
                                <span class="fa fa-building "></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3 ">
                        <input type="date" class="form-control " id="inputData " placeholder="Data ">
                        <div class="input-group-append ">
                            <div class="input-group-text ">
                                <span class="fa fa-calendar-alt "></span>
                            </div>
                        </div>
                    </div>


                    <!-- Botão de cadastro -->

                    <div class="row ">

                        <div class="col-4 ">
                            <button type="submit " class="btn btn-success btn-flat ">Cadastrar</button>
                        </div>

                    </div>
                </form>





            </div>
        </div>
    </div>
</body>

</html>