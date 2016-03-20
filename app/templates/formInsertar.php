<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
  <b><span style="color: red;"><?php echo $params['mensaje'] ?> </b></span></b>

<?php endif; ?>
<br/>

<form name="formInsertar" action="index.php?ctl=insertar" method="POST">
<table>
    <tr>
        <th>Nombre</th>
        <th>Energia</th>
        <th>Proteina (g)</th>
        <th>H. de carbono</th>
        <th>Fibra (g)</th>
        <th>d       </th>
    </tr>
</table>






</form>
