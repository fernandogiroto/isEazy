<img src="https://github.com/fernandogiroto/isEazy/blob/master/public/img/iseazy.png" width="100%">

## Prueba técnica Iseazy.com

- Usando migraciones, crear las tablas indicadas en el modelo.
- Modelizar las clases usando Eloquent para ello. Añadir relaciones entre modelos, y scopes para facilitar queries.
- Implementar mediante una API RESTful los siguientes endpoints:
- Listado de las tiendas con número de productos de cada una
- Descripción de una tienda, con el listado de productos de la misma y cantidad
- Creación de una tienda. Posibilidad de pasarle una colección o array de productos para almacenarlos en base de datos.
- Edición de una tienda.
- Eliminación de una tienda.
- Añadir endpoint de venta de producto, con aviso en la respuesta si la tienda está a punto de quedarse sin stock, o si la operación es imposible por falta de stock.

## Instalaciones necesarias
- Laravel | Para usar el programa, primero debe instalar el framewoek Laravel. Sólo tienes que acceder a este enlace (https://laravel.com/docs/9.x/installation) y seguir los pasos descritos en función de tu sistema operativo.

## Database
```sh
create database iseazybd
```

## .env
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=iseazybd
DB_USERNAME=root
DB_PASSWORD=
```

## Developer Testing
```sh
cd iseazybd
composer install
npm install 
php artisan migrate
php artisan seed
npm run dev
php artisan serve
```

## Laravel Flow
<img src="https://github.com/fernandogiroto/itgalleryproject/blob/project/laravel_flow.jpeg" alt="IT Gallery Larevel Flow" title="IT Gallery Larevel Flow" width="100%">


## Lenguajes y Frameworks Utilizados
Para utilizar el programa, debe tener conocimientos básicos de estas herramientas. Puedes consultar la documentación de cada uno en el listado a continuación.

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)</a>
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![SASS](https://img.shields.io/badge/SASS-hotpink.svg?style=for-the-badge&logo=SASS&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)

<br>**PHP:** Es el lenguaje de programación del que tengo mayor dominio y aprecio. Además, es el lenguaje detrás de laravel y, en mi opinión, es el más estable del mercado.
<br>**Laravel:** La elección del framework Laravel se debió a la organización de los módulos, las herramientas disponibles y la construcción de rutas y apis con mayor facilidad. Es un framework muy robusto y ágil.
<br>**Css3:** Lenguaje de programación utilizado para el elemento web visual.
<br>**Sass:** Sass es el mejor compilador de css. Disminuyendo drásticamente el tamaño de los archivos css. A pesar de que el proyecto es pequeño y demostrativo, el uso de Sass siempre es muy recomendable debido a sus capacidades de optimización.
<br>**Bootstrap:** Es uno de los mejores paquetes/frameworks css en la actualización. Muy robusto, práctico y organizado. Utiliza en su núcleo Sass y Javascript, con gran dominio.
<br>**Javascript:** El lenguaje de programación más utilizado en el mundo. Difícilmente un proyecto no usará javascript al menos una vez. Por mucho que utilice frameworks con más frecuencia, será necesaria alguna funcionalidad nativa.

## Documentación
A continuación se encuentran los enlaces para consultar la documentación de los lenguajes y frameworks utilizados en este proyecto.

| Lenguajes o Frameworks | Documentación |
| ------ | ------ |
| PHP | https://www.php.net/docs.php |
| Laravel | https://laravel.com |
| Css3 | https://developer.mozilla.org/pt-BR/docs/Web/CSS |
| Bootstrap | https://getbootstrap.com |
| Javascript | https://developer.mozilla.org/pt-BR/docs/Web/JavaScript |
| NPM | https://docs.npmjs.com |


## Licencia
![](https://img.shields.io/badge/Designer-@fernandocgiroto-informational?style=flat&logo=<>&logoColor=white&color=2bbc8a)<br>
![](https://img.shields.io/badge/Linkedin-linkedin.com/in/fernandogiroto-informational?style=flat&logo=<LINKEDIN>&logoColor=white&color=0B65C2)<br>
