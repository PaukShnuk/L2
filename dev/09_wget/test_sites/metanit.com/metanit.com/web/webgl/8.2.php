<!DOCTYPE html>
<html >
<head>
<title>Создание освещенного объекта по модели Фонга. Шейдеры</title>
<meta charset="utf-8" />
<meta name="description" content="Создание освещенного объекта по модели Фонга в WebGL, настройка шейдеров, физический смысл модели, фоновое, зеркальное и диффузное отражения">
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
<h2>Создание освещенного объекта по модели Фонга. Шейдеры</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Основная работа по созданию освещения объекта выполняется в шейдерах в GPU, в стандартном коде javascript от нас требуется только установить ряд 
объектов и передать их в шейдеры. Это следующие объекты:</p>
<ul>
<li><p>Матрицу нормалей</p></li>
<li><p>Нормали вершины</p></li>
<li><p>Направления света и световые точки</p></li>
<li><p>Цвета освещения</p></li>
</ul>
<p>Сразу перейдем к шейдерам, чтобы рассмотреть принцип создания освещенной трехмерной сцены. А затем отдельно рассмотрим код javascript.</p>
<p>Итак, оба шейдера буду выглядеть так:</p>
<pre class="brush:js;">
&lt;script id="shader-vs" type="x-shader/x-vertex"&gt;
  attribute vec3 aVertexPosition;
  attribute vec3 aVertexNormal;
  attribute vec2 aVertexTextureCoords;

  uniform mat4 uMVMatrix;
  uniform mat4 uPMatrix;
  uniform mat3 uNMatrix;
  
  uniform vec3 uLightPosition;
  uniform vec3 uAmbientLightColor;
  uniform vec3 uDiffuseLightColor;
  uniform vec3 uSpecularLightColor;
  
  varying vec2 vTextureCoords;
  varying vec3 vLightWeighting;
  
  const float shininess = 16.0;
    
  void main() {
    // установка позиции наблюдателя сцены
    vec4 vertexPositionEye4 = uMVMatrix * vec4(aVertexPosition, 1.0);
    vec3 vertexPositionEye3 = vertexPositionEye4.xyz / vertexPositionEye4.w;
  
    // получаем вектор направления света
    vec3 lightDirection = normalize(uLightPosition - vertexPositionEye3);
    
    // получаем нормаль
    vec3 normal = normalize(uNMatrix * aVertexNormal);
    
    // получаем скалярное произведение векторов нормали и направления света
    float diffuseLightDot = max(dot(normal, lightDirection), 0.0);
                                       
    // получаем вектор отраженного луча и нормализуем его
    vec3 reflectionVector = normalize(reflect(-lightDirection, normal));
    
    // установка вектора камеры
    vec3 viewVectorEye = -normalize(vertexPositionEye3);
    
    float specularLightDot = max(dot(reflectionVector, viewVectorEye), 0.0);
    
    float specularLightParam = pow(specularLightDot, shininess);

    // отраженный свет равен сумме фонового, диффузного и зеркального отражений света
    vLightWeighting = uAmbientLightColor + uDiffuseLightColor * diffuseLightDot +
                      uSpecularLightColor * specularLightParam;
    
     // Finally transform the geometry
     gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);
     vTextureCoords = aVertexTextureCoords;  
  }                
&lt;/script&gt;

&lt;script id="shader-fs" type="x-shader/x-fragment"&gt;
  precision mediump float;
  
  varying vec2 vTextureCoords;
  varying vec3 vLightWeighting;
  uniform sampler2D uSampler;
  
  void main() {   
    vec4 texelColor = texture2D(uSampler, vTextureCoords);
    gl_FragColor = vec4(vLightWeighting.rgb * texelColor.rgb, texelColor.a);
  } 
&lt;/script&gt;
</pre>
<p>Все переменные типа <code>attribute</code> и <code>uniform</code> мы затем передадим из основной программы в шейдер. Эти переменные и задают параметры 
освещения.</p>
<p>В модели отражения Фонга отраженный свет представлен как сумма фонового, диффузного и зеркального отражений. В шейдерах за хранение параметров 
отраженного света отвечает переменная <code>varying vec3 vLightWeighting</code>. В вершинном шейдере мы находим эту сумму и затем передаем переменную 
во фрагментный шейдер для окончательной установки цвета фрагмента.</p>
<p>Все цвета для нахождения параметров отраженного света передаются через переменные <code>uniform vec3 uAmbientLightColor</code>, 
<code>uniform vec3 uDiffuseLightColor</code> и <code>uniform vec3 uSpecularLightColor</code>.</p>
<p>Также передаем в шейдер положение источника света через переменную <code>uniform vec3 uLightPosition</code>.</p>

<h3>Физический смысл модели Фонга и разбор кода шейдеров</h3>
<p>Первым делом нам надо модифицировать координаты вершины и ее нормаль, чтобы правильно провести вычисления по нахождению отражения света, 
поскольку на входе в шейдер и вершина, и нормаль пока не учитывают преобразования с матрицами - вращения, перемещения и т.д.:</p>
<pre class="brush:js;">
	// установка позиции наблюдателя сцены
    vec4 vertexPositionEye4 = uMVMatrix * vec4(aVertexPosition, 1.0);
    vec3 vertexPositionEye3 = vertexPositionEye4.xyz / vertexPositionEye4.w;
  
    // получаем вектор направления света
    vec3 lightDirection = normalize(uLightPosition - vertexPositionEye3);
    
    // получаем нормаль
    vec3 normal = normalize(uNMatrix * aVertexNormal);
