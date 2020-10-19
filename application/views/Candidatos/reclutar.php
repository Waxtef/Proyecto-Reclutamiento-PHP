
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recursos Humanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/ventana.css" />
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
             <?php 
             if($this->uri->segment(2) == "Guardado_exitoso"){

              echo '<p class="text-success">Datos Guardados</p>';
             } ?>
             <a  href="<?php echo base_url(); ?>index.php/candidato_c/index" type="button" class="btn btn-warning"> <- Volver</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Infromacion del Candidato</h3>
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
                    <!--Puestos-->
                    <h3 class="panel-title col-md-12">Puesto a Pedir</h3>
                    <br>

                    <div class="form-group col-md-4">
                    <label for="puesto">Puestos</label>
                   
                     <select class="custom-select d-block form-control" id="puesto" name="puesto" required>
                     <?php 

                     foreach($puesto as $p)
                     
                    {
                    echo "<option value=".$p->Id_Puesto.">".$p->Nombre."</option>";}
                 
                  ?>
                
                </select>
                <?php echo form_error('puesto'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="puesto">Departamento</label>
                   
                     <select class="custom-select d-block form-control" id="departamento" name="departamento" required>
                     <?php 

                     foreach($puesto as $d)
                     
                    {
                    echo "<option value=".$d->Id_Puesto.">".$p->Departamento."</option>";}
                 
                  ?>
                
                </select>
                <?php echo form_error('departamento'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label>Salario</label>
                    <input  name="salario" type="text" class="form-control">
                    <?php echo form_error('salario'); ?>
                    </div>


                    <div class="form-group col-md-4">
                    <label for="competencia">Competencia</label>
                    <select class="custom-select d-block form-control" id="competencia" name="competencia" required>
                     <?php foreach($competencia as $c){echo "<option value=".$c->Id_Comp.">".$c->Descripcion."</option>";}?></select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="competencia2">_</label>
                    <select class="custom-select d-block form-control" id="competencia2" name="competencia2" required>
                     <?php foreach($competencia as $c){echo "<option value=".$c->Descripcion.">".$c->Descripcion."</option>";}?></select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="competencia3">_</label>
                    <select class="custom-select d-block form-control" id="competencia2" name="competencia2" required>
                     <?php foreach($competencia as $c){echo "<option value=".$c->Descripcion.">".$c->Descripcion."</option>";}?></select>
                    </div>

                    <div class="form-group col-md-12">
                    <label>Ultima Capacitacion Descripcion</label>
                    <input  name="descripcion" type="text" class="form-control">
                    <?php echo form_error('descripcion'); ?>
                    </div>
                    <div class="form-group col-md-4">
                    <label>Fecha desde</label>
                    <input name="f_desde" type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label>Fecha hasta</label>
                    <input name="f_hasta" type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="nivel">Nivel</label>
                   
                     <select class="custom-select d-block form-control" id="nivel" name="nivel" required>
                  <option value="Grado" >Grado</option>
                  <option value="Maestria">Maestria</option>
                  <option value="Post Grado">Post Grado</option>
                  <option value="Doctorado">Doctorado</option>
                  <option value="Tecnico">Tecnico</option>
                  <option value="Gestion">Gestion</option>
                
                </select>
                <?php echo form_error('nivel'); ?>
                    </div>
                    <div class="form-group col-md-12">
                    <label>Institucion</label>
                    <input  name="institucion" type="text" class="form-control">
                    <?php echo form_error('institucion'); ?>
                    </div>
                    

                    <div class="form-group col-md-10">
                    <label>Recomendado</label>
                    <input  name="recomendado" type="text" class="form-control">
                    <?php echo form_error('Recomendado'); ?>
                    </div>
                    
                   
                     </br>
                  <input type="submit" name="guardar" class="btn btn-success" value="Guardar">
                </form>
              </div></div></div></div>
             
    
            



   

    