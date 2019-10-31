<!DOCTYPE html>
<html>

<?php include "index_header.php"?>



<!--Lista de Itens-->


<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de Itens Cadastrados</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item active">Lista de Itens Cadastrados</li>
                    </ol>
                </div>
            </div>
        </div>

    </section>


    <section class="content">


        <!--Lista de Itens-->

        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0" name="nomeUsuario" id="nomeUsuario">

                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-pen"></i></span>Itens Reciclados : Garrafa Pet </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-recycle"></i></span>Material Reciclado : Plástico </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-list-ol"></i></span>Quantidade de Itens: 3 unidades </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Empresa que fez a coleta : Muffato </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span> Data da coleta : 04/10/2019 </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0" name="nomeUsuario" id="nomeUsuario">
                                ​
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-pen"></i></span>Itens Reciclados : Garrafa </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-recycle"></i></span>Material Reciclado : Vidro </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-list-ol"></i></span>Quantidade de Itens: 5 unidades </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Empresa que fez a coleta : Muffato </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span> Data da coleta : 04/10/2019 </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0" name="nomeUsuario" id="nomeUsuario">

                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-pen"></i></span>Itens Reciclados : Pilhas </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-recycle"></i></span>Material Reciclado : </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-list-ol"></i></span>Quantidade de Itens: 10 unidades </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Empresa que fez a coleta : Muffato </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span> Data da coleta : 04/10/2019 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Botão Editar-->

                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#modalExemplo">Editar</button>&nbsp;

                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar mudanças</button>
                        </div>
                        </div>
                    </div>
                    </div>  



                </div>
            </div>
        </div>
    </section>
</div>
</div>

</html>
