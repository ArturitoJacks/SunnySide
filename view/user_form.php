<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="indexUser.php?controller=user&action=save" method="post">
       <input type="hidden" name="id" value="<?php echo $user->id?>">
       <table>
         <tr>
           <td>Nombre</td>
           <td> <input type="text" name="name" value="<?php echo $user->name; ?>">
           </td>
         </tr>
         <tr>
           <td>Apellido</td>
           <td><input type="text" name="lastName" value="<?php echo $user->lastName;?>"></td>
         </tr>
         <tr>
           <td>Sexo</td>
           <td>
           <select class="" name="sex">
              <option <?php echo $user->sex=='Hombre'?'Selected':''; ?>value='Hombre'>Hombre</option>
              <option <?php echo $user->sex=='Mujer'?'Selected':''; ?>value='Mujer'>Mujer</option>
          </select>
           </td>
         </tr>
         <tr>
           <td>Direccion</td>
           <td><input type="text" name="address" value="<?php echo $user->address;?>">
           </td>
         </tr>
         <tr>
           <td>Telefono</td>
           <td><input type="text" name="phone" value="<?php echo $user->phone;?>"></td>
         </tr>
         <tr>
           <td>Edad</td>
           <td><input type="number" name="age" value="<?php echo $user->age;?>"></td>
         </tr>
         <tr><td><input type="submit" name="save" value="Enviar">
      </td>
       </table>
    </form>
</body>
</html>