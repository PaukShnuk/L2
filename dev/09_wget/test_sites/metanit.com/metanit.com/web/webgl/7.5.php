<!DOCTYPE html>
<html >
<head>
<title>Множественное текстурирование</title>
<meta charset="utf-8" />
<meta name="description" content="Использования нескольких текстур в WebGL для текстурирования сразу нескольких трехмерных объектов">
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
<h2>Множественное текстурирование</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>При построении трехмерных сцен мы вряд ли будем ограничиваться одним объектом и одной текстурой. Возникает вопрос, как совместить в проекте 
использование сразу нескольких текстур для разных объектов? Один из способов состоит в последовательной отрисовке объектов и использовании текстур.</p>
<p>Расширим пример из предыдущих параграфов так, чтобы он использовал несколько объектов и текстур: два объекта, точнее визуально три - 
две кирпичных колонны и каменная стена над ними. Веб-страничка полностью будет выглядеть так:</p>
<pre class="brush:xml;">
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;3D in WebGL!&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;canvas id="canvas3D" width="400" height="300"&gt;Ваш браузер не поддерживает элемент canvas&lt;/canvas&gt;
&lt;script  type="text/javascript" src="gl-matrix-min.js"&gt;&lt;/script&gt;

&lt;script id="shader-fs" type="x-shader/x-fragment"&gt;
precision highp float;
uniform sampler2D uSampler;
varying vec2 vTextureCoords;

  void main(void) {
    gl_FragColor = texture2D(uSampler, vTextureCoords);
  }
&lt;/script&gt;

&lt;script id="shader-vs" type="x-shader/x-vertex"&gt;
attribute vec3 aVertexPosition;
attribute vec2 aVertexTextureCoords;
varying vec2 vTextureCoords;
uniform mat4 uMVMatrix;
  uniform mat4 uPMatrix;
  void main(void) {
    gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);
	vTextureCoords = aVertexTextureCoords;
	
  }
&lt;/script&gt;

&lt;script type="text/javascript"&gt;
var gl;
var shaderProgram;
var wallVertexBuffer;
var wallIndexBuffer;
var roofVertexBuffer;
var roofIndexBuffer;
var wallTextureCoordsBuffer;
var roofTextureCoordsBuffer;

var wallTexture; // переменная для хранения текстуры кирпичной стены
var roofTexture; // переменная для хранения текстуры каменной крыши
var angle = 2.0; //угол вращения в радианах
var zTranslation = -2.0; // смещение по оси Z

var mvMatrix = mat4.create(); 
var pMatrix = mat4.create();

// установка шейдеров
function initShaders() {
	var fragmentShader = getShader(gl.FRAGMENT_SHADER, 'shader-fs');
	var vertexShader = getShader(gl.VERTEX_SHADER, 'shader-vs');

	shaderProgram = gl.createProgram();

	gl.attachShader(shaderProgram, vertexShader);
	gl.attachShader(shaderProgram, fragmentShader);

	gl.linkProgram(shaderProgram);
	 
	if (!gl.getProgramParameter(shaderProgram, gl.LINK_STATUS)) {
		alert("Не удалось установить шейдеры");
	}
	 
	gl.useProgram(shaderProgram);

	shaderProgram.vertexPositionAttribute = gl.getAttribLocation(shaderProgram, "aVertexPosition"); 
	gl.enableVertexAttribArray(shaderProgram.vertexPositionAttribute);
	
	shaderProgram.vertexTextureAttribute = gl.getAttribLocation(shaderProgram, "aVertexTextureCoords");
	gl.enableVertexAttribArray(shaderProgram.vertexTextureAttribute);
	
	shaderProgram.MVMatrix = gl.getUniformLocation(shaderProgram, "uMVMatrix");
    shaderProgram.ProjMatrix = gl.getUniformLocation(shaderProgram, "uPMatrix");
}
function setMatrixUniforms(){
	gl.uniformMatrix4fv(shaderProgram.ProjMatrix,false, pMatrix);
	gl.uniformMatrix4fv(shaderProgram.MVMatrix, false, mvMatrix);  
} 
// Функция создания шейдера
function getShader(type,id) {
	var source = document.getElementById(id).innerHTML;

	var shader = gl.createShader(type);
	
	gl.shaderSource(shader, source);

	gl.compileShader(shader);
  
	if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
		alert("Ошибка компиляции шейдера: " + gl.getShaderInfoLog(shader));
		gl.deleteShader(shader);   
		return null;
	}
	return shader;  
}