</pre>
<p>Вершину преобразуем с помощью матрицы, для установки нормалей применяем матрицу нормалей, которую также устанавливаем в коде javascript. А также вычисляем 
вектор от вершины до источника света.</p>
<h4>Получение отражений света</h4>
<p>Фоновое отражение света (ambient light) представляет собой отражение при естественном освещении. Его можно выразить формулой <code>I = Ka*Ia</code>, где <code>Ka</code> - цветовые параметры материала в 
виде значений RGB, а <code>Ia</code> - это цвет фонового света также в виде значений RGB.</p>
<p>При диффузном отражении света (diffuse light) лучи отражаются под несколькими углами, а не под одним, как при зеркальном отражении. Диффузное отражение характерно прежде 
всего для неровных шершавых поверхностей.</p>
<p>Диффузное отражение света высчитывается по формуле <code>I = Kd *Id *max(cos θ, 0)</code>. Здесь кроме диффузного материала <code>Kd</code> и цвета освещения 
<code>Id</code> присутствует дополнительный параметр. Этот параметр учитывает направление направленного на поверхность луча. А угол <code>θ</code> 
как раз представляет собой угол между нормалью поверхности и вектором направления луча света. Наличие функции максимума, которая выбирает максимальное 
число из косинуса угла и нуля позволяет отсечь отрицательные значения и свести их к нулю.</p>
<p>Схематично диффузное отражение можно показать так:</p>
<img src="pics/8.3.png" alt="Диффузное отражение света" />
<p>Но что такое <code>cos θ</code>?  Это скалярное произведение векторов N (вектор нормали) и L (вектор, представляющий луч света). И, таким образом, 
зная эти вектора, мы можем рассчитать диффузное отражение (для определения скалярного произведения в языке шейдеров есть специальная функция <code>dot</code>):</p>
<pre class="brush:js;">
    // получаем скалярное произведение векторов нормали и направления света
    float diffuseLightDot = max(dot(normal, lightDirection), 0.0);
</pre>
<p>Затем получаем зеркальное отражение света (specular light). Подобное отражение характеризуется тем, что падающий луч света отражается под одним углом. 
Зеркальное отражение рассчитывается по формуле <code>I = K<sub>s</sub> * I<sub>s</sub> max(cos θ, 0)<sup>a</sup></code>. В данном случае 
<code>K<sub>s</sub></code> - материал, а <code>I<sub>s</sub></code> - цвет зеркального отражения. Угол <code>θ</code> здесь представляет угол между 
вектором, направленным от точки к наблюдателю, и вектором отражаемого луча. Степень <code>a</code> указывает на блеск материала.</p>
<p>Схематично формулу можно представить себе так:</p>
<img src="pics/8.4.png" alt="Зеркальное отражение света" />
<p>И опять же <code>cos θ</code> в данном случае это скалярное произведение векторов R (вектор отраженного луча) и V (вектор, направленный к наблюдателю). А, 
получив на предыдущем шаге векторы нормали и направления падающего луча, мы можем получить вектор луча отражения R и вычислить значение зеркального 
отражения: <code>R=2(L * N)*N-L</code>. Однако язык шейдеров имеет встроенную функцию <code>reflect</code>, которая позволяет найти вектор отраженного 
луча по нормали и направлению падающего света. Собственно эта функция и применяется.</p>
<p>Но поскольку при зеркальном отражении вектор луча падающего света направлен в противоположную сторону в отличие от вектора, который применяется 
при подсчете диффузного отражения света, поэтому мы используем знак минуса: <code>vec3 reflectionVector = normalize(reflect(-lightDirection, normal));</code></p>
<p>А затем применяем скалярное произведение и возводим в степень shininess. Параметр shininess задается произвольно: чем он выше, тем более 
блестящим будет казаться отблекс.</p>
<pre class="brush:js;">
    vec3 viewVectorEye = -normalize(vertexPositionEye3);
    
    float specularLightDot = max(dot(reflectionVector, viewVectorEye), 0.0);
    
    float specularLightParam = pow(specularLightDot, shininess);
</pre>
<p>И в конце мы собираем все световые значения и получаем общее значение отраженного света, которое затем передаем во фрагментный шейдер. 
А там применяем полученные значения к цветам текстуры: <code>gl_FragColor = vec4(vLightWeighting.rgb * texelColor.rgb, texelColor.a);</code>. 
И в итоге получаем имитацию освещения объекта.</p>
<p>В целях упрощения примера здесь не используются материалы, но далее мы их затронем, особой сложности они представляют, просто добавляются три дополнительные переменные. 
А в данном случае передаваемые цветовые значения отражений света уже можно представлять как произведение цвета освещения и цвета материала. Поэтому большой ошибки от неиспользования материалов здесь не будет.</p>
<p>Модель Фонга - не единственная модель отражения света, которая есть и которую можно использовать в WebGL. Существуют различные техники создания освещения. Однако она довольно популярная и позволяет 
учесть различные аспекты при освещении. Ну а теперь перейдем к основной программе на javascript.</p>
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


<div class="nav"><p><a href="8.1.php">Назад</a><a href="./">Содержание</a><a href="8.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 8.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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