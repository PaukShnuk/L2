<!DOCTYPE html>
<html >
<head>
<title>CSS3 | Переходы</title>
<meta charset="utf-8" />
<meta name="description" content="Переходы в HTML 5 и CSS 3, свойство transition, анимация свойств, настройка переходов">
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
<h2>Переходы</h2><div class="date">Последнее обновление: 01.05.2016</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Переход (transition) представляет анимацию от одного стиля к другому в течение определенного периода времени.</p>
<p>Для создания перехода необходимы прежде всего два набора свойств CSS: начальный стиль, который будет иметь элемент в начале перехода, и конечный стиль - результат перехода. 
Так, рассмотрим простейший переход:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Переход в CSS3&lt;/title&gt;
		&lt;style&gt;
			div{
				width: 100px;
				height: 100px;
				margin: 40px 30px;
				border: 1px solid #333;
				
				background-color: #ccc;
				transition-property: background-color;
				transition-duration: 2s;
			}
			div:hover{
				background-color: red;
			}
		&lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;div&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Итак, здесь анимируется свойство <code>background-color</code> элемента div. При наведении указателя мыши на элемент он будет менять цвет с серого на красный. 
А при увеении указателя мыши с пространства элемента будет возвращаться исходный цвет.</p>
<p>Чтобы указать свойство как анимируемое, его название передается свойству <span class="b">transition-property</span></p>
<pre class="brush:css;">transition-property: background-color;</pre>
<p>Вообще анимировать можно множество разных свойств, такие как color, background-color, border-color. Полный список свойств CSS, которые поддаются анимации, 
можно найти по адресу <a href="http://www.w3.org/TR/css3-transitions/#animatable-properties" rel="nofollow">www.w3.org/TR/css3-transitions/#animatable-properties</a></p>
<p>Далее идет установка времени перехода в секундах с помощью свойства <span class="b">transition-duration</span>:</p>
<pre class="brush:css;">transition-duration: 2s;</pre>
<p>Кроме секунд можно устанавливать значения в миллисекундах, например, 500 миллисекунд:</p>
<pre class="brush:css;">transition-duration: 500ms;</pre>
<p>И в конце нам надо определить инициатор действия и финальное значение анимируемого свойства background-color. Инициатор представляет действие, 
которое приводит к изменению одного стиля на другой. В CSS для запуска перехода можно применять псевдоклассы. Например, здесь для создания перехода используется стиль для 
псевдокласса <code>:hover</code>. То есть при наведении указателя мыши на элемент div, будет срабатывать переход.</p>
<p>Кроме псевдокласса <code>:hover</code> можно использовать и другие псевдоклассы, например, <code>:active</code> (ссылка в нажатом состоянии) или 
<code>:focus</code> (получение элементом фокуса).</p>
<p>Также для запуска перехода можно использовать код JavaScript.</p>
<h3>Анимация набора свойств</h3>
<p>При необходимости мы можем анимировать сразу несколько свойств CSS. Так, в выше приведенном примере изменим стили следующем образом:</p>
<pre class="brush:css;">
div{
	width: 100px;
	height: 100px;
	margin: 40px 30px;
	border: 1px solid #333;
	background-color: #ccc;
	
	transition-property: background-color, width, height, border-color;
	transition-duration: 2s;
}
div:hover{
	background-color: red;
	width: 120px;
	height: 120px;
	border-color: blue;
}
</pre>
<p>Здесь анимируются сразу четыре свойства. Причем анимация для них всех длится 2 секунды, но мы можем для каждого свойства задать свое время:</p>
<pre class="brush:css;">
transition-property: background-color, width, height, border-color;
transition-duration: 2s, 3s, 1s, 2s;
</pre>
<p>Подобно тому как в свойстве <code>transition-property</code> через запятую идет перечисление анимируемых свойств, в свойстве <code>transition-duration</code> 
идет перечисление через запятую временных периодов для анимации этих свойств. Причем сопоставление времени определенному свойству идет по позиции, то есть свойство 
<code>width</code> будет анимироваться 3 секунды.</p>
<p>Кроме перечисления через запятую всех анимируемых свойств мы можем просто указать ключевое слово <span class="b">all</span>:</p>
<pre class="brush:css;">
transition-property: all;
transition-duration: 2s;
</pre>
<p>Теперь будут анимироваться все необходимые свойства, которые меняют значения в стиле для псевдокласса <code>:hover</code>.</p>
<h3>Функции анимации</h3>
<p>Свойства <span class="b">transition-timing-function</span> позволяет контролировать скорость хода и выполнение анимации. То есть данное свойство отвечет за то, 
как и в какие моменты времени анимация будет ускоряться или замедляться.</p>
<p>В качестве значения это свойство может принимать одну из функций:</p>
<ul>
<li><p><span class="b">linear</span>: линейная функция плавности, изменение свойства происходит равномерно по времени</p></li>
<li><p><span class="b">ease</span>: функция плавности, при которой анимация ускоряется к середине и замедляется к концу, предоставляя более естественное изменение</p></li>
<li><p><span class="b">ease-in</span>: функция плавности, при которой происходит только ускорение в начале</p></li>
<li><p><span class="b">ease-out</span>: функция плавности, при которой происходит только ускорение в конце анимации</p></li>
<li><p><span class="b">ease-in-out</span>: функция плавности, при которой анимация ускоряется к середине и замедляется к концу, предоставляя более естественное изменение</p></li>
<li><p><span class="b">cubic-bezier</span>: для анимации применяется кубическая функция Безье</p></li>
</ul>
<p>Применим функцию <code>ease-in-out</code>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Переход в CSS3&lt;/title&gt;
		&lt;style&gt;
			div{
				width: 100px;
				height: 100px;
				margin: 40px 30px;
				border: 1px solid #333;
				
				background-color: #ccc;
				transition-property: background-color, width;
				transition-duration: 2s, 10s;
				transition-timing-function: ease-in-out;
			}
			div:hover{
				background-color: red;
				width: 200px;
			}
		&lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;div&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Для использования кубической Безье в функцию <code>cubic-bezier</code> необходимо передать ряд значений:</p>
