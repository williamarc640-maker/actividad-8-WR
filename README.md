# actividad-8-WR
## nombre de la tabla
para que se conecte a una tabla de phpmyadmin la tabla debe llammarse mvc_crud,
o pueden cambiarlo al nombre que quieran en el archivo databese.php en la linea 6.

## configuracion de la tabla
<img width="830" height="99" alt="image" src="https://github.com/user-attachments/assets/8a460f6c-7e8e-4508-9b1a-b144447a0e0f" />


En cotejamiento pongan el que quieran

## funcionamiento 
database.php contiene la conexion a la base de datos  

index.php es a donde llegas y donde se verifica si hay una sesion iniciada, sino te redirije a login.php, y dependiento te redirige al metodo correspondiente de usuariocontroller.php

login.php aca te muestra el formulario de inicio de sesion y te redirige a index.php

logout,php este se ejecuta cuando le das a cerrar sesion devolviendote a login.php

usuario.php se encarga de la logica CRUD (Create,Read,Update,Delete) y de la coneccion a la base de datos.

usuariocontroller.php es el que recibe las acciones del usuario y coordina con usuario.php y todos los archivos de vistas

### Vistas
lista.php es la que muestra el listado de usuarios y de sus opciones

formularios.php es el que muestra cuando vas a agregar o cuando vas a editar un usuario

detalle.php muestra los datos del usuario elegido cuando le das a "ver" en lista.php