function initWallBuffers() {

	var	vertices =[
				// первая колонна
				// лицевая часть
				-0.8, -0.5, 0.5,
				-0.8, 0.5, 0.5,
				 -0.4, 0.5, 0.5,
				 -0.4, -0.5, 0.5,
				// задняя часть	
				-0.8, -0.5, 0.0,
				-0.8, 0.5, 0.0,
				 -0.4, 0.5, 0.0,
				 -0.4, -0.5, 0.0,
				 
				 // левая боковая часть
				 -0.8, -0.5, 0.5,
				-0.8, 0.5, 0.5,
				-0.8, 0.5, 0.0,
				-0.8, -0.5, 0.0,
				
				// правая боковая часть
				-0.4, -0.5, 0.5,
				-0.4, 0.5, 0.5,
				-0.4, 0.5, 0.0,
				-0.4, -0.5, 0.0,
				
				// вторая колонна
				// лицевая часть
				0.8, -0.5, 0.5,
				0.8, 0.5, 0.5,
				 0.4, 0.5, 0.5,
				 0.4, -0.5, 0.5,
				// задняя часть	
				0.8, -0.5, 0.0,
				0.8, 0.5, 0.0,
				0.4, 0.5, 0.0,
				0.4, -0.5, 0.0,
				 
				 // левая боковая часть
				0.8, -0.5, 0.5,
				0.8, 0.5, 0.5,
				0.8, 0.5, 0.0,
				0.8, -0.5, 0.0,
				
				// правая боковая часть
				0.4, -0.5, 0.5,
				0.4, 0.5, 0.5,
				0.4, 0.5, 0.0,
				0.4, -0.5, 0.0
				 ];
				 
    var indices = [ // лицевая часть
				0, 1, 2, 
				2, 3, 0,
				// задняя часть
				4, 5, 6,
				6, 7, 4,
				//левая боковая часть
				8, 9, 10, 
				10, 11, 8,
				// правая боковая часть
				12, 13, 14, 
				14, 15, 12,
				// вторая колонна
				// лицевая часть
				16, 17, 18, 
				18, 19, 16,
				// задняя часть
				20, 21, 22,
				22, 23, 20,
				//левая боковая часть
				24, 25, 26, 
				26, 27, 24,
				// правая боковая часть
				28, 29, 30, 
				30, 31, 28
			];

	wallVertexBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ARRAY_BUFFER, wallVertexBuffer);
	gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
	wallVertexBuffer.itemSize = 3;

	wallIndexBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, wallIndexBuffer);
	gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array(indices), gl.STATIC_DRAW);
	wallIndexBuffer.numberOfItems = indices.length;	
  
  // Координаты текстуры
  var textureCoords = [];
	for (var i=0; i&lt;8; i++) {
		textureCoords.push(0.0, 0.0, 0.0, 1.0, 1.0, 1.0, 1.0, 0.0);
	}
	// Создание буфера координат текстуры
	wallTextureCoordsBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ARRAY_BUFFER, wallTextureCoordsBuffer);
	gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(textureCoords), gl.STATIC_DRAW);
	wallTextureCoordsBuffer.itemSize=2;
}

