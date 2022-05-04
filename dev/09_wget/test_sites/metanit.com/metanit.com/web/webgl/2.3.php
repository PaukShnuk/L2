<!DOCTYPE html>
<html >
<head>
<title>WebGL | Настройка буфера вершин и буфер индексов</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и использование буферов вершин и индексов для отрисовки фигур, методы gl.drawElements и gl.bindBuffer">
<meta name="viewport" content="width=device-width">
<link href='//metanit.com/style35.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">

<div id="header">
<div id="logo">
<a class="logoTitle" href="/" title="На главную">METANIT.COM</a>
<div class="logoDefinition">Сайт о программировании</div> 
</div>

<div class="socbtns">
<ul>
<li><a title="Посмотреть меню" rel="nofollow" class="fa fa-lg fa-bars"></a></li>
<li><a href="//metanit.com/donations.php" title="Помощь сайту" rel="nofollow" class="fa fa-lg fa-usd"></a></li>
<li><a href="https://vk.com/metanit" title="Группа в ВКонтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a href="https://twitter.com/Eugene225" title="Твиттер" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a href="https://www.facebook.com/metanitcom"  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
<li><a href="https://www.youtube.com/user/Eugene22584/" title="Канал сайта на Youtube" rel="nofollow" class="fa fa-lg fa-youtube"></a></li>
<li><a href="https://t.me/metanit" title="Телеграмм" class="fa fa-lg fa-tel"></a></li>
<li><i id="toggle-theme" class="fa fa-lg fa-adjust"></i></li>
</ul>
</div>

<div id="search" class="transp">
<form action="https://www.google.ru" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3716042175333627:1096498938" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" />
    <input type="submit" name="sa" value="Найти" />
  </div>
</form>
</div>
<div class="icon-vk"></div>
<div id="magnifying-glass"></div>

<div class="menuButton" id="menuButton">
	<span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>

<div id="menu" class="menu">
<ul class="mainmenu">
   <li><a href="//metanit.com/news/">Новости</a></li>
   <li><a href="//metanit.com/sharp/">C#</a></li>
   <li><a href="//metanit.com/java/">Java</a></li>
   <li><a href="//metanit.com/web/">WEB</a></li>
   <li><a href="//metanit.com/python/">Python</a></li>
   <li><a href="//metanit.com/cpp/">C/C++</a></li>
   <li><a href="//metanit.com/sql/">SQL</a></li>
   <li><a href="//metanit.com/nosql/mongodb/">MongoDB</a></li>
   <li><a href="//metanit.com/go/">Go</a></li>
   <li><a href="//metanit.com/visualbasic/tutorial/">VB.NET</a></li>
   <li><a href="//metanit.com/swift/tutorial/">Swift</a></li>
   <li><a href="//metanit.com/kotlin/">Kotlin</a></li>
   <li><a href="//metanit.com/dart/">Dart</a></li>
   <li><a href="//metanit.com/php/">PHP</a></li>
   <li><a href="//metanit.com/rust/">Rust</a></li>
   <li><a href="//metanit.com/f/">F#</a></li>
</ul>
</div>
</div>
<div id="content_right"> 
<div id="content_right_inner"> 
<div id="content_center"> 
<div id="menC" class="menC">
<div class="articleText" id="articleText">
<h2>Настройка буфера вершин и буфер индексов</h2><div class="date">Последнее обновление: 1.11.2015</div>

<div class="socBlock">
<div class="share soctop">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>

</div>

