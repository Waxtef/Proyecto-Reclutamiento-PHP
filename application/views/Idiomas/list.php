<?php plantilla::aplicar();?>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small> Idiomas</small></h1>
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
              <a href="<?php echo base_url(); ?>index.php/idiomas_c/index" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-file" aria-hidden="true">
              </span> Idiomas <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/competencias_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-equalizer" aria-hidden="true">
              </span> Competencias <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/capacitacion_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-education" aria-hidden="true">
              </span> Capacitacion <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/puestos_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true">
              </span> Puestos <span class="badge"> <?php echo count($idioma); ?></span>
              </a>
              <a href="<?php echo base_url(); ?>index.php/exp_c/index" class="list-group-item">
              <span class="glyphicon glyphicon-comment" aria-hidden="true">
              </span> Experincia <span class="badge"> <?php echo count($idioma); ?></span>
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
             <a  href="<?php echo base_url(); ?>index.php/idiomas_c/crear" type="button" class="btn btn-success"> + Idioma</a>
             <hr>
         <!-- from para empleado -->
         <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Listado de Idiomas</h3>
              </div>
              <div class="panel-body">
              <table class="table table-striped table-hover">
                      <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
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

			
					 foreach($idioma as $i)
				{
          echo "<tr>".
          "<td>".$i->Nombre."</td>".
          "<td>".$i->Estado."</td>"
          ."<td><a class=$btn_warning href='modifyIdioma/".$i->Id_Idioma."'><span class=$pencil aria-hidden=$true></span></a>"
          ."<a class=$btn_danger href='DeleteIdioma/".$i->Id_Idioma."'><span class=$ex aria-hidden=$true></span></a></td>"
         
					."</tr>";
				}
				
		    	?>
                    </table>
               
              </div></div></div>
              
              </div>
    
            
