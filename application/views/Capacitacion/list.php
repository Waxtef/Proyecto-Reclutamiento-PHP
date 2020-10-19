<?php plantilla::aplicar();?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small> Capacitacion</small></h1>
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
                 </span> Candidatos <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/idiomas_c/index" class="list-group-item ">
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
              </span> Puestos <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/exp_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true">
              </span> Experincia
              </a>
              <a href="<?php echo base_url(); ?>index.php/users_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-sunglasses" aria-hidden="true">
              </span> Usuarios <span class="badge"> <?php echo count($idioma); ?></span> </a>
            </div>
</div>
   

             <div class="col-md-9">
             <?php 
             if($this->uri->segment(2) == "editado_exitoso"){

              echo '<p class="text-success">Datos Editados Exitosamente</p>';
             } ?>
             <a  href="<?php echo base_url(); ?>index.php/capacitacion_c/crear" type="button" class="btn btn-success"> + Competencia</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Listado de Capacitacion</h3>
              </div>
              <div class="panel-body">
              <table class="table table-striped table-hover">
                      <tr>
                        <th>Decripcion</th>
                        <th>Nivel</th>
                        <th>Fecha Desde</th>
                        <th>Fecha Hasta</th>
                        <th>Insitutcion</th>
                        <th><th>
                      </tr>

                      <?php

                     

                      $btn_danger = '"btn btn-danger"';
                      $btn_warning = '"btn btn-warning"';
                      $true = '"true"';
                      $pencil = '"glyphicon glyphicon-pencil"';
                      $ex = '"glyphicon glyphicon-remove-circle"';
                      $mody = '"#modifyUser"';
                      $data = '"modal"';

			
					 foreach($capacitacion as $c)
				{
          echo "<tr>".
          "<td>".$c->Descripcion."</td>".
          "<td>".$c->Nivel."</td>".
          "<td>".$c->F_desde."</td>".
          "<td>".$c->F_Hasta."</td>".
          "<td>".$c->Institucion."</td>"
          ."<td><a class=$btn_warning href='modifyCapacitacion/".$c->Id_Cap."'><span class=$pencil aria-hidden=$true></span></a>"
          ."<a class=$btn_danger href='DeleteCapacitacion/".$c->Id_Cap."'><span class=$ex aria-hidden=$true></span></a></td>"
         
					."</tr>";
				}
				
		    	?>
                    </table>
               
              </div></div></div>
              
              </div>