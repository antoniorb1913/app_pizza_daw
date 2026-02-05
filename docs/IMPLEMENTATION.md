## INSTALAR COMPOSER INSTALL

## php artisan key:migrate
    - Gererar la clave para que funcione el proyect y luego en render.

    - PP_KEY=base64:yKH6S+KKgEtFz55dCoZ9gfY7kXDtuEhKcqe4XVvm32E=

## DOCKER-COMPOSE.LOCAL.YML

    - Implementacion de un contenedor de una base de datos en postgres
  
![docker local](imagenes/docker-local.png)


    - prueba del enpoint (/pizza).
  
![docker local](imagenes/prueba-local.png)


    - prueba del enpoint (/find/1).
  
![docker local](imagenes/prueba-local1.png)

## DOCKER-COMPOSE.DEV.YML

### Implementacion de un contenedor de una base de datos en postgres y otro para que carge el laravel y dockerfile para cargar los seeder.

    - docker-compose.dev.yml
  
![docker local](imagenes/docker-dev.png)

    - .dockerignore

![docker local](imagenes/dockerignore.png)


    - Dockerfile

![docker local](imagenes/dockerfile.png)

Aqui tenemos dos contenedores uno es el de la base de datos postgres y el otro es para que levante laravel y los seeder

lo que hace el dockerfile el cuando se despliegue hace el composer install y levanta se espera 10 segundos y hace los seeder y levanta el proyecto.

La clave es el .dockerignore que lo que hace es que le decimos al contenedor que ignore el .env y asi pueda coger las variables de entorno que hemos puesto en el contenedor db-dev las "environment"

que apunta al contenedor de la base de datos que hemos puesto arriba, el db-dev.


    - prueba del enpoint (/pizza) en el dev 


![docker local](imagenes/prueba-dev.png)




## DESPLIGUE EN RENDER CON POSTGRES

    - web service para la pagina.
    - postgres


![docker local](imagenes/dos-servicios.png)


    - variables de entorno que apuntan a la base de datos postgres creada en render.


![docker local](imagenes/variables-entorno.png)

    - prueba de despliegue de la aplicacion.


![docker local](imagenes/prueba-render.png)

    - Dockerfile

![docker local](imagenes/dockerfile.png)

    - Lo que hacees que el docker compose esta configurado para cargar los migrate y todo, preparado para render y el docker compose dev se que tu utilizaste los una imagen pero asi me funciona tamben.

 - ENLACE DE RENDER https://app-pizza-daw-shz8.onrender.com/



## RENDER MYSQL


    - variables de entorno de mysql

![docker local](imagenes/variables-entorno-mysql.png)

    - lo cree una base de datos en skysql y me meti a la base de datos desde la extension y cree una base de datos llamada pizza la cosa que cuando intenta desplegar da error no se realmente es la contraseña o no , que sepas que me voy cabreado jaja.


![docker local](imagenes/mysql-database.png)