
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recursos Humanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/ventana.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/tabs.css" />

    <!--<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/Tablas.css" />
    <script src="<?php echo base_url('Style'); ?>/js/jquery-3.3.1.min/js"></script>
    <script src="<?php echo base_url('Style'); ?>/css/bootstrap.min.js"></script>-->
</head>
<body>

<head>
<title>Proyecto Recursos Humanos</title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/board.css"/>
</head>

 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php/empleados_controller/login">Volver al Login</a></li>
          </ul>
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Formulario Reclutamiento <small> Streek</small></h1>
          </div>
         </div>
      </div>
</header>

   
<div class="col-md-1"></div> 
<div class="col-md-10">
  <?php if($this->uri->segment(2) == "Guardado_exitoso"){
           echo '<p class="text-success">Datos Guardados</p>'; } ?>
  <a  href="<?php echo base_url(); ?>index.php/candidato_c/index" type="button" class="btn btn-warning"> <- Volver</a>
  <hr>
  <div class="col-md-12">
             <?php 
             if($this->uri->segment(3) == "Guardado_exitoso"){

              echo '<p class="alert alert-success alert-dismissible" role="alert">Guardado exitoso</p>';
             } ?>
              <?php 
             if($this->uri->segment(3) == "cedula_invalida"){

              echo '<p class="alert alert-danger alert-dismissible w" role="alert">Cedula Invalida</p';
             } ?>
             <?php 
             if($this->uri->segment(3) == "salario_invalido"){

              echo '<p class="alert alert-danger alert-dismissible" role="alert">Salario Minimo o Maximo Invalido</p';

             } ?>
         <!-- fInformacion empleado -->
         <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Informacion del Candidato</h3>
            </div>
            <div class="panel-body">
              <form method="post" action ="<?php echo base_url();?>index.php/candidatos_c/form_validation">
              <div class="form-group col-md-6">
                <label>Cedula</label>
                <input  name="cedula" type="text" class="form-control">
                <?php echo form_error('cedula'); ?>
              </div>
              <div class="form-group col-md-6">
                <label>Nombre</label>
                <input  name="nombre" type="text" class="form-control">
                <?php echo form_error('nombre'); ?>
              </div>
            </div>
          </div>



              <!--Puestos-->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Puesto</h3>
            </div>
            <div class="panel-body">
              <br>
              <div class="form-group col-md-3">
                <label for="puesto">Puestos</label>
                <select class="custom-select d-block form-control" id="puesto" name="puesto" required>
                <?php foreach($puesto as $p){
                        echo "<option value=".$p->Id_Puesto.">".$p->Nombre."</option>";}
                ?>
                </select>
                <?php echo form_error('puesto'); ?>
              </div>
              <div class="form-group col-md-3">
                <label for="puesto">Departamento</label>
                <select class="custom-select d-block form-control" id="departamento" name="departamento" required>
                <?php foreach($puesto as $d){
                        echo "<option value=".$d->Id_Puesto.">".$p->Departamento."</option>";}
                 
                ?>
                </select>
                <?php echo form_error('departamento'); ?>
                </div>
                <div class="form-group col-md-3">
                  <label>Salario Recomendado</label>
                  <input  name="salario" type="text" class="form-control">
                  <?php echo form_error('salario'); ?>
                </div>

                <div class="form-group col-md-3">
                  <label>Recomendado por</label>
                  <input  name="recomendado" type="text" class="form-control">
                  <?php echo form_error('recomendado'); ?>
                </div>
              </div>
            </div>

                    
                   
                     </br>
                     <div class="form-group col-md-10"></div>
                     <div class="form-group col-md-2">
                  <input type="submit" name="guardar" class="btn btn-success" value="Continuar">
                  </div>
                </form>
              </div>

               

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
 </body>
</html>
             
    
            



   

    