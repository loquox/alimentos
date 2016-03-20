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
        <th>Grasa total (g)</th>
    </tr>
    <tr>
        <td>
            <input type="text" name="nombre" value="<?php echo 
            $params['nombre']?>"/>
        </td>
        <td>
            <input type="text" name="energia" value="<?php echo
            $params['energia']?>"/>
        </td>
        <td>
            <input type="text" name="proteina" value="<?php echo
            $params['proteina']?>" />
        </td>
        <td>
            <input type="text" name="hc" value="<?php echo 
            $params['hc']?> " />
        </td>
        <td>
            <input type="text" name="fibra" value="<?php echo
            $params['fibra']?>" />
        </td>
        <td>
            <input type="text" mame="grasa" value="<?php echo
            $params['grasa']?>" />
        </td>
    </tr>
    </table>
    <input type="submit" value="insertar" name="insertar" />
</form>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
    
    
    
    
    
    
    
    
    
        
            
            
            
                
                
    
    
</table>






</form>
