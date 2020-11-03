<?php 
class plantilla{
    static $instancia = null;
static function aplicar(){
    self::$instancia = new plantilla;

}

    function __construct(){
        ?>
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
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/board.css" />
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
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/empleados_controller/index"">RH</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Empleados</a></li>
            <li><a href="#">Candidatos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>index.php/auth_c/Mostrar_Login">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    
    <?php 
    }

    function __destruct(){

    ?>
    
    <!---Jose Manuel - 20163784 key- AIzaSyANvkT25SxbmZMydJnxA7gi60V5c5sGj40
       Bootstrap core JavaScript-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url('Style'); ?>/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    
}
}