<div style="margin-top:23px;margin-left:5px;">
<style>
.footer-adaptive { width: 300px; height: 250px; }
@media(min-width: 480px) { .footer-adaptive { width: 468px; height: 60px; } }
@media(min-width: 760px) { .footer-adaptive { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .footer-adaptive { width: 468px; height: 60px;  } }
@media(min-width: 1122px) { .footer-adaptive{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .footer-adaptive { width: 970px; height: 90px;} }
</style>
<!-- footer_adaptive -->
<ins class="adsbygoogle footer-adaptive"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="9659512088"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>Чтобы что-то нарисовать, во-первых, нам надо определить точки или вершины, по которым уже будет рисоваться конкретный примитив, а из примитивов уже 
будет складываться геометрическая фигура. Поэтому первым делом нам надо настроить буфер вершин.</p>
<p>Так, в программе из прошлого параграфа создание буфера вершин происходило в следующем участке кода:</p>
<pre class="brush:js;">
function initBuffers() {

  vertexBuffer = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, vertexBuffer);
  
  var triangleVertices = [
         0.0,  0.5,  0.0,
        -0.5, -0.5,  0.0,
         0.5, -0.5,  0.0
  ];
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(triangleVertices), gl.STATIC_DRAW);
  
  vertexBuffer.itemSize = 3;
  vertexBuffer.numberOfItems = 3;
}
</pre>
<p>Итак, у нас есть глобальная переменная <code>vertexBuffer</code>, которая будет хранить <b>буффер вершин</b>. И для начала нам надо его создать: 
<code>vertexBuffer = gl.createBuffer()</code>.</p>
<p>Затем выполняем привязку буфера к контексту WebGL: <code>gl.bindBuffer(gl.ARRAY_BUFFER, vertexBuffer);</code>. Привязка означает, что 
все операции с буфером будут происходить именно над буфером vertexBuffer.</p>
<p>В качестве первого параметра метод <code>gl.bindBuffer</code> принимает тип создаваемого буфера и может принимать следующие значения:</p>
<ul>
<li><p><b>gl.ARRAY_BUFFER</b>: данные вершин</p></li>
<li><p><b>gl.ELEMENT_ARRAY_BUFFER</b>: данные индексов</p></li>
</ul>
<p>Поскольку в нашем случае мы создаем буфер вершин, поэтому используется значение <code>gl.ARRAY_BUFFER</code>.</p>
<p>Впоследствии мы можем отвязать буфер, например, с помощью следующего выражения: <code>gl.bindBuffer(gl.ARRAY_BUFFER, null);</code></p>
<p>Последним шагом является загрузка определенных разработчиком координат в буфер вершин и его типизациия: 
<code>gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(triangleVertices), gl.STATIC_DRAW);</code>. В данном случае массив координат 
типизируется конструктором <span class="b">Float32Array</span>, который создает представление массива в виде набора чисел с плавающей точкой.</p>
<p>При этом мы не можем передать просто переменную triangleVertices, представляющую массив координат. Нам обязательно надо ее типизировать. 
Но объект <code>Float32Array</code> не единственный, который мы можем использовать для типизации. Также мы можем использовать следующие 
объекты: <code>Int8Array</code>, <code>Uint8Array</code>, <code>Int16Array</code>, <code>Uint16Array</code>, <code>Int32Array</code>, 
<code>Uint32Array</code>, <code>Float64Array</code>. Только в отличие от Float32Array перечисленные типы будут создавать набор целых чисел 
соответственно занимающих 8, 16, 32 и 64 бита, как указано в их названии.</p>
<p>Переменная <code>triangleVertices</code> определяет набор координат, по которым будут создаваться вершины в буфере вершин, а затем по ним будут 
строиться геометрические примитивы.</p> 
<p>Последние сроки <code>vertexBuffer.itemSize = 3; vertexBuffer.numberOfItems = 3;</code> не столь важны, так как используются лишь 
для последующего применения при отрисовке.</p>
<h3>Использование буфера индексов</h3>
<p>Теперь попробуем применить полученные знания и изменим программу из предыдущего параграфа таким образом, чтобы использовать в ней сразу два буфера.</p>
<pre class="brush:js;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Привет WebGL!&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;canvas id="canvas3D" width="400" height="300"&gt;Ваш браузер не поддерживает элемент canvas&lt;/canvas&gt;
&lt;!-- фрагментный шейдер --&gt;
&lt;script id="shader-fs" type="x-shader/x-fragment"&gt;
  void main(void) {
    gl_FragColor = vec4(1.0, 1.0, 1.0, 1.0);
  }
&lt;/script&gt;
&lt;!-- вершинный шейдер --&gt;
&lt;script id="shader-vs" type="x-shader/x-vertex"&gt;
  attribute vec3 aVertexPosition;
  void main(void) {
    gl_Position = vec4(aVertexPosition, 1.0);
  }
