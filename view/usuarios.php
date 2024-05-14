<?php require_once('./core/constantes.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pagina</title>
</head>
<body>

<form action="">
    <a href="index.php?controller=usuario&accion=mostrarUsuario">Nuevo</a>
    <table>
        <tr>
            <?php 
                foreach (usuarioColums as $value) {
                    echo "<td>" . $value . "</td>";
                }
            ?>
        </tr>
        <?php foreach($this->consultarTodo() as $usuarios):?>
        <tr>
            <td><?php echo $usuarios->nombre;?></td>
            <td><?php echo $usuarios->apellido;?></td>
            <td><?php echo $usuarios->telefono;?></td>
            <td><?php echo $usuarios->edad;?></td>
            <td><a href="index.php?controller=usuario&accion=mostrarUsuario&id=<?php echo $usuarios->id?>">Editar</a></td>
            <td><a href="index.php?controller=usuario&accion=eliminar&id=<?php echo $usuarios->id?>" onclick="javascript:return confirm('¿Seguro que desea eliminar este registro?')">Eliminar</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</form>
    
</body>
</html>