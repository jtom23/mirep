
<body>
<h1>Lista de usuarios</h1>    
<table>
    <?php 
  
    foreach($arrayuser as $user) {?>
        <tr>
        <th><?php echo $user[0]  ?></th>
        <th><?php echo $user[1]  ?></th>
        <td><a href="?method=show&id=<?php echo $user[0]?>">Ver usuario></a></td>
        </tr>
        
    <?php } ?>
    
</table>
    
</body>