&lt;/script&gt;
&lt;script type="text/javascript"&gt;
var gl;
var shaderProgram;
var vertexBuffer; // буфер вершин
var indexBuffer; //буфер индексов
// установка шейдеров
function initShaders() {
    // получаем шейдеры
	var fragmentShader = getShader(gl.FRAGMENT_SHADER, 'shader-fs');
	var vertexShader = getShader(gl.VERTEX_SHADER, 'shader-vs');
	//создаем объект программы шейдеров
	shaderProgram = gl.createProgram();
	// прикрепляем к ней шейдеры
	gl.attachShader(shaderProgram, vertexShader);
	gl.attachShader(shaderProgram, fragmentShader);
	// связываем программу с контекстом webgl
	gl.linkProgram(shaderProgram);
	 
	if (!gl.getProgramParameter(shaderProgram, gl.LINK_STATUS)) {
	     alert("Не удалось установить шейдеры");
	}
	 
	gl.useProgram(shaderProgram);
	// установка атрибута программы
	shaderProgram.vertexPositionAttribute = gl.getAttribLocation(shaderProgram, "aVertexPosition");
	gl.enableVertexAttribArray(shaderProgram.vertexPositionAttribute);
}
// Функция создания шейдера по типу и id источника в структуре DOM
function getShader(type,id) {
	var source = document.getElementById(id).innerHTML;
	// создаем шейдер по типу
	var shader = gl.createShader(type);
	// установка источника шейдера
	gl.shaderSource(shader, source);
	// компилируем шейдер
	gl.compileShader(shader);
  
	if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
		alert("Ошибка компиляции шейдера: " + gl.getShaderInfoLog(shader));
        gl.deleteShader(shader);   
        return null;
    }
    return shader;  
}
 
function initBuffers() {

    vertices =[ -0.5, -0.5, 0.0, 
                -0.5, 0.5, 0.0,
                 0.5, 0.5, 0.0,
                0.5, -0.5, 0.0];

    indices = [0, 1, 2, 0, 3, 2];
 // установка буфера вершин
  vertexBuffer = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, vertexBuffer);
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
  // указываем размерность
  vertexBuffer.itemSize = 3;
  
  // создание буфера индексов
  indexBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, indexBuffer);
	gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array(indices), gl.STATIC_DRAW);
	// указываем число линий. это число равно числу индексов
	indexBuffer.numberOfItems = indices.length;
}
 
function draw() {    
	
	// установка фона
	gl.clearColor(0.0, 0.0, 0.0, 1.0);
	// установка области отрисовки
	gl.viewport(0, 0, gl.viewportWidth, gl.viewportHeight);

	gl.clear(gl.COLOR_BUFFER_BIT);
  
	gl.vertexAttribPointer(shaderProgram.vertexPositionAttribute, 
	            vertexBuffer.itemSize, gl.FLOAT, false, 0, 0);
    // отрисовка примитивов - линий
	gl.drawElements(gl.LINE_LOOP, indexBuffer.numberOfItems, gl.UNSIGNED_SHORT,0);
}
 
