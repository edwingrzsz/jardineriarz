<table>

<thead>

<?php
foreach ($resultado_find[0] as $llave => $valor) : 
?>
</thead>
<th>
<?php echo($llave); ?>
</th>
<?php endforeach; ?>

<tr>

<?php foreach ($resultado_find as $personas) : ?>

<?php foreach($personas as $llave=>$persona):  ?>
<td>
<?php echo($persona); ?>
</td>
<?php endforeach; ?>
</tr>
<?php endforeach; ?>

</table>