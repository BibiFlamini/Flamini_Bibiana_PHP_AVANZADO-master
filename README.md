## Trabajo Final curso PHP y MYSQL AVANZADO UTN BA
#### Bibiana Flamini

##### Para poder utilizar el código del trabajo, deberás seguir los siguientes pasos:

<ol>
<li>Clonar el proyecto completo en carpeta htdocs de xampp o servidor local instalado.</li>
<li>Crear una base de datos con el nombre: "flamini_bibiana".</li>
<li>En el archivo "conexion.php" que se encuentra dentro de la carpeta "modelos", se encuentra la conexión a la base de datos. El host utilizado es "localhost", el usuario es "root" y la clave se encuentra vacía "".</li>
<li>Con el usuario "admin@admin.com" y el password "admin" se puede ingresar como administrador del sitio.</li>
</ol>

#### Descripción del sitio:

<p>
Este proyecto es un sitio web autoadministrable desarrolado bajo el patron Modelo Vista Controlador. A traves de Apache y el archivo htaccess redirijo todas las peticiones al archivo "index.php".
</p>
<p>
El sitio cuenta con cuatro páginas: Home, Historia, Notas y Novedades.
</p>
<p>
En el Home se muestra la plantilla contenida en el archivo "plantilla.php". El encargado de esta tarea es el controlador "plantilla.controlador.php", contenido dentro de la carpeta "controladores", el cual utiliza la clase "ControladorPlantilla" para instanciarlo.
</p>
<p>
En "Historia" se cuenta una breve historia sobre los inicios del vino y su evolución en el tiempo.
</p>
<p>
En "Notas" se muestran diferentes noticias relacionadas con el mundo del vino.
</p>
<p>
En "Novedades" se muestran avisos, que se pueden ver a través de un modal interactivo.
</p>
<p>
Con la clase ControladorPlantilla que se instancia dentro del Index, se obtiene la ruta solicitada por el navedador y con las funciones del controlador llamo, creo o edito las distintas funciones del modelo "ModeloFormularios", contenido en el archivo "formularios.modelo.php", que se encuentra dentro de la carpeta "modelos" . Este modelo será el encargado de interactuar con la base de datos previamente descripta.
</p>
<p>
El controlador "formularios.controlador", que se encuentra dentro de la carpeta "controladores", será el encargado de recibir la información y enviarla a la vista correspondiente.
</p>
<p>
A través del archivo "plantilla.php" se muestran las vistas contenidas en la carpeta "paginas", dentro de la carpeta "vistas". Estas son: "registro.php", "inicio.php", "ingreso.php" y "editar.php".
</p>
<p>
ModeloFormularios es la clase que se encargada de manejar los usuarios que se registran e ingresan al sitio, (insertar, seleccionar,  actualizar y eliminar registro y además, validarEmail para la peticion ajax, contenida en el archivo "formularios.ajax.php" dentro de la carpeta "ajax"). Este modelo utiliza la clase "Conexion" para conectarse a la base de datos.
</p>

**Espero que les haya sido de utilidad**
