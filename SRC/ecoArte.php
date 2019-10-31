<!DOCTYPE html>
<html>



<?php include "index_header.php"?>


<!--Publicação EcoArte-->

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="card-body register-card-body" id="eco">

                <div class="container-fluid">
                    <form action="" method="post" enctype="multipart/form-data">

                        <h3> EcoArte </h3>


                        <select name="filtroPost" id="filtroPost">
                                <option ></option>
                                <option ></option>
                        </select>

                        <select name="materialPost" id="materialPost">
                            <option  ></option>
                            <option ></option>
                            <option ></option>
                        </select>

                        <p>
                            <br>


                            <form>




                            </form>


                            <!--Form Comentário-->

                            <div class="well">



                                <h3>Deixe seu comentário:</h3>
                                <form action="#" method="post" role="form">

                                    <div class="form-group">
                                        <label for="Author">Autor</label>
                                        <input type="text" name="comment_author" class="form-control" name="">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author">Email</label>
                                        <input type="email" name="comment_email" class="form-control" name="">
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Seu comentário</label>
                                        <textarea name="descricaoComentario" id="descricaoComentario" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" name="" class="btn btn-primary">Salvar</button>
                                </form>
                            </div>

                            <hr>


                            <!--Botões Admin-->

                            <div class="row">


                                <a href="../publiEcoarte.html"><button type="button" class="btn btn-primary btn-sm">Novo</button></a>&nbsp;
                                <a href="#"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>&nbsp;
                                <a href="#"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>&nbsp;

                            </div>
                    </form>





                </div>
            </div>
        </div>
    </section>
</div>

</html>