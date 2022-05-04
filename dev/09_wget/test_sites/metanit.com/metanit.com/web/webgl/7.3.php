<!DOCTYPE html>
<html >
<head>
<title>Настройка текстурирования</title>
<meta charset="utf-8" />
<meta name="description" content="Настройка параметров текстуры в WebGL с помощью метода gl.texParameteri, загрузка текстуры в GPU при помощи функции gl.texImage2D, особенности мип-текстурирования">
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
<h2>Настройка текстурирования</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<h3>Функция gl.texImage2D</h3>
<p>Данный метод загружает текстуру в GPU (графический процессор на видеокарте). Он имеет следующий синтаксис: 
<code>texImage2D(target, level, internalformat, format, type, elem)</code></p>
<ul>
<li><p><span class="bb">target</span>: указывает целевой объект для загрузки текстуры</p></li>
<li><p><span class="bb">level</span>: уровень множественного отображения текстуры</p></li>
<li><p><span class="bb">internalformat</span> и <span class="bb">format</span>: формат и внутренний формат. В WebGL должны иметь одно и то же 
значение. Так, формат <code>gl.RGBA</code>, к примеру, показывает, что для каждого текселя на текстуре должны 
быть установлены цветовые каналы для красного, зеленого и синего цветов, а также альфа-канал.</p></li>
<li><p><span class="bb">type</span>: тип данных, которых сохраняет все данные текселей текстуры. Например, <code>gl.UNSIGNED_BYTE</code> указывает, 
что для каждого цветового канала в <code>gl.RGBA</code> для сохранения данных выделяется один байт.</p></li>
<li><p><span class="bb">elem</span>: указывает на элемент, который содержит источник текстурирования. Это может быть элемент img или Image. 
Это также может быть элемент HTML5 video или canvas.</p></li>
</ul>
<p>Все возможные сочетания форматов и типов:</p>
<table class="tab">
<tr class="tabhead"><td><p>Формат</p></td><td><p>Тип</p></td></tr>
<tr><td><p>gl.RGBA</p></td><td><p>gl.UNSIGNED_BYTE</p></td></tr>
<tr><td><p>gl.RGB</p></td><td><p>gl.UNSIGNED_BYTE</p></td></tr>
<tr><td><p>gl.RGBA</p></td><td><p>gl.UNSIGNED_SHORT_4_4_4_4</p></td></tr>
<tr><td><p>gl.RGBA</p></td><td><p>gl.UNSIGNED_SHORT_5_5_5_1</p></td></tr>
<tr><td><p>gl.RGB</p></td><td><p>gl.UNSIGNED_SHORT_5_6_5</p></td></tr>
<tr><td><p>gl.LUMINANCE_ALPHA</p></td><td><p>gl.UNSIGNED_BYTE</p></td></tr>
<tr><td><p>gl.LUMINANCE</p></td><td><p>gl.UNSIGNED_BYTE</p></td></tr>
<tr><td><p>gl.ALPHA</p></td><td><p>gl.UNSIGNED_BYTE</p></td></tr>
</table>
<p>Я думаю, формат <code>gl.RGBA</code> понятен: каждый тексель текстуры имеет канал красного, зеленого и синего цветов, а также альфа-канал. 
Формат <code>gl.RGB</code> - то же самое, только без альфа-канала.</p>
<p>Формат <code>gl.LUMINANCE_ALPHA</code> имеет канал яркости и альфа-канал. И формат <code>gl.LUMINANCE</code> имеет только канал яркости, 
а формат <code>gl.ALPHA</code> - только альфа-канал.</p>
<p>Например, настройка <code>gl.texImage2D(gl.TEXTURE_2D, 0, gl.LUMINANCE_ALPHA, gl.LUMINANCE_ALPHA, gl.UNSIGNED_BYTE, image);</code> даст 
следующий эффект:</p>
<img src="pics/7.2.png" />
<p>Касательно типов тоже все просто. Тип <code>gl.UNSIGNED_BYTE</code> предоставляет по одному байту на каждый канал.</p> 
<p>Тип <code>gl.UNSIGNED_SHORT_4_4_4_4</code> предоставляет для каждого канала в формате RGBA по четыре байта.</p>
<p>Тип <code>gl.UNSIGNED_SHORT_5_5_5_1</code> предоставляет для каждого каналов красного, зеленого и синего цветов в формате RGBA по пять байт, 
а для альфа-канала - один байт.</p>
<p>И тип <code>gl.UNSIGNED_SHORT_5_6_5</code> предоставляет для каналов красного и синего цветов по пять байт и для зеленого цвета - шесть байт в формате RGB.</p>

