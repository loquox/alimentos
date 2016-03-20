<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Informacion Alimentos</title>
    <link rel="stylesheet" type="text/css"
      href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />
  </head>
  <body>
    <div id="cabecera">
      <h1>Información de alimentos</h1>
    </div>

    <div id="menu">
      <hr/>
      <a href="index.php?ctl=inicio">inicio</a> |
      <a href="index.php?ctl=listar">ver alimentos</a> |
      <a href="index.php?ctl=insertar">insertar alimentos</a> |
      <a href="index.php?ctl=buscar">buscar por nombre</a> |
      <a href="index.php?ctl=buscarAlimentosPorEnergia">buscar por energia</a> |

      <a href="index.php?ctl=buscarAlimentosCombinada">búsqueda combinada</a>
    </hr>
  </div>
  <div id="contenido">
    <?php echo $contenido ?>

  </div>
  <div id="pie">
    <hr/>
    <div align="center">- pie de página - </div>

  </div>


  </body>
</html>
