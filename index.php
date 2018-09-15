<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>Formulario!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-3 pt-5">
            <div class="col-md-7 contenedor">
                <h1 class="display-4 encabezado" >Formulario</h1>
                <hr class=bg-info>
                <p class="pb-0 mb-0 infor">Te invitamos a contactarnos con nosotros</p>
                <p class="text-danger small ">Todos los campos obligatorios</p>
                <div class="alert alert-success d-none" id="msgExito">Enviado con exito</div>
                <div class="alert alert-danger d-none" id="msgError"></div>
                <form action="" id="formulario" novalidate>
                    <div class="form-group row">
                        <label for="nombre" class="col-form-label col-md-3">Nombre:</label>
                        <div class="col-md-9">
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="color" class="col-form-label col-md-3">Color</label>
                        <div class="col-md-9">
                            <select name="color" class="form-control" id="color">
                                <option value="" selected>Selecciona un color</option>
                                <option value="verde">Verde</option>
                                <option value="azul">Azul</option>
                                <option value="rojo">Rojo</option>
                            </select>
                        </div>

                    
                    </div>

                    <div class="form-group row">
                        <label for="cursos" class="col-form-label col-md-3" >Cursos</label>
                        <div class="col-md-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="html" value="html" name="curso[]">
                                <label class="form-check-label" for="html">HTML</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="css" value="css" name="curso[]">
                                <label class="form-check-label" for="css">CSS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="js" value="js" name="curso[]">
                                <label class="form-check-label" for="js">JS</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3">Genero</label>
                        <div class="col-md-9 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino">
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino">
                                <label class="form-check-label" for="femenino">Femenino</label>
                            </div>

                        </div>
                    </div>
                    
                    <input type="hidden" name="envio">
                    <input type="submit" class="btn btn-info" value="Enviar formulario">
                </form>
            </div>
        </div>
    </div>





    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="formulario.js"></script>
  </body>
</html>