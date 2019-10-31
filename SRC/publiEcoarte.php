<!DOCTYPE html>
<html>


<?php include "index_header.php"?>





<!-- <body class="hold-transition register-page">
                        <div class="register-box">
                            <div class="register-logo">
                                <a href="../../index2.html"><b></b></a>
                            </div>

                            <div class="card">
                                <div class="card-body register-card-body">
                                    <p class="login-box-msg">Publicação EcoArte</p>

                                    <form action="../../index.html" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="inputTitle" placeholder="Título">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fa fa-pen"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="inputAutor" placeholder="Autor">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fa fa-user"></span>
                                                </div>
                                            </div>
                                        </div>



                                        
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">

                                                                <small>Conteúdo</small>
                                                            </h3>
                                                            
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                                                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="card-body pad">
                                                            <div class="mb-3">
                                                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
                                    </body> -->



<!--Form Cadastro EcoArte-->

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="card-body register-card-body" id="publieco">


                <div class="container-fluid">
                    <form action="" method="post" enctype="multipart/form-data">

                        <h3>Publicação EcoArte </h3>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="tituloPost">


                        </div>

                        <div clas="form-group">
                            <label for="post_author">Autor</label>
                            <input type="text" class="form-control" name="">
                        </div>


                        <div clas="form-group">
                            <label for="post_image">Imagem</label>
                            <input type="file" name="image" id="">
                        </div>




                        <div clas="form-group">
                            <label for="post_content">Conteúdo</label>
                            <textarea class="form-control" name="descricaoPost" id="conteudo" cols="30" rows="10">
                                                </textarea>
                        </div>
                        <br>

                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="" value="Publicar">
                        </div>

                    </form>
                </div>
            </div>








        </div>
        </body>

</html>