<pre class="brush:css;">
transition-timing-function: cubic-bezier(.5, .6, .24, .18);
</pre>
<h3>Задержка перехода</h3>
<p>Свойство <span class="b">transition-delay</span> позволяет определить задержку перед выполнением перехода:</p>
<pre class="brush:css;">
transition-delay: 500ms;
</pre>
<p>Временной период также указывается в секундах (s) или миллисекундах (ms).</p>
<h3>Свойство transition</h3>
<p>Свойство <span class="b">transition</span> представляет сокращенную запись выше рассмотренных свойств. Например, следующее описание свойств:</p>
<pre class="brush:css;">
transition-property: background-color;
transition-duration: 3s;
transition-timing-function: ease-in-out;
transition-delay: 500ms;
</pre>
<p>Будет аналогично следующей записи:</p>
<pre class="brush:css;">
transition: background-color 3s ease-in-out 500ms;
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


<div class="nav"><p><a href="9.1.php">Назад</a><a href="./">Содержание</a><a href="9.3.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.1.php">Что такое HTML</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.2.php">Элементы и атрибуты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.3.php">Создание документа</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.4.php">Разновидности синтаксиса</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Элементы в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.5.php">Элемент head и метаданные веб-страницы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.1.php">Элементы группировки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.2.php">Заголовки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.3.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.4.php">Работа с изображениями</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.5.php">Списки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.6.php">Элемент details</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.7.php">Список определений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.8.php">Таблицы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.9.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.10.php">Элементы figure и figcaption</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.11.php">Фреймы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/3.1.php">Формы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.2.php">Элементы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.3.php">Кнопки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.4.php">Текстовые поля</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.5.php">Метки и автофокус</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.6.php">Элементы для ввода чисел</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.7.php">Флажки и переключатели</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.8.php">Элементы для ввода цвета, url, email, телефона</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.9.php">Элементы для ввода даты и времени</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.10.php">Отправка файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.11.php">Список select</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.12.php">Textarea</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.13.php">Валидация форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.14.php">Элементы fieldset и legend</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Семантическая структура страницы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/4.1.php">Элемент article</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.2.php">Элемент section</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.3.php">Элемент nav</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.4.php">Элементы header, footer и address</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.5.php">Элемент aside</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.6.php">Элемент main</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Основы CSS3. Селекторы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/5.1.php">Введение в стили</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.2.php">Селекторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.3.php">Селекторы потомков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.4.php">Селекторы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.8.php">Селекторы элементов одного уровня</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.5.php">Псевдоклассы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.11.php">Псевдоклассы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.12.php">Псевдоклассы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.6.php">Псевдоэлементы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.7.php">Селекторы атрибутов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.9.php">Наследование стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.10.php">Каскадность стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.13.php">Псевдоклассы :is() и :where()</a></span></li>
			</ul>
		</li>
		
		<li class="closed"><span class="folder">Глава 6. Основы CSS3. Свойства</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/6.1.php">Цвет в CSS</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.2.php">Стилизация шрифтов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.3.php">Внешние шрифты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.4.php">Высота шрифта</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.5.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.6.php">Стилизация абзацев</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.7.php">Стилизация списков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.8.php">Стилизация таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.9.php">Блочная модель</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.10.php">Внешние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.11.php">Внутренние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.12.php">Границы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.13.php">Размеры элементов. Box-sizing</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.14.php">Фон элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.15.php">Создание тени у элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.16.php">Контуры элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.17.php">Обтекание элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.18.php">Прокрутка элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.19.php">Линейный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.20.php">Радиальный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.21.php">Стилизация элемента details</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Создание макета страницы и верстка</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/8.1.php">Блочная верстка. Часть 1</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.2.php">Блочная верстка. Часть 2</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.3.php">Вложенные плавающие блоки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.4.php">Выравнивание столбцов по высоте</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.5.php">Свойство display</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.6.php">Создание панели навигации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.7.php">Выравнивание плавающих элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.8.php">Создание простейшего макета</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.9.php">Позиционирование</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.10.php">Фиксированное позиционирование</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Трансформации, переходы и анимации</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/9.1.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.2.php">Переходы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.3.php">Анимация</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Адаптивный дизайн</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/11.1.php">Введение в адаптивный дизайн</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.2.php">Метатег Viewport</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.3.php">Media Query в CSS</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Мультимедиа</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/7.1.php">Видео</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.2.php">Аудио</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.3.php">Media API. Управление видео из JavaScript</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Canvas</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/10.1.php">Доступ к canvas и рисование прямоугольников</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.9.php">Настройка рисования</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.2.php">Фоновые изображения</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.3.php">Создание градиента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.4.php">Рисование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.5.php">Рисование фигур</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.6.php">Рисование изображений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.7.php">Добавление теней</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.8.php">Редактирование пикселей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.10.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.11.php">Рисование мышью</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Flexbox</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/12.1.php">Что такое Flexbox. Flex Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.2.php">Направление flex-direction</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.3.php">flex-wrap</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.4.php">flex-flow. Порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.5.php">Выравнивание элементов. justify-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.6.php">Выравнивание элементов. align-items и align-self</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.7.php">Выравнивание строк и столбцов. align-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.8.php">Управление элементами. flex-basis, flex-shrink и flex-grow</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.9.php">Многоколоночный дизайн на Flexbox</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.10.php">Макет страницы на Flexbox</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 13. Grid Layout</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/13.1.php">Что такое Grid Layout. Grid Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.2.php">Строки и столбцы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.3.php">Функция repeat и свойство grid</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.4.php">Размеры строк и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.5.php">Отступы между столбцами и строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.6.php">Позиционирование элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.7.php">Наложение элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.8.php">Направление и порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.9.php">Именованные grid-линии</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.10.php">Именованные grid-линии и функция repeat</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.11.php">Области грида</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.12.php">Макет страницы в Grid Layout</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 14. Переменные в CSS</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/14.1.php">Стилизация с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.2.php">Создание тем CSS с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.3.php">Стили CSS как хранилище данных</a></span></li>
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