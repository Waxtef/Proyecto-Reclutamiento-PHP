<?php plantilla::aplicar();?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small>Admin</small></h1>
          </div>
         
        </div>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/empleados_controller/index" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-user" aria-hidden="true">
                   </span> Empleados 
              </a>
              <a href="<?php echo base_url(); ?>index.php/candidatos_c/index" class="list-group-item">
                 <span class="glyphicon glyphicon-list aria-hidden="true">
                 </span> Candidatos 
              </a>
              <a href="<?php echo base_url(); ?>index.php/idiomas_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-file" aria-hidden="true">
              </span>  Idiomas
              </a>
              <a href="<?php echo base_url(); ?>index.php/competencias_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-equalizer" aria-hidden="true">
              </span> Competencias 
              </a>
              <a href="<?php echo base_url(); ?>index.php/capacitacion_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-education" aria-hidden="true">
              </span> Capacitacion 
              </a>
              <a href="<?php echo base_url(); ?>index.php/puestos_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true">
              </span> Puestos 
              </a>
              <a href="<?php echo base_url(); ?>index.php/exp_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true">
              </span> Experincia 
              </a>
              <a href="<?php echo base_url(); ?>index.php/users_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-sunglasses" aria-hidden="true">
              </span> Usuarios  </a>
            </div>
</div>
   
   

             <div class="col-md-9">
             <?php 
             if($this->uri->segment(2) == "Guardado_exitoso"){

              echo '<p class="text-success">Datos Guardados</p>';
             } ?>
              <?php 
             if($this->uri->segment(3) == "cedula_invalida"){

              echo '<p class="text-danger">Cedula Invalida</p>';
             } ?>
             <a  href="<?php echo base_url(); ?>index.php/empleados_controller/index" type="button" class="btn btn-warning"> <- Volver</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Nuevo Empleado</h3>
              </div>
              <div class="panel-body">
                <form method="post" action ="<?php echo base_url();?>index.php/empleados_controller/form_validation">
                  <div class="form-group">
                    <label>Cedula</label>
                    <input type="text" name="cedula" class="form-control" >
                    <?php echo form_error('cedula'); ?>
                  </div>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input  name="nombre" type="text" class="form-control">
                    <?php echo form_error('nombre'); ?>
                    </div><hr/>

                     <div class="form-group">
                    <label>Departamento</label>
                    <input  name="departamento" type="text" class="form-control" >
                    </div>
                    <div class="form-group col-md-5">
                    <label>Fecha de ingreso</label>
                    <input name="f_ingreso" type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-7">
                    <label>Puesto</label>
                    <input name="puesto" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                    <label>Salario</label>
                    <input name="salario" type="text" class="form-control">
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
    
            



   

    