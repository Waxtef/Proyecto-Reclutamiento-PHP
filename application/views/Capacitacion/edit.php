<?php plantilla::aplicar();?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small>Capacitacion</small></h1>
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
                 </span> Candidatos <span class="badge"> <?php echo count($cap); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/idiomas_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-file" aria-hidden="true">
              </span> Idiomas <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/competencias_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-equalizer" aria-hidden="true">
              </span> Competencias <span class="badge"> <?php echo count($competencia); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/capacitacion_c/index" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-education" aria-hidden="true">
              </span> Capacitacion <span class="badge"> <?php echo count($capacitacion); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/puestos_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true">
              </span> Puestos <span class="badge"> <?php echo count($cap); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/exp_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true">
              </span> Experincia 
              </a>
              <a href="<?php echo base_url(); ?>index.php/users_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-sunglasses" aria-hidden="true">
              </span> Usuarios <span class="badge"> <?php echo count($cap); ?></span> </a>
            </div>
</div>
   
   

             <div class="col-md-9">

             
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Modificar Competencia</h3>
              </div>
              <div class="panel-body">
                <form method="post" action ="<?php echo base_url();?>index.php/capacitacion_c/UpdateCapacitacion">
                <div class="form-group col-md-2">
                    <label>Id</label>
                    <input type="text" readonly name="id" value="<?php echo $cap->Id_Cap?>" class="form-control" >
                </div>
                <div class="form-group col-md-10">
                    <label>Descripcion</label>
                    <input  name="descripcion" type="text" value="<?php echo $cap->Descripcion?>" class="form-control">
                    <?php echo form_error('descripcion'); ?>
                    </div>
                    <div class="form-group col-md-4">
                    <label>Fecha desde</label>
                    <input name="f_desde" type="date"  value="<?php echo $cap->F_desde?>" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label>Fecha hasta</label>
                    <input name="f_hasta" type="date"  value="<?php echo $cap->F_Hasta?>" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="nivel">Nivel</label>
                   
                     <select class="custom-select d-block form-control" id="nivel" name="nivel" placeholder="value="<?php echo $cap->Nivel ?>"" required>
                  <option value="Grado" >Grado</option>
                  <option value="Maestria">Maestria</option>
                  <option value="Post Grado">Post Grado</option>
                  <option value="Doctorado">Doctorado</option>
                  <option value="Tecnico">Tecnico</option>
                  <option value="Gestion">Gestion</option>
                
                </select>
                <?php echo form_error('nivel'); ?>
                    </div>
                    <div class="form-group col-md-9">
                    <label>Institucion</label>
                    <input  name="institucion" type="text"  value="<?php echo $cap->Institucion?>" class="form-control">
                    <?php echo form_error('institucion'); ?>
                    </div>
                   
                     </br>
                     <a  href="<?php echo base_url(); ?>index.php/capacitacion_c/index" type="button" class="btn btn-danger">Cancelar</a>
                  <input type="submit" name="guardar" class="btn btn-success" value="Guardar">
                </form>
              </div>
              </div>
              </div>
            </div>
    