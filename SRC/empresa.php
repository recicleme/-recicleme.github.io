<!DOCTYPE html>
<html>


<?php include "index_header.php"?>


<!--Lista de Empresas-->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Empresas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../SRC/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Empresas</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">


        <!--Contatos Empresas-->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                Resitran
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: Av. Marechal Floriano Peixoto, 2072 - Curitiba - PR</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefoe: (41) 3333-2245</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Email: resitran@resitrancoleta.com.br</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                ​Parcs Resíduo Eletrônico
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço:Rua William Booth, 1681 Curitiba – PR</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: (41) 3027-2289 - (41) 99125-1745</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Email: parcs@parcs.com.br</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                ESTRE
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: Rua João Bettega - 5480 - CIC - CURITIBA - PR </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: (41) 2141-6400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Botões Admin -->
                    <a href="../SRC/cadastroEmpresa.php"><button type="button" class="btn btn-primary btn-sm">Novo</button></a>&nbsp;
                    
                    
                                        
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
                    
                    
                      
                    
                    
                    <a href="#"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>&nbsp;



                </div>
            </div>
        </div>
    </section>
</div>
</div>

</html>