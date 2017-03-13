
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:Corbel;
	panose-1:2 11 5 3 2 2 4 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Texto de globo Car";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.TextodegloboCar
	{mso-style-name:"Texto de globo Car";
	mso-style-link:"Texto de globo";
	font-family:"Tahoma","sans-serif";}
span.fontstyle01
	{mso-style-name:fontstyle01;
	font-family:"Corbel","sans-serif";
	color:black;
	font-weight:normal;
	font-style:normal;}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=ES-CO link=blue vlink=purple>

<div class=WordSection1>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Prueba técnica Rappi –
Andrés Quiroga</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>La aplicación se creó
con en PHP 7.0.2  y Laravel 5.4; se utilizó bootstrap y jQuery en la vista y la
base de datos utilizada fue MySql.</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>La aplicación tiene
las 3 capas del modelo vista controlador  </span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La única vista existente esta creada en la carpeta “resources/view” el
archivo se llama cube.blade.php y es una vista de laravel con el motor de
platillas blade, para el soporte de las operaciones de la vista se creó el
archivo “public/js/rappi_test.js” el cuan contiene todas las operaciones en
javascript – jQuery y los request Ajax</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>El controlador se encuentra en la carpeta
“app/Http/Controllers/CubeController.php” aca se reciben las operaciones de la
vista, para la prueba se creó el get de la página y la respuesta a la petición
Ajax de los resultados. Otra parte de la lógica de negocio se encuentra en la
clase Query.php  en la carpeta “app/Util” cuya responsabilidad es hacer las
consultas en base de datos y realizar los cálculos.</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>El modelo es una sola
tabla representada con la clase Cube.php</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Se crearon las
migraciones para laravel con el objetivo de crear la única tabla que se utiliza
en la prueba.</span></span></p>

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

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal><span class=fontstyle01><b><span lang=ES>Ejemplo de
funcionamiento comparado con el test de la página hackerrank:</span></b></span></p>

<p class=MsoNormal><span class=fontstyle01><span lang=ES>Test de la página
hackerrank</span></span></p>

<p class=MsoNormal><span style='font-size:10.5pt;line-height:115%;background:
#FAFAFA'><img border=0 width=130 height=183 id="Imagen 3"
src="Prueba%20técnica%20Rappi_archivos/image001.png"><img border=0 width=148
height=164 id="Imagen 4" src="Prueba%20técnica%20Rappi_archivos/image002.png"></span></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=385 height=426 id="Imagen 1"
src="Prueba%20técnica%20Rappi_archivos/image003.png"></p>

<p class=MsoNormal align=center style='text-align:center'><u><img border=0
width=393 height=442 id="Imagen 5"
src="Prueba%20técnica%20Rappi_archivos/image004.png"></u></p>

<p class=MsoNormal><u><img border=0 width=567 height=768 id="Imagen 6"
src="Prueba%20técnica%20Rappi_archivos/image005.png"></u></p>

<p class=MsoNormal><u><img border=0 width=567 height=617 id="Imagen 7"
src="Prueba%20técnica%20Rappi_archivos/image006.png"></u></p>

<p class=MsoNormal><span lang=ES>Segunda prueba</span></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=391 height=542 id="Imagen 8"
src="Prueba%20técnica%20Rappi_archivos/image007.png"></p>

<p class=MsoNormal><span lang=ES>Esta última prueba quedo en base de datos como
sigue;  los valores de la matriz están desde cero es decir que las posiciones
x, y , z son almacenadas como x-1, y-1 y z-1:</span></p>

<p class=MsoNormal><span lang=ES>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><img border=0
width=384 height=265 id="Imagen 9"
src="Prueba%20técnica%20Rappi_archivos/image008.png"></p>

<p class=MsoNormal><span lang=ES>&nbsp;</span></p>

<p class=MsoNormal><span lang=ES>&nbsp;</span></p>

<p class=MsoNormal><span class=fontstyle01><b><span lang=ES>Respuesta a
preguntas</span></b></span></p>

<p class=MsoNormal><span lang=ES style='font-family:"Corbel","sans-serif";
color:black'><br>
<span class=fontstyle01>1. ¿En qué consiste el principio de responsabilidad
única? ¿Cuál es su propósito?</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>El principio de responsabilidad única consiste es que cada clase debe
tener solamente una única responsabilidad en una funcionalidad de tal manera
que si la funcionalidad falla sea solo esa clase la que se deba modificar.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Un ejemplo podría ser cuando tenemos una funcionalidad que coloca
mensajes automáticamente en twitter desde diferentes fuentes, el principio de
responsabilidad única indicaría que la lógica que twittea debe delegarse a una
sola clase en toda la aplicación y no repetir la misma funcionalidad en las
clases que generan los mensajes.</span></span></p>

<p class=MsoNormal><span lang=ES style='font-family:"Corbel","sans-serif";
color:black'><br>
<span class=fontstyle01>2. ¿Qué características tiene según tu opinión “buen”
código o código limpio?</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>A mi parecer las principales característica de un código limpio son la documentación,
el evitar la escritura de métodos extensos, evitar la escritura de métodos no
necesarios y tratar al máximo de reutilizar las funcionalidades para que los
fallos sean fácilmente localizables.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><b><span
lang=ES>Problemas con el código</span></b></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>En el código se encuentran los siguientes problemas.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La entidad $servicio es cargada múltiples veces desde base de datos solo
es necesario cargarla una vez.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Una situación similar a la anterior sucede con la variable “driver_id”
la cual se trae multiples veces de request solo es necesario traerla una vez y
luego utilizarla en donde se requiera.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La línea “return Response::json(array('error'=&gt;'0'));” esta repetida
lo que dificulta el seguimiento del error.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La entidad Service se actualiza múltiples veces esto se puede colocar
en una sola operación.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La variable servicio es sobrescrita por un update esto genera confusión
en el seguimiento del código.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>La variable “$return” nunca es utilizada</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><b><span
lang=ES>Para solucionar los problemas se implementaron las siguientes correcciones:</span></b></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se realizó la carga de la entidad Servicio en un solo lugar</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se eliminó la sobreescritura de la variable “$servicio” por el update.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se colocó la lectura de la variable “driver_id” en un solo lugar</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se refactorizo el condicional para que solo fuera necesario colocar la línea
“return Response::json(array('error'=&gt;'0'));” en un lugar.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se colocó la actualización de la entidad Service en un solo lugar.</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>Se eliminó la variable “$return”</span></span></p>

<p class=MsoNormal style='text-align:justify'><span class=fontstyle01><span
lang=ES>&nbsp;</span></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=ES style='font-family:
"Corbel","sans-serif";color:black'>&nbsp;</span></p>

</div>

</body>

</html>