window.onload=function(){

    var canvas = document.getElementById("canvas3D");
    try {
	     gl = canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
    }
    catch(e) {}
  
    if (!gl) {
	    alert("Ваш браузер не поддерживает WebGL");
    }
    if(gl){
	    // установка размеров области рисования
	    gl.viewportWidth = canvas.width;
	    gl.viewportHeight = canvas.height;
		
	    initShaders();
		
	    initBuffers();
		
	    draw();  
	}
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Результатом будет квадрат из двух треугольников, а точнее из 5 линий. В данном случае нас интересует метод настройки буферов вершин и индексов - 
<code>initBuffers()</code>.</p>
<p>Первым делом мы определяем массивы вершин и индексов. Если в массиве вершин, как и ранее, определяется по три координаты для каждой 
вершины, то в массиве индексов мы указываем индексы, по которым будут строиться линии. Первым идет индекс 0 - то есть с первой точки в массиве вершин 
будет начинаться построение фигуры, и от этой вершины мы начинаем линию.</p>
<p>Далее идет индекс 1, который указывает индекс новой точки, до которой будет построена линия:</p>
<img src="pics/2.2.png" alt="Буфер вершин и индексов в WebGL" />
<p>Далее идет создание буферов вершин и индексов. И если буфер вершин создается знакомым уже способом, то при создании буфера индексов указывается 
другой тип массива: <code>gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array(indices), gl.STATIC_DRAW);</code></p>
<p>В дальнейшем в методе отрисовки <code>draw</code> непосредственно отрисовка производится с помощью метода 
<code>gl.drawElements(gl.LINE_LOOP, indexBuffer.numberOfItems, gl.UNSIGNED_SHORT,0);</code>. Позже мы подробнее расcмотрим метод 
<code>gl.drawElements</code>, но в данном случае достаточно знать, что он рисует примитивы (в данном случае линии) по индексам, а не по вершинам.</p>
<div style="margin-top:25px;clear:both;">
<style>
.metanit-rect { width: 300px; height: 250px; }
@media(min-width: 500px) { .metanit-rect { width: 336px; height: 280px; } }
@media(min-width: 760px) { .metanit-rect { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .metanit-rect { width: 336px; height: 280px;  } }
@media(min-width: 1122px) { .metanit-rect{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .metanit-rect{ width: 970px; height: 90px;} }
</style>
<!-- metanit_rect -->
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
<div class="socBlock">
<div class="share socbottom">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>
</div>

<style>
.commentABl { margin: 25px 0px 15px 0px;}
@media(min-width: 860px) { .commentABl { margin: 35px 10px 15px 15px;  } }
</style>
<div class="commentABl" style="clear:both;">
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<script>const ap = 1845270558;</script>
<script async type='text/javascript' src='//metanit.com/js/lisrc4.js'></script>

<div id="disqus_thread" style="margin-left:8px;margin-right:8px;clear:both;"></div>
<script type="text/javascript">
var disqus_shortname = 'metanitcom';
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>

</div>
</div> 
<div id="menR" class="menR">
<style>
.meta-vert { width: 300px; height: 250px; }
@media(min-width: 500px) { .meta-vert { width: 336px; height: 280px; } }
@media(min-width: 1000px) { .meta-vert { width: 160px; height: 600px; } }
</style>
<!-- meta_vert -->
<ins class="adsbygoogle meta-vert"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="4596210485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.dn {font-size:12.5px;margin:3px;}
.dh{font-weight:bold;margin-left:2px;}
</style>
<div class="dn">
<div class="dh">Помощь сайту</div>
<div class="dh">YooMoney</div>
<ul>
<li>410011174743222</li>
</ul>
<div class="dh">Перевод на карту</div>
<ul>
<li>Номер карты: 4048415020898850</li>
<li>Номер карты: 4890494751804113</li>
</ul>
</div>

</div>
</div>
</div> 
<div class="menT" id="menT"><ul id="browser" class="filetree"> 
				<li class="closed"><span class="folder">Глава 1. Введение в WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/1.1.php">Что такое WebGL?</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/1.2.php">Первая программа на WebGL</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы работы с WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.1.php">Создание контекста</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.2.php">Конвейер WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.3.php">Настройка буфера вершин и буфер индексов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.4.php">Установка атрибута для буфера вершин</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.5.php">Отрисовка в WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.6.php">gl.TRIANGLES</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.7.php">gl.TRIANGLE_STRIP</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.8.php">gl.TRIANGLE_FAN</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.9.php">Рисование линий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/2.10.php">Установка Viewport</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Шейдеры</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.1.php">Введение в шейдеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.2.php">Использование шейдеров в программе</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/3.3.php">Основы GLSL</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Цвета в WebGL</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/4.1.php">Установка цвета вершины</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Матрицы и создание 3D</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.1.php">Первый 3D-объект</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.2.php">Использование матриц glMatrix для создания 3D</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.3.php">Дополнительно о матрицах в WebGL</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/5.4.php">Окрашиваем куб</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Анимация и пользовательский ввод</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/6.1.php">Анимация объектов. Вращающийся куб</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/6.2.php">Обработка пользовательского ввода</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Текстурирование</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.1.php">Введение в текстурирование</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.2.php">Работа с координатами текстуры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.3.php">Настройка текстурирования</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.4.php">Текстурирование 3D-объектов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/7.5.php">Множественное текстурирование</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 8. Освещение</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.1.php">Введение в освещение</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.2.php">Создание освещенного объекта по модели Фонга. Шейдеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.3.php">Модель отражения Фонга. Код JavaScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.4.php">Использование материалов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/webgl/8.5.php">Освещение Ламберта</a></span></li>
					</ul>
				</li>
	</ul></div>
<div id="footer">

<div class="bootomLinks">
<a href="https://vk.com/metanit" title="Присоединиться к группе вконтакте" rel="nofollow">
Вконтакте</a>|
<a href="https://twitter.com/Eugene225" title="Подписаться на твит-ленту" rel="nofollow">
Twitter</a>|
<a href="https://www.youtube.com/user/Eugene22584/" title="Подписаться на канал на youtube" rel="nofollow">
Канал сайта на youtube</a>|
<a href="//metanit.com/donations.php" rel="nofollow">Помощь сайту</a>
</div>
<p>Контакты для связи: metanit22@mail.ru</p>
<p>Copyright &copy; metanit.com, 2012-2022. Все права защищены.</p>
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
const original = { open: XMLHttpRequest.prototype.open};
XMLHttpRequest.prototype.open = function (method, url) {
 
  if(url.includes("tempest.services.disqus.com")) return false;
  return original.open.apply(this, arguments);
};
</script>
<script type='text/javascript' src='//metanit.com/js/jquery.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/jquery.treeview.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/syntax12.js'></script>
<script type='text/javascript'>SyntaxHighlighter.all();</script>
<script>
$(function() { 
	$("#menuButton").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $('.mainmenu');
          if (mainmenu.hasClass('open')) { 
            mainmenu.removeClass('open');
          }
          else {
            mainmenu.addClass('open');
          }
        });
	$('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open');
			  $(this).children('span').removeClass('open');
			  $(this).children('span').addClass('close');
            }
            else {
              $(this).siblings('ul').addClass('open');
			  $(this).children('span').removeClass('close');
			  $(this).children('span').addClass('open');
            }
          });
  $("#toggle-theme").on("click", function() {
		if(document.documentElement.hasAttribute("theme")){
			document.documentElement.removeAttribute("theme");
			document.cookie="theme=1;expires=Mon, 19 Feb 2001 12:00:00 UTC;path=/;";
		}
		else{
			document.documentElement.setAttribute("theme", "dark");
			var expire = new Date();
			expire.setHours(expire.getHours() + 7);
			document.cookie="theme=1;expires=" + expire.toUTCString() + ";path=/;";
		}
	});
	$('#magnifying-glass').on('click', function() {
            if ($('#search').hasClass('transp')) {
              $('#search').removeClass('transp').show();
            }
            else {
              $('#search').addClass('transp').hide();
            }
          });
		  
	$('#browser').treeview();$('#navigation').treeview({persist: 'location',collapsed: true, unique: true});
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава .')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
	var url = "//metanit.com" + location.pathname;
	
	$('.file a[href="' + url + '"]').addClass('aMItem').parent().addClass('aMItem').closest('li.collapsable').find('span.folder').addClass('aMItem');
	
	$(".fa-bars").on('click', function() {
		$(".menT").toggleClass("menTOpened");
		$("#content_right_inner").toggleClass("contentRightInnerOpened");
	});

    $('#jma').on('click', function() {
            window.open("https://c"+"lck.r" +"u/en89y").focus();
          });
    $('#jmw').on('click', function() {
            window.open("https://c"+"lck.r"+"u/en89V").focus();
          });
	$(".share .fa-vk").attr('onclick','window.open("http://vk.com/share.php?url=' + window.location.href+'","Поделиться в ВКОНТАКТЕ","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-odnoklassniki").attr('onclick','window.open("https://connect.ok.ru/offer?url=' + window.location.href+'","Поделиться в Одноклассниках","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-twitter").attr('onclick','window.open("http://twitter.com/share?url=' + window.location.href+'","Поделиться в Твиттере","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-facebook").attr('onclick','window.open("http://www.facebook.com/sharer.php?u=' + window.location.href +'","Поделиться","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
});
</script>
<script>
window.onload= function(){
	setMenC();
};
window.onresize= function(){
	setMenC();
};

function setMenC(){
	if(window.innerWidth >859){
			
		var h = document.getElementById("articleText").clientHeight;
		document.getElementById("menT").style.maxHeight=h + "px";
	}
}
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35780297-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35780297-1');
</script>

<script async defer type="text/javascript" src="https://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>
</body>
</html>