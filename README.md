# Práctica 1 - Entorno de desarrollo con Docker

## ¿En qué consiste la práctica?

En esta práctica he creado un entorno de desarrollo web utilizando Docker. La idea es tener los diferentes servicios separados en contenedores en vez de instalar todo directamente en el ordenador como se haría con XAMPP.

He utilizado tres contenedores:

- Nginx, que se encarga del servidor web.
- PHP 8.3, que se encarga de ejecutar el código PHP.
- MySQL, que se utiliza para la base de datos.

## Cómo funciona

Cuando entro desde el navegador a la página, la petición llega primero a Nginx.

Nginx se encarga de pasar las peticiones PHP al contenedor de PHP mediante FastCGI.

Después, PHP puede conectarse a MySQL utilizando PDO para trabajar con la base de datos.

El funcionamiento sería:

Navegador → Nginx → PHP → MySQL

## Cómo iniciar el proyecto

Para iniciar los contenedores utilizo:

```bash
docker compose up -d

## Captura de funcionamiento

La aplicación funcionando correctamente:

![Aplicación funcionando](capturas/funciona.png)