function initRoofBuffers() {

	var	vertices =[
				// лицевая часть
				-1.0, 0.5, 0.5,
				-1.0, 0.8, 0.5,
				 1.0, 0.8, 0.5,
				 1.0, 0.5, 0.5,
				// задняя часть
				-1.0, 0.5, 0.0,
				-1.0, 0.8, 0.0,
				 1.0, 0.8, 0.0,
				 1.0, 0.5, 0.0,
				 // левая боковая часть
				-1.0, 0.5, 0.5,
				-1.0, 0.8, 0.5,
				-1.0, 0.8, 0.0,
				-1.0, 0.5, 0.0,
				// правая боковая часть
				1.0, 0.5, 0.5,
				1.0, 0.8, 0.5,
				1.0, 0.8, 0.0,
				1.0, 0.5, 0.0,
				// низ
				-1.0, 0.5, 0.5,
				-1.0, 0.5, 0.0,
				1.0, 0.5, 0.0,
				1.0, 0.5, 0.5,
				// верх
				-1.0, 0.8, 0.5,
				-1.0, 0.8, 0.0,
				1.0, 0.8, 0.0,
				1.0, 0.8, 0.5,
		];
				 
    var indices = [
				0, 1, 2, 
				2, 3, 0,
				// задняя часть
				4, 5, 6,
				6, 7, 4,
				//левая боковая часть
				8, 9, 10, 
				10, 11, 8,
				// правая боковая часть
				12, 13, 14, 
				14, 15, 12,
				// низ
				16, 17, 18, 
				18, 19, 16,
				// верх
				20, 21, 22, 
				22, 23, 20
			];

  roofVertexBuffer = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, roofVertexBuffer);
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
  roofVertexBuffer.itemSize = 3;

	roofIndexBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, roofIndexBuffer);
	gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array(indices), gl.STATIC_DRAW);
	roofIndexBuffer.numberOfItems = indices.length;	
  
  // Координаты текстуры
  var textureCoords = [];
	for (var i=0; i&lt;6; i++) {
		textureCoords.push(0.0, 0.0, 0.0, 1.0, 1.0, 1.0, 1.0, 0.0);
	}
	// Создание буфера координат текстуры
	roofTextureCoordsBuffer = gl.createBuffer();
	gl.bindBuffer(gl.ARRAY_BUFFER, roofTextureCoordsBuffer);
	gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(textureCoords), gl.STATIC_DRAW);
	roofTextureCoordsBuffer.itemSize=2;
}
 
function wallDraw() {    

	gl.bindBuffer(gl.ARRAY_BUFFER, wallVertexBuffer);
	gl.vertexAttribPointer(shaderProgram.vertexPositionAttribute, 
                         wallVertexBuffer.itemSize, gl.FLOAT, false, 0, 0);
	

	gl.bindBuffer(gl.ARRAY_BUFFER, wallTextureCoordsBuffer);
	gl.vertexAttribPointer(shaderProgram.vertexTextureAttribute,
                         wallTextureCoordsBuffer.itemSize, gl.FLOAT, false, 0, 0);
	gl.activeTexture(gl.TEXTURE0);
	gl.bindTexture(gl.TEXTURE_2D, wallTexture);
	gl.enable(gl.DEPTH_TEST);
	gl.drawElements(gl.TRIANGLES, wallIndexBuffer.numberOfItems, gl.UNSIGNED_SHORT,0);
}
function roofDraw() {    

	gl.bindBuffer(gl.ARRAY_BUFFER, roofVertexBuffer);
	gl.vertexAttribPointer(shaderProgram.vertexPositionAttribute, 
                         roofVertexBuffer.itemSize, gl.FLOAT, false, 0, 0);

	gl.bindBuffer(gl.ARRAY_BUFFER, roofTextureCoordsBuffer);
	gl.vertexAttribPointer(shaderProgram.vertexTextureAttribute,
                         roofTextureCoordsBuffer.itemSize, gl.FLOAT, false, 0, 0);
	
	gl.activeTexture(gl.TEXTURE0);
	
	gl.bindTexture(gl.TEXTURE_2D, roofTexture);
	gl.enable(gl.DEPTH_TEST);
	gl.drawElements(gl.TRIANGLES, roofIndexBuffer.numberOfItems, gl.UNSIGNED_SHORT,0);
}
function setupWebGL()
{
	gl.clearColor(0.0, 0.0, 0.0, 1.0); 	
	gl.clear(gl.COLOR_BUFFER_BIT || gl.DEPTH_BUFFER_BIT); 
	
	gl.viewport(0, 0, gl.viewportWidth, gl.viewportHeight);
	mat4.perspective(pMatrix, 1.04, gl.viewportWidth / gl.viewportHeight, 0.1, 100.0);
	mat4.identity(mvMatrix);
	mat4.translate(mvMatrix,mvMatrix,[0, 0, zTranslation]);
	mat4.rotate(mvMatrix,mvMatrix, angle, [0, 1, 0]);	
}
 function setupTextures() {
	wallTexture = gl.createTexture();
	setTexture("brickwall.png", wallTexture);
	
	roofTexture = gl.createTexture();
	setTexture("stone.jpg", roofTexture);
	
 }
