# actividad-8-WR
## nombre de la tabla
para que se conecte a una tabla de phpmyadmin la tabla debe llammarse mvc_crud,
o pueden cambiarlo al nombre que quieran en el archivo databese.php en la linea 6.

## aclaracion
se que puede estar mal escrito este documento o que halla una mejor manera de hacer un crud, pero pues llevo poco tiempo programando y se que probablemente nadie lo lea esto, entonces dejeme sus recomendaciones.

## configuracion de la tabla
la tabla va haci:
nombre|tipo        |cotejamiento|atributos|nulo|predeterminado|comentarios|extra   
id    |INT(11)     |            |         |no  |ninguno       |           |AUTO_INCREMENT
nombre|VARCHAR(255)|            |         |no  |ninguno       |           |
correo|VARCHAR(255)|            |         |no  |ninguno       |           |

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
