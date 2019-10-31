<!DOCTYPE html>
<html>


<?php include "index_header.php"?>


<!--Publicação Sustentabilidade-->

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">


            <div class="card-body register-card-body" id="sust">

                <div class="container-fluid">
                    <form action="" method="post" enctype="multipart/form-data">

                        <h3> Sustentabilidade </h3>

                        <select>
                                            <option name="filtroPost" id="filtroPost"></option>
                                            <option value="" ></option>
                                        </select>
                        <p>



                            <form>




                            </form>






                            <!--Form Comentário-->

                            <div class="well">


                                <h3>Deixe seu comentário:</h3>
                                <form action="#" method="post" role="form">

                                    <div class="form-group">
                                        <label for="Author">Autor</label>
                                        <input type="text" name="" class="form-control" name="comment_author">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author">Email</label>
                                        <input type="email" name="" class="form-control" name="comment_email">
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Seu comentário</label>
                                        <textarea name="descricaoComentario" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" name="" class="btn btn-primary">Salvar</button>
                                </form>
                            </div>

                            <hr>


                            <div class="row">

                                <!-- Botões Admin -->
                                <a href="../SRC/publiSustent.php"><button type="button" class="btn btn-primary btn-sm">Novo</button></a>&nbsp;
                                <a href="#"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>&nbsp;
                                <a href="#"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>&nbsp;

                            </div>
                    </form>





                </div>
            </div>
        </div>

</div>


</html>