<h3>Определение параметров текстуры</h3>
<p>Метод <code>gl.texParameteri()</code> позволяет определить параметры текстуры. Он имеет следующий формальный синтаксис: 
<code>texParameteri(target, pname, param)</code>. Сочетания параметров бывают разными и могут влиять на используемые значения.</p>
<ul>
<li><p><span class="bb">target</span>: в зависимости от направления текстурирования может принимать значения <code>gl.TEXTURE_2D</code>, 
либо <code>gl.TEXTURE_CUBE_MAP</code></p></li>
<li><p><span class="bb">pname</span>: указывает на фильтр, который мы хотим установить. Может принимать следующие значения: 
<code>gl.TEXTURE_MAG_FILTER</code>, <code>gl.TEXTURE_MIN_FILTER</code>, <code>gl.TEXTURE_WRAP_S</code> и <code>gl.TEXTURE_WRAP_T</code></p></li>
<li><p><span class="bb">param</span>: предоставляет значение для фильтра pname. То есть в выражении <code>gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.NEAREST);</code> 
фильтру текстуры <code>gl.TEXTURE_MAG_FILTER</code> устанавливается значение <code>gl.NEAREST</code>.</p>
<p>Значения, передаваемые параметром param, разнообразны и позволяют создавать определенные эффекты, которые далее мы подробно разберем.</p></li>
</ul>
<p>Зачем вообще нужна настройка этих параметров? В реальности текстуры имею определенные размеры, например, 128х128. Однако поверхность объекта, 
на которую накладывается текстура, может иметь как большие, так и меньшие размеры. Использование фильтра <i>gl.TEXTURE_MAG_FILTER</i> 
фактически помогает определить рендеринг текстуры, если она меньше размера объекта, то ее надо увеличить.</p>
<p>И фильтр <i>gl.TEXTURE_MIN_FILTER</i>, наоборот, указывает, каким образом надо проводить рендеринг, если размеры поверхности объекта меньше размеров 
текстуры.</p>
<h4>gl.NEAREST</h4>
<p>Данное значение позволяет семплеру взять из текстуры цвет того текселя, центр которого находится ближе всего к точке, с которой семплер берет цветовые значения.</p>
<p>Это значение может быть установлено как для фильтра gl.TEXTURE_MIN_FILTER, так и для фильтра gl.TEXTURE_MAG_FILTER.</p>
<h4>gl.LINEAR</h4>
<p>Данный фильтр возвращает средневзвешенное значение соседних четырех пикселей, центры которых находятся ближе всего к точке, с которой семплер берет цветовые значения. 
Это обеспечивает цветовую плавность, плавное смешивание цветов. В то же время, поскольку здесь для определения цвета нужны значения четырех пикселей, 
то и работать данный фильтр будет медленне, чем gl.NEAREST, но при этом более качественней.</p>
<p>Это значение может быть установлено как для фильтра gl.TEXTURE_MIN_FILTER, так и для фильтра gl.TEXTURE_MAG_FILTER.</p>
<h5>Сравнение двух фильтров</h5>
<img src="pics/7.7.png" />
<h4>Mip-текстурирование</h4>
<p>Концепция mip-текстурирования предполагает использование нескольких копий одной текстуры, но с разной детализацией. Это позволяет увеличивать качество отображения, 
например, при удалении от объекта.</p> 
<p>Mip-текстурирование в WebGL использует ряд фильтров. Подобные фильтры могут использоваться только в качестве значения 
для фильтра gl.TEXTURE_MIN_FILTER:</p>
<ul>
<li><p><span class="bb">gl.NEAREST_MIPMAP_NEAREST</span>: фильтр использует одну копию текстуры, которая наиболее подходит под размеры текстуры на экране. 
Выборка семплером значений происходит по алгоритму NEAREST. Самый быстрый способ текстурирования, но при этом менее качественный</p></li>
<li><p><span class="bb">gl.LINEAR_MIPMAP_NEAREST</span>: фильтр использует одну копию текстуры, которая наиболее подходит под размеры текстуры на экране. 
Выборка семплером значений происходит по алгоритму LINEAR</p></li>
<li><p><span class="bb">gl.NEAREST_MIPMAP_LINEAR</span>: фильтр использует две копии текстуры, которые наиболее подходят под размеры текстуры на экране. 
Выборка семплером значений происходит по алгоритму NEAREST. Выборка цвета пикселя идет параллельно сразу из двух копий, а финальное значение цвета 
представляет средневзвешенное значение двух выборок</p></li>
<li><p><span class="bb">gl.LINEAR_MIPMAP_LINEAR</span>: фильтр использует две копии текстуры, которые наиболее подходят под размеры текстуры на экране. 
Выборка семплером значений происходит по алгоритму LINEAR. Выборка цвета пикселя идет параллельно сразу из двух копий, а финальное значение цвета 
представляет средневзвешенное значение двух выборок. Наиболее медленный способ, но при этом дающий наибольшее качество</p></li>
</ul>
<p>Само использование этих значений для фильтров еще предполагает, что у нас будет использоваться mip-текстурирование. Перед этим нам надо 
сгенерировать мипмапы, то есть копии текстуры, с помощью метода <code>gl.generateMipmap(gl.TEXTURE_2D);</code>. Этот метод должен вызываться 
после метода gl.texImage2D(). То есть, возьмем из ранее использованный примеров текстурирования функцию <code>handleTextureLoaded</code> 
и изменим ее так, чтобы использовались мипмапы:</p>
<pre class="brush:js;">
function handleTextureLoaded(image, texture) {

	gl.bindTexture(gl.TEXTURE_2D, texture);
    gl.pixelStorei(gl.UNPACK_FLIP_Y_WEBGL, true);
    gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGBA, gl.RGBA, gl.UNSIGNED_BYTE, image);
	gl.generateMipmap(gl.TEXTURE_2D);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.NEAREST);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.LINEAR_MIPMAP_LINEAR);
}
</pre>
<p>Это даст нам следующий результат:</p>
<img src="pics/7.8.png" />
<p>Надо отметить, что мип-текстурирование имеет некоторые ограничения: используемые изображения должны иметь размеры, которые равны степени двойки. 
Например, 16px, 32px, 64px, 128px и т.д. При этом необязательно, чтобы высота и ширина были равные, главное, чтобы их значения были равны степени двойки.</p>