function setTexture(url, texture){

	gl.bindTexture(gl.TEXTURE_2D, texture);
	var image = new Image();
	image.onload = function() {
	
		handleTextureLoaded(image, texture);	
  }
  
   image.src = url;

	shaderProgram.samplerUniform = gl.getUniformLocation(shaderProgram, "uSampler");
	gl.uniform1i(shaderProgram.samplerUniform, 0);
}
 function handleTextureLoaded(image, texture) {

	gl.bindTexture(gl.TEXTURE_2D, texture);
    gl.pixelStorei(gl.UNPACK_FLIP_Y_WEBGL, true);
    gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGBA, gl.RGBA, gl.UNSIGNED_BYTE, image);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.LINEAR);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.LINEAR);
	gl.bindTexture(gl.TEXTURE_2D, null);
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
		document.addEventListener('keydown', handleKeyDown, false);
		gl.viewportWidth = canvas.width;
		gl.viewportHeight = canvas.height;

		initShaders();	
		initRoofBuffers();
		initWallBuffers();
		setupTextures();
		(function animloop(){
			
			setupWebGL();
			setMatrixUniforms();
			wallDraw();
			roofDraw();
			requestAnimFrame(animloop, canvas);
		})();
	}
}
function handleKeyDown(e){
	switch(e.keyCode)
	{
		case 39:  
			angle+=0.1;
			break;
		case 37: 
			angle-=0.1;
			break;
		case 40: 
			zTranslation+=0.1;
			break;
		case 38: 
			zTranslation-=0.1;
			break;
	}
}
window.requestAnimFrame = (function(){
      return  window.requestAnimationFrame       || 
              window.webkitRequestAnimationFrame || 
              window.mozRequestAnimationFrame    || 
              window.oRequestAnimationFrame      || 
              window.msRequestAnimationFrame     ||
         function(callback, element) {
           return window.setTimeout(callback, 1000/60);
         };

})();
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Визуально это будет выглядеть так:</p>
<img src="pics/7.10.png" />
<p>Здесь я не использовал ничего нового, просто определил для двух объектов свой набор буферов вершин, индексов и координат текстуры. Переменная 
<code>wallTexture</code> будет хранить в себе текстуру кирпичной стены, а переменная <code>roofTexture</code> - текстуру каменной стены.</p>
<p>Для инициализации буферов двух кирпичных колонн, которые у нас по сути будут составлять один объект, используется функция 
<code>initWallBuffers</code>, а для инициализации буферов каменной стены - функция <code>initRoofBuffers</code>.</p>
<p>Также нам надо два раза инициализировать текстуры и загрузить в них изображения. Это делается в функции <code>setupTextures()</code>:</p>
<pre class="brush:js;">
function setupTextures() {
	wallTexture = gl.createTexture();
	setTexture("brickwall.png", wallTexture);
	
	roofTexture = gl.createTexture();
	setTexture("stone.jpg", roofTexture);	
 }
</pre>
<p>После срабатывания этой функции мы сможем использовать текстуры. Также для самой отрисовки каждого объекта создаем две функции: 
<code>wallDraw()</code> (отрисовка кирпичной стены) и <code>roofDraw()</code> (отрисовка каменной крыши).</p>
<p>А в главной функции последовательно вызываем настройку буферов объектов и их отрисовку:</p>
<pre class="brush:js;">
//..........................
		initShaders();	
		initRoofBuffers();
		initWallBuffers();
		setupTextures();
		(function animloop(){
			
			setupWebGL();
			setMatrixUniforms();
			wallDraw();
			roofDraw();
			requestAnimFrame(animloop, canvas);
		})();
//......................................
</pre>
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


<div class="nav"><p><a href="7.4.php">Назад</a><a href="./">Содержание</a><a href="8.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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