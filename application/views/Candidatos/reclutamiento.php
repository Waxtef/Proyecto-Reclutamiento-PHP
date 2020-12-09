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
        
        </div>
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
 






            
           <div class="col-md-12">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#competencias_Modal">
  Agregar Comptencias
</button>
</div>
<div class="col-md-12"></div>
<div class="col-md-12">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#capacitaciones_Modal">
    Agregar Capacitaciones
</button>
</div><hr>
<div class="col-md-12"></div>
<div class="col-md-12">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#experiencias_Modal">
  Agregar Experiencias
</button>
</div>


<!-- Competencias -->

<div class="modal" id="competencias_Modal" tabindex="-1" aria-labelledby="competencias_ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Competencias</h4>
                 </div>
                 <form method="post" action ="<?php echo base_url();?>index.php/candidatos_c/validation_competencias">
                <div class="modal-body">
                  <div class="col-md-12">
                    <label for="competencia">Elija una Competencia</label>
                    <select class="custom-select d-block form-control" id="competencia" name="competencia" required>
                    <?php foreach($competencia as $c){echo "<option value=".$c->Id_Comp.">".$c->Descripcion."</option>";}?></select>
                   </div>
                      <div class="form-group col-md-12 fade">
                               <label>Id</label>
                               <input name="idcandidato" type="text" class="form-control" readonly value="<?php echo $candidato->Id_Candidatos; ?>">
                     </div>


                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="submit" name="guardar-com" class="btn btn-success">Guardar</button>

                  
                </div>
                <div class="modal-footer">
                  
                </div>
                </form>
              </div>
             </div>
            </div>

            
            


                   <!--Capacitaciones-->

            <div class="modal" id="capacitaciones_Modal" tabindex="-1" aria-labelledby="capacitaciones_ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Capacitaciones</h4>
                 </div>
                 <form method="post" action ="<?php echo base_url();?>index.php/candidatos_c/validation_capacitacion">
                <div class="modal-body">
                <div class="form-group col-md-12">
                                <label>Descripcion</label>
                                <input  name="descripcion" type="text" class="form-control">
                               <?php echo form_error('descripcion'); ?>
                              </div>
                              <div class="form-group col-md-12">
                                <label>Fecha desde</label>
                                <input name="f_desde" type="date" class="form-control">
                              </div>
                              <div class="form-group col-md-12">
                               <label>Fecha hasta</label>
                               <input name="f_hasta" type="date" class="form-control">
                              </div>
                              <div class="form-group col-md-12">
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
                                 <input  name="institucion" id="institucion" type="text" class="form-control">
                                 <?php echo form_error('institucion'); ?>
                               </div>
                               <div class="form-group col-md-4 fade">
                               <label>Id</label>
                               <input name="idcandidato" type="text" class="form-control" readonly value="<?php echo $candidato->Id_Candidatos; ?>">
                              </div>

                  
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="submit" name="guardar-com" class="btn btn-success">Guardar</button>
                    
              
                
                </div>
                <div class="modal-footer">
                  
                </div>
                </form>
              </div>
             </div>
            </div>





                     <!--Experiencia-->

            <div class="modal" id="experiencias_Modal" tabindex="-1" aria-labelledby="experiencias_ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Capacitaciones</h4>
                 </div>
                 <form method="post" action ="<?php echo base_url();?>index.php/candidatos_c/validation_exp">
                <div class="modal-body">
                <div class="form-group col-md-12">
                                <label>Empresa</label>
                                <input  name="empresa" type="text" class="form-control">
                               <?php echo form_error('empresa'); ?>
                              </div>
                              <div class="form-group col-md-12">
                                <label>Puesto</label>
                                <input  name="puesto" type="text" class="form-control">
                               <?php echo form_error('puesto'); ?>
                              </div>
                              <div class="form-group col-md-12">
                                <label>Fecha desde</label>
                                <input name="f_desde" type="date" class="form-control">
                              </div>
                              <div class="form-group col-md-12">
                               <label>Fecha hasta</label>
                               <input name="f_hasta" type="date" class="form-control">
                              </div>
                               <div class="form-group col-md-12">
                                 <label>Salario</label>
                                 <input  name="salario" id="salario" type="text" class="form-control">
                                 <?php echo form_error('salario'); ?>
                               </div>
                               <div class="form-group col-md-4 fade">
                               <label>Id</label>
                               <input name="idcandidato" type="text" class="form-control" readonly value="<?php echo $candidato->Id_Candidatos; ?>">
                              </div>

                  
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="submit" name="guardar-com" class="btn btn-success">Guardar</button>
                    
              
                
                </div>
                <div class="modal-footer">
                  
                </div>
                </form>
              </div>
             </div>
            </div>
                   

                   

                    
                   
                     </br>
                 
                     <a class="btn btn-success" href="<?php echo base_url();?>index.php/empleados_controller/login">Finalizar</a>
                  </div>
              </div>

               

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
 </body>
</html>
             
    
             
    
            



   

    