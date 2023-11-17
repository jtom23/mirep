
<h1>Lista de usuarios</h1>
<table>
    <?php foreach ($arrayusers as $user) { ?>
        <tr>
            <td><?php echo $user[0] ?></td>
            <td><?php echo $user[1] ?></td>
            <td><a href="?method=show&id=<?php echo $user[0] ?>">Ver usuario</a></td>
        </tr>
    <?php } ?>
</table>

