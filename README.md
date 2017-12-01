



### Desarrollo de codigo

La aplicación se creó con en PHP 7.0.2 y Laravel 5.4; se utilizó bootstrap y jQuery en la vista, y la
base de datos utilizada fue MySql, aunque la prueba pudo realizarse sin el uso de base de datos
se creó una tabla para el almacenamiento de la matriz.

La aplicación tiene las 3 capas del modelo vista controlador.

La única vista existente esta creada en la carpeta “resources/view” el
archivo se llama cube.blade.php y es una vista de laravel con el motor de
platillas blade, para el soporte de las operaciones de la vista se creó el
archivo “public/js/rappi_test.js” la cual contiene todas las operaciones en
javascript – jQuery y los request Ajax.

El controlador se encuentra en la carpeta “app/Http/Controllers/CubeController.php” aca se reciben las operaciones de la
vista, para la prueba se creó el get de la página y la respuesta a la petición
Ajax de los resultados. Otra parte de la lógica de negocio se encuentra en la
clase Query.php ubicada en la carpeta “app/Util” cuya responsabilidad es hacer las
consultas en base de datos y realizar los cálculos.

El modelo es una sola tabla representada con la clase "Cube.php"

Se crearon las migraciones para laravel con el objetivo de crear la única tabla que se utiliza
en la prueba.

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Para ejecutar el proyecto
se debe configurar el .env con los datos de la conexión y ejecutar las
migraciones con el comando </span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>php artisan migrate </span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>El proyecto se debe
dejar con la siguente url en el equipo local para que no fallen las peticiones
Ajax</span></span></p>

<p class=MsoNormal><span lang=ES><a
href="http://127.0.0.1/rappi_test/public/cube"><span class=fontstyle01><span
style='text-decoration:none'>http://127.0.0.1/rappi_test/public/cube</span></span></a></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Lo códigos se encuentran
publicados en gitHub en la url </span></span><span lang=ES><a
href="https://github.com/rquiroga83/rappi_test"><span class=fontstyle01><span
style='text-decoration:none'>https://github.com/rquiroga83/rappi_test</span></span></a></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

### Ejemplo de funcionamiento comparado con el test de la página hackerrank:

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Test de la página
hackerrank</span></span></p>

<p class=MsoNormal><span style='font-size:10.5pt;line-height:115%;background:
#FAFAFA'><img border=0 width=130 height=183 id="Imagen 3"
src="imagenes/image001.png"><img border=0 width=148
height=164 id="Imagen 4" src="imagenes/image002.png"></span></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=385 height=426 id="Imagen 1"
src="imagenes/image003.png"></p>

<p class=MsoNormal align=center style='text-align:center'><u><span lang=ES><span
 style='text-decoration:none'>&nbsp;</span></span></u></p>

<p class=MsoNormal align=center style='text-align:center'><u><img border=0
width=398 height=447 id="Imagen 5"
src="imagenes/image004.png"></u></p>

<p class=MsoNormal align=center style='text-align:center'><u><img border=0
width=399 height=541 id="Imagen 6"
src="imagenes/image005.png"></u></p>

<p class=MsoNormal align=center style='text-align:center'><u><img border=0
width=389 height=423 id="Imagen 7"
src="imagenes/image006.png"></u></p>

<p class=MsoNormal align=center style='text-align:center'><u><span lang=ES><span
 style='text-decoration:none'>&nbsp;</span></span></u></p>

<p class=MsoNormal><b><span lang=ES>Segunda prueba</span></b></p>

<p class=MsoNormal><b><span lang=ES>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=391 height=542 id="Imagen 8"
src="imagenes/image007.png"></p>

<p class=MsoNormal><span lang=ES>Esta última prueba quedo en base de datos como
sigue;  los valores de la matriz están desde cero es decir que las posiciones
x, y , z son almacenadas como x-1, y-1 y z-1:</span></p>

<p class=MsoNormal><span lang=ES>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=384 height=265 id="Imagen 9"
src="imagenes/image008.png"></p>


