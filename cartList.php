<?php
session_start();
?>

<table>
    <thead>
    <tr>
        <th>Foto</th>
        <th>Naam</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php
    foreach($_SESSION as $key => $values)
        {
         ?>
         <tr>
        <td><?php echo $values["name"]?></td>
        <td><?php echo $values["quantity"]?></td>
        <td><?php echo $values["price"]?></td>
        <?php 
    } ?>
    </tr>
    </tbody>
</table>