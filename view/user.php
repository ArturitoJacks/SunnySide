<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="indexUser.php?controller=user&action=showById">Nuevo</a>
   <table>
      <tr>
         <?php require_once 'core/const.php';
         foreach(DATA_USER as $key => $value) :
         ?>
        <td><?php echo $value?></td>
         <?php endforeach;?>
      </tr>
      <?php foreach($this->model->getAll() as $user):
      ?>
      <tr>
         <td><?php echo $user->name?></td>
         <td><?php echo $user->lastName?></td>
         <td><?php echo $user->sex?></td>
         <td><?php echo $user->address?></td>
         <td><?php echo $user->phone?></td>
         <td><?php echo $user->age?></td>
         <td><a href="indexUser.php?controller=user&action=showById&id=<?php echo $user->id;?>">Editar</a> </td>
         <td><a onclick="javascript:return confirm('Seguro desea elimiar este registro');"href="indexUser.php?controller=user&action=quit&id=<?php echo $user->id; ?>">Eliminar</a></td>
      </tr>
      <?php endforeach;?>
   </table>  
</body>
</html>