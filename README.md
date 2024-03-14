
# Proyecto API de conexión con JSONPlaceholder

Este proyecto permite a los usuarios interactuar con la API RESTful de JSONPlaceholder mediante operaciones GET y POST.

## Requisitos Previos

- PHP 7.2 o superior
- cURL para PHP
- Servidor web como Apache o Nginx
- Conocimiento básico de HTTP y REST

## Configuración del Entorno

1. **Instalación de PHP**: Asegúrate de tener PHP instalado en tu sistema. Puedes descargarlo desde [el sitio oficial de PHP](https://www.php.net/).
2. **Habilitar cURL**: Verifica que la extensión de cURL esté habilitada en tu archivo `php.ini`.
3. **Servidor Web**: Asegúrate de tener un servidor web configurado para servir archivos PHP. Si utilizas XAMPP o WAMP, esto ya está configurado por defecto.

## Instalación del Proyecto

1. Clona o descarga este proyecto en la carpeta de tu servidor web, por ejemplo, en `htdocs` si usas XAMPP.
2. Abre la terminal o línea de comandos y navega hasta la carpeta del proyecto.
3. Si es necesario, asigna los permisos adecuados a los archivos del proyecto para que el servidor web pueda acceder a ellos.

## Ejecutar el Proyecto

1. Abre tu navegador web.
2. Dirígete a `http://localhost/directorio_del_proyecto/formulario.html` (reemplaza `directorio_del_proyecto` con el nombre de la carpeta donde guardaste el proyecto).
3. Utiliza el formulario para enviar datos y ver cómo el script interactúa con la API de JSONPlaceholder.

## Cómo Funciona

- `api-conexion.php`: Este es el script principal que contiene las funciones para realizar solicitudes GET y POST utilizando cURL a la API de JSONPlaceholder.
- `formulario.html`: Un formulario simple que permite al usuario enviar un título, cuerpo de mensaje y ID de usuario para crear una nueva publicación a través de la API.

Cuando se envía el formulario, el script `api-conexion.php` procesa la solicitud POST, ejecuta la función `createPost` y muestra el resultado.

## Contribuir

Si deseas contribuir a este proyecto, por favor haz un fork y envía un pull request con tus cambios para su revisión.

## Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo `LICENSE.md` para más detalles.


