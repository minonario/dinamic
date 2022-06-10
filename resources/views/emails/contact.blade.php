<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<html>
  <title>Dinamic</title>
  <head>
    
  </head>
  <body>
    Email generado automáticamente para uso interno de Dinamic.
    <table>
      <thead>
        <tr>
          <td><strong>Nombre y Apellido:</strong></td>
          <td>{{ $data['fullname']   }}</td>
        </tr>
         <tr>
          <td><strong>Número de teléfono:</strong></td>
          <td>{{ $data['phone']   }}</td>
        </tr>
         <tr>
          <td><strong>Correo Electrónico:</strong></td>
          <td>{{ $data['email']   }}</td>
        </tr>
          <tr>
          <td><strong>Mensaje</strong></td>
          <td><p>{{ $data['message']   }}</p></td>
        </tr>

        </tr>
      </thead>
    </table>
  </body>
</html>
