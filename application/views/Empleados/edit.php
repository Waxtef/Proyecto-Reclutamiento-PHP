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

             
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Modificar Empleado</h3>
              </div>
              <div class="panel-body">
                <form method="post" action ="<?php echo base_url();?>index.php/empleados_controller/UpdateEmpleado">
                <div class="form-group col-md-2">
                    <label>Id</label>
                    <input type="text" readonly name="id" value="<?php echo $emp->Id_Empleado ?>" class="form-control" >
                </div>
                  <div class="form-group col-md-5">
                    <label>Cedula</label>
                    <input type="text" name="cedula" value="<?php echo $emp->Cedula ?>" class="form-control" >
                    <?php echo form_error('cedula'); ?>
                  </div>
                  <div class="form-group col-md-5">
                    <label>Nombre</label>
                    <input  name="nombre" type="text" value="<?php echo $emp->Nombre ?>" class="form-control">
                    <?php echo form_error('nombre'); ?>
                    </div><hr/>

                     <div class="form-group">
                    <label>Departamento</label>
                    <input  name="departamento" type="text" value="<?php echo $emp->Departamento ?>" class="form-control" >
                    </div>
                    <div class="form-group col-md-5">
                    <label>Fecha de ingreso</label>
                    <input name="f_ingreso" readonly type="text" value="<?php echo $emp->F_Ingreso ?>" class="form-control">
                    </div>
                    <div class="form-group col-md-7">
                    <label>Puesto</label>
                    <input name="puesto" type="text"  value="<?php echo $emp->Puesto ?>"class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                    <label>Salario</label>
                    <input name="salario" type="text" value="<?php echo $emp->Salario ?>" class="form-control">
                    </div>
                    <div class="form-group col-md-6"">
                    <label for="estado">Estado</label>
                   
                     <select class="custom-select d-block form-control" id="estado" name="estado" placeholder="value="<?php echo $emp->Estado ?>"" required>
                  <option value="Activo" >Activo</option>
                  <option value="Inactivo">Inactivo</option>
                
                </select>
                    </div>
                   
                     </br>
                     <a  href="<?php echo base_url(); ?>index.php/empleados_controller/index" type="button" class="btn btn-danger">Cancelar</a>
                  <input type="submit" name="guardar" class="btn btn-success" value="Guardar">
                </form>
              </div>
              </div>
              </div>
            </div>
    