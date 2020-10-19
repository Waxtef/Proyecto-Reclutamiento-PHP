<?php plantilla::aplicar();?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small>Puestos</small></h1>
          </div>
         
        </div>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/empleados_controller/index" class="list-group-item">
                <span class="glyphicon glyphicon-user" aria-hidden="true">
                   </span> Empleados <span class="badge"> <?php echo count($empleado); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/candidatos_c/index" class="list-group-item">
                 <span class="glyphicon glyphicon-list aria-hidden="true">
                 </span> Candidatos <span class="badge"> <?php  ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/idiomas_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-file" aria-hidden="true">
              </span> Idiomas <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/competencias_c/index" class="list-group-item ">
              <span class="glyphicon glyphicon-equalizer" aria-hidden="true">
              </span> Competencias <span class="badge"> <?php echo count($competencia); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/capacitacion_c/index" class="list-group-item ">
              <span class="glyphicon glyphicon-education" aria-hidden="true">
              </span> Capacitacion <span class="badge"> <?php echo count($capacitacion); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/puestos_c/index" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true">
              </span> Puestos <span class="badge"> <?php echo count($puesto); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/exp_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true">
              </span> Experincia 
              </a>
              <a href="<?php echo base_url(); ?>index.php/users_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-sunglasses" aria-hidden="true">
              </span> Usuarios <span class="badge"> <?php  ?></span> </a>
            </div>
</div>
   
   

             <div class="col-md-9">
             <?php 
             if($this->uri->segment(2) == "Guardado_exitoso"){

              echo '<p class="text-success">Datos Guardados</p>';
             } ?>
             <a  href="<?php echo base_url(); ?>index.php/puestos_c/index" type="button" class="btn btn-warning"> <- Volver</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Nuevo Capacitacion</h3>
              </div>
              <div class="panel-body">
                <form method="post" action ="<?php echo base_url();?>index.php/puestos_c/form_validation">
                  <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input  name="nombre" type="text" class="form-control">
                    <?php echo form_error('nombre'); ?>
                    </div>
                    <div class="form-group col-md-6">
                    <label>Departamento</label>
                    <input name="departamento" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="nivel_ri">Nivel Riesgo</label>
                   
                     <select class="custom-select d-block form-control" id="nivel_ri" name="nivel_ri" required>
                  <option value="Bajo" >Bajo</option>
                  <option value="Medio">Medio</option>
                  <option value="Alto">Alto</option>
                
                </select>
                <?php echo form_error('nivel'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label>Salario minimo</label>
                    <input name="salario_m" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label>Salario Maximo</label>
                    <input  name="salario_M" type="text" class="form-control">
                    <?php echo form_error('salario_M'); ?>
                    </div>
                    <div class="form-group col-md-6"">
                    <label for="estado">Estado</label>
                   
                     <select class="custom-select d-block form-control" id="estado" name="estado" required>
                  <option value="Activo" >Activo</option>
                  <option value="Inactivo">Inactivo</option>
                
                </select>
                    </div>
                   
                     </br>
                  <input type="submit" name="guardar" class="btn btn-success" value="Guardar">
                </form>
              </div></div></div></div>
    
            



   

    