<h4>Texture wrapping</h4>
<p>Еще один способ текстурирования называется <b>texture wrapping</b>. Этот термин можно перевести как обертывание текстурой. То есть данный способ определяет 
поведение семплера при отборе цветов пикселей с текстуры, если заданные координаты текстуры находятся вне диапазона [0.0, 1.0].</p>
<p>В данном случае нам потребуется установить значения для фильтров <code>gl.TEXTURE_WRAP_S</code> и <code>gl.TEXTURE_WRAP_T</code>, которые 
отвечают за рендеринг текстуры вдоль осей s и t.</p>
<p>Например, у нас определены следующие координаты текстуры в буфере координат текстуры:</p>
<pre class="brush:js;">
// Координаты текстуры
var textureCoords = [
			0.0, 0.0,
			0.0, 2.0,
			2.0, 2.0,
			2.0, 0.0,
				
			0.0, 0.0,
			0.0, 2.0,
			2.0, 2.0,
			2.0, 0.0,
				
			0.0, 0.0,
			0.0, 2.0,
			2.0, 2.0,
			2.0, 0.0,
				
			0.0, 0.0,
			0.0, 2.0,
			2.0, 2.0,
			2.0, 0.0 
		];
</pre>
<p>А функция <code>handleTextureLoaded</code> выглядела бы следующим образом:</p>
<pre class="brush:js;">
 function handleTextureLoaded(image, texture) {

	gl.bindTexture(gl.TEXTURE_2D, texture);
    gl.pixelStorei(gl.UNPACK_FLIP_Y_WEBGL, true);
    gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGBA, gl.RGBA, gl.UNSIGNED_BYTE, image);
	gl.generateMipmap(gl.TEXTURE_2D);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.REPEAT);
	gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
}
</pre>
<p>То мы можем получить следующий результат:</p>
<img src="pics/7.9.png" />
<p>Для параметров мы можем использовать следующие значения:<p>
<ul>
<li><p><span class="bb">gl.CLAMP_TO_EDGE</span>: все координаты текстуры, которые больше 1 и меньше 0, сжимаются до диапазона [0, 1]</p></li>
<li><p><span class="bb">gl.REPEAT</span>: происходит повторение текстуры после выхода вне диапазона [0, 1]</p></li>
<li><p><span class="bb">gl.MIRRORED_REPEAT</span>: повторение текстуры с зеркальным отображением</p></li>
</ul>
<p>Можно комбинировать данные значения, как в вышеприведенном примере, где одновременно используются gl.REPEAT и gl.CLAMP_TO_EDGE.</p>
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


<div class="nav"><p><a href="7.2.php">Назад</a><a href="./">Содержание</a><a href="7.4.php">Вперед</a></p></div></div>
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