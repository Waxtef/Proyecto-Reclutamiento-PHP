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
             <a  href="<?php echo base_url(); ?>index.php/empleados_controller/index" type="button" class="btn btn-warning"> <- Volver</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Nuevo Empleado</h3>
              </div>
              <div class="panel-body">
              <script type="text/javascript">
function validarcedula()
{
 var i;
 var cedula;
 var acumulado;
 cedula= document.formacedula.textocedula.value;
 var instancia;
 acumulado=0;
 for (i=1;i<=9;i++)
 {
  if (i%2!=0)
  {
   instancia=cedula.substring(i-1,i)*2;
   if (instancia>9) instancia-=9;
  }
  else instancia=cedula.substring(i-1,i);
  acumulado+=parseInt(instancia);
 }
 while (acumulado>0)
  acumulado-=10;
 if (cedula.substring(9,10)!=(acumulado*-1))
 {
  alert("Cedula no valida!!");
  document.formacedula.textocedula.setfocus();
 }
 alert("Cedula valida !!");
}
</script>
                <form method="post" action="<?php echo base_url();?>index.php/empleados_controller/form_validation" form="formacedula">
                  <div class="form-group">
                    <label>Cedula</label>
                    <input type="text" name="cedula" id="textocedula" class="form-control" onchange="validarcedula()" required>
                    <?php echo form_error('cedula'); ?>
                  </div>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input  name="nombre" type="text" class="form-control" required>
                    <?php echo form_error('nombre'); ?>
                    </div><hr/>

                     <div class="form-group">
                    <label>Departamento</label>
                    <input  name="departamento" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-5">
                    <label>Fecha de ingreso</label>
                    <input name="f_ingreso" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-7">
                    <label>Puesto</label>
                    <input name="puesto" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label>Salario</label>
                    <input name="salario" type="number" min="10000" class="form-control" required>
                    <?php echo form_error('salario'); ?>
                    </div>
                    <div class="form-group col-md-6"">
                    <label for="estado">Estado</label>
                   
                     <select class="custom-select d-block form-control" id="estado" name="estado" required>
                  <option value="Activo" active>Activo</option>
                  <option value="Inactivo">Inactivo</option>
                
                </select>
                    </div>
                   
                     </br>
                  <input type="submit" name="guardar" class="btn btn-success" value="Guardar">
                </form>
              </div></div></div></div>
    
            



   

    