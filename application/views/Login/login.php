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
<div class="container">
<head><link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('Style'); ?>/css/login.css" /> </head>
<form class="form-signin" method="POST" action="<?php echo base_url(); ?>index.php/auth_c/Autenticacion"  >
      <div class="text-center mb-4">
        <!--<img class="mb-4" src="<?php echo base_url('img'); ?>/hosp.png" alt="" width="72" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal">Log In : Sistema Reclutamiento</h1>
        <p>Ingrese sus datos para poder entrar, <a href="<?php echo base_url(); ?>index.php/candidatos_c/reclutamiento"><code>Si es un candidato - Clik AQUI</code><a></p>
        <p>Ingrese sus datos para poder entrar, <a href="<?php echo base_url(); ?>index.php/candidatos_c/reclutamiento2"><code>segunda pantalla</code><a></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="user" name="user" class="form-control" placeholder="User" required >
        <label for="user">User</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
       
        <label for="pass">Password</label>
      </div>
      <br />    
      <div class="col col-lg-4">
      <input class="btn btn-lg btn-primary btn-block col-lg-3" type="submit" value="Log in"/>
      <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
      </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url('Style'); ?>/js/bootstrap.min.js"></script>
</body>